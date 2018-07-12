<?php
include_once 'config/smarty_ini.php';
if(empty($_SESSION['member']))
{
$smarty->display('login.tpl');	
}else{
	$smarty->assign('member',$_SESSION['member']);
	$smarty->display('info.tpl');
}

?>