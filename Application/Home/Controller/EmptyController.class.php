<?php
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller {
    public function index(){
   		// echo '请求的'.CONTROLLER_NAME.'控制器不存在';
   		// redirect('/Home/index/index');
    }
    public function _empty(){
    	// echo '请求的'.ACTION_NAME.'方法不存在';
   		redirect('/Home/index/index');
    }

}