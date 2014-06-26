$(document).ready(function(){
	//page transition: fadeIn and fadeOut
	var fIn 	= 1000;
	var fOut 	= 1000;
	$("body").css("display", "none");    
    $("body").fadeIn(fIn);
    $(".nextPage").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(fOut, redirectPage);      
    });
         
    function redirectPage() {
        window.location = linkLocation;
    }
});

//page Centering using "px"
function pageCenterPx (id, z) {
	x = document.getElementById(id);
	x.style.position = "absolute";
	x.style.zIndex = z;
	x.style.top = (sHeight - x.clientHeight)/2+"px";
	x.style.left = (sWidth - x.clientWidth)/2+"px";
}
//page centering using "%"
function pageCenterPercent (id, z) {
	x = document.getElementById(id);
	x.style.position = "absolute";
	x.style.zIndex = z;
	x.style.top = (1-(x.clientHeight/sHeight))*50+"%";	
	x.style.left = (1-(x.clientWidth/sWidth))*50+"%";
}
//Hexagon Menu
function hexaStr(id, n) {
	x = document.getElementById(id);
	x.style.position = "absolute"
	//parameters - must be changed by the user
	a = 13;
	b = 5;
	c = 2;
	d= 4;
	switch(n){
		case 1:
		x.style.top = (sHeight - x.clientHeight)*(1/a)	 + "px";
		x.style.left = (sWidth - x.clientWidth)*(1/c) +"px";
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