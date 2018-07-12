  function yzm(register)
	{
		var num1=Math.round(Math.random()*1000000);
		var num=num1.toString().substr(0,4);
		document.write("<img name=codeimg src='./yanzhengma.php?num="+num+"'>");
		register.check1.value=num;
	}

	function code(register)
	{
		var num1=Math.round(Math.random()*1000000);
		var num=num1.toString().substr(0,4);
		document.codeimg.src="./yanzhengma.php?num="+num;
		register.check1.value=num;
	}

function lg(register)
	{
		 ajax=loadXMLDoc();
		  if(register.name.value==""){
		    alert("请输入用户名");
		    register.name.focus();
			return false;
		   }
		   if(register.password.value==""||register.password.value.length<6)
		   {
		   	alert("请输入密码或密码需大于6位数");
		   	register.password.focus();
		   		return false;
		   }
		   if(register.check.value=="")
		   {
		   	alert("请输入验证码");
		   	register.check.focus();
		   	return false;
		   }
		    if(register.check.value!=register.check1.value)
		   {
		   	register.check.select();
		   	code(register);
		   	return false;
		   }
		   
			var user = register.name.value;
			var password = register.password.value;
			var url = "../colltroler/shkname.php?user="+user+"&password="+password;
			 ajax.open("GET",url,true);
		         ajax.onreadystatechange=function()
		         {
			  	     if(ajax.readyState==4&&ajax.status==200)
			  		 {
			  			var data=ajax.responseText;
			  			if(data==1)
							{
								alert("用户名或密码错误");
								register.password.select();
								register.check.value='';
								code(register);
								return false;
							}else if(data==3)
							{
								alert("该用户已被冻结，请联系管理员");
								return false;
							}
							else  {
								alert("欢迎光临");
								location.reload();
							}
			  			}
		    	   }
	          ajax.send(null);
	          return false;
	}
	function reg(){
		window.open("zhuce.php","_blank","width=600,height=550",false);//_blank - URL加载到一个新的窗口。这是默认
	}
	function found(){
		window.open("found.php","_blank","width=500,height=450",false);
	}
	function logout()
	{
		if(confirm("确认要退出登陆吗？")){
			window.open('logout.php','_parent',false);
		}else{
			return false;
		}
	}