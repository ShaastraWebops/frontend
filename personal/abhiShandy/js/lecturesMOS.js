//example use of localStorage
if(localStorage.visitCount){
	localStorage.visitCount = Number(localStorage.visitCount)+1;
}
else{
	localStorage.visitCount = 1;
}
console.log("No. of visits: "+localStorage.visitCount);