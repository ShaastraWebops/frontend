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

var animate = function(id){
	var x = document.getElementById(id);
	var pathLength = x.getTotalLength();
	x.style.strokeDashOffset = pathLength;
	x.style.strokeDashArray = pathLength+" "+pathLength;

}