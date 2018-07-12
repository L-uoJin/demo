<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("../model/system.inc.php");  						//包含配置文件
include_once 'func/upfile.php';
$fileinfo = $_FILES['pics'];				//商品图片
/*  获取图片路径  */
$reback = uppic($fileinfo);
if($reback === false){
	echo '上传失败，类型错误，或超出大小';
	exit();
}else{

	$sql="insert into tb_commo(name,pric,info,addtime,area,model,class,brand,stocks,m_price,v_price,fold,isnew,isnom)values('".$_POST['name']."','".$reback."','".$_POST['info']."','".date("Y-m-d H:i:s")."','".$_POST['area']."','".$_POST['model']."','".'0'."','". $_POST['brand']."','".$_POST['stocks']."','".(float)$_POST['m_price']."','".(float)$_POST['m_price'] * (float)$_POST['fold'] / 10 ."','".(float)$_POST['fold']."','".$_POST['isnew']."','".$_POST['isnom']."')";
	$rst = $admindb->ExecSQL($sql,$conn);
    echo $sql;
	if($rst){
		echo '<script>alert(\'添加成功\');location=(\'addcommo.php\');</script>';
	}else{
		echo '<script>alert(\'添加失败\');location=(\'addcommo.php\');</script>';
	}
}
?>