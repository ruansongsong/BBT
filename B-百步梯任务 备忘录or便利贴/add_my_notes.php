
<?php
include 'connect_mysql.php';
$sql="INSERT INTO `user`(`username`,`password`,`current_time`) VALUES (NULL,'$_POST[title]','$_POST[content]',NULL)";//当前时间是否有错，是不是自动生成时间时间
mysql_query($sql);
//页面跳转，用javascript
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='跳转到blog页面'";//有不有错哦
echo "</script >";
mysql_close();
 ?>
