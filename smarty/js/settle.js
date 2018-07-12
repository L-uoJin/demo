function settles(buyform)
	{ 
		   if(buyform.taker.value==""||buyform.code.value==""||buyform.tel.value==""||buyform.address.value=="")
		   {
		   	alert("请输入信息");
		   	buyform.taker.focus();
		   	return false;
		   }
	          return true;
	}