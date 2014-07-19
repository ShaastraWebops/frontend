<html>
	<head>
		<title>Landing|Shaastra 2015</title>
		<link rel="stylesheet" href="../css/flipclock.css">
		<?php include 'head.php' ?>
		<style type="text/css">
			body { 
				  background: url(../img/landing/background.jpg) no-repeat center center fixed; 
				  -webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
				}
			img {
				display: block;
				margin-left: auto;
				margin-right: auto;
			}
			#logo{
				margin-top: 2%;
				width: 60%;
			}
			#tools{
				margin-top: 1%;
				width: 20%;
			}
			p {
	    		font-family: 'Titillium Web', sans-serif;
	    		font-size: 1.15em;
	    		text-align: center;
	    		color: black;
			}
			.your-clock{
				margin-left: auto;
				margin-right: auto;
				width: 650px;
			}
		</style>
		<script type="text/javascript">
			// Redirect
			window.location = "http://www.shaastra.org/2015/main/php/home.php"
		</script>
	</head>
	<body>
		<img id="logo" src="../img/landing/logo.png">
		<img id="tools" src="../img/landing/tools.png">
		<p>We are now live: <a href="http://www.shaastra.org/2015/main/php/home.php">
			HERE
		</a>
		</p>
		
		<br>
		<a href="http://www.shaastra.org/2015/main/php/home.php">
			<div class="your-clock"></div>
		</a>
		
		<script src="../js/jquery.min.js"></script>
		<script src="../js/flipclock.min.js"></script>
		<script type="text/javascript">

			var clock = new FlipClock($('.your-clock'), {
				clockFace: 'DailyCounter',
				countdown: true
			});
			
			clock.setTime(0);
			clock.start();
		</script>
	</body>
</html>