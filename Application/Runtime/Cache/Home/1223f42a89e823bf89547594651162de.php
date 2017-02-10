<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($goods["gname"]); ?>(<?php echo ($goods["size"]); ?>)</title>
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
    
    
    
    <div class="pic"><img class="pic_pic" src="/work/pv_shop/Public/Uploads/goods/<?php echo ($goods["pic"]); ?>"/></div>
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
    <a class="ft_2" href="<?php echo U('home/index/index');?>"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-8.png"/><p class="ft_z">首页</p></a>
    <a class="ft_3" href="<?php echo U('home/index/info');?>"><img class="ft_1" src="/work/pv_shop/Public/home/img/tb-5.png"/><p class="ft_z">我的</p></a>
    <a class="ft_5" href="/work/pv_shop/index.php/Home/Index/addCart?gid=<?php echo ($goods["id"]); ?>"><p class="ft_zgwc">加入购物车</p></a>
    <a class="ft_6" href="#"><p class="ft_zgm">立即购买</p></a>
</div>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"image":{"viewList":["qzone","tsina","weixin","tqq","sqq"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>

    
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