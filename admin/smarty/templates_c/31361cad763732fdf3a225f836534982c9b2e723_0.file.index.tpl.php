<?php
/* Smarty version 3.1.30, created on 2018-07-09 17:06:30
  from "F:\webphp\php-7.2.4\www\shudian\admin\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b43259677f1b4_74020142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31361cad763732fdf3a225f836534982c9b2e723' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\admin\\smarty\\templates\\index.tpl',
      1 => 1531062805,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b43259677f1b4_74020142 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link  rel="stylesheet" type="text/css" href="css/login.css">
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/login.js"><?php echo '</script'; ?>
>
<body onLoad="javascript:login.user.focus()" class="body1">
<form id="login" name="long" method="post" action="#">
<table border="0" cellpadding="0" cellspacing="0"  class="index_table">
  <!-- <tr>
    <td width="341" >&nbsp;</td>
    <td width="285" height="260">&nbsp;</td>
    <td width="397">&nbsp;</td>
  </tr> -->
  <tr>
    <td colspan="2" class="index_td1">管理员登录</td>
  </tr>
  <tr>
    <td height="30" align="right" class="index_td2">用户名：</td>
    <td><input name="user" type="text" id="user" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20" ></td>
  </tr>
  <tr>
    <td height="30" align="right" class="index_td2">密码：</td>
    <td><input name="pwd" type="password" id="pwd" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20"></td>
  </tr>
  <tr>
    <td colspan="2" height="50"><input id="enter" name="enter" type="button" value="" onClick="check_login(login)">&nbsp;&nbsp;<input id="reset" name="reset" type="reset" value=""></td>
  </tr>
  <!-- <tr>
    <td>&nbsp;</td>
    <td height="275">&nbsp;</td>
    <td>&nbsp;</td>
  </tr> -->
</table></form>

</body>
</html>
<?php }
}
