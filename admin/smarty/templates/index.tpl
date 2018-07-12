<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><{$title}></title>
<link  rel="stylesheet" type="text/css" href="css/login.css">
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/login.js"></script>
<body onLoad="javascript:login.user.focus()" class="body1">
<form id="login" name="long" method="post" action="#">
<table border="0" cellpadding="0" cellspacing="0"  class="index_table">
  <!-- <tr>
    <td width="341" >&nbsp;</td>
    <td width="285" height="260">&nbsp;</td>
    <td width="397">&nbsp;</td>
  </tr> -->
  <tr>
    <td colspan="2" class="index_td1">管理员登录</td>
  </tr>
  <tr>
    <td height="30" align="right" class="index_td2">用户名：</td>
    <td><input name="user" type="text" id="user" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20" ></td>
  </tr>
  <tr>
    <td height="30" align="right" class="index_td2">密码：</td>
    <td><input name="pwd" type="password" id="pwd" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="20"></td>
  </tr>
  <tr>
    <td colspan="2" height="50"><input id="enter" name="enter" type="button" value="" onClick="check_login(login)">&nbsp;&nbsp;<input id="reset" name="reset" type="reset" value=""></td>
  </tr>
  <!-- <tr>
    <td>&nbsp;</td>
    <td height="275">&nbsp;</td>
    <td>&nbsp;</td>
  </tr> -->
</table></form>

</body>
</html>
