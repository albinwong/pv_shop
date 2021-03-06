<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>用户修改</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/work/pv_shop/Public/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/work/pv_shop/Public/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/work/pv_shop/Public/admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/work/pv_shop/Public/admin/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/work/pv_shop/Public/admin/js/jquery.min.js"></script>
<!-- Nav CSS -->
<link href="/work/pv_shop/Public/admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/work/pv_shop/Public/admin/js/metisMenu.min.js"></script>
<script src="/work/pv_shop/Public/admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/work/pv_shop/Public/admin/js/d3.v3.js"></script>
<script src="/work/pv_shop/Public/admin/js/rickshaw.js"></script>
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
                <a class="navbar-brand" href="index.html">积分商城商品后台管理</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
			    <li class="dropdown">
	        		<a href="<?php echo U('admin/login/outlogin');?>" style="color:red;"><i class="fa fa-lock"></i> 退出</a>
	      		</li>
			</ul>
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
                        <li>
                            <a href="#"><i class="fa fa-check-square-o nav_icon"></i>推荐管理<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo U('admin/recommend/index');?>">推荐列表</a>
                                </li>
                                <li>
                                    <a href="<?php echo U('admin/recommend/add');?>">添加推荐</a>
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
					<form class="form-horizontal" action="/work/pv_shop/index.php/Admin/User/update"  enctype="multipart/form-data" method="post">
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">用户名</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入用户名" type="text" name="username" value="<?php echo ($vo["username"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label">邮箱</label>
							<div class="col-sm-8">
								<input class="form-control1" id="inputPassword" placeholder="Password" type="email" name="email" value="<?php echo ($vo["email"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label">手机号码</label>
							<div class="col-sm-8">
								<input class="form-control1" id="inputPassword" placeholder="请输入手机号码" type="text" name="phone" value="<?php echo ($vo["phone"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">权限</label>
							<div class="col-sm-8">
								<select name="role" id="selector1" class="form-control1">
									<option value="0">未激活</option>
									<option value="1">管理员</option>
									<option value="2">普通会员</option>
								</select>
							</div>
						</div>
						<div class="form-group">
					        <label for="txtarea1" class="col-sm-2 control-label">头像</label>
							<div class="col-sm-8">
						        <input type="file" name="pic">
						        <img src="/work/pv_shop/Public/Uploads/user/<?php echo ($vo['pic']); ?>" style="width:50px;" alt="">
					        </div>
					    </div>
					    <div class="form-group">
					       <div class="col-sm-8 col-sm-offset-2">
					       	<input type="hidden" value="<?php echo ($vo["id"]); ?>" name="id">
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
    <script src="/work/pv_shop/Public/admin/js/bootstrap.min.js"></script>
</body>
</html>