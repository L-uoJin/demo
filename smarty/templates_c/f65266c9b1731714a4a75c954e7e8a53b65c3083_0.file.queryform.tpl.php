<?php
/* Smarty version 3.1.30, created on 2018-07-02 17:01:30
  from "F:\webphp\php-7.2.4\www\dianshang\smarty\templates\queryform.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b39e9eae7a675_49884823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f65266c9b1731714a4a75c954e7e8a53b65c3083' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\dianshang\\smarty\\templates\\queryform.tpl',
      1 => 1526027341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b39e9eae7a675_49884823 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
	<tr><td>查询用户：<input type="text"  id="name"  name="name" class="txt" /></td>
	<td>查询订单号：<input type="text"  id="formid"  name="formid" class="txt" /></td></tr>
	<tr><td><input type="button"  id="enter"  name="enter" class="btn" 
	value="查询" onclick="return queryrst(queryform)" /></td></tr>
</table>	
</form>	
<div id="exam" ></div>
</body>
</html>
<?php }
}
