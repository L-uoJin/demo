<?php
session_start();
include_once '../model/mysql.clss.php';
$name = $_POST['name'];
$password =md5($_POST['passwd']);
$question = $_POST['question'];
$answer = $_POST['answer'];
$realname = $_POST['realname'];
$card = $_POST['card'];
$tel = $_POST['tel'];
$phone = $_POST['phone'];
$Email =$_POST['Email'];
$QQ =$_POST['QQ'];
$code = $_POST['code'];
$address = $_POST['address'];
$addtime =  date("Y-m-d H:i:s");

$sql= "insert  into tb_user(name,password,question,answer,realname,card,tel,phone,Email,QQ,code,address,addtime,isfreeze,shopping) ";
$sql.="values ('$name','$password','$question','$answer','$realname','$card','$tel','$phone','$Email','$QQ','$code','$address','$addtime','0','')";
$helper = new helper();
$rst= $helper->exectue_dml($sql);
if($rst!=1)
{
echo '<script>alert(\'添加失败\'); history.back;</script>';//简单的说就是：go(-1): 返回上一页，原页面表单中的内容会丢失；back(): 返回上一页，原页表表单中的内容会保留。 

}
else 
{
	$_SESSION['member']=$name;
	$_SESSION['id'] =$helper->insert_id();
	echo "<script>alert('注册成功');window.close();</script>";
}
?>