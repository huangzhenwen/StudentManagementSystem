<?php
//1
namespace DiaoCha\Model;
//2
use Think\Model;

//3
class IndexModel extends Model{
	
	//设置主键
	protected $pk = 'id';
	//设置字段缓存
	protected $fields = array('id','username','subject','type','level','content','ip','addtime');
}