<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($goods["gname"]); ?>(<?php echo ($goods["size"]); ?>)</title>
<link href="/work/Public/home/css/style.css" rel="stylesheet">
<link href="/work/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/Public/home/js/js.js"></script>
</head>
<body>
    
        <div class="header">
            <a class="fanhui_tb" href="#"><img class="hd_l" src="/work/Public/home/img/tb-1.png"/></a>
                <form class="hd_m" action="/work/index.php/Home/Index/search" method="post">
                    <input type="text" name="keyword" placeholder="请输入搜索内容">
                    <input type="submit" style="display:none;">
                </form>
            <img class="hd_r" src="/work/Public/home/img/tb-3.png"/>
        </div>
    
    
    <div class="pic"><img class="pic_pic" src="/work/Public/Uploads/goods/<?php echo ($goods["pic"]); ?>"/></div>
    <div class="ad_name">
        <p class="inad_name_t"><?php echo ($goods["gname"]); ?>(<?php echo ($goods["size"]); ?>)</p>
        <p class="inad_name_m">产品编号: <?php echo ($goods["gid"]); ?></p>
        <p class="inad_name_m">产品规格: <?php echo ($goods["size"]); ?></p>
        <p class="inad_name_bl">&yen;<?php echo ($goods["price"]); ?></p>
        <p class="inad_name_br">通粉优惠：&yen;<?php echo ($goods["fprice"]); ?>+<?php echo ($goods["pv"]); ?>PV</p>
    </div>
    <p class="ad_cpms">产品描述：</p>
    <div class="ad_cptd_u"><?php echo ($goods["desc"]); ?></div>
    <p class="ad_cptd">产品特点：</p>
    <div class="ad_cptd_u"><?php echo ($goods["special"]); ?></div>
    <p class="ad_cptd">注意事项：</p>
    <div class="ad_zysx_u ad_cptd_u"><?php echo ($goods["notice"]); ?></div>

    
        <div class="footer">
            <a class="ft_a" href="/work/index.php/Home/Index/index"><img class="ft_1" src="/work/Public/home/img/tb-8.png"/><p class="ft_z">首页</p></a>
            <a class="ft_a" href="/work/index.php/Home/Index/more"><img class="ft_1" src="/work/Public/home/img/tb-7.png"/><p class="ft_z">购物</p></a>
            <a class="ft_a" href="/work/index.php/Home/Index/cart"><img class="ft_1" src="/work/Public/home/img/tb-6.png"/><p>购物车</p></a>
            <a class="ft_a" href="/work/index.php/Home/Index/info"><img class="ft_1" src="/work/Public/home/img/tb-5.png"/><p class="ft_z">我的</p></a>
        </div>
    
</body>
</html>