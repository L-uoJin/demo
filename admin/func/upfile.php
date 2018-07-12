<?php

/*
 *判断文件后缀
 *$f_type：允许文件的后缀类型
 *$f_upfiles：上传文件名
 */
 
function f_postfix($f_upfiles){
	
	return substr($f_upfiles,strripos($f_upfiles, '.')+1);
}
/*
 *	上传图片
 *	参数$fileinfo为上传图片信息
 *	$default_path为默认图片，当没有上传图片时使用
 *	$picture_path为上传的图片地址。要保存到数据库中的
 */
function uppic ($fileinfo){
	$p_type = array("jpg","jpeg","bmp","gif");
	$reback=false;
	$default_path='../image/1.jpg';
	$filenameExt=strtolower(f_postfix($fileinfo['name']));
	if($fileinfo['size'] > 0 and $fileinfo['size'] < 700000){
	if(!in_array($filenameExt, $p_type))
	{
		$reback=false;
	}
	else{
       $filename=time().".".$filenameExt;
       $picture_path="../image/".$filename;
      if($fileinfo['tmp_name']){
				move_uploaded_file($fileinfo['tmp_name'],$picture_path);
				$reback = $picture_path;
			}
	}
}else{
	$reback = $default_path;
}
	return $reback;
}

?>