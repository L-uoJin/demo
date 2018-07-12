function cvp(key,vpr,shoparr)
{
	var n_pre="total";
	var name='cnum'+key.tostring();
	var total='n_pre'+key.tostring();
	var t_number=document.getElementById(num).value;
	var ttl=t_number*vpr;
	document.getElementById(total).innerHTML=ttl;
	var sm=0;
	for (var i = 0; i < shoparr; i++) {
		var aaa=document.getElementById(n_pre+i.tostring()).innerText;
		sm=parseInt(aaa);
	}
	document.getElementById('sum').innerHTML='共计:'+sm+'元';
}
function alldel(form)
{
	var leng=form.chk.length;
	if(leng==undefined)
	{
		if(!form.chk.checked)
			form.chk.checked=true;
		
	}else{
			for(var i=0;i<leng;i++)
			{
				if(!form.chk[i].checked)
				form.chk[i].checked=true;
				
			}
		}
		return false;
}
function overdel(form)
{
	var leng=form.chk.length;
	if(leng==undefined)
	{
		if(!form.chk.checked)
		   form.chk.checked=true;
		else
			form.chk.checked=false;
	}
	else{
		for (var i = 0; i < leng; i++) {
			if(!form.chk[i].checked)
			  form.chk[i].checked=true;
			else
				form.chk[i].checked=false;
			}
	}
return false;
}

function del(form)
{
	  xmlhttp=loadXMLDoc();
	if(!window.confirm('是否要删除数据？'))
	{
	}
	else{
		var leng=form.chk.length;
		if(leng==undefined)
		{
			if(!form.chk.checked)
				alert('请选取要删除的数据');
			else
			{
				rd=form.chk.value;
				var url='../colltroler/delshop.php?rd='+rd+'&chk=1';
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange=delnow;
				xmlhttp.send(null);
			}
		}else{
			var rd=new Array();
			var j=0;
			for (var i = 0; i <leng; i++) {
		       if(form.chk[i].checked)
		       {
		       	rd[j++]=form.chk[i].value;
		       }
			}
			if(rd=='')
				alert('请选取要删除的数据！');
			else{
				var url='../colltroler/delshop.php?rd='+rd+'&chk=2';
				xmlhttp.open("GET",url,true);
				xmlhttp.onreadystatechange=delnow;
				xmlhttp.send(null);
			}
		}
	}
	return false;
}
function delnow()
{
	if(xmlhttp.readyState==4)
	{
		if(xmlhttp.status==200){
			var msg=xmlhttp.responseText;
			if(msg!=1)
			{
				alert('删除失败');
			}
			else{
				alert('删除成功');
				location=('?page=shopcar');
			}
		}
	}
}
function condhop(form)//snd商品数量 fst商品id
{
	var n_pre='cnum';
	var lang=form.chk.length;
    if(lang==undefined)
    {
    	var fst = form.chk.value;
         var snd=form.cnum0.value;
    }
    else {
    	var fst=new Array();
    	var snd=new Array();
    	for(var i=0;i<lang;i++)
    	{
    		var nm=n_pre+i.tostring();
    		var stmp =document.getElementById(nm).value;
    		if(stmp==''||isNaN(stmp)){
    			alert('不允许为空、必须为数字');
    			document.getElementById(nm).select();
    			return false;
    		}
    		snd[i]=stmp;
    		var ftmp=form.chk[i].value;
    		fst[i]=ftmp;
    	}
    }
    xmlhttp=loadXMLDoc();
    var url ='../colltroler/changecar.php?fst='+fst+'&snd='+snd;
    xmlhttp.open('GET',url,true);
    xmlhttp.onreadystatechange=updatecar;
    xmlhttp.send(null);
}
function updatecar()
{ 
	if(xmlhttp.readyState==4)
	{
		var msg=xmlhttp.responseText;
		if(msg==1)
		{
			location='shouye.php';
		}
		else
		{
			alert('操作失败');
		}
	}
}
function continnueshop()
{
	location=("shouye.php");
}
 
function formset(form)
{
	var uid=form.uid.value;
	var n_pre='cnum';
	var lang =form.chk.length;
	if(lang==undefined)
	{
		var fst=form.chk.value;
		var snd=form.cnum0.value;
	}
	else {
		var fst =new Array();
		var snd= new Array();
		for (var i = 0; i <lang; i++) {
			var nm =n_pre+i.toString();
			var stmp=document.getElementById(nm).value;
			if(stmp==''||isNaN(stmp))
			{
				alert('不允许为空、必须为数字');
				document.getElementById(nm).select();
				return false;
			}
			snd[i]=stmp;
			var ftmp = form.chk[i].value;
			fst[i]=ftmp;
		}
	}
	open('settle.php?uid='+uid+'&fst='+fst+'&snd='+snd,'_blank','width=420 height=220',false);
}