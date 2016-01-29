<?php
// 入口文件
// url:index.php?controller=控制器&method=方法
require_once 'function.php';
require_once 'config.php';

$view=ORG('Smarty/', 'Smarty',$viewconfig);
    
// 获取控制器及方法
$controllerAllow=array('test','index');
$methodAllow=array('test','index','show');

$controller=in_array($_GET['controller'],$controllerAllow)?addslashes($_GET['controller']):'index';
$method=in_array($_GET['method'],$methodAllow)?addslashes($_GET['method']):'index';

// 实例化controller，执行method方法
C($controller,$method);

