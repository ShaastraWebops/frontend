<!DOCtype html>
<html>
	<head>
		<title>Shaastra '15</title>

		<?php include '../base/head.php'; ?>
		<style>
			body {
				-webkit-touch-callout: none;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			#fallback {
				z-index: 1;
				position: absolute;
				height: 30%;
				width: 30%;
				top: 30%;
				left: 35%;
			}
			#fallback .row {
				position: relative;
				height: 100%
			}
			#fallback .row > div{
				height: 100%
			}
			#fallback .img > img {
				width: 100%;
			}
			
			#canvas {
				z-index: 2;
				height: 100%;
				width: 100%;
				position: absolute;
			}
			canvas {
				height: 100%;
				width: 100%;
			}
			.shaastra-logo {
				font-size: 2em;
				text-shadow : 2px 2px #000;
			}
			.shaastra-blue {
				color : #00445e;
			}
			#canvas .logo {
				position: absolute;
				top: 25%;
				left: 30%;
				width: 40%;
				height: 50%;
				display: none;
			}
			@media (min-width: 768px) {
				#canvas .logo {
					display: block;
				}
			}
			#canvas .logo > div,
			#canvas .logo > div > div,
			#canvas .logo > div > div > div,
			#canvas .logo > div > div > div {
				height: 100%;
			}
			#canvas .logo .up {
				position: absolute;
				top: 0;
				margin: auto;
				width: 100%;
			}
			#canvas .logo .down {
				position: absolute;
				bottom: 0;
				margin: auto;
				width: 100%;
			}
			
			
			#canvas .logo .small {
				text-decoration: none;
				font-size: 0.7em;
				letter-spacing: 0.3em;
				font-weight: 200;
				text-shadow : 0px 2px #000;
				/*-webkit-text-stroke-width: 0.1px;
				-moz-text-stroke-width: 0.1px;
				text-stroke-width: 0.1px;
				-webkit-text-stroke-color: white;
				-moz-text-stroke-color: white;
				text-stroke-color: white;*/
			}
			#canvas .logo .up .small {
				text-decoration: none;
				text-transform: lowercase;
				letter-spacing: 0.3em;
				font-weight: 200;
			}
			#canvas .logo .text {
				text-decoration: none;
				color: #fff;
				text-transform: uppercase;
			}
			#canvas .logo .line {
				text-decoration: none;
				background-color : #00445e;
				height: 2px;
				border-radius : 1px;
				width: 50%;
				margin: auto;
			}
			#canvas .logo .down .small {
				text-transform: uppercase;
				
			}
			
			#page {
				z-index: 3;
				position: absolute;
				height: 100%;
				width: 100%;
			}
			#page .help {
				position: absolute;
				bottom: 3%;
				margin: auto;
				left: 50%;
			}
			#page .help .text {
				position: relative;
				left: -50%;
			}
			#page .ngon-row {
				height: 25%;
			}
			#page .ngon-row > div{
				height: 100%;
			}
			#page .ngon-row .text {
				text-decoration: none;
				color: #fff;
				text-transform: uppercase;
				font-size : 1.5em;
				cursor: pointer;
				-webkit-transition: all 300ms ease-in-out;
				-moz-transition: all 300ms ease-in-out;
				-o-transition: all 300ms ease-in-out;
				transition: all 300ms ease-in-out;
			}
			#page .ngon-row .text:hover {
				letter-spacing: 0.2em;
				font-size: 2em;
				font-weight: 900;
			}
		</style>
	</head>
	
	<body>
        <?php include '../base/menu.php'; ?>
        
	<div id="fallback" class="container-fluid text-center" >
		<div class="row">	
			<div class="col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<div class="img">
							<img src="../../img/logo/400x210.png" />
						</div>
					</span>
				</span>
				
			</div>
		</div>	
	</div>
	<div id="canvas">
		<div class="logo container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<span class="vertical-table">
						<span class="vertical-tabl-cell text-center">
							<div class="up">
								<div class="small shaastra-logo">iit madras <span class="">presents</span></div>
							</div>
							<div class="down">
								<div class="text shaastra-title shaastra-logo">SHAASTRA <span class="shaastra-blue">2015</span></div>
								<div class="line"></div>
								<div class="small shaastra-logo">The spirit of <span class="">Engineering</span></div>
							</div>
						</span>
					</span>
				
				</div>
			</div>
		</div>
	</div>
	<div id="page" class="container-fluid white text-center">
		<div class="row ngon-row">
			<div class="col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/categories.php" class="text">Events</a>
					</span>
				</span>
			</div>
		</div>
		<div class="row ngon-row">
			<div class="col-xs-6">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						
						<a href="../pages/spons.php" class="text">Sponsors</a>
					</span>
				</span>
			</div>
			<div class="col-xs-6">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/shows.php" class="text">Shows</a>
					</span>
				</span>
			</div>
		</div>
		<div class="row ngon-row">
			<div class="col-xs-6">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/lectures.php" class="text">Lectures</a>
					</span>
				</span>
			</div>
			<div class="col-xs-6">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/contact.php" class="text">Contacts</a>
					</span>
				</span>
			</div>
		</div>
		<div class="row ngon-row">
			<div class="col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/about.php" class="text">About Us</a>
					</span>
				</span>
			</div>
		</div>
		<div class="help">
			<div class="text">Click and drag anywhere to roll dice</div>
		</div>
	</div>
    
    <?php include '../base/foot.php'; ?>
	<script>        
		// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> MAIN
		$(document).ready(function() {
			
			var asa; var canvas; var dcanvas; var gl; var expmt;
 
			var canvas = $('<canvas></canvas>');
			console.log(canvas);
			 
			dcanvas = canvas[0];
			expmt = false;
			if ("WebGLRenderingContext" in window) {
				console.log("browser knows what webgl is.");
			}
			// some browsers don't have a .getContext for canvas...
			try { gl = dcanvas.getContext("webgl"); }
			catch (x) { gl = null; }
			if (gl == null) {
				try { gl = dcanvas.getContext("experimental-webgl"); }
				catch (x) { gl = null; }
				if (gl == null) { 
					console.log('but can\'t speak it'); 
				} else { 
					expmt = true; 
					//console.log('and speaks it experimentally.'); 
				}
			} else {
				//console.log('and speaks it natively.');
			}
			 
			if (!gl || expmt) {
				console.log("loading webgl content.");
				$('.help .text').text("Click and drag anywhere to play with the dice.");
				jsCache.load( 
			        <?php if ($DEBUG ) { ?>
			            {url: '../../js/three.min.js'},
			            {url: '../../js/cannon.min.js'}
			        <?php } else { ?>
			            {url: '//cdnjs.cloudflare.com/ajax/libs/three.js/r68/three.min.js'},
			            {url: '//cdnjs.cloudflare.com/ajax/libs/cannon.js/0.5.0/cannon.min.js'}
			        <?php } ?>
			    ).then(function() {
			    	jsCache.load({url: "../../js/home.js"})
			    		.then(function() {
			    			init3d()		
			    		})
			    })
			} else {
				console.log("image-only fallback. no webgl.");
				$('.help .text').text("Your browser does not support webgl. If you can, try visiting us later with webgl support.");
			}
		});
		function init3d() {
			var canvas = $('#canvas')[0];
			var box = new dice.dice_box(canvas);
			box.bind_mouse(document.body, function() {}, // before
			       function(outp) { // after
				//console.log(outp);
			});
		}
        </script>
	</body>
</html>
