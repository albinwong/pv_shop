<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class MineController extends Controller {
    public function _empty(){
        redirect('/Home/index/index');
    }


    /**
     * 我的
     */
    public function info(){
        // dump($_SESSION['adminuser']);exit;
        // if(!empty($_SESSION['adminuser'])){
        //     $user = M('users');
        // }
        $this->assign('user',$_SESSION['adminuser']);
        $this->display();
    }

    /**
     * 全部订单
     */
    public function allOrder(){
        $order = M('orders');
        $res = $order->where('uid='.$_SESSION['adminuser']['id'])->select();
        foreach($res as $k=>$v){
            $orders =M('order_detail');
            $res[$k]['goods'] = $orders->join('orders on order_detail.oid = orders.oid')->where('orders.oid='.$v['oid'])->order('orders.otime desc')->select();
            foreach($res[$k]['goods'] as $kk=>$vv){
                $good = M('goods');
                $res[$k]['goods'][$kk] = $good->join('order_detail on goods.id = order_detail.gid')->where('goods.id='.$vv['gid'].' and order_detail.oid='.$v['oid'])->find();
                $res[$k]['zj'] += $res[$k]['goods'][$kk]['buycnt'];
            }
        }
        $this->assign('order',$res);
        $this->display();
    }

    /**
     * 待付款
     */
    public function waitPay(){
        //状态=0;
        $order = M('orders');
        $data['uid'] = $_SESSION['adminuser']['id'];
        $data['status'] = 0;
        $res = $order->where($data)->select();
        foreach($res as $k=>$v){
            $orders = M('order_detail');
            $res[$k]['goods'] = $orders->join('orders on order_detail.oid = orders.oid')->where('orders.oid='.$v['oid'])->select();
            foreach($res[$k]['goods'] as $kk=>$vv){
                $good = M('goods');
                $res[$k]['goods'][$kk] = $good->join('order_detail on goods.id = order_detail.gid')->where('goods.id='.$vv['gid'].' and order_detail.oid='.$v['oid'])->find();
                $res[$k]['zj'] += $res[$k]['goods'][$kk]['buycnt'];
            }
        }
        $this->assign('order',$res);
        $this->display();
    }

    /**
     * 待发货 status=1
     */
    public function send(){
       $order = M('orders');
        $data['uid'] = $_SESSION['adminuser']['id'];
        $data['status'] = 1;
        $res = $order->where($data)->select();
        foreach($res as $k=>$v){
            $orders = M('order_detail');
            $res[$k]['goods'] = $orders->join('orders on order_detail.oid = orders.oid')->where('orders.oid='.$v['oid'])->select();
            foreach($res[$k]['goods'] as $kk=>$vv){
                $good = M('goods');
                $res[$k]['goods'][$kk] = $good->join('order_detail on goods.id = order_detail.gid')->where('goods.id='.$vv['gid'].' and order_detail.oid='.$v['oid'])->find();
                $res[$k]['zj'] += $res[$k]['goods'][$kk]['buycnt'];
            }
        }
        $this->assign('order',$res);
        $this->display();
    }

    /**
     * 待收货 status =2
     */
    public function rec(){
        $order = M('orders');
        $data['uid'] = $_SESSION['adminuser']['id'];
        $data['status'] = 2;
        $res = $order->where($data)->select();
        foreach($res as $k=>$v){
            $orders = M('order_detail');
            $res[$k]['goods'] = $orders->join('orders on order_detail.oid = orders.oid')->where('orders.oid='.$v['oid'])->select();
            foreach($res[$k]['goods'] as $kk=>$vv){
                $good = M('goods');
                $res[$k]['goods'][$kk] = $good->join('order_detail on goods.id = order_detail.gid')->where('goods.id='.$vv['gid'].' and order_detail.oid='.$v['oid'])->find();
                $res[$k]['zj'] += $res[$k]['goods'][$kk]['buycnt'];
            }
        }
        $this->assign('order',$res);
        $this->display();
    }

    private function getName($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }

    /**
     * 查看物流
     */
    public function trade(){
        //运单编号
        $code = '1601008884822';
        // dump($code);exit;
        //获取公司的编号
        $url = 'http://www.kuaidi100.com/autonumber/autoComNum?text='.$code;

        //发送请求
        $res = $this->getName($url);
        // dump($res);

        $data = json_decode($res, true);

        $com = $data['auto'][0]['comCode'];

        //通过运单号 和 公司名称请求数据
        $url = 'http://www.kuaidi100.com/query?type='.$com.'&postid='.$code.'&id=1&valicode=&temp=0.9467048459143914';
        $res = $this->getName($url);
        $a = json_decode($res,TRUE);
        $trade_res = [];
        if($a['message']=='ok'){
            $this->assign('no',$code);
            $this->assign('data',$a['data']);
        }else{
            echo '单号不存在';
        }
        $this->display();
    }

    /**
     * 确认收货
     */
    public function orderStatus(){
        $mod = M('orders');
        $data['oid'] = $_POST['oid'];
        $data['status'] = 4;
        $res = $mod->save($data);
        if($res){
            echo 1;
        }else{
            return false;
        }
    }
}