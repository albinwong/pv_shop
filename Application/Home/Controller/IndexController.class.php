<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function _empty(){
        redirect('/Home/index/index');
    }

    public function index(){
        // echo "<pre>";
        // dump($_SESSION['adminuser']);exit;
    	$cate = M('cates');
    	$res = $cate->where('pid=0')->select();
    	$view = M('view');
    	$lunbo = $view->select();
        $rec = M('recommend');
        foreach($res as $k=>$v){
            $res[$k]['tj'] = $rec->where("cate_id = ".$v['id']." and  status = 1")->limit(2)->order('id desc')->select();
        }
    	$this->assign('res',$res);
    	$this->assign('view',$lunbo);
        $this->display();
    }

    /**
     * 搜索页
     */
    public function search(){
        dump($_POST['keyword']);exit;
        // echo I('post.keyword');
    	$goods = M('goods');
        if(empty($_POST['keyword'])){

        }
    	$cates = $goods->where("gname like "."'%".$_POST['keyword']."%'")->select();
    	// echo $goods->_SQL();
    	// dump($cates);exit;
    	$this->assign('keyname',I('post.keyword'));
    	$this->assign('res',$cates);
    	$this->display();
    }

    /**
     * 商品列表页
     */
    public function glist(){
    	//读取分类
    	$cate = M('cates');
    	$pm_cate = $cate->where('id='.$_GET['id'])->find();
    	$cates = $cate->where("path like "."'%,".$_GET['id']."%'")->select();
    	$this->assign('zx',$pm_cate);
    	$this->assign('cate',$cates);
    	$this->display();

    }

    /**
     * 商品详情
     */
    public function detail($id = 0){
    	// 根据id读取商品详细信息
    	$one = M('goods');
    	$goods = $one->where('id='.$_GET['id'])->find();
    	$this->assign('goods',$goods);
    	$this->display();
    }



 	public function ajax(){
 		$mod = M('goods');
    	$res = $mod->where('pid="'.$_POST['pid'].'"')->select();
    	if(empty($res)){
    		echo 1;
    	}else{
    		echo json_encode($res);
    	}
 	}

 	/**
 	 * 更多品牌
 	 */
 	public function more(){
 		$cate = M('cates');
 		$res = $cate->where('pid=0')->select();
 		$this->assign('res',$res);
 		$this->display();
 	}

 	/**
 	 * 添加购物车
 	 */
 	public function addCart(){
        $goods = M('goods');
        //判断购物车中是否有这种商品
        if(empty($_SESSION['pv_cart'][$_GET['gid']])){
            $cart = $goods->where('id='.$_GET['gid'])->find();
            //1.如果没有,从数据库中取出信息
            $_SESSION['pv_cart'][$_GET['gid']] = $cart;
            
            //2.然后添加一项(数量)
            $_SESSION['pv_cart'][$_GET['gid']]['count'] = 1;
        }else{
            //如果购物车中有这种商品,那么数量自动加1
            $_SESSION['pv_cart'][$_GET['gid']]['count'] += 1;
        }
        // dump($_SESSION['cart']);exit;
        redirect("detail/id/".$_GET['gid'].".html",1,"<script>alert('商品添加成功');</script>");
 	}

    /**
     * 购物车显示
     */
    public function cart(){
        if(!empty($_SESSION['pv_cart'])){
            //购物车中有商品时
            $cate = M('pv_cates');
            foreach($_SESSION['pv_cart'] as $k=>$v){
                $cates = $cate->field('pid')->where('id='.$v['pid'])->select();
                foreach($cates as $kk=>$vv){
                    $cate_fid = $cate->field('id,name,logo')->where('id='.$vv['pid'])->find();
                    $_SESSION['pv_cart'][$k]['cate'] = $cate_fid;
                }
                $_SESSION['pv_cart'][$k]['zyhj'] = $v['count']*$v['fprice'];
                $_SESSION['pv_cart'][$k]['zjf'] = $v['count']*$v['pv'];
            }
            // dump($_SESSION['pv_cart']);exit;
            $this->assign('cart',$_SESSION['pv_cart']);
        }
        $this->display();
    }

    /**
     * 购物车结算
     */
    public function commit(){
        $addr = M('address');
        $addr_isdefault = $addr->where('user_id='.$_SESSION['adminuser']['id'].' and isdefault = 1')->find();
        $user_addr = $addr->where('user_id='.$_SESSION['adminuser']['id'].' and isdefault = 0')->select();
         
        foreach($_POST['dx'] as $k=>$v){
            $order[$v] = $_SESSION['pv_cart'][$v];
            // dump($_SESSION['pv_cart'][$v]);
            // dump($v);
        }
        $_SESSION['gwc']  = $_POST['dx'];
        $this->assign('addr',$addr_isdefault);
        $this->assign('addrs',$user_addr);
        $this->assign('order',$order);
        $this->display();
    }

    /**
     * 确认订单
     */
    public function doCommit(){
        // $date[] = $_POST['xjzj'];
        // dump($_POST);exit;
        $addr = M('address');
        $add = $addr->where('user_id='.$_SESSION['adminuser']['id'].' and isdefault = 1')->find();
        $add['uid'] = $add['user_id'];
        $add['rec'] = $add['name'];
        $add['tel'] = $add['number'];
        $add['addr'] = $add['detail'];
        unset($add['id']);
        unset($add['user_id']);
        unset($add['name']);
        unset($add['number']);
        unset($add['isdefault']);
        unset($add['detail']);
        $data = $add;
        $tmp = date('YmdHis').rand(1000,9999);
        //订单主表
        $data['oid'] = $tmp;
        $data['ormb'] = $_POST['xjzj'];//总现金
        $data['status'] = 0;//订单状态
        //$data['usmg'] = ;//买家留言
        $data['otime'] = time();
        $data['opv'] = $_POST['jfzs'];//总积分
        $order = M('orders');
        $res = $order->add($data);
        if($res){
            unset($data);
            //订单附属表
            foreach($_SESSION['gwc'] as $k=>$v){
                $data['oid'] = $tmp;
                $data['gid'] = $v;
                $data['buyprice'] = $_SESSION['pv_cart'][$v]['zyhj'];
                $data['buycnt'] = $_SESSION['pv_cart'][$v]['count'];
                $data['buypv'] = $_SESSION['pv_cart'][$v]['zjf'];
                $order_detail = M('order_detail');
                $res1 = $order_detail->add($data);
                if($res1){
                    unset($data);
                    $cnt = $_SESSION['pv_cart'][$v]['count'];//购买数量
                    $id = $_SESSION['pv_cart'][$v]['id'];//购买商品ID
                    $Model = new Model();// 实例化一个model对象 没有对应任何数据表
                    $res2 = $Model->execute("update goods set repertory = repertory - ".$cnt." where id = ".$id);
                    $Model = new Model();// 实例化一个model对象 没有对应任何数据表
                    $res3 = $Model->execute("update goods set sales = sales + ".$cnt." where id = ".$id);
                    if($res2 && $res3){
                        // echo 'success';
                        unset($_SESSION['pv_cart'][$v]);
                    }
                }
            }
        }
        if($res && $res1 && $res2 && $res3){
            $this->redirect("index/pay", array('cash' => $_POST['xjzj'],'pv'=>$_POST['jfzs']), 5, '支付跳转中...');
        }else{
        //     // echo "error";
            redirect('commit');
        }
    }

    /**
     * 支付页面
     */
    public function pay(){
        // dump($_GET);exit;
        $this->assign('res',$_GET);
        $this->display();
    }

    /**
     * 付款页面
     */
    public function doPay(){
        redirect('index');
        dump($_POST);
        echo '付款了';
    }



}