<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>订单确认页</title>
<link href="/work/pv_shop/Public/home/css/style.css" rel="stylesheet">
<link href="/work/pv_shop/Public/home/css/swiper-3.4.1.min.css" rel="stylesheet">
<script src="/work/pv_shop/Public/home/js/jquery-1.8.3.min.js" language="javascript"></script>
<script src="/work/pv_shop/Public/home/js/swiper-3.4.1.min.js"></script>
<script src="/work/pv_shop/Public/home/js/js.js"></script>
</head>
<body>
    
        <div class="header">
            <a class="fanhui_tb" href="/work/pv_shop/index.php/Home/Index/index"><img class="hd_l" src="/work/pv_shop/Public/home/img/tb-1.png"/></a>
                <form class="hd_m" action="/work/pv_shop/index.php/Home/Index/search" method="post">
                    <input type="text" name="keyword" placeholder="请输入搜索内容">
                    <input type="submit" style="display:none;">
                </form>
            <img class="hd_r" src="/work/pv_shop/Public/home/img/tb-3.png"/>
        </div>
    
    
    <div class="dizhi">
    	<img class="indz_pic1" src="/work/pv_shop/Public/home/img/tb-dz.png"/>
        <div class="indz_m">
        	<div class="indz_mt">
            	<p>收货人：<?php echo ($addr["name"]); ?></p>
                <p><?php echo ($addr["number"]); ?></p>
            </div>
            <div class="indz_mb">收货地址：<?php echo (getareaname($addr["prov"])); echo (getareaname($addr["city"])); echo (getareaname($addr["xian"])); echo ($addr["detail"]); ?></div>
        </div>
        <img class="indz_pic2" src="/work/pv_shop/Public/home/img/tb-xb.png"/>
    </div>
    <ul class="dzxz">
    <form>
        <?php if(is_array($addrs)): foreach($addrs as $key=>$addrs): ?><li>
            	<div class="indzxz_m">
                    <div class="indz_mt">
                        <p>收货人：<?php echo ($addrs["name"]); ?></p>
                        <p><?php echo ($addrs["number"]); ?></p>
                    </div>
                    <div class="indz_mb">收货地址：<?php echo (getareaname($addrs["prov"])); echo (getareaname($addrs["city"])); echo (getareaname($addrs["xian"])); echo ($addrs["detail"]); ?></div>
            	</div>
                <input type="radio" key=<?php echo ($addrs["id"]); ?> name="dzdxk"/>
            </li><?php endforeach; endif; ?>
        <a class="tjdz">添加地址</a>
    </form>
    </ul>
    <div class="indztj">
    	<form action="/work/pv_shop/index.php/Home/address/addAddress" method="post">
            <p>所在地区
                <select name="prov" id="prov"></select>
                <select name="city" id="city"></select>
                <select name="xian" id="xian"></select>
            </p>
        	<p>请输入地址<input class="dz" disabled type="text" name="detail"/></p>
            <p>电话<input class="dh" type="text" name="number"/></p>
            <p>收货人<input class="shr" type="text" name="name"/></p>
            <input type="hidden" name="user_id" value="<?php echo ($_SESSION['adminuser']['id']); ?>" />
            <input type="hidden" name="isdefault" value="1">
            <input class="tjdztj" type="submit" value="提交"/>
        </form>
    </div>
    <ul class="spxx">
    <?php if(is_array($order)): foreach($order as $key=>$vo): ?><li>
        	<img class="inspxx_pic" src="/work/pv_shop/Public/Uploads/goods/<?php echo ($vo['pic']); ?>"/>
            <div class="inspxx_r">
                <div class="inspxx_name"><?php echo ($vo['gname']); ?>(<?php echo ($vo['size']); ?>)</div>
                <div class="inspxx_jg">
                    <div class="inspxx_jgl">
                    	<p>&yen;<?php echo ($vo["price"]); ?></p>
                        <p>&yen;<?php echo ($vo["fprice"]); ?>+<?php echo ($vo["pv"]); ?>pv</p>
                    </div>
                    <div class="inspxx_m">
                        <p>-</p>
                        <p><?php echo ($vo["count"]); ?></p>
                        <p>+</p>
                    </div>
                    <div class="inspxx_jgr">
                    	<p>&yen;<?php echo ($vo[price]*$vo['count']); ?></p>
                        <p>&yen;<?php echo ($vo['zyhj']); ?>+<?php echo ($vo['zjf']); ?>pv</p>
                    </div>
                    <a class="inspxx_sc" href="#">删除</a>
                </div>
            </div>
        </li><?php endforeach; endif; ?>
    </ul>
    <div class="sphj">
    	<p>此商品性质不支持7天退货</p>
        <p class="insphj_m">
        	<span>配送方式</span>
            <span>快递</span>
        </p>
        <p class="insphj_b">
        	<span class="insphj_bt">合计：￥0（含运费￥0.00）</span>
            <span>共<?php echo count($order);?>件商品</span>
        </p>
    </div>
    
    <div class="spzj">
    	<p>总计：&yen;</p>
        <form action="/work/pv_shop/index.php/Home/Index/doCommit" method="post">
            <input type="hidden" name="xjzj" value="">
            <input type="hidden" name="jfzs" value="">
        	<input type="submit"  value="提交订单"/>
        </form>
    </div>
    <script type="text/javascript">
    $(function(){
    //获取订单总价
        var xj = $('.inspxx_jgr p:nth-child(2)').text();// ¥800+320pv¥800+320pv¥14+415pv¥400+160pv
        var arr = xj.split('¥');//["", "800+320pv", "800+320pv", "14+415pv", "400+160pv"]
        arr.shift();//[ "800+320pv", "800+320pv", "14+415pv", "400+160pv"]
        var brr = [];//[["800", "320pv"], ["800", "320pv"], ["14", "415pv"], ["400", "160pv"]]
        var crr = [];
        var drr = [];
        for(var i = 0; i<arr.length;i++){
            brr[i] = arr[i].split('+');
            for(var j =0;j<brr[i].length;j++){
                if(j%2==0){
                    crr[i] = brr[i][j];//["800", "800", "14", "400"]2140
                }else{
                    drr[i] = brr[i][j].split('pv').shift();// [["320", ""], ["320", ""], ["415", ""], ["160", ""]]1215
                }
            }
        }
        var crr_total = 0;
        for(var i=0;i<crr.length;i++){
            crr_total+=parseInt(crr[i]);
        }
        var drr_total = 0;
        for(var i = 0;i<drr.length;i++){
            drr_total+=parseInt(drr[i]);
        }
        $('input[name=xjzj]').val(crr_total);
        $('input[name=jfzs]').val(drr_total);
        var total = $('.insphj_bt').text('合计：￥'+crr_total+'+'+drr_total+'PV（含运费￥0.00）');
        var zj = $('.spzj p:first-child').text('总计:¥'+crr_total+'+'+drr_total+'PV');

    //默认地址修改
    $('input[name=dzdxk]').click(function(){
        var aid = $(this).attr('key');
        $.get("/work/pv_shop/index.php/Home/address/upAddr",{'aid':aid},function(mes){
            location.reload();
        });
    });

    //添加收货地址
        $('.tjdz').click(function(){
            $.get("/work/pv_shop/index.php/Home/address/address",{'pid':0},function(data){
                // 遍历数据进行添加
                for(var i=0;i<data.length;i++){
                var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                $('#prov').append(op);
                }
            },'json');
        });
        $('#prov').change(function(){
            // 获取当前省的id
            var pid = $(this).val();
            // 通过省的id去获取市的内容
            $.get("/work/pv_shop/index.php/Home/address/address",{'pid':pid},function(data){
                $('#city').empty();
                // 遍历数据进行添加
                for(var i=0;i<data.length;i++){
                    var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                    $('#city').append(op);
                }
            },'json');
            $('input[name=detail]').removeAttr('disabled');
        });
        $('#city').change(function(){
            // 获取当前省的id
            var pid = $(this).val();
            // 通过省的id去获取市的内容
            $.get("/work/pv_shop/index.php/Home/address/address",{'pid':pid},function(data){
                $('#xian').empty();
                // 遍历数据进行添加
                for(var i=0;i<data.length;i++){
                    var op = $('<option value="'+data[i].areaid+'">'+data[i].areaname+'</option>');
                    $('#xian').append(op);
                }
            },'json');
        });
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