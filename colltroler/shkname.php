<?php
session_start();
include_once '../model/mysql.clss.php';
$helper = new helper();
$reback ='0';
$sql = "select * from tb_user where name='" .$_GET['user']. "'";
if(!empty($_GET['password']))
{
	$sql.="and password ='".md5($_GET['password'])."'";
}
$rst =$helper->dql($sql) ;
if($rst!=null)
{
    if($rst[0]['isfreeze']!=0)
    {
    	$reback='3'; 
    }else {
    	$_SESSION['member']=$rst[0]['name'];
    	$_SESSION['id']=$rst[0]['id'];
    	$reback=2;
    }
}
else $reback=1;
echo  $reback;

?>