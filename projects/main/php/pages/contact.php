<!DOCTYPE html>
<html>
	<head>

		<title>Contact Us | Shaastra 2015</title>

		<?php include '../base/head.php' ?>
		<style>
		.btn.btn-bluebox {
		    background-color: rgba(14, 99, 133, 0.5);
		    height : 100%;
		    display: table-cell;
		    vertical-align: middle;
		    text-align: center;
		    border-radius: 0px;
		}

		.btn.btn-bluebox:hover,
		.btn.btn-bluebox:focus,
		.btn.btn-bluebox:active,
		.btn.btn-bluebox.active {
		    color: #ffffff;
		    background-color: rgba(14, 99, 133, 1);
		    border-color: #285e8e;
		}


		.hr {
		    display: block;
		    margin: 0 auto;
		    height: 5px;
		    width: 35%;
		}

		textarea {
		    width: 100%;
		    min-height: 100px;
		    font-size: 18px;
		    color: #444;
		    padding: 5px;
		    word-wrap: break-word;
		    resize: vertical;
		}

		.left-inner-addon {
		    position: relative;
		}
		.left-inner-addon input,
		.left-inner-addon textarea {
		    padding-left: 30px;
		}
		.left-inner-addon i {
		    position: absolute;
		    padding: 10px 10px;
		    pointer-events: none;
		}

		.right-inner-addon {
		    position: relative;
		}
		.right-inner-addon input {
		    padding-right: 30px;
		}
		.right-inner-addon i {
		    position: absolute;
		    right: 0px;
		    padding: 10px 12px;
		    pointer-events: none;
		}
		</style>

	</head>

	<body>
		<?php include '../base/menu.php' ?>
		<div class="container-fluid title white centered" style="margin-bottom:2%;">
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

		<div class="container-fluid" style="height:100%;">
			<div class="row white" style="height : 70%;">
				<div class="col-md-5 col-md-offset-1" style="height : 100%;">
					<div class="container-fluid text-center white" style="height : 100%;">
						<div class="row" style="padding: 0.3%; height : 50%;">
							<div
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#co-curricular">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
										Co-Curricular<br />
										Affairs<br />
										Secretary
										</span>
									</span>
								</span>
							</div>

							<div
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#spons_pr">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Sponsorships,<br />
											PR and<br />
											Networking
										</span>
									</span>
								</span>
							</div>
						</div>

						<div class="row" style="padding: 0.3%; height : 50%;">
							<div
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#events_queries">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Event<br />
											Queries
										</span>
									</span>
								</span>
							</div>

							<div
								class="btn btn-lg btn-bluebox col-lg-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#student_relations">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Student<br />
											Relations
										</span>
									</span>
								</span>
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
								<a class="social-icon facebook" href="https://www.facebook.com/Shaastra"></a>
							</div>
							<div class="col-xs-2">
								<a class="social-icon twitter" href="https://twitter.com/ShaastraIITM"></a>
							</div>
							<div class="col-xs-2">
								<a class="social-icon google" href="https://www.youtube.com/user/iitmshaastra"></a>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<button class="btn btn-lg btn-primary" style="margin-top: 2%" data-toggle="modal" data-target="#comments">
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
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Leave us a message</h1>
						</div>
					</div>
					<div class="modal-body">
					<form name='contact' action='../scripts/contact_submit.php' method='post'>
						<div class="row">
							<div class="input-group margin-bottom-5 col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" name='name' class="form-control" placeholder="Name" required/>
							</div>
						</div>
						<div class="row">
							<div class="input-group margin-bottom-5 col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="text" name='email' class="form-control" placeholder="Email ID" required/>
							</div>
						</div>
						<div class="row">
							<div class="input-group margin-bottom-5 col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-phone"></span>
								</span>
								<input type="tel" name='mobile' class="form-control" placeholder="Mobile (optional)"/>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
								<textarea id="comments" name='msg' rows="3" class="form-control" placeholder="Your Message..." required></textarea>
							</div>
						</div>
					</form>
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
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Secretary</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h4>SIDDHARTH DIALANI</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact : 9884308764
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail : siddharth@shaastra.org
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
			<div class="modal-dialog" >
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="msg">
							<h1 class="text-center" style="color:black; font-family: 'Dosis', sans-serif">Sponsorships, PR and Networking</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h4>SHUBHAM JAIN</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact : 9962035992
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail : shubham@shaastra.org
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h4>NEHA ASHOK</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact : 9840922780
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail : neha@shaastra.org
								</p>
							</div>
						</div>

						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h4>DEVAANSH SAMANT</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact : 9871077607
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail : devaansh@shaastra.org
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
		<div class="modal fade" id="events_queries" tabindex="-1" role="dialog" aria-labelledby="events_queries" aria-hidden="true">
			<div class="modal-dialog" style="width:40%">
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Events</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 text-center">
								<h4>SHIVAPRASAD TR</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact : 9176014050
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail : trshivaprasad@gmail.com
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
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Student Relations</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>NAMIT CHAUDHARY</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9962878704
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : namit@shaastra.org
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

		<!-- JS -->
		<?php include '../base/foot.php' ?>
		<script src="https://maps.googleapis.com/maps/api/js"></script>

		<script>
			$(document).ready(function() {
				$("#contact-menu").addClass("current_page");
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
	</body>

</html>
