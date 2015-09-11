// JavaScript Document
$(document).ready(function() {
    $(".alter").click(function(){
		var wid = document.documentElement.clientWidth;
		var height = document.documentElement.clientHeight;
		if(wid<1440){
			$(".bg").css({"width":"1440px"});}
		else 
		{$(".bg").css({"width":"100%"});}
		if(wid<1440){
			$(".bg").css({"height":"720px"});}
		else 
		{$(".bg").css({"height":"100%"});}
		$("#change").css({"display":"inline"});
	});
	$(".close").click(function(){
		$("#change").css({"display":"none"});
	});
	$("#change .alter").click(function(){
		$("#change").css({"display":"none"});
		alert("新的修改信息已经提交")
	});
});
