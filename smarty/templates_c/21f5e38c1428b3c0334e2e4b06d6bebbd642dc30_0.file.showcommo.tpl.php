<?php
/* Smarty version 3.1.30, created on 2018-07-09 17:34:18
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\showcommo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b432c1a530121_96984784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21f5e38c1428b3c0334e2e4b06d6bebbd642dc30' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\showcommo.tpl',
      1 => 1525318522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b432c1a530121_96984784 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品显示</title>
</head>
<body>
	<table border="1">
	  	<tr><td>商品id:</td><td><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['id'];?>
</td></tr>
	  	<tr><td>商品名：</td><td><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['name'];?>
</td></tr>
	  	<tr><td>市场价格：</td><td><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['m_price'];?>
元</td></tr>
	  	<tr><td>会员价格：</td><td><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['v_price'];?>
元</td></tr>
	  	<tr><td>商品库存：</td><td><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['stocks'];?>
件</td></tr>
	  	<tr><td>商品介绍：</td><td><?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['info'];?>
</td></tr>
	</table>
</body>
</html><?php }
}
