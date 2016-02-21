<?php
/* Smarty version 3.1.29, created on 2016-02-21 13:46:45
  from "/home/pzr/workspace/iit/smarty/templates/personal.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c94f45dd44d0_93570176',
  'file_dependency' => 
  array (
    '514c2b9fff863442c1889788dc5e9b954259bc59' => 
    array (
      0 => '/home/pzr/workspace/iit/smarty/templates/personal.html',
      1 => 1456033234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c94f45dd44d0_93570176 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>彭峥嵘的个人简历</title>
</head>
<body>
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "pzr.conf", null, 0);
?>

<table>
	<tr><td>姓名:</td><td><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'name');?>
</td></tr>
</table>
</body>
</html><?php }
}
