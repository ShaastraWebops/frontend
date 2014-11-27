<?php include '../../php/base/logmein.php'; ?>
<!doctype html public "" "">
<html>
<head>
	<title>Lectures | Shaastra 2015</title>
	<?php include '../../php/base/head.php' ?>
	<link rel="stylesheet" type="text/css" href="../../css/lectures-animation.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
</head>
<style type="text/css">	
	div.speaker-list.visible-xs.visible-sm{
	}
	div.speaker-list.hidden-xs.hidden-sm{
		width: 100%;
		height: 75%;
	}
	div.animated-speaker,
	div.unanimated-speaker{
		height: 100%;
		background: no-repeat center center; 
		background-size: cover;
	}
	div.speaker{
		display: inline-block;
		margin: auto;
    	-webkit-perspective: 3000px;
	}
	div.speaker-list.hidden-xs.hidden-sm div.speaker{
		width: 19.8%;
		height: 33.2%;		
	}
	div.speaker-list.visible-xs.visible-sm div.speaker{
		height: 400px;
		margin-top: 1em;
	}
	div.speaker a{
		color: white;
		font-size: 2em;
		text-decoration: none;
		font-family: 'Open Sans';
		font-weight: 300;
	}
	span.speaker-name{
		text-transform: uppercase;
	}
	span.speaker-name .bold{
		font-weight: bold;
	}
	div.speaker.col-sm-6 a{
		color: white;
		font-size: 2em;
		text-decoration: none;
		font-family: 'Open Sans';
		font-weight: 300;
	}
	div.speaker.col-sm-6 .bold{
		font-weight: bold;
	}
	div.speaker span.vertical-table {
        position: relative;
        -webkit-transition: all 0.2s ease-out,
            -webkit-transform 0.3s ease-out;
        -moz-transition: all 0.3s ease-out,
            -moz-transform 0.3s ease-out;
        -ms-transition: all 0.3s ease-out,
            -ms-transform 0.3s ease-out;
        -o-transition: all 0.3s ease-out,
            -o-transform 0.3s ease-out;
        transition: all 0.3s ease-out,
            transform 0.3s ease-out;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    div.speaker span.vertical-table:hover{
    	opacity: 0;
    }
    div.title-tile{
    	height: 100%;
		background: no-repeat center center; 
		/*background-size: cover;*/
    }
    div.speaker.title-tile span.vertical-table:hover{
    	opacity: 1;
    }
</style>
<body>
	<?php $back="../../php/pages/home.php"; include '../../php/base/menu.php' ?>
	<div class="container-fluid white centered">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center title">LECTURES</h1>
                <div class="white breaker">
                    <span class="left"></span>
                        <div class="dice white"></div>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </div>
    <?php
		$speakers = array( "ajit balakrishnan", "archana sharma", "arogyaswami paulraj",
                "ela bhatt", "gurtej sindhu", "partha mitra", "pawan sinha", "rajeeva karandikar",
                "ravi venkatesan", "stephen wolfram", "sunil kumar", "vanitha narayanan",
                "vijay govindrajan", "vinita bali"
            );
		$speaker_count = count($speakers);
	?>
	<div class="container-fluid speaker-list hidden-xs hidden-sm">
	    <?php for($i = 0; $i < $speaker_count+1; $i++) { ?>
			<?php 	if($i<$speaker_count/2) {?>
		        <div class="speaker">
					<div class="animated-speaker" id="<?php echo str_replace(' ', '-', $speakers[$i]) ?>"
			        	style="background-image:url(../../img/lectures/<?php echo str_replace(' ', '%20', $speakers[$i]); ?>.jpg)">
			            <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$i]) ?>">
							<span class='vertical-table'>
							    <span class='vertical-table-cell text-center'>
									<span class="speaker-name">
										<?php echo substr($speakers[$i],0, strpos($speakers[$i], ' ')); ?>
									</span>
									<span class="speaker-name bold">
										<?php echo substr($speakers[$i],strpos($speakers[$i], ' ')); ?>
									</span>
					    		</span>
							</span>
				        </a>
	        		</div>
		        </div>
        	<?php } ?>
    		<?php if($i==$speaker_count/2) { ?>
	        	<div class="speaker title-tile" id="shaastra-lectures" style="background-image: url(../../img/logo/200x200_dice_white.png)">
		            <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$i]) ?>">
						<!-- <span class='vertical-table'>
						    <span class='vertical-table-cell text-center'>
								<span class="speaker-name">SHAASTRA LECTURES</span>
				    		</span>
						</span> -->
			        </a>
		        </div>
			<?php } ?>
			<?php if($i>$speaker_count/2) { $speaker_i=$i-1;?>
		        <div class="speaker">
		        	<div class="animated-speaker" id="<?php echo str_replace(' ', '-', $speakers[$speaker_i]) ?>"
		        	style="background-image: url(../../img/lectures/<?php echo str_replace(' ', '%20', $speakers[$speaker_i]); ?>.jpg)">
			            <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$speaker_i]) ?>">
							<span class='vertical-table'>
							    <span class='vertical-table-cell text-center'>
									<span class="speaker-name">
										<?php echo substr($speakers[$speaker_i],0, strpos($speakers[$speaker_i], ' ')); ?>
									</span>
									<span class="speaker-name bold">
										<?php echo substr($speakers[$speaker_i],strpos($speakers[$speaker_i], ' ')); ?>
									</span>
					    		</span>
							</span>
				        </a>
			        </div>
		        </div>
        	<?php } ?>
	    <?php } ?>
	</div>
	<!-- small screens (mobiles) -->
	<div class="container-fluid speaker-list visible-xs visible-sm">	    
		<?php for($i = 0; $i < $speaker_count+1; $i++) { ?>
			<?php 	if($i<$speaker_count/2) {?>
		        <div class="speaker col-sm-6">
					<div class="unanimated-speaker" id="<?php echo str_replace(' ', '-', $speakers[$i]) ?>"
			        	style="background-image:url(../../img/lectures/<?php echo str_replace(' ', '%20', $speakers[$i]); ?>.jpg)">
			            <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$i]) ?>">
							<span class='vertical-table'>
							    <span class='vertical-table-cell text-center'>
									<span class="speaker-name">
										<?php echo substr($speakers[$i],0, strpos($speakers[$i], ' ')); ?>
									</span>
									<span class="speaker-name bold">
										<?php echo substr($speakers[$i],strpos($speakers[$i], ' ')); ?>
									</span>
					    		</span>
							</span>
				        </a>
	        		</div>
		        </div>
        	<?php } ?>
			<?php if($i>$speaker_count/2) { $speaker_i=$i-1;?>
		        <div class="speaker col-sm-6">
		        	<div class="unanimated-speaker" id="<?php echo str_replace(' ', '-', $speakers[$speaker_i]) ?>"
		        	style="background-image: url(../../img/lectures/<?php echo str_replace(' ', '%20', $speakers[$speaker_i]); ?>.jpg)">
			            <a href="../pages/speaker.php?name=<?php echo urlencode($speakers[$speaker_i]) ?>">
							<span class='vertical-table'>
							    <span class='vertical-table-cell text-center'>
									<span class="speaker-name">
										<?php echo substr($speakers[$speaker_i],0, strpos($speakers[$speaker_i], ' ')); ?>
									</span>
									<span class="speaker-name bold">
										<?php echo substr($speakers[$speaker_i],strpos($speakers[$speaker_i], ' ')); ?>
									</span>
					    		</span>
							</span>
				        </a>
			        </div>
		        </div>
        	<?php } ?>
	    <?php } ?>
	</div>
	<?php include '../../php/base/foot.php' ?>
	<script type="text/javascript">
		function verticalAlignC(cl,n,type){
			x = document.getElementsByClassName(cl);
			for (var i = x.length - 1; i >= 0; i--) {
				x[i].style.position = type;
				x[i].style.top = (1-(x[i].clientHeight/window.innerHeight))*n+"%";
			};
		}
	</script>
    </body>
</html>
