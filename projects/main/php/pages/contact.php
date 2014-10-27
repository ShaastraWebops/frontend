<?php include '../../php/base/logmein.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us | Shaastra 2015</title>

		<?php include '../../php/base/head.php' ?>
		<style>
		.btn.btn-bluebox {
		    background-color: rgba(14, 99, 133, 0.5);
		    height : 5em;
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
		/* Social Icons used in places */
		a.social-icon {
			margin:5px 5px 0px 5px;
			padding:0px 0px 0px 0px;
			width:60px;
			height:60px;
			float:left;
			text-indent:-99999px;
			background: #191919;
			border:solid 1px #222121;
			-moz-border-radius-topleft: 5px;
			-moz-border-radius-topright:5px;
			-moz-border-radius-bottomleft:5px;
			-moz-border-radius-bottomright:5px;
			-webkit-border-top-left-radius:5px;
			-webkit-border-top-right-radius:5px;
			-webkit-border-bottom-left-radius:5px;
			-webkit-border-bottom-right-radius:5px;
			border-top-left-radius:5px;
			border-top-right-radius:5px;
			border-bottom-left-radius:5px;
			border-bottom-right-radius:5px;
			border: 2px solid #fff;
			border: 2px outset rgba(255, 255, 255, 0.8);
		}
		a.social-icon.facebook {
			background: #191919 url(../../img/icons/facebook.png) no-repeat -0px -88px;
			-webkit-transition:All 0.3s ease-out;
			-moz-transition:All 0.3s ease-out;
			-o-transition:All 0.3s ease-out;
            background-size: 60px 150px;
		}
		a.social-icon.facebook:hover {
			background-position: -0px -0px;
		}
		a.social-icon.twitter {
			background: #191919 url(../../img/icons/twitter.png) no-repeat -0px -88px;
			-webkit-transition:All 0.3s ease-out;
			-moz-transition:All 0.3s ease-out;
			-o-transition:All 0.3s ease-out;
            background-size: 60px 150px;
		}
		a.social-icon.twitter:hover {
			background-position: -0px -0px;
		}
		a.social-icon.youtube {
			background: #191919 url(../../img/icons/youtube.png) no-repeat -0px -88px;
			-webkit-transition:All 0.3s ease-out;
			-moz-transition:All 0.3s ease-out;
			-o-transition:All 0.3s ease-out;
            background-size: 60px 150px;
		}
		a.social-icon.youtube:hover {
			background-position: -0px -0px;
		}
		a.social-icon.google {
			background:#191919 url(../../img/icons/google.png) no-repeat -0px -88px;
			-webkit-transition:All 0.3s ease-out;
			-moz-transition:All 0.3s ease-out;
			-o-transition:All 0.3s ease-out;
		}
		a.social-icon.google:hover {
			background-position: -0px -0px;
		}
		</style>

	</head>

	<body>
		<?php $back="../../php/pages/home.php"; include '../../php/base/menu.php' ?>
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
				<div class="col-md-5 col-md-offset-1 col-xs-offset-1" style="height : 100%;">
					<div class="container-fluid text-center white" style="height : 100%;">
						<div class="row" style="padding: 0.3%;">
							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#co-curricular">
								<span style="display:table; height:100%; width:100%;" class="vertical-table">
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
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#spons_pr">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Sponsorship<br />
											&amp;<br />
											Public Relations
										</span>
									</span>
								</span>
							</div>
							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#events">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Events
										</span>
									</span>
								</span>
							</div>

							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#student_relations">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Student Relations
										</span>
									</span>
								</span>
							</div>

							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#design">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Design
										</span>
									</span>
								</span>
							</div>
							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#evolve">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Lectures </br>
                                            and </br>
                                            Exhibitions
										</span>
									</span>
								</span>
							</div>
							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#facilities">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Facilities
										</span>
									</span>
								</span>
							</div>
							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#qms">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Quality </br>
                                            Management </br>
                                            Systems
										</span>
									</span>
								</span>
							</div>

							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#finance_catering">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Finance &amp; Catering
										</span>
									</span>
								</span>
							</div>

							<div
								class="btn btn-lg btn-bluebox col-sm-5 col-xs-12"
								style="margin: 1px;"
								data-toggle="modal"
								data-target="#envisage">
								<span style="display:table; height:100%; width:100%;">
									<span style="display:table-cell; height:100%; vertical-align:middle;">
										<span>
											Envisage
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
						<div class="row row-centered">
							<div class="col-xs-2 col-centered">
								<a class="social-icon facebook" href="https://www.facebook.com/Shaastra"></a>
							</div>
							<div class="col-xs-2 col-centered">
								<a class="social-icon twitter" href="https://twitter.com/ShaastraIITM"></a>
							</div>
							<div class="col-xs-2 col-centered">
								<a class="social-icon youtube" href="https://www.youtube.com/user/iitmshaastra"></a>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<button class="btn btn-lg btn-primary" style="margin-top: 2%; outline: none" data-toggle="modal" data-target="#comments">
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
					<form name='contact' action='../../php/scripts/contact_submit.php' method='post'>
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
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" style="outline: none">Submit</button>
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
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
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
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="events" tabindex="-1" role="dialog" aria-labelledby="events" aria-hidden="true">
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
									E-Mail : shiva@shaastra.org
								</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
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
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="design" tabindex="-1" role="dialog" aria-labelledby="design" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Design</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>ASHAY MAKIM</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9043812193
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : ashay@shaastra.org
									</p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>AKSHAT DAVE</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 8939565908
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : akshat@shaastra.org
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="evolve" tabindex="-1" role="dialog" aria-labelledby="evolve" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Evolve</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>VEDANT TRIVEDI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9677152600
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : vedant@shaastra.org
									</p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>KISHORE KOTHANDARAMAN</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9487917918
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : kishore@shaastra.org
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="facilities" tabindex="-1" role="dialog" aria-labelledby="facilities" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Facilities</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>ABHISHEK SHARMA</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9940116444
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : abhishek@shaastra.org
									</p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>MAYANK SINGH</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9500171039
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : mayank@shaastra.org
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="qms" tabindex="-1" role="dialog" aria-labelledby="qms" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">QMS</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>DHRUVA KATREKAR</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9962303153
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : dhruva@shaastra.org
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="finance_catering" tabindex="-1" role="dialog" aria-labelledby="finance_catering" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Finance &amp; Catering</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>VINAY CHITTETI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 7845604564
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : vinay@shaastra.org
									</p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>NAVEEN VELLIMUTTAM</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 99632305052
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : naveen@shaastra.org
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="envisage" tabindex="-1" role="dialog" aria-labelledby="envisage" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content black">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Envisage</h1>
						</div>
					</div>

					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>SANDEEP KRISHNA</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 9789808683
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : sandeep@shaastra.org
									</p>
								</div>
							</div>
							<div class="col-md-12">
								<div class="col-md-8 col-md-offset-2 text-center">
									<h4>YASHWANTH VELIDI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact : 8754532969
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail : yashwanth@shaastra.org
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" style="outline: none" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		<!-- modals for boxes end -->

		<!-- JS -->
		<?php include '../../php/base/foot.php' ?>
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
