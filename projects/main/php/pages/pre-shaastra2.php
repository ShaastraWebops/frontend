<!DOCTYPE html>
<html>
	<head>
		<title>Pre Shaastra | Shaastra '15</title>
		<?php include '../base/head.php' ?>

		<style type="text/css">
			body {
				overflow-y: auto;
			}
			.animation.anim-sampark {
				z-index : 1; 
				margin: auto;
				text-align: center;
			}	
	        svg#samparkMap {
    		}
    		svg#samparkMap a {
    			cursor: pointer;
    			opacity: 0;
    		}
    		svg#samparkMap a text {
    			fill: #fff;
    			font-weight: bold;
    		}
    		svg#samparkMap a circle {
    			fill: #f00;
    			-webkit-transform: scale(1);
	            -moz-transform: scale(1);
                transform: scale(1);
    		}
    		@-webkit-keyframes mapBorder{
          		0% {
	            	stroke-opacity:1;
    		        fill-opacity: 0;
          		}
          		80% {
            		stroke-dashoffset: 0;
          		}
          		100% {
		            stroke-dashoffset: 0;
		            stroke-opacity:1;
		            fill-opacity:1;
		        }
        	}
        	@-moz-keyframes mapBorder{
          		0% {
            		stroke-opacity:1;
            		fill-opacity: 0;
          		}
          		80% {
            		stroke-dashoffset: 0;
          		}
          		100% {
            		stroke-dashoffset: 0;
            		stroke-opacity:1;
            		fill-opacity:1;
          		}
        	}
        	@keyframes mapBorder{
          		0% {
            		stroke-opacity:1;
            		fill-opacity: 0;
          		}
          		80% {
            		stroke-dashoffset: 0;
          		}
          		100% {
            		stroke-dashoffset: 0;
            		stroke-opacity:1;
            		fill-opacity:1;
          		}
        	}
        	.background{
                    background-color: black;
                    color: white;
                    text-decoration: none;
        	}
        	.background1{
                   background-color:#778899	;
                    color: black;
                    text-decoration: none;
        	}
        	a.background1:hover{
        		color:#FFE4C4	;
        	}
        	.border{
                border:1px solid white;
                border-top-style:initial;
        	}
        	.cke_button_icon.cke_button__savebtn_icon {
                width : 70px;
                background-position:right !important;
            }
            .cke_button_icon.cke_button__savebtn_icon:after {
                content:'Save';
            }
		</style>
	</head>
	
	<body>
		<?php include '../base/menu.php' ?>
		<div class="container-fluid white centered">
	        <div class="row">
	            <div class="col-xs-12">
	                <h1 class="text-center title">PRE SHAASTRA</h1>
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
				<div class="col-md-5 col-md-offset-1">
					<div class="panel-group" id="accordion" id="myCarousel" >
					  <div class="panel background">
					    <div class="panel-heading background1" data-ride="carousel">
					      <h4 class="panel-title text-center title background1" style="font-size:26px">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" style="text-decoration:none;" class="background1">
					          LECTURES
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse background">
					      <div class="panel-body background border">
					      	  <?php 
								$data = file_get_contents('../misc/lectures.html');
								if ( isset($_GET['edit']) ) { ?>
								<form method="post" action='../scripts/save_to_file.php'>
				                    <div class='data col-xs-12'>
				                        <input type='hidden' name='filename' value='../misc/lectures.html' />
				                        <textarea name="data" id='data-lectures' style='min-height : 100px;'>
				                            <?php echo $data; ?>
				                        </textarea>
				                    </div>
				                </form>
			                <?php } else { ?>
				                <div class='data col-xs-12'>
				                    <?php echo $data; ?>
				                </div>
							<?php } ?>
					 	   </div>
					    </div>
					  </div>
					  <p>&nbsp;</p>
					  <div class="panel background">
					    <div class="panel-heading background1">
					      <h4 class="panel-title text-center title background1" style="font-size:26px">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="text-decoration:none;" class="background1">
					          WORKSHOPS
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTwo" class="panel-collapse collapse background">
					      <div class="panel-body background border">
					            <?php 
								$data = file_get_contents('../misc/workshops.html');
								if ( isset($_GET['edit']) ) { ?>
								<form method="post" action='../scripts/save_to_file.php'>
				                    <div class='data col-xs-12'>
				                        <input type='hidden' name='filename' value='../misc/workshops.html' />
				                        <textarea name="data" id='data-workshops' style='min-height : 100px;'>
				                            <?php echo $data; ?>
				                        </textarea>
				                    </div>
				                </form>
			                <?php } else { ?>
				                <div class='data col-xs-12'>
				                    <?php echo $data; ?>
				                </div>
							<?php } ?>
					      </div>
					    </div>
					  </div>
					  <p>&nbsp;</p>
					  <div class="panel background">
					    <div class="panel-heading background1">
					      <h4 class="panel-title text-center title background1" style="font-size:26px">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" style="text-decoration:none;" class="background1">
					          EVENTS
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse background">
					      <div class="panel-body background border">
					        <?php 
								$data = file_get_contents('../misc/events.html');
								if ( isset($_GET['edit']) ) { ?>
								<form method="post" action='../scripts/save_to_file.php'>
				                    <div class='data col-xs-12'>
				                        <input type='hidden' name='filename' value='../misc/events.html' />
				                        <textarea name="data" id='data-events' style='min-height : 100px;'>
				                            <?php echo $data; ?>
				                        </textarea>
				                    </div>
				                </form>
			                <?php } else { ?>
				                <div class='data col-xs-12'>
				                    <?php echo $data; ?>
				                </div>
							<?php } ?>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-md-5">
					<h2 class="text-center" style="position: absolute; top: 7.5%; text-align: center; width: 100%;">
						Sampark <br /><span class="small" style="font-size: 0.5em;"> (Click on a city to know more)</span>
					</h2>
			      	<div class="animation anim-sampark">
						<svg id="samparkMap" xmlns="http://www.w3.org/2000/svg"
			    			xmlns:xlink="http://www.w3.org/1999/xlink"
							width="600" height"600" viewBox="0 0 750 750">
							<path
							   style="fill:#00425a; fill:rgba(0, 66, 94, 0.5); stroke:#fff; stroke-width:2px;"
							   d="m 177.3758,728.77543 c -9.67335,-4.77198 -17.98796,-21.69219 -23.29892,-47.41325 -6.57801,-31.85742 -12.18015,-48.69872 -20.67618,-62.1573 -3.61968,-5.73395 -6.29073,-14.83443 -8.41089,-28.65656 -2.60966,-17.01341 -4.08933,-21.60751 -11.49386,-35.68614 C 102.602,534.1489 101.50708,529.21566 95.439094,473.50576 l -3.742138,-34.35641 1.864839,-13.64359 c 1.953002,-14.2886 2.589574,-41.56631 1.130845,-48.45779 -0.469633,-2.21869 -1.298387,-3.65054 -1.981197,-3.42294 -0.64561,0.21521 -2.703231,3.9566 -4.57249,8.31422 -4.893318,11.40729 -9.556214,17.99564 -15.002302,21.1972 -3.905466,2.29589 -5.761402,2.71946 -11.769014,2.68594 -6.164344,-0.0344 -8.148549,-0.54201 -14.619613,-3.74018 -17.712218,-8.75385 -33.247341,-34.30898 -24.752094,-40.71696 1.356113,-1.02292 6.660679,-3.09868 11.787923,-4.6128 14.112861,-4.16766 13.742539,-5.43342 -2.602432,-8.89512 C 12.773844,343.95878 9,341.15619 9,331.38461 c 0,-7.78654 3.137088,-13.64045 8.960023,-16.71969 5.367014,-2.83815 15.630301,-3.09842 28.179509,-0.71462 16.627423,3.15849 22.10579,-0.9973 16.882061,-12.8064 -1.088124,-2.45989 -3.333347,-10.17565 -4.989384,-17.14615 -3.980485,-16.75442 -5.487294,-19.58084 -12.010574,-22.529 -3.72746,-1.6846 -5.606138,-3.26443 -6.760453,-5.68505 -2.548586,-5.34445 -0.616879,-9.67237 9.258137,-20.74254 11.550377,-12.9483 14.573259,-13.88005 22.807753,-7.03012 3.980594,3.31129 6.929852,3.79759 11.081964,1.82728 5.58272,-2.64917 10.472293,-8.02975 20.022464,-22.03309 9.86815,-14.46957 26.13006,-35.44984 35.43237,-45.71298 3.37487,-3.72346 6.13675,-6.87346 6.1375,-7 0.0126,-2.11578 3.15433,-17.15249 3.8589,-18.46898 0.53077,-0.99175 3.14184,-2.58642 5.80238,-3.54371 2.66054,-0.9573 6.18735,-2.86656 7.83735,-4.24281 l 3,-2.50228 -7.38136,-6.87383 c -4.05975,-3.78061 -9.86254,-8.38687 -12.89509,-10.23615 -12.48342,-7.6125 -16.22944,-13.338574 -16.21797,-24.790446 0.008,-8.110408 1.62219,-12.712821 5.92184,-16.885692 4.96245,-4.816137 8.06419,-10.000207 8.06884,-13.485829 0.009,-6.423727 -3.3667,-9.578754 -18.40108,-17.20034 -7.40822,-3.75555 -8.32298,-5.127461 -6.80257,-10.202143 3.59474,-11.998159 22.00363,-22.3312008 39.68575,-22.2758954 11.36478,0.035546 15.93297,2.9297902 39.27359,24.8823374 13.60433,12.795284 19.37467,17.095701 22.93919,17.095701 1.3146,0 7.43439,-2.086809 13.59952,-4.637354 9.6257,-3.982194 12.24423,-4.653269 18.53451,-4.75 7.27845,-0.111928 7.34774,-0.08803 10.86446,3.747565 l 3.53929,3.860211 -0.40127,9.174655 c -0.35023,8.007644 -0.85666,10.124216 -3.98143,16.639789 -1.96909,4.105824 -5.89003,10.07882 -8.71319,13.273325 C 247.56754,88.836371 247,89.978907 247,94.003788 c 0,2.696437 1.21239,7.553032 3,12.017362 3.71696,9.28267 3.78641,12.2819 0.36364,15.70467 -2.25227,2.25226 -3.49533,2.63636 -8.53212,2.63636 -3.24267,0 -7.41347,-0.63414 -9.26845,-1.4092 l -3.3727,-1.40921 2.37769,5.37639 c 2.92568,6.61548 4.5604,16.22566 3.75704,22.08683 -0.56899,4.15125 -0.37878,4.61379 3.35979,8.17022 2.82508,2.68743 7.96146,5.43576 17.88903,9.5719 16.61114,6.92074 20.42608,9.48201 20.42608,13.71362 0,4.00125 -2.03432,7.71454 -9.09214,16.59605 -6.13726,7.7231 -7.52749,10.77575 -6.45145,14.16605 0.77581,2.44436 16.93537,13.55007 32.54359,22.36571 19.99291,11.29213 29.12392,14.73194 40.67154,15.32166 9.79261,0.5001 13.42749,1.84163 33.64453,12.41723 18.30515,9.57548 24.99943,11.53996 36.18393,10.61841 18.11021,-1.49221 18.75796,-2.17257 18.56097,-19.49534 -0.1804,-15.86452 0.91966,-19.09032 6.51016,-19.09032 2.37387,0 4.2947,0.77492 5.90002,2.38024 2.96265,2.96265 5.52885,11.35385 5.52885,18.07875 0,2.95497 0.6426,6.01343 1.52948,7.27964 1.75684,2.50823 7.1159,4.24772 13.11138,4.25579 4.72976,0.006 42.50825,-4.73067 44.82853,-5.62105 2.26644,-0.86971 1.90562,-2.5083 -1.96939,-8.94339 -5.39583,-8.96066 -4.34659,-13.3932 3.18426,-13.45194 7.44173,-0.058 16.13299,-6.75302 32.42592,-24.97804 6.14617,-6.875 12.97843,-13.7375 15.18281,-15.25 3.69316,-2.534 4.76736,-2.75 13.67599,-2.75 16.1921,0 26.03102,4.39742 26.03102,11.63435 0,4.54106 3.10786,7.58511 10.0616,9.85503 7.15846,2.33674 7.9384,3.07144 7.9384,7.47803 0,6.03924 -6.3831,14.85615 -15.17924,20.96693 -4.02642,2.79719 -8.69196,6.15261 -10.36787,7.45648 -5.89745,4.58825 -11.28726,17.74513 -18.43874,45.01022 -4.10769,15.6606 -9.61428,29.87441 -12.6957,32.7706 -1.85831,1.7466 -4.01697,2.45329 -8.63955,2.82836 l -6.16228,0.5 -0.67483,4.74592 c -0.37115,2.61025 -1.89439,8.40794 -3.38497,12.88375 -2.4236,7.27739 -2.63861,9.01953 -2.03356,16.47653 0.75532,9.30888 -0.0428,11.91844 -4.11904,13.46824 -1.94868,0.74088 -3.17159,0.58726 -5.03274,-0.63221 -4.40405,-2.88565 -6.60464,-10.27074 -9.90966,-33.25644 -0.28315,-1.96923 -0.96054,-3.15465 -1.66918,-2.92103 -1.67698,0.55285 -3.6604,4.75607 -3.6779,7.79411 -0.0245,4.25582 -2.3201,6.39568 -6.86114,6.39568 -7.38781,0 -11.36819,-6.23019 -9.17768,-14.36514 0.81696,-3.03393 3.11209,-6.06775 8.96478,-11.8501 7.10773,-7.0223 7.93806,-8.24805 8.60641,-12.70488 0.53521,-3.56904 0.34469,-5.63794 -0.68914,-7.48358 l -1.42884,-2.55085 -18.96457,-0.60767 c -11.18409,-0.35837 -20.30039,-1.11732 -22.22059,-1.84993 -3.4345,-1.31035 -3.81603,-2.17837 -4.57565,-10.4101 -0.60834,-6.59247 -2.93807,-8.53804 -15.51781,-12.959 C 431.20509,278.83744 429,279.12593 429,284.88678 c 0,2.7355 1.02534,4.58644 4.92783,8.89571 8.7594,9.67243 8.75729,10.80376 -0.0301,16.1418 -8.9346,5.42748 -8.93245,7.15885 0.0192,15.56054 l 7.22059,6.77695 -0.63956,4.3002 c -0.52576,3.53504 -0.0996,5.45678 2.39481,10.8002 3.63253,7.78131 5.39383,17.89492 5.51654,31.67656 0.10354,11.62834 -1.40709,15.04789 -7.325,16.58138 -4.69384,1.21629 -13.81415,-0.89679 -16.81269,-3.89533 l -2.43463,-2.43463 -5.66559,2.59379 C 407.14691,396.01554 403,400.97334 403,407.63102 c 0,8.02133 -4.90032,19.49796 -11.28089,26.42007 -5.09837,5.53107 -11.35371,8.79466 -19.78211,10.32088 -3.54035,0.64109 -6.98473,1.61899 -7.65417,2.17312 -0.66945,0.55412 -2.76635,3.77715 -4.65979,7.16229 -1.89344,3.38514 -4.86802,7.9548 -6.61018,10.1548 -6.63641,8.38043 -28.65365,30.92622 -35.4333,36.28391 C 303.9487,510.91801 303,512.08172 303,518.02994 c 0,6.47113 -0.57359,6.851 -12.59593,8.34191 -11.3012,1.40147 -14.33712,3.132 -16.71099,9.52554 -1.00855,2.71633 -1.96571,5.07075 -2.12702,5.23206 -0.16131,0.16131 -3.37969,1.06717 -7.15195,2.01301 -5.78323,1.45007 -7.21581,2.25251 -9.13639,5.1176 C 253.27921,551.24142 253,552.9055 253,561.83517 c 0,6.09867 0.8482,14.75579 2.11652,21.60212 1.16408,6.28369 2.17658,15.26765 2.25,19.96436 l 0.13348,8.53948 -7,13.94087 -7,13.94086 0,11.51966 c 0,13.49527 0.0555,13.37654 -10.86001,23.24239 -6.45953,5.83839 -7.7156,7.54486 -9.54854,12.97249 -4.79275,14.1921 -21.08097,36.20798 -30.24816,40.88473 -4.5149,2.30333 -11.18276,2.44701 -15.46749,0.3333 z"
							   id="indianMap"/>
							<g class="cities">
								<!-- <a xlink:href="../pages/event.php?category=Sampark&event=Mumbai" class="">
									<circle cx="100" cy="400" r="4"/>
			        				<text x="110" y="400" font-size="20">MUMBAI</text>
			    				</a>
			    				 <a xlink:href="../pages/event.php?category=Sampark&event=Chennai" class="">
									<circle cx="250" cy="625" r="4"/>
			        				<text x="260" y="625" font-size="20">CHENNAI</text>
			    				</a>
			    				--><a xlink:href="../pages/event.php?category=Sampark&event=Pune" class="">
									<circle cx="100" cy="430" r="4"/>
			        				<text x="110" y="430" font-size="20">PUNE</text>
			    				</a>
			    				<a xlink:href="../pages/event.php?category=Sampark&event=Bangalore" class="">
									<circle cx="180" cy="630" r="4"/>
			        				<text x="60" y="625" font-size="20">BANGALORE</text>
			    				</a>

