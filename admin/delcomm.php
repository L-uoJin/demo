<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("../model/system.inc.php");  	
$rd = $_GET['rd'];
$arr=array();
$reback = "1";
$arr = explode(",",$rd);
if(is_array($arr) ){
    $len_count = count ( $arr );
}else{
    $len_count = strlen($arr);
}
for($i = 0; $i < $len_count; $i++){
	$sql = "delete from tb_commo where id = ".$arr[$i];
	$arr = $admindb->ExecSQL($sql,$conn);
	if(false == $arr){
		$reback = "0";
		break;
	}
}
echo $reback;
?>