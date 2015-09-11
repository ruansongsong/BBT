//定义二维数组，储存是否有课
		var weekday=new Array();
		for(var i=0;i<7;i++)
		{
			weekday[i]=new Array();
			for(var j=0;j<11;j++)
				weekday[i][j]=0;//数组元素置为0，代表没有空闲时间
		}
	$(document).ready(function() {
		 
       $("#table2 td").click(function(){
			var td=$(this).parent().find("td").index($(this));
			var tr=$(this).parent().parent().find("tr").index($(this).parent())-1;
			if(weekday[td][tr]==0)
			{
			$(this).addClass("selected");
			weekday[td][tr]=1;//数组元素置为1，代表有空闲时间
			}
			else
			{
				$(this).removeClass("selected");
				weekday[td][tr]=0;
			}
			//alert(td);
			//alert(tr);

			})

    });
	  console.log(weekday);  