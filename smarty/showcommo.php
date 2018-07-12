<?php
include_once '../model/mysql.clss.php';
include_once 'config/smarty_ini.php';
$id=$_GET['id'];
$helper=new helper();
$sql="select * from tb_commo where id=".$id;
$rst = $helper->dql($sql);
$smarty->assign('arr',$rst);
$smarty->display('showcommo.tpl');
?>