<?php session_start(); ?>
<html>
	<head>
		<title>Shaastra '15</title>

		<?php include '../base/head.php'; ?>
		<style>
			body * {
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
			#main-logo {
				position: absolute;
				top: 25%;
				left: 30%;
				width: 40%;
				height: 50%;
				display: none;
			}
			@media (min-width: 768px) {
				#main-logo {
					display: block;
					z-index: 5;
				}
			}
			#main-logo .logo-wrapper > div {
				-webkit-transition: all 300ms ease-in-out;
				-moz-transition: all 300ms ease-in-out;
				-o-transition: all 300ms ease-in-out;
				transition: all 300ms ease-in-out;
			}
			#main-logo > div,
			#main-logo > div > div,
			#main-logo > div > div > div,
			#main-logo > div > div > div {
				height: 100%;
			}
			#main-logo .up {
				margin: auto;
				margin-bottom: 40%;
				width: 100%;
			}
			#main-logo .down {
				margin: auto;
				margin-top: 40%;
				width: 100%;
			}


			#main-logo .small {
				text-decoration: none;
				font-size: 0.7em;
				letter-spacing: 0.3em;
				font-weight: 200;
				text-shadow : 0px 2px #000;
			}
			#main-logo .up .small {
				text-decoration: none;
				text-transform: lowercase;
				letter-spacing: 0.3em;
				font-weight: 200;
			}
			#main-logo .text {
				text-decoration: none;
				color: #fff;
				text-transform: uppercase;
			}
			#main-logo .line {
				text-decoration: none;
				background-color : #00445e;
				height: 2px;
				border-radius : 1px;
				width: 50%;
				margin: auto;
			}
			#main-logo .down .small {
				text-transform: uppercase;

			}
			#main-logo a {
				-webkit-transition: all 300ms;
				-moz-transition: all 300ms;
				-o-transition: all 300ms;
				transition: all 300ms;
			}
			#main-logo a.about:hover {
				text-shadow: 0px 0px 2px #fff;
			}
			#main-logo a.iit:hover {
				text-shadow: 0px 0px 1px #fff;
			}
			#page {
				z-index: 3;
				position: absolute;
				height: 100%;
				width: 100%;
			}
			#page .help {
				position: absolute;
				bottom: 5%;
				margin: auto;
				color: #999;
				left: 50%;
				font-size: 1.5em;
			}
			#page .help .text {
				position: relative;
				left: -50%;
				width: 100%;
			}
			#page .ngon-row {
				height: auto;
			}
			#page .ngon-row > div{
				height: 100%;
			}
			#page .ngon-row .text {
				text-decoration: none;
				color: #fff;
				text-transform: uppercase;
				font-size : 1.5em;
				font-weight: 600;
				letter-spacing: 0.2em;
				cursor: pointer;
				-webkit-transition: all 300ms ease-in-out;
				-moz-transition: all 300ms ease-in-out;
				-o-transition: all 300ms ease-in-out;
				transition: all 300ms ease-in-out;
			}
			.logo-vertical {
			    display: none;
			}
			.logo-vertical .col-centered {
			    padding: 5;
			}
			@media (min-width: 768px) {
			    .logo-vertical {
			        position: fixed;
			        bottom: 10px;
			        right: 50px;
			        z-index: 10000;
			        display: inline-block;
			        width: 220px;
			    }
				#page .ngon-row {
					height: 25%;
				}

				#page .ngon-row .text:hover {
					letter-spacing: 0.2em;
					font-size: 2em;
					font-weight: 900;
				}

				#page .ngon-row .text.text1 {
					text-shadow: 0px 4px 6px #0a0a0a;
				}
				#page .ngon-row .text.text2 {
					text-shadow: -4px 3px 1.2px #000;
				}
				#page .ngon-row .text.text3 {
					text-shadow: -4px 2px 1px #000;
				}
				#page .ngon-row .text.text4 {
					text-shadow: 4px 3px 1px #000;
				}
				#page .ngon-row .text.text5 {
					text-shadow: 4px 2px 1px #000;
				}
				#page .ngon-row .text.text6 {
					text-shadow: 0px 4px 1px #000;
				}
				body {
					background: -moz-radial-gradient(50% 30%, circle, #3A3A3A, #101010, #0A0A0A);
					background: radial-gradient(50% 30%, circle, #3A3A3A, #101010, #0A0A0A);
					background: -webkit-radial-gradient(50% 30%, circle, #3A3A3A, #101010, #0A0A0A);
				}
			}
	        .animation.anim-sampark>svg#samparkMap{
    		    -webkit-transform: scale(0.8);
	            -moz-transform: scale(0.8);
                transform: scale(0.8);
    		}
    		@-webkit-keyframes mapBorder{
          0%{
            stroke-opacity:1;
            fill-opacity: 0;
          }
          80%{
            stroke-dashoffset: 0;
          }
          100% {
            stroke-dashoffset: 0;
            stroke-opacity:1;
            fill-opacity:1;
          }
        }
        @-moz-keyframes mapBorder{
          0%{
            stroke-opacity:1;
            fill-opacity: 0;
          }
          80%{
            stroke-dashoffset: 0;
          }
          100% {
            stroke-dashoffset: 0;
            stroke-opacity:1;
            fill-opacity:1;
          }
        }
        

        </style>
	</head>

	<body>
        <?php include '../base/menu.php'; ?>

	<div id="fallback" class="container-fluid hidden hidden-xs text-center" >
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
	<div id="canvas" class="hidden-xs">
		
	</div>
	<div id="page" class="container-fluid white text-center">
		<div id="main-logo" class="logo container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<span class="vertical-table">
						<span class="vertical-table-cell text-center logo-wrapper">
							<div class="up">
								<div class="small shaastra-logo"><a class="no-style iit" href="http://www.iitm.ac.in/">iit madras</a> <span class="">presents</span></div>
							</div>
							<div class="down">
								<div class="text shaastra-title shaastra-logo">
									<!--<a href="../pages/about.php" class="no-style about">-->SHAASTRA <span class="shaastra-blue">2015</span><!--</a>-->
								</div>
								<div class="line"></div>
								<div class="small shaastra-logo">The spirit of <span class="">Engineering</span></div>
							</div>
						</span>
					</span>

				</div>
			</div>
		</div>

		<div class="row ngon-row hidden-lg hidden-sm hidden-md" style="">
			<div class="col-sm-12 col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<div class="text shaastra-title shaastra-logo">SHAASTRA <span class="shaastra-blue">2015</span></div>
					</span>
				</span>
			</div>
		</div>
		<div class="row ngon-row">
			<div class="col-sm-12 col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/categories.php" class="title head1 text">Events</a>
					</span>
				</span>
			</div>
		</div>
		<div class="row ngon-row">
			<div class="col-sm-6 col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/eventlist.php?category=Workshops" class="title head2 text">Workshops</a>
					</span>
				</span>
			</div>
			<div class="col-sm-6 col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/shows.php" class="title head3 text">Exhibitions</a>
					</span>
				</span>
			</div>
		</div>
		<div class="row ngon-row">
			<div class="col-sm-6 col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/lectures.php" class="title head4 text">Lectures</a>
					</span>
				</span>
			</div>
			<div class="col-sm-6 col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/pre-shaastra.php" class="title head5 text">Pre-Shaastra <br /> Events</a>
					</span>
				</span>
			</div>
		</div>
		<div class="row ngon-row">
			<div class="col-sm-12 col-xs-12">
				<span class="vertical-table">
					<span class="vertical-table-cell">
						<a href="../pages/social.php" class="title head6 text">Social Cause</a>
					</span>
				</span>
			</div>
		</div>
		<div class="help hidden-xs">
			<div class="text">Click and drag anywhere to roll dice</div>
		</div>
	</div>
        
    <?php include '../base/foot.php'; ?>
    <?php include '../modules/social.php'; ?>
    <div class="row logo-vertical row-centered">
	    <div class="col-xs-6 col-centered" >
	        <a class="tuv-logo" href="">
	            <img src="../../img/logo/iso_white.png" />
	        </a>
	    </div>
	    <div class="col-xs-6 col-centered">
	        <a class="iitm-logo" href="">
	            <img src="../../img/logo/iitm_white.png" />
	        </a>
	    </div>
	</div>
	<script>
		$(document).ready(function() {
		
			function blink(selector, blink_speed, iterations, counter){
				counter = counter | 0;
				$(selector).animate({opacity:0},200, "linear", function(){
					$(this).delay(blink_speed);
					$(this).animate({opacity:1}, 200, function(){
						counter++;

						if (iterations == 0) {//for infi iterations fix the value as 0
							blink(this, blink_speed, iterations, counter);
						}else if (counter >= iterations) {
							return false;
						}else{
							blink(this, blink_speed, iterations, counter);
						}
					});
					$(this).delay(blink_speed);
				})
			}

			var asa; var canvas; var dcanvas; var gl; var expmt;

			var canvas = $('<canvas></canvas>');

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
					console.log('and speaks it experimentally.');
				}
			} else {
				console.log('and speaks it natively.');
			}

			if ( (gl || expmt ) && $('body').width() > 768) { // 768 is taken from bootstrap's xs class
				// GL is there and not mobile
				console.log("loading webgl content.");
				$('.help .text').text("Click and drag anywhere to play with the dice.")
				setInterval(function() { 
					$('.help .text').fadeToggle(500)
				}, 700)

				jsCache.load(
			        <?php if ($DEBUG ) { ?>
			            {url: '../../js/three.min.js'},
			            {url: '../../js/cannon.min.js'}
			        <?php } else { ?>
			            {url: '//cdnjs.cloudflare.com/ajax/libs/three.js/r67/three.min.js'},
						//{url: '//cdnjs.cloudflare.com/ajax/libs/cannon.js/0.5.0/cannon.min.js'}
						{url: '../../js/cannon.min.js'} // The version I am using cannot be found on cdns
			        <?php } ?>
			    ).then(function() {
					function euler_to_quaternion(e1, e2, e3){
						var x = 0;
						var y = 0;
						var z = 0;
						var w = 0;
						q = new THREE.Quaternion();
						with (Math) {
							x = sqrt(cos(e2*PI/180)*cos(e1*PI/180)+cos(e2*PI/180)*cos(e3*PI/180)-sin(e2*PI/180)*sin(e1*PI/180)*sin(e3*PI/180)+cos(e1*PI/180)* cos(e3*PI/180)+1)/2;
							y = (cos(e1*PI/180)*sin(e3*PI/180)+cos(e2*PI/180)*sin(e3*PI/180)+sin(e2*PI/180)*sin(e1*PI/180)*cos(e3*PI/180))/sqrt(cos(e2*PI/180)* cos(e1*PI/180)+cos(e2*PI/180)*cos(e3*PI/180)-sin(e2*PI/180)*sin(e1*PI/180)*sin(e3*PI/180)+cos(e1*PI/180)*cos(e3*PI/180)+1)/2;
							z = (sin(e2*PI/180)*sin(e3*PI/180)-cos(e2*PI/180)*sin(e1*PI/180)*cos(e3*PI/180)-sin(e1*PI/180))/sqrt(cos(e2*PI/180)*cos(e1*PI/180)+ cos(e2*PI/180)*cos(e3*PI/180)-sin(e2*PI/180)*sin(e1*PI/180)*sin(e3*PI/180)+cos(e1*PI/180)*cos(e3*PI/180)+1)/2;
							w = (sin(e2*PI/180)*cos(e1*PI/180)+sin(e2*PI/180)*cos(e3*PI/180)+cos(e2*PI/180)*sin(e1*PI/180)*sin(e3*PI/180))/sqrt(cos(e2*PI/180)* cos(e1*PI/180)+cos(e2*PI/180)*cos(e3*PI/180)-sin(e2*PI/180)*sin(e1*PI/180)*sin(e3*PI/180)+cos(e1*PI/180)*cos(e3*PI/180)+1)/2;
						}
						q.set(x, y, z, w);
						return q
					}

					function make_shaastra_logo(_this, that) {
						// Create 2 dice ..
						that.dice_geometry = that.create_dice_geometry(that.scale * 0.9);
						that.dice_material = new THREE.MeshFaceMaterial(
							that.create_dice_materials(that.dice_face_labels, that.scale, that.scale/5));

						var d2r = Math.PI / 180 ; // deg to rad
						var dice = new THREE.Mesh(that.dice_geometry, that.dice_material);
						dice.castShadow = true;
						dice.body = new CANNON.RigidBody(that.dice_mass,
							dice.geometry.cannon_shape, _this.dice_body_material);
						dice.body.position.set(-_this.w/8, _this.w/20, 200);
						dice.body.quaternion.copy( euler_to_quaternion( 0, 0, 0 ) );
						dice.body.angularVelocity.set(-10, 4.5, 9);
						dice.body.velocity.set(0, 0, -10);
						dice.body.linearDamping = 0.1;
						dice.body.angularDamping = 0.1;
						_this.scene.add(dice);
						_this.dices.push(dice);
						_this.world.add(dice.body);

						that.dice_material = new THREE.MeshFaceMaterial(
							that.create_dice_materials(that.dice_face_labels2, that.scale, that.scale/5));

						dice = new THREE.Mesh(that.dice_geometry, that.dice_material);
						dice.castShadow = true;
						dice.body = new CANNON.RigidBody(that.dice_mass,
							dice.geometry.cannon_shape, _this.dice_body_material);
						dice.body.position.set(_this.w/8, _this.w/20, 200);
						dice.body.quaternion.copy( euler_to_quaternion( 0, 0, 0 ) );
						dice.body.angularVelocity.set(-10, 4.5, 9);
						dice.body.velocity.set(0, 0, -10);
						dice.body.linearDamping = 0.1;
						dice.body.angularDamping = 0.1;
						_this.scene.add(dice);
						_this.dices.push(dice);
						_this.world.add(dice.body);

						_this.world.step(0.1);
						for (var i in _this.scene.children) {
							var interact = _this.scene.children[i];
							if (interact.body != undefined) {
							interact.body.position.copy(interact.position);
							interact.body.quaternion.copy(interact.quaternion);
							}
						}
						_this.renderer.render(_this.scene, _this.camera);
						_this.running = false;
					}

					(function(dice) {

						function rnd() {
						return Math.random();
						}

						function create_shape(vertices, faces, radius) {
						var cv = [], cf = [];
						for (var i = 0; i < vertices.length; ++i) {
							var v = vertices[i];
							var l = radius / Math.sqrt(v[0] * v[0] + v[1] * v[1] + v[2] * v[2]);
							cv.push(new CANNON.Vec3(v[0] * l, v[1] * l, v[2] * l));
						}
						for (var i = 0; i < faces.length; ++i) {
							var f = faces[i];
							cf.push(faces[i].slice(0, faces[i].length - 1));
						}
						return new CANNON.ConvexPolyhedron(cv, cf);
						}

						function make_geom(vertices, faces, radius, tab, af) {
						var geom = new THREE.Geometry();
						for (var i = 0; i < vertices.length; ++i) {
							var vertex = (new THREE.Vector3).fromArray(vertices[i]).normalize().multiplyScalar(radius);
							vertex.index = geom.vertices.push(vertex) - 1;
						}
						for (var i = 0; i < faces.length; ++i) {
							var ii = faces[i], fl = ii.length - 1;
							var aa = Math.PI * 2 / fl;
							for (var j = 0; j < fl - 2; ++j) {
							geom.faces.push(new THREE.Face3(ii[0], ii[j + 1], ii[j + 2], [geom.vertices[ii[0]],
									geom.vertices[ii[j + 1]], geom.vertices[ii[j + 2]]], 0, ii[fl] + 1));
							geom.faceVertexUvs[0].push([
								new THREE.Vector2((Math.cos(af) + 1 + tab) / 2 / (1 + tab),
									(Math.sin(af) + 1 + tab) / 2 / (1 + tab)),
								new THREE.Vector2((Math.cos(aa * (j + 1) + af) + 1 + tab) / 2 / (1 + tab),
									(Math.sin(aa * (j + 1) + af) + 1 + tab) / 2 / (1 + tab)),
								new THREE.Vector2((Math.cos(aa * (j + 2) + af) + 1 + tab) / 2 / (1 + tab),
									(Math.sin(aa * (j + 2) + af) + 1 + tab) / 2 / (1 + tab))]);
							}
						}
						geom.computeFaceNormals();
						geom.computeVertexNormals();
						geom.boundingSphere = new THREE.Sphere(new THREE.Vector3(), radius);
						return geom;
						}

						function create_geom(vertices, faces, radius, tab, af) {
							var chamfer_vertices = [], chamfer_vectors = [], chamfer_faces = [];
							if ( that.chamfer < 1 ) {
								for (var i = 0; i < vertices.length; ++i) {
									chamfer_vectors.push((new THREE.Vector3).fromArray(vertices[i]).normalize());
								}
								for (var i = 0; i < faces.length; ++i) {
									var ii = faces[i], fl = ii.length - 1;
									var center_point = new THREE.Vector3();
									var face = [];
									for (var j = 0; j < fl; ++j) {
										var vv = (new THREE.Vector3).fromArray(vertices[ii[j]]).normalize();
										center_point.add(vv);
										face.push(chamfer_vectors.push(vv) - 1);
									}
									center_point.divideScalar(fl);
									for (var j = 0; j < fl; ++j) {
										var vv = chamfer_vectors[face[j]];
										vv.subVectors(vv, center_point);
										vv.multiplyScalar(that.chamfer);
										vv.addVectors(vv, center_point);
									}
									for (var j = 0; j < fl - 1; ++j) {
										chamfer_faces.push([ii[j], ii[j + 1], face[j + 1], face[j], -1]);
									}
									chamfer_faces.push([ii[fl - 1], ii[0], face[0], face[fl - 1], -1]);

									face.push(ii[fl]);
									chamfer_faces.push(face);
								}
								for (var i = 0; i < chamfer_vectors.length; ++i) {
									chamfer_vertices.push(chamfer_vectors[i].toArray());
								}
							} else {
								chamfer_vertices = vertices;
								chamfer_faces = faces;
							}
							var geom = make_geom(chamfer_vertices, chamfer_faces, radius, tab, af);
							geom.cannon_shape = create_shape(vertices, faces, radius);
							return geom;
						}

						//this.dice_face_labels = [' ', '0', '1', '2', '3', '4', '5', '6'];
						this.dice_face_labels = [' ', '0', '2_', '2_', '2_', '2_', '2_', '2'];
						this.dice_face_labels2 = [' ', '0', '2_', '2_', '2_', '2_', '2_', '2'];

						this.create_dice_materials = function(face_labels, size, margin) {
							var create_text_texture = function (text, color, back_color) {
								if (text == undefined) return null;
								var canvas = document.createElement("canvas");
								var context = canvas.getContext("2d");
								canvas.width = size + margin;
								canvas.height = size + margin;
								context.font = size + "pt Arial";
								context.fillStyle = back_color;
								context.fillRect(0, 0, canvas.width, canvas.height);
								context.fillStyle = color;
								if ( 0 ) { // show text
									context.textAlign = "center";
									context.textBaseline = "middle";
									context.fillText(text, canvas.width / 2, canvas.height / 2);
								} else {

									var rad = 18;
									context.beginPath();

									switch ( text ) {
										case '1' :
											context.arc(canvas.width*1/2, canvas.height*1/2, size * 2 / rad, 0, Math.PI*2, true);
											context.closePath();
											break;
										case '4' :
											context.arc(margin/2+size*1/3, margin/2+size*2/3, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*2/3, margin/2+size*1/3, size / rad, 0, Math.PI*2, true);
											context.closePath();
										case '2' :
											context.arc(margin/2+size*1/3, margin/2+size*1/3, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*2/3, margin/2+size*2/3, size / rad, 0, Math.PI*2, true);
											context.closePath();
											break
										case '2_' :
											context.arc(margin/2+size*2/3, margin/2+size*1/3, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*1/3, margin/2+size*2/3, size / rad, 0, Math.PI*2, true);
											context.closePath();
											break
										case '5' :
											context.arc(margin/2+size*1/4, margin/2+size*3/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*3/4, margin/2+size*1/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
										case '3' :
											context.arc(margin/2+size*1/4, margin/2+size*1/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*2/4, margin/2+size*2/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*3/4, margin/2+size*3/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											break;
										case '6' :
											context.arc(margin/2+size*1/4, margin/2+size*1.5/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*2/4, margin/2+size*1.5/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*3/4, margin/2+size*1.5/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*1/4, margin/2+size*2.5/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*2/4, margin/2+size*2.5/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											context.arc(margin/2+size*3/4, margin/2+size*2.5/4, size / rad, 0, Math.PI*2, true);
											context.closePath();
											break

									}
									context.fill();
								}
								var texture = new THREE.Texture(canvas);
								texture.needsUpdate = true;
								return texture;
							}
							var materials = [];
							for (var i = 0; i < face_labels.length; ++i) {
								var text_texture = create_text_texture(face_labels[i], this.label_color, this.dice_color);
								this.material_options.map = text_texture;
								materials.push(new THREE.MeshPhongMaterial( this.material_options ));
								//materials.push(new THREE.MeshBasicMaterial({ wireframe: true, color: 'blue' }))
							}
							return materials;
						}

						this.create_dice_geometry = function(radius) {
							var vertices = [[-1, -1, -1], [1, -1, -1], [1, 1, -1], [-1, 1, -1],
								[-1, -1, 1], [1, -1, 1], [1, 1, 1], [-1, 1, 1]

								];
							var faces = [[0, 3, 2, 1, 1], [1, 2, 6, 5, 2], [0, 1, 5, 4, 3],
								[3, 7, 6, 2, 4], [0, 4, 7, 3, 5], [4, 5, 6, 7, 6]

								];
							return create_geom(vertices, faces, radius, 0.1, Math.PI / 4);
						}

						this.scale = 50;
						this.chamfer = 1;
						this.material_options = {
							specular: '#171d1f',
							color: '#ffffff',
							emissive: '#000000',
							shininess: 30,
							shading: THREE.FlatShading,
						};
						this.label_color = '#aaaaaa';
						this.dice_color = '#00343e'; //'#00445e';
						this.dice_mass = 300;
						this.dice_inertia = 5;

						var that = this;

						this.dice_box = function(container) {
							this.w = container.clientWidth / 2;
							this.h = container.clientHeight / 2;
							that.scale = Math.sqrt(this.w * this.w + this.h * this.h) / 7;

							this.renderer = window.WebGLRenderingContext
								? new THREE.WebGLRenderer({ antialias: true })
								: new THREE.CanvasRenderer({ antialias: true });
							this.renderer.setSize(this.w * 2, this.h * 2);
							this.renderer.shadowMapEnabled = true;
							this.renderer.shadowMapSoft = true;

							this.dices = [];
							this.scene = new THREE.Scene();
							this.world = new CANNON.World();

							container.appendChild(this.renderer.domElement);

							this.world.gravity.set(0, 0, -9.8 * 800);
							this.world.broadphase = new CANNON.NaiveBroadphase();
							this.world.solver.iterations = 10;

							var wh = this.h / Math.tan(10 * Math.PI / 180);
							this.camera = new THREE.PerspectiveCamera(20, this.w / this.h, 1, wh * 1.3);
							this.camera.position.z = wh;

							var ambientLight = new THREE.AmbientLight(0xf0f0f0);
							this.scene.add(ambientLight);
							var mw = Math.max(this.w, this.h);
							var light = new THREE.SpotLight(0xffffff);
							console.log(this.w)
							console.log(this.h)
							light.position.set(0, this.h/2, mw);
							light.target.position.set(0, 0, 0);
							light.castShadow = true;
							light.shadowCameraNear = mw / 10;
							light.shadowCameraFar = mw * 3;
							light.shadowCameraFov = 50;
							light.shadowBias = 0.001;
							light.shadowDarkness = 0.3;
							light.shadowMapWidth = 1024;
							light.shadowMapHeight = 1024;
							this.scene.add(light);

							this.dice_body_material = new CANNON.Material();
							var desk_body_material = new CANNON.Material();
							var barrier_body_material = new CANNON.Material();
							this.world.addContactMaterial(new CANNON.ContactMaterial(
									desk_body_material, this.dice_body_material, 0.01, 0.5));
							this.world.addContactMaterial(new CANNON.ContactMaterial(
									barrier_body_material, this.dice_body_material, 0, 1.0));
							this.world.addContactMaterial(new CANNON.ContactMaterial(
									this.dice_body_material, this.dice_body_material, 0, 0.5));

							this.desk = new THREE.Mesh(new THREE.PlaneGeometry(this.w * 2, this.h * 2, 1, 1),
								new THREE.MeshLambertMaterial({ color: 0xffffff }));
							this.desk.receiveShadow = true;
							this.scene.add(this.desk);

							this.world.add(new CANNON.RigidBody(0, new CANNON.Plane(), desk_body_material));
							var barrier;
							barrier = new CANNON.RigidBody(0, new CANNON.Plane(), barrier_body_material);
							barrier.quaternion.setFromAxisAngle(new CANNON.Vec3(1, 0, 0), Math.PI / 2);
							barrier.position.set(0, this.h * 0.93, 0);
							this.world.add(barrier);

							barrier = new CANNON.RigidBody(0, new CANNON.Plane(), barrier_body_material);
							barrier.quaternion.setFromAxisAngle(new CANNON.Vec3(1, 0, 0), -Math.PI / 2);
							barrier.position.set(0, -this.h * 0.93, 0);
							this.world.add(barrier);

							barrier = new CANNON.RigidBody(0, new CANNON.Plane(), barrier_body_material);
							barrier.quaternion.setFromAxisAngle(new CANNON.Vec3(0, 1, 0), -Math.PI / 2);
							barrier.position.set(this.w * 0.93, 0, 0);
							this.world.add(barrier);

							barrier = new CANNON.RigidBody(0, new CANNON.Plane(), barrier_body_material);
							barrier.quaternion.setFromAxisAngle(new CANNON.Vec3(0, 1, 0), Math.PI / 2);
							barrier.position.set(-this.w * 0.93, 0, 0);
							this.world.add(barrier);

							this.last_time = 0;
							this.running = false;

							this.pane = new THREE.Mesh(new THREE.PlaneGeometry(this.w * 2, this.h * 2, 1, 1),
								new THREE.MeshPhongMaterial({ color: 0, ambient: 0x0b0b0b, emissive: 0 }));
							this.pane.receiveShadow = true;
							this.pane.position.set(0, 0, 1);
							this.scene.add(this.pane);

							var mouse_captured = false;

							this.running = (new Date()).getTime();
							this.last_time = 0;
							this.renderer.render(this.scene, this.camera);

							make_shaastra_logo(this, that);
						}

						this.dice_box.prototype.check = function() {
							var res = true;
							var e = 6;
							var time = (new Date()).getTime();
							if (time - this.running < 10000) {
								for (var i = 0; i < this.dices.length; ++i) {
									var dice = this.dices[i];
									if (dice.dice_stopped == true) continue;
									var a = dice.body.angularVelocity, v = dice.body.velocity;
									if (Math.abs(a.x) < e && Math.abs(a.y) < e && Math.abs(a.z) < e &&
										Math.abs(v.x) < e && Math.abs(v.y) < e && Math.abs(v.z) < e) {
										if (dice.dice_stopped) {
											if (time - dice.dice_stopped > 50) {
												dice.dice_stopped = true;
												continue;
											}
										}
										else dice.dice_stopped = (new Date()).getTime();
										res = false;
									}
									else {
										dice.dice_stopped = undefined;
										res = false;
									}
								}
							}
							if (res) {
								this.running = false;
								var values = [];
								for (var i in this.dices) {
								var dice = this.dices[i], invert = 1;
								var intersects = (new THREE.Raycaster(
										new THREE.Vector3(dice.position.x, dice.position.y, 200 * invert),
										new THREE.Vector3(0, 0, -1 * invert))).intersectObjects([dice]);
								var matindex = intersects[0].face.materialIndex - 1;
								values.push(matindex);
								}
								if (this.callback) this.callback.call(this, values);
							}
						}

						this.dice_box.prototype.__animate = function(threadid) {
							var time = (new Date()).getTime();
							var time_diff = (time - this.last_time) / 1000;
							if (time_diff > 3) time_diff = 1 / 60;
							while (time_diff > 1.1 / 60) {
								this.world.step(1 / 60);
								time_diff -= 1 / 60;
							}
							this.world.step(time_diff);
							for (var i in this.scene.children) {
								var interact = this.scene.children[i];
								if (interact.body != undefined) {
									interact.body.position.copy(interact.position);
									interact.body.quaternion.copy(interact.quaternion);
								}
							}
							this.renderer.render(this.scene, this.camera);
							this.last_time = this.last_time ? time : (new Date()).getTime();

							if (this.running == threadid) this.check();
							if (this.running == threadid) {
								(function(t, tid) {
									requestAnimationFrame(function() { t.__animate(tid); });
								})(this, threadid);
							} else {
							    console.log('STOPPED');
								// move them to the center
							}
						}

						this.dice_box.prototype.clear = function() {
							this.running = false;
							var dice;
							while (dice = this.dices.pop()) {
								this.scene.remove(dice);
								if (dice.body) { this.world.remove(dice.body) };
							}
							this.renderer.render(this.scene, this.camera);
						}

						function make_random_vector(vector) {
							var random_angle = rnd() * Math.PI / 5 - Math.PI / 5 / 2;
							var vec = {
								x: vector.x * Math.cos(random_angle) - vector.y * Math.sin(random_angle),
								y: vector.x * Math.sin(random_angle) + vector.y * Math.cos(random_angle)
							};
							if (vec.x == 0) vec.x = 0.01;
							if (vec.y == 0) vec.y = 0.01;
							return vec;
						}

						this.dice_box.prototype.roll = function(vector, boost, callback) {
							for (var i =0; i< 2; i++) {
								var vec = make_random_vector(vector);
								var velvec = make_random_vector(vector);
								var velocity = { x: velvec.x * boost, y: velvec.y * boost, z: -10 };
								var inertia = that.dice_inertia;
								var angle = {
									x: -(rnd() * vec.y * 5 + inertia * vec.y),
									y: rnd() * vec.x * 5 + inertia * vec.x,
									z: 0
								};
								this.dices[i].body.angularVelocity.set(angle.x, angle.y, angle.z);
								this.dices[i].body.velocity.set(velocity.x, velocity.y, velocity.z);
								this.dices[i].dice_stopped = false;
							}
							this.callback = callback;
							this.running = (new Date()).getTime();
							this.last_time = 0;
							this.__animate(this.running);
						}

						this.dice_box.prototype.bind_mouse = function(container) {
							var box = this;
							this.mouse_dragging = false;
							$(container).on('mousedown', function(ev) {
								console.log(ev.target)
								if ( ev.target.tagName == 'A' ||
									$(ev.target).parents('#menu-btn').length ||
									$('#menu-btn').hasClass('menu-open') ) {
									return;
								}
								box.mouse_time = (new Date()).getTime();
								box.mouse_start = { x: ev.clientX, y: ev.clientY };
							});
							$(container).on('mouseup', function(ev) {
								if ( ev.target.tagName == 'A' ||
									$(ev.target).parents('#menu-btn').length ||
									$('#menu-btn').hasClass('menu-open') ) {
									return;
								}
								var vector = { x: ev.clientX - box.mouse_start.x, y: -(ev.clientY - box.mouse_start.y) };
								var dist = Math.sqrt(vector.x * vector.x + vector.y * vector.y);
								if (dist < Math.sqrt(box.w * box.h * 0.01)) {
									vector = {x:0, y:0};
									var boost = 1000;
									for (var i =0; i< 2; i++) {
										var vec = make_random_vector(vector);
										var velvec = make_random_vector(vector);
										var velocity = { x: velvec.x * boost, y: velvec.y * boost, z: 30 };
										var inertia = that.dice_inertia;
										var angle = {
											x: -(rnd() * vec.y * 5 + inertia * vec.y),
											y: rnd() * vec.x * 5 + inertia * vec.x,
											z: rnd() * 3
										};
										box.dices[i].body.position.set(box.dices[i].body.position.x, box.dices[i].body.position.y, 200+box.dices[i].body.position.z);
										box.dices[i].body.angularVelocity.set(angle.x, angle.y, angle.z);
										box.dices[i].body.velocity.set(velocity.x, velocity.y, velocity.z);
										box.dices[i].dice_stopped = false;
									}
									box.rolling = true;
									box.running = (new Date()).getTime();
									box.last_time = 0;
									box.__animate(box.running);
								} else {
									var time_int = (new Date()).getTime() - box.mouse_time;
									if (time_int > 2000) time_int = 2000;
									vector.x /= dist; vector.y /= dist;
									var boost = Math.sqrt((2500 - time_int) / 2500) * dist * 2 * 5;
									box.rolling = true;
									box.roll(vector, boost, function(result) { box.rolling = false; });
								}
								setTimeout(function() {
									$('#main-logo .up').animate({'margin-bottom': '0%'}, 500)
									$('#main-logo .down').animate({'margin-top': '0%'}, 500)
								}, 500);
								$('.help .text').text("");
							});
						}

					}).apply(dice = {});

					init3d()
			    })
			} else {
				console.log("image-only fallback. no webgl.");
				$('.help .text')
					.text("Your browser does not support webgl. If you can, try visiting us later with webgl support.")
					.css('font-size', '0.8em');
				$('.help').css({'bottom':'0.4em'})
				$('#fallback.hidden').removeClass('hidden').show();
			}
		});
		function create3d() {
			if ( $('body').width() < 768) { // 768 is taken from bootstrap's xs class
				return
			}
			var canvas = $('#canvas')[0];
			var box = new dice.dice_box(canvas);
			box.bind_mouse(document.body, function() {}, // before
				function(outp) { // after
			});
			$('body').css( {
				'width' : '100%',
				'height' : '100%',
				'overflow' : 'hidden'
			})

		}
		function init3d() {
			create3d();
			window.addEventListener('resize', function() {
				$("canvas").remove()
				$('#main-logo .up').animate({'margin-bottom': '40%'}, 1000)
				$('#main-logo .down').animate({'margin-top': '40%'}, 1000)
				$('body').css( {
					'width' : '100%',
					'height' : '100%',
					'overflow' : 'hidden'
				})
				create3d();
		    });
		}
		var animation_time = 3000;
        $(document).ready(function() {
            $(".sampark").click(function(ev) {
                ev.preventDefault();
                var that = this;
                var $el = $(this);
                $('.animation.background').fadeIn(500);
                animation_time = 3500;
                $(".animation.anim-sampark").css("z-index", 10000);
                setTimeout(function(){
                    $(".animation.anim-sampark").fadeIn(animation_time*0.1);
                }, animation_time*0.05);
                //----------------mapBorder animation
                var x = document.getElementById("indianMap");
                x.style.fillOpacity = 0;
                var pathLength = x.getTotalLength();
                x.style.strokeDashoffset = pathLength;
                duration = 1;
                delay = 0.1;
                x.style.strokeDasharray = pathLength+" "+pathLength;
                x.style.WebkitAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                x.style.mozAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                // x.style.oAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                // x.style.animation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                //----------------location animation
                var n = 8; //no. of sampark locations
                for(var i=1;i<=n;i++){
                    sampark(i);
                }
                $(".coords path").css("fill-opacity","0");
                $(".cities g").css("opacity","0");
                function sampark(i){
                    setTimeout(function(){
                        console.log("hi"+i);
                        $(".coords path:nth-child("+i+")").animate({fillOpacity:"1"},animation_time*0.05);
                        $(".cities g:nth-child("+i+")").animate({opacity:"1"},animation_time*0.05);
                    },animation_time*0.05*i + 1100);
                }
                setTimeout(function() {
                    window.location = that.href;
                }, animation_time)

            });
        });
        </script>
        <div class="animation anim-sampark" style="position:fixed; z-index: -1; overflow: hidden; background-color:rgba(0,0,0,0.5);
            width: 100%; top:-5%; left:0%;display:none" align="center">
        <svg id="samparkMap"
            width="620"
            height="740"
            style="transform:scale(0.8);">
            <path
               style="fill:#00425a; fill:rgba(0, 66, 94, 0.5); stroke:#fff;stroke-width:2px;"
               d="m 177.3758,728.77543 c -9.67335,-4.77198 -17.98796,-21.69219 -23.29892,-47.41325 -6.57801,-31.85742 -12.18015,-48.69872 -20.67618,-62.1573 -3.61968,-5.73395 -6.29073,-14.83443 -8.41089,-28.65656 -2.60966,-17.01341 -4.08933,-21.60751 -11.49386,-35.68614 C 102.602,534.1489 101.50708,529.21566 95.439094,473.50576 l -3.742138,-34.35641 1.864839,-13.64359 c 1.953002,-14.2886 2.589574,-41.56631 1.130845,-48.45779 -0.469633,-2.21869 -1.298387,-3.65054 -1.981197,-3.42294 -0.64561,0.21521 -2.703231,3.9566 -4.57249,8.31422 -4.893318,11.40729 -9.556214,17.99564 -15.002302,21.1972 -3.905466,2.29589 -5.761402,2.71946 -11.769014,2.68594 -6.164344,-0.0344 -8.148549,-0.54201 -14.619613,-3.74018 -17.712218,-8.75385 -33.247341,-34.30898 -24.752094,-40.71696 1.356113,-1.02292 6.660679,-3.09868 11.787923,-4.6128 14.112861,-4.16766 13.742539,-5.43342 -2.602432,-8.89512 C 12.773844,343.95878 9,341.15619 9,331.38461 c 0,-7.78654 3.137088,-13.64045 8.960023,-16.71969 5.367014,-2.83815 15.630301,-3.09842 28.179509,-0.71462 16.627423,3.15849 22.10579,-0.9973 16.882061,-12.8064 -1.088124,-2.45989 -3.333347,-10.17565 -4.989384,-17.14615 -3.980485,-16.75442 -5.487294,-19.58084 -12.010574,-22.529 -3.72746,-1.6846 -5.606138,-3.26443 -6.760453,-5.68505 -2.548586,-5.34445 -0.616879,-9.67237 9.258137,-20.74254 11.550377,-12.9483 14.573259,-13.88005 22.807753,-7.03012 3.980594,3.31129 6.929852,3.79759 11.081964,1.82728 5.58272,-2.64917 10.472293,-8.02975 20.022464,-22.03309 9.86815,-14.46957 26.13006,-35.44984 35.43237,-45.71298 3.37487,-3.72346 6.13675,-6.87346 6.1375,-7 0.0126,-2.11578 3.15433,-17.15249 3.8589,-18.46898 0.53077,-0.99175 3.14184,-2.58642 5.80238,-3.54371 2.66054,-0.9573 6.18735,-2.86656 7.83735,-4.24281 l 3,-2.50228 -7.38136,-6.87383 c -4.05975,-3.78061 -9.86254,-8.38687 -12.89509,-10.23615 -12.48342,-7.6125 -16.22944,-13.338574 -16.21797,-24.790446 0.008,-8.110408 1.62219,-12.712821 5.92184,-16.885692 4.96245,-4.816137 8.06419,-10.000207 8.06884,-13.485829 0.009,-6.423727 -3.3667,-9.578754 -18.40108,-17.20034 -7.40822,-3.75555 -8.32298,-5.127461 -6.80257,-10.202143 3.59474,-11.998159 22.00363,-22.3312008 39.68575,-22.2758954 11.36478,0.035546 15.93297,2.9297902 39.27359,24.8823374 13.60433,12.795284 19.37467,17.095701 22.93919,17.095701 1.3146,0 7.43439,-2.086809 13.59952,-4.637354 9.6257,-3.982194 12.24423,-4.653269 18.53451,-4.75 7.27845,-0.111928 7.34774,-0.08803 10.86446,3.747565 l 3.53929,3.860211 -0.40127,9.174655 c -0.35023,8.007644 -0.85666,10.124216 -3.98143,16.639789 -1.96909,4.105824 -5.89003,10.07882 -8.71319,13.273325 C 247.56754,88.836371 247,89.978907 247,94.003788 c 0,2.696437 1.21239,7.553032 3,12.017362 3.71696,9.28267 3.78641,12.2819 0.36364,15.70467 -2.25227,2.25226 -3.49533,2.63636 -8.53212,2.63636 -3.24267,0 -7.41347,-0.63414 -9.26845,-1.4092 l -3.3727,-1.40921 2.37769,5.37639 c 2.92568,6.61548 4.5604,16.22566 3.75704,22.08683 -0.56899,4.15125 -0.37878,4.61379 3.35979,8.17022 2.82508,2.68743 7.96146,5.43576 17.88903,9.5719 16.61114,6.92074 20.42608,9.48201 20.42608,13.71362 0,4.00125 -2.03432,7.71454 -9.09214,16.59605 -6.13726,7.7231 -7.52749,10.77575 -6.45145,14.16605 0.77581,2.44436 16.93537,13.55007 32.54359,22.36571 19.99291,11.29213 29.12392,14.73194 40.67154,15.32166 9.79261,0.5001 13.42749,1.84163 33.64453,12.41723 18.30515,9.57548 24.99943,11.53996 36.18393,10.61841 18.11021,-1.49221 18.75796,-2.17257 18.56097,-19.49534 -0.1804,-15.86452 0.91966,-19.09032 6.51016,-19.09032 2.37387,0 4.2947,0.77492 5.90002,2.38024 2.96265,2.96265 5.52885,11.35385 5.52885,18.07875 0,2.95497 0.6426,6.01343 1.52948,7.27964 1.75684,2.50823 7.1159,4.24772 13.11138,4.25579 4.72976,0.006 42.50825,-4.73067 44.82853,-5.62105 2.26644,-0.86971 1.90562,-2.5083 -1.96939,-8.94339 -5.39583,-8.96066 -4.34659,-13.3932 3.18426,-13.45194 7.44173,-0.058 16.13299,-6.75302 32.42592,-24.97804 6.14617,-6.875 12.97843,-13.7375 15.18281,-15.25 3.69316,-2.534 4.76736,-2.75 13.67599,-2.75 16.1921,0 26.03102,4.39742 26.03102,11.63435 0,4.54106 3.10786,7.58511 10.0616,9.85503 7.15846,2.33674 7.9384,3.07144 7.9384,7.47803 0,6.03924 -6.3831,14.85615 -15.17924,20.96693 -4.02642,2.79719 -8.69196,6.15261 -10.36787,7.45648 -5.89745,4.58825 -11.28726,17.74513 -18.43874,45.01022 -4.10769,15.6606 -9.61428,29.87441 -12.6957,32.7706 -1.85831,1.7466 -4.01697,2.45329 -8.63955,2.82836 l -6.16228,0.5 -0.67483,4.74592 c -0.37115,2.61025 -1.89439,8.40794 -3.38497,12.88375 -2.4236,7.27739 -2.63861,9.01953 -2.03356,16.47653 0.75532,9.30888 -0.0428,11.91844 -4.11904,13.46824 -1.94868,0.74088 -3.17159,0.58726 -5.03274,-0.63221 -4.40405,-2.88565 -6.60464,-10.27074 -9.90966,-33.25644 -0.28315,-1.96923 -0.96054,-3.15465 -1.66918,-2.92103 -1.67698,0.55285 -3.6604,4.75607 -3.6779,7.79411 -0.0245,4.25582 -2.3201,6.39568 -6.86114,6.39568 -7.38781,0 -11.36819,-6.23019 -9.17768,-14.36514 0.81696,-3.03393 3.11209,-6.06775 8.96478,-11.8501 7.10773,-7.0223 7.93806,-8.24805 8.60641,-12.70488 0.53521,-3.56904 0.34469,-5.63794 -0.68914,-7.48358 l -1.42884,-2.55085 -18.96457,-0.60767 c -11.18409,-0.35837 -20.30039,-1.11732 -22.22059,-1.84993 -3.4345,-1.31035 -3.81603,-2.17837 -4.57565,-10.4101 -0.60834,-6.59247 -2.93807,-8.53804 -15.51781,-12.959 C 431.20509,278.83744 429,279.12593 429,284.88678 c 0,2.7355 1.02534,4.58644 4.92783,8.89571 8.7594,9.67243 8.75729,10.80376 -0.0301,16.1418 -8.9346,5.42748 -8.93245,7.15885 0.0192,15.56054 l 7.22059,6.77695 -0.63956,4.3002 c -0.52576,3.53504 -0.0996,5.45678 2.39481,10.8002 3.63253,7.78131 5.39383,17.89492 5.51654,31.67656 0.10354,11.62834 -1.40709,15.04789 -7.325,16.58138 -4.69384,1.21629 -13.81415,-0.89679 -16.81269,-3.89533 l -2.43463,-2.43463 -5.66559,2.59379 C 407.14691,396.01554 403,400.97334 403,407.63102 c 0,8.02133 -4.90032,19.49796 -11.28089,26.42007 -5.09837,5.53107 -11.35371,8.79466 -19.78211,10.32088 -3.54035,0.64109 -6.98473,1.61899 -7.65417,2.17312 -0.66945,0.55412 -2.76635,3.77715 -4.65979,7.16229 -1.89344,3.38514 -4.86802,7.9548 -6.61018,10.1548 -6.63641,8.38043 -28.65365,30.92622 -35.4333,36.28391 C 303.9487,510.91801 303,512.08172 303,518.02994 c 0,6.47113 -0.57359,6.851 -12.59593,8.34191 -11.3012,1.40147 -14.33712,3.132 -16.71099,9.52554 -1.00855,2.71633 -1.96571,5.07075 -2.12702,5.23206 -0.16131,0.16131 -3.37969,1.06717 -7.15195,2.01301 -5.78323,1.45007 -7.21581,2.25251 -9.13639,5.1176 C 253.27921,551.24142 253,552.9055 253,561.83517 c 0,6.09867 0.8482,14.75579 2.11652,21.60212 1.16408,6.28369 2.17658,15.26765 2.25,19.96436 l 0.13348,8.53948 -7,13.94087 -7,13.94086 0,11.51966 c 0,13.49527 0.0555,13.37654 -10.86001,23.24239 -6.45953,5.83839 -7.7156,7.54486 -9.54854,12.97249 -4.79275,14.1921 -21.08097,36.20798 -30.24816,40.88473 -4.5149,2.30333 -11.18276,2.44701 -15.46749,0.3333 z"
               id="indianMap"/>
            <g class="coords">
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="mumbaiC"
                   d="m 100.00511,440.20975 a 3.0304577,2.0203052 0 1 1 -6.06092,0 3.0304577,2.0203052 0 1 1 6.06092,0 z"
                   transform="matrix(1.6499158,0,0,2.4748737,-62.876667,-653.65957)" />
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="puneC"
                   d="m 155.5635,416.97623 a 2.5253813,3.0304577 0 1 1 -5.05076,0 2.5253813,3.0304577 0 1 1 5.05076,0 z"
                   transform="matrix(1.979899,0,0,1.6499158,-185.11877,-229.87483)" />
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="bengaluruC"
                   d="m 255.5686,606.88489 a 3.5355339,3.0304577 0 1 1 -7.07107,0 3.5355339,3.0304577 0 1 1 7.07107,0 z"
                   transform="matrix(1.4142136,0,0,1.6499158,-164.89521,-401.7594)" />
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="chennaiC"
                   d="m 255.5686,606.88489 a 3.5355339,3.0304577 0 1 1 -7.07107,0 3.5355339,3.0304577 0 1 1 7.07107,0 z"
                   transform="matrix(1.4142136,0,0,1.6499158,-104.14497,-392.75184)" />
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="vishakapatnamC"
                   d="m 303.04577,506.37473 a 4.0406103,0.50507629 0 1 1 -8.08122,0 4.0406103,0.50507629 0 1 1 8.08122,0 z"
                   transform="matrix(1.2374368,0,0,9.8994946,-58.503213,-4514.6158)" />
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="trichyC"
                   d="m 255.5686,606.88489 a 3.5355339,3.0304577 0 1 1 -7.07107,0 3.5355339,3.0304577 0 1 1 7.07107,0 z"
                   transform="matrix(1.4142136,0,0,1.6499158,-152.49017,-346.50531)" />
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="hyderabadC"
                   d="m 155.5635,416.97623 a 2.5253813,3.0304577 0 1 1 -5.05076,0 2.5253813,3.0304577 0 1 1 5.05076,0 z"
                   transform="matrix(1.979899,0,0,1.6499158,-98.454635,-173.98662)" />
                <path
                   style="fill:#ff0;fill-opacity:1"
                   id="coimbatoreC"
                   d="m 255.5686,606.88489 a 3.5355339,3.0304577 0 1 1 -7.07107,0 3.5355339,3.0304577 0 1 1 7.07107,0 z"
                   transform="matrix(1.4142136,0,0,1.6499158,-186.47991,-338.61482)" />
            </g>
            <g class="cities" style="fill:#fff">
                <g  id="mumbai"
                    transform="translate(90,10)">
                  <path
                     d="m 18.042969,421.30669 2.871093,0 1.992188,4.68164 2.003906,-4.68164 2.865235,0 0,8.74805 -2.132813,0 0,-6.39844 -2.015625,4.7168 -1.429687,0 -2.015625,-4.7168 0,6.39844 -2.138672,0 0,-8.74805"
                     style=""
                     id="path3248" />
                  <path
                     d="m 29.996094,421.30669 2.255859,0 0,5.24414 c -3e-6,0.72266 0.117184,1.24024 0.351563,1.55274 0.238277,0.30859 0.624995,0.46289 1.160156,0.46289 0.539057,0 0.925775,-0.1543 1.160156,-0.46289 0.238275,-0.3125 0.357416,-0.83008 0.357422,-1.55274 l 0,-5.24414 2.255859,0 0,5.24414 c -8e-6,1.23829 -0.310555,2.16016 -0.93164,2.76563 -0.621101,0.60547 -1.568366,0.9082 -2.841797,0.9082 -1.269535,0 -2.214847,-0.30273 -2.835938,-0.9082 -0.621095,-0.60547 -0.931641,-1.52734 -0.93164,-2.76563 l 0,-5.24414"
                     style=""
                     id="path3250" />
                  <path
                     d="m 39.746094,421.30669 2.871093,0 1.992188,4.68164 2.003906,-4.68164 2.865235,0 0,8.74805 -2.132813,0 0,-6.39844 -2.015625,4.7168 -1.429687,0 -2.015625,-4.7168 0,6.39844 -2.138672,0 0,-8.74805"
                     style=""
                     id="path3252" />
                  <path
                     d="m 55.203125,424.69341 c 0.355464,1e-5 0.624995,-0.0781 0.808594,-0.23437 0.183588,-0.15625 0.275385,-0.38672 0.27539,-0.69141 -5e-6,-0.30077 -0.0918,-0.52929 -0.27539,-0.68555 -0.183599,-0.16015 -0.45313,-0.24022 -0.808594,-0.24023 l -1.248047,0 0,1.85156 1.248047,0 m 0.07617,3.82617 c 0.45312,10e-6 0.792963,-0.0957 1.019531,-0.28711 0.230463,-0.1914 0.345697,-0.48046 0.345703,-0.86718 -6e-6,-0.37891 -0.113287,-0.66211 -0.339844,-0.84961 -0.226567,-0.19141 -0.568364,-0.28711 -1.02539,-0.28711 l -1.324219,0 0,2.29101 1.324219,0 m 2.097656,-3.14648 c 0.484368,0.14063 0.859367,0.40039 1.125,0.7793 0.265617,0.37891 0.398429,0.84375 0.398438,1.39453 -9e-6,0.84375 -0.285165,1.47265 -0.855469,1.88672 -0.57032,0.41406 -1.437506,0.62109 -2.601563,0.62109 l -3.74414,0 0,-8.74805 3.386718,0 c 1.214839,10e-6 2.093744,0.18361 2.636719,0.55078 0.546868,0.3672 0.820305,0.95509 0.820313,1.76368 -8e-6,0.42578 -0.09962,0.78906 -0.298828,1.08984 -0.199227,0.29688 -0.488289,0.51758 -0.867188,0.66211"
                     style=""
                     id="path3254" />
                  <path
                     d="m 66.148437,428.46099 -3.527343,0 -0.556641,1.59375 -2.267578,0 3.240234,-8.74805 2.689453,0 3.240235,8.74805 -2.267578,0 -0.550782,-1.59375 m -2.964843,-1.62305 2.396484,0 -1.195312,-3.48047 -1.201172,3.48047"
                     style=""
                     id="path3256" />
                  <path
                     d="m 70.121094,421.30669 2.255859,0 0,8.74805 -2.255859,0 0,-8.74805"
                     style=""
                     id="path3258" />
                </g>
                <g  id="pune"
                    transform="translate(65,-6)">
                  <path
                     d="m 61.195312,458.93169 3.744141,0 c 1.113275,10e-6 1.96679,0.24806 2.560547,0.74414 0.597648,0.4922 0.896476,1.19532 0.896484,2.10938 -8e-6,0.91797 -0.298836,1.625 -0.896484,2.12109 -0.593757,0.49219 -1.447272,0.73829 -2.560547,0.73828 l -1.488281,0 0,3.03516 -2.25586,0 0,-8.74805 m 2.25586,1.63477 0,2.44336 1.248047,0 c 0.437495,0 0.775385,-0.10547 1.013672,-0.31641 0.238275,-0.21484 0.357416,-0.51757 0.357421,-0.9082 -5e-6,-0.39062 -0.119146,-0.6914 -0.357421,-0.90235 -0.238287,-0.21093 -0.576177,-0.31639 -1.013672,-0.3164 l -1.248047,0"
                     style=""
                     id="path3261" />
                  <path
                     d="m 69.984375,458.93169 2.255859,0 0,5.24414 c -3e-6,0.72266 0.117184,1.24024 0.351563,1.55274 0.238277,0.30859 0.624996,0.46289 1.160156,0.46289 0.539057,0 0.925776,-0.1543 1.160156,-0.46289 0.238275,-0.3125 0.357416,-0.83008 0.357422,-1.55274 l 0,-5.24414 2.25586,0 0,5.24414 c -9e-6,1.23829 -0.310556,2.16016 -0.931641,2.76563 -0.621101,0.60547 -1.568366,0.9082 -2.841797,0.9082 -1.269535,0 -2.214846,-0.30273 -2.835937,-0.9082 -0.621096,-0.60547 -0.931642,-1.52734 -0.931641,-2.76563 l 0,-5.24414"
                     style=""
                     id="path3263" />
                  <path
                     d="m 79.734375,458.93169 2.519531,0 3.181641,6 0,-6 2.138672,0 0,8.74805 -2.519532,0 -3.18164,-6 0,6 -2.138672,0 0,-8.74805"
                     style=""
                     id="path3265" />
                  <path
                     d="m 89.789062,458.93169 6.087891,0 0,1.70508 -3.832031,0 0,1.62891 3.603515,0 0,1.70508 -3.603515,0 0,2.0039 3.960937,0 0,1.70508 -6.216797,0 0,-8.74805"
                     style=""
                     id="path3267" />
                </g>
                <g  id="bengaluru"
                    transform="translate(-48.556766,63.123795)">
                  <path
                     d="m 154.51172,535.16216 c 0.35546,10e-6 0.62499,-0.0781 0.80859,-0.23437 0.18359,-0.15625 0.27539,-0.38672 0.27539,-0.69141 0,-0.30077 -0.0918,-0.52929 -0.27539,-0.68555 -0.1836,-0.16015 -0.45313,-0.24022 -0.80859,-0.24023 l -1.24805,0 0,1.85156 1.24805,0 m 0.0762,3.82617 c 0.45312,10e-6 0.79296,-0.0957 1.01953,-0.28711 0.23046,-0.1914 0.3457,-0.48046 0.3457,-0.86718 0,-0.37891 -0.11328,-0.66211 -0.33984,-0.84961 -0.22657,-0.19141 -0.56836,-0.28711 -1.02539,-0.28711 l -1.32422,0 0,2.29101 1.32422,0 m 2.09766,-3.14648 c 0.48436,0.14063 0.85936,0.40039 1.125,0.7793 0.26561,0.37891 0.39843,0.84375 0.39843,1.39453 0,0.84375 -0.28516,1.47265 -0.85546,1.88672 -0.57032,0.41406 -1.43751,0.62109 -2.60157,0.62109 l -3.74414,0 0,-8.74805 3.38672,0 c 1.21484,10e-6 2.09374,0.18361 2.63672,0.55078 0.54687,0.3672 0.8203,0.95509 0.82031,1.76368 -1e-5,0.42578 -0.0996,0.78906 -0.29883,1.08984 -0.19922,0.29688 -0.48828,0.51758 -0.86718,0.66211"
                     style=""
                     id="path3208" />
                  <path
                     d="m 160.14844,531.77544 6.08789,0 0,1.70508 -3.83203,0 0,1.62891 3.60351,0 0,1.70508 -3.60351,0 0,2.0039 3.96093,0 0,1.70508 -6.21679,0 0,-8.74805"
                     style=""
                     id="path3210" />
                  <path
                     d="m 168.35156,531.77544 2.51953,0 3.18164,6 0,-6 2.13868,0 0,8.74805 -2.51954,0 -3.18164,-6 0,6 -2.13867,0 0,-8.74805"
                     style=""
                     id="path3212" />
                  <path
                     d="m 186.26953,539.8731 c -0.56251,0.27344 -1.14649,0.47852 -1.75195,0.61523 -0.60548,0.13672 -1.23048,0.20508 -1.875,0.20508 -1.45704,0 -2.61133,-0.40625 -3.46289,-1.21875 -0.85157,-0.8164 -1.27735,-1.92187 -1.27735,-3.3164 0,-1.41015 0.4336,-2.51953 1.30078,-3.32813 0.86719,-0.80858 2.05469,-1.21288 3.5625,-1.21289 0.58203,10e-6 1.13867,0.0547 1.66993,0.16406 0.53515,0.10939 1.03905,0.2715 1.51172,0.48633 l 0,1.81055 c -0.48829,-0.27734 -0.97462,-0.48437 -1.45899,-0.6211 -0.48047,-0.13671 -0.9629,-0.20507 -1.44726,-0.20507 -0.89845,0 -1.59181,0.25196 -2.08008,0.75585 -0.48438,0.50001 -0.72657,1.21681 -0.72657,2.1504 0,0.92578 0.23438,1.64062 0.70313,2.14453 0.46875,0.5039 1.13476,0.75586 1.99805,0.75586 0.23437,0 0.45116,-0.0137 0.65039,-0.041 0.20312,-0.0312 0.38476,-0.0781 0.54492,-0.14062 l 0,-1.69922 -1.37695,0 0,-1.51172 3.51562,0 0,4.20703"
                     style=""
                     id="path3214" />
                  <path
                     d="m 193.55859,538.92974 -3.52734,0 -0.55664,1.59375 -2.26758,0 3.24024,-8.74805 2.68945,0 3.24023,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96484,-1.62305 2.39648,0 -1.19531,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3216" />
                  <path
                     d="m 197.53125,531.77544 2.25586,0 0,7.04297 3.96094,0 0,1.70508 -6.2168,0 0,-8.74805"
                     style=""
                     id="path3218" />
                  <path
                     d="m 204.75,531.77544 2.25586,0 0,5.24414 c 0,0.72266 0.11718,1.24024 0.35156,1.55274 0.23828,0.30859 0.625,0.46289 1.16016,0.46289 0.53906,0 0.92577,-0.1543 1.16015,-0.46289 0.23828,-0.3125 0.35742,-0.83008 0.35743,-1.55274 l 0,-5.24414 2.25586,0 0,5.24414 c -1e-5,1.23829 -0.31056,2.16016 -0.93165,2.76563 -0.6211,0.60547 -1.56836,0.9082 -2.84179,0.9082 -1.26954,0 -2.21485,-0.30273 -2.83594,-0.9082 -0.62109,-0.60547 -0.93164,-1.52734 -0.93164,-2.76563 l 0,-5.24414"
                     style=""
                     id="path3220" />
                  <path
                     d="m 217.70508,535.65435 c 0.47265,0 0.81054,-0.0879 1.01367,-0.26367 0.20703,-0.17578 0.31054,-0.46484 0.31055,-0.86719 -1e-5,-0.39843 -0.10352,-0.68359 -0.31055,-0.85547 -0.20313,-0.17187 -0.54102,-0.2578 -1.01367,-0.25781 l -0.94922,0 0,2.24414 0.94922,0 m -0.94922,1.55859 0,3.31055 -2.25586,0 0,-8.74805 3.44531,0 c 1.15234,10e-6 1.99609,0.19337 2.53125,0.58008 0.53906,0.38673 0.80859,0.99806 0.8086,1.83399 -1e-5,0.57813 -0.14064,1.05274 -0.42188,1.42382 -0.27735,0.3711 -0.69727,0.64454 -1.25976,0.82032 0.30858,0.0703 0.58397,0.23047 0.82617,0.48046 0.24608,0.2461 0.49413,0.6211 0.74414,1.125 l 1.22461,2.48438 -2.40235,0 -1.0664,-2.17383 c -0.21485,-0.4375 -0.4336,-0.73632 -0.65625,-0.89648 -0.21876,-0.16016 -0.51173,-0.24023 -0.87891,-0.24024 l -0.63867,0"
                     style=""
                     id="path3222" />
                  <path
                     d="m 223.73437,531.77544 2.25586,0 0,5.24414 c 0,0.72266 0.11719,1.24024 0.35157,1.55274 0.23827,0.30859 0.62499,0.46289 1.16015,0.46289 0.53906,0 0.92578,-0.1543 1.16016,-0.46289 0.23827,-0.3125 0.35741,-0.83008 0.35742,-1.55274 l 0,-5.24414 2.25586,0 0,5.24414 c -10e-6,1.23829 -0.31055,2.16016 -0.93164,2.76563 -0.6211,0.60547 -1.56837,0.9082 -2.8418,0.9082 -1.26953,0 -2.21484,-0.30273 -2.83593,-0.9082 -0.6211,-0.60547 -0.93165,-1.52734 -0.93165,-2.76563 l 0,-5.24414"
                     style=""
                     id="path3224" />
                </g>
                <g  id="chennai"
                   transform="translate(97.113532,-3.0347978)">
                  <path
                     d="m 169.47656,615.91802 c -0.41407,0.21485 -0.84571,0.37695 -1.29492,0.48633 -0.44922,0.10937 -0.91797,0.16406 -1.40625,0.16406 -1.45703,0 -2.61133,-0.40625 -3.46289,-1.21875 -0.85156,-0.8164 -1.27734,-1.92187 -1.27734,-3.3164 0,-1.39844 0.42578,-2.5039 1.27734,-3.31641 0.85156,-0.8164 2.00586,-1.2246 3.46289,-1.22461 0.48828,10e-6 0.95703,0.0547 1.40625,0.16406 0.44921,0.10939 0.88085,0.2715 1.29492,0.48633 l 0,1.81055 c -0.41797,-0.28515 -0.83008,-0.49414 -1.23633,-0.62696 -0.40625,-0.1328 -0.83399,-0.19921 -1.2832,-0.19921 -0.80469,0 -1.4375,0.25782 -1.89844,0.77343 -0.46094,0.51563 -0.69141,1.22657 -0.6914,2.13282 -1e-5,0.90234 0.23046,1.61133 0.6914,2.12695 0.46094,0.51563 1.09375,0.77344 1.89844,0.77344 0.44921,0 0.87695,-0.0664 1.2832,-0.19922 0.40625,-0.13281 0.81836,-0.3418 1.23633,-0.62696 l 0,1.81055"
                     style=""
                     id="path3193" />
                  <path
                     d="m 171.35156,607.65044 2.25586,0 0,3.33399 3.32813,0 0,-3.33399 2.25586,0 0,8.74805 -2.25586,0 0,-3.70898 -3.32813,0 0,3.70898 -2.25586,0 0,-8.74805"
                     style=""
                     id="path3195" />
                  <path
                     d="m 181.40625,607.65044 6.08789,0 0,1.70508 -3.83203,0 0,1.62891 3.60351,0 0,1.70508 -3.60351,0 0,2.0039 3.96094,0 0,1.70508 -6.2168,0 0,-8.74805"
                     style=""
                     id="path3197" />
                  <path
                     d="m 189.60937,607.65044 2.51954,0 3.18164,6 0,-6 2.13867,0 0,8.74805 -2.51953,0 -3.18164,-6 0,6 -2.13868,0 0,-8.74805"
                     style=""
                     id="path3199" />
                  <path
                     d="m 199.66406,607.65044 2.51953,0 3.18164,6 0,-6 2.13868,0 0,8.74805 -2.51954,0 -3.18164,-6 0,6 -2.13867,0 0,-8.74805"
                     style=""
                     id="path3201" />
                  <path
                     d="m 215.02734,614.80474 -3.52734,0 -0.55664,1.59375 -2.26758,0 3.24024,-8.74805 2.68945,0 3.24023,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96484,-1.62305 2.39648,0 -1.19531,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3203" />
                  <path
                     d="m 219,607.65044 2.25586,0 0,8.74805 -2.25586,0 0,-8.74805"
                     style=""
                     id="path3205" />
                </g>
                <g  id="vishakapatnam"
                   transform="translate(-102.57617,-27.313181)">
                  <path
                     d="m 291.40234,520.24419 2.26758,0 2.32031,6.45703 2.31446,-6.45703 2.26758,0 -3.24024,8.74805 -2.68945,0 -3.24024,-8.74805"
                     style=""
                     id="path3135" />
                  <path
                     d="m 301.72656,520.24419 2.25586,0 0,8.74805 -2.25586,0 0,-8.74805"
                     style=""
                     id="path3137" />
                  <path
                     d="m 312.29102,520.51958 0,1.85157 c -0.48048,-0.21484 -0.94923,-0.37695 -1.40625,-0.48633 -0.45704,-0.10937 -0.88868,-0.16406 -1.29493,-0.16406 -0.53906,0 -0.9375,0.0742 -1.19531,0.22265 -0.25781,0.14845 -0.38672,0.37891 -0.38672,0.69141 0,0.23438 0.0859,0.41797 0.25781,0.55078 0.17578,0.12891 0.49219,0.24024 0.94922,0.33398 l 0.96094,0.19336 c 0.97265,0.19532 1.66406,0.4922 2.07422,0.89063 0.41015,0.39844 0.61523,0.96485 0.61523,1.69922 0,0.96484 -0.28711,1.68359 -0.86132,2.15625 -0.57032,0.46875 -1.44337,0.70312 -2.61914,0.70312 -0.5547,0 -1.11134,-0.0527 -1.66993,-0.1582 -0.55859,-0.10547 -1.11719,-0.26172 -1.67578,-0.46875 l 0,-1.9043 c 0.55859,0.29688 1.09766,0.52149 1.61719,0.67383 0.52343,0.14844 1.02734,0.22266 1.51172,0.22266 0.49218,0 0.86913,-0.082 1.13086,-0.2461 0.26171,-0.16406 0.39257,-0.39843 0.39258,-0.70312 -1e-5,-0.27344 -0.0899,-0.48437 -0.26954,-0.63282 -0.17578,-0.14843 -0.5293,-0.28124 -1.06054,-0.39843 l -0.87305,-0.19336 c -0.875,-0.1875 -1.51563,-0.48633 -1.92187,-0.89649 -0.40235,-0.41015 -0.60352,-0.96288 -0.60352,-1.6582 0,-0.87109 0.28125,-1.54101 0.84375,-2.00977 0.5625,-0.46874 1.37109,-0.70311 2.42578,-0.70312 0.48047,10e-6 0.97461,0.0371 1.48242,0.11133 0.50781,0.0703 1.0332,0.17774 1.57618,0.32226"
                     style=""
                     id="path3139" />
                  <path
                     d="m 314.85156,520.24419 2.25586,0 0,3.33399 3.32813,0 0,-3.33399 2.25586,0 0,8.74805 -2.25586,0 0,-3.70898 -3.32813,0 0,3.70898 -2.25586,0 0,-8.74805"
                     style=""
                     id="path3141" />
                  <path
                     d="m 330.21484,527.39849 -3.52734,0 -0.55664,1.59375 -2.26758,0 3.24024,-8.74805 2.68945,0 3.24023,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96484,-1.62305 2.39648,0 -1.19531,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3143" />
                  <path
                     d="m 334.1875,520.24419 2.25586,0 0,3.19336 3.25195,-3.19336 2.61914,0 -4.21289,4.14258 4.64649,4.60547 -2.82422,0 -3.48047,-3.44531 0,3.44531 -2.25586,0 0,-8.74805"
                     style=""
                     id="path3145" />
                  <path
                     d="m 348.80078,527.39849 -3.52734,0 -0.55664,1.59375 -2.26758,0 3.24023,-8.74805 2.68946,0 3.24023,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96484,-1.62305 2.39648,0 -1.19531,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3147" />
                  <path
                     d="m 352.77344,520.24419 3.74414,0 c 1.11327,10e-6 1.96679,0.24806 2.56054,0.74414 0.59765,0.4922 0.89648,1.19532 0.89649,2.10938 -10e-6,0.91797 -0.29884,1.625 -0.89649,2.12109 -0.59375,0.49219 -1.44727,0.73829 -2.56054,0.73828 l -1.48828,0 0,3.03516 -2.25586,0 0,-8.74805 m 2.25586,1.63477 0,2.44336 1.24804,0 c 0.4375,0 0.77539,-0.10547 1.01368,-0.31641 0.23827,-0.21484 0.35741,-0.51757 0.35742,-0.9082 -10e-6,-0.39062 -0.11915,-0.6914 -0.35742,-0.90235 -0.23829,-0.21093 -0.57618,-0.31639 -1.01368,-0.3164 l -1.24804,0"
                     style=""
                     id="path3149" />
                  <path
                     d="m 365.76953,527.39849 -3.52734,0 -0.55664,1.59375 -2.26758,0 3.24023,-8.74805 2.68946,0 3.24023,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96484,-1.62305 2.39648,0 -1.19531,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3151" />
                  <path
                     d="m 367.76172,520.24419 8.0625,0 0,1.70508 -2.90039,0 0,7.04297 -2.25586,0 0,-7.04297 -2.90625,0 0,-1.70508"
                     style=""
                     id="path3153" />
                  <path
                     d="m 376.98437,520.24419 2.51954,0 3.18164,6 0,-6 2.13867,0 0,8.74805 -2.51953,0 -3.18164,-6 0,6 -2.13868,0 0,-8.74805"
                     style=""
                     id="path3155" />
                  <path
                     d="m 392.34766,527.39849 -3.52735,0 -0.55664,1.59375 -2.26758,0 3.24024,-8.74805 2.68945,0 3.24024,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96485,-1.62305 2.39649,0 -1.19532,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3157" />
                  <path
                     d="m 396.32031,520.24419 2.8711,0 1.99218,4.68164 2.00391,-4.68164 2.86523,0 0,8.74805 -2.13281,0 0,-6.39844 -2.01562,4.7168 -1.42969,0 -2.01563,-4.7168 0,6.39844 -2.13867,0 0,-8.74805"
                     style=""
                     id="path3159" />
                </g>
                <g  id="trichy"
                   transform="translate(146.88422,5.4626361)">
                  <path
                     d="m 63.183594,644.65044 8.0625,0 0,1.70508 -2.900391,0 0,7.04297 -2.255859,0 0,-7.04297 -2.90625,0 0,-1.70508"
                     style=""
                     id="path3285" />
                  <path
                     d="m 75.611328,648.52935 c 0.472652,0 0.810542,-0.0879 1.013672,-0.26367 0.207026,-0.17578 0.310541,-0.46484 0.310547,-0.86719 -6e-6,-0.39843 -0.103521,-0.68359 -0.310547,-0.85547 -0.20313,-0.17187 -0.54102,-0.2578 -1.013672,-0.25781 l -0.949219,0 0,2.24414 0.949219,0 m -0.949219,1.55859 0,3.31055 -2.255859,0 0,-8.74805 3.445312,0 c 1.152339,10e-6 1.996088,0.19337 2.53125,0.58008 0.539055,0.38673 0.808586,0.99806 0.808594,1.83399 -8e-6,0.57813 -0.140632,1.05274 -0.421875,1.42382 -0.277351,0.3711 -0.697272,0.64454 -1.259765,0.82032 0.308587,0.0703 0.583977,0.23047 0.826171,0.48046 0.246087,0.2461 0.494134,0.6211 0.744141,1.125 l 1.224609,2.48438 -2.402343,0 -1.066407,-2.17383 c -0.214849,-0.4375 -0.433598,-0.73632 -0.65625,-0.89648 -0.218754,-0.16016 -0.511723,-0.24023 -0.878906,-0.24024 l -0.638672,0"
                     style=""
                     id="path3287" />
                  <path
                     d="m 81.640625,644.65044 2.255859,0 0,8.74805 -2.255859,0 0,-8.74805"
                     style=""
                     id="path3289" />
                  <path
                     d="m 93.054687,652.91802 c -0.41407,0.21485 -0.84571,0.37695 -1.294921,0.48633 -0.449225,0.10937 -0.917975,0.16406 -1.40625,0.16406 -1.457036,0 -2.611331,-0.40625 -3.462891,-1.21875 -0.851564,-0.8164 -1.277344,-1.92187 -1.277344,-3.3164 0,-1.39844 0.42578,-2.5039 1.277344,-3.31641 0.85156,-0.8164 2.005855,-1.2246 3.462891,-1.22461 0.488275,10e-6 0.957025,0.0547 1.40625,0.16406 0.449211,0.10939 0.880851,0.2715 1.294921,0.48633 l 0,1.81055 c -0.417976,-0.28515 -0.830085,-0.49414 -1.236328,-0.62696 -0.406256,-0.1328 -0.83399,-0.19921 -1.283203,-0.19921 -0.804692,0 -1.437504,0.25782 -1.898437,0.77343 -0.460941,0.51563 -0.691409,1.22657 -0.691407,2.13282 -2e-6,0.90234 0.230466,1.61133 0.691407,2.12695 0.460933,0.51563 1.093745,0.77344 1.898437,0.77344 0.449213,0 0.876947,-0.0664 1.283203,-0.19922 0.406243,-0.13281 0.818352,-0.3418 1.236328,-0.62696 l 0,1.81055"
                     style=""
                     id="path3291" />
                  <path
                     d="m 94.929687,644.65044 2.25586,0 0,3.33399 3.328123,0 0,-3.33399 2.25586,0 0,8.74805 -2.25586,0 0,-3.70898 -3.328123,0 0,3.70898 -2.25586,0 0,-8.74805"
                     style=""
                     id="path3293" />
                  <path
                     d="m 103.76563,644.65044 2.46679,0 1.99219,3.11719 1.99219,-3.11719 2.47265,0 -3.33398,5.0625 0,3.68555 -2.25586,0 0,-3.68555 -3.33398,-5.0625"
                     style=""
                     id="path3295" />
                </g>
                <g  id="hyderabad"
                   transform="translate(7.2835152,-2.6562248e-8)">
                  <path
                     d="m 106.10156,508.08794 2.25586,0 0,3.33399 3.32813,0 0,-3.33399 2.25586,0 0,8.74805 -2.25586,0 0,-3.70898 -3.32813,0 0,3.70898 -2.25586,0 0,-8.74805"
                     style=""
                     id="path3116" />
                  <path
                     d="m 114.9375,508.08794 2.4668,0 1.99218,3.11719 1.99219,-3.11719 2.47266,0 -3.33399,5.0625 0,3.68555 -2.25586,0 0,-3.68555 -3.33398,-5.0625"
                     style=""
                     id="path3118" />
                  <path
                     d="m 127.10742,509.79302 0,5.33789 0.8086,0 c 0.92187,0 1.62499,-0.22851 2.10937,-0.68555 0.48828,-0.45702 0.73242,-1.12109 0.73242,-1.99218 0,-0.86718 -0.24219,-1.52734 -0.72656,-1.98047 -0.48438,-0.45312 -1.18946,-0.67968 -2.11523,-0.67969 l -0.8086,0 m -2.25586,-1.70508 2.37891,0 c 1.32812,10e-6 2.3164,0.0957 2.96484,0.28711 0.65234,0.18751 1.21093,0.50782 1.67578,0.96094 0.41015,0.39454 0.71484,0.84962 0.91407,1.36523 0.19921,0.51563 0.29882,1.09962 0.29882,1.75196 0,0.66016 -0.0996,1.25 -0.29882,1.76953 -0.19923,0.51563 -0.50392,0.9707 -0.91407,1.36523 -0.46875,0.45313 -1.03125,0.77539 -1.6875,0.9668 -0.65625,0.1875 -1.64063,0.28125 -2.95312,0.28125 l -2.37891,0 0,-8.74805"
                     style=""
                     id="path3120" />
                  <path
                     d="m 134.8125,508.08794 6.08789,0 0,1.70508 -3.83203,0 0,1.62891 3.60351,0 0,1.70508 -3.60351,0 0,2.0039 3.96094,0 0,1.70508 -6.2168,0 0,-8.74805"
                     style=""
                     id="path3122" />
                  <path
                     d="m 146.2207,511.96685 c 0.47265,0 0.81054,-0.0879 1.01367,-0.26367 0.20703,-0.17578 0.31055,-0.46484 0.31055,-0.86719 0,-0.39843 -0.10352,-0.68359 -0.31055,-0.85547 -0.20313,-0.17187 -0.54102,-0.2578 -1.01367,-0.25781 l -0.94922,0 0,2.24414 0.94922,0 m -0.94922,1.55859 0,3.31055 -2.25586,0 0,-8.74805 3.44532,0 c 1.15234,10e-6 1.99608,0.19337 2.53125,0.58008 0.53905,0.38673 0.80858,0.99806 0.80859,1.83399 -1e-5,0.57813 -0.14063,1.05274 -0.42187,1.42382 -0.27735,0.3711 -0.69728,0.64454 -1.25977,0.82032 0.30859,0.0703 0.58398,0.23047 0.82617,0.48046 0.24609,0.2461 0.49414,0.6211 0.74414,1.125 l 1.22461,2.48438 -2.40234,0 -1.06641,-2.17383 c -0.21485,-0.4375 -0.4336,-0.73632 -0.65625,-0.89648 -0.21875,-0.16016 -0.51172,-0.24023 -0.8789,-0.24024 l -0.63868,0"
                     style=""
                     id="path3124" />
                  <path
                     d="m 157.55859,515.24224 -3.52734,0 -0.55664,1.59375 -2.26758,0 3.24024,-8.74805 2.68945,0 3.24023,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96484,-1.62305 2.39648,0 -1.19531,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3126" />
                  <path
                     d="m 165.03516,511.47466 c 0.35546,1e-5 0.62499,-0.0781 0.80859,-0.23437 0.18359,-0.15625 0.27538,-0.38672 0.27539,-0.69141 -10e-6,-0.30077 -0.0918,-0.52929 -0.27539,-0.68555 -0.1836,-0.16015 -0.45313,-0.24022 -0.80859,-0.24023 l -1.24805,0 0,1.85156 1.24805,0 m 0.0762,3.82617 c 0.45312,10e-6 0.79296,-0.0957 1.01953,-0.28711 0.23046,-0.1914 0.3457,-0.48046 0.3457,-0.86718 0,-0.37891 -0.11328,-0.66211 -0.33984,-0.84961 -0.22657,-0.19141 -0.56837,-0.28711 -1.02539,-0.28711 l -1.32422,0 0,2.29101 1.32422,0 m 2.09765,-3.14648 c 0.48437,0.14063 0.85937,0.40039 1.125,0.7793 0.26562,0.37891 0.39843,0.84375 0.39844,1.39453 -1e-5,0.84375 -0.28516,1.47265 -0.85547,1.88672 -0.57032,0.41406 -1.4375,0.62109 -2.60156,0.62109 l -3.74414,0 0,-8.74805 3.38672,0 c 1.21484,10e-6 2.09374,0.18361 2.63672,0.55078 0.54686,0.3672 0.8203,0.95509 0.82031,1.76368 -1e-5,0.42578 -0.0996,0.78906 -0.29883,1.08984 -0.19922,0.29688 -0.48829,0.51758 -0.86719,0.66211"
                     style=""
                     id="path3128" />
                  <path
                     d="m 175.98047,515.24224 -3.52735,0 -0.55664,1.59375 -2.26757,0 3.24023,-8.74805 2.68945,0 3.24024,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96485,-1.62305 2.39649,0 -1.19531,-3.48047 -1.20118,3.48047"
                     style=""
                     id="path3130" />
                  <path
                     d="m 182.20898,509.79302 0,5.33789 0.8086,0 c 0.92187,0 1.62499,-0.22851 2.10937,-0.68555 0.48828,-0.45702 0.73242,-1.12109 0.73242,-1.99218 0,-0.86718 -0.24219,-1.52734 -0.72656,-1.98047 -0.48438,-0.45312 -1.18946,-0.67968 -2.11523,-0.67969 l -0.8086,0 m -2.25586,-1.70508 2.37891,0 c 1.32812,10e-6 2.3164,0.0957 2.96484,0.28711 0.65234,0.18751 1.21093,0.50782 1.67579,0.96094 0.41014,0.39454 0.71483,0.84962 0.91406,1.36523 0.19921,0.51563 0.29882,1.09962 0.29883,1.75196 -1e-5,0.66016 -0.0996,1.25 -0.29883,1.76953 -0.19923,0.51563 -0.50392,0.9707 -0.91406,1.36523 -0.46876,0.45313 -1.03126,0.77539 -1.6875,0.9668 -0.65626,0.1875 -1.64063,0.28125 -2.95313,0.28125 l -2.37891,0 0,-8.74805"
                     style=""
                     id="path3132" />
                </g>
                <g  id="coimbatore"
                    transform="translate(0.60695998,-26.706221)">
                  <path
                     d="m 80.257812,693.60552 c -0.41407,0.21485 -0.84571,0.37695 -1.294921,0.48633 -0.449225,0.10937 -0.917975,0.16406 -1.40625,0.16406 -1.457036,0 -2.611331,-0.40625 -3.462891,-1.21875 -0.851564,-0.8164 -1.277344,-1.92187 -1.277344,-3.3164 0,-1.39844 0.42578,-2.5039 1.277344,-3.31641 0.85156,-0.8164 2.005855,-1.2246 3.462891,-1.22461 0.488275,10e-6 0.957025,0.0547 1.40625,0.16406 0.449211,0.10939 0.880851,0.2715 1.294921,0.48633 l 0,1.81055 c -0.417976,-0.28515 -0.830085,-0.49414 -1.236328,-0.62696 -0.406256,-0.1328 -0.83399,-0.19921 -1.283203,-0.19921 -0.804692,0 -1.437504,0.25782 -1.898437,0.77343 -0.460941,0.51563 -0.691409,1.22657 -0.691407,2.13282 -2e-6,0.90234 0.230466,1.61133 0.691407,2.12695 0.460933,0.51563 1.093745,0.77344 1.898437,0.77344 0.449213,0 0.876947,-0.0664 1.283203,-0.19922 0.406243,-0.13281 0.818352,-0.3418 1.236328,-0.62696 l 0,1.81055"
                     style=""
                     id="path3227" />
                  <path
                     d="m 86.128906,686.81451 c -0.687504,0 -1.220707,0.25391 -1.599609,0.76171 -0.378909,0.50782 -0.568362,1.22267 -0.56836,2.14454 -2e-6,0.91797 0.189451,1.63086 0.56836,2.13867 0.378902,0.50781 0.912105,0.76172 1.599609,0.76172 0.691401,0 1.226556,-0.25391 1.605469,-0.76172 0.378899,-0.50781 0.568352,-1.2207 0.568359,-2.13867 -7e-6,-0.92187 -0.18946,-1.63672 -0.568359,-2.14454 -0.378913,-0.5078 -0.914068,-0.76171 -1.605469,-0.76171 m 0,-1.63477 c 1.406244,10e-6 2.507805,0.40235 3.304688,1.20703 0.796866,0.8047 1.195303,1.91602 1.195312,3.33399 -9e-6,1.41406 -0.398446,2.52343 -1.195312,3.32812 -0.796883,0.80469 -1.898444,1.20703 -3.304688,1.20703 -1.402347,0 -2.503909,-0.40234 -3.304687,-1.20703 -0.796876,-0.80469 -1.195313,-1.91406 -1.195313,-3.32812 0,-1.41797 0.398437,-2.52929 1.195313,-3.33399 0.800778,-0.80468 1.90234,-1.20702 3.304687,-1.20703"
                     style=""
                     id="path3229" />
                  <path
                     d="m 92.328125,685.33794 2.255859,0 0,8.74805 -2.255859,0 0,-8.74805"
                     style=""
                     id="path3231" />
                  <path
                     d="m 96.804687,685.33794 2.871094,0 1.992189,4.68164 2.00391,-4.68164 2.86523,0 0,8.74805 -2.13281,0 0,-6.39844 -2.01563,4.7168 -1.42969,0 -2.015621,-4.7168 0,6.39844 -2.138672,0 0,-8.74805"
                     style=""
                     id="path3233" />
                  <path
                     d="m 112.26172,688.72466 c 0.35546,10e-6 0.62499,-0.0781 0.80859,-0.23437 0.18359,-0.15625 0.27539,-0.38672 0.27539,-0.69141 0,-0.30077 -0.0918,-0.52929 -0.27539,-0.68555 -0.1836,-0.16015 -0.45313,-0.24022 -0.80859,-0.24023 l -1.24805,0 0,1.85156 1.24805,0 m 0.0762,3.82617 c 0.45312,10e-6 0.79296,-0.0957 1.01953,-0.28711 0.23046,-0.1914 0.3457,-0.48046 0.34571,-0.86718 -1e-5,-0.37891 -0.11329,-0.66211 -0.33985,-0.84961 -0.22657,-0.19141 -0.56836,-0.28711 -1.02539,-0.28711 l -1.32422,0 0,2.29101 1.32422,0 m 2.09766,-3.14648 c 0.48436,0.14063 0.85936,0.40039 1.125,0.7793 0.26561,0.37891 0.39843,0.84375 0.39843,1.39453 0,0.84375 -0.28516,1.47265 -0.85546,1.88672 -0.57032,0.41406 -1.43751,0.62109 -2.60157,0.62109 l -3.74414,0 0,-8.74805 3.38672,0 c 1.21484,10e-6 2.09374,0.18361 2.63672,0.55078 0.54687,0.3672 0.8203,0.95509 0.82031,1.76368 -1e-5,0.42578 -0.0996,0.78906 -0.29883,1.08984 -0.19922,0.29688 -0.48828,0.51758 -0.86718,0.66211"
                     style=""
                     id="path3235" />
                  <path
                     d="m 123.20703,692.49224 -3.52734,0 -0.55664,1.59375 -2.26758,0 3.24023,-8.74805 2.68946,0 3.24023,8.74805 -2.26758,0 -0.55078,-1.59375 m -2.96484,-1.62305 2.39648,0 -1.19531,-3.48047 -1.20117,3.48047"
                     style=""
                     id="path3237" />
                  <path
                     d="m 125.19922,685.33794 8.0625,0 0,1.70508 -2.90039,0 0,7.04297 -2.25586,0 0,-7.04297 -2.90625,0 0,-1.70508"
                     style=""
                     id="path3239" />
                  <path
                     d="m 138.41797,686.81451 c -0.68751,0 -1.22071,0.25391 -1.59961,0.76171 -0.37891,0.50782 -0.56836,1.22267 -0.56836,2.14454 0,0.91797 0.18945,1.63086 0.56836,2.13867 0.3789,0.50781 0.9121,0.76172 1.59961,0.76172 0.6914,0 1.22655,-0.25391 1.60547,-0.76172 0.3789,-0.50781 0.56835,-1.2207 0.56836,-2.13867 -1e-5,-0.92187 -0.18946,-1.63672 -0.56836,-2.14454 -0.37892,-0.5078 -0.91407,-0.76171 -1.60547,-0.76171 m 0,-1.63477 c 1.40624,10e-6 2.5078,0.40235 3.30469,1.20703 0.79686,0.8047 1.1953,1.91602 1.19531,3.33399 -1e-5,1.41406 -0.39845,2.52343 -1.19531,3.32812 -0.79689,0.80469 -1.89845,1.20703 -3.30469,1.20703 -1.40235,0 -2.50391,-0.40234 -3.30469,-1.20703 -0.79687,-0.80469 -1.19531,-1.91406 -1.19531,-3.32812 0,-1.41797 0.39844,-2.52929 1.19531,-3.33399 0.80078,-0.80468 1.90234,-1.20702 3.30469,-1.20703"
                     style=""
                     id="path3241" />
                  <path
                     d="m 147.82227,689.21685 c 0.47265,0 0.81054,-0.0879 1.01367,-0.26367 0.20702,-0.17578 0.31054,-0.46484 0.31054,-0.86719 0,-0.39843 -0.10352,-0.68359 -0.31054,-0.85547 -0.20313,-0.17187 -0.54102,-0.2578 -1.01367,-0.25781 l -0.94922,0 0,2.24414 0.94922,0 m -0.94922,1.55859 0,3.31055 -2.25586,0 0,-8.74805 3.44531,0 c 1.15234,10e-6 1.99609,0.19337 2.53125,0.58008 0.53905,0.38673 0.80859,0.99806 0.80859,1.83399 0,0.57813 -0.14063,1.05274 -0.42187,1.42382 -0.27735,0.3711 -0.69727,0.64454 -1.25977,0.82032 0.30859,0.0703 0.58398,0.23047 0.82617,0.48046 0.24609,0.2461 0.49414,0.6211 0.74415,1.125 l 1.2246,2.48438 -2.40234,0 -1.06641,-2.17383 c -0.21484,-0.4375 -0.43359,-0.73632 -0.65625,-0.89648 -0.21875,-0.16016 -0.51172,-0.24023 -0.8789,-0.24024 l -0.63867,0"
                     style=""
                     id="path3243" />
                  <path
                     d="m 153.85156,685.33794 6.08789,0 0,1.70508 -3.83203,0 0,1.62891 3.60352,0 0,1.70508 -3.60352,0 0,2.0039 3.96094,0 0,1.70508 -6.2168,0 0,-8.74805"
                     style=""
                     id="path3245" />
                </g>
            </g>
        </svg>
    </div>

	</body>
</html>
