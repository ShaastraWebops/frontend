<?php include '../../php/base/logmein.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Hospitality | Shaastra 2015</title>
		<meta name="keywords" content="hospitality shaastra 2015,hospitality shaastra,shaastra hospi">
        <meta name"description" content="We, the Hospitality team at Shaastra have pledged to leave no stone unturned to ensure that your stay with us is enjoyable and comfortable.">
		<?php include '../../php/base/head.php' ?>
		<style type="text/css">
			.hospi_row > div {
				margin: 1em;
				/*border-bottom: 1px solid #fff;*/
			}
			.panel-heading a {
				color: #000;
			}
			.panel-heading a:hover {
				color: #555;
				text-decoration: none;
			}
			.muted {
				color: #888;
				font-size: 80%;
			}
		</style>
	</head>

	<body>
		<?php $back="../../php/pages/home.php"; include '../../php/base/menu.php' ?>
		<div class="container-fluid white centered">
	        <div class="row">
	            <div class="col-xs-12">
	                <h1 class="text-center title">Accomodation</h1>
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
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h3>Accomodation Calculator</h3>
                    <br />
                    For any accomodation related queries, please contact <a href='mailto:namit@shaastra.org'>namit@shaastra.org</a>
                    <br />
                </div>
            </div>
			<div class="row">
                <div class="row row-centered error-msg" style="padding: 1em; display: none;">
                    <div class="col-md-6 text-center col-centered">
                        <div class="alert alert-danger">
                            <span class="bold">Error </span>
                            <span class="text">There was an error</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-sm-offset-3 text-justify">
                    <form role="form">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="email" class="col-md-6 text-right">Number of boys</label>
                                <div class="col-md-6 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input type="number" min="0" name="boys" class="form-control" id="boys" placeholder="" value="0">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="col-md-6 text-right">Number of girls</label>
                                <div class="col-md-6 input-group">
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-user"></span>
                                    </span>
                                    <input type="number" min="0" name="girls" class="form-control" id="girls" placeholder="" value="0">
                                </div>
                            </div>
                        </div>
                        <br /><br class="hiden-sm hidden-xs" /><br class="hiden-xs hidden-sm" />
                        <div class="form-group">
                            <label for="days" class="col-md-4 text-right col-md-offset-2">Number of days to book for</label>
                            <div class="col-md-2 input-group">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                                <input type="number" min="1" class="form-control" name="days" id="days" placeholder="" value="1">
                            </div>
                        </div>
                        <br /><br class="hiden-sm hidden-xs" /><br class="hiden-xs hidden-sm" />
                        <div class="form-group disabled">
                            <label for="cost" class="col-md-2 col-md-offset-4 text-right">Final Cost</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="cost" name="cost" value="0" disabled>
                            </div>
                        </div>
                        <br />
                        <div class="white" style="text-align: center">
                            <span id="help" class=""></span>
                        </div>
                        <!-- <br /><br class="hiden-sm hidden-xs" /><br class="hiden-xs hidden-sm" />
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div> -->
                    </form>
                </div>
            </div>
		</div>
		<?php include '../../php/base/foot.php' ?>
        <script>
            function calc() {
                var boys = parseInt($('#boys').val());
                var girls = parseInt($('#girls').val());
                var people = boys + girls;
                var days = parseInt($('#days').val());
                var caution_deposit = 0
                if ( boys < 0 || girls < 0 || people < 0 ) {
                    $('.error-msg').show()
                        .find(".text").html("We got invalid data. <br /> The number of people in your team cannot be negative")
                    $('#cost').val("ERROR")
                    return 0
                } else if ( people == 0 ) {
                    caution_deposit = 0
                } else if ( people == 1 )
                    caution_deposit = 700
                else if ( people <= 3)
                    caution_deposit = 1400
                else if ( people <= 5 )
                    caution_deposit = 2100
                else {
                    $('.error-msg').show()
                        .find(".text").html("You can register for 5 people at a time. <br />In case your team consists of more than 5 people, please complete payment for 5 people and do this process once again for the remaining.")
                    $('#cost').val("ERROR")
                    $("#help").val("Only 5 people at a time !")
                    return 1
                }
                var cost = people * days * 250 + 200 * people + caution_deposit
                if ( people == 0 ) {
                    $("#cost").val("0")
                    $("#help").html("")
                } else {
                    $("#cost").val(cost.toString())
                    $("#help").html("Caution Deposit : Rs. <u>" + caution_deposit.toString() + "</u> - <b>This will be returned to you when you leave</b>")
                }
                console.log(cost)
                return 0
            }
            $(document).ready(function() {
                $("#boys").change(calc)
                $("#girls").change(calc)
                $("#days").change(calc)
            })
        </script>
	</body>
</html>
