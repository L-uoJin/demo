function queryrst(form)
{
	if(form.name.value!='')
	  var name=form.name.value;
    else name='';
	if(form.formid.value!='')
	   var formid = form.formid.value;
    else formid='';
	if(name==''&&formid=='')
	{
		alert('用户或订单号至少有一个不能为空');
		form.name.focus();
		return false;
	}
	var url="../colltroler/query.php?vendee="+name+"&formid="+formid;
	xmlhttp=loadXMLDoc();
	xmlhttp.open('GET',url,true);
	xmlhttp.onreadystatechange=showfm;
	xmlhttp.send(null);

}

function showfm()
{
 if(xmlhttp.readyState==4)
 {
 	var msg=xmlhttp.responseText;
 	if(msg==0)
 	{
 		exam.innerHTML='';
 		alert('没有查询结果');
 	}
 	else{
 		exam.innerHTML=msg;
 	}
 }
}