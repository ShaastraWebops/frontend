<!DOCTYPE html>
<html style="height:100%">
<head>
<title>Spons | Shaastra 2015</title>		
<?php include 'head.php' ?>
<link href="../css/contact.css" rel="stylesheet">
<!--<link href="../css/component_menu.css" rel="stylesheet" type="text/css" />-->
<!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
<link href="../css/css.css" rel="stylesheet">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery-1.11.1.js"></script>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>
<style>
	body {
		font-family: 'Titillium Web', sans-serif;
		height : 100%;
		width : 100%;
		}
	.title *, .title * {
		font-family: 'Dosis', sans-serif;
		}
	.container.title, .container-fluid.title {
		margin-bottom: 2%;
		}
</style>
<script>
	$(document).ready(function() {
	$('#tab1').load('../ajax/tab.htm #Tab1');
    $('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = $(this).attr('href');
        $('.tabs ' + currentAttrValue).show().siblings().hide();
        $(this).parent('li').addClass('active').siblings().removeClass('active');
        e.preventDefault();
    });
});
</script>
<style>
	.d4, .d8, .d12, .d6{
	transition:all linear 0.2s;
	padding: 10px 10px;
	border-radius: 5px;
	border: 1px solid white;
	opacity:0.8;
	}
	.d4:hover, .d8:hover, .d12:hover, .d6:hover{
	border: 1px solid #a1a1a1;
	background-color: #eee; 
	opacity:1;
	}
	img.sponsor{
	margin: 15px;
	}
	/*img{
	border: 1px solid white;
	border-radius: 5px;
	padding: 10px 10px;
	}
	img:hover{
	border: 1px solid #a1a1a1;
	background-color: #eee;
	}*/
	.row {
    display: table;
	}
	.row [class*="col-"] {
    float: none;
    display: table-cell;
    vertical-align: top;
	}
</style>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' />
</head>	
<body style="font-family:Titillium Web;">
<?php include 'menu.php' ?>	

<div class="container-fluid title white centered">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">SPONSORS</h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>
	
	
		<div class="tabs">
    
	<ul class="tab-links"><strong>
		<li class="active"><a href="#tab1">2014</a></li>
        <li><a href="#tab2" onclick="$('#tab2').load('../ajax/tab.htm #Tab2');">2013</a></li>
        <li><a href="#tab3" onclick="$('#tab3').load('../ajax/tab.htm #Tab3');">2011</a></li>
        <li><a href="#tab4" onclick="$('#tab4').load('../ajax/tab.htm #Tab4');">2010</a></li>
    </strong></ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab active">
			
		</div>
 
        <div id="tab2" class="tab">
			
        </div>

        <div id="tab3" class="tab">
			
        </div>
 
        <div id="tab4" class="tab">
			
        </div>
    </div>
</div>
<script type="text/javascript">
$("#spons-menu").addClass("current_page");
</script>
</body>
<?php include 'foot.php' ?>
</html>