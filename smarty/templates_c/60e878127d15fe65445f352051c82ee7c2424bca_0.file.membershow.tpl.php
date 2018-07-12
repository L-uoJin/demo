<?php
/* Smarty version 3.1.30, created on 2018-07-07 09:27:34
  from "D:\AMPP\php-7.2.4\www\dianshang\smarty\templates\membershow.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4087866c3703_12688357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60e878127d15fe65445f352051c82ee7c2424bca' => 
    array (
      0 => 'D:\\AMPP\\php-7.2.4\\www\\dianshang\\smarty\\templates\\membershow.tpl',
      1 => 1530955635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4087866c3703_12688357 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员信息显示</title>
	<link rel="stylesheet" href="./css/my.css" />
</head>
	<?php echo '<script'; ?>
 src="./js/member.js"><?php echo '</script'; ?>
>
<body>
	<a href="?page=hyzx" style="text-decoration: none;color: red;font-weight: bold;">返回</a>
	<table id="table" >
	<form id="member" name="member" method="post" action="../colltroler/modify_info_chk.php" onsubmit="return mem(member)">
	<tr > <td colspan="2"><big><?php echo $_smarty_tpl->tpl_vars['rst']->value['name'];?>
信息</big>（<i>真实姓名不可更改</i>）</td></tr>
	<tr><td>会员编码：</td><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['rst']->value['id'];?>
</td></tr>
	<tr><td>真实姓名：</td><td><input type="text" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['realname'];?>
" /></td></tr>
	<tr><td>会员手机号：</td><td> <input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['tel'];?>
" /></td></tr>
    <tr><td>会员固话：</td><td><input type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['phone'];?>
" /></td></tr>
	<tr><td>会员身份证：</td><td> <input type="text" name="card" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['card'];?>
" /></td></tr>
	<tr><td>会员email：</td><td> <input type="text" name="Email" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['Email'];?>
" /></td></tr>
	<tr><td>会员邮编：</td><td> <input type="text" name="code" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['code'];?>
" /></td></tr>
	<tr><td>会员住址：</td><td> <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['address'];?>
" /></td></tr>
	<tr><td>会员QQ：</td><td> <input type="text" name="QQ" value="<?php echo $_smarty_tpl->tpl_vars['rst']->value['QQ'];?>
" /></td></tr>
	<tr><td><input class="membershow_1" name="enter" type="submit" id="enter" value="修改" /></td>
		<td ><input class="membershow_1" name="reset" type="reset" id="reset" value="重置"></td>
  	</tr>
	</form>
	</table>
</body>
</html><?php }
}
