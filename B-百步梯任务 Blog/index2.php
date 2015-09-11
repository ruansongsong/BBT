<!DOCTYPE html>
<html>
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>My Blog</title>
	<meta name="description" content="那些">
	<meta name="author" content="啊啊啊">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
	
	
	

    
</head>
<body>
<div class="wrap-body zerogrid">
<!--------------Header--------------->
<header>
	<div class="wrap-header">
		
		<div class="top">
			<div class="socials">
				<ul>
					
				</ul>
			</div>
			<div class="buttons">
			<font face="微软雅黑">

						            <a href="链接后台登陆" onClick="document.getElementById('contact-form').reset()">后台管理</a>
									</font>
									</div>
			<div id="search">

			</div>
		</div>
		
		<div id="logo">
			<h1>My Blog</h1>
		</div>
		
		<nav>
			<div class="wrap-nav">
				<div class="menu">
					<ul>
						<li><a href="index1.php">主页</a></li>
						<li><a href="blog.php">博客</a></li>
						<li><a href="#">相册</a></li>
						<li><a href="#">关于</a></li>

					</ul>
				</div>
			</div>
		</nav>
		
	</div>
</header>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content">
		<div class="row block">


<div id="main-content" class="col-2-3">
				<div class="wrap-col">

				  <article>	
					  <div align="center">博客</div>
					</article>
					<section>
            

<?php
include 'connect_mysql.php';
//获取id值
$sql = "SELECT * FROM `blog` ORDER BY `blog`.`date` DESC  ";
$query=mysql_query ($sql);


while ($row=mysql_fetch_assoc($query))//从结果集中取得一行作为关联数组
{
echo <<<str

	<article>

<div class="heading">
    	<h2><a href="#">{$row['title']}</a></h2>
		</div>  
<div class="content">
<p> {$row['content']}</p>
</div>

<div class="info" text-align:right>
<a href="update_my_notes.php ?id={$row['id']}">修改</a> 
<a href="delete_my_notes.php ?id={$row['id']}">删除</a>
</div>

	</article>
	</br>

str;
}

?>				
						
						
					</article>
					
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-col">
					<div class="box">

						<img align="center" src="images/img4.jpg" height="100px" width="100px"/>
						<div class="content">
							
<script language=JavaScript>							
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

//-->

</script>
</head>
<body>
<div id="login">
<fieldset>






						       
</form>
</fieldset>
<body>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<body>
</style>
<script language=JavaScript>
<!--

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

//-->
</script>
<script>
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
</script>
<div id="div1"></div>
<div id="div2">
<table width="20%" border="0" cellpadding="3" cellspacing="1" style="background: #00CCFF; position:center;filter:progid:DXImageTransform.Microsoft.DropShadow(color=#CCFF00,offX=4,offY=4,positives=true)">
  <tr id="m_tr">
    <td style="text-align:center"><font  style="text-align:center" color="#FFFFFF">欢迎注册</font></td>

  </tr>
  <tr>
  <div>
<fieldset>
<form name="RegForm" method="post" action="reg.php" onSubmit="return InputCheck(this)">
<p>
    <td colspan="14" width="300%" bgcolor="#FFFFFF" height="150">
	<div id="reg">
	<p>
<label for="username" class="label">用户名:</label>
<p/>
<p>
<input  id="username" name="username" type="text" class="input" />
<p/>
<p>
<label for="password" class="label">密 码:</label>
<p/>
<p>
<input id="password" name="password" type="password" class="input" />
<p/>
<p>
<label for="repass" class="label">重复密码:</label>
<p/>
<p>
<input id="repass" name="repass" type="password" class="input" />
<p/>
<p>
<div id="reg1">
<input type="submit" name="submit" value="提交" class="left" />
 <input type="button" name="exit" value="取消" onClick="closeme()">
 </div>
 </td>

</form>


  </tr>
   </div>
</table>
</div>
</fieldset>
</body>
</html>

</body>
						</div>
					</div>
					</div>
            
		


<div class="box">
<font face="微软雅黑">
						<div class="heading"><h2>最新文章</h2></div>
						<div class="content">
                
							<ul>
								<li><a href="点击查看功能">读取数据库标题</a></li>
								<li><a href="">读取标题</a></li>
								<li><a href="">读取标题</a></li>
								
							</ul>
						</div>
					</div>
					
                    </div>
                
					<div class="box">
						<div class="heading"><h2>我们团队的照片</h2></div>
						<div class="content">
							<div class="post">
								<img src="images/img4.jpg" width="50px"/>
								<h4><a href="#">姓名</a></h4>
								<p>专业</p>
							</div>
							<div class="post">
								<img src="images/img5.jpg" width="50px"/>
								<h4><a href="#">姓名</a></h4>
								<p>专业</p>
							</div>
							<div class="post">
								<img src="images/img1.jpg" width="50px"/>
								<h4><a href="#">姓名</a></h4>
								<p>专业</p>
							</div>
                                 <div id="sidebar" class="col-1-3">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--------------Footer--------------->

<footer>
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>照片集</h2></div>
						<div class="content gallery">
							<a href="#"><img src="images/img1.jpg" width="120"/></a>
							<a href="#"><img src="images/img2.jpg" width="120"/></a>
							<a href="#"><img src="images/img3.jpg" width="120"/></a>
							<a href="#"><img src="images/img4.jpg" width="120"/></a>
							<a href="#"><img src="images/img5.jpg" width="120"/></a>
							<a href="#"><img src="images/img1.jpg" width="120"/></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>关于我们</h2></div>
						<div class="content">
							<img src="" style="border: 0px;"/>
							<p>百步梯介绍</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>联系我们</h2></div>
						<div class="content">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>&copy; Copyright</p>
	</div>
</footer>

</div>
<div style="display:none"><script src='' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>