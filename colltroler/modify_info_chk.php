<?php
session_start();
include_once '../model/mysql.clss.php';
$helper = new helper();
$mod=array();
$mod['realname']=$_POST['realname'];
$mod['card'] = $_POST['card'];
$mod['tel'] =$_POST['tel'];
$mod['phone']=$_POST['phone'];
$mod['Email']=$_POST['Email'];
$mod['QQ']=$_POST['QQ'];
$mod['code']=$_POST['code'];
$mod['address']=$_POST['address'];
$table="tb_user";
$id=$_SESSION['id'];
$updaterst=$helper->update_dml($table,$mod,$id);
if($updaterst==1)
{
	echo "<script>alert('修改成功');location=('../shouye.php');</script>";
}
else{
	echo "<script>alert('修改失败');history.go(-1);</script>";
}
?>