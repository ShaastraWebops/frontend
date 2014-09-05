<!DOCTYPE html>
<html>
    <head>
        <title>Shows | Shaatsra '15</title>
        <?php include '../base/head.php' ?>
        <link rel="stylesheet" type="text/css" href="../../css/shows.css">
        <link rel="stylesheet" type="text/css" href="../../css/jquery.fullPage.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>	
    <script src="../../js/jquery.fullPage.min.js"></script>
       	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				<!--sectionsColor: ['#000000', '#BB0C0C', '#ffffff']-->
				anchors: ['firstPage', 'secondPage', '3rdPage'],
				menu: '#menu-nav',
				loopTop: true,
				loopBottom: true
			});
		});
	    </script>

    </head>
    
    <body>
	       <?php include '../base/menu.php' ?>
        
<div class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="navbar-header">
          <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
    <div id="navbarCollapse" class="collapse navbar-collapse"> 
	<ul id="menu-nav" class="nav nav-pills nav-justified">
		<li data-menuanchor="firstPage" class="active col-md-4"><a href="#firstPage">First slide</a></li>
		<li data-menuanchor="secondPage" class="col-md-4"><a href="#secondPage">Second slide</a></li>
		<li data-menuanchor="3rdPage" class="col-md-4"><a href="#3rdPage">Third slide</a></li>
	</ul>
    </div>
    </div>
    </div>
    </div>
 <div id="fullpage">
	<div class="section " id="section0">
		<div class="left grey">
       <h1 style="float:right;color:#FFF;padding-right:3px;">ENVI</h1>
       <p style="padding-top:200px;">After the overwhelming applause to Envisage at Shaastra 2014, we take a giant leap ahead, to present to you, a novel technical show defying your imagination, revolutionizing basic science and technology. The students of IIT Madras raised the bars, orchestrated and organized an event replacing the professional shows in Shaastra. Sit back and get ready to experience an adrenalin rush, let your jaws drop in awe as the transcendental fusion of art and technology pleasures your visual senses and stupefies you with audio effects.</p>
<p>We bet on ourselves to take you through a journey into Neverland, giving a new dimension to entertainment and turning projects undertaken by us into a memory you will long cherish!</p>
        </div>
        <div class="right white">
        <h1 style="float:left;color:#333;padding-left:3px;">SAGE</h1>
        <p style="padding-top:200px;">The work of science can be enigmatic deceiving your eyes by showing animations with just a strip of LEDs. You will know which boxes to blame if you are unable to get sleep that night. Instrumentalists will be seen throwing their guitars and drum-sticks in their backyard after witnessing the Wireless Instruments. DJs will seem cliché after you are mesmerized by Virtual Music Mixing. You will be pinching the person next to you just to check if he isn't a hologram. Ever wondered how changing patterns on a screen can amaze you with music. You will witness a new groundbreaking performance after watching our techno cultural show.</p>
        <p>Like a seagull skimming the waves of entertainment over the ocean of imagination, with the technical dexterity of IIT-M students to give wings to our dream, we are set to roar into the blues of success. Join us at Shaastra 2014 to share the awe and experience the Dream Kingdom!<p>
        </div>
	</div>
	<div class="section" id="section1">
		<div class="left white">
        </div>
        <div class="right grey">
        </div>
	</div>
	<div class="section" id="section2">
    	<div class="left grey">
        </div>
        <div class="right white">
        </div>
		</div>
	</div>

    </body>
    <?php include '../base/foot.php' ?>
</html>
