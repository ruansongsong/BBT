function InputCheck(LoginForm)
{
  if (LoginForm.username.value == "")
  {
    alert("请输入用户名!");
    LoginForm.username.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("请输入密码!");
    LoginForm.password.focus();
    return (false);
  }
}

function InputCheck(RegForm)
{
  if (RegForm.username.value == "")
  {
    alert("用户名不可为空!");
    RegForm.username.focus();
    return (false);
  }
  if (RegForm.password.value == "")
  {
    alert("必须设定登陆密码!");
    RegForm.password.focus();
    return (false);
  }
  if (RegForm.repass.value != RegForm.password.value)
  {
    alert("两次密码不一致!");
    RegForm.repass.focus();
    return (false);
  }
}
function openme(){
document.getElementById('div1').style.display='block';
document.getElementById('div2').style.display='block';
}
function closeme(){
document.getElementById('div1').style.display='none';
document.getElementById('div2').style.display='none';
}
function logo_in(){alert()
//验证
//转向...
//myform.action=""
//myform.submit()
closeme();
}