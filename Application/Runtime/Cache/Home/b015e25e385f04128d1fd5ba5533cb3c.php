<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
<link href="/work/pv_shop/Public/home/css/Throughsetting.css" type="text/css" rel="stylesheet"/>
<link href="/work/pv_shop/Public/home/css/index.css" type="text/css" rel="stylesheet"/>
<link href="/work/pv_shop/Public/home/css/weui.css" type="text/css" rel="stylesheet"/>
<link href="/work/pv_shop/Public/home/css/order.css" type="text/css" rel="stylesheet" />
<link href="/work/pv_shop/Public/home/css/common.css" type="text/css" rel="stylesheet" />
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet" />
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
<script src="/work/pv_shop/Public/home/js/order.js" type="text/javascript"></script>
</head>
<body>
	
	<header class="weui_cell_hd" style="background: #829a2e; text-align:center; color:#FFF; z-index:2;">
	    	我的
            <div class="pull-right" style="position:fixed; top:0px; font-size:1.1rem; right:3%;">
	            <img style="margin-top:12px;" src="/work/pv_shop/Public/home/img/tb-3.png" alt="" />
	        </div>
	</header>

    
    
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
<div class="weui_cell_hd" style="margin-top:50px; margin-bottom:100px;">
          
    <div class="banner_wd">
    	<img class="baner_pic_wd" src="/work/pv_shop/Public/home/img/Wode/baner_02.jpg"/>
      <?php if(!empty($user['pic'])): ?><img class="baner_pic_wdtx" src="/work/pv_shop/Public/Uploads/user/<?php echo ($user['pic']); ?>"/>
        <?php else: ?><img class="baner_pic_wdtx" src="/work/pv_shop/Public/Uploads/user/588803348a17a.png"/><?php endif; ?>
        <p class="banner_wd_name">汇盟通宝：<?php echo ($user["phone"]); ?></p>
    </div>
    
    <div class="wd_wddd">我的订单<p class="inwd_wddd"><a href="/work/pv_shop/index.php/Home/Mine/allOrder">查看全部订单</a>&gt;</p></div>
    
    <div class="weui_navbar" style="position:relative; margin-top:10px;">
    	<a class="weui_navbar_item" href="/work/pv_shop/index.php/Home/Mine/waitPay">
            <p class="wd_dfh_apic">
            	<img class="wd_dfh_apic" src="/work/pv_shop/Public/home/img/Wode/waitpay.png"/>
            </p>
            <p class="wd_dfh_ap_info">待付款</p>
        </a>
        <a class="weui_navbar_item" href="/work/pv_shop/index.php/Home/Mine/send">
            <p class="wd_dfh_apic">
            	<img class="wd_dfh_apic" src="/work/pv_shop/Public/home/img/Wode/send.png"/>
            </p>
            <p class="wd_dfh_ap_info">待发货</p>
        </a>
        <a class="weui_navbar_item" href="/work/pv_shop/index.php/Home/Mine/rec">
            <p class="wd_dfh_apic">
            	<img class="wd_dfh_apic" src="/work/pv_shop/Public/home/img/Wode/rec.png"/>
            </p>
            <p class="wd_dfh_ap_info">待收货</p>
        </a>
    </div>
    
    <div class="wd_jf">我的积分<p class="wd_jf_pic">1000</p></div>
    <div class="kong"></div>
    
</div>


    
    
        <div class="weui_tabbar" style="background: #829a2e; position: fixed; bottom: 0px; z-index: 3;">
            <a href="/work/pv_shop/index.php/Home/Index/index" class="weui_tabbar_item weui_bar_item_on">
                <div class="weui_tabbar_icon">
                    <img src="/work/pv_shop/Public/home/img/tb-8.png" alt=""/>
                </div>
                <p class="weui_tabbar_label" style="color: #ffffff;">首页</p>
            </a>
            <a href="/work/pv_shop/index.php/Home/Index/more" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/work/pv_shop/Public/home/img/tb-7.png" alt=""/>
                </div>
                <p class="weui_tabbar_label" style="color: #ffffff;">品牌</p>
            </a>
            <a href="/work/pv_shop/index.php/Home/Index/cart" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/work/pv_shop/Public/home/img/tb-6.png" alt=""/>
                </div>
                <p class="weui_tabbar_label" style="color: #ffffff;">购物车</p>
            </a>
            <a href="/work/pv_shop/index.php/Home/Mine/info" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/work/pv_shop/Public/home/img/tb-5.png" alt=""/>
                </div>
                <p class="weui_tabbar_label" style="color: #ffffff;">我的</p>
            </a>
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