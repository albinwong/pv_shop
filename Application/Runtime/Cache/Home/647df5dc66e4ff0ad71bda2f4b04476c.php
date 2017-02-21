<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>待发货</title>
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
	
    <div class="header">
        <a class="fanhui" onClick="javascript:window.history.back()">
            <img class="hd_ltb" src="/Public/home/img/tb-1.png"/>
            <p class="hd_fh">返回</p>
        </a>
        <p class="hd_cpxq">我的</p>
        <img class="hd_r" src="/Public/home/img/tb-3.png"/>
    </div>

    
    
    <div class="wd_nav">
        <a class="wd_nav_a" href="/Home/Mine/allOrder">全部订单</a>
        <a class="wd_nav_a" href="/Home/Mine/waitPay">待付款</a>
        <a class="wd_nav_a wd_nav_active" href="/Home/Mine/send">待发货</a>
        <a class="wd_nav_a" href="/Home/Mine/rec">待收货</a>
    </div>
    
    <ul class="wd_pp">
        <?php if(!empty($order)): if(is_array($order)): foreach($order as $key=>$all): ?><li>
            <?php if(is_array($all[goods])): foreach($all[goods] as $key=>$goods): ?><ul class="gwc_sp">
                	<li>
                        <img class="gwc_pic_cp" src="/Public/Uploads/goods/<?php echo ($goods["pic"]); ?>"/>
                        <div class="gwc_cp_xs">
                            <p class="gwc_p3"><?php echo ($goods["gname"]); ?>(<?php echo ($goods["size"]); ?>)</p>
                            <p class="gwc_p4">&yen;<?php echo ($goods['buyprice']+$goods['buypv']); ?></p>
                            <p class="gwc_p5">&times;<?php echo ($goods["buycnt"]); ?></p>
                            <p class="gwc_p6">通粉优惠：&yen;<?php echo ($goods["buyprice"]); ?>+<?php echo ($goods["buypv"]); ?>PV</p>
                        </div> 
                    </li>
                </ul><?php endforeach; endif; ?>
            <div class="wd_cp_gj">
                <p class="wd_cp_gjp1">共<?php echo ($all["zj"]); ?>件商品</p>
                <p class="wd_cp_gjp2">合计：&yen;<?php echo ($all["ormb"]); ?>+<?php echo ($all["opv"]); ?>PV（含运费：&yen;0.00）</p>
                <a class="wd_cp_fk" id="remind_send">提醒卖家发货</a>
            </div>
        </li>
      <div class="kong"></div><?php endforeach; endif; ?>
        <?php else: ?><div class="wd_cp_gj">没有发货的订单哦~</div><?php endif; ?>
    </ul>
      <div class="kong"></div>
    <script type="text/javascript">
    $('#remind_send').click(function(){
        alert('已催促商家发货!');
    });
    </script>

    
    
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