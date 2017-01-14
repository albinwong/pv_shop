<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($keyname); ?>-商品搜索-汇盟通宝科技</title>
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
    
    
	<div class="kong"></div>
	<?php if(is_array($res)): foreach($res as $key=>$vo): ?><a class="inal_ad" href="/work/index.php/Home/Index/detail?id=<?php echo ($vo["id"]); ?>"><img class="inal_ad_pic" src="/work/Public/Uploads/goods/<?php echo ($vo["pic"]); ?>"/><p class="inal_ad_p1">安惠维舒饮固体饮料</p><p class="inal_ad_p2">&yen;<?php echo ($vo["price"]); ?></p><p class="inal_ad_p3">通粉优惠：&yen;300+98pv;</p></a>
    <hr/><?php endforeach; endif; ?>
	<?php if(is_array($res)): foreach($res as $key=>$vo): ?><a class="inal_ad" href="#"><img class="inal_ad_pic" src="/work/Public/Uploads/goods/<?php echo ($vo["pic"]); ?>"/><p class="inal_ad_p1">安惠维舒饮固体饮料</p><p class="inal_ad_p2">&yen;<?php echo ($vo["price"]); ?></p><p class="inal_ad_p3">通粉优惠：&yen;300+98pv;</p></a>
    <hr/><?php endforeach; endif; ?>
    <div class="kong"></div>

    
        <div class="footer">
            <a class="ft_a" href="/work/index.php/Home/Index/index"><img class="ft_1" src="/work/Public/home/img/tb-8.png"/><p class="ft_z">首页</p></a>
            <a class="ft_a" href="更多品牌.html"><img class="ft_1" src="/work/Public/home/img/tb-7.png"/><p class="ft_z">购物</p></a>
            <a class="ft_a" href="购物车.html"><img class="ft_1" src="/work/Public/home/img/tb-6.png"/><p>购物车</p></a>
            <a class="ft_a" href="我的.html"><img class="ft_1" src="/work/Public/home/img/tb-5.png"/><p class="ft_z">我的</p></a>
        </div>
    
</body>
</html>