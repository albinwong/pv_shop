<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>购物车</title>
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
	
<style type="text/css">
.jumbotron {
    background-color: #eee;
    color: inherit;
    margin-top:130px;
    margin-bottom: 30px;
    padding: 30px 15px;
}
.jumbotron p {
    font-size: 21px;
    font-weight: 200;
    margin-bottom: 15px;
    margin-left:40%;
}
</style>
	<div class="header">
    	<p class="hd_gwc">购物车</p>
        <p class="hd_gwc_bj">编辑</p>
        <img class="hd_r" src="/work/pv_shop/Public/home/img/tb-3.png"/>
    </div>

    
    

    <form action="/work/pv_shop/index.php/Home/Index/commit" method="post">
    <ul class="gwc_pp">
        <?php if(!empty($_SESSION['pv_cart'])): if(is_array($cart)): foreach($cart as $key=>$vo): ?><li>
                	<ul class="gwc_sp">
                    	<li>
                        	<input value="<?php echo ($key); ?>" name="dx[]" class="gwc_ft_an2" type="checkbox"/>
                        	<img class="gwc_pic_cp" src="/work/pv_shop/Public/Uploads/goods/<?php echo ($vo["pic"]); ?>"/>
                            <div class="gwc_cp_xs">
                                <p class="gwc_p3"><?php echo ($vo["gname"]); ?>(<?php echo ($vo["size"]); ?>)</p>
                                <p class="gwc_p4">&yen;<?php echo ($vo["price"]); ?></p>
                                <p class="gwc_p5">&times;<?php echo ($vo["count"]); ?></p>
                                <p class="gwc_p6">通粉优惠：&yen;<?php echo ($vo["fprice"]); ?>+<?php echo ($vo["pv"]); ?>PV</p>
                            </div>
                            <div class="gwc_cp_yc">
                            	<div class="gwc_yc_l">
                                	<div class="gwc_yc_lt">
                                    	<div class="gwc_yc_ltl">&ndash;</div>
                                        <div class="gwc_yc_ltm">1</div>
                                        <div class="gwc_yc_ltl">+</div>
                                    </div>
                                    <div class="gwc_yc_lb"><?php echo ($vo["gname"]); ?>(<?php echo ($vo["size"]); ?>)</div>
                                </div>
                                <div class="gwc_yc_r">删除</div>
                            </div>
                        </li>
                    </ul>
                </li><?php endforeach; endif; ?>
        <?php else: ?>
            <div class="jumbotron">
              <p>您的购车暂无商品</p>
              <br>
              <p style="float:right;padding-right:8%"><a href="/work/pv_shop/index.php/Home/Index/search">去购物</a></p>
            </div><?php endif; ?>
    </ul>
    
    <?php if(!empty($_SESSION['pv_cart'])): ?><div class="gwc_ft">
        <form><input name="all" class="gwc_ft_an" type="checkbox" /></form>
        <p class="gwc_p7">全选</p>
        <p class="gwc_p8">合计：</p>
        <p class="gwc_p9">&yen;0</p>
        <button>结算&nbsp;(0)</button>
    </div><?php endif; ?>
        </form>
    <script type="text/javascript">
    $(function(){
        var l = $("input[name=dx]").length;
        // (取消)全选
        $('input[name=all]').click(function(){
            var flag = $(this).attr('checked');
            if(flag){
                $(this).attr('checked','checked');
                $('ul .gwc_ft_an2').attr('checked','checked');
            }else{
                $(this).removeAttr('checked');
                $('ul .gwc_ft_an2').removeAttr('checked');
            }
        });
        for(var i = 0;i<l;i++)
        {
            $("input[name=dx]").click(function(){
                var num = 0;
                for(var j = 0 ;j<l;j++){
                    if($("input[name=dx]").eq(j).attr('checked'))
                    {
                        num++;
                    }
                    if(l == num){
                        $('input[name=all]').attr('checked','checked');
                    }else{
                        $('input[name=all]').removeAttr('checked');
                    }
                }
            });
        }
    });
    </script>

    
    
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