<?php
/* Smarty version 3.1.30, created on 2018-07-09 13:13:50
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\forminfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42ef0ed05f49_96511042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0267c96d7d8e526bd886b72d11251f4beb014b09' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\forminfo.tpl',
      1 => 1525666122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42ef0ed05f49_96511042 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="css/my.css">
<table border="1" align="center" cellpadding="0" cellspacing="0">
	<tr><td colspan="5"> 订单内容</td></tr>
	<tr><td>商品名</td><td>数量</td><td>价格</td><td>价格折率</td><td>合计</td></tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commname']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['commnumber']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['commagoprice']->value[$_smarty_tpl->tpl_vars['key']->value];?>
元</td><td><?php echo $_smarty_tpl->tpl_vars['commfold']->value[$_smarty_tpl->tpl_vars['key']->value];?>
折</td>
		<td><?php echo $_smarty_tpl->tpl_vars['commagoprice']->value[$_smarty_tpl->tpl_vars['key']->value];?>
*<?php echo $_smarty_tpl->tpl_vars['commnumber']->value[$_smarty_tpl->tpl_vars['key']->value];?>
元</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<tr><td colspan="5">总消费<?php echo $_smarty_tpl->tpl_vars['formarr']->value['total']*0.9;?>
元</td></tr>
</table>
<p align="center">恭喜您！订单提交成功。<br/>请您在一周内按您的支付方式进行汇款，汇款时注明您的<font color="red">订单号</font>汇款后请及时通知我们</p>
<p ><font color="red">注意：</font>请记住<font color="red">订单号</font>以便日后查询及有疑惑时使用</p>
<p align="center"><input type="button" value="我要打印" onclick="window.print()" class="btn" /></p><?php }
}
