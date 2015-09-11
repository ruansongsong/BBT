<?php
$link = mysql_connect ( 'localhost:3306' ,  'root' ,  '' )//连接数据库
or die("连接数据库错误");
mysql_select_db("blog",$link);//选择数据库
mysql_query("SET NAMES 'UTF8'"); //设置编码，解决乱码问题
?>