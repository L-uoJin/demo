<?php
include_once 'config/smarty_ini.php';
include_once '../model/mysql.clss.php';
$sql="select * from tb_user where id =".$_SESSION['id'];
$helper =new helper();
$rst=array();
$rst=$helper->dql($sql);
if(!empty($_GET['action'])&&!empty($_GET['page']))
{
	if($_GET['action']=='modify'&&$_GET['page']=="hyzx")
	{
		$smarty->display('modifypwd.tpl');
	}
	if($_GET['action']=='meg'&&$_GET['page']=="hyzx")
	{
		$smarty->assign('rst',$rst[0]);
		$smarty->display('membershow.tpl');
    }
}
else if(!empty($_GET['page'])&&empty($_GET['action']))
{
		if($_GET['page']=='hyzx') $smarty->display('member.tpl');
}
		


?>


