<?php
include_once '../model/mysql.clss.php';
include_once 'config/smarty_ini.php';
$helper=new helper();
$sql1="select id,shopping from tb_user where id =".$_SESSION['id'];
$rst=$helper->dql($sql1);
if($rst[0]['shopping']==null)
{
 echo "<p>";
 echo "购物车里暂时没有商品";
 echo "<a href='shouye.php'>返回继续购物</a>";
 echo "</p>";
 exit();
}
$tmparr[0]=$rst[0]['shopping'];
$commarr=array();
foreach($tmparr as $value)
{
	$tmpnum=explode('@',$value);
	$shopnum=count($tmpnum);
	$sum=0;
	foreach ($tmpnum as $key=> $value) {
		$s_commo=explode(',', $value);
		$sql2="select id,name,m_price,fold,v_price from tb_commo";
		$commsql=$sql2." where id = ".$s_commo[0];
		$commrst=$helper->dql($commsql);
		$arr=$commrst;
		$arr[0]['num']=$s_commo[1];
		$arr[0]['total']=intval($s_commo[1])*intval($arr[0]['v_price']);
		$sum+=$arr[0]['total'];
		$commarr[$key]=$arr[0];
	}
}
$smarty->assign('shoparr',$shopnum);//商品种类
$smarty->assign('commarr',$commarr);//购物车的商品
$smarty->assign('sum',$sum);//购物车中商品的价格
$smarty->assign('tittle','我的购物车');
$smarty->display('myshopcar.tpl');
?>