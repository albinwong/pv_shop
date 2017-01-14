<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
  	public function _initialize(){
    // echo '执行调用<br>';
    //登陆检测
    if(empty($_SESSION['adminuser'])){//没有登陆
      $this->redirect('admin/login/loadLogin');
    } 

    //获取当前url中的控制器和方法名 --》session 中的权限数组
    // echo CONTROLLER_NAME.'---'.ACTION_NAME;
    $nodelist=$_SESSION['nodelist'];
    // // var_dump($nodelist);
    if(!(isset($nodelist[strtolower(CONTROLLER_NAME)]) && in_array(strtolower(ACTION_NAME),$nodelist[strtolower(CONTROLLER_NAME)]))){
        $this->error('<script type="text/javascript">alert("权限不足")</script>',U('admin/index/index'),0);
    }
  }
}