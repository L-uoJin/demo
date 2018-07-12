function openshowcommo(key){
open('showcommo.php?id='+key,'_blank','width=560 height=300',false);
}
function buycommo(key){
     xmlhttp=loadXMLDoc();
	var url="../colltroler/chklogin.php?key="+key;
	xmlhttp.open("GET",url,true);
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4)
		{
			var msg=xmlhttp.responseText;
			if(msg==2)
			{
				alert("请先登录");
				return false;
			}
			else if(msg==3)
			{
				alert('该商品已添加');
				
				return false;
			}
			else{
				alert('该商品成功添加');
				location='shouye.php?page=shopcar';
			}
		}
	}
	 xmlhttp.send(null);
}