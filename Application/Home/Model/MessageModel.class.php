<?php
//1
namespace Home\Model;
//2
use Think\Model;

//3
class MessageModel extends Model{
	//设置主键
	protected $pk = 'id';
	//设置字段缓存
	protected $fields = array('id','title','filepath','content','addtime');
}