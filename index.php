<?php

define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']) ;

define('SMARTY_PATH','/smarty/');

require BASE_PATH.SMARTY_PATH.'Smarty.class.php';

$smarty = new Smarty;

$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';

@error_log( "\n templates_c".$smarty->compile_dir , 3 , "/tmp/pzrlog.log" );

$smarty->assign('name','pzr');
$smarty->assign('age',21);

$arr = array(
		array('name'=>'pzr','age'=>24),
		array('name'=>'zy','age'=>22)
);
$smarty->assign('arr',$arr);

$smarty->assign('id','name');

$smarty->display( 'index.html' ,22,'test');
