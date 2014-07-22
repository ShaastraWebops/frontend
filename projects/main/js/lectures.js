function pageCenterPercent (id, z) {
	x = document.getElementById(id);
	x.style.position = "fixed";
	x.style.zIndex = z;
	x.style.top = (1-(x.clientHeight/window.innerHeight))*50+"%";	
	x.style.left = (1-(x.clientWidth/window.innerWidth))*50+"%";
}
function reScale (){
	sHeight = window.innerHeight;
	sWidth = window.innerWidth;
	hf = 3.9;
	wf = 6;
	$(".col-xs-3").css("height",(sHeight/hf)+"px");
	$(".col-xs-3").css("width",(1.5*sWidth/wf)+"px");
	$(".col-xs-2").css("height",(sHeight/hf)+"px");
	$(".col-xs-2").css("width",(sWidth/wf)+"px");	
}
$(document).ready(function(){
	reScale();
	$(window).resize(function(){
  		reScale();  	
  	});
});
