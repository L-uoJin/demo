<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><{$tittle}></title>
</head>
	<script src="js/createxmlhttp.js"></script>
	<script type="text/javascript" src="js/shoparr.js"></script>
	<link rel="stylesheet" href="./css/my.css" />
<table>
	<form action="#" id="myshoparr" name="myshoparr" method="post">
		<tr><td colspan="7" class="myshopcar_1">&nbsp;<{$tittle}></td></tr>
		<tr>
		<td class="myshopcar_2">&nbsp;</td>
		<td class="myshopcar_3">商品名称</td>
		<td class="myshopcar_4">购买数量</td>
		<td class="myshopcar_5">市场价格</td>
		<td class="myshopcar_6">会员价格</td>
		<td class="myshopcar_7">折扣率</td>
		<td class="myshopcar_8">合计</td>
		</tr>
		<{foreach key=key item=item from=$commarr}>
		<!-- key值是下标-->
		<tr><td><input id="chk" name="chk[]"  type="checkbox" value="<{$item.id}>" /></td>
 		<td><div id="c_name<{$key}>" >&nbsp;<{$item.name}></div></td>
		<td><input id="cnum<{$key}>" name="cnum<{$key}>"  type="text" value="<{$item.num}>" 
		onkeyup="cvp(<{$key}>,<{$item.v_price}>,<{$item.m_price}>)"/></td>
		<td><div id="m_price(<{$key}>)">&nbsp;<{$item.m_price}></div></td>
		<td><div id="v_price(<{$key}>)">&nbsp;<{$item.v_price}></div></td>
		<td><div id="fold(<{$key}>)">&nbsp;<{$item.fold}></div></td>
	    <td><div id="total(<{$key}>)">&nbsp;<{$item.total}></div></td>
		</tr>
		<{/foreach}>
		<tr id="myshopcar_id">
			<td colspan="3" height="50">
				<a href="#" onclick="return alldel(myshoparr)">全选</a>
				<a href="#" onclick="return overdel(myshoparr)">反选</a>&nbsp;&nbsp;
				<input type="button" value="删除选择" onclick="return del(myshoparr)"/>
			</td>
			   <td><input type="button" value="继续购物" onclick="return continnueshop()"/></td> 
			    <td><input type="hidden" value="<{$smarty.session.member}>"  id="uid" name="uid"/>
					<input type="button"  value="去收银台" onclick="return formset(myshoparr)" />
					<td colspan="2"><div id="num">共计：<span class="myshopcar_9"><{$sum}></span>&nbsp;元</div></td>
			    </td> 
		</tr>
	</form>
</table>
<body>
	
</body>
</html>