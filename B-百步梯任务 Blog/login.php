
<?php
 $name = $_POST['username'];
 $password = $_POST['password'];  //获取用户名和密码
 
 $link = mysql_connect("localhost","root","");
 if(!$link){
  echo "数据库连接失败！";
  mysql_error();
 } //连接数据库，多写一个mysql_errro()绝对有好处，捕获错误消息
 
 mysql_select_db("user");
 $exec = "SELECT * FROM user WHERE username='$name'"; //sql语句，查询用户名称！
 $result = mysql_query($exec);
 $rows = mysql_num_rows($result);
 if($rows>0){
  $row = mysql_fetch_assoc($result);
  $lname=$row['username'];
  $rname=$row['username'];
  $lpassword=$row['password'];
  if($lpassword==$password){
   session_start();
   $_SESSION['olname']=$lname;
   $_SESSION['olrname']=$rname;   //上面几段就是密码效验，都比较简单，哈哈！~
   echo "用户登陆成功!";
   echo "<hr><p>登陆用户是：".$rname."<p>";
   echo "<br>现在你可以<a href=index2.php>转到博客主页</a>";
  }else{
   echo "用户登陆失败！<hr><p>";
   echo "用户名或密码不正确！！";
   echo "<br><a href=login.php>请重新登陆</a>";
  }
 }else{
  echo "用户登陆失败！<hr><p>";
  echo "当前用户不存在！";

 }
?>