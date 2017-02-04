<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的</title>
<link href="/work/pv_shop/Public/home/css/style.css" rel="stylesheet">
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
</head>
<body>
    
	<div class="header">
    	<p class="hd_gwc">我的</p>
        <img class="hd_r" src="/work/pv_shop/Public/home/img/tb-3.png"/>
    </div>

    
    <style type="text/css">
        .wd_dfh_ap_info{
            font-size:26px;
            color: #757575;
            text-align: center;
            width: 100%;
        }
    </style>
   <!--  /*["id"] => string(1) "1"
          ["username"] => string(10) "adminadmin"
          ["password"] => string(32) "e10adc3949ba59abbe56e057f20f883e"
          ["email"] => string(16) "albinwong@qq.com"
          ["pic"] => string(17) "586f53aec7c4c.png"
          ["address"] => string(7) "shaanxi"
          ["phone"] => string(11) "17865681111"
          ["regtime"] => string(10) "1479672142"
          ["role"] => string(1) "5"
          ["kd"] => string(16) "B9TcEupBU2jOyDtJ"*/ -->
    <div class="banner_wd">
    	<img class="baner_pic_wd" src="/work/pv_shop/Public/home/img/Wode/baner_02.jpg"/>
      <?php if(!empty($user['pic'])): ?><img class="baner_pic_wdtx" src="/work/pv_shop/Public/Uploads/user/<?php echo ($user['pic']); ?>"/>
        <?php else: ?><img class="baner_pic_wdtx" src="/work/pv_shop/Public/Uploads/user/588803348a17a.png"/><?php endif; ?>
        <p class="banner_wd_name">汇盟通宝：<?php echo ($user["phone"]); ?></p>
    </div>
    
    <div class="wd_wddd">我的订单<p class="inwd_wddd"><a href="/work/pv_shop/index.php/Home/Index/allOrder">查看全部订单</a>&gt;</p></div>
    
    <div class="wd_dfh">
    	<a class="wd_dfh_a" href="/work/pv_shop/index.php/Home/Index/waitPay"><img class="wd_dfh_apic" src="/work/pv_shop/Public/home/img/Wode/待付款.png"/><p class="wd_dfh_ap_info">待付款</p></a>
        <a class="wd_dfh_a" href="/work/pv_shop/index.php/Home/Index/send"><img class="wd_dfh_apic" src="/work/pv_shop/Public/home/img/Wode/待发货.png"/><p class="wd_dfh_ap_info">待发货</p></a>
        <a class="wd_dfh_a" href="/work/pv_shop/index.php/Home/Index/rec"><img class="wd_dfh_apic" src="/work/pv_shop/Public/home/img/Wode/待收货.png"/><p class="wd_dfh_ap_info">待收货</p></a>
    </div>
    
    <div class="wd_jf">我的积分<p class="wd_jf_pic">1000</p></div>
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