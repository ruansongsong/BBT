<!--备忘录主页，提示用户输入备忘录 -->
<meta charset="utf-8"><!--设置编码，防止乱码 -->
<body background="p2.jpg" >
<form action="add_my_notes.php"  method="post"  name="myform" onsubmit=" CheckPost();"><!--调用add_my_notes.php -->
<div>
<div class="input" style=" text-align:center;">

<div class="text" style=" text-align:center;"> <h1>我的备忘录</h1></div><!--居中显示 -->
 <font face=微软雅黑><!--设置字体 -->
 标题
 <br /> 
 <input  type="text" name="title"/><!-- 显示输入框 -->
 <br />  
 <br /> 
 内容
 <br /> 
 <textarea  style="overflow:hidden" align="center" name="content"  rows="20" clos="40">
 </textarea>
 <br /> 
 <br /> 
 <input align="center" type="submit"   name="submit" value="保存备忘录"/><!--按钮 -->
 <div class="text" style=" text-align:center;"> <br /> Copyright © ruansongsong</div>
 <div class="text" style=" text-align:center;"> <br /> Powered By W3school</div>
 </div>
</form>

 



