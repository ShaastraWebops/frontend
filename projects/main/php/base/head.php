<?php 
	ini_set('display_errors', 1); 
	error_reporting(E_ALL); 
?>

<!-- Meta -->
<link rel="shortcut icon" href="../../img/favicon.ico">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../../css/home.css">
<!--<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
    *{
        font-family: 'Titillium Web', sans-serif
    }
    .title{
		font-family: 'Dosis', sans-serif;
	}
	.white {
		color: #ffffff;
	}
	.black {
		color: #000000;
	}
	.breaker {
		width:387px;
		height:14px;
		margin:0 auto;
		position:relative;
		margin-bottom: 30px;
		padding-top: 10px;
	}
	.breaker span {
		width:160px;
		height:1px;
		display:inline-block;
		margin:14px 0 6px 0;
		color : #000;
	}
	.dice {
		width : 51px;
		height : 28px;
		margin : 0 8px;
	}

	.breaker .dice {
		width:51px;
		height:28px;
		float:left;
		margin:0 8px;
	}
	.dice {
		background:url(../img/dice.png) no-repeat;
	}
	.dice.white {
		background:url(../img/dice_white.png) no-repeat;
	}

	.breaker span {
		background: #d5d5d5;
		background: #000;
	}
	.breaker.white span {
		background: #fff;
	}
	.breaker .left{
		float: left;
		background: linear-gradient(to left, #000, transparent);
	}
	.breaker .right{
		float: right;
		background: linear-gradient(to right, #000, transparent);
	}
	.breaker.white .left{
		float: left;
		background: linear-gradient(to left, #fff, transparent);
	}
	.breaker.white .right{
	float: right;
	background: linear-gradient(to right, #fff, transparent);
	}

</style>

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' />

<!-- JS - Only Jquery is loaded here. Other JS is in foot.php -->
<script src="//ajax.aspnetcdn.com/ajax/jquery/jquery-2.0.0.min.js"></script>
<script>window.jQuery || document.write('<script src="../../js/jquery.min.js">\x3C/script>')</script>

<script>	
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42581770-4', 'shaastra.org');
  ga('send', 'pageview');

</script>
