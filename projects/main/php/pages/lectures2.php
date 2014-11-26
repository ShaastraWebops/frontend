<?php include '../../php/base/logmein.php'; ?>
<!doctype html public "" "">
<html>
	<head>
		<title>Lectures | Shaastra 2015</title>

		<?php include '../../php/base/head.php' ?>
	<style>

		.speaker-list, .speaker-list .speaker-group {
			height: 100%;
			padding: 0;
			margin: 0;
			font-size: 0;
			overflow-x: hidden;
			overflow-y: hidden;
		}
		.speaker-list .speaker-group {
			height: 33%;
		}
		.speaker-list{
			padding-top: 0px;
		}
		.speaker-list .speaker-group .speaker > div > .dummy {
			margin-top: 100%; /* This is the height:width ratio */;
		}
		.speaker-list .speaker-group .speaker {
			padding: 0;
			width: 20%;
			height: 100%;
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
			font-weight: 900;
			letter-spacing: 0.1em;
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
			font-size: 1em;
		}

        #event-list .event-group .event-item a div {
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
            height: 100%;
            width: 100%;
        }
        .speaker-list .speaker-group .speaker a div > span {
            margin: 0px;
            padding: 0px;
        }
        .speaker-list .speaker-group .speaker a div > span > span {
            margin: auto;
            text-align: center;
        }

        .speaker-list .speaker-group .speaker a div > span > span > span {
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
            display: inline-block;
            padding: 0;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }
        .speaker-list .speaker-group .speaker a:hover div > span > span > span {
            padding: 40% 0px 40% 0px;
            opacity: 0.01;
        }
	</style>
</head>
<body>
<?php include '../../php/base/menu.php' ?>
<div class="container-fluid white centered">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center title">Lectures</h1>
        </div>
    </div>
</div>
<div class="container-fluid speaker-list">
    <?php
	$speakers = array( "ajit balakrishnan", "archana sharma", "arogyaswami paulraj",
        "ela bhatt", "gurtej sandhu", "partha mitra", "pawan sinha", "rajeeva karandikar",
        "ravi venkatesan", "stephen wolfram", "sunil kumar", "vanitha narayanan",
        "vijay govindrajan", "vinita bali"
    );
	$speaker_count = count($speakers);
	for($speaker_i = 0; $speaker_i < $speaker_count; $speaker_i++) { ?>

	    <?php if ($speaker_i == 0 || $speaker_i == 5 || $speaker_i == 9) { ?>
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
	                <a href="../../php/pages/speaker.php?name=<?php echo urlencode($speakers[$speaker_i]) ?>"
	                	style="background:url('<?php echo $speaker_img; ?>') no-repeat center center">
    		            <div>
    						<span class='vertical-table'>
    						    <span class='vertical-table-cell text-center transparent-text'>
                                    <span class="text"><?php echo $speakers[$speaker_i]; ?></span>
    						    </span>
    						</span>
    		            </div>
    		        </a>
		    	</div>
	        </div>
            <?php if ($speaker_i == 4 || $speaker_i == 8 || $speaker_i == 14) { ?>
	    </div>
	    <?php } ?>
    <?php } ?>
</div>
	<?php include '../../php/base/foot.php' ?>

    <script>
		function show_speakers() {
	    	$(window).resize();
			$speakers = $('.speaker'); // there are 10 speakers
			$speaker_groups = $(".speaker-group")
			delay = 1000;
			$speakers.hide();
			$(".speaker-list").show();

			// First page : nothing is there
			$speakers.hide().css({"height" : "100%", "width" : "0"})
			$speaker_groups.hide().css({"height" : "0", "width" : "0"})
			setTimeout(function() {
				// Page 2 : 1 speaker is there
                $speaker_groups.eq(0).add($speaker_groups.eq(2)).show()
                    .css({'height': '50%', 'width': '100%'})
                $speakers.eq(0).add($speakers.eq(9)).css({"float" : "left"})
                $speakers.eq(4).add($speakers.eq(13)).css({"float" : "right"})
				$speakers.eq(0).add($speakers.eq(4)).add($speakers.eq(9)).add($speakers.eq(13)).show()
					// .css({'height': '100%', 'width': '0'})
					.animate({'width': '48%'}, delay);
				setTimeout(function() {
					// Page 3 : 1+1+1 speakers are there
                    $speaker_groups.show()
                        .animate({'height': '33%'}, delay)
                        .css({'width': '100%'})
                    $speakers.eq(1).add($speakers.eq(10)).add($speakers.eq(5)).css({"float" : "left"})
                    $speakers.eq(3).add($speakers.eq(12)).add($speakers.eq(8)).css({"float" : "right"})
                    // $speakers.eq(0).add($speakers.eq(1)).add($speakers.eq(3)).add($speakers.eq(4))
                    //     .add($speakers.eq(9)).add($speakers.eq(10)).add($speakers.eq(12)).add($speakers.eq(13))
                    //     .add($speakers.eq(5)).add($speakers.eq(8)).show()
                    //     .css({"height" : "100%"})

                    $speakers.eq(0).add($speakers.eq(1)).add($speakers.eq(3)).add($speakers.eq(4))
                        .add($speakers.eq(9)).add($speakers.eq(10)).add($speakers.eq(12)).add($speakers.eq(13)).show()
                        .animate({'width': '24.5%'}, delay);
                    $speakers.eq(5).add($speakers.eq(8)).show()
                        .animate({'width': '49%'}, delay);

					setTimeout(function() {
						// Page 4 : 2+2+2
                        $speakers.eq(2).add($speakers.eq(11)).add($speakers.eq(6)).css({"float" : "left"})
                        $speakers.eq(7).css({"float" : "right"})
                        $speakers.eq(0).add($speakers.eq(1)).add($speakers.eq(2)).add($speakers.eq(3)).add($speakers.eq(4))
                            .add($speakers.eq(9)).add($speakers.eq(10)).add($speakers.eq(11)).add($speakers.eq(12)).add($speakers.eq(13)).show()
                            .animate({'width': '20%'}, delay);
                        $speakers.eq(5).add($speakers.eq(6)).add($speakers.eq(7)).add($speakers.eq(8)).show()
                            .animate({'width': '25%'}, delay);

				// 		setTimeout(function() {
				// 			// Page 5 : 4+4+2
				// 			$speakers.eq(0).add($speakers.eq(3)).add($speakers.eq(4)).add($speakers.eq(7))
				// 				.animate({'width': '25%'}, delay)
				// 			setTimeout(function() {
				// 				$speakers.eq(1).add($speakers.eq(2)).add($speakers.eq(5)).add($speakers.eq(6)).show()
				// 					.css({'height':'100%', 'width':'0%'})
				// 					.animate({'width': '25%'}, delay)
				// 				setTimeout(function() {

				// 				}, delay)
				// 			}, 10);
				// 		}, delay)
					}, delay)
				}, delay);
			}, 1);

		}

		$(document).ready(function() {
        	$(window).resize(function() {
	    		$(".speaker-list").height( $(window).height() - 70 );
	    	});
	    	$(window).resize();
            show_speakers();
		})
	</script>
    </body>
</html>
