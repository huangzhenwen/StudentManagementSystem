<?php
//1	命名空间
namespace Home\Controller;
//2	引入核心控制文件
use Think\Controller;

//3	自定义控制器类
class PublicController extends Controller{
	
	//验证码方法
	public function verify(){
		//实例化验证码类
		$verify = new \Think\Verify();
		//设置默认属性
		$verify->codeSet='2345678abcdefhijkmnpqrstuvwxyzABCDEFGHJKLMNPQRTUVWXY';//文本
		$verify->useCurve = false;//取消混淆线
		$verify->useNoise = false;//取消杂点
		$verify->length = 4;//文本长度
		//显示验证码
		$verify->entry();
	}
	
	//默认方法，显示登录界面
	public function login(){

		//显示模版（旧）
		//$this->display();
		//使用新的登录模版
		$this->display();
	}
	
	//验证登陆信息
	public function checklogin(){
		//接受数据
		$username = $_POST['UserName'];
		$password = $_POST['PassWord'];
		//接受验证码
		$code = $_POST['Code'];
		
		//判断验证码是否为空
		if(empty($code)){
			$this->error('验证码不能为空','login',1);
		}
		
		//判断验证码的正确性
		$verify = new \Think\Verify();
		if(!$verify->check($code)){
			$this->error('验证码错误!','login',1);
		}
		
		//判断数据
		if(empty($username)){
			$this->error('用户名错误','login',1);
		}
		if(empty($password)){
			$this->error('密码错误','login',1);
		}
		
		//连接用户表，判断用户与密码的正确性
		$admin = M('Admin');
		$data = array();
		$data['username'] = $username;
		$data['password'] = md5($password);
		$row = $admin->where($data)->find();
		
		//确定id是否存在，判定用户名和密码是否存在
		if($row['id']){
			//设置session，保存用户名
			session('id',$row['id']);
			session('username',$username);
			
			//更新id地址
			$loginip = get_client_ip();//获取ip地址，TP的方法
			$admin->id = $row['id'];	//设置id属性
			$admin->loginip = $loginip;		//设置新ip属性
			$admin->save();			//更新数据
			
			$this->success('登录成功','/index.php/Home/Index/index');
		}else{
			$this->error('帐号或密码错误','login',2);
		}
	}
	
	//空操作方法
	public function _empty(){
		//跳转到404
		$this->display('Public/404');
	}
}
