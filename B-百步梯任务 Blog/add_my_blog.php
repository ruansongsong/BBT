<meta charset="utf-8">
<title>保存成功！即将跳转...</title>
<?php
include 'connect_mysql.php';
$sql="INSERT INTO `blog`.`blog`(`title`,`content`,`date`,`id`) VALUES ('$_POST[title]','$_POST[content]',NULL,NULL)";//当前时间是否有错，是不是自动生成时间时间
mysql_query($sql);
//页面跳转，用javascript
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='index1.php'";
echo "</script >";
mysql_close();
?>
