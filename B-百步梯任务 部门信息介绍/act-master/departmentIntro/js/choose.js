$(document).ready(function() {
    $(".choose").click(function(){
		if($(this).css("background-color")=="rgba(0, 0, 0, 0)")
			{
				$(this).css("background-color","#b4d1f3");
				return false;
			}
		if($(this).css("background-color")!="rgba(0, 0, 0, 0)")
			{
				$(this).css("background-color","rgba(0, 0, 0, 0)");
			}
	});
});