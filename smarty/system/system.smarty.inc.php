<?php

define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']) ;

define('SMARTY_PATH','/smarty/');

require BASE_PATH.SMARTY_PATH.'Smarty.class.php';

$smarty = new Smarty;

$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';

