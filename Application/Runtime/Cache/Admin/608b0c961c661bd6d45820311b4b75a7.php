<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>商品添加</title>
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
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <div id="page-wrapper">
            
<script type="text/javascript" charset="utf-8" src="/work/Public/admin/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/work/Public/admin/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/work/Public/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
	<div class="graphs">
	    <div class="xs">
	  	    <h3>商品添加</h3>
	  	    <div class="tab-content">
				<div class="tab-pane active" id="horizontal-form">
					<form class="form-horizontal" action="/work/index.php/Admin/Goods/update"  enctype="multipart/form-data" method="post">
						<div class="form-group">
							<label for="selector1" class="col-sm-2 control-label">商品类别</label>
							<div class="col-sm-8">
								<select name="pid" id="selector1" class="form-control1">
									<option value="0">请选择:</option>
									<?php if(is_array($res2)): foreach($res2 as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>">&nbsp;<?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">商品名称</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入商品名称" type="text" name="gname" value="<?php echo ($res["gname"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">产品编号</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入商品编号" type="text" name="gid" value="<?php echo ($res["gid"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">产品规格</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入商品规格" type="text" name="size" value="<?php echo ($res["size"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">商品正价</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入商品正价" type="text" name="price" value="<?php echo ($res["price"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">商品优惠价</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入商品优惠价" type="text" name="fprice"  value="<?php echo ($res["fprice"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">积分价</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入商品优惠价" type="text" name="pv"  value="<?php echo ($res["pv"]); ?>">
							</div>
						</div>
						<div class="form-group">
					        <label for="txtarea1" class="col-sm-2 control-label">产品图片</label>
							<div class="col-sm-8">
						        <input name="pic" type="file" multiple><img src="/work/Public/Uploads/goods/<?php echo ($res["pic"]); ?>" alt="">
					        </div>
					    </div>
						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label">产品描述</label>
							<div class="col-sm-8">
								<script id="editor1" name="desc" type="text/plain" style="width:700px;height:100px;"><?php echo ($res["desc"]); ?></script>
							</div>
						</div>

						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label">产品特点</label>
							<div class="col-sm-8">
								<script id="editor2" name="special" type="text/plain" style="width:700px;height:100px;"><?php echo ($res["special"]); ?></script>
							</div>
						</div>
						<div class="form-group">
							<label for="txtarea1" class="col-sm-2 control-label">注意事项</label>
							<div class="col-sm-8">
								<script id="editor3" name="notice" type="text/plain" style="width:700px;height:100px;"><?php echo ($res["notice"]); ?></script>
							</div>
						</div>
					    <div class="form-group">
							<label for="radio" class="col-sm-2 control-label">商品状态</label>
							<div class="col-sm-8">
								<div class="radio-inline"><label><input type="radio" name="status" value="0" <?php if($res["status"] == 0): ?>checked<?php endif; ?>> 新品</label></div>
								<div class="radio-inline"><label><input type="radio" name="status" value="1" <?php if($res["status"] == 1): ?>checked<?php endif; ?>> 上架</label></div>
								<div class="radio-inline"><label><input type="radio" name="status" value="2" <?php if($res["status"] == 2): ?>checked<?php endif; ?>> 下架</label></div>
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">库存</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="请输入商品规格" type="text" name="repertory" value="<?php echo ($res["repertory"]); ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="focusedinput" class="col-sm-2 control-label">销量</label>
							<div class="col-sm-8">
								<input class="form-control1" id="focusedinput" placeholder="商品销量" type="text" name="sales" value="<?php echo ($res["sales"]); ?>">
							</div>
						</div>
					    <div class="form-group">
					    	<div class="col-sm-8 col-sm-offset-2">
					    		<input type="hidden" name="id" value="<?php echo ($res["id"]); ?>">
					    		<button class="btn btn-success" type="submit">提交</button>
					    		<button class="btn btn-warning" type="reset">重置</button>
					    	</div>
					    </div>
					</form>
				</div>
			</div>
	  	</div>
	</div>
<script type="text/javascript">
     var ue1 = UE.getEditor('editor1');
     var ue2 = UE.getEditor('editor2');
     var ue3 = UE.getEditor('editor3');
</script>

        </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="/work/Public/admin/js/bootstrap.min.js"></script>
</body>
</html>