<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="css/my.css">
<script type="text/javascript" src="js/createxmlhttp.js"></script>
<script type="text/javascript" src="js/queryform.js"></script>
<body>
<form id="queryform" name="queryform" action="#" method="post">
<table>
	<tr><td class="queryform_1">订单查询<i><small>（任填一项）</small></i></td></tr>
	<tr>
		<td class="queryform_2">查询用户：<input type="text"  id="name"  name="name" class="txt" /></td>
	</tr>
	<tr>
		<td class="queryform_2">查询订单号：<input type="text"  id="formid"  name="formid" class="txt" /></td>
	</tr>
	<tr>
	<td><input type="button"  id="enter"  name="enter" class="btn" 
	value="查询" onclick="return queryrst(queryform)" /></td>
	</tr>
</table>	
</form>	
<div id="exam" ></div>
</body>
</html>
