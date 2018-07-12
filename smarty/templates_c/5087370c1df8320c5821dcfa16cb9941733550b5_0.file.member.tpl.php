<?php
/* Smarty version 3.1.30, created on 2018-07-09 13:21:10
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\member.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42f0c6a056c3_89938752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5087370c1df8320c5821dcfa16cb9941733550b5' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\member.tpl',
      1 => 1530954088,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42f0c6a056c3_89938752 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="./css/my.css" />
</head>
<body>
<div>
	<br>
	<p class="member_name">会员<?php echo $_SESSION['member'];?>
，你可执行以下操作：</p><br><br>
	<a class="member_a" href="?page=hyzx&action=meg">查看信息</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a class="member_a" href=" ?page=hyzx&action=modify" id="mem">修改密码</a>
</div>
</body>
</html>

<?php }
}
