<?php
//1	命名空间
namespace Home\Controller;
//2	引入Model
use Think\Model;

//3
class AdminModel extends Model{
	//设置主键
	protected $pk = 'id';
	//设置字段缓存
	protected $fields = array('id','username','password','loginip','addtime','edittime');
	
	//设置字段映射
	protected $_map = array(
		'newPass' => 'password',
		'newUser' => 'username',
	);
	
}