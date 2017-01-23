<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>待付款</title>
<link href="/work/pv_shop/Public/home/css/style.css" rel="stylesheet">
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
</head>
<body>
    
	<div class="header">
    	<a class="fanhui" onClick="javascript:window.history.back()">
            <img class="hd_ltb" src="img/tb-1.png"/>
            <p class="hd_fh">返回</p>
        </a>
        <p class="hd_cpxq">我的</p>
        <img class="hd_r" src="img/tb-3.png"/>
    </div>

    
    <div class="wd_nav">
    	<a class="wd_nav_a" href="全部订单.html">全部订单</a>
        <a class="wd_nav_a wd_nav_active" href="待付款.html">待付款</a>
        <a class="wd_nav_a" href="待发货.html">待发货</a>
        <a class="wd_nav_a" href="待评价.html">待评价</a>
    </div>
    
    <ul class="wd_pp">
    	<li>
        	<div class="gwc_pp_t">
                <img class="gwc_pic" src="img/logo-al.png"/>
                <p class="gwc_p1">安利&gt;</p>
                <p class="gwc_p11">待付款</p>
            </div>
        	<ul class="gwc_sp">
            	<li>
                	<img class="gwc_pic_cp" src="img/Anli/安利产品详情页_03.jpg"/>
                    <div class="gwc_cp_xs">
                        <p class="gwc_p3">安利多种植物蛋白粉(770克)</p>
                        <p class="gwc_p4">&yen;560.00</p>
                        <p class="gwc_p5">&times;1</p>
                        <p class="gwc_p6">通粉优惠：&yen;400+160PV</p>
                    </div> 
                </li>
            </ul>
            <div class="wd_cp_gj">
            	<p class="wd_cp_gjp1">共1件商品</p>
                <p class="wd_cp_gjp2">合计：&yen;560（含运费：&yen;0.00）</p>
                <a class="wd_cp_fk" href="确认订单.html">付款</a>
            </div>
        </li>
        <li>
            <div class="gwc_pp_t">
                <img class="gwc_pic" src="img/logo-ah.png"/>
                <p class="gwc_p1">安惠&gt;</p>
                <p class="gwc_p11">待付款</p>
            </div>
        	<ul class="gwc_sp">
            	<li>
                	<img class="gwc_pic_cp" src="img/Anli/安利产品详情页_03.jpg"/>
                    <div class="gwc_cp_xs">
                        <p class="gwc_p3">安利多种植物蛋白粉(770克)</p>
                        <p class="gwc_p4">&yen;560.00</p>
                        <p class="gwc_p5">&times;1</p>
                        <p class="gwc_p6">通粉优惠：&yen;400+160PV</p>
                    </div>
                </li>
            </ul>
            <div class="wd_cp_gj">
            	<p class="wd_cp_gjp1">共1件商品</p>
                <p class="wd_cp_gjp2">合计：&yen;560（含运费：&yen;0.00）</p>
                <a class="wd_cp_fk" href="确认订单.html">付款</a>
            </div>
        </li>
    </ul>
    
    <div class="kong"></div>

    
        <div class="footer">
            <a class="ft_a" href="/work/pv_shop/index.php/Home/Index/index"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-8.png"/><p class="ft_z">首页</p></a>
            <a class="ft_a" href="/work/pv_shop/index.php/Home/Index/more"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-7.png"/><p class="ft_z">购物</p></a>
            <a class="ft_a" href="/work/pv_shop/index.php/Home/Index/cart"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-6.png"/><p>购物车</p></a>
            <a class="ft_a" href="/work/pv_shop/index.php/Home/Index/info"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-5.png"/><p class="ft_z">我的</p></a>
        </div>
    
</body>
<script type="text/javascript">
$(function(){
    $(".fanhui_tb").click(function(){
        window.history.go(-1);
        return false;
    });

});
</script>
</html>