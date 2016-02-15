<?php
//1
namespace Home\Model;
//2
use Think\Model\RelationModel;

//3
class DiaochaModel extends RelationModel {
	//设置主键
	protected $pk = 'id';
	//设置字段映射
	protected $fields = array('id','username','subject','type','level','content','ip','addtime');
	//设置关联模式
	protected $_link = array(
		'Subject'=>array(
			//设置关联类型
			'mapping_type'=>self::BELONGS_TO,
			//获取数据时使用的名称
			'mapping_name'=>'subject',
			//定义关联的模型
			'class_name'=>'Subject',
			//定义外键字段
			'foreign_key'=>'subject'
			
		),
			
	);
}