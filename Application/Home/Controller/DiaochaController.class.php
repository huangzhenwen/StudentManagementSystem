<?php
//1
namespace Home\Controller;

//2
class DiaochaController extends CommonController{
	
	//显示所有调查内容
	public function index(){
		//实例化模型
		$data = D('Diaocha')->relation(true)->select();
	 
		//分配数据
		$this->assign('data',$data);
		//显示模版
		$this->display();		
	}
	
}