<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>全部品牌-汇盟通宝科技</title>
<meta name="viewport" content="width=divice-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
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
	
		<header class="weui_cell" style="background: #829a2e; position: fixed; top:0px; width: 98%; z-index: 3;">
	        <div class="weui_cell_hd" onclick="javascript:window.history.back()" >
	            <img src="/work/pv_shop/Public/home/img/tb-1.png" alt=""/>
	        </div>
	        <div class="weui_cell_bd weui_cell_primary" style="background: #ffffff; border-radius: 8px; text-align: center;">
	            <form class="hd_m" action="/work/pv_shop/index.php/Home/Index/search" method="post">
	                <input type="text" name="keyword" placeholder="请输入您要搜索的信息" />
                    <input type="submit" style="display:none;" />
	            </form>
	        </div>
	        <div class="pull-right person-icon">
	            <img src="/work/pv_shop/Public/home/img/tb-3.png" alt="" />
	        </div>
	    </header>
    
    
    
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
                <p class="weui_tabbar_label" style="color: #ffffff;">购物</p>
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