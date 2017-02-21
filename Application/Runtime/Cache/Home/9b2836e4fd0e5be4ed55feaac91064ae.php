<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>全部品牌-汇盟通宝科技</title>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
<link href="/Public/home/css/Throughsetting.css" type="text/css" rel="stylesheet"/>
<link href="/Public/home/css/index.css" type="text/css" rel="stylesheet"/>
<link href="/Public/home/css/weui.css" type="text/css" rel="stylesheet"/>
<link href="/Public/home/css/order.css" type="text/css" rel="stylesheet" />
<link href="/Public/home/css/common.css" type="text/css" rel="stylesheet" />
<link href="/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet" />
<script src="/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/Public/home/js/js.js"></script>
<script src="/Public/home/js/order.js" type="text/javascript"></script>
</head>
<body>
	
		<header class="weui_cell" style="background: #829a2e; position: fixed; top:0px; width: 98%; z-index: 3;">
	        
                <div class="weui_cell_hd" onclick="javascript:window.history.back()" >
    	            <img src="/Public/home/img/tb-1.png" alt=""/>
    	        </div> 
            
	        <div class="weui_cell_bd weui_cell_primary" style="background: #ffffff; border-radius: 8px; text-align: center;">
	            <form class="hd_m" action="/Home/Index/search" method="post">
	                <input type="text" name="keyword" placeholder="请输入您要搜索的信息" />
                    <input type="submit" style="display:none;" />
	            </form>
	        </div>
	        <div class="pull-right person-icon">
	            <img src="/Public/home/img/tb-3.png" alt="" />
	        </div>
	    </header>
    
    
    
<div class="weui_tab">
    <div class="weui_tab_bd" style="max-width:640px; margin:70px auto;">
    	<?php if(is_array($res)): foreach($res as $key=>$vo): ?><a class="inlogo" href="/Home/Index/glist?id=<?php echo ($vo["id"]); ?>"><img class="inlg_pic" src="/Public/Uploads/cate/<?php echo ($vo["logo"]); ?>"/>
            </a><?php endforeach; endif; ?>
        <a class="inlogo" href="/Home/Index/more"><img class="inlg_pic" src="/Public/home/img/logo-gd.png"/></a>
    </div>
</div>

    
    
        <div class="weui_tabbar" style="background: #829a2e; position: fixed; bottom: 0px; z-index: 3;">
            <a href="/Home/Index/index" class="weui_tabbar_item weui_bar_item_on">
                <div class="weui_tabbar_icon">
                    <img src="/Public/home/img/tb-8.png" alt=""/>
                </div>
                <p class="weui_tabbar_label" style="color: #ffffff;">首页</p>
            </a>
            <a href="/Home/Index/more" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/Public/home/img/tb-7.png" alt=""/>
                </div>
                <p class="weui_tabbar_label" style="color: #ffffff;">品牌</p>
            </a>
            <a href="/Home/Index/cart" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/Public/home/img/tb-6.png" alt=""/>
                </div>
                <p class="weui_tabbar_label" style="color: #ffffff;">购物车</p>
            </a>
            <a href="/Home/Mine/info" class="weui_tabbar_item">
                <div class="weui_tabbar_icon">
                    <img src="/Public/home/img/tb-5.png" alt=""/>
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