function pwd(register)
{
  if(register.new1.value==" "||register.new1.value.length<6)
  {
	register.name.focus();
	return false;
  }
}
function mem(member)
{
      if(member.realname.value=="")
            return false;
}