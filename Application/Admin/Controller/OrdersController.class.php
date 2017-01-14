<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
class OrdersController extends CommonController {
	/**
	 * 订单列表页面
	 */
    public function index(){
    	$Order = M('orders');
    	// 实例化分页对象
   		$count = $Order->count();//获取表中数据条数
   		$size = C('PAGE_SIZE');//获取分页的大小
   		$page = new Page($count,$size);
   		// 设置分页样式
   		$page->setConfig('prev','上一页');
   		$page->setConfig('next','下一页');
   		$res = $Order->limit($page->firstRow,$page->listRows)->select();
   		// 分配变量
   		$this->assign('res',$res);
   		// 输出分页连接
   		$this->assign('page',$page->show());
        $this->display();
    }

    /**
     * 订单详情
     */
    public function detail($id){
    	$details = M('order_detail');
    	// $res = $details->join('orders on order_detail.oid=orders.oid')->where('orders.oid='.$id)->select();
    	$res = $details->where('oid='.$id)->select();
    	foreach($res as $k=>$v){
    		$goods = M('goods');
    		$res1 = $goods->where('id='.$v['gid'])->find();
    		$res[$k]['goods'] = $res1;
    	}
    	$Order = M('orders');
   		$res1 = $Order->find($id);
    	// echo $details->_SQL();
    	// dump($res1);exit;
    	$this->assign('res',$res);
    	$this->assign('res1',$res1);
    	$this->display();
    }


 	public function getName($url){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		$res = curl_exec($ch);
		curl_close($ch);
		return $res;
	}

	public function kuaidi($code){
		//运单编号
		// $code = '1601008884822';
		//获取公司的编号
		$url = 'http://www.kuaidi100.com/autonumber/autoComNum?text='.$code;

		//发送请求
		$res = $this->getName($url);

		$data = json_decode($res, true);

		$com = $data['auto'][0]['comCode'];

		//通过运单号 和 公司名称请求数据
		$url = 'http://www.kuaidi100.com/query?type='.$com.'&postid='.$code.'&id=1&valicode=&temp=0.9467048459143914';
		$res = $this->getName($url);
		$a = json_decode($res,TRUE);
		// dump($a['message']);exit;
		if($a['message']=='ok'){
			echo "<pre>";
			var_dump($a['data']);
			foreach ($a['data'] as $k => $v) {
				dump($v['time']);
			}
		}else{
			echo '单号不存在';
		}
	}
    
}