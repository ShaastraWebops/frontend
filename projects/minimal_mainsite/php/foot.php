<footer id="footer" style='position:absolute; bottom:1%'> &copy; 2015 Shaastra Webops </footer>
<!-- Javascript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	//page transition
	// $("body").css("display", "none");    
	// $("body").fadeIn(1000);
	// $(".next_page").click(function(event){
	// 	event.preventDefault();
	// 	linkLocation = this.href;
	// 	hideMenu();
	// 	$("body").fadeOut(1000, redirectPage);      
	// });
	// function redirectPage () {
	// 	window.location = linkLocation;
	// }
	x = document.getElementById("footer");
	x.style.left = (1-(x.clientWidth/window.innerWidth))*50+"%";
});
</script>
    <!--<script src="../js/jquery_migrate.js"></script>-->
    <!--<script src="../js/modernizr.custom.js"></script>-->
    
