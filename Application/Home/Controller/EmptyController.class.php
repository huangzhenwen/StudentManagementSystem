<?php
//1 命名空间
namespace Home\Controller;
//2	引入核心控制器
use Think\Controller;

//3 自定义控制类
class EmptyController extends Controller{
	//默认页面
	public function login(){
		//跳转404页面
		$this->display('Public/404');
	}
}