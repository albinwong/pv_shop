<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$cate = M('cates');
    	$res = $cate->where('pid=0')->select();
    	$view = M('view');
    	$lunbo = $view->select();
    	$this->assign('res',$res);
    	$this->assign('view',$lunbo);
        $this->display();
    }

    /**
     * 搜索页
     */
    public function search(){
    	// dump($_POST);exit;
    	$goods = M('goods');
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
    public function glist()
    {
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
    public function detail()
    {
    	// 根据id读取商品详细信息
    	$one = M('goods');
    	$goods = $one->where('id='.$_GET['id'])->find();
    	$this->assign('goods',$goods);
    	$this->display();
    }


    // 机票订单信息自动填充
 	public function ajax(){
 		// dump($_POST);exit;
 		$mod = M('goods');
    	$res = $mod->where('pid="'.$_POST['pid'].'"')->select();
    	// echo $mod->_SQL();
    	// dump($res);exit;
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
 	 * 购物车
 	 */
 	public function cart(){
 		$this->display();
 	}

 	/**
 	 * 我的
 	 */
 	public function info(){
 		$this->display();
 	}

}