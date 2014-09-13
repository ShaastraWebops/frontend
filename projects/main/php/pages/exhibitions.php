<!DOCTYPE html>
<html>
	<head>
		<title>Exhibitions | Shaastra '15</title>
		<?php include '../base/head.php' ?>

		<style type="text/css">
			#menu-nav a{
				color : #FFF;
				font-size : 20px;
				font-weight : bold;
			}
			#menu-nav a:hover{
				color : #999;
				text-shadow : #FFF;
				background : none;
			}
			#menu-nav li.active a{
				background : #00425A;
				background : rgba(0, 66, 90, 0.7);
				color : #FFF;
				border-radius : 0;
			}
			.navbar-custom{
				background-color : #000;
				border-color : transparent;
				color : #FFF;
				border-radius : 0;
			}
			.navbar-toggle .icon-bar {
				color: #fff;
			}
			.page {
				padding: 50px 0 0 0;
				min-height: 100%;
			}
			@media (min-width: 768px) {
				.navbar-custom {
					background-color : rgba(0, 0, 0, 0.5);
				}
			}

		</style>
	</head>
	
	<body>
		<?php include '../base/menu.php' ?>
		
		<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
			<div class="container-fluid col-md-offset-1 col-md-10">
				<div class="navbar-header">
					<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle collapsed">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div id="navbarCollapse" class="collapse navbar-collapse"> 
						<ul id="menu-nav" class="nav nav-pills nav-justified">
							<li class="active"><a data-scrolltarget="page1" href="javascript:void(0)">Envisage</a></li>
							<li class=""><a data-scrolltarget="page2" href="javascript:void(0)">Exhibitions</a></li>
							<li class=""><a data-scrolltarget="page3" href="javascript:void(0)">Exhibitions</a></li>
							<li class=""><a data-scrolltarget="page4" href="javascript:void(0)">Exhibitions</a></li>
							<li class=""><a data-scrolltarget="page5" href="javascript:void(0)">Exhibitions</a></li>
							<li class=""><a data-scrolltarget="page6" href="javascript:void(0)">Exhibitions</a></li>
							<li class=""><a data-scrolltarget="page2" href="javascript:void(0)">Exhibitions</a></li>

						</ul>
					</div>
				</div>
			</div>
		</nav>
		<div class="page" id="page1">
			<div class="container-fluid white centered">
		        <div class="row">
		            <div class="col-xs-12">
		                <h1 class="text-center title">ENVISAGE</h1>
		                <div class="white breaker">
		                    <span class="left"></span>
		                        <div class="dice white"></div>
		                    <span class="right"></span>
		                </div>
		            </div>
		        </div>
		    </div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
				      	<div class="hidden-xs col-lg-6 col-md-6 ">
				      		<div class="embed-responsive embed-responsive-4by3">
								<iframe class="youtube-video embed-responsive-item" src="http://www.youtube.com/embed/yOYbyjE3Vtw" allowfullscreen align="right"></iframe>
							</div>
						</div>
		                <p><span class='shaastra-title'>Shaastra</span>, IIT Madras presents Envisage, a novel techno cultural show specializing in defying your imagination, breaking boundaries and revolutionizing basic science and technology. After the overwhelming responses to the previous editions, Envisage is back, Bigger and Better! This time, Sit back and get ready to experience an adrenalin rush like you have never experienced before. Soak in the awesomeness as the transcendental fusion of art and technology pleasures your visual senses and stupefies you with audio effects. </p>
	                    <br />
	                    <p>Being the only student organized event of its kind in the Whole Country, We proudly bet you will never ever forget your journey into Neverland, giving a new meaning to your idea of entertainment and turning projects undertaken by us into a memory you will long cherish! </p>
	                    <br />
	                    <p>The work of science can be enigmatic. Have your sight deceived by animations shown using just a strip of LEDs. You will know which boxes to blame if you are unable to get sleep that night. Get ready to witness people around you floating in air. After you have a taste of the Virtual Music and Video Mixing we offer, DJs will seem old school. Ever wanted to take a selfie with a superhero, this might well be the chance. You will witness a new groundbreaking performance after watching our techno cultural show.</p>
	                   	<br />
	                    <p>Last year, we achieved a Limca World Record for the largest Holographic Projection and The First ever Virtual Band. Like a seagull skimming the waves of entertainment over the ocean of imagination, with the technical dexterity of IIT-M students to give wings to our dream, we are set to roar into the blues of success. Join us at Shaastra 2015 to share the awe and experience the Dream Kingdom!</p>
		                <br />
		                
					</div>
				</div>
			</div>
		</div>
		<div class="page" id="page2">
			<div class="container-fluid white centered">
		        <div class="row">
		            <div class="col-xs-12">
		                <h1 class="text-center title">EXHIBITIONS</h1>
		                <div class="white breaker">
		                    <span class="left"></span>
		                        <div class="dice white"></div>
		                    <span class="right"></span>
		                </div>
		            </div>
		        </div>
		    </div>

			<div class="container-fluid">
				<div class="col-md-12">

				</div>
			</div>
		</div>

		<?php include '../base/foot.php' ?>
		
		<script type="text/javascript">
			$(function() {
				$('a[data-scrolltarget]').click(function() {
					var $el = $(this)
					$el.closest('.nav').find('li').removeClass('active')
					$el.closest('li').addClass('active')
					var $target = $('#' + $el.data('scrolltarget'));
					if ($target.length) {
						$('html,body').animate({
							scrollTop: $target.offset().top
						}, 1000);
						return false;
					}
				
				});
			});	
		</script>
	</body>
</html>
