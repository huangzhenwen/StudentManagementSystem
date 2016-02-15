<?php
//1	命名空间
namespace Home\Model;
//2	引入
use Think\Model;

//3 自定义模型类
class SubjectModel extends Model{
	
	//设置主键
	protected $pk = 'id';
	//字段映射
	protected $fields = array('id','title','room','remark');
	
	
}