<?php
session_start();
header("content-type:image/png");
$image_width=70;
$image_height=20;
$new_number="";
for($i=0;$i<4;$i++)
{
	$new_number.=substr($_GET['num'], $i,1);
} 
$_SESSION['check']=$new_number;     //将获取的随机数存储到session变量中
$num_image=imagecreate($image_width,$image_height);   //创建一个画布
imagecolorallocate($num_image,255,200,170);   //设置画布颜色
for($i=0;$i<strlen($_SESSION['check']);$i++){  //依次读取session变量中的随机数
$fon=mt_rand(3,5);                       //设置随机字体
$x=mt_rand(1,8)+$image_width*$i/4;         //设置随机数所在的X坐标
$y=mt_rand(1,$image_height/4);          //设置随机数所在的Y坐标
$color=imagecolorallocate($num_image,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));   //设置字符颜色
imagestring($num_image,$fon,$x,$y,$_SESSION['check'][$i],$color);  //水平输出字符
}
imagepng($num_image);       //生成一个png格式的图像
imagedestroy($num_image);   //释放图像资源 */
?>