<!-- 			    				<a xlink:href="../pages/event.php?category=Sampark&event=Vishakapatnam" class="">
									<circle cx="300" cy="510" r="4"/>
			        				<text x="310" y="510" font-size="20">VISHAKAPATNAM</text>
			    				</a>
 -->			    				<a xlink:href="../pages/event.php?category=Sampark&event=Hyderabad" class="">
									<circle cx="200" cy="550" r="4"/>
			        				<text x="210" y="550" font-size="20">HYDERABAD</text>
			    				</a>
			    				<a xlink:href="../pages/event.php?category=Sampark&event=Coimbatore" class="">
									<circle cx="200" cy="660" r="4"/>
			        				<text x="210" y="660" font-size="20">COIMBATORE</text>
			    				</a>
			    				<a xlink:href="../pages/event.php?category=Sampark&event=Kochi" class="">
									<circle cx="165" cy="680" r="4"/>
			        				<text x="100" y="680" font-size="20">KOCHI</text>
			    				</a>
			    			</g>
						</svg>
					</div>
					<div class="para2">
						<?php 
							$data = file_get_contents('../misc/pre-shaastra/pre-shaastra2.html');
							if ( isset($_GET['edit']) ) { ?>
							<form method="post" action='../scripts/save_to_file.php'>
			                    <div class='data2 col-xs-12'>
			                        <input type='hidden' name='filename' value='../misc/pre-shaastra/pre-shaastra2.html' />
			                        <textarea name="data" id='data2' style='min-height : 100px;'>
			                            <?php echo $data; ?>
			                        </textarea>
			                    </div>
			                </form>
		                <?php } else { ?>
			                <div class='data col-xs-12'>
			                    <?php echo $data; ?>
			                </div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php include '../base/foot.php' ?>

		<?php if ( isset($_GET['edit']) ) { // The fns to send data ?>
	    <script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>

	    <script>
	        $(document).ready(function() {
	            CKEDITOR.inline('data-lectures')
	            CKEDITOR.inline('data-workshops')
	            CKEDITOR.inline('data-events')
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

		
		<script type="text/javascript">
			var animation_time = 3000;
			function sampark(i){
				setTimeout(function(){
					$("svg#samparkMap .cities a:nth-child("+i+")").animate({fillOpacity:"1"},animation_time*0.05);
					$("svg#samparkMap .cities a:nth-child("+i+")").animate({opacity:"1"},animation_time*0.05);
				},animation_time*0.05*i + 1100);
			}
			
			$(document).ready(function() {
				var $el = $(this);
				
				animation_time = 3500;
				setTimeout(function(){
					$(".animation.anim-sampark").fadeIn(animation_time*0.1);
				}, animation_time*0.05);
				
				//----------------mapBorder animation
				var ifFirefox = /firefox/.test(navigator.userAgent.toLowerCase());
				// console.log(ifFirefox+" "+pathLength);
				var x = document.getElementById("indianMap");
				x.style.fillOpacity = 0;
				var pathLength = x.getTotalLength();
				if(ifFirefox){
					pathLength = pathLength + 14;
				}
				x.style.strokeDashoffset = pathLength;
				duration = 1;
				delay = 0.1;
				x.style.strokeDasharray = pathLength+" "+pathLength;
				x.style.WebkitAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
				x.style.mozAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
				x.style.oAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
				x.style.animation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";				

				//----------------location animation
				var n = 8; //no. of sampark locations
				for(var i=1; i<=n; i++){
					sampark(i);
				}
			});			
		</script>
	</body>
</html>

