<?php
include_once 'config/smarty_ini.php';
include_once '../model/mysql.clss.php';
$id=$_GET['fid'];
$helper=new helper();
$sql="select * from tb_form where formid=".$id;
$rst=$helper->dql($sql);
$formarr=$rst;
$commname=explode(',',$formarr[0]['commo_name']);
$commnumber=explode(',',$formarr[0]['commo_num']);
$commagoprice=explode(',', $formarr[0]['agoprice']);
$commfold=explode(',', $formarr[0]['fold']);

$smarty->assign('formarr',$formarr[0]);
$smarty->assign('commname',$commname);
$smarty->assign('commnumber',$commnumber);
$smarty->assign('commagoprice',$commagoprice);
$smarty->assign('commfold',$commfold);
$smarty->assign('tittle','订单提交成功');
$smarty->display('forminfo.tpl');
?>