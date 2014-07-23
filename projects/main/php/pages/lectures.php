<!doctype html public "" "">
<html>
	<head>
		<title>Lectures | Shaastra '15</title>
    
		<?php include '../base/head.php' ?>
		<style>
		
		.intro-page {
		    height: 100%;
		    -webkit-transition: background-size 50s ease;
		    background: url('../../img/lectures/cover.jpg') no-repeat center;
		    background-size: auto 200%;
		}
		
		
		#loader p {
			-webkit-animation: text-float-up 5s ease-in-out;
			-webkit-animation-fill-mode: forwards;
			opacity: 0;
			position: absolute;
			width: 100%;
			text-transform: uppercase;
			font-size: 2.5em;
			text-shadow: 0px 0px 14px #000;
		}
		#loader p span {
		    text-align : center;
		    display: block;
		    line-height: 45px;
		    width: 100%;
		}
		#loader .anim2 {
		    -webkit-animation: text-float-up-2 5s ease-in-out;
		    -webkit-animation-fill-mode: forwards;
		}
		#loader .anim-p.p1, #loader .anim-p.p1 .anim2 {
		    -webkit-animation-delay: 3s;
		}
		#loader .anim-p.p2, #loader .anim-p.p2 .anim2 {
		    -webkit-animation-delay: 8s;
		}
		#loader .anim-p.p3, #loader .anim-p.p3 .anim2 {
		    -webkit-animation-delay: 13s;
		}
		@-webkit-keyframes text-float-up {
		    0% {margin-top: 70%; opacity: 0;}
		    30% {margin-top: 50%; opacity: 1;}
		    70% {margin-top: 50%; opacity: 1;}
		    100% {margin-top: 30%; opacity: 0;}
		}
		@-webkit-keyframes text-float-up-2 {
		    0% {margin-top: 5%;}
		    30% {margin-top: 0%;}
		    70% {margin-top: 0%;}
		    100% {margin-top: 5%;}
		}
		
		.intro-page .p-container {
		  height: 100%;
		  position: relative;
		  z-index: 3;
		  text-align: center;
		}
		.intro-page a {
		  -webkit-box-sizing: border-box;
		  -moz-box-sizing: border-box;
		  box-sizing: border-box;
		  text-align: center;
		  display: inline-block;
		  border: 1px solid #fff;
		  padding: 0 60px;
		  text-transform: uppercase;
		  letter-spacing: 3px;
		  overflow: hidden;
		  height: 59px;
		  width: 232px;
		  position: absolute;
		  top: 0;
		  left: 50%;
		  margin-left: -116px;
		  background-color: rgba(255, 255, 255, 0.1);
		  -webkit-transition: background 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
		  -moz-transition: background 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
		  -o-transition: background 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
		  transition: background 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
		  font-size: 0.875em;
		}
		.intro-page a .skip {
		  display: block;
		}
		.intro-page a .loading {
		  display: none;
		}
		.intro-page a span {
		  margin: 19px 0 0 0;
		}
		.intro-page a:hover {
		  background-color: rgba(0, 0, 0, 0.1);
		}
		.intro-page a.is-loading {
		  cursor: default;
		  background-color: transparent;
		}
		.intro-page a.is-loading .loading {
		  display: block;
		}
		.intro-page a.is-loading .skip {
		  display: none;
		}
		.intro-page a.is-loading:hover {
		  background-color: transparent;
		}
		.intro-page .bottom {
		  position: absolute;
		  bottom: 0;
		  height: 90px;
		  width: 100%;
		}
		
		
		.speaker-list, .speaker-list .speaker-group {
			height: 100%;
			padding: 0;
			margin: 0;
			font-size: 0;
		}
		.speaker-list .speaker-group .speaker > div > .dummy { 
			margin-top: 100%; /* This is the height:width ratio */;
		}
		.speaker-list .speaker-group .speaker {
			padding: 0;
			width: 25%;
			height: 33.33%;
			display: inline-block;
			font-size: 1em;
			
		}
		.speaker-list .speaker-group .speaker.transition {
			-webkit-transition: width 1000ms ease-in-out, height 1000ms ease-in-out;
		}
		.speaker-list .speaker-group .speaker > div {
			display: inline-block;
		        position: relative;
			padding: 0;
		        margin: 0;
			width: 100%;
			height: 100%;
		}
		.speaker-list .speaker-group .speaker a {	
			height: 100%;
			width: 100%;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			overflow: hidden;
			text-decoration: none;
			color: #fff;
			font-size: 1em;
			font-size: 1.5vw;
			font-weight: 900;
			font-family: "Times New Roman", sans-serif;
			letter-spacing: 0.1em; 
			letter-spacing: 0.15vw; 
			text-transform: uppercase;
			background: url('../../img/logo/200x200_dice_white.png') no-repeat center center;
			background-size: cover;
			color: black;
		}
		.speaker-list .speaker-group .speaker a div {
			position: relative;
			-webkit-transition: margin 0.2s ease-out, 
			-webkit-transform 0.3s ease-out;
			-moz-transition: margin 0.3s ease-out, 
			-moz-transform 0.3s ease-out;
			-ms-transition: margin 0.3s ease-out, 
			-ms-transform 0.3s ease-out;
			-o-transition: margin 0.3s ease-out, 
			-o-transform 0.3s ease-out;
			transition: margin 0.3s ease-out, 
			transform 0.3s ease-out;
			height: 90%;
			width: 90%;
			margin: 5%;
		}
		.speaker-list .speaker-group .speaker a .text {
			background: #666;
			background: rgba(0, 0, 0, 0.8);
			width: 100%;
			display: inline-block;
			color: #fff;
		}
	</style>
