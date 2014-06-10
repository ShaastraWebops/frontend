// screen.width
// window.innerWidth

// center aligning code
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
	$("body").css("display", "none");
    
    $("body").fadeIn(1000);

    $(".nextPage").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);      
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }

	$(".menu_options").hover(function(){
		$(this).css("background-color","#EBF4FA");
		$(this).css("color","black");
		$("#facebook").css("color","#3b5998");    
		$("#twitter").css("color","#428bca"); 
		$("#you_tube").css("color","#cc181e");
		$("#close_menu").css("color","#00425a"); 
		$(this).css("font-weight","bold"); 
	},function(){
		$(this).css("background-color","black"); 
		$(this).css("color","white"); 
		$("#facebook").css("color","#3b5998");
		$("#twitter").css("color","#428bca"); 
		$("#you_tube").css("color","#cc181e");
		$(this).css("font-weight","normal"); 		
		$("#close_menu").css("color","#00425a");    
	});
	$("#menu_icon").click(function(){
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
  	$("#contacts").hover(function(){
    	$("#phoneSVG").css("opacity",fOpacity);
	},function(){
    	$("#phoneSVG").css("opacity","0");
  	});
  	$("#spons").hover(function(){
    	$("#rupeeSVG").css("opacity",fOpacity);
	},function(){
    	$("#rupeeSVG").css("opacity","0");
  	});
  	$("#about_us").hover(function(){
    	$("#groupSVG").css("opacity",fOpacity);
	},function(){
    	$("#groupSVG").css("opacity","0");
  	});
  	$("#shows").hover(function(){
    	$("#planeSVG").css("opacity",fOpacity);
	},function(){
    	$("#planeSVG").css("opacity","0");
  	});
});

function pageCenter (id, z) {
	x = document.getElementById(id);
	x.style.position = "absolute";
	x.style.zIndex = z;
	x.style.top = (sHeight - x.clientHeight)/2+"px";
	x.style.left = (sWidth - x.clientWidth)/2+"px";
}
function pageCenter2 (id, z) {
	x = document.getElementById(id);
	x.style.position = "absolute";
	x.style.zIndex = z;
	x.style.top = (1-(x.clientHeight/sHeight))*50+"%";	
	x.style.left = (1-(x.clientWidth/sWidth))*50+"%";
	// x.style.left = "50%";
}
pageCenter2("mainLogo",2);

pageCenter("planeSVG",1);
pageCenter("rupeeSVG",1);
pageCenter("mikeSVG",1);
pageCenter("phoneSVG",1);
pageCenter("groupSVG",1);
pageCenter("toolSVG",1);

function hexaStr(id, n) {
	x = document.getElementById(id);
	x.style.position = "absolute"
	a = 13;
	b = 5;
	c = 2;
	d= 4;
	switch(n){
		case 1:
		x.style.top = (sHeight - x.clientHeight)*(1/a)	 + "px";
		x.style.left = (sWidth - x.clientWidth)*(1/c) +"px";
		// console.leftog(x.style.top);
		// console.log(x.style.left);		
		break;

		case 2:
		x.style.top = (sHeight - x.clientHeight)*(1/d)	 + "px";		
		x.style.left = (sWidth - x.clientWidth)*((b-1)/b) +"px";
		break;

		case 3:
		x.style.top = (sHeight - x.clientHeight)*((d-1)/d)	 + "px";				
		x.style.left = (sWidth - x.clientWidth)*((b-1)/b) +"px";
		break;

		case 4:
		x.style.top = (sHeight - x.clientHeight)*((a-1)/a) + "px";
		x.style.left = (sWidth - x.clientWidth)*((c-1)/c) +"px";
		break;

		case 5:
		x.style.top = (sHeight - x.clientHeight)*((d-1)/d)	 + "px";				
		x.style.left = (sWidth - x.clientWidth)/5+"px";
		break;

		case 6:
		x.style.top = (sHeight - x.clientHeight)*(1/d)	 + "px";				
		x.style.left = (sWidth - x.clientWidth)/5+"px";
		break;		
	}
}
// pageCenter("eventsB",5);
hexaStr("events",1);
hexaStr("shows",2);
hexaStr("contacts",3);
hexaStr("about_us",4);
hexaStr("lectures",5);
hexaStr("spons",6);