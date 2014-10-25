<?php include '../../php/base/logmein.php'; ?>
<!doctype html public "" "">
<html>
	<head>
		<title>Lectures | Shaastra 2015</title>

		<?php include '../../php/base/head.php' ?>
</head>
<style type="text/css">
	.comingSoon p{
		font-size: 2em;
		text-align: center;
	}
</style>
<body>
<?php include '../../php/base/menu.php' ?>
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
    		<p>
Stay tuned for the unveiling of the 2nd edition of the Shaastra Lecture Series
			</p>
    	</div>
    </div>
</div>
	<?php include '../../php/base/foot.php' ?>
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
