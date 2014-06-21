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
	</head>
	<body>
		<img id="logo" src="../img/landing/logo.png">
		<img id="tools" src="../img/landing/tools.png">
		<p>We will be live in</p>
		<br>
		<div class="your-clock"></div>
		
		<script src="../js/jquery.min.js"></script>
		<script src="../js/flipclock.min.js"></script>
		<script type="text/javascript">
			var clock = new FlipClock($('.your-clock'), {
				clockFace: 'DailyCounter',
				countdown: true
			});
			var target_date = new Date("June 25, 2014 18:00:00").getTime();
			var current_date = new Date().getTime();
			var seconds_left = (target_date - current_date) / 1000;
			clock.setTime(seconds_left);
			clock.start();
		</script>
	</body>
</html>