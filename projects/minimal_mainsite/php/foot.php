<!-- Javascript -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("body").css("display", "none");    
	$("body").fadeIn(1000);
	$(".next_page").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(1000, redirectPage);      
	});
	function redirectPage () {
		window.location = linkLocation;
	}
});
</script>
    <!--<script src="../js/jquery_migrate.js"></script>-->
    <!--<script src="../js/modernizr.custom.js"></script>-->
    
