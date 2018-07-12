<?php
include_once '../model/mysql.clss.php';
$name=$_GET['user'];
if(!empty($_GET['answer']))$answer= $_GET['answer'];
if(!empty($_GET['pwd1']))$password =$_GET['pwd1'];
$reback=0;
$helper = new helper();
if(empty($answer)&&empty($password))
{
  $namesql="select * from tb_user where name = '".$name."'";
  $namerst=$helper->dql($namesql);
if($namerst!=null)
{
  $question=$namerst[0]['question'];
  $reback=$question;
}
}
else if(!empty($answer))
{
   $namesql="select * from tb_user where name= '".$name."' and answer= '".$answer."'" ;
   $answerrst=$helper->dql($namesql);
   if($answerrst!=null)
   {
   	$reback=1;
   }
}
else if(!empty($password))
{
	$sql= "select * from tb_user where name='".$name."'";
	$rst=$helper->dql($sql);
	if($rst!=null)
	{
		$password1=md5($password);
		$updatesql= "update tb_user set password='".$password1."' where name='".$name."'";
		$updaterst= $helper->exectue_dml($updatesql);
		if($updaterst==1)
		$reback=1;
	}
}
echo $reback;
?>