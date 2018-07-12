<?php
/* Smarty version 3.1.30, created on 2018-07-07 04:07:51
  from "D:\AMPP\php-7.2.4\www\dianshang\smarty\templates\nominate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b403c970f8429_33732751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48abc47e377cecf5f52e00e7c8153b31b3a07bf9' => 
    array (
      0 => 'D:\\AMPP\\php-7.2.4\\www\\dianshang\\smarty\\templates\\nominate.tpl',
      1 => 1530936445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b403c970f8429_33732751 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品展示</title>
        <link rel="stylesheet" href="./css/my.css" />
</head>
<body>
	<?php echo '<script'; ?>
 src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/showcommo.js"><?php echo '</script'; ?>
>
	<table border="0" cellspacing="0" cellpadding="0">
	<tr>
                <td>&nbsp;</td>
                <td colspan ="3" align="right">
                        <a class="nom_a" href="?page=new">more&gt;&gt;</a>
                </td>
        </tr>
	<tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nomarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
        <td>
        	<table border="0" cellpadding="0" cellspacing="0">
        		<tr>
        			<td width="220" height="250"><img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pric'];?>
" width="190" height="250" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" /></td>
        		</tr>
        		<tr><td class="nom_name">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td></tr>
        		<tr><td>市场价格：<?php echo $_smarty_tpl->tpl_vars['item']->value['m_price'];?>
元&nbsp;</td></tr>
        		<tr><td style="font-weight: bold;">会员价格：<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
元&nbsp;</td></tr>
        		<tr><td>
        			<input class="nom_btn" id="showinfo"  name="showinfo" type="button" value="查看商品" onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)" /><!--id==1,2,3,4-->
        		    <input class="nom_btn"  name="buy" type="button" value="购买" onclick=
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
