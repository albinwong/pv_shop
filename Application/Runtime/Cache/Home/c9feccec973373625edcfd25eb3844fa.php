<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>查看物流</title>
<link href="/work/pv_shop/Public/home/css/style.css" rel="stylesheet">
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
</head>
<body>
    
	<div class="header">
    	<a class="fanhui" onClick="javascript:window.history.back()">
            <img class="hd_ltb" src="/work/pv_shop/Public/home/img/tb-1.png"/>
            <p class="hd_fh">返回</p>
        </a>
        <p class="hd_cpxq">查看物流</p>
        <img class="hd_r" src="/work/pv_shop/Public/home/img/tb-3.png"/>
    </div>

    
    <div class="wlcp">
        <p class="wlcp_p">物流状态：<span class="wlcp_p1">商家已发货</span></p>
        <p>承运来源：<span>韵达快递</span></p>
        <p>运单编号：<span><?php echo ($no); ?></span></p>
        <p>官方电话：<span class="wlcp_p3">暂无</span></p>
    </div>
    <!-- <div class="psy">
    	<img class="psy_pic1" src="/work/pv_shop/Public/home/img/psy.png"/>
        <p>派送员</p>
        <p class="psy_name">王春</p>
        <img class="psy_pic2" src="/work/pv_shop/Public/home/img/tb_dh.png"/>
    </div>
    <div class="clgg">
    	<img class="clgg_pic" src="/work/pv_shop/Public/home/img/tb_ck.png"/>
        <p>本数据由<span>菜鸟裹裹</span>提供</p>
    </div> -->
    <ul class="wljd">
        <?php if(is_array($data)): foreach($data as $key=>$res): ?><li>
            	<div class="lvdian"></div>
            	<p class="wljd_p1"><span><?php echo ($res["context"]); ?></span></p>
                <p class="wljd_p2"><span><?php echo ($res["time"]); ?></span></p>
            </li><?php endforeach; endif; ?>
    </ul>

    
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