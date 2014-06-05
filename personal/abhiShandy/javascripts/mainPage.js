// screen.width
// window.innerWidth
var sWidth = window.innerWidth;
var sHeight = window.innerHeight;
// var logoHeight = document.getElementById("mainLogo").height;

// document.getElementById("mainLogo").style.position = "relative";
// document.getElementById("mainLogo").style.top = (sHeight - logoHeight)/2+"px";

// document.getElementById("events").style.position = "relative";
// document.getElementById("events").style.top = "-300px";

// document.getElementById("shows").style.position = "relative";
// document.getElementById("shows").style.top = "-300px";

// document.getElementById("sponsors").style.position = "relative";
// document.getElementById("sponsors").style.top = "-300px";
var tAnimate = function(id){
	var x = document.getElementById(id);
	x.style.fillOpacity = 0;
	var pathLength = x.getTotalLength();
	x.style.strokeDashoffset = pathLength;
	x.style.strokeDasharray = pathLength+" "+pathLength;
	var duration = 3;
	var delay = 3;
	x.style.WebkitAnimation = "textAnimate "+duration+"s ease-in "+delay+"s forwards";
}
var cAnimate = function(id){
	var x = document.getElementById(id);
	x.style.fillOpacity = 0;
	var pathLength = x.getTotalLength();
	x.style.strokeDashoffset = pathLength;
	x.style.strokeDasharray = pathLength+" "+pathLength;
	var duration = 5;
	var delay = 1;
	x.style.WebkitAnimation = "cubeAnimate "+duration+"s ease-in "+delay+"s forwards";
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