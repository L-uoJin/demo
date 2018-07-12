<?php
/* Smarty version 3.1.30, created on 2018-07-09 13:50:17
  from "F:\webphp\php-7.2.4\www\shudian\admin\smarty\templates\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42f799857982_50226009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '007c8acccf6462849633cfcee6eb82880abfbd99' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\admin\\smarty\\templates\\admin.tpl',
      1 => 1530606672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42f799857982_50226009 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<link rel="stylesheet" href="css/table.css" />
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/changeadmin.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<div id="showdiv">
<table width="275" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
	  <td height="25" colspan="2" align="center" valign="middle" class="first">管理员管理</td>
	    <td height="25" align="center" valign="middle" class="first"><input id="addadmin" name="addadmin" type="button" value="添加" class="btn" onclick="showadd()"/></td>
	</tr>
<?php
$__section_arr_id_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id'] : false;
$__section_arr_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_arr_id_0_total = $__section_arr_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_arr_id'] = new Smarty_Variable(array());
if ($__section_arr_id_0_total != 0) {
for ($__section_arr_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] = 0; $__section_arr_id_0_iteration <= $__section_arr_id_0_total; $__section_arr_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']++){
?>
    <tr>
      <td height="25" align="center" valign="middle" class="left" width="25"><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['id'];?>
</td>
      <td width="150" align="center" valign="middle" class="center"><div id="admin{$arr[arr_id].id}"><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['name'];?>
</div></td>
      <td width="100" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="javascript:showdiv('<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['name'];?>
');" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:deladmin(<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['id'];?>
);" style="border-color:#FFFFFF;"></td>
    </tr>
<?php
}
}
if ($__section_arr_id_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_arr_id'] = $__section_arr_id_0_saved;
}
?>
</form>
</table>
</div>
<p>&nbsp;</p>

<div id="moddiv" style="display:none;">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modifyadmin" name="modifyadmin" method="post" actioin="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first"><div id="showname"></div></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">原密码：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="old" nanme="old" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">新密码：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="new1" name="new2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">确认密码：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="new2" name="new2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle">
	<input id="modid" name="modid" type="hidden" value="" />
	<input id="enter" name="enter" type="button" value="修改" class="btn" onclick="modiadmin()" /></td>
  </tr>
</form>
</table>
</div>

<div id="adddiv" style="display: none;">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="addadminform" name="addadminform" method="post" actioin="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">添加新管理员</td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">账号：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="names" name="names" type="txt" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">密码：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="pwd1" name="pwd1" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">确认密码：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="pwd2" name="pwd2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="enter" name="enter" type="button" value="添加" class="btn" onclick="addadmin(addadminform)" /></td>
  </tr>
</form>
</table>
</div>
</body>
</html>
<?php }
}
