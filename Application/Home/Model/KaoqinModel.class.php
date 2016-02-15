<?php
//1
namespace Home\Model;
//2
use Think\Model\RelationModel;

//3	关联模式第一步：继承RelationModel
class KaoqinModel extends RelationModel{
	//设置主键
	protected $pk = 'id';
	//设置字段缓存
	protected $fields = array('id','truename','subject','addtime');

	//设置关联模式:kaoqin(多)对应subject(一)是多对一的关系
	protected $_link = array(
			'Subject'=>array(
					//定义关联模式：kaoqin和subject之间是多对一的关系，即BELONGS_TO
					'mapping_type'=>self::BELONGS_TO,
					//获取数据时候使用的名称
					'mapping_name'=>'subject',
					//定义关联的模型类
					'class_name'=>'Subject',
					//定义外键关联:kaoqin表的subject
					'foreign_key'=>'subject',
					//定义需要关联的字段,定位需要的字段
					//'mapping_fields'=>"id,title"
			),
	);
	
}