<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>待发货</title>
<link href="/work/pv_shop/Public/home/css/style.css" rel="stylesheet">
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
</head>
<body>
    
    <div class="header">
        <a class="fanhui" onClick="javascript:window.history.back()">
            <img class="hd_ltb" src="/work/pv_shop/Public/home/img/tb-1.png"/>
            <p class="hd_fh">返回</p>
        </a>
        <p class="hd_cpxq">我的</p>
        <img class="hd_r" src="/work/pv_shop/Public/home/img/tb-3.png"/>
    </div>

    
    <div class="wd_nav">
        <a class="wd_nav_a" href="/work/pv_shop/index.php/Home/Index/allOrder">全部订单</a>
        <a class="wd_nav_a" href="/work/pv_shop/index.php/Home/Index/waitPay">待付款</a>
        <a class="wd_nav_a wd_nav_active" href="/work/pv_shop/index.php/Home/Index/send">待发货</a>
        <a class="wd_nav_a" href="/work/pv_shop/index.php/Home/Index/rec">待收货</a>
    </div>
    
    <ul class="wd_pp">
        <?php if(!empty($order)): if(is_array($order)): foreach($order as $key=>$all): ?><li>
            <?php if(is_array($all[goods])): foreach($all[goods] as $key=>$goods): ?><ul class="gwc_sp">
                	<li>
                        <img class="gwc_pic_cp" src="/work/pv_shop/Public/Uploads/goods/<?php echo ($goods["pic"]); ?>"/>
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