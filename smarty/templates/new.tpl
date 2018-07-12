<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品展示</title>
        <link rel="stylesheet" href="./css/my.css" />
</head>
<body>
	<script src="js/createxmlhttp.js"></script>
	<script src="js/showcommo.js"></script>
	<table border="0" cellspacing="0" cellpadding="0">
	<tr><td colspan ="4" align="left"><a class="nom_a" href="?page="""><<返回</a></td></tr>
	<tr>
        <{foreach key=key item=item from=$nomarr}>
        <td>
        	<table border="0" cellpadding="0" cellspacing="0">

        		<tr>
        			<td width="220" height="250"><img src="<{$item.pric}>" width="190" height="250" alt="<{$item.name}>" /></td>
        		</tr>
        		<tr><td class="nom_name">&nbsp;<{$item.name}></td></tr>
        		<tr><td>市场价格：<{$item.m_price}>元&nbsp;</td></tr>
        		<tr><td style="font-weight: bold;">会员价格：<{$item.v_price}>元&nbsp;</td></tr>
        		<tr><td>
        			<input class="nom_btn" id="showinfo"  name="showinfo" type="button" value="查看商品" onclick="openshowcommo(<{$item.id}>)" /><!--id==1,2,3,4-->
        		    <input class="nom_btn" id="buy"  name="buy" type="button" value="购买" onclick=
        		    "buycommo(<{$item.id}>)" />
        		</td></tr>
                        
        	</table>
        </td> 
        <{/foreach}>
        <td>&nbsp;</td></tr>
        <tr><td colspan="6">&nbsp;</td></tr>
	</table>
</body>
</html>