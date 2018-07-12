<?php
/* Smarty version 3.1.30, created on 2018-07-09 13:36:13
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\settle.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42f44dad8a13_66682870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ff946bf5b3c7e7d16ff2014568b88628708e4b' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\settle.tpl',
      1 => 1531114302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42f44dad8a13_66682870 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="js/settle.js"><?php echo '</script'; ?>
>
<form id='buyform' name='buyform' method='post' action='settle_chk.php' >
	<table>
		<tr><td>收货人<input type="text"  name="taker" id="taker" /></td></tr>
		<tr><td>邮编<input type="text"  name="code" id="code" /></td></tr>
		<tr><td>电话<input type="text"  name="tel" id="tel" /></td></tr>
		<tr><td>地址<input type="text"  name="address" id="address" /></td></tr>
		<tr><select id="del_method" name="del_method" name="del_method" id="del_method">
			<option value="平邮">平邮</option>
			<option value="快递">快递</option>
			<option value="送货上门">送货上门</option>
		</select>
		</tr>
		<tr><select id="pay_method" name="pay_method">
			<option value="银行转账">银行转账</option>
			<option value="邮局汇款">邮局汇款</option>
			<option value="支付宝">支付宝</option>
		</select>
		</tr>
		<tr><td><input type="hidden" id="fst" name="fst" value="<?php echo $_smarty_tpl->tpl_vars['fst']->value;?>
" /></td></tr>
		<tr><td><input type="hidden" id="snd" name="snd" value="<?php echo $_smarty_tpl->tpl_vars['snd']->value;?>
" /></td></tr>
		<tr><td><input type="hidden" id="uid" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" /></td></tr>
		<tr><td><input type="submit" name="enter" id="enter" value="提交订单" onclick="return settles(buyform)"  /></td></tr>
	</table>
</form><?php }
}
