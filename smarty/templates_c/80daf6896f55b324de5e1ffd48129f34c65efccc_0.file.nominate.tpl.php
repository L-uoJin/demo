<?php
/* Smarty version 3.1.30, created on 2018-07-02 17:01:16
  from "F:\webphp\php-7.2.4\www\dianshang\smarty\templates\nominate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b39e9dc393a05_29879001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80daf6896f55b324de5e1ffd48129f34c65efccc' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\dianshang\\smarty\\templates\\nominate.tpl',
      1 => 1525419159,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b39e9dc393a05_29879001 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品展示</title>
</head>
<body>
	<?php echo '<script'; ?>
 src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/showcommo.js"><?php echo '</script'; ?>
>
	<table border="0" cellspacing="0" cellpadding="0">
	<tr><td>&nbsp;</td><td colspan ="3" align="right"><a href="?page=new">more&gt;&gt;</a></td></tr>
	<tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        <td>
        	<table border="0" cellpadding="0" cellspacing="0">
        		<tr>
        			<td width="90" height="70"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pric'];?>
" width="90" height="70" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></td>
        		</tr>
        		<tr><td>&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td></tr>
        		<tr><td>市场价格：<?php echo $_smarty_tpl->tpl_vars['item']->value['m_price'];?>
元&nbsp;</td></tr>
        		<tr><td>会员价格：<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
元&nbsp;</td></tr>
        		<tr><td>
        			<input id="showinfo"  name="showinfo" type="button" value="查看商品" onclick=
        			"openshowcommo(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" /><!--id==1,2,3,4-->
        		    <input  name="buy" type="button" value="购买" onclick=
        		    "return buycommo(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" />
        		</td></tr>
        	</table>
        </td> 
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <td>&nbsp;</td></tr>
        <tr><td colspan="6">&nbsp;</td></tr>
	</table>
</body>
</html><?php }
}
