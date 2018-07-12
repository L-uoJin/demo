<?php
include_once '../model/mysql.clss.php';
//$sql="select * from tb_form where id =-1";
$helper=new helper();
//$rst = $helper->dql($sql);
$addform = array();
$addform['vendee']=$_POST['uid'];
$addform['commo_id']=$_POST['fst'];
$addform['commo_num']=$_POST['snd'];
$addform['formid']=time();
$tmpid=explode(',',$addform['commo_id']);
$tmpnm=explode(',',$addform['commo_num']);
$number=count($tmpid);//商品种类
if($number>1)
{
	$tmpna=array();
	$tmpvp=array();
	$tmpfd=array();
	$tmptt=0;
	for ($i=0; $i <$number ; $i++) { 
		$tmpsql="select name,v_price,fold from tb_commo where id=".$tmpid[$i];
		$tmprst=$helper->dql($tmpsql);
		$tmpna[$i]=$tmprst[0]['name'];
		$tmpvp[$i]=$tmprst[0]['v_price'];
		$tmpfd[$i]=$tmprst[0]['fold'];
		$tmptt+=$tmprst[0]['v_price']*$tmpnm[$i];
	}
	$addform['commo_name']=implode(",",$tmpna);
	$addform['agoprice']=implode(',', $tmpvp);
	$addform['fold']=implode(',', $tmpfd);
	$addform['total']=$tmptt;
}
else if($number==1){
	$tmpsql="select name,v_price,fold from tb_commo where id =".$tmpid[0];
	$tmprst=$helper->dql($tmpsql);
	$addform['commo_name']=$tmprst[0]['name'];
	$addform['agoprice']=$tmprst[0]['v_price'];
	$addform['fold']=$tmprst[0]['fold'];
	$addform['total']=$tmprst[0]['v_price']*$tmpnm[0];	
}
else{
	echo 'error';
	exit();
}
$addform['taker']=$_POST['taker'];
$addform['code']=$_POST['code'];
$addform['tel']=$_POST['tel'];
$addform['address']=$_POST['address'];
$addform['del_method']=$_POST['del_method'];
$addform['pay_method']=$_POST['pay_method'];
$addform['state']=0;
$table='tb_form';
$insertsql=$helper->insert_dml($table,$addform);
if($insertsql!=1)
{
	echo "<script>alert('购买失败')history.back;</script>";
}
else {
	/*$updatedql="select * from tb_user where name= '".$_POST['uid']."'";
	$updrst=$helper->dql($updatedql);*/
	$arr=array();
	$arr['consume']=$addform['total'];
	$arr['shopping']='';
	$name=$addform['vendee'];
	/*$sql1="select id from tb_user where name='".$name."'";
	$selectsrt=$helper->dql($sql1);
	$id=$selectsrt[0]['id'];
	$table='tb_user';
	$updatedql=$helper->update_dml($table,$arr,$id);*/

	$updatedql="update tb_user set shopping='',consume='".$addform['total']."' where name='".$name."'";
	$updaterst=$helper->exectue_dml($updatedql);
	if($updaterst==1)
	{
		$fid=$addform['formid'];
		echo "<script>top.opener.location.reload();</script>";
		echo "<script>open('forminfo.php?fid=$fid','_blank','width=600 height=450',false);</script>";
	    echo "<script>window.close();</script>";
	}

}