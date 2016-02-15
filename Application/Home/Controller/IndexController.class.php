<?php
namespace Home\Controller;
//use Think\Controller;
class IndexController extends CommonController {
	//显示后台首页
    public function index(){
        //旧模版
    	$this->display();

    }
    //显示后台首页左部
    public function left(){

    	$this->display();

    }
    //显示后台首页上页
    public function top(){
    	$this->display();
    }
    //显示后台首页右页
    public function right(){
    	$this->display();  
    }
    
    //解决空操作
    public function _empty(){
    	$this->display('Public/404');
    }
}