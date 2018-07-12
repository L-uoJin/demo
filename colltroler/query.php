<?php
include_once '../model/mysql.clss.php';
$reback=0;
$helper =new  helper();
$vendee=$_GET['vendee'];
$formid=$_GET['formid'];
$tmp="
<table width='600' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr><td height='25' colspan='7' align='center' valign='middle' class='first'>查询结果</td></tr>
<tr><td height='25' width='100'  align='center' valign='middle' class='txt'>订单号</td>
<td height='25' width='75'  align='center' valign='middle' class='center'>订货会员</td>
<td height='25' width='75'  align='center' valign='middle' class='center'>收货人</td>
<td height='25' width='100'  align='center' valign='middle' class='center'>订单金额</td>
<td height='25' width='75'  align='center' valign='middle' class='center'>付款方式</td>
<td height='25' width='75'  align='center' valign='middle' class='center'>收货方式</td>
<td height='25' width='100'  align='center' valign='middle' class='center'>订单状态</td>
</tr>
";
$sql="select id,formid,vendee,taker,total,pay_method,del_method,state from tb_form where vendee='".$vendee."' or formid= '".$formid."'";
$rst=$helper->dql($sql);
if($rst==null)
{

}else{
	foreach($rst as $value)
	{
		$tmp.="<tr><td height='25'  align='center' valign='middle' class='left'>".$value['formid']."</td>
		<td height='25'  align='center' valign='middle' class='center'>".$value['vendee']."</td>
		<td   align='center' valign='middle' class='center'>".$value['taker']."</td>
		<td   align='center' valign='middle' class='center'>".$value['total']."</td>
		<td  align='center' valign='middle' class='center'>".$value['pay_method']."</td>
		<td   align='center' valign='middle' class='center'>".$value['del_method']."</td>
		<td height='25'  align='center' valign='middle' class='right'>";
		switch ($rst[0]['state']) {
			case 0:
			$tmp.='未作处理';
				break;
			case 1:
			$tmp.='已付款';
				break;
			case 2:
			$tmp.='已发货';
				break;
			case 3:
			$tmp.='已收货';
				break;
		}
		$tmp.='</td></tr>';
	}
	$tmp.='</table>';
	$reback=$tmp;
}
echo $reback;
?>