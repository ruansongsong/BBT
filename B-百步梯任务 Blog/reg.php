<?php
if(!isset($_POST['submit'])){
	exit('非法访问!');
}

//注册信息判断



//包含数据库连接文件
$link = mysql_connect ( 'localhost:3306' ,  'root' ,  '' )//连接数据库
or die("连接数据库错误");
mysql_select_db("user",$link);//选择数据库
mysql_query("set character 'utf8_general_ci'");
mysql_query("SET NAMES 'utf8_general_ci'");//设置编码，解决乱码问题
//检测用户名是否已经存在

//写入数据

$sql = "INSERT INTO `user`.`user`(username,password,time)VALUES('$_POST[username]','$_POST[password]',NULL)";
if(mysql_query($sql,$link)){
	exit('用户注册成功！点击此处 <a href="index1.php">登录</a>');
} else {
	echo '抱歉！添加数据失败：',mysql_error(),'<br />';
	echo '点击此处 <a href="javascript:history.back(-1);">返回</a> 重试';
}
?>
