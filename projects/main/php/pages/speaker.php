<?php include '../../php/base/logmein.php'; ?>
<!doctype html public "" "">
<html>
	<head>
		<?php
            $speakers = array( "ajit balakrishnan", "archana sharma", "arogyaswami paulraj",
                "ela bhatt", "gurtej sandhu", "partha mitra", "pawan sinha", "rajeeva karandikar",
                "ravi venkatesan", "stephen wolfram", "sunil kumar", "vanitha narayanan",
                "vijay govindrajan", "vinita bali"
            );

			if ( isset($_REQUEST['name']) ) {
				$speaker_name = $_REQUEST['name'];
				$speaker_path = '../../php/lectures/' . $speaker_name . '.html';
			}
			if (!isset($speaker_name) || !in_array($speaker_name, $speakers)){ // No such speaker
				header('Location: ../../php/pages/lectures.php');
			}

			if ( isset($_REQUEST['edit']) ) {
				$editable = 1;
			} else {
				$editable = 0;
			}


			if (!file_exists($speaker_path)) {
				if ( $editable ) { // Create a new file
					$fp = fopen($speaker_path, "w"); fclose($fp); // Create new file
					$data = '';
				} else { // invalid page - tell user it is 404 not found
					include '../../php/pages/404.php';
				die();
				}
			} else {
				$data = file_get_contents($speaker_path);
			}
			if ($editable && $data == '') { // empty file, show help
				$data = ''; //file_get_contents('../../php/events/sample.html');
			}
		?>

		<title>Lectures | Shaastra 2015</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<?php include '../../php/base/head.php' ?>
		<style>

			.speaker-list {

			}
			.speaker-list .speaker-link {
				width: 100%;
				display: inline-block;
				text-align: center;
				padding: 10px 0px;
			}
			.speaker-list .speaker-image {
				height: 0px;
				width: 0px;
				opacity: 0;
				display: inline-block;
				-webkit-transition: all .5s ease-in-out;
				-o-transition: all .5s ease-in-out;
                -moz-transition: all .5s ease-in-out;
				transition: all .5s ease-in-out;
			}
			@media (min-width: 768px) {
				.speaker-list:hover .speaker-image {
					height: 100px;
					width: 100px;
					opacity: 1;
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
				height: 100%;
				z-index: 2;
				position: relative;
			}

			.cke_button_icon.cke_button__savebtn_icon {
				width : 70px;
				background-position:right !important;
			}
			.cke_button_icon.cke_button__savebtn_icon:after {
			    content:'Save';
			}
			#speaker-content {
				padding-top: 2%;
				margin-bottom: 100px;
			}
			#speaker-content .data {
			    background-color : #888888;
			    background-color : rgba(0, 0, 0, 0.5);
			    border : 2px solid #dddddd;
			    border-radius : 10px;
			    color : #ffffff;
			    padding: 10px;
			}
            .navbar.speaker-list {
                -webkit-transition: height 0.5s;
                -moz-transition: height 0.5s;
                -ms-transition: height 0.5s;
                -o-transition: height 0.5s;
                transition: height 0.5s;
            }
            .speaker-link {
                color : #ccc;
            }
            .speaker-link:hover {
                color : #fff;
            }
            .speakers-name{
            	font-weight: 300;
            	font-family: 'Open Sans', sans-serif;
            	text-transform: uppercase;
            }
            .speakers-name.bold{
            	font-weight: bold;
            }
		</style>
	</head>
<body>
    <?php $back="../../php/pages/lectures.php"; include '../../php/base/menu.php' ?>
	<div class="container-fluid white centered">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center title"><?php echo ucwords($speaker_name); ?></h1>
                <div class="white breaker">
                    <span class="left"></span>
                    <div class="dice white"></div>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </div>
	<div class="container-fluid" id="speaker-content" style="padding-bottom : 50px">
		<?php if (isset($editable) && $editable) { ?>
		    <form method="post" action='../../php/scripts/save_to_file.php'>
        	        <div class='data col-md-offset-1 col-md-10'>
        		    <input type='hidden' name='filename' value='<?php echo $speaker_path; ?>' />
            		    <textarea name="data" id='data' style='min-height : 100px;'>
        			<?php echo $data; ?>
        		    </textarea>
        		</div>
            </form>
        <?php } else { ?>
            <div class='data col-md-offset-1 col-md-10'>
                <?php echo file_get_contents('../../php/lectures/' . $speaker_name . '.html');; ?>
            </div>
        <?php } ?>
	</div>
    <div class="navbar navbar-inverse navbar-fixed-bottom speaker-list hidden-xs hidden-sm">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="speakers-list">
                <div class="row text-center">
                    <?php for($speaker_i = 0; $speaker_i < 14; $speaker_i++) { ?>
                        <div class="speaker text-center" style="display: inline-block; width : 14%;">
                            <div class="real">
                                <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$speaker_i]) ?>" class="speaker-link">
                                    <div class=""><!--name and image of all the speakers-->
                                    	<span style="float:left; width : 100%;">
                                    		<span class="speakers-name">
												<?php echo substr($speakers[$speaker_i],0, strpos($speakers[$speaker_i], ' ')); ?>
											</span>
											<span class="speakers-name bold">
												<?php echo substr($speakers[$speaker_i],strpos($speakers[$speaker_i], ' ')); ?>
											</span>
                                    	</span>
                                        <div class="speaker-image" style="width : 100%; background: url(../../img/lectures/<?php echo str_replace(' ', '%20', $speakers[$speaker_i]); ?>.jpg) no-repeat center center; background-size: cover;">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
	<?php include '../../php/base/foot.php' ?>
        <?php if ( $editable ) { // The fns to send data ?>
		<script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>

		<script>
			$(document).ready(function() {
				CKEDITOR.inline('data')
	  			$(window).bind('keydown', function(event) {
				    if (event.ctrlKey || event.metaKey) {
				        var letter = String.fromCharCode(event.which).toLowerCase();
				        if ( letter == 's' ) {
				            $('.cke_button__savebtn').click();
				            event.preventDefault();
				        }
				    }
				});
			});
		</script>
	<?php } ?>
    </body>
</html>
