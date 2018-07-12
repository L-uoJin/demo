<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员信息显示</title>
	<link rel="stylesheet" href="./css/my.css" />
</head>
	<script src="./js/member.js"></script>
<body>
	<a href="?page=hyzx" style="text-decoration: none;color: red;font-weight: bold;">返回</a>
	<table id="table" >
	<form id="member" name="member" method="post" action="../colltroler/modify_info_chk.php" onsubmit="return mem(member)">
	<tr > <td colspan="2"><big><{$rst.name}>信息</big>（<i>真实姓名不可更改</i>）</td></tr>
	<tr><td>会员编码：</td><td>&nbsp;<{$rst.id}></td></tr>
	<tr><td>真实姓名：</td><td><input type="text" name="realname" value="<{$rst.realname}>" /></td></tr>
	<tr><td>会员手机号：</td><td> <input type="text" name="tel" value="<{$rst.tel}>" /></td></tr>
    <tr><td>会员固话：</td><td><input type="text" name="phone" value="<{$rst.phone}>" /></td></tr>
	<tr><td>会员身份证：</td><td> <input type="text" name="card" value="<{$rst.card}>" /></td></tr>
	<tr><td>会员email：</td><td> <input type="text" name="Email" value="<{$rst.Email}>" /></td></tr>
	<tr><td>会员邮编：</td><td> <input type="text" name="code" value="<{$rst.code}>" /></td></tr>
	<tr><td>会员住址：</td><td> <input type="text" name="address" value="<{$rst.address}>" /></td></tr>
	<tr><td>会员QQ：</td><td> <input type="text" name="QQ" value="<{$rst.QQ}>" /></td></tr>
	<tr><td><input class="membershow_1" name="enter" type="submit" id="enter" value="修改" /></td>
		<td ><input class="membershow_1" name="reset" type="reset" id="reset" value="重置"></td>
  	</tr>
	</form>
	</table>
</body>
</html>