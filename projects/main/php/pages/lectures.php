<?php include '../../php/base/logmein.php'; ?>
<!doctype html public "" "">
<html>
	<head>
		<title>Lectures | Shaastra 2015 | IIT Madras Techfest | Chennai</title>
        <meta name="keywords" content="lectures shaastra 2015,lectures shaastra,shaastra lectures">
        <meta name"description" content="Get ready for the intriguing Shaastra 2015 lecture series,to be held from January 3th to 6th 2015">
        <meta name="robots" content="NOODP">
		<?php include '../../php/base/head.php' ?>
</head>
<style type="text/css">
	.comingSoon p{
		font-size: 2em;
		text-align: center;
	}
</style>
<body>
<?php $back="../../php/pages/home.php"; include '../../php/base/menu.php' ?>
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
