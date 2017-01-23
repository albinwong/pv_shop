<?php 
	function getCateName($id)
	{
		if($id == 0){
			return '顶级分类';
		}
		//读取分类信息
		$Cate = M('cates');
		$info = $Cate->where('id='.$id)->find();
		//返回结果
		return $info['name'];
	}

	function getPname($id)
	{
		if($id==0){
			return '';
		}
		//读取分类信息
		$Cate = M('cates');
		$info = $Cate->where('id='.$id)->find();
		//返回结果
		return $info['name'];
	}

	function getGoodsStatus($id)
	{
		switch($id){
			case '0':return '新品';break;
			case '1':return '上架';break;
			default:return '下架';break;
		}
	}

	function getOrderStatus($id)
	{
		switch ($id) {
			case '0':return '待付款';break;
			case '1':return '待发货';break;
			case '2':return '待收货';break;
			case '3':return '已收货,待评价';break;
			default:return '订单完成';break;
		}
	}

	function getViewStatus($id){
		if($id == 0){
			return '显示';
		}else{
			return '不显示';
		}
	}

	// }
	
	// function getSendStatus($send)
	// {
	// 	switch($send){
	// 		case '1':return '准备出库';break;
	// 		case '2':return '已发货';break;
	// 		case '3':return '已到货';break;
	// 	}
	// }


	
	// function getAreaName($id)
	// {
	// 	$res = DB::table('destoon_area')->where('areaid',$id)->first();
		
	// 	return $res->areaname;
	// }
	// function getOnePicByGoodsId($goods_id)
	// {
	// 	return DB::table('pics')->where('goods_id',$goods_id)->value('path');
	// }


 ?>