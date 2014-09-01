<!doctype html public "" "">
<html>
	<head>
		<title>Lectures | Shaastra '15</title>

		<?php include '../base/head.php' ?>
	<style>

		.speaker-list, .speaker-list .speaker-group {
			height: 100%;
			padding: 0;
			margin: 0;
			font-size: 0;
			overflow-x: hidden;
		}
		.speaker-list{
			padding-top: 0px;
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
<div class="container-fluid white centered">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center title">Lectures</h1>            
        </div>
    </div>
</div>
<div class="container-fluid speaker-list" style="display:none;">
    <?php
	$speakers = array(	"arogyaswami paulraj", "pawan sinha", "rajeeva karandikar", "vivek wadhwa", "vijay govindraj", 
						"rakesh agarwal", "ajit balakrishnan", "sunil kumar", "romila thapar", "ila bhatt", 
						"archana sharma", "archana sharma", "robert langer", "anil kakodkar");
	$speaker_count = count($speakers);
	for($speaker_i = 0; $speaker_i < $speaker_count; $speaker_i++) { ?>

	    <?php if ($speaker_i == 0 || $speaker_i == 4 || $speaker_i == 8) { ?>
	    <div class="row speaker-group">
	    <?php } ?>
	        <div class="speaker">
	            <div>
	            	<?php 	$default_img = '../../img/logo/200x200_dice_white.png';
	            			$speaker_img = '../../img/lectures/' . $speakers[$speaker_i] . ".jpg";
	            			if (!file_exists($speaker_img)) {
	            				$speaker_img = '../../img/lectures/' . $speakers[$speaker_i] . ".png";
	            			}
                 			if (!file_exists($speaker_img)) {   
                 			   	$speaker_img = $default_img;
                			} 
        			?>
	                <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$speaker_i]) ?>" 
	                	style="background:url('<?php echo $speaker_img; ?>') no-repeat center center">
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

    <script>
		function show_speakers() {
	    	document.getElementsByClassName("speaker-list")[0].style.height = (window.innerHeight - 72)+"px";
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
						setTimeout(function() {
							$speakers.eq(3).add($speakers.eq(7)).add($speakers.eq(9)).show()
								.css({'height':'100%', 'width':'0%'})
								.animate({'width': '50%'}, delay)
						}, 10);

						setTimeout(function() {
							// Page 5 : 4+4+2
							$speakers.eq(0).add($speakers.eq(3)).add($speakers.eq(4)).add($speakers.eq(7))
								.animate({'width': '25%'}, delay)
							setTimeout(function() {
								$speakers.eq(1).add($speakers.eq(2)).add($speakers.eq(5)).add($speakers.eq(6)).show()
									.css({'height':'100%', 'width':'0%'})
									.animate({'width': '25%'}, delay)
							}, 10);
						}, delay)
					}, delay)
				}, delay);
			}, 1);
		}

		$(document).ready(function() {
			// jsCache.load(
   //      		<?php if ($DEBUG) { ?>
   //          		{url: '../../js/TweenMax.min.js'},
   //          		{url: '../../js/jquery.gsap.min.js'}
   //      		<?php } else { ?>
   //          		{url: '//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js'},
   //          		{url: '//cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/jquery.gsap.min.js'}
   //      		<?php } ?>
   //      	).then(show_speakers)
        	show_speakers();
		})
	</script>
    </body>
</html>
