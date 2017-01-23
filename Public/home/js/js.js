// JavaScript Document
$(document).ready(function(){
    
	//baner效果；
	 var galleryTop = new Swiper('.gallery-top', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 10,
        centeredSlides: true,
        slidesPerView: 'auto',
        touchRatio: 0.2,
        slideToClickedSlide: true
    });
    galleryTop.params.control = galleryThumbs;
    galleryThumbs.params.control = galleryTop;
	
	
	
	
	
	//选项卡效果
	$(".al_ad").eq(0).show().siblings().hide();
	$(".inalnav").click(function(){
		$(this).addClass("active_nav").siblings().removeClass("active_nav");
		var i=$(this).index();
		$(".al_ad").eq(i).show().siblings().hide();
		});
	
	
	
	
	
	//购物车编辑效果
	$(".gwc_p2").click(function(){
		var i=$(this).parents(".gwc_pp li").index();
		var x=$(this).html();
		if(x=="编辑"){
			$(this).text("完成");
			$(".gwc_cp_xs").eq(i).css("display","none")
			$(".gwc_cp_yc").eq(i).css("display","block")
			}else{
				$(this).text("编辑");
				$(".gwc_cp_xs").eq(i).css("display","block")
				$(".gwc_cp_yc").eq(i).css("display","none")
				};
		});
	
	
	
	
	
	//更多页面baner效果
	for(var i=1;i<=$(".swiper-slide-gdpp").length; i++){
		var n="<li>"+"</li>";
		$(".num").append(n);}
	$(".num li").mouseover(function(){
		$(this).addClass("active").siblings().removeClass("active");
		
		var x=$(this).index();
		m=x;
		$(".swiper-slide-gdpp").eq(x).show().siblings().hide();
		});
	
	var m=0;
	var timer=setInterval(move,1000);
	function move(){m++;
	if(m==$(".num li").length){m=0;}
	$(".num li").eq(m).addClass("active").siblings().removeClass("active");
	$(".swiper-slide-gdpp").eq(m).show().siblings().hide();
	}
	
	$(".banner_gdpp").mouseover(function(){
		clearInterval(timer);
		});
	$(".banner_gdpp").mouseout(function(){
		timer=setInterval(move,1000);
		});
	
	
	
	
	
	//查看物流更新效果
	$(".wljd li").eq(0).addClass("zuixin").siblings().removeClass("zuixin");
	
	
	
	//地址选择效果
	$(".indz_pic2").click(function(){
		$(".dzxz").css("display","block");
		});
	
	$(".dzxz li").click(function(){
		$(this).addClass("dizhi_djh").siblings().removeClass("dizhi_djh");
		var b=$(this).attr("class");
		if(b=="dizhi_djh"){
			$(this).find("input[name=dzdxk][type=radio]").prop("checked","checked").siblings().removeAttr("checked");
			}
		$(".dzxz").css("display","none");	
		});
	
	
	//填写地址方式
	$(".tjdz").click(function(){
		$(".indztj").css("display","block");
		});
	$(".tjdztj").click(function(){
		$(".indztj").css("display","none");
		});
	
	
	
	
	
	
	
	//选择支付方式
	$(".xzzffs li").click(function(){
		$(this).addClass("xzzffs_djh").siblings().removeClass("xzzffs_djh");
		var a=$(this).attr("class");
		if(a=="xzzffs_djh"){
			$(this).find("input[name=zffs][type=radio]").prop("checked","checked").siblings().removeAttr("checked");
			}
		
		
		});
	
	
	//
	
	
	
	
	
	
	
	
	
});