<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("../model/system.inc.php");  						//包含配置文件
$smarty->display('bottom.tpl');
?>