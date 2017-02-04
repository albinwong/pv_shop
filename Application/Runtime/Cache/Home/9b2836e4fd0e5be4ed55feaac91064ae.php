<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>全部品牌-汇盟通宝科技</title>
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
    
    
    <div class="banner banner_gdpp">
            <div class="banner_pic">
                <a class="swiper-slide-gdpp" href="安惠.html"><img class="baner_pic_gdpp" src="/work/pv_shop/Public/home/img/baner-1.jpg"/></a>
                <a class="swiper-slide-gdpp" href="安利.html"><img class="baner_pic_gdpp" src="/work/pv_shop/Public/home/img/Anli/banner.jpg"/></a>
                <a class="swiper-slide-gdpp" href="#"><img class="baner_pic_gdpp" src="/work/pv_shop/Public/home/img/baner-wm.jpg"/></a>
            </div>
            <ul class="num">
            </ul>
    </div>
    
    <div class="gdpp">
    	<?php if(is_array($res)): foreach($res as $key=>$vo): ?><a class="inlogo" href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($vo["id"]); ?>"><img class="inlg_pic" src="/work/pv_shop/Public/Uploads/cate/<?php echo ($vo["logo"]); ?>"/></a><?php endforeach; endif; ?>
        <a class="inlogo" href="/work/pv_shop/index.php/Home/Index/more"><img class="inlg_pic" src="/work/pv_shop/Public/home/img/logo-gd.png"/></a>
    </div>
    <div style="padding-top:100px;"></div>

    
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