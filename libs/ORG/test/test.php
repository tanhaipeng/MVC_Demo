<?php
require_once '../Smarty/Smarty.class.php';

$smarty=new Smarty();

// 五配置
// {}处理域
$smarty->left_delimiter="{";
$smarty->right_delimiter="}";
// html模板
$smarty->template_dir="template"; 
// 模板编译
$smarty->compile_dir="compile";
$smarty->cache_dir="cache";

// 两设置
// 开启+设定缓存时间
$smarty->caching=true;
$smarty->cache_lifetime=120;

class My_object{
    function meth1($params){
        return $params[0].'已经'.$params[1];
    }
}

// 注册模板变量
$smarty->assign('articletitle','1234');
$testarr=array("dim"=>array("name"=>"thp","age"=>25));
$artlist=array(
    array("title"=>"123","date"=>"2012"),
    array("title"=>"namd","date"=>"2015"),
    array("title"=>"wewe","date"=>"2016")
);
$smarty->assign('testarr',$testarr);
$smarty->assign('artlist',$artlist);

$myobj=new My_object();
$smarty->assign('myobj',$myobj);
$smarty->assign('time',time());
$smarty->display('test.html');




