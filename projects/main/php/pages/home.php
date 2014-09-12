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
				bottom: 0.3em;
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
				height: 2em;
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
						<a href="../pages/exhibitions.php" class="title head3 text">Exhibitions</a>
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
						<a href="../pages/pre-shaastra.php" class="title head5 text">Pre-Shaastra</a>
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
	</div>
        
    <?php include '../base/foot.php'; ?>
    <?php include '../modules/social.php'; ?>
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
				$('.help').css({'bottom':'0.3em'})
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
		</script>
	</body>
</html>
