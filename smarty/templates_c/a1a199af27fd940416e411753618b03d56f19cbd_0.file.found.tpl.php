<?php
/* Smarty version 3.1.30, created on 2018-07-09 17:27:05
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\found.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b432a69a72c03_57122426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1a199af27fd940416e411753618b03d56f19cbd' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\found.tpl',
      1 => 1525007058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b432a69a72c03_57122426 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php echo '<script'; ?>
 src='./js/createxmlhttp.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='./js/found.js'><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="./css/my.css">
<body>
	<div id="first">
		<table width="200" border="1" cellspacing="0" cellpadding="0">
			<form id="foundname" name="found"  method="post" action="xxx" >
			<tr><td colspan="2" align="center">找回密码</td></tr>
			<tr><td>会员名称</td><td><input type="text"  name="user" id="user" class="txt" /></td></tr>
			<tr><td align="center" colspan="2"><input type="button" id="next1" name="next1" class="btn" value="下一步" onclick="return chkname(foundname)" /></td></tr>	
			</form>
		</table>
	</div>

	<div id="second" style="display:none;">
		<table border="1">
			<form id="foundanswer" name="found"  method="post" action="xxx" >
			<tr><td colspan="2" align="center">找回密码</td></tr>
			<tr><td>密保问题</td><td><div id="question" ></div></td></tr>
			<tr><td>密保答案</td>
			<td><input  type="text"  name="answer" class="txt"/></td></tr>
			<tr><td align="center" colspan="2"><input type="button" id="next2" name="next2" class="btn" value="下一步" onclick="return chkanswer(foundanswer)" /></td></tr>	
			</form>
		</table>
	</div>

	<div id="third" style="display:none;">
		<table border="1">
			<form id="modifypwd" name="found"  method="post" action="xxx" >
			<tr><td colspan="2" align="center">输入密码</td></tr>
			<tr><td>输入密码</td><td><input type="password"  name="pwd1" id="pwd1" class="txt" /></td></tr>
			<tr><td>确认密码</td>
			<td><input  type="password"  name="pwd2" class="txt" /></td></tr>
			<tr><td align="center" colspan="2"><input type="button" id="mod" name="mod" class="btn" value="完成" onclick="return chkpasswd(modifypwd)" /></td></tr>
			</form>
		</table>
	</div>
</body>
</html><?php }
}
