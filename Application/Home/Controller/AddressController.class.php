<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class AddressController extends Controller {
    /**
     * 地址管理
     */
    public function address(){
        $addr = M('areas');
        $address = $addr->where('parentid='.$_GET['pid'])->order('areaid asc')->select();
        echo json_encode($address);
    }

    /**
     * 修改默认地址
     */
    public function upAddr(){
        $id = $_GET['aid'];
        $Model = new Model(); // 实例化一个model对象 没有对应任何数据表
        $hf = $Model->execute("update address set isdefault = 0 where user_id=".$_SESSION['adminuser']['id']);
        $res = $Model->execute("update address set isdefault = 1 where id=".$id);
        if($hf && $res){
            echo 1;
        }
    }

    /**
     * 新增收货地址
     */
    public function addAddress(){
        $Model = new Model(); 
        $hf = $Model->execute("update address set isdefault = 0 where user_id=".$_POST['user_id']);
        if($hf){
            $addr = M('address');
            $res = $addr->add($_POST);
        }
        $this->redirect("cart");
    }

    public function _empty(){
        redirect('/Home/index/index');
    }


}