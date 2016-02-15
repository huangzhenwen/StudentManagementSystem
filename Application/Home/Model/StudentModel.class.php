<?php
//1	命名空间
namespace Home\Model;
//2	引入核心控制器
use Think\Model;

//3	自定义模型类
class StudentModel extends Model{
	
	//定义表名，前缀相同的情况下
	//protected $tableName = 'students';
	//定义表名，前缀也不相同的情况下
	//protected $trueTableName = 'students';
	
	//定义主键
	protected $pk = 'id';
	//定义字段
	protected $fields = array('id','username','password','truename','sex','age','tel','address','addtime','edittime','remark','subject');
	//字段映射
	protected $_map = array(
		//键 (表单的假名) = 值 (数据库中的字段名)
		'user' => 'username',
		'pass' => 'password',
		'name' => 'truename'
	);

	
}