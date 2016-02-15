<?php
//1
namespace Home\Controller;
//2
class MessageController extends CommonController {
	
	//显示信息列表方法
	public function index(){
		//实例化模型
		$message = D('Message');
		//获取数据
		$data = $message->select();
		//分配数据
		$this->assign('data',$data);		
		//显示模版
		$this->display();
	}
	
	//下载功能
	public function download(){
		//获取id
		$id = I('get.id');
		//实例化模型
		$message = D('Message');
		//根据id获取对应文件的路径
		$data = $message->field('filepath')->where('id='.$id)->find();
		//组装
		$file = "./Uploads/{$data['filepath']}"; //./Uploads/2016-01-02/abcdefg.jpg
		header("Content-type: application/octet-stream");
		header('Content-Disposition: attachment; filename="' . basename($file) . '"');
		header("Content-Length: ". filesize($file));
		readfile($file);
	}
	
	//删除功能
	public function del(){
		//接受id
		$id = I('post.id');
		//字符串化id
		$ids = implode($id, ',');
		//组织条件
		$map['id'] = $ids;
		//实例化模型，执行删除
		$result = D('Message')->where($map)->delete();
		if($result){
			$this->success('删除成功','index',1);
		}else{
			$this->error('删除失败','index',1);
		}
		
	}
	
	//添加信息页面
	public function add(){
		//显示模版
		$this->display();
	}
	
	//新增信息
	public function addOk(){
		//实例化模型
		$message = D('Message');
		//接受数据
		$data = $message->create();
		//接受文件数据
		if( $_FILES['file']['size'] > 0  ){
			//第一步：实例化上传类
			$upload = new \Think\Upload();
			//第二步：设置相关属性
			$upload->maxSize = 2097152;//设置最大上传大小3MB
			$upload->rootPath = './Uploads/';//设置上传目录
			//第三步：使用upload方法实现上传文件
			if($res = $upload->upload()){
				//上传成功
				//获取文件路径
				$data['filepath'] = $res['file']['savepath'].$res['file']['savename'];
				
			}else{
				//上传失败
				$this->error('上传失败:'.$upload->getError(),'add',3);
			}
		}
		
		//添加当前时间
		$data['addtime'] = time();
		//新增数据
		if( $message->add($data) ){
			$this->success('上传成功','index',1);
		}else{
			$this->error('上传失败');
		}
		
	}
}