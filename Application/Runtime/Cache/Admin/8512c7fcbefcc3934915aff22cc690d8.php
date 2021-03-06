<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>订单详情页</title>
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
            
<style type="text/css">
	#order-info{border:1px solid red;}
</style>
	<div class="col-md-12 graphs">
	    <div class="xs">
	  		<h3>订单详情</h3>
			<div class="bs-example4" data-example-id="simple-responsive-table">
			<div class="bg-primary" style="padding:7px 20px 29px;">
	            <div class="pull-left">订单号: <?php echo ($res1["oid"]); ?></div>
	       		<div class="pull-right col-xs-offset-1">下单时间: <?php echo date('Y年m月d日 H:i:s',$res1['otime']);?> 
	       		</div>
	        </div>
			<div class="goods-total" style="border:solid 1px #ddd;">
				<ul class="list-unstyled" style="padding:10px">
					<li>
						<span class="text">客户姓名：</span><span class="txt"><?php echo ($res1["rec"]); ?></span>
					</li>
					<li>
						<span class="text">联系方式：</span><span class="txt"><?php echo ($res1["tel"]); ?></span>
					</li>
					<li>
						<span class="text">客户地址：</span><span class="txt"><?php echo ($res1["addr"]); ?></span>
					</li>
				</ul>
			</div>
			    <div class="table-responsive">
			      <table class="table table-bordered">
			        <thead>
			          <tr>
			            <th>商品图片</th>
			            <th>商品名称</th>
			            <th>商品规格</th>
			            <th>购买单价</th>
			            <th>数量</th>
			            <th>小计</th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php if(is_array($res)): foreach($res as $key=>$vo): ?><tr>
			            <td scope="row"><img src="/work/pv_shop/Public/Uploads/goods/<?php echo ($vo['goods']['pic']); ?>" alt=""></td>
			            <td><?php echo ($vo['goods']['gname']); ?></td>
			            <td><?php echo ($vo['goods']['size']); ?></td>
			            <td><?php echo ($vo['buyprice']); ?></td>
			            <td><?php echo ($vo['buycnt']); ?></td>
			            <td><?php echo number_format($vo['buyprice']*$vo['buycnt'],2);?></td>
			          </tr><?php endforeach; endif; ?>
			        </tbody>
			        	<td>买家留言</td>
			        	<td colspan="5"><?php echo ($res1["umsg"]); ?></td>
			        <tfoot>
			        </tfoot>
			      </table>
					<div class="goods-total pull-right">
						<ul class="list-unstyled">
							<li>
								<span class="text">商品数量：</span>
								<span class="txt"><?php echo count($res);?></span>
							</li>
							<li>
								<span class="text">商品总额：</span>
								<span class="txt">¥<?php echo ($res1["ormb"]); ?></span>
							</li>
							<li>
								<span class="text">运&#12288;&#12288;费：</span>
								<span class="txt">¥0.00</span>
							</li>
							<li class="ftx-01">
								<span class="text">实付总额：</span>
								<span class="txt count">¥<?php echo ($res1["ormb"]); ?></span>
							</li>
						</ul>
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