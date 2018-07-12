<?php
/* Smarty version 3.1.30, created on 2018-07-07 10:18:27
  from "D:\AMPP\php-7.2.4\www\dianshang\smarty\templates\queryform.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b40937399eb24_79120398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6aceb180be747210ff5dcff94b247ec1e24c28a' => 
    array (
      0 => 'D:\\AMPP\\php-7.2.4\\www\\dianshang\\smarty\\templates\\queryform.tpl',
      1 => 1530958705,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b40937399eb24_79120398 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/my.css">
<?php echo '<script'; ?>
 type="text/javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/queryform.js"><?php echo '</script'; ?>
>
<body>
<form id="queryform" name="queryform" action="#" method="post">
<table>
	<tr><td class="queryform_1">订单查询<i><small>（任填一项）</small></i></td></tr>
	<tr>
		<td class="queryform_2">查询用户：<input type="text"  id="name"  name="name" class="txt" /></td>
	</tr>
	<tr>
		<td class="queryform_2">查询订单号：<input type="text"  id="formid"  name="formid" class="txt" /></td>
	</tr>
	<tr>
	<td><input type="button"  id="enter"  name="enter" class="btn" 
	value="查询" onclick="return queryrst(queryform)" /></td>
	</tr>
</table>	
</form>	
<div id="exam" ></div>
</body>
</html>
<?php }
}
