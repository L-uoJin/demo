<?php
session_start();
include_once '../model/mysql.clss.php';
$helper = new helper();
$oldpwd=array();
$oldpwd['password']=md5($_POST['new1']);
$table="tb_user";
$id=$_SESSION['id'];
$updaterst=$helper->update_dml($table,$oldpwd,$id);
if($updaterst==1)
{
	echo "<script>alert('修改成功');location=('../smarty/shouye.php');</script>";
}
else{
	echo "<script>alert('修改失败');history.go(-1);</script>";
}
?>