<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>直销商城-汇盟通宝科技</title>
<meta name="viewport" content="width=divice-width minimum-scale=1.0 maximum-scale=1.0 user-scalable=no"/>
<link href="/work/pv_shop/Public/home/css/Throughsetting.css" type="text/css" rel="stylesheet"/>
<link href="/work/pv_shop/Public/home/css/index.css" type="text/css" rel="stylesheet"/>
<link href="/work/pv_shop/Public/home/css/weui.css" type="text/css" rel="stylesheet"/>
<link href="/work/pv_shop/Public/home/css/order.css" type="text/css" rel="stylesheet" />
<link href="/work/pv_shop/Public/home/css/common.css" type="text/css" rel="stylesheet" />
<script src="/work/pv_shop/Public/home/js/order.js" type="text/javascript"></script>
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet" />
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
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
    
    
    

	<div class="banner">
	        <div class="swiper-container gallery-top">
	            <div class="swiper-wrapper">
                	<?php if(is_array($view)): foreach($view as $key=>$lb): if($lb["status"] == 0): ?><a class="swiper-slide" href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($lb["cate_id"]); ?>" style="background-image:url(/work/pv_shop/Public/Uploads/banners/<?php echo ($lb["pic"]); ?>)"></a><?php endif; endforeach; endif; ?>
	            </div>
	            <div class="swiper-button-next swiper-button-white"></div>
	            <div class="swiper-button-prev swiper-button-white"></div>
	        </div>
	        <div class="swiper-container gallery-thumbs">
	            <div class="swiper-wrapper">
                	<?php if(is_array($view)): foreach($view as $key=>$lb): if($lb["status"] == 0): ?><div class="swiper-slide" style="background-image:url(/work/pv_shop/Public/Uploads/banners/<?php echo ($lb["pic"]); ?>)"></div><?php endif; endforeach; endif; ?>
	            </div>
	        </div>
    	</div>

    <div class="logo">
        <?php if(is_array($res)): foreach($res as $key=>$img): ?><a class="inlogo" href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($img["id"]); ?>"><img class="inlg_pic" src="/work/pv_shop/Public/Uploads/cate/<?php echo ($img["logo"]); ?>"/></a><?php endforeach; endif; ?>
        <a class="inlogo" href="/work/pv_shop/index.php/Home/Index/more"><img class="inlg_pic" src="/work/pv_shop/Public/home/img/logo-gd.png"/></a>
    </div>
    
    <?php if(is_array($res)): foreach($res as $key=>$vo): if($key%2 == 0): ?><a href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($vo["id"]); ?>" class="inad_1">
        	<ul class="inad_1_l">
            	<?php if(is_array($vo['tj'])): foreach($vo['tj'] as $key=>$tj): ?><li><img class="inad_pic1" src="/work/pv_shop/Public/Uploads/recommend/<?php echo ($tj["pic"]); ?>"/></li><?php endforeach; endif; ?>
            </ul>
            <div class="inad_1_r">
                    <div class="inad_1_rt"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;<b>&gt;</b></div>
                    <div class="inad_1_rm"><?php echo ($vo["intro"]); ?></div>
            </div>
        </a>
        <?php else: ?>
        <a href="/work/pv_shop/index.php/Home/Index/glist?id=<?php echo ($vo["id"]); ?>" class="inad_1">
                <div class="inad_1_r">
                    <div class="inad_1_rt"><?php echo ($vo["name"]); ?>&nbsp;&nbsp;<b>&gt;</b></div>
                    <div class="inad_1_rm"><?php echo ($vo["intro"]); ?></div>
                </div>
                <ul class="inad_1_l">
                    <?php if(is_array($vo['tj'])): foreach($vo['tj'] as $key=>$tj): ?><li><img class="inad_pic1" src="/work/pv_shop/Public/Uploads/recommend/<?php echo ($tj["pic"]); ?>"/></li><?php endforeach; endif; ?>
                </ul>
        </a><?php endif; endforeach; endif; ?>
        
        <div class="gszj">
	    	<img class="gszj_l" src="/work/pv_shop/Public/home/img/logo-hmtb.png"/>
	        <div class="gszj_m"></div>
	        <div class="gszj_r"><a style="text-decoration:none;color:black;" href="/work/pv_shop/index.php/admin/index/index">管理中心</a>"</div>
	        <div class="gszj_b">Copyright &copy;安惠（中国）日用品有限公司未经许可不得转载或链接</div>
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