<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($zx["name"]); ?>系列</title>
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
    
    
    
    <div class="kong"></div>
    <div class="alnav">
        <div class="lal_ad">
            <div class="al_ad">
                <?php if(is_array($cate)): foreach($cate as $key=>$vo): if($key == 0): ?><a class="inalnav active_nav" key="<?php echo ($vo["id"]); ?>" href="#"><?php echo ($vo["name"]); ?></a>
                    <?php else: ?>
                        <a class="inalnav" key="<?php echo ($vo["id"]); ?>" href="#"><?php echo ($vo["name"]); ?></a><?php endif; endforeach; endif; ?>
            </div>
        </div>
    </div>
    <div id="goods"></div>
    <div class="gszj">
    	<img class="gszj_l" src="/work/pv_shop/Public/Uploads/cate/<?php echo ($zx["logo"]); ?>" />
        <div class="gszj_m"></div>
        <div class="gszj_r">企业证照</div>
        <div class="gszj_b"><?php echo ($zx["name"]); ?>（中国）日用品有限公司未经许可不得转载或链接</div>
    </div>
    <script type="text/javascript">
$(function(){
    //页面加载完毕
    var pid = $('.al_ad').find('.active_nav').attr('key');
    // alert(pid);
    if(pid){
        $.ajax({
            url:'ajax',
            data:{'pid':pid},
            dataType:'',
            type:'POST',
            success:function(mes){
                if(mes!=1){
                   var res = eval(mes);
                   for(var i = 0;i<res.length;i++){
                        var div = $('<a class="inal_ad" href="/work/pv_shop/index.php/Home/Index/detail?id='+res[i]['id']+'"><img class="inal_ad_pic" src="/work/pv_shop/Public/Uploads/goods/'+res[i]['pic']+'"/><p class="inal_ad_p1">'+res[i]['gname']+'（'+res[i]['size']+'）</p><p class="inal_ad_p2">&yen;'+res[i]['price']+'</p><p class="inal_ad_p3">通粉优惠：&yen;'+res[i]['price']+'+'+res[i]['pv']+'PV</p></a><hr/>');
                        $('#goods').prepend(div);
                   }
               }else{
                    var div = $('<div style="font-size:22px;padding:20px;"><center>暂无商品</center></div>');
                    $('#goods').prepend(div);
               }
            }
        });
    }
    //切换分类
    $('.al_ad').eq(0).show().siblings().hide();
    $('.inalnav').click(function(){
        $(this).addClass("active_nav").siblings().removeClass("active_nav");
        var sy=$(this).index();
        $(".al_ad").eq(sy).show().siblings().hide();
        var pid = $('.al_ad').find('.active_nav').attr('key');
        $('#goods').text('');
        if(pid){
            $.ajax({
                url:'ajax',
                data:{'pid':pid},
                dataType:'',
                type:'POST',
                success:function(mes){
                    if(mes!=1){
                       var res = eval(mes);
                       for(var i = 0;i<res.length;i++){
                            var div = $('<a class="inal_ad" href="/work/pv_shop/index.php/Home/Index/detail?id='+res[i]['id']+'"><img class="inal_ad_pic" src="/work/pv_shop/Public/Uploads/goods/'+res[i]['pic']+'"/><p class="inal_ad_p1">'+res[i]['gname']+'（'+res[i]['size']+'）</p><p class="inal_ad_p2">&yen;'+res[i]['price']+'</p><p class="inal_ad_p3">通粉优惠：&yen;'+res[i]['price']+'+'+res[i]['pv']+'PV</p></a><hr/>');
                            $('#goods').prepend(div);
                       }
                   }else{
                        var div = $('<div style="font-size:22px;padding:20px;"><center>暂无商品</center></div>');
                        $('#goods').prepend(div);
                   }
                }
            });
        }
    });
    
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