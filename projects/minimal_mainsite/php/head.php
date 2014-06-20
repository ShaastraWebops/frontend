<!-- Meta -->
<link rel="shortcut icon" href="../img/favicon.ico">

<!-- CSS -->
<link rel="stylesheet" type="text/css" href="../css/home.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' /> -->
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
<!-- JS - Only Jquery is loaded here. Other JS is in foot.php -->
<script src="../js/jquery-1.11.1.js"></script>
<script type="text/javascript">	
	function hideMenu () {
		// l = (x.clienWidth/window.innerWidth)*100;		
        $("#menu_popup").animate({
            left: '-100%'
        },"slow");
    }
</script>
