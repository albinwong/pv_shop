<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php if(!empty($keyname)): echo ($keyname); else: ?>所有商品<?php endif; ?>-商品搜索-汇盟通宝科技</title>
<link href="/work/pv_shop/Public/home/css/style.css" rel="stylesheet">
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
</head>
<body>
    
        <div class="header">
            <a class="fanhui_tb" href="/work/pv_shop/index.php/Home/Index/index"><img class="hd_l" src="/work/pv_shop/Public/home/img/tb-1.png"/></a>
                <form class="hd_m" action="/work/pv_shop/index.php/Home/Index/search" method="post">
                    <input type="text" name="keyword" placeholder="请输入搜索内容">
                    <input type="submit" style="display:none;">
                </form>
            <img class="hd_r" src="/work/pv_shop/Public/home/img/tb-3.png"/>
        </div>
    
    
	<div class="kong"></div>
	<?php if(!empty($res)): if(is_array($res)): foreach($res as $key=>$vo): ?><a class="inal_ad" href="/work/pv_shop/index.php/Home/Index/detail?id=<?php echo ($vo["id"]); ?>"><img class="inal_ad_pic" src="/work/pv_shop/Public/Uploads/goods/<?php echo ($vo["pic"]); ?>"/><p class="inal_ad_p1"><?php echo ($vo["gname"]); ?>(<?php echo ($vo["size"]); ?>)</p><p class="inal_ad_p2">&yen;<?php echo ($vo["price"]); ?></p><p class="inal_ad_p3">通粉优惠：&yen;<?php echo ($vo["fprice"]); ?>+<?php echo ($vo["pv"]); ?>pv;</p></a>
    <hr/><?php endforeach; endif; ?>
    <div class="kong"></div>
    <?php else: ?><div style="font-size:22px;padding:20px;"><center>暂无商品</center></div><?php endif; ?>

    
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