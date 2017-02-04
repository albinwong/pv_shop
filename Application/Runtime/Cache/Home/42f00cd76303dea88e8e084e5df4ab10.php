<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的全部订单</title>
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
    	<a class="wd_nav_a wd_nav_active" href="/work/pv_shop/index.php/Home/Mine/allOrder">全部订单</a>
        <a class="wd_nav_a" href="/work/pv_shop/index.php/Home/Mine/waitPay">待付款</a>
        <a class="wd_nav_a" href="/work/pv_shop/index.php/Home/Mine/send">待发货</a>
        <a class="wd_nav_a" href="/work/pv_shop/index.php/Home/Mine/rec">待收货</a>
    </div>
    <ul class="wd_pp">
        <?php if(is_array($order)): foreach($order as $key=>$all): ?><li>
            	<!-- <div class="gwc_pp_t">
                    <img class="gwc_pic" src="img/logo-al.png"/>
                    <p class="gwc_p1">安利&gt;</p>
                    <p class="gwc_p11">卖家已发货</p>
                </div> -->
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
                    <?php if($all['status'] == 0): ?><form action="/work/pv_shop/index.php/Home/Mine/pay" method="get"><input type="hidden" name="cash" value="<?php echo ($all["ormb"]); ?>"><input type="hidden" name="pv" value="<?php echo ($all["opv"]); ?>"><input class="wd_cp_fk" type="submit" value="去付款"></form>
                        <?php elseif($all['status'] == 1): ?>
                            <a class="wd_cp_fk" id="remind_send">提醒卖家发货</a>
                        <?php elseif($all['status'] == 2): ?>
                            <a class="wd_cp_fk" id="shkey" oid="<?php echo ($all["oid"]); ?>">确认收货</a>
                            <a class="wd_cp_fk wd_cp_fk01" href="/work/pv_shop/index.php/Home/Mine/trade">查看物流</a>
                            <a class="wd_cp_fk wd_cp_fk01" href="#">延长收货</a>
                        <?php else: ?>完成<?php endif; ?>
                </div>
            </li>
        <div class="kong"></div><?php endforeach; endif; ?>
    </ul>
    <div class="kong"></div>
    <script type="text/javascript">
    $('#shkey').click(function(){
        if(confirm('确认收货')){
            var oid = $(this).attr('oid');
            $.ajax({
            url:'orderStatus',
            data:{'oid':oid},
            dataType:'',
            type:'POST',
            success:function(mes){
                if(mes){
                    alert('交易完成!');
                    location.reload();
                }
            }
            });
        }
    });
    $('#remind_send').click(function(){
        alert('已催促商家发货!');
    });
    </script>

    
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