//example use of localStorage
if(localStorage.visitCount){
	localStorage.visitCount = Number(localStorage.visitCount)+1;
}
else{
	localStorage.visitCount = 1;
}
console.log("No. of visits: "+localStorage.visitCount);

function pageCenterPercent (id, z) {
	x = document.getElementById(id);
	x.style.position = "fixed";
	x.style.zIndex = z;
	x.style.top = (1-(x.clientHeight/window.innerHeight))*50+"%";	
	x.style.left = (1-(x.clientWidth/window.innerWidth))*50+"%";
}
// pageCenterPercent("opening", 2);
sHeight = window.innerHeight;
document.getElementById("p1").style.height = (sHeight/2)+"px";
document.getElementById("p2").style.height = (sHeight/2)+"px";
document.getElementById("p3").style.height = (sHeight/2)+"px";
document.getElementById("p4").style.height = (sHeight/2)+"px";
document.getElementById("p5").style.height = (sHeight/2)+"px";