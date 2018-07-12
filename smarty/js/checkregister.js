
	function checkname()
	{
		  ajax=loadXMLDoc();
		  if(document.getElementById("name").value==""){
			document.getElementById("name1").innerHTML="<font color =#FF000>请输入用户名！</font>";
		   }
		   else {
			var user =document.getElementById("name").value;
			var url = "../colltroler/shkname.php?user="+user;
			 ajax.open("GET",url,true);
		         ajax.onreadystatechange=function()
		         {
			  	     if(ajax.readyState==4&&ajax.status==200)
			  		 {
			  			var data=ajax.responseText;
			  			if(data==2)
							{
								document.getElementById("name1").innerHTML="<font color =#FF000>用户名被占用！</font>";
							}else if(data==1)
							{
								document.getElementById("name1").innerHTML="<font color =green>恭喜你可以被注册</font>";
								document.getElementById("c_name").value="yes";
							}
							else if(data==0) {
								document.getElementById("name1").innerHTML="<font color =#FF000>未知错误</font>";
							}
			  			}
		    	   }
	          ajax.send(null);
		  	}
	}

	function checkpawd(register){
		if(register.passwd.value!=""||register.passwd.value.length>6)
		{
			document.getElementById("passwd1").innerHTML="<font color =green>输入正确</font>";
		    
		}
        else {
        	document.getElementById("passwd1").innerHTML="<font color =red>请输入密码</font>";
        	register.c_name.value="not";
        }
	}
	function checkpawd1(register){
		if(register.passwd2.value==""){
			document.getElementById("passwd3").innerHTML="<font color =red>请输入密码</font>";
			register.c_name.value="not";
		}
        else if(register.passwd2.value==document.getElementById("passwd").value){
        	document.getElementById("passwd3").innerHTML="<font color =green>输入正确</font>";
        }
        else {
        	document.getElementById("passwd3").innerHTML="<font color =red>请重新输入</font>";
             register.c_name.value="not";
        }
	}

	

	function chkinput(register)
	{
	  if(register.name.value==" ")
      {
      	register.name.focus();
      	return false;
      }
      if(register.c_name.value=="not"||register.yzm3.value=="not")
      {
      	register.name.select();
      	return false;
      }
	}
	function chkyzm(register)
	{
	  if(register.yzm.value=='')
		{
			yzm1.innerHTML="<font color=#ff0000>请输入有效验证码！</font>";
			register.c_name.value="not";
			register.yzm3.value="not";
		}
		else if(register.yzm.value!=register.yzm2.value)
		{
			yzm1.innerHTML="<font color=#ff0000>有效验证码错误！</font>";
			register.c_name.value="not";
			register.yzm3.value="not";
		}
		else {
			yzm1.innerHTML="<font color=green>输入正确</font>";
			register.yzm3.value="yes";
		} 
	}
	function yzmimg(register)
	{
		var num1=Math.round(Math.random()*1000000);
		var num=num1.toString().substr(0,4);
		document.write("<img name=codeimg src='./yanzhengma.php?num="+num+"'>");
		register.yzm2.value=num;
	}

	function code(register)
	{
		var num1=Math.round(Math.random()*1000000);
		var num=num1.toString().substr(0,4);
		document.codeimg.src="./yanzhengma.php?num="+num;
		register.yzm2.value=num;
	}



	