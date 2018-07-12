<?php
/* Smarty version 3.1.30, created on 2018-07-09 17:35:50
  from "F:\webphp\php-7.2.4\www\shudian\smarty\templates\redister.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b432c769277e7_51808686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d96179944d1d953689efeb4279b7a3414a2d761' => 
    array (
      0 => 'F:\\webphp\\php-7.2.4\\www\\shudian\\smarty\\templates\\redister.tpl',
      1 => 1530452744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b432c769277e7_51808686 (Smarty_Internal_Template $_smarty_tpl) {
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
 src='./js/checkregister.js'><?php echo '</script'; ?>
>
</head>

<body>
    <?php echo '</script'; ?>
>
    <table border="1">
	<form name="register" action="../colltroler/reg_chk.php" method="post" onsubmit="return chkinput(register)" >
	
	     <tr>
	       <td width="81" height="25"><div align="right">用户名：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="name" name="name" type="text"  onblur="checkname()" />
	            <input id="c_name"  name="c_name" type="hidden" value="not" />&nbsp;<font color="red">*
                 </font>
            </td>
            <td height="25"><div id="name1"><font color="#999999">请输入用户名</font></div></td>
	       
	     </tr>

         <tr>
	       <td width="81" height="25"><div align="right">密码：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="passwd" name="passwd" type="password"  onblur="checkpawd(register)" />
	            <font color="red">*</font>
            </td>
            <td height="25"><div id="passwd1"></div></td>
	       
	     </tr>
	     
	      <tr>
	       <td width="81" height="25"><div align="right">确认密码：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="passwd2" name="passwd2" type="password"  onblur="checkpawd1(register)" />
	            <font color="red">*</font>
            </td>
            <td height="25"><div id="passwd3"></div></td>
	     </tr>

            <tr>
	       <td width="81" height="25"><div align="right">密保问题：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input  id="shuru1" name="question" type="text"   />    
            </td>
            <td height="25"><font color="red" >*</font></td>
	     </tr>

         <tr>
	       <td width="81" height="25"><div align="right">密保答案：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input  id="shuru2" name="answer" type="text"  /> 
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>

	      <tr>
	       <td width="81" height="25"><div align="right">真实姓名：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input  id="shuru3" name="realname" type="text"   /> 
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>
        

         <tr>
	       <td width="81" height="25"><div align="right">身份证号码：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input  id="shuru4" name="card" type="text"   />
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>

	     <tr>
	       <td width="81" height="25"><div align="right">移动电话：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input  id="shuru5" name="tel" type="text"   />
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>

         	 <tr>
	       <td width="81" height="25"><div align="right">固定电话：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="shuru6" name="phone" type="text"   />  
            </td>
            <td height="25"> <font color="red">*</font></td>
	     </tr>
			
			 <tr>
	       <td width="81" height="25"><div align="right">qq号码：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="shuru7" name="QQ" type="text"   />   
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>
				
			 <tr>
	       <td width="81" height="25"><div align="right">Email：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input  id="shuru8" name="Email" type="text"  /> 
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>

            <tr>
	       <td width="81" height="25"><div align="right">邮编：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input  id="shuru9" name="code" type="text"   />   
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>

 		<tr>
	       <td width="81" height="25"><div align="right">联系地址：</div></td>
	       <td height="25" colspan="3">&nbsp;
	            <input id="shuru10" name="address" type="text"  /> 
            </td>
            <td height="25"><font color="red">*</font></td>
	     </tr>



 		<tr>
 			<td height="25"><div align="right">验证码</div></td>
 			<td width="65" height="25">&nbsp;
			<input  type="text" name="yzm"  size="10"  onblur="chkyzm(register)" />
			<input name="yzm2" id="yzm2" type="hidden" value=" " /></td>
			<td width="65" align="center" valign="middle"><?php echo '<script'; ?>
>yzmimg(register)<?php echo '</script'; ?>
></td>
			<td width="51" ><a href="javascript:code(register)">看不清</a></td>
			<td height="25"><div id="yzm1"><font color="#999999">输入验证码</font></div>
			  <input id="yzm3"  name="yzm3" type="hidden" value="not" />&nbsp;
            </td>
 		</tr>

		 <tr>
	     	<td height="25" colspan="2">&nbsp;<input type="submit" value="提交" />&nbsp;&nbsp;
	            <input type="reset" value="重置" />
	     	</td>
	     	<td height="25" colspan="3"><div style="color:#ff0000">带"*"号的为必填项</div></td>
	     </tr>	
</form>
</table>	
</body>
</html>
<?php }
}
