<?php
require("smarty/system.inc.php");
// echo $smarty->compile_dir;
// print_r( $smarty->template_dir );
// print_r($smarty->config_dir);
// echo $smarty->cache_dir;

$smarty->assign('name','pzr');
$smarty->assign('age',21);

$arr = array(
		array('name'=>'pzr','age'=>24),
		array('name'=>'zy','age'=>22)
);
$smarty->assign('arr',$arr);

$smarty->assign('id','name');

$smarty->display( 'index.html' ,22,'test');
?>
