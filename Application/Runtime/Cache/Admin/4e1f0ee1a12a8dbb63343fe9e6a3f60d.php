<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>用户添加</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/work/Public/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/work/Public/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/work/Public/admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/work/Public/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/work/Public/admin/js/jquery.min.js"></script>
<!-- Nav CSS -->
<link href="/work/Public/admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/work/Public/admin/js/metisMenu.min.js"></script>
<script src="/work/Public/admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/work/Public/admin/js/d3.v3.js"></script>
<script src="/work/Public/admin/js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">XX商城后台管理</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comments-o"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/work/Public/admin/images/1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/work/Public/admin/images/2.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/work/Public/admin/images/3.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/work/Public/admin/images/4.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/work/Public/admin/images/5.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="#">
								<img src="/work/Public/admin/images/pic1.png" alt=""/>
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
			    <li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="/work/Public/admin/images/1.png"><span class="badge">9</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li class="m_2"><a href="#"><i class="fa fa-user"></i> Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li class="m_2"><a href="#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li class="m_2"><a href="#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<form class="navbar-form navbar-right">
              <input type="text" class="form-control" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
            </form>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-dashboard fa-fw nav_icon"></i>后台管理</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-indent nav_icon"></i>用户管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('admin/user/index');?>">用户列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('admin/user/add');?>">添加用户</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>分类管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('admin/cate/index');?>">分类列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('admin/cate/adds');?>">添加分类</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-envelope nav_icon"></i>商品管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('admin/goods/index');?>">商品列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('admin/goods/add');?>">添加商品</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>订单管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('admin/orders/index');?>">订单列表</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>轮播管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('admin/view/index');?>">轮播列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('admin/view/add');?>">添加轮播</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            
	<div class="graphs">
	    <div class="xs">
	  	    <h3>用户添加</h3>
	  	    <div class="tab-content">
				<div class="tab-pane active" id="horizontal-form">
					<form class="form-horizontal" action="/work/index.php/Admin/User/insert" enctype="multipart/form-data" method="post">
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">用户名</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入用户名" type="text" name="username">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-sm-2 control-label">密码</label>
							<div class="col-sm-8">
								<input class="form-control1" id="inputPassword" placeholder="请输入密码" type="password" name="password">
							</div>
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-sm-2 control-label">确认密码</label>
							<div class="col-sm-8">
								<input class="form-control1" id="inputPassword" placeholder="请再次输入密码" type="password" name="repassword">
							</div>
						</div>
						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label">邮箱</label>
							<div class="col-sm-8">
								<input class="form-control1" id="inputPassword" placeholder="Password" type="email" name="email">
							</div>
						</div>
						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label">手机号码</label>
							<div class="col-sm-8">
								<input class="form-control1" id="inputPassword" placeholder="请输入手机号码" type="text" name="phone">
							</div>
						</div>
						<div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">权限</label>
							<div class="col-sm-8">
								<select name="role" id="selector1" class="form-control1">
									<option value="1">普通员工</option>
									<option value="2" <?php if($_SESSION['adminuser']['role'] > 3): ?>disabled<?php endif; ?>>主管</option>
									<option value="3" <?php if($_SESSION['adminuser']['role'] > 4): ?>disabled<?php endif; ?>>经理</option>
									<option value="4" <?php if($_SESSION['adminuser']['role'] > 5): ?>disabled<?php endif; ?>>管理员</option>
									<option value="5" <?php if($_SESSION['adminuser']['role'] != 5): ?>disabled<?php endif; ?>>超级管理员</option>
								</select>
							</div>
						</div>
						<div class="form-group">
					        <label for="txtarea1" class="col-sm-2 control-label">头像</label>
							<div class="col-sm-8">
						        <input type="file" name="pic">
					        </div>
					    </div>
					    <div class="form-group">
					       <div class="col-sm-8 col-sm-offset-2">
							<input type="submit" value="提交">
							<input type="reset" value="重置">
							</div>
					    </div>
					</form>
				</div>
			</div>
	  	</div>
	</div>

        </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="/work/Public/admin/js/bootstrap.min.js"></script>
</body>
</html>