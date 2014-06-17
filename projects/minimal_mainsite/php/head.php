<!-- Meta -->
<link rel="shortcut icon" href="../img/favicon.ico">

<!-- CSS -->
<!-- <link rel="stylesheet" type="text/css" href="../css/respAbhi.css"> -->
<link rel="stylesheet" type="text/css" href="../css/home.css">
<!-- <link rel="stylesheet" type="text/css" href="../CSS/resp.css"> -->
<link href="../css/font-awesome-4.1.0/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' />
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
<script src="../js/jquery-1.11.0.js"></script>
<script type="text/javascript">
	function hideMenu () {
        $(".menu_popup").animate({
            left: '-30%'
        },"slow");
    }	
</script>