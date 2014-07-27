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
                    <h1 class="text-center title">RAIF</h1>
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
							<?php for ($i=1; $i<30; $i++) { ?>
                                <div class="<?php if ($i == 1) echo 'active'; ?> item">
                                    <img style='height : 80%; width : auto;' src="../img/raif_gallery/raif%20(<?php echo $i; ?>).jpg">
                                </div>
                            <?php } ?>
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
		<script type="text/javascript">
			$("#lecture-menu").addClass("current_page");
		</script>
	</body>
</html>
