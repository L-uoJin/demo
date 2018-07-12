<script type="text/javascript" src="js/settle.js"></script>
<form id='buyform' name='buyform' method='post' action='settle_chk.php' >
	<table>
		<tr><td>收货人<input type="text"  name="taker" id="taker" /></td></tr>
		<tr><td>邮编<input type="text"  name="code" id="code" /></td></tr>
		<tr><td>电话<input type="text"  name="tel" id="tel" /></td></tr>
		<tr><td>地址<input type="text"  name="address" id="address" /></td></tr>
		<tr><select id="del_method" name="del_method" name="del_method" id="del_method">
			<option value="平邮">平邮</option>
			<option value="快递">快递</option>
			<option value="送货上门">送货上门</option>
		</select>
		</tr>
		<tr><select id="pay_method" name="pay_method">
			<option value="银行转账">银行转账</option>
			<option value="邮局汇款">邮局汇款</option>
			<option value="支付宝">支付宝</option>
		</select>
		</tr>
		<tr><td><input type="hidden" id="fst" name="fst" value="<{$fst}>" /></td></tr>
		<tr><td><input type="hidden" id="snd" name="snd" value="<{$snd}>" /></td></tr>
		<tr><td><input type="hidden" id="uid" name="uid" value="<{$uid}>" /></td></tr>
		<tr><td><input type="submit" name="enter" id="enter" value="提交订单" onclick="return settles(buyform)"  /></td></tr>
	</table>
</form>