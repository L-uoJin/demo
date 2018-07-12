<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品显示</title>
</head>
<body>
	<table border="1">
	  	<tr><td>商品id:</td><td><{$arr[0].id}></td></tr>
	  	<tr><td>商品名：</td><td><{$arr[0].name}></td></tr>
	  	<tr><td>市场价格：</td><td><{$arr[0].m_price}>元</td></tr>
	  	<tr><td>会员价格：</td><td><{$arr[0].v_price}>元</td></tr>
	  	<tr><td>商品库存：</td><td><{$arr[0].stocks}>件</td></tr>
	  	<tr><td>商品介绍：</td><td><{$arr[0].info}></td></tr>
	</table>
</body>
</html>