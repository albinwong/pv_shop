<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class TestController extends Controller {
    public function index(){
        $this->display();
    }
    public function manager(){
    	$this->display();
    }
}
