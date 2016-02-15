<?php
//1 命名空间
namespace Home\Controller;
//2 引入核心控制器
use Think\Controller;

//3 自定义类
class CommonController extends Controller{
	
	//初始化方法
	public function _initialize(){
		//判断用户是否登录
		if(!session('?username')){
			//当用户不存在时候
			$this->redirect('Home/Public/login');
		}
	}
}