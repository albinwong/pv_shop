<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>后台登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <!-- Bootstrap Core CSS -->
<link href="/work/Public/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/work/Public/admin/css/style.css" rel='stylesheet' type='text/css' />
</head>
<body id="login">
  <div class="login-logo"></div>
  <h2 class="form-heading">登录</h2>
  <div class="app-cam">
	  <form action="<?php echo U('admin/login/dologin');?>" method="post">
  		<input type="text" name="username" placeholder="请输入你的用户名"　value="username">
  		<input type="password" name="password" placeholder="请输入密码">
  		<div class="submit"><input type="submit" value="登录"></div>
	  </form>
  </div>
</body>
</html>