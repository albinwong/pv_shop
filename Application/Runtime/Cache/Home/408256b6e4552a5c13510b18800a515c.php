<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>付款页面</title>
<link href="/work/pv_shop/Public/home/css/style.css" rel="stylesheet">
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
</head>
<body>
    
	<div class="header">
    	<a class="fanhui" href="#" onclick="javascript:history.back();">
            <img class="hd_ltb" src="/work/pv_shop/Public/home/img/tb-1.png"/>
            <p class="hd_fh">返回</p>
        </a>
        <p class="hd_cpxq">汇盟收银</p>
        <a class="tzqbdd" href="全部订单.html">全部订单</a>
    </div>

    
    <div class="qrje">
    	<p class="ddje_p1">订单金额</p>
        <p class="ddje_p2">&yen;<?php echo ($res["cash"]); ?>+<?php echo ($res["pv"]); ?>pv</p>
    </div>
    
    <ul class="xzzffs">支付方式
    	<form action="/work/pv_shop/index.php/Home/Index/doPay" method="post">
    	<li>
            <img class="zffs_pic" src="/work/pv_shop/Public/home/img/Wode/待付款.png"/>
            <p>支付宝支付</p>
            <p class="zffs_p2">支付宝安全支付</p>
            <input type="radio" name="zffs" value="alipay" checked/>
        </li>
        <li>
            <img class="zffs_pic" src="/work/pv_shop/Public/home/img/Wode/待付款.png"/>
            <p>零钱加积分支付</p>
            <p class="zffs_p2">积分代你买单</p>
            <input type="radio" name="zffs" value="blance" />
        </li>
        <li>
            <br><br>
            <input type="hidden" name="cash" value="<?php echo ($res["cash"]); ?>">
            <input type="hidden" name="pv" value="<?php echo ($res["pv"]); ?>">
            <input type="submit" value="去付款">
        </li>
        </form>
    </ul>

    
        <div class="footer">
            <a class="ft_a" href="/work/pv_shop/index.php/Home/index/index"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-8.png"/><p class="ft_z">首页</p></a>
            <a class="ft_a" href="/work/pv_shop/index.php/Home/index/more"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-7.png"/><p class="ft_z">购物</p></a>
            <a class="ft_a" href="/work/pv_shop/index.php/Home/index/cart"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-6.png"/><p>购物车</p></a>
            <a class="ft_a" href="/work/pv_shop/index.php/Home/mine/info"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-5.png"/><p class="ft_z">我的</p></a>
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