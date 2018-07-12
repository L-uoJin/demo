<?php
/* Smarty version 3.1.30, created on 2018-07-02 17:01:28
  from "F:\webphp\php-7.2.4\www\dianshang\smarty\templates\info.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b39e9e8e63873_57727549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038cb265d23f5c8921abaf86c3eeef9a1323f0b0' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\dianshang\\smarty\\templates\\info.tpl',
      1 => 1526008606,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b39e9e8e63873_57727549 (Smarty_Internal_Template $_smarty_tpl) {
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
	<?php echo $_smarty_tpl->tpl_vars['member']->value;?>

	<a href="member.php" id="info" class="lk">会员中心</a></br>
	<a href="?page=shopcar" class="lk">查看购物车</a></br>
	<a href="queryform.php" class="lk">查看订单</a></br>
	<a href="javascript:logout()" style="cursor:hand" id="info">安全离开</a>
</body>
</html><?php }
}
