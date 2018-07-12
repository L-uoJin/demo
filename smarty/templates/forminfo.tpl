<link rel="stylesheet" type="text/css" href="css/my.css">
<table border="1" align="center" cellpadding="0" cellspacing="0">
	<tr><td colspan="5"> 订单内容</td></tr>
	<tr><td>商品名</td><td>数量</td><td>价格</td><td>价格折率</td><td>合计</td></tr>
	<{foreach key=key item=item from=$commname}>
	<tr>
		<td><{$item}></td><td><{$commnumber[$key]}></td>
		<td><{$commagoprice[$key]}>元</td><td><{$commfold[$key]}>折</td>
		<td><{$commagoprice[$key]}>*<{$commnumber[$key]}>元</td>
	</tr>
	<{/foreach}>
	<tr><td colspan="5">总消费<{$formarr.total*0.9}>元</td></tr>
</table>
<p align="center">恭喜您！订单提交成功。<br/>请您在一周内按您的支付方式进行汇款，汇款时注明您的<font color="red">订单号</font>汇款后请及时通知我们</p>
<p ><font color="red">注意：</font>请记住<font color="red">订单号</font>以便日后查询及有疑惑时使用</p>
<p align="center"><input type="button" value="我要打印" onclick="window.print()" class="btn" /></p>