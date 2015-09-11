<div class="text" style=" text-align:center;"> <h1>我的备忘录</h1></div>
<body background="p1.jpg">
<?php
include'connect_mysql.php';//调用connect_mysql.php
echo <<<str
      <div align='center'>
      <a href='index_my_notes.php'>
	   <font face=微软雅黑>
	   新建备忘录</a>
	  <br /> 
	  </div>
str;
?>
<!--上面指定超链接目标index_my_notes.php -->
<table width=500 border="0" align="center"
       cellpadding="8"//单元格与文字的距离
       cellspacing="1"//单元格之间的距离
       bgcolor="#7FFFD4"//背景色
>
<?php
$sql = "SELECT * FROM `my_notes` ORDER BY `my_notes`.`current_time` DESC  "; //时间降序排序
$query=mysql_query ($sql);
while ($row=mysql_fetch_assoc($query))//循环输出备忘录内容
{
echo <<<str
<tr bgcolor="#F0F8FF"> 
<td>  <font face=微软雅黑>
    标题：<font color="#000000">    
            {$row['title']}
		</font>
		 <br /> 
		 <br /> 
	正文：<font color="#2F4F4F">
            {$row['content']}
		</font>
		<br /> 
        <br /> 
	创建时间：{$row['current_time']}
<div align="right">
<a href="update_my_notes.php ?id={$row['id']}">修改</a> 
<a href="delete_my_notes.php ?id={$row['id']}">删除</a>
</div>
</td>
</tr>
str;
}
?>