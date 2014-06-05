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
	var duration = 10;
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