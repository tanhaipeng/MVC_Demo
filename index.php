<?php
// ����ļ�
// url:index.php?controller=������&method=����
require_once 'function.php';
require_once 'config.php';

$view=ORG('Smarty/', 'Smarty',$viewconfig);
    
// ��ȡ������������
$controllerAllow=array('test','index');
$methodAllow=array('test','index','show');

$controller=in_array($_GET['controller'],$controllerAllow)?addslashes($_GET['controller']):'index';
$method=in_array($_GET['method'],$methodAllow)?addslashes($_GET['method']):'index';

// ʵ����controller��ִ��method����
C($controller,$method);

