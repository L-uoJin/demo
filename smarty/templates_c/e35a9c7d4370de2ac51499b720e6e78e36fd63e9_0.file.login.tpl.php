<?php
/* Smarty version 3.1.30, created on 2018-07-09 13:02:56
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b42ec804ab129_61832557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e35a9c7d4370de2ac51499b720e6e78e36fd63e9' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\login.tpl',
      1 => 1530891594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b42ec804ab129_61832557 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php echo '<script'; ?>
 src='./js/createxmlhttp.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src='./js/login.js'><?php echo '</script'; ?>
>
</head>

<body>
    <?php echo '</script'; ?>
>
    <table border="1">
	<form name="register" action="shouye.php" method="post">
		<tr>
			<td colspan="4" bgcolor="#0075c3" style="color:white;" align="center">用户登录</td>
		</tr>
	     <tr>
	       <td width="81" height="25"><div align="right">用户名：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="name" name="name" type="text"  />
	            <input id="hidden"  name="hidden" type="hidden" value="not" />&nbsp;<font color="red">*
                 </font>
            </td>
	     </tr>

         <tr>
	       <td width="81" height="25"><div align="right">密码：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="password" name="password" type="password"   />
	            <input id="hidden"  name="hidden" type="hidden" value="not" />&nbsp;<font color="red">*
                 </font>
           </td>       
	     </tr>

	     </tr>

 		<tr>
 			<td height="25"><div align="right">验证码</div></td>
 			<td width="65" height="25">&nbsp;
			<input  type="text" name="check"  size="10"  />
			<input name="check1"  type="hidden" value="" /></td>
			<td width="65" align="center" valign="middle"><?php echo '<script'; ?>
 >yzm(register)<?php echo '</script'; ?>
></td>
			<td width="51" ><a href="javascript:code()">看不清</a></td>
 		</tr>

		 <tr>
	     	<td height="25" colspan="2">&nbsp;<input type="submit" value="提交" onclick="return lg(register)" />&nbsp;&nbsp;
	            <input type="reset" value="重置" />
	     	</td>
	     	<td height="25" colspan="3"><div style="color:#ff0000">带"*"号的为必填项</div></td>
	     </tr>	

	     <tr>
	     	<td height="25" colspan="2">&nbsp;<input type="submit" value="注册"  onclick="reg()" />&nbsp;&nbsp;
	     	</td>
	     	<td height="25" colspan="3"><input type="submit" value="找回密码"  onclick="found()" /></td>
	     </tr>	
</form>
</table>	
</body>
</html>
<?php }
}
