<?php
/* Smarty version 3.1.30, created on 2018-07-07 10:20:59
  from "D:\AMPP\php-7.2.4\www\dianshang\smarty\templates\myshopcar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b40940bc19385_78296303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '643f922e33785e9348dc531935756a6400d270b1' => 
    array (
      0 => 'D:\\AMPP\\php-7.2.4\\www\\dianshang\\smarty\\templates\\myshopcar.tpl',
      1 => 1530958857,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b40940bc19385_78296303 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['tittle']->value;?>
</title>
</head>
	<?php echo '<script'; ?>
 src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/shoparr.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="./css/my.css" />
<table>
	<form action="#" id="myshoparr" name="myshoparr" method="post">
		<tr><td colspan="7" class="myshopcar_1">&nbsp;<?php echo $_smarty_tpl->tpl_vars['tittle']->value;?>
</td></tr>
		<tr>
		<td class="myshopcar_2">&nbsp;</td>
		<td class="myshopcar_3">商品名称</td>
		<td class="myshopcar_4">购买数量</td>
		<td class="myshopcar_5">市场价格</td>
		<td class="myshopcar_6">会员价格</td>
		<td class="myshopcar_7">折扣率</td>
		<td class="myshopcar_8">合计</td>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
		<!-- key值是下标-->
		<tr><td><input id="chk" name="chk[]"  type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" /></td>
 		<td><div id="c_name<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div></td>
		<td><input id="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
" 
		onkeyup="cvp(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
,<?php echo $_smarty_tpl->tpl_vars['item']->value['m_price'];?>
)"/></td>
		<td><div id="m_price(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['m_price'];?>
</div></td>
		<td><div id="v_price(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
</div></td>
		<td><div id="fold(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['fold'];?>
</div></td>
	    <td><div id="total(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
)">&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</div></td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		<tr id="myshopcar_id">
			<td colspan="3" height="50">
				<a href="#" onclick="return alldel(myshoparr)">全选</a>
				<a href="#" onclick="return overdel(myshoparr)">反选</a>&nbsp;&nbsp;
				<input type="button" value="删除选择" onclick="return del(myshoparr)"/>
			</td>
			   <td><input type="button" value="继续购物" onclick="return continnueshop()"/></td> 
			    <td><input type="hidden" value="<?php echo $_SESSION['member'];?>
"  id="uid" name="uid"/>
					<input type="button"  value="去收银台" onclick="return formset(myshoparr)" />
					<td colspan="2"><div id="num">共计：<span class="myshopcar_9"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</span>&nbsp;元</div></td>
			    </td> 
		</tr>
	</form>
</table>
<body>
	
</body>
</html><?php }
}
