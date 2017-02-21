<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class LoginController extends Controller {
  	//登陆表单
  	public function loadLogin(){
  		$this->display();
  	}

  	//验证操作
  	public function dologin(){
      $rules = array(
          array('username','require','用户名不能为空！'),
          array('password','require','密码不能为空！'), 
      );
      $User = M("Users"); // 实例化User对象
      if (!$User->validate($rules)->create()){
           // 如果创建失败 表示验证没有通过 输出错误提示信息
            $this->redirect('Admin/Login/loadLogin');
      }else{
           // echo '验证通过 可以进行其他数据操作';
         $name = $User->where('username="'.$_POST['username'].'"')->find();
         // dump($name);exit;
          if(!empty($name)){
            // 密码验证
           if(md5($_POST['password']) == $name['password']){
             //将用户信息存入session中
             $_SESSION['adminuser']=$name;
              // 查询这个用户的所有权限
             $mod = new Model();
             $res = $mod->query('select n.action,n.method from user_role as ur,role_node as rn,node as n where ur.uid='.$name['role'].' and ur.rid=rn.rid and rn.nid=n.id');
             $nodelist = array();
             $nodelist['index'][] = 'index';
             $nodelist['login'][] = 'outlogin';
             foreach($res as $k=>$v){
              if($v['method']=='add'){//如果有添加表单的权限 一定有执行添加的权限
                $nodelist[$v['action']][]='insert';
              }
              if($v['method']=='edit'){//如果有修改表单的权限 一定有执行修改的权限
                $nodelist[$v['action']][]='update';
              }
              $nodelist[$v['action']][]=$v['method'];
             }
            //将用户的权限放入session
            // dump($nodelist);exit;
            $_SESSION['nodelist']=$nodelist;    
            //跳转到后台的首页
            $this->redirect('Admin/index/index');
           }else{
            $this->redirect('Admin/Login/loadLogin');
           }
        }else{
          $this->redirect('Admin/Login/loadLogin');
        }
      }
    }

  	//退出
  	public function outlogin(){
  		unset($_SESSION['adminuser']);
  		$this->redirect('Admin/Login/loadLogin');
  	}
}