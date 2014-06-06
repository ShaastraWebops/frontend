// screen.width
// window.innerWidth
var sWidth = window.innerWidth;
var sHeight = window.innerHeight;
var tAnimate = function(id){
	var x = document.getElementById(id);
	x.style.fillOpacity = 0;
	var pathLength = x.getTotalLength();
	x.style.strokeDashoffset = pathLength;
	x.style.strokeDasharray = pathLength+" "+pathLength;
	var duration = 3;
	var delay = 3;
	x.style.WebkitAnimation = "textAnimate "+duration+"s ease-in-out "+delay+"s forwards";
}
var cAnimate = function(id){
	var x = document.getElementById(id);
	x.style.fillOpacity = 0;
	var pathLength = x.getTotalLength();
	x.style.strokeDashoffset = pathLength;
	x.style.strokeDasharray = pathLength+" "+pathLength;
	var duration = 8;
	var delay = 1;
	x.style.WebkitAnimation = "cubeAnimate "+duration+"s ease-in-out "+delay+"s forwards";
}
tAnimate("s2");
tAnimate("s0");
tAnimate("s1");
tAnimate("s5");
tAnimate("sS1");
tAnimate("sS2");
tAnimate("sH");
tAnimate("sA1");
tAnimate("sA2");
tAnimate("sA3");
tAnimate("sR");
tAnimate("sT");
cAnimate("cubeBorder");
cAnimate("cubeDots");

$(document).ready(function(){
	$(".menu_options").hover(function(){
		$(this).css("background-color","#EBF4FA");
		$(this).css("color","black");
		$("#facebook").css("color","#3b5998");    
		$("#twitter").css("color","#428bca"); 
		$("#you_tube").css("color","#cc181e");
		$("#close_menu").css("color","#99C68E"); 
		$(this).css("font-weight","bold"); 
	},function(){
		$(this).css("background-color","black"); 
		$(this).css("color","white"); 
		$("#facebook").css("color","#3b5998");
		$("#twitter").css("color","#428bca"); 
		$("#you_tube").css("color","#cc181e");
		$(this).css("font-weight","normal"); 		
		$("#close_menu").css("color","#99C68E");    
	});
	$("#logoSVG").click(function(){
	    $("#menu_popup").animate({      
	      left: '0%'
	    },"slow");  
	    $("#menu_rhs").animate({
	      right: '0%',
	      width: '70%'
	    },"slow");  
  	});
	//replace it with css for better design
	$("#close_menu").click(function(){  
		$("#menu_popup").animate({
			left: '-30%'
		},"slow");                      
		$("#menu_rhs").animate({
		    right: '-70%',
		    width: '0%'
  		},"slow");
	});

	fOpacity=0.4;
	$("#lectures").hover(function(){
    	$("#mikeSVG").css("opacity",fOpacity);
  	},function(){
    	$("#mikeSVG").css("opacity","0");
  	});
  	$("#events").hover(function(){
    	$("#toolSVG").css("opacity",fOpacity);
	},function(){
    	$("#toolSVG").css("opacity","0");
  	});
});
