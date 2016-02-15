<?php
//1	命名空间
namespace Home\Controller;
//2	引入核心控制器
//use Think\Controller;

//3	自定义控制器
class SubjectController extends CommonController{
	
	//显示学科管理页面
	public function index(){
		//实例化模型
		$subject = D('Subject');
		//获取总记录数
		$count = $subject->count();
		//实例化分页类
		$page = new \Think\Page($count,3);
		//获取分页栏
		$show = $page->show();
				
		//获取全部数据
		$data = $subject->limit($page->firstRow,$page->listRows)->select();
		
		//分配数据
		$this->assign('sub',$data);	
		$this->assign('page',$show);	
		//显示模版
		$this->display();
	}
	
	
	//显示添加学科页面
	public function add(){
		//C方法：读取配置文件config
		$room = C('ROOM');
		//分配数据到表中
		$this->assign('room',$room);
		//显示模版
		$this->display();	//显示模版
	}
	
	//新增学科记录
	public function addOk(){
		//判断是否为表单的post提交
		if(IS_POST){
			//实例化模型
			$subject = D('Subject');
			//获取学科相关数据 ----  AR模式
			$subject->title 	= I('post.title');
			$subject->room 		= I('post.room');
			$subject->remark 	= I('post.remark','什么也没写');
			//插入数据
			if($subject->add()){
				$this->success('学科增加成功!','index',1);
			}else{
				$this->error('学科增加失败!');
			}
		}
	}
	
	
	//显示修改学科信息页面
	//参数$id,可以直接接受传递过来的参数
	public function edit($id){
		//根据id获取记录
		$row = D('Subject')->find($id);
		//分配数据
		$this->assign('subject',$row);
		
		//获取课室信息
		$room = C('ROOM');
		$this->assign('room',$room);
		
		$this->display();
	}
	//更新学科信息
	public function editOk(){
		//判断是否为post请求
		if(IS_POST){
			//获取id
			$id = I('post.id');
			//接受数据
			$subject = D('Subject');
			//AR模式
			$subject->title = I('post.title');
			$subject->room = I('post.room');
			$subject->remark = I('post.remark');
			//更新操作:连贯操作
			if($subject->where('id='.$id)->save()){
				$this->success('更新成功','index',2);
			}else{
				$this->error('更新失败');
			}
		}
	}
	
	//删除学科
	public function del(){
		//获取id
		$id = I('post.id');
		//字符串id
		$ids = implode(',',$id);
		//执行删除操作
		$res = D('Subject')->delete($ids);
		//判断结果
		if($res)$this->success('删除成功','index',2);
		else $this->error('删除失败');
	}
	
}