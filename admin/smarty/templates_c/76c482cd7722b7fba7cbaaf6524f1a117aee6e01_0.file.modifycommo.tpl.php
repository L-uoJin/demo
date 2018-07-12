<?php
/* Smarty version 3.1.30, created on 2018-07-09 12:52:55
  from "F:\webphp\php-7.2.4\www\shudian\admin\smarty\templates\modifycommo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42ea273d5615_61726736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76c482cd7722b7fba7cbaaf6524f1a117aee6e01' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\admin\\smarty\\templates\\modifycommo.tpl',
      1 => 1531111677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42ea273d5615_61726736 (Smarty_Internal_Template $_smarty_tpl) {
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
 language="javascript" src="js/modicommo.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<table width="720" border="0" cellpadding="0" cellspacing="1">
<form id="modcommo" name="addcomm" enctype="multipart/form-data" method="post" action="modifycommo_chk.php"  onsubmit="return chkcommo(modcommo)">
   <?php
$__section_arr_id_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id'] : false;
$__section_arr_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['mcarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_arr_id_0_total = $__section_arr_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_arr_id'] = new Smarty_Variable(array());
if ($__section_arr_id_0_total != 0) {
for ($__section_arr_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] = 0; $__section_arr_id_0_iteration <= $__section_arr_id_0_total; $__section_arr_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']++){
?>
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">修改商品 </td>
    </tr>
    <tr>
        <td height="25" class="left">商品名称：</td>
        <td width="618" class="right">
            <input id="name" type="text" name="name" size="25" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['name'];?>
" class="txt" readonly="readonly">
            <font color="#FF0000">*</font>      </td>
    </tr>
    <tr>
        <td height="25" class="left">商品图片：</td>
        <td height="25" class="right">
            <input id="pics" type="file" name="pics" class="langtxt">
            <input id="picss" name="picss" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['pric'];?>
">
            </td>
    </tr>
    <tr>
        <td height="25" class="left">商品产地：</td>
        <td height="25" class="right">
            <input id="area" name="area" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['area'];?>
" class="txt">
            <font color="#FF0000">*</font>      </td>
    </tr>
    <tr>
        <td height="25" class="left">商品型号：</td>
        <td height="25" class="right">
            <input id="model" name="model" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['model'];?>
" class="txt">
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="22" class="left">商品类型：</td>
        <td height="22" class="right">
            <input id="stype" name="stype" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['class'];?>
" class="txt">        </td>
    </tr>
    <tr>
        <td height="22" class="left">商品属性：</td>
        <td height="22" class="right">
            <input id="brand" name="brand" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['brand'];?>
" class="txt">        </td>
    </tr>
    <tr>
        <td height="25" class="left">商品数量：</td>
        <td height="25" class="right">
            <input id="stocks" name="stocks" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['stocks'];?>
" class="txt">
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="25" class="left">市场价格：</td>
        <td height="25" class="right">
            <input id="m_price" name="m_price" type="text" class="shorttxt" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['m_price'];?>
" onkeyup="cvp(modcommo)">&nbsp;元
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="25" class="left">打折率：</td>
        <td height="25" class="right">
            <input id="fold" name="fold" type="text" value="<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['fold'];?>
"  class="shorttxt" onkeyup="cvp(modcommo)">&nbsp;折
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="25" class="left">会员价格：</td>
        <td height="25" class="right"><div id="v_price">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['v_price'];?>
元</div></td>
    </tr>
    <tr>
        <td height="25" class="left">是否新品：</td>
        <td height="25" class="right">
          <select id="isnew" name="isnew" class="shorttxt" >
            <option value="1" selected >是</option>
            <option value="0" selected >否</option>
          </select>     </td>
    </tr>
    <tr>
        <td height="25" class="left">是否推荐：</td>
        <td height="25" class="right">
        <select id="isnom" name="isnom" class="shorttxt" >
        <option value="1"  selected >是</option>
        <option value="0"  selected >否</option>
        </select>        </td>
    </tr>
    <tr>
        <td height="25" class="left">添加时间：</td>
        <td height="25" class="right"><div id="dt"> <?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['addtime'];?>
 </div></td>
      </tr>
    <tr>
        <td height="80" class="left">商品简介：</td>
        <td height="25" class="right"><textarea id="info" name="info" cols="80" rows="8"><?php echo $_smarty_tpl->tpl_vars['mcarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_arr_id']->value['index'] : null)]['info'];?>
</textarea></td>
    </tr>
    <tr>
        <td height="25" colspan="2" align="center" valign="bottom"><input
        id="mod" name="mod" type="submit" class="btn" value="修改"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
    &nbsp;&nbsp;<input id="reset" name="reset" type="reset" value="重写" class="btn"></td>
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
</body>
</html>
<?php }
}
