<?php
include_once '../model/mysql.clss.php';
$reback=0;
$helper =new  helper();
session_start();
$rd=$_GET['rd'];
$chk=$_GET['chk'];
if($chk==2)
{
 	$sql="select id,shopping from tb_user where id=".$_SESSION['id'];
	$srt =$helper->dql($sql);
	$shopcont=$srt[0]['shopping'];//转为一维数组
	if(!empty($shopcont))
	{
		$arr1=explode('@', $shopcont);//分割成新数组
		$rd=explode(',', $rd);//分割成新数组
		foreach ($rd as  $rdvalue) {
		foreach ($arr1 as $key=> $value) {
	      if($rdvalue[0]==$value[0]) 
	      {
	      	unset($arr1[$key]);
	      	break;
	      }
		}
	}
	$addshop='';
	$arr=array_values($arr1);
		foreach ($arr as $key => $value) {
			$addshop.=$value[0].$value[1].$value[2].'@';
		}
		$addshop=trim($addshop,"@");
		$table="tb_user";
		$id=$_SESSION['id'];
		$updatesql="update ".$table." set shopping ='".$addshop."'where id =".$_SESSION['id'];
		$updaterst=$helper->exectue_dml($updatesql);
		if($updaterst!=1)
		{
			$reback=2;
		}
		else{
			$reback=1;
		}
   }
   }
else{
   $addshop['shopping']='';
	$table="tb_user";
	$id=2;
	$updatesql="update ".$table." set shopping ='' where id =".$_SESSION['id'];
		$updaterst=$helper->exectue_dml($updatesql);
		if($updaterst!=1)
	{
		$reback=2;
	}
	else{
		$reback=1;
	}
}
echo $reback;
?>