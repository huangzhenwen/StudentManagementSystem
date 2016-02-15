<?php 
//1
namespace DiaoCha\Controller;
//2
use Think\Controller;

//3
class IndexController extends Controller{
	
	//默认方法：显示调查页面
	public function index(){
		//读取配置学科信息
		$clas = M('Subject')->select();
		//时间
		$time = time();
		
		//分配数据
		$this->assign('clas',$clas);
		$this->assign('time',$time);
		
		//显示模版
		$this->display();
	}
	
	//接受调查内容
	public function deal(){
		//实例化模型
		$dc = D('Diaocha');
		//接受数据
		$data = $dc->create();
		
		//处理数据
		//增加IP
		$data['ip'] = get_client_ip();
		//增加当前时间
		$data['addtime'] = date('Y-m-d');
		
		//判断是否添加成功
		if($dc->add($data)){
			$this->success('调查成功','index',1);
		}else{
			$this->error('调查失败');
		}
	}
	
}