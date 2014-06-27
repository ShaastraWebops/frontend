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
	x.style.position = "absolute";
	x.style.zIndex = z;
	x.style.top = (1-(x.clientHeight/window.innerHeight))*50+"%";	
	x.style.left = (1-(x.clientWidth/window.innerWidth))*50+"%";
}
pageCenterPercent("opening", 2);