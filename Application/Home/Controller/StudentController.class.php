<?php
//1	命名空间
namespace Home\Controller;
//2 引入核心控制器
//use Think\Controller;

//3 自定义控制器类
class StudentController extends CommonController{
	
	//修改学生信息方法
	public function edit(){
		//1	获取id
		$id = I('get.id');
		//2 实例化模型
		$student = D('Student');
		//3 根据id获取记录,一维数组
		$res = $student->find($id);
		
		//4	分配数据
		$this->assign('stu',$res);
		$this->assign('sub',session('sub'));
		//5	显示模版
		$this->display();
	}
	
	//更新学生信息
	public function update(){
		//1	实例化模型
		$student = D('Student');
		
		//2	获取信息
		//$data = I('post.');
		$data = $student->create();
		//dump($data);exit;//测试字段映射的效果
		
		//3	处理数据
		$data['password'] = md5($data['password']);
		$data['edittime'] = time();
		
		//3	更新数据
		if($student->save($data)){
			$this->success('更新成功','index',1);
		}else{
			$this->error('更新失败','index',2);
		}
		
	}
	
	//删除学生功能
	public function del(){
		//1	获取id，是一个数组,转化为带逗号的字符串
		$id = implode(',',I('post.id'));
		//2	实例化模型
		$student = D('Student');
		//3	根据id删除记录
		if($student->delete($id)){
			$this->success('删除成功','index',1);
		}else{
			$this->error('删除失败','index',1);
		}
	}
	
	
	//显示学生列表
	public function index(){
		//实现分页效果
		//1	实例化模型对象
		$student = D('Student');
		//2	获取总记录数
		$count = $student->count();
		//3	实例化分页类，并赋值$count,和每页显示数量
		$page = new \Think\Page($count,3);
					//3-1	修改分页默认属性:setConfig($name,$value);
					//$page->setConfig('prev','上一页');
					//$page->setConfig('next', '下一页');
		//4	分页显示输出
		$show = $page->show();
		//5	进行分页数据查询
		$stu = $student->field('t1.*,t2.title')->join('t1 left join tp_subject t2 on t1.subject=t2.id')->limit( $page->firstRow,$page->listRows )->select();
		//6	分配数据
		$this->assign('stu',$stu);	//分页后的数据
		$this->assign('page',$show);	//分页栏
		//7	显示模版
		$this->display('list');
		
		////多表连接
		$res = $student->field('t1.*,t2.title')->table('tp_student t1,tp_subject t2')->where('t1.subject=t2.id')->select();
		
		
		
		//外连接:join中直接写入完整的left join语法
		$res = $student->field('t1.*,t2.title')->join('t1 left join tp_subject t2 on t1.subject=t2.id')->select();
		
		
		/**/
	}
	
	//显示添加学生页面
	public function add(){	
		//实例化学科表模型
		$subject = D('Subject');
		//获取全部学科
		$data = $subject->select();
		//保存到session中
		//session('sub',$data);
		//分配数据
		$this->assign('sub',$data);
		//显示模版
		$this->display();
	}
	
	//接受新学生信息，添加到数据库
	public function addStu(){
		//1 实例化模型
		$student = D('Student');
		//2 创建数据
		$data = $student->create();
		//3 修改数据
		$data['password'] = md5($data['password']);	//密码加密
		$data['addtime'] = time();					//增加创建的时间戳
		
		//4  插入数据库
		if($student->add($data)){
			//$this->succe is('学生新增成功','Index/index',1);
			$this->redirect('index');
		}else{
			$this->redirect('add');
		}
		
	}
	
	
	//解决空操作
	public function _empty(){
		//跳往404
		$this->display('Public/404');
	}
	
	
}