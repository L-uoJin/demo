<?php
include_once '../model/mysql.clss.php';
include_once 'config/smarty_ini.php';
$sql="select id,name,pric,m_price,v_price from tb_commo where isnom=1";
$num=4;
$sql.=" limit 0,".$num;
$helper=new helper();
$rst = $helper->dql($sql);
if(!empty($_GET['page'])){
	if($_GET['page']=='new')
	{
        $sql="select id,name,pric,m_price,v_price from tb_commo where isnom=0"; 
        $rst = $helper->dql($sql);
        $smarty->assign('nomarr',$rst);
		$smarty->display('new.tpl');
	}
}
else
{
	$smarty->assign('nomarr',$rst);
$smarty->display('nominate.tpl');
} 
?>



