<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员信息修改</title>
	<link rel="stylesheet" href="./css/my.css" />
</head>
<script src="../js/member.js"></script>
	<!-- <p><{$smarty.session.member}> <a href=" ?page=hyzx&action=meg">查看信息</a>&nbsp;<a href=" ?page=hyzx&action=modify" id="mem">修改密码</a></p> -->
<body>
	<a href="?page=hyzx" style="text-decoration: none;color: red;font-weight: bold;">返回</a><br><br>
	<table>
	<form id="member" name="member" method="post" action="../colltroler/modify_pwd_chk.php" onsubmit="return pwd(member)">
	<tr><td class="modifypwd_1" colspan="2" align="center">修改密码</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>原密码：</td><td> <input type="password" name="old" id="old"  /></td></tr>
	<tr><td>新密码：</td><td> <input type="password" name="new1" id="new1"  /></td></tr>
	<tr><td>确认密码：</td><td> <input type="password" name="new2" id="new2"  /></td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td ><input class="modify_2" name="enter" type="submit" id="enter" value="修改" /></td></tr>
	</form>
	</table>
</body>
</html>