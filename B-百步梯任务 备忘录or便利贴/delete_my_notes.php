<?php
include 'connect_mysql.php';
$id=$_GET['id'];//获取id值
$query="delete from my_notes where id=".$id;//指定id中删除记录
mysql_query($query);
//页面跳转，用javascript
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='view_mynotes.php'";
echo "</script >"
?>