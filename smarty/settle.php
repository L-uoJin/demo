<?php
include_once 'config/smarty_ini.php';
$fst=$_GET['fst'];
$snd=$_GET['snd'];
$uid=$_GET['uid'];
$smarty->assign('fst',$fst);
$smarty->assign('snd',$snd);
$smarty->assign('uid',$uid);
$smarty->display('settle.tpl');