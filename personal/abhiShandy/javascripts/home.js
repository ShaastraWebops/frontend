// screen.width
// window.innerWidth

var sWidth = window.innerWidth;
var sHeight = window.innerHeight;

$(document).ready(function(){
	//functions
	function pageCenterPx (id, z) {
		x = document.getElementById(id);
		x.style.position = "absolute";
		x.style.zIndex = z;
		x.style.top = (window.innerHeight - x.clientHeight)/2+"px";
		x.style.left = (window.innerWidth - x.clientWidth)/2+"px";
	}
	function redirectPage () {
		window.location = linkLocation;
	}
    function pageCenterPercent (id, z) {
		x = document.getElementById(id);
		x.style.position = "absolute";
		x.style.zIndex = z;
		x.style.top = (1-(x.clientHeight/window.innerHeight))*50+"%";	
		x.style.left = (1-(x.clientWidth/window.innerWidth))*50+"%";
	}
	function hexaStr(id, n) {
		x = document.getElementById(id);
		x.style.position = "absolute"
		a = 11;
		b = 5;
		c = 2;
		d= 4;
		switch(n){
			case 1:
			x.style.top = (sHeight - x.clientHeight)*(1/a)	 + "px";
			x.style.left = (window.innerWidth - x.clientWidth)*(1/c) +"px";
			// console.leftog(x.style.top);
			// console.log(x.style.left);		
			break;

			case 2:
			x.style.top = (window.innerHeight - x.clientHeight)*(1/d)	 + "px";		
			x.style.left = (window.innerWidth - x.clientWidth)*((b-1)/b) +"px";
			break;

			case 3:
			x.style.top = (window.innerHeight - x.clientHeight)*((d-1)/d)	 + "px";				
			x.style.left = (window.innerWidth - x.clientWidth)*((b-1)/b) +"px";
			break;

			case 4:
			x.style.top = (window.innerHeight - x.clientHeight)*((a-1)/a) + "px";
			x.style.left = (window.innerWidth - x.clientWidth)*((c-1)/c) +"px";
			break;

			case 5:
			x.style.top = (window.innerHeight - x.clientHeight)*((d-1)/d)	 + "px";				
			x.style.left = (window.innerWidth - x.clientWidth)/5+"px";
			break;

			case 6:
			x.style.top = (window.innerHeight - x.clientHeight)*(1/d)	 + "px";				
			x.style.left = (window.innerWidth - x.clientWidth)/5+"px";
			break;		
		}
	}

	//pageTransition - Common
	$("body").css("display", "none");    
    $("body").fadeIn(1000);
    $(".nextPage").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(2000, redirectPage);      
    });         
    
    //Sliding Menu -- Common for all pages
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
	$("#close_menu").click(function(){  
		$("#menu_popup").animate({
			left: '-30%'
		},"slow");                      
		$("#menu_rhs").animate({
		    right: '-70%',
		    width: '0%'
  		},"slow");
	});
  			//respond to ESC keydown
  	$('body').keydown(function(e){
	    // alert(e.which);
	    if(e.which == 27){
	    	$("#menu_popup").animate({
				left: '-30%'
			},"slow");                      
			$("#menu_rhs").animate({
			    right: '-70%',
			    width: '0%'
	  		},"slow");
	    }
	});	

  	//Hover effect on HomePage Navigation
	fIn = 0.4;
	fOut = 1;
	$("#mike").css("opacity", 0);
	$("#rupee").css("opacity", 0);
	$("#tools").css("opacity", 0);
	$("#phone").css("opacity", 0);
	$("#group").css("opacity", 0);
	$("#plane").css("opacity", 0);

	$("#lectures").hover(function(){
		x = document.getElementById("mike");
		x.style.WebkitAnimation = "watermarkFadeIn "+fIn+"s ease-in forwards";
  	},function(){
		x.style.WebkitAnimation = "fadeOut "+fOut+"s ease-in forwards";
  	});  	
  	$("#events").hover(function(){
		x = document.getElementById("tools");
		x.style.WebkitAnimation = "watermarkFadeIn "+fIn+"s ease-in forwards";
  	},function(){
		x.style.WebkitAnimation = "fadeOut "+fOut+"s ease-in forwards";    	
  	});
  	$("#contacts").hover(function(){
		x = document.getElementById("phone");
		x.style.WebkitAnimation = "watermarkFadeIn "+fIn+"s ease-in forwards";
  	},function(){
		x.style.WebkitAnimation = "fadeOut "+fOut+"s ease-in forwards";    	
  	});
  	$("#spons").hover(function(){
		x = document.getElementById("rupee");
		x.style.WebkitAnimation = "watermarkFadeIn "+fIn+"s ease-in forwards";
  	},function(){
		x.style.WebkitAnimation = "fadeOut "+fOut+"s ease-in forwards";    	
  	});
  	$("#about_us").hover(function(){
		x = document.getElementById("group");
		x.style.WebkitAnimation = "watermarkFadeIn "+fIn+"s ease-in forwards";
  	},function(){
		x.style.WebkitAnimation = "fadeOut "+fOut+"s ease-in forwards";    	
  	});
  	$("#shows").hover(function(){
		x = document.getElementById("plane");
		x.style.WebkitAnimation = "watermarkFadeIn "+fIn+"s ease-in forwards";
  	},function(){
		x.style.WebkitAnimation = "fadeOut "+fOut+"s ease-in forwards";    	
  	});

  	//Responsive behaviour
  	//initial size
	sWidth = window.innerWidth;
	sHeight = window.innerHeight;
	sWidth_em = sWidth/16;

	if(sWidth>1000){
		s = 1;
		fontSize = 1.5;
		lHeight = "2%";
		padding = "1.1%";
	}
	else if(sWidth>900){
		s = 0.8;
		fontSize = 1.4;
		lHeight = "1.75%";
		padding = "1.3%";
	}
	else if(sWidth>680){
		s = 0.5;
		fontSize = 1.3;
		lHeight = "1.5%";
		padding = "1.5%";
	}
	else if(sWidth>500){
		s= 0.3;
		fontSize = 1.2;
		lHeight = "1.25%";
		padding = "1.9%";
	}
	else if(sWidth_em>350){
		s=0.2;
		fontSize = 1.1;
		lHeight = "1%";
		padding = "2.5%";
	}
	else{
		s=0.1;
		fontSize = 1.0;
		lHeight = "0.75%";
		padding = "2.5%";
	}
	document.getElementById("logoSize").setAttribute("transform","scale("+s+")");
	$("#mainLogo").css("height",(250*s)+"px");
	$("#mainLogo").css("width",(400*s)+"px");	
	pageCenterPercent("mainLogo",2);
	// $(".cl-effect a").css("font-size",fontSize+"em");
	// $(".cl-effect a::before").css("height",lHeight);
	// $(".cl-effect a::after").css("height",lHeight);  	

  	//initial positioning
  	hexaStr("events",1);
	hexaStr("shows",2);
	hexaStr("contacts",3);
	hexaStr("about_us",4);
	hexaStr("lectures",5);
	hexaStr("spons",6);	
	
	// pageCenterPercent("ms",2);
	pageCenterPercent("planeSVG",1);
	pageCenterPx("rupeeSVG",1);
	pageCenterPx("mikeSVG",1);
	pageCenterPx("phoneSVG",1);
	pageCenterPx("groupSVG",1);
	pageCenterPx("toolSVG",1);
	// fontSize = 1.5;
	$(".cl-effect a").css("font-size",fontSize+"em");
  	mainLogoR = 255/399;
  	//adjustment done on resizing window 

  	$(window).resize(function(){
  		// x=1;
  		// console.log("resized"+(x++));
  		sWidth = window.innerWidth;
  		sHeight = window.innerHeight;
  		sWidth_em = sWidth/16;
  		if(sWidth>1000){
			s = 1;
			fontSize = 1.5;
			lHeight = "2%";
			padding = "1.1%";
		}
		else if(sWidth>900){
			s = 0.8;
			fontSize = 1.4;
			lHeight = "1.75%";
			padding = "1.3%";
		}
		else if(sWidth>680){
			s = 0.5;
			fontSize = 1.3;
			lHeight = "1.5%";
			padding = "1.5%";
		}
		else if(sWidth>500){
			s= 0.3;
			fontSize = 1.2;
			lHeight = "1.25%";
			padding = "1.9%";
		}
		else if(sWidth_em>350){
			s=0.2;
			fontSize = 1.1;
			lHeight = "1%";
			padding = "2.5%";
		}
		else{
			s=0.1;
			fontSize = 1.0;
			lHeight = "0.75%";
			padding = "2.5%";
		}
		document.getElementById("logoSize").setAttribute("transform","scale("+s+")");
		$("#mainLogo").css("height",(250*s)+"px");
		$("#mainLogo").css("width",(400*s)+"px");
  		// $(".cl-effect a").css("font-size",fontSize+"em");
  		// $(".cl-effect a::before").css("height",lHeight);
		// $(".cl-effect a::after").css("height",lHeight);
  		// $(".cl-effect a").css("letter-spacing",fontSize/10+"em");

		pageCenterPercent("mainLogo",2);
		pageCenterPx("planeSVG",1);
		pageCenterPx("rupeeSVG",1);
		pageCenterPx("mikeSVG",1);
		pageCenterPx("phoneSVG",1);
		pageCenterPx("groupSVG",1);
		pageCenterPx("toolSVG",1);  		
		hexaStr("events",1);
		hexaStr("shows",2);
		hexaStr("contacts",3);
		hexaStr("about_us",4);
		hexaStr("lectures",5);
		hexaStr("spons",6);
  	});  	
	// Cross-browser compatibilty
	ifChrome = /chrom(e|ium)/.test(navigator.userAgent.toLowerCase());	
	if(ifChrome){
	   	// $.browser.safari = false;
   		$("#notice").css("opacity","0");
   		// alert(1);
	}
	else{
    	$("#notice").css("opacity","1");
	}
});//end of ready function

