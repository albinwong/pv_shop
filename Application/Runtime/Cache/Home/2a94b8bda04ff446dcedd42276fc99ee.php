<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>汇盟通宝科技</title>
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
    
    
    <div class="banner">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                <?php if(is_array($view)): foreach($view as $key=>$lb): if($lb["status"] == 0): ?><a class="swiper-slide" href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($lb["cate_id"]); ?>" style="background-image:url(/work/pv_shop/Public/Uploads/banners/<?php echo ($lb["pic"]); ?>)"></a><?php endif; endforeach; endif; ?>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <?php if(is_array($view)): foreach($view as $key=>$lb): if($lb["status"] == 0): ?><div class="swiper-slide" style="background-image:url(/work/pv_shop/Public/Uploads/banners/<?php echo ($lb["pic"]); ?>)"></div><?php endif; endforeach; endif; ?>
            </div>
        </div>
    </div>
    <div class="logo">
        <?php if(is_array($res)): foreach($res as $key=>$img): ?><a class="inlogo" href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($img["id"]); ?>"><img class="inlg_pic" src="/work/pv_shop/Public/Uploads/cate/<?php echo ($img["logo"]); ?>"/></a><?php endforeach; endif; ?>
        <a class="inlogo" href="#"><img class="inlg_pic" src="/work/pv_shop/Public/home/img/logo-gd.png"/></a>
    </div>
    <?php if(is_array($res)): foreach($res as $key=>$vo): if($key%2 == 0): ?><a href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($vo["id"]); ?>" class="inad_1">
            	<ul class="inad_1_l">
                	<li><img class="inad_pic1" src="/work/pv_shop/Public/home/img/ad-1.png"/><p class="inad_jg">&yen;279</p></li>
                    <li><img class="inad_pic1" src="/work/pv_shop/Public/home/img/ad-2.png"/><p class="inad_jg">&yen;289</p></li>
                    <li><img class="inad_pic1" src="/work/pv_shop/Public/home/img/ad-3.png"/><p class="inad_jg">&yen;316</p></li>
                </ul>
                <div class="inad_1_r">
                    <div class="inad_1_rt"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;<b>&gt;</b></div>
                    <div class="inad_1_rm"><?php echo ($vo["intro"]); ?></div>
                </div>
            </a>
        <?php else: ?>
            <a href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($vo["id"]); ?>" class="inad_1">
                <div class="inad_1_rl">
                    <div class="inad_1_rt"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;<b>&gt;</b></div>
                    <div class="inad_1_rm"><?php echo ($vo["intro"]); ?></div>
                </div>
                <ul class="inad_1_l">
                    <li><img class="inad_pic1" src="/work/pv_shop/Public/home/img/Anli/adal-1.png"/><p class="inad_jg">&yen;320</p></li>
                    <li><img class="inad_pic1" src="/work/pv_shop/Public/home/img/Anli/adal-2.png"/><p class="inad_jg">&yen;228</p></li>
                    <li><img class="inad_pic1" src="/work/pv_shop/Public/home/img/Anli/adal-3.png"/><p class="inad_jg">&yen;320</p></li>
                </ul>
            </a><?php endif; endforeach; endif; ?>
    <div class="gszj">
    	<img class="gszj_l" src="/work/pv_shop/Public/home/img/logo-ah.png"/>
        <div class="gszj_m"></div>
        <div class="gszj_r">企业证照</div>
        <div class="gszj_b">Copyright &copy;安惠（中国）日用品有限公司未经许可不得转载或链接</div>
    </div>

    
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