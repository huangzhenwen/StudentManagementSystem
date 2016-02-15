<?php
//1	命名空间
namespace Home\Controller;

//2自定义控制类
class KaoqinController extends CommonController{
	
	//显示考勤记录:使用分页
	public function index(){
		//实例化模型
		$kaoqin = D('Kaoqin');
		//获取总记录数
		$count = $kaoqin->count();
		//实例化分页类
		$page = new \Think\Page($count,3);
		//获取分页栏
		$show = $page->show();
		//获取分页数据
		$data = $kaoqin->relation(true)->limit($page->firstRow,$page->listRows)->select();

		//分配数据
		$this->assign('data',$data);//分配数据
		$this->assign('show',$show);//分配分页栏
		//显示模版
		$this->display();

	}
	
	//添加迟到记录
	public function add(){
		//判断有无session('sub')
		if(!session('?sub')){
			$sub = M('Subject')->select();	//获取所有学科记录
			session('sub',$sub);	//Sessin缓存数据			
		}
		
		//分配数据
		$this->assign('sub',session('sub'));
		$this->assign('time',date('Y-m-d'));
		
		//显示模版
		$this->display();
	}

	
	//完成Ajax请求，实现根据subject和truename，完成下拉提示
	public function addSel(){
		//判断是否为Ajax请求
		if(IS_AJAX){
			//接受subject与truename
			$subject = I('post.subject');
			$truename = rtrim(I('post.truename'));
			//组织条件
			$map[]['subject'] = $subject;
			$map[]['truename'] = array('like',"$truename%");
			//实例化模型
			$res = M('Student')->where($map)->select();	 //返回二维数组
			//返回数据
			$this->ajaxReturn($res);
		}
	}

	//增加考勤记录
	public function addOk(){
		//实例化模型
		$kaoqin = D('kaoqin');
		//获取数据
		$data = $kaoqin->create();
		//增加时间
		$data['addtime'] = date('Y-m-d');

		//增加到数据
		if($kaoqin->add($data)){
			$this->success('添加成功','index');
		}else{
			$this->error('添加失败');
		}
	}
	
	//显示统计图
	public function tongji(){
		//判断session中是否存在subject记录
		if(!session('?sub')){
			session('sub',M('Subject')->select());
		}
		//分配数据
		$this->assign('data',session('sub'));
		//显示模版
		$this->display();
	}
	//获取统计图需要的数据
	public function charts(){
		//判断是否ajax请求
		if(IS_AJAX){
			//接受数据
			$addtime = I('post.addtime');
			$subject = I('post.subject');
			//实例化模型
			$kaoqin = D('Kaoqin');
			//sql语句
			$sql="select truename,count(*) as count from tp_kaoqin where subject='$subject' and substr(addtime,1,7)='$addtime' group by truename;";
			//执行
			$data = $kaoqin->query($sql);
			//组织字符串数据，提交给统计表插件使用
			$str = '[';
			//遍历数据，组装字符串
			foreach ($data as $v){
				$str .=  "['{$v['truename']}', {$v['count']}],";
			}
			//清除最后一个逗号,
			$str = rtrim($str,',');
			$str .= ']';
			//分配变量
			$this->assign('str',$str);
			//显示统计图模版,
			$this->display();
		}
		
	}
}