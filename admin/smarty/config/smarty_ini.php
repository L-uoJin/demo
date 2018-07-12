<?php
//define('BASE_PATH',"F:\webphp\php-7.2.4\www\\");
define('BASE_PATH', $_SERVER['DOCUMENT_ROOT']);
define('SMARTY_CLASS_PATH', "\shudian\admin\smarty\libs\\");
define('SMARTY_PATH', "\shudian\admin\smarty\\");
require_once(BASE_PATH.SMARTY_CLASS_PATH."Smarty.class.php" );
$smarty=new Smarty;
$smarty->template_dir=BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir=BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->left_delimiter='<{';
$smarty->right_delimiter='}>';
?>