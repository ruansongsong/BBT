<?php
include 'connect_mysql.php';
$id=$_GET['id'];//获取id值
$query="SELECT * FROM my_notes WHERE id=".$id;//从id中选取字段
$results=mysql_query($query);
$my_note=mysql_fetch_assoc($results);//从结果集中取得一行作为关联数组
if(isset($_POST['submit']))//判断post过来的数据是否被提交过来
{
$title=$_POST['title'];
$content=$_POST['content'];//获取数据
$sql="update my_notes set title='$_POST[title]',content='$_POST[content]' where id=".$id;//更新id中的数据
mysql_query($sql);
mysql_close();
//页面跳转，用javascript
echo "<script language='javascript' type='text/javascript'>";
echo "window.location.href='view_mynotes.php'";
echo "</script >";
}
?>
<meta charset="utf-8">
<body background="p3.jpg" >
<form action=""  method="post"  name="myform" onsubmit=" CheckPost();"> 
 <div>
 <div class="input" style=" text-align:center;">
 <div class="text" style=" text-align:center;"> <h1>修改备忘录</h1></div>
 <font face=微软雅黑>
 标题：
 <br />  
 <input  type="text" name="title" value="<?php echo $my_note['title'];?>"/><!--显示出备忘录中的数据 -->
 <br />  
 <br /> 
 内容：
 <br /> 
 <textarea style="overflow:hidden" align="center" name="content" rows="20" clos="40"> <?php echo $my_note['content'];?>
 </textarea>
 <br /> 
 <br /> 
 <input type="submit"   name="submit" value="修改备忘录"/>
  </div>
  <div class="text" style=" text-align:center;"> <br /> Copyright © ruansongsong</div>
  <div class="text" style=" text-align:center;"> <br /> Powered By W3school</div>
 </form>