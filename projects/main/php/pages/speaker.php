<!doctype html public "" "">
<html>
	<head>
		<?php 
			$speakers = array("Me", "Me", "Me", "Me", "Me", "Me", "Me", "Me", "Me", "Me");
			if ( isset($_REQUEST['name']) ) {
				$speaker_name = $_REQUEST['name'];
			}
			if (!isset($speaker_name) || !in_array($speaker_name, $speakers)){ // No such speaker
				header('Location: ../pages/lectures.php');
			}
		?>
		<title>Lectures | Shaastra '15</title>
    
		<?php include '../base/head.php' ?>
		<style>
			
			.speaker-list {
			}
			.speaker-list .speaker-link {
				width: 100%;
				display: inline-block;
				text-align: center;
				padding: 10px 15px;
			}
			.speaker-list .speaker-image {
				height: 0px;
				width: 0px;
				opacity: 0;
				display: inline-block;
				-webkit-transition: opacity .5s ease-in-out;
				-o-transition: opacity .5s ease-in-out;
				transition: opacity .5s ease-in-out;
			}
			@media (min-width: 768px) {
				.speaker-list:hover .speaker-image {
					height: 100px;
					width: 100px;
					opacity: 1;
				}
				.speaker-list:hover .speaker-link {
					padding: 0;
				}
				.speaker-list:hover .speaker-link .name {
					position: absolute;
					margin: auto;
					display: inline-block;
					width: 100%;
					text-align: center;
				}
			}
			
			.speaker-audio-fft {
				overflow-y : hidden;
				display: block;
			}
			.speaker-audio-fft .back {
				display: block;
				width: 100%;
				height: 100%;
			}
			.speaker-audio-fft .front {
				margin-top: -50px;
				display: block;
				width: 100%;
				clip:rect(0px,0px,0px,0px);
				height: 100%;
				z-index: 2;
				position: relative;
			}
		</style>
	</head>
<body>
<?php include '../base/menu.php' ?>
	<div class="container-fluid white centered">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center title"><?php echo $speaker_name; ?></h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>
	<div class="container-fluid" id="speaker-audio">
	    <div class="row">
		<div class="col-md-12" style="text-align: center">
			<h4>Hear the Speaker</h4>
			<div class="speaker-audio-fft" style="margin: auto; height: 50px; width: 50%;">
			    <img class="back" src="../../audio/<?php echo urlencode($speaker_name); ?>_fft_back.png">
			    <div class="front" style="background:url(../../audio/<?php echo urlencode($speaker_name); ?>_fft_front.png) no-repeat; background-size:100% 100%;"></div>
			</div>
			<audio controls id="audio" style="width: 50%;">
				<source src="" type=""></source>
			</audio>
			<script>
				var supports_media = function(mimetype, container) {
					var elem = document.createElement(container);
					if(typeof elem.canPlayType == 'function'){
						var playable = elem.canPlayType(mimetype);
						if((playable.toLowerCase() == 'maybe')||(playable.toLowerCase() == 'probably')){
							return true;
						}
					}
					return false;
				};
				var set_percent = function(val) {
					var percent = 100 * $("#audio").prop("currentTime") / $("#audio").prop("duration");
					var time_left = 1000 * $("#audio").prop("duration") - $("#audio").prop("currentTime");
					if ( val !== undefined ) {
						percent = parseInt(val);
					}
					$(".speaker-audio-fft .front").css( {
						'background-size': $('.speaker-audio-fft').width() + 'px ' + $('.speaker-audio-fft').height() + 'px'
					})
					$(".speaker-audio-fft .front").animate( {
						'width': percent + '%'
					}, time_left)
				}
				$(document).ready(function() {
					if( supports_media('audio/webm', 'audio') ) {
						$("#audio").find("source")
							.attr("src", "../../audio/<?php echo urlencode($speaker_name); ?>.webm")
					} else if ( supprts_media('audio/mpeg', 'audio')) {
						$("#audio").find("source")
							.attr("src", "../../audio/<?php echo urlencode($speaker_name); ?>.mp3")
					} else {
						$('#audio').after("<div class='alert alert-danger' role='alert'>Your browser does not support HTML5 audio. Please update it to hear the speaker</div>")
					}
					$("#audio").on('play',function(){
						if ( isNan($('#audio').prop('duration') ) ) {
							set_percent();
						}
					});
				})
			</script>
		</div>
	    </div>
	</div>
	<div class="container-fluid" id="speaker-content">
		<div class="col-md-12">
		
		</div>
	</div>

    <div class="navbar navbar-inverse navbar-fixed-bottom speaker-list">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="speakers-list">
                <ul class="nav navbar-nav text-center" style="margin: 0 auto; display: table; table-layout: fixed; float:none;">
                    <?php
			$speaker_count = count($speakers);
			for($speaker_i = 0; $speaker_i < $speaker_count; $speaker_i++) { ?>
			
			<li>
			    <a class="speaker-link" href="?name=<?php echo urlencode($speakers[$speaker_i]); ?>">
			        <span class="name"><?php echo $speakers[$speaker_i]; ?></span>
				<span class="speaker-image"
				      style="background: url(../../img/logo/200x200_dice_white.png) no-repeat center center; background-size: cover;">
					<!-- style="background: url(../../img/lectures/<?php echo $speakers[$speaker_i]; ?>.jpg) no-repeat center center; background-size: cover;">-->
				      
					
				</span>
			    </a>
			</li>
			
		    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
        
	<?php include '../base/foot.php' ?>
	
	<!--<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/jquery.gsap.min.js"></script>-->
	<script src="../../js/TweenMax.min.js"></script>
	<script src="../../js/jquery.gsap.min.js"></script>
        <script>
		$(document).ready(function() {
			
		})
	</script>
    </body>
</html>