var cAnimate = function(id,duration,delay){
	var x = document.getElementById(id);
	x.style.fillOpacity = 0;
	var pathLength = x.getTotalLength();
	x.style.strokeDashoffset = pathLength;
	x.style.strokeDasharray = pathLength+" "+pathLength;
	x.style.WebkitAnimation = "cubeAnimate "+duration+"s ease-in-out "+delay+"s forwards";
	x.style.mozAnimation = "cubeAnimate "+duration+"s ease-in-out "+delay+"s forwards";
	x.style.oAnimation = "cubeAnimate "+duration+"s ease-in-out "+delay+"s forwards";
	x.style.animation = "cubeAnimate "+duration+"s ease-in-out "+delay+"s forwards";
	// x.style.MozAnimation = "cubeAnimate 8s ease-in-out 1s forwards";	
	// console.log("testing in Mozilla");
}
cAnimate("cubeBorder",10,1);
cAnimate("cubeDots",10,1);
cAnimate("s2",10,1);
cAnimate("s0",10,1);
cAnimate("s1",10,1);
cAnimate("s5",10,1);
cAnimate("sS1",10,1);
cAnimate("sS2",10,1);
cAnimate("sH",10,1);
cAnimate("sA1",10,1);
cAnimate("sA2",10,1);
cAnimate("sA3",10,1);
cAnimate("sR",10,1);
cAnimate("sT",10,1);

// document.getElementById("mike").style.height = "5%";
function reScale (id, scale) {
	x = document.getElementById(id);
	x.setAttribute("transform","scale("+scale+")");	
	y = document.getElementById(id+"2");
	nh = y.getAttribute("height")*scale;
	y.setAttribute("height",nh+"px");
	nw = y.getAttribute("width")*scale;
	y.setAttribute("width",nw+"px");
}

// reScale("rupee",0.5);
$(document).ready(function(){
/* code for browser detection start */            

});
