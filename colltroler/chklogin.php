<?php
//1 成功  2：没有用户登录  3：商品已添加 4：添加时错误 5：没有商品添加
session_start();
include_once '../model/mysql.clss.php';
$reback=0;
$helper =new  helper();
if(empty($_SESSION['member']))
{
	$reback=2;
}
else{
	$key=$_GET['key'];
	if($key=='')
	{
		$reback='5';
	}
	else {
		$id =(int)$_SESSION['id'];
		$boo=false;
		$addshop=array();
		$sql="select id,shopping from tb_user where id=".$id;
		$srt =$helper->dql($sql);
		$shopcont=$srt[0]['shopping'];//转为一维数组
		if(!empty($shopcont))
		{
			$arr=explode('@', $shopcont);//分割成新数组
			foreach ($arr as  $value) {
		      if($key==$value[0])
		      {
		      	$reback=3;
		      	$boo=true;
		      	break;
		      }
			}
			if(!$boo)
			{
				$shopcont.='@'.$key.',1';
				$addshop['shopping']=$shopcont;
				$table="tb_user";
                $id=$_SESSION['id'];
				$updatesql=$helper->update_dml($table,$addshop,$id);
				if($updatesql!=1)
				{
					$reback=4;
				}
				else{
					$reback=1;
				}
			}
			}else{
				$temparr=$key.",1";
				$addshop['shopping']=$temparr;
				$table="tb_user";
                $id=$_SESSION['id'];
				$updatesql=$helper->update_dml($table,$addshop,$id);
				if($updatesql!=1)
				{
					$reback=4;
				}
				else{
					$reback=1;
				}
			}
		}
	}
	echo $reback;
	?>