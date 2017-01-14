<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>汇盟通宝科技</title>
<link href="/work/Public/home/css/style.css" rel="stylesheet">
<link href="/work/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/Public/home/js/js.js"></script>
</head>
<body>
	<div class="header">
    	<a class="fanhui">
            <img class="hd_ltb" src="/work/Public/home/img/tb-1.png"/>
            <p class="hd_fh">返回</p>
        </a>
        <p class="hd_cpxq">产品详情</p>
        <img class="hd_r" src="/work/Public/home/img/tb-3.png"/>
    </div>
    
    <div class="banner">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
            	<a class="swiper-slide" href="安惠.html" style="background-image:url(/work/Public/home/img/baner-1.jpg)"></a>
                <a class="swiper-slide" href="安利.html" style="background-image:url(/work/Public/home/img/Anli/banner.jpg)"></a>
                <a class="swiper-slide" href="完美.html" style="background-image:url(/work/Public/home/img/baner-wm.jpg)"></a>
                <a class="swiper-slide" href="#" style="background-image:url(/work/Public/home/img/baner-1.jpg)"></a>
                <a class="swiper-slide" href="#" style="background-image:url(/work/Public/home/img/baner-1.jpg)"></a>
            </div>
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(/work/Public/home/img/baner-1.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(/work/Public/home/img/Anli/banner.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(/work/Public/home/img/baner-wm.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(/work/Public/home/img/baner-1.jpg)"></div>
                <div class="swiper-slide" style="background-image:url(/work/Public/home/img/baner-1.jpg)"></div>
            </div>
        </div>
    </div>
    <div class="logo">
        <?php if(is_array($res)): foreach($res as $key=>$img): ?><a class="inlogo" href="/work/index.php/Home/Index/glist?id=<?php echo ($img["id"]); ?>"><img class="inlg_pic" src="/work/Public/Uploads/cate/<?php echo ($img["logo"]); ?>"/></a><?php endforeach; endif; ?>
        <a class="inlogo" href="#"><img class="inlg_pic" src="/work/Public/home/img/logo-gd.png"/></a>
    </div>
    <?php if(is_array($res)): foreach($res as $key=>$vo): if($key%2 == 0): ?><a href="安惠.html" class="inad_1">
            	<ul class="inad_1_l">
                	<li><img class="inad_pic1" src="/work/Public/home/img/ad-1.png"/><p class="inad_jg">&yen;279</p></li>
                    <li><img class="inad_pic1" src="/work/Public/home/img/ad-2.png"/><p class="inad_jg">&yen;289</p></li>
                    <li><img class="inad_pic1" src="/work/Public/home/img/ad-3.png"/><p class="inad_jg">&yen;316</p></li>
                </ul>
                <div class="inad_1_r">
                    <div class="inad_1_rt"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;<b>&gt;</b></div>
                    <div class="inad_1_rm"><?php echo ($vo["intro"]); ?></div>
                </div>
            </a>
        <?php else: ?>
            <a href="安利.html" class="inad_1">
                <div class="inad_1_rl">
                    <div class="inad_1_rt"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;<b>&gt;</b></div>
                    <div class="inad_1_rm"><?php echo ($vo["intro"]); ?></div>
                </div>
                <ul class="inad_1_l">
                    <li><img class="inad_pic1" src="/work/Public/home/img/Anli/adal-1.png"/><p class="inad_jg">&yen;320</p></li>
                    <li><img class="inad_pic1" src="/work/Public/home/img/Anli/adal-2.png"/><p class="inad_jg">&yen;228</p></li>
                    <li><img class="inad_pic1" src="/work/Public/home/img/Anli/adal-3.png"/><p class="inad_jg">&yen;320</p></li>
                </ul>
            </a><?php endif; endforeach; endif; ?>
    <div class="gszj">
    	<img class="gszj_l" src="/work/Public/home/img/logo-ah.png"/>
        <div class="gszj_m"></div>
        <div class="gszj_r">企业证照</div>
        <div class="gszj_b">Copyright &copy;安惠（中国）日用品有限公司未经许可不得转载或链接</div>
    </div>

    <div class="footer">
        <a class="ft_2" href="index.html"><img class="ft_1" src="/work/Public/home/img/tb-8.png"/><p class="ft_z">首页</p></a>
        <a class="ft_3" href="#"><img class="ft_1" src="/work/Public/home/img/tb-5.png"/><p class="ft_z">我的</p></a>
        <a class="ft_5" href="#"><p class="ft_zgwc">加入购物车</p></a>
        <a class="ft_6" href="#"><p class="ft_zgm">立即购买</p></a>
    </div>
</body>
</html>