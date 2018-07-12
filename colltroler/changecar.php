<?php
//buxuyaoyekeyi
include_once '../model/mysql.clss.php';
session_start();
$sql='select id,shopping from tb_user';
$sql.='where id='.(int)$_SESSION['id'];
$fst=$_GET['fst'];
$snd=$_GET['snd'];
$reback=0;
$helper =new helper();
$rst=$helper->dql($sql);
$changecar=array();
if($fst!=''&& $snd!='')
{
	$farr=explode(',', $fst);
	$sarr=explode(',', $snd);
	$upcar =array();
	for($i=0;$i<count($farr);$i++)
	{
		$upcar[$i]=$farr[$i].','.$sarr[$i];
	}
	if(count($farr)>1)
	{
		$changecar['shopping']=implode('@', $upcar);
	}
	else{
		$changecar['shopping']=$upcar[0];
	}
	$table="tb_user";
    $id=$_SESSION['id'];
	$updatesql=$helper->update_dml($table,$upcar,$id);
	if($updatesql!=1)
	{
		$reback=2;
	}
	else{
		$reback=1;
	}

}
?>