<?php
/* Smarty version 3.1.30, created on 2018-07-07 09:21:05
  from "D:\AMPP\php-7.2.4\www\dianshang\smarty\templates\modifypwd.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b4086013cc9c0_60517757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '696f0bde0369f01be2b6c445d33cb6389f4755bb' => 
    array (
      0 => 'D:\\AMPP\\php-7.2.4\\www\\dianshang\\smarty\\templates\\modifypwd.tpl',
      1 => 1530955223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4086013cc9c0_60517757 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员信息修改</title>
	<link rel="stylesheet" href="./css/my.css" />
</head>
<?php echo '<script'; ?>
 src="../js/member.js"><?php echo '</script'; ?>
>
	<!-- <p><?php echo $_SESSION['member'];?>
 <a href=" ?page=hyzx&action=meg">查看信息</a>&nbsp;<a href=" ?page=hyzx&action=modify" id="mem">修改密码</a></p> -->
<body>
	<a href="?page=hyzx" style="text-decoration: none;color: red;font-weight: bold;">返回</a><br><br>
	<table>
	<form id="member" name="member" method="post" action="../colltroler/modify_pwd_chk.php" onsubmit="return pwd(member)">
	<tr><td class="modifypwd_1" colspan="2" align="center">修改密码</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>原密码：</td><td> <input type="password" name="old" id="old"  /></td></tr>
	<tr><td>新密码：</td><td> <input type="password" name="new1" id="new1"  /></td></tr>
	<tr><td>确认密码：</td><td> <input type="password" name="new2" id="new2"  /></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td ><input class="modify_2" name="enter" type="submit" id="enter" value="修改" /></td></tr>
	</form>
	</table>
</body>
</html><?php }
}
