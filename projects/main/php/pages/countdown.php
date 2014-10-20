<html>
	<head>
		<link rel="shortcut icon" href="../../img/favicon.ico">

		<title>Countdown | Shaastra 2015</title>
		<link rel="stylesheet" href="../../css/flipclock.css">
		<?php include '../../php/base/head.php' ?>

		<style type="text/css">
			body {
				background: -webkit-radial-gradient(#fff, #ddd); /* For Safari 5.1 to 6.0 */
				background: -o-radial-gradient(#fff, b#ddd); /* For Opera 11.1 to 12.0 */
				background: -moz-radial-gradient(#fff, #ddd); /* For Firefox 3.6 to 15 */
				background: radial-gradient(#fff, #ddd); /* Standard syntax */
			}
			img {
				display: block;
				margin: auto;
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
	    		font-size: 1.15em;
	    		text-align: center;
	    		color: black;
			}
			.your-clock{
				margin: auto;
				width: 650px;
			}
		</style>
	</head>
	<body>
		<img id="logo" src="../../img/logo/1000x250_dark.png">
		<img id="tools" src="../../img/misc/tools.png">

		<br>
		<a href="http://www.shaastra.org/2015/main/php/home.php">
			<div class="your-clock"></div>
		</a>

		<?php include '../../php/base/foot.php' ?>
		<script src="../../js/flipclock.min.js"></script>
		<script type="text/javascript">

			$(document).ready(function() {
				var clock = new FlipClock($('.your-clock'), {
					clockFace: 'DailyCounter',
					countdown: true
				});

				clock.setTime(10); // in seconds
				clock.start();
			})
		</script>
	</body>
</html>
