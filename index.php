<?php
//1	设置头信息
header('content-type:text/html;charset=utf-8');

/*
//生成自定义模块，自动生成IndexController控制器
define('BIND_MODULE', 'Admin');
//生成更多控制器
define('BUILD_CONTROLLER_LIST', 'Index,User,Menu');
//生成更多模型
define('BUILD_MODEL_LIST','Index,User,Menu');
*/

//2	设置项目的应用目录
define('APP_PATH', './Application/');

//3	开启Debug调试功能
define('APP_DEBUG', true);


//4	加载ThinkPHP初始化文件
include './ThinkPHP/ThinkPHP.php';