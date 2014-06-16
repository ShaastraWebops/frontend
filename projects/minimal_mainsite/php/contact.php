<!DOCTYPE html>
<html style="height:100%">
	<head>

		<title>Contact Us | Shaastra 2015</title>		

		<?php include 'head.php' ?>
		<link href="../css/contact.css" rel="stylesheet">
		<link href="../css/component_menu.css" rel="stylesheet" type="text/css" />
		
		<style>
			body {
				font-family: 'Titillium Web', sans-serif;
				height : 100%;
				width : 100%;
			}
			.title *, .title * {
				font-family: 'Dosis', sans-serif;
			}
			.container.title, .container-fluid.title {
				margin-bottom: 2%;
			}
		</style>
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' />
	</head>
	
	<body>
		<?php include 'menu.php' ?>		
		<div class="container-fluid title white centered">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center">CONTACT US</h1>
					<div class="white breaker">
						<span class="left"></span>
						<div class="dice white"></div>
						<span class="right"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid" style="height : 100%;">
			<div class="row white" style="height : 70%;">
				<div class="col-md-5 col-md-offset-1" style="height : 100%;">
					<div class="container-fluid text-center white" style="height : 100%;">
						<div class="row" style="padding: 0.3%; height : 50%;">
							<div 
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12" 
								style="margin: 1%; padding-top : 15%;"
								data-toggle="modal" 
								data-target="#co-curricular">
								Co-Curricular<br />
								Affairs<br />
								Secretary
							</div>
								
							<div 
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12" 
								style="margin: 1%; padding-top : 15%"
								data-toggle="modal" 
								data-target="#spons_pr">
								Sponsorships,<br />
								PR and<br />
								Networking
							</div>
						</div>

						<div class="row" style="padding: 0.3%; height : 50%;">
							<div 
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12" 
								style="margin: 1%; padding-top : 15%;"
								data-toggle="modal" 
								data-target="#events_queries">
								Event<br />
								Queries
							</div>
							
							<div 
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12" 
								style="margin: 1%; padding-top : 15%;"
								data-toggle="modal" 
								data-target="#student_relations">
								Student<br />
								Relations
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-md-5" style="height : 100%;">
					<div class="container-fluid white text-center" style="height : 70%;">
						<div class="row" style="height : 100%;">
							<div id="map_canvas" class="col-sm-12" style="height: 80%">
								<!--For google map-->
							</div>
						</div>
						<div class="row">
							<div class="col-xs-2 col-xs-offset-3">
								<a class="social" href="https://www.facebook.com/Shaastra"><img src="../img/social/facebook.png" /></a>
							</div>
							<div class="col-xs-2">
								<a class="social" href="https://twitter.com/ShaastraIITM"><img src="../img/social/twitter.png" /></a>
							</div>
							<div class="col-xs-2">
								<a class="social" href="https://www.youtube.com/user/iitmshaastra"><img src="../img/social/youtube.png" /></a>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<button class="btn btn-lg btn-primary margin-top-2" data-toggle="modal" data-target="#comments">
									Could not find what you are looking for?
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- modal for comments start -->
		
		<div class="modal fade" id="comments" tabindex="-1" role="dialog" aria-labelledby="comments" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Leave us a message</h1>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="input-group margin-bottom-5 col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" class="form-control" placeholder="Name"/>
							</div>
						</div>
						<div class="row">
							<div class="input-group margin-bottom-5 col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="text" class="form-control" placeholder="Email ID"/>
							</div>
						</div>
						<div class="row">
							<div class="input-group margin-bottom-5 col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-phone"></span>
								</span>
								<input type="tel" class="form-control" placeholder="Mobile (optional)"/>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
								<textarea id="comments" rows="3" class="form-control" placeholder="Your Message..."></textarea>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal for comments end -->
		
		<!-- modals for boxes start -->
		<div class="modal fade" id="co-curricular" tabindex="-1" role="dialog" aria-labelledby="co-curricular" aria-hidden="true">
			<div class="modal-dialog" style="width:40%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Secretary</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<h4>SIDDHARTH DIALANI</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact :
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail :
								</p>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="spons_pr" tabindex="-1" role="dialog" aria-labelledby="spons_pr" aria-hidden="true">
			<div class="modal-dialog" style="width:75%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="msg">
							<h1 style="color:black; font-family: 'Dosis', sans-serif">Sponsorships, PR and Networking</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="events_queries" tabindex="-1" role="dialog" aria-labelledby="events_queries" aria-hidden="true">
			<div class="modal-dialog" style="width:40%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1>Events</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<h4>SIDDHARTH DIALANI</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact :
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail :
								</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="student_relations" tabindex="-1" role="dialog" aria-labelledby="student_relations" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 >Student Relations</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- modals for boxes end -->
	</body>
	
	<!-- JS -->
	<?php include 'foot.php' ?>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<script>
		$(document).ready(function() {
			/* GoogleMaps code start */
			function initialize() {
				var map_canvas = document.getElementById('map_canvas');
				var map_options = {
					center: new google.maps.LatLng(13.006387, 80.24258),
					zoom: 16,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(map_canvas, map_options)
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			/* GoogleMaps code end */
		});
	</script>
</html>