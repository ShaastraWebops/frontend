<?php session_start(); ?>
<!doctype html public "" "">
<html>
	<head>
		<title>Lectures | Shaastra '15</title>

		<?php include '../base/head.php' ?>
</head>
<style type="text/css">
	.comingSoon p{
		font-size: 2em;
		text-align: center;
	}
</style>
<body>
<?php include '../base/menu.php' ?>
<div class="container-fluid white centered">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center title">Lectures</h1>
            <div class="white breaker">
                <span class="left"></span>
                    <div class="dice white"></div>
                <span class="right"></span>
            </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-xs-8 col-xs-offset-2 comingSoon">
    		<p>This year, its only going to get bigger and better. <br>
				All the wait is worth for the release of the second edition 
				of India's largest Lecture Series at Shaastra!
			</p>
    	</div>
    </div>
</div>
	<?php include '../base/foot.php' ?>
	<script type="text/javascript">
		function verticalAlignC(cl,n,type){
			x = document.getElementsByClassName(cl);
			for (var i = x.length - 1; i >= 0; i--) {	
				x[i].style.position = type;
				x[i].style.top = (1-(x[i].clientHeight/window.innerHeight))*n+"%";
			};
		}
		verticalAlignC("comingSoon", 50, "absolute");
	</script>
    </body>
</html>
