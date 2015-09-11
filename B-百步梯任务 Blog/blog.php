<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>写博客</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates Designed by Kimmy | chinaz.com">
	<meta name="author" content="sc.chinaz.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style.css">

	
	
	<link href='./images/favicon.ico' rel='icon' type='image/x-icon'/>
	<style type="text/css">
	.wrap-body.zerogrid #content .wrap-content .row.block #main-content .wrap-col article div {
	font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
}
    </style>
</head>
<body>
<div class="wrap-body zerogrid">
<!--------------Header--------------->
<header>
	<div class="wrap-header">
		
		<div class="top">
			<div class="socials">
				
			</div>
			<div id="search">
			</div>
		</div>
		
		<div id="logo">
			<a href="#"><h1>My Blog</h1></a>

		</div>
		
		<nav>
			<div class="wrap-nav">
				<div class="menu">
					<ul>
						<li><a href="index1.php">主页</a></li>
						<li><a href="#">博客</a></li>
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
					  <div align="center">写博客 </div>
					</article>
					<section>
						
					
						<form  id="contact-form" action="add_my_blog.php"  method="post"  name="myform" onsubmit=" CheckPost();"><!--调用add_my_notes.php -->
						    <div align="center">
						      <fieldset>
					          </fieldset>
					      </div>
					      <fieldset>
						      <label>
						        <div align="center">
						          <input name="title" value="标题" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
					            </div>
						      </label>
						        <div align="center">
						          <textarea name="content" cols="600px" rows="600px"  onFocus="if(this.value =='Message' ) this.value=''" onBlur="if(this.value=='') this.value='content'">正文</textarea>
					          </div>
					        <div class="buttons">
						          <div align="center"></div>
				              </div>
						        <div align="center"><a href="" onClick="document.getElementById('contact-form').reset()"></a>
						          <article>
						          <a href="index1.php" onClick="document.getElementById('contact-form').submit()">发布</a>
				            </div>
					      </fieldset>           
						</form>
						<?php include'Untitled-2.php';?>
					</section>
				</div>
			</div>
			<div id="sidebar" class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>用户信息</h2></div>
                        <p>输出用户信息</p>
						<div class="content"></div>
					</div>

					<div class="box">
						<div class="heading"><h2>最新文章</h2></div>
						<div class="content">
							<ul>
								<li><a href="点击查看功能">读取数据库标题</a></li>
								<li><a href="">读取标题</a></li>
								<li><a href="">读取标题</a></li>
								
							</ul>
						</div>
					</div>
					</font>
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
						<div class="heading"><h2>百步梯介绍</h2></div>
						<div class="content">
							<a href="http://sc.chinaz.com" target="_blank"><img src="" style="border: 0px;"/></a>
							<p><a href="http://sc.chinaz.com" target="_blank">z</a></p>
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
		<p>&copy; Copyright &copy; 2014<a target="_blank" href="http://sc.chinaz.com/moban/"></a></p>
	</div>
</footer>

</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>