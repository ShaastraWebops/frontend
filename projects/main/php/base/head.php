<?php 
	ini_set('display_errors', 1); 
	error_reporting(E_ALL); 
?>

<!-- Meta -->
<link rel="shortcut icon" href="../../img/favicon.ico">

<!-- CSS -->
<!--<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
<link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
    @font-face {
        font-family: 'CGF Locust Resistance';
        src: url('../../fonts/CGF Locust Resistance.ttf');
    }
    html, body {
        width: 100%;
        height: 100%;
    }
    body {
	  	background-image: url("../../img/bg.png");
  		line-height: 1.42857;   
        font-family: 'Titillium Web', sans-serif;
    }

    .title{
    	font-family: 'Dosis', sans-serif;
        font-weight: bold;
	}
	.white {
		color: #ffffff;
	}
	.black {
		color: #000000;
	}
    .shaastra-title {
        text-transform: uppercase;
        font-family: 'CGF Locust Resistance';
    }
	/* Breaker - A nice little shaastra separator */
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
		height:2px;
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
		background:url(../../img/dice.png) no-repeat;
	}
	.dice.white {
		background:url(../../img/dice_white.png) no-repeat;
	}

	.breaker span {
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
    /* Make blockquote look nice */
	blockquote{
  		padding: 15px 20px 15px 45px;
  		margin: 0 0 20px;
  		position: relative;
    	font-size: 16px;
  		line-height: 1.2;
    }
    blockquote::before{
  		content: "\201C"; /*Unicode for Left Double Quote*/
    	font-family: Georgia, serif;
  		font-size: 40px;
  		font-weight: bold;
  		color: #999;
    	position: absolute;
  		left: 10px;
  		top:5px;
	}

	blockquote::after{
  		content: "";
	}
    /* Social Icons used in places */
    a.social-icon {
        margin:5px 5px 0px 5px;
        padding:0px 0px 0px 0px;
        width:60px;
        height:60px;
        float:left;
        text-indent:-99999px;
        background: #191919;
        border:solid 1px #222121;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright:5px;
        -moz-border-radius-bottomleft:5px;
        -moz-border-radius-bottomright:5px;
        -webkit-border-top-left-radius:5px;
        -webkit-border-top-right-radius:5px;
        -webkit-border-bottom-left-radius:5px;
        -webkit-border-bottom-right-radius:5px;
        border-top-left-radius:5px;
        border-top-right-radius:5px;
        border-bottom-left-radius:5px;
        border-bottom-right-radius:5px;
    }
    a.social-icon.facebook {
        background: #191919 url(../../img/icons/facebook-long.png) no-repeat -0px -88px;
        -webkit-transition:All 0.3s ease-out;
        -moz-transition:All 0.3s ease-out;
        -o-transition:All 0.3s ease-out;
    }
    a.social-icon.facebook:hover {
        background-position: -0px -0px;
    }
    a.social-icon.twitter {
        background: #191919 url(../../img/icons/twitter-long.png) no-repeat -0px -88px;
        -webkit-transition:All 0.3s ease-out;
        -moz-transition:All 0.3s ease-out;
        -o-transition:All 0.3s ease-out;
    }
    a.social-icon.twitter:hover {
        background-position: -0px -0px;
    }
    a.social-icon.google {
        background:#191919 url(../../img/icons/google-long.png) no-repeat -0px -88px;
        -webkit-transition:All 0.3s ease-out;
        -moz-transition:All 0.3s ease-out;
        -o-transition:All 0.3s ease-out;
    }
    a.social-icon.google:hover {
        background-position: -0px -0px;
    }
</style>

<!-- Fonts -->
<link onload="window.jQuery && $('body').css('font-family', 'Titillium Web')" href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link onload="window.jQuery && $('.title').css('font-family', 'Dosis')"" href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' />

<!-- JS - Only Jquery is loaded here. Other JS is in foot.php -->
<!-- <script src="//ajax.aspnetcdn.com/ajax/jquery/jquery-2.0.0.min.js"></script>
<script>window.jQuery || document.write('<script src="../../js/jquery.min.js">\x3C/script>')</script> -->
<script src="../../js/jquery.min.js"></script>

<script>	
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42581770-4', 'shaastra.org');
  ga('send', 'pageview');

</script>
