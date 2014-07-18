<html>
	<head>
		<title>Gallery | SHAASTRA '15</title>
		
		<?php include 'head.php' ?>
		<link rel="stylesheet" type="text/css" href="../css/component_carousel.css">
        <style type="text/css">
			.container.title, .container-fluid.title {
				margin-bottom: 2%;
			}
			.subtitle{
				color: white;
	    		/*font-family: 'Titillium Web', sans-serif;*/
	    		font-size: 2.5em;
			}			
			.text {
				color: white;
	    		/*font-family: 'Titillium Web', sans-serif;*/
	    		font-size: 1.15em;
	    		text-align: justify;
			}
			.profile{
				height: 34%;
			}
		</style>
		
	</head>
	<body>
		<?php include 'menu.php' ?>
		<div class="container-fluid white centered">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center title">Shaastra Junior Quiz</h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>
        

		<div class="container-fluid title white centered">
            <div class="row">
                <div class="col-xs-12">
			        <div id="myCarousel" class="carousel slide">
						<!-- Carousel items -->
						<div class="carousel-inner" align="center">
							<div class="active item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(1).jpg">
                            </div>
                        	<div class="item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(2).jpg">
                            </div>
                        	<div class="item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(3).jpg">
                            </div>
                        	<div class="item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(4).jpg">
                            </div>
                        	<div class="active item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(5).jpg">
                            </div>
                        	<div class="item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(6).jpg">
                            </div>
                        	<div class="item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(7).jpg">
                            </div>
                        	<div class="item">
                                <img style='width:80%; height : auto;' src="../img/sjq/sjq%20(8).jpg">
                            </div>
                        </div>
                        
                        <!-- Carousel nav -->
						<nav class="nav-circlepop">
							<a class="prev" href="#myCarousel" data-slide="prev">
								<span class="icon-wrap"></span>
							</a>
							<a class="next" href="#myCarousel" data-slide="next">
								<span class="icon-wrap"></span>
							</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<?php include 'foot.php' ?>
	</body>
</html>
