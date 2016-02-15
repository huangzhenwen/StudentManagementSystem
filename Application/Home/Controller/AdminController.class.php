<?php
//1	命名空间
namespace Home\Controller;

//2	自定义控制器类
class AdminController extends CommonController{
	
	//默认方法：显示个人信息
	public function index(){
		//获取Session中的id
		$id = session('id');
		//实例化模型
		$row = D('Admin')->where('id='.$id)->find();
		//分配数据
		$this->assign('data',$row);
		//显示模版
		$this->display();
	}

	//更新用户信息：修改用户名
	public function edit(){
		//接受新的用户名
		/*
		$admin = D('Admin');
		//AR模式
		$admin->id = I('post.id');
		$admin->username = I('post.newUser');
		$admin->edittime = time();		
		//实例化模型
		$row = $admin->save();
		*/
		$admin = D('Admin');		//实例化模型
		$data = $admin->create();	//获取数据
		$data['edittime'] = time();	//修改最后一次更改时间为当前时间戳
		$row = $admin->save($data); //更新数据
		
		//判断是否更新成功
		if($row){
			$this->success('个人信息更新成功','index',1);
		}else{
			//echo $admin->getLastSql();//输出最后一次执行的sql语句
			$this->error('个人信息更新失败');
		}
	}
	
	//密码修改1：显示修改页面
	public function editPass(){
		//显示页面
		$this->display();
	}
	//确认原始密码正确性
	public function confirmOldPass(){
		//获取旧密码
		$oldPass = md5(I('post.oldPass'));
		//获取id
		$id = session('id');
		//实例化模型
		$admin = M('Admin');
		
		//判断条件
		$map['password'] = $oldPass;
		$map['id'] = $id;
		//判断同时id和密码的情况
		$row = $admin->where($map)->find();
		//返回1或者-1
		if($row){
			echo 1;
		}else{
			echo -1;
		}
	}
	//更新用户密码
	public function updateNewPass(){
		//实例化模型
		$admin = D('Admin');
		
		//获取新密码,加密 
		/*
		$newPass = md5(I('post.newPass'));
		//组织数据
		$data = array(
			'password'=>$newPass,
			'id'=>session('id')
		);
		*/
		$data = $admin->create();
		$data['newPass'] = md5($data['newPass']);
		//更新密码
		if($admin->save($data)){
			$this->success('更新成功','index',1);
		}else{
			$this->error('更新失败','editPass',1);
		}
	}

	
	
}