</head>
<body>
<?php include '../base/menu.php' ?>
<div class="container-fluid intro-page" id="loader">
	<div class="col-md-6 col-md-offset-3 p-container">
		<p class="anim-p p1">
			<span class="anim1">this year,</span>
			<span class="anim2">there’s a new way to support our veterans</span>
		</p>
		<p class="anim-p p2">
			<span class="anim1">this year,</span>
			<span class="anim2">there’s a new way to support our veterans</span>
		</p>
		<p class="anim-p p3">
			<span class="anim1">this year,</span>
			<span class="anim2">there’s a new way to support our veterans</span>
		</p>
		<div class="bottom">
			<a class="is-loading skip-intro white no-style" href="#skipintro">
				<span class="skip">skip intro</span>
				<span class="loading">loading</span>
			</a>
		</div>
	</div>
</div>
<div class="container-fluid speaker-list" style="display: none;">
    <?php
	$speakers = array("Me", "Me", "Me", "Me", "Me", "Me", "Me", "Me", "Me", "Me");
	$speaker_count = count($speakers);
	for($speaker_i = 0; $speaker_i < $speaker_count; $speaker_i++) { ?>
	    
	    <?php if ($speaker_i == 0 || $speaker_i == 4 || $speaker_i == 8) { ?>
	    <div class="row speaker-group">
	    <?php } ?>
	        <div class="speaker">
	            <div>
	                <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$speaker_i]) ?>">
		            <div>
				<span class='vertical-table'>
				    <span class='vertical-table-cell text-center'>
					<span class="text"><?php echo $speakers[$speaker_i]; ?></span>
				    </span>
				</span>
		            </div>
		        </a>
		    </div>
	        </div>
            <?php if ($speaker_i == 3 || $speaker_i == 7 || $speaker_i == 9) { ?>
	    </div>
	    <?php } ?>
    <?php } ?>
</div>
        
	<?php include '../base/foot.php' ?>
	
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/jquery.gsap.min.js"></script>-->
	<script src="../../js/TweenMax.min.js"></script>
	<script src="../../js/jquery.gsap.min.js"></script>
        <script>
		function show_speakers() {
			$speakers = $('.speaker'); // there are 10 speakers
			$speaker_groups = $(".speaker-group")
			delay = 1000;
			$speakers.hide();
			$(".speaker-list").show();
			
			// First page : nothing is there
			$speakers.hide()
			$speaker_groups.hide()
			setTimeout(function() {
				// Page 2 : 1 speaker is there
				console.log('Page 2 : 1');
				$speakers.eq(4).show()
					.css({'height': '100%', 'width': '0'})
					.animate({'width': '100%'}, delay);
				$speaker_groups.eq(1).show()
					.css({'height' : '100%'})
					
				setTimeout(function() {
					console.log('Page 3 : 3');
					// Page 3 : 1+1+1 speakers are there
					$speakers.eq(0).add($speakers.eq(8)).show()
						.css({'height':'100%', 'width':'100%'})
					$speaker_groups.eq(0).add($speaker_groups.eq(2)).show()
						.css({'height' : '0%'}, delay)
					$speaker_groups.show()
						.animate({'height' : '33%'}, delay)
					
					setTimeout(function() {
						// Page 4 : 2+2+2
						$speakers.eq(0).add($speakers.eq(4)).add($speakers.eq(8))
							.animate({'width': '50%'}, delay);
						$speakers.eq(3).add($speakers.eq(7)).add($speakers.eq(9)).show()
							.css({'height':'100%', 'width':'0%'})
							.animate({'width': '50%'}, delay)
						
						setTimeout(function() {
							// Page 5 : 4+4+2
							$speakers.eq(0).add($speakers.eq(3)).add($speakers.eq(4)).add($speakers.eq(7))
								.animate({'width': '25%'}, delay)
							$speakers.eq(1).add($speakers.eq(2)).add($speakers.eq(5)).add($speakers.eq(6)).show()
								.css({'height':'100%', 'width':'0%'})
								.animate({'width': '25%'}, delay)
							
						}, delay)
					}, delay)
				}, delay);
			}, delay);
			
			
		}
		
		$(document).ready(function() {
			if ( window.location.hash == '#skipintro') {
				$('#loader').hide();
				show_speakers();
			}
			$('.is-loading').removeClass('is-loading');
			$('.skip-intro').click(function(ev) {
				var $el = $(this);
				if ( $el.hasClass('.is-loading') ) {
					return;
				} else {
					$el.animate( {'height': '0' }, 500, function() {
						$('#loader').fadeOut(500, function() {
							show_speakers();
						});
					});			    
				}
			})
			$('.intro-page').css('background-size', 'auto 150%');
		})
	</script>
    </body>
</html>
