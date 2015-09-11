	function setTimeAttr(){
		var tabs=[document.getElementById('tabHalfYear'),document.getElementById('tabOneYear')];
		document.getElementById('halfYear').onclick=function()
		{
			tabs[0].setAttribute('class','halfYear tabs');
			tabs[1].setAttribute('class','tabs');
			
		};
		document.getElementById('oneYear').onclick = function()
		{
			tabs[0].setAttribute('class','tabs');
			tabs[1].setAttribute('class','oneYear tabs');			
		};
	}