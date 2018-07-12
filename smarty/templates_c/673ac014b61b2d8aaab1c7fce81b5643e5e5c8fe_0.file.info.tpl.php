<?php
/* Smarty version 3.1.30, created on 2018-07-09 13:03:31
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42eca3a45fc6_61791447',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '673ac014b61b2d8aaab1c7fce81b5643e5e5c8fe' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\info.tpl',
      1 => 1530959072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42eca3a45fc6_61791447 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录成功</title>
</head>
<link rel="stylesheet" type="text/css" href="./css/my.css">
<?php echo '<script'; ?>
 src="./js/login.js"><?php echo '</script'; ?>
>
<body>
	<big>昵称：<i><?php echo $_smarty_tpl->tpl_vars['member']->value;?>
</i></big></br></br>
	<a href="?page=""" id="info" class="lk">返回商品列表</a></br></br>
	<a href="?page=hyzx" id="info" class="lk">会员中心</a></br></br>
	<a href="?page=shopcar" class="lk">查看购物车</a></br></br>
	<a href="?page=queryform" class="lk">查看订单</a></br></br>
	<a href="javascript:logout()" style="cursor:hand" id="info">安全离开</a>
</body>
</html><?php }
}
