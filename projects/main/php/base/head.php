<?php
/*if ( version_compare(phpversion(), '5.4.0', '>=') ) {
    if ( session_status() !== PHP_SESSION_ACTIVE )
    	session_start();
} else {
    if ( session_id() === '' )
    	session_start();
}*/
//session_start();
$DEBUG = 1;
$ERP_SITE_URL = "http://localhost:8000/"; // Do not forget the trailing slash

if ($DEBUG) {
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
?>
	<script> localStorage.clear(); </script>
<?php } else { ?>
	<script>
		var last_updated = "27 July 2014";
		if (localStorage.getitem("last_updated") != last_updated) {
			localStorage.clear();
			localStorage.setItem('last_updated', last_updated)
		}
	</script>

<?php } 
?>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="../../img/favicon.ico">


<!-- Basket js -->
<?php if ( $DEBUG )  { ?>
    <script src="../../js/jsCache.js"></script>
<?php } else { ?>
    <script src="../../js/jsCache.js"></script>
<?php } ?>

<!-- CSS & FONTS-->
<script>
    jsCache.load( // Use jsCache only for 3rd party scripts which will never every change
        <?php if ($DEBUG) { ?>
            {url: '../../css/bootstrap.min.css'},
        <?php } else { ?>
            {url: '//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'},
        <?php } ?>
        {url:"../../assets/js/ie8-responsive-file-warning.js", detect:"if lt IE 9"},
        {url:"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js", detect:"if lt IE 9"},
        {url:"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js", detect:"if lt IE 9"}
    )
</script>


<?php if (!$DEBUG) { ?>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dosis|Titillium+Web">
<?php } ?>
<style>
<?php if ($DEBUG) { ?>
    @font-face {
        font-family: 'Titillium Web';
        src: url('../../fonts/TitilliumWeb.woff');
    }
    @font-face {
        font-family: 'Dosis';
        src: url('../../fonts/Dosis.woff');
    }
<?php } ?>
	@font-face {
		font-family: 'Glyphicons Halflings';
		src: url('../../fonts/glyphicons-halflings-regular.eot');
		src: url('../../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
			url('../../fonts/glyphicons-halflings-regular.woff') format('woff'),
			url('../../fonts/glyphicons-halflings-regular.ttf') format('truetype'),
			url('../../fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
	}
    @font-face {
        font-family: 'CGF Locust Resistance';
        src: url('../../fonts/CGF Locust Resistance.eot');
		src: url('../../fonts/CGF Locust Resistance.woff') format('woff'),
			url('../../fonts/CGF Locust Resistance.ttf') format('truetype'),
			url('../../fonts/CGF Locust Resistance.svg') format('svg');
    }
    html, body {
        width: 100%;
        height: 100%;
		color: #fff;
    }
    body {
	  	background-image: url("../../img/bg.png");
  		line-height: 1.42857;
        font-family: 'Titillium Web', sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
        -ms-font-smoothing: antialiased;
        -o-font-smoothing: antialiased;
        font-smoothing: antialiased;
    }   
    .title{
    	font-family: 'Dosis', sans-serif;
        font-weight: bold;
        letter-spacing: 0.3em;
	}
	.white {
		color: #ffffff;
	}
	.black {
		color: #000000;
	}
	.bold {
		font-weight: bold;
	}
    .shaastra-title {
        text-transform: uppercase;
        font-family: 'CGF Locust Resistance';
        font-weight: 100;
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

	.vertical-table {
	    display: table;
	    width: 100%;
	    height: 100%;
	}
	.vertical-table-cell {
		display: table-cell;
		height: 100%;
		vertical-align:middle;
	}

	a.no-style {
		color: inherit;
		text-decoration: none;
	}
	a.no-style:hover {
		text-decoration: none;
	}
	.row-centered {
		text-align:center;
	}
	.col-centered {
		display:inline-block;
		float:none;
		margin-right:-4px;
	}

	body {
		margin-top: 50px;
	}
	@media (min-width: 768px) {
		body {
			margin-top: 0;
		}
	}

	.btn-darkest {
  color: #ffffff;
  background-color: #777777;
  border-color: #777777;
}
.btn-darkest:hover,
.btn-darkest:focus,
.btn-darkest:active,
.btn-darkest.active,
.open .dropdown-toggle.btn-darkest {
  color: #ffffff;
  background-color: #636363;
  border-color: #585858;
}
.btn-darkest:active,
.btn-darkest.active,
.open .dropdown-toggle.btn-darkest {
  background-image: none;
}
.btn-darkest.disabled,
.btn-darkest[disabled],
fieldset[disabled] .btn-darkest,
.btn-darkest.disabled:hover,
.btn-darkest[disabled]:hover,
fieldset[disabled] .btn-darkest:hover,
.btn-darkest.disabled:focus,
.btn-darkest[disabled]:focus,
fieldset[disabled] .btn-darkest:focus,
.btn-darkest.disabled:active,
.btn-darkest[disabled]:active,
fieldset[disabled] .btn-darkest:active,
.btn-darkest.disabled.active,
.btn-darkest[disabled].active,
fieldset[disabled] .btn-darkest.active {
  background-color: #777777;
  border-color: #777777;
}
</style>



<script>
    jsCache.load(
        <?php if ($DEBUG) { ?>
            {url: '../../js/jquery.min.js'}
        <?php } else { ?>
            {url: '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js'}
            //{url: '//ajax.aspnetcdn.com/ajax/jquery/jquery-2.0.0.min.js'}
        <?php } ?>
    )

    <?php if ($DEBUG) { ?>
        if (!jsCache.get('../../js/jquery.min.js')) {
            document.write("<script src='../../js/jquery" + ".min.js'>" + " </" + "script>")
        }
    <?php } else { ?>
        if ( !jsCache.get( '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js' ) ) {
            document.write('<script src="//cdnjs.cloudflare.com/aja' + 'x/libs/jquery/2.1.1/jquery.min.js">' + '</' + 'script>')
        }
    <?php } ?>
</script>

<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42581770-4', 'shaastra.org');
  ga('send', 'pageview');

</script>

<?php include_once '../base/phpfuncs.php'; ?>
