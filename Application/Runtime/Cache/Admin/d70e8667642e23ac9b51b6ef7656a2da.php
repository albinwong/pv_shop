<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>订单列表页</title>
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
                <a class="navbar-brand" href="index.html">直销商城后台管理</a>
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
            
	<div class="col-md-12 graphs">
	    <div class="xs">
	  		<h3>订单列表</h3>
			<div class="bs-example4" data-example-id="simple-responsive-table">
			    <div class="table-responsive">
			      <table class="table table-bordered">
			        <thead>
			          <tr>
			            <th>订单号</th>
			            <th>收货人</th>
			            <th>联系电话</th>
			            <th>订单时间</th>
			            <th>订单状态</th>
			            <th>操作</th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php if(is_array($res)): foreach($res as $key=>$vo): ?><tr>
			            <td scope="row"><?php echo ($vo['oid']); ?></td>
			            <td><?php echo ($vo['rec']); ?></td>
			            <td><?php echo ($vo['tel']); ?></td>
			            <td><?php echo date('Y年m月d日 H:i:s',$vo['otime']);?></td>
			            <td><?php echo (getorderstatus($vo['status'])); ?></td>
			            <td>
							<a href="<?php echo U('admin/orders/detail',array('id'=>$vo['oid']));?>">订单详情</a>
						</td>
			          </tr><?php endforeach; endif; ?>
			        </tbody>
			      </table>
			      <div style="float:right;">
			      	<?php echo ($page); ?>
			      </div>
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