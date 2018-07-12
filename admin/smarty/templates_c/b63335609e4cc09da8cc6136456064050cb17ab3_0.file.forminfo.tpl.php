<?php
/* Smarty version 3.1.30, created on 2018-07-09 17:26:09
  from "F:\webphp\php-7.2.4\www\shudian\admin\smarty\templates\forminfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b432a31b8f636_43920081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b63335609e4cc09da8cc6136456064050cb17ab3' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\admin\\smarty\\templates\\forminfo.tpl',
      1 => 1530449240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b432a31b8f636_43920081 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="../../css/table.css" />
<link rel="stylesheet" href="css/table.css" />
</head>
<body>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">订单查看</td>
  </tr>
  <?php
$__section_for_id_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id'] : false;
$__section_for_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['formarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_for_id_0_total = $__section_for_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_for_id'] = new Smarty_Variable(array());
if ($__section_for_id_0_total != 0) {
for ($__section_for_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] = 0; $__section_for_id_0_iteration <= $__section_for_id_0_total; $__section_for_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']++){
?>
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">订单号：</td>
    <td height="25" align="left" valign="middle" class="right"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['formid'];?>
</td>
    <td height="25" align="center" valign="middle" class="right">订单时间：</td>
    <td height="25" align="left" valign="middle" class="right"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['formtime'];?>
</td>
  </tr>
  
  <tr>
    <td width="75" height="25" align="center" valign="middle" class="left">下单人：</td>
    <td width="125" height="25" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['vendee'];?>
</td>
    <td width="75" height="25" align="center" valign="middle" class="center">收货人：</td>
    <td width="125" height="25" class="right"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['taker'];?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">邮编：</td>
    <td width="125" height="25" align="left" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['code'];?>
</td>
    <td width="75" height="25" align="center" valign="middle" class="center">电话：</td>
    <td width="125" height="25" align="left" class="right"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['tel'];?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">地址：</td>
    <td height="25" colspan="3" align="left" class="right"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['address'];?>
</td>
  </tr>
  <tr align="center" valign="middle">
    <td width="75" height="25" class="left">送货方式：</td>
    <td width="125" height="25" align="left" class="center"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['del_method'];?>
</td>
    <td width="75" height="25" align="center" valign="middle" class="center">付款方式：</td>
    <td width="125" height="25" align="left" class="right"><?php echo $_smarty_tpl->tpl_vars['formarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_for_id']->value['index'] : null)]['pay_method'];?>
</td>
  </tr>
  <?php
}
}
if ($__section_for_id_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_for_id'] = $__section_for_id_0_saved;
}
?>
</table>



<p>&nbsp;</p>
<table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30" colspan="5" align="center" valign="middle" class="first">订单内容</td>
  </tr>
  <tr>
    <td width="100" height="25" align="center" valign="middle" class="left">商品名</td>
    <td width="100" height="25" align="center" valign="middle" class="center">数量</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">价格折率</td>
    <td width="100" height="25" align="center" valign="middle" class="right">合计</td>
  </tr>
  <tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commname']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
    <td height="25" align="center" valign="middle" class="left"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['commnumber']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</td>
    <td height="25" align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['commagoprice']->value[$_smarty_tpl->tpl_vars['key']->value];?>
&nbsp;元</td>
    <td align="center" valign="middle" class="center"><?php echo $_smarty_tpl->tpl_vars['commfold']->value[$_smarty_tpl->tpl_vars['key']->value];?>
&nbsp;折</td>
    <td align="center" valign="middle" class="right"><?php echo $_smarty_tpl->tpl_vars['commagoprice']->value[$_smarty_tpl->tpl_vars['key']->value]*$_smarty_tpl->tpl_vars['commnumber']->value[$_smarty_tpl->tpl_vars['key']->value];?>
&nbsp;元</td>
  </tr>+-
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<tr>
	<td colspan="5" height="25" align="right" valign="middle">总消费：<?php echo $_smarty_tpl->tpl_vars['formarr']->value[0]['total'];?>
&nbsp;元</td>
</tr>-
</table>
<p>&nbsp;</p>

</body>
</html>
<?php }
}
