<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<script src='./js/createxmlhttp.js'></script>
	<script src='./js/login.js'></script>
</head>

<body>
    </script>
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
			<td width="65" align="center" valign="middle"><script >yzm(register)</script></td>
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
