<?php
/* Smarty version 3.1.30, created on 2018-07-09 17:04:55
  from "F:\webphp\php-7.2.4\www\shudian\admin\smarty\templates\left.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b432537f1d6d9_91208109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38ee751332759bef86bd6b0fd654b080a2306930' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\admin\\smarty\\templates\\left.tpl',
      1 => 1531011430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b432537f1d6d9_91208109 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="css/left.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 language="javascript" src="js/left.js"><?php echo '</script'; ?>
>
<table width="190" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="right" id="left_td">
<div id="type" align="center" style="background-image:url(images/admin5.gif)" onclick="javascript:change(one,type);">商品管理</div>
<div id="one">
<div id="addcommo" align="center"><a href="addcommo.php" target="mainFrame" id="menu">添加商品</a></div>
<div id="showcommo" align="center"><a href="showcommo.php" target="mainFrame" id="menu">查看商品</a></div>
<div id="showform" align="center"><a href="showform.php" target="mainFrame" id="menu">查看订单</a></div>
 </div>
<div id="user" align="center" style="background-image:url(images/admin5.gif)" onclick="change(three,user)">用户管理</div>
<div id="three" style="display:none;">
<div id="manager" align="center"><a href="admin.php" target="mainFrame" id="menu">管理员管理</a></div>
<div id="member" align="center"><a href="member.php" target="mainFrame" id="menu">会员管理</a></div>
</div>


<div id="public" align="center" style="background-image:url(images/admin5.gif)" onclick="change(four,public)">公告管理</div>
<div id="four" style="display:none;">
<div id="addpublic" align="center"><a href="addpublic.php" target="mainFrame" id="menu">添加公告</a></div>
<div id="showpublic" align="center"><a href="showpub.php" target="mainFrame" id="menu">查看公告</a></div>
</div>


<div id="frelink" align="center" style="background-image:url(images/admin5.gif)" onclick="change(five,frelink)">友情链接</div>
<div id="five" style="display:none;">
<div id="addlinks" align="center"><a href="links.php" target="mainFrame" id="menu">添加链接</a></div>
<div id="showlinks" align="center"><a href="showlinks.php" target="mainFrame" id="menu">查看链接</a></div>
</div> 
</td>
  </tr>
</table>
<?php }
}
