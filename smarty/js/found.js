function chkname(form)
{
	ajax=loadXMLDoc();
	var user = form.user.value;
	if(user=="")
	{
		alert("请输入用户名");
		form.user.focus();
		return false;
	}
	else{
		var url="../colltroler/foundpwd.php?user="+user;
			 ajax.open("GET",url,true);
		         ajax.onreadystatechange=function()
		         {
			  	     if(ajax.readyState==4&&ajax.status==200)
			  		 {
			  			var data=ajax.responseText;
			  			if(data==0)
							{
								alert("没有该用户，请重新查找！");
								form.user.select();
								return false;
							}
							else{
								document.getElementById("first").style.display="none";
								document.getElementById("second").style.display='';
								document.getElementById("question").innerHTML=data;
							}
			  		}
		    	   }
	          ajax.send(null);
	  }
}

function chkanswer(form)
{
	ajax=loadXMLDoc();
	var user = document.getElementById('user').value;
	var answer=form.answer.value;
	if(answer=="")
	{
		alert("请输入密保答案");
		form.user.focus();
		return false;
	}
	else{
		var url="../colltroler/foundpwd.php?user="+user+"&answer="+answer;
			 ajax.open("GET",url,true);
		         ajax.onreadystatechange=function()
		         {
			  	     if(ajax.readyState==4&&ajax.status==200)
			  		 {
			  			var data=ajax.responseText;
			  			if(data==0)
							{
								alert("问题回答错误");
								form.answer.select();
								return false;
							}
							else{
								document.getElementById("second").style.display="none";
								document.getElementById("third").style.display='';
							}
			  			}
		    	   }
	          ajax.send(null);
	}
}
function chkpasswd(form)
{
	ajax=loadXMLDoc();
	var user = document.getElementById('user').value;
	var passwd1 =form.pwd1.value;
	var passwd2 = form.pwd2.value;
	if(passwd1==""||passwd1.length<6)
	{
		alert("请输入密码或密码需达6位数");
		form.user.focus();
		return false;
	}
	else{
		var url="../colltroler/foundpwd.php?user="+user+"&pwd1="+passwd1;
			 ajax.open("GET",url,true);
		         ajax.onreadystatechange=function()
		         {
			  	     if(ajax.readyState==4&&ajax.status==200)
			  		 {
			  			var data=ajax.responseText;
			  			if(data==1)
						{
						    alert("密码修改成功，请重新登录");
						     window.close();		
						}
		    	     }
	              }
	     ajax.send(null);//******///
      }
}

//2018/4/29 21:10