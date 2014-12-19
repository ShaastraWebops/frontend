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
            .error {
                border-color: #a94442;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                box-shadow: inset 0 1px;
                border-color: #843534;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;
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
                            <span class="bold">Error :  </span>
                            <span class="text">There was an error</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-offset-2 text-justify">
                    <form role="form" class="form-horizontal" id="calc">
                        <center><h3>Enter Shaastra IDs and date of stay </h3></center>
                        <br /><hr /><br />
                        <?php for ( $i = 0; $i < 5; $i++ ) { ?>
                            <div class="form-group">
                                <div class="col-md-12 person_<?php echo $i+1; ?> person">
                                    <div class="col-md-2">
                                        #<?php echo $i+1; ?> &nbsp;&nbsp;
                                        <select type="select" name="gender_<?php echo $i+1; ?>" class="form-control gender" style="width : 70%; display: inline-block">
                                            <option value="X" selected>-------</option>
                                            <option value="M">Male  </option>
                                            <option value="F">Female </option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="shid_<?php echo $i+1; ?>" class="form-control shid" placeholder="Shaastra ID" value="">
                                    </div>
                                    <label for="shid" class="col-md-1 text-right">From</label>
                                    <div class="col-md-3">
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="start_date_<?php echo $i+1; ?>" class="form-control date start" placeholder="Date" value="">
                                        </div>
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="start_time_<?php echo $i+1; ?>" class="form-control time start" placeholder="Time" value="">
                                        </div>
                                    </div>
                                    <label for="shid" class="col-md-1 text-right">To</label>
                                    <div class="col-md-3">
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="end_date_<?php echo $i+1; ?>" class="form-control date end" placeholder="Date" value="">
                                        </div>
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="end_time_<?php echo $i+1; ?>" class="form-control time end" placeholder="Time" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php  } ?>
                        <br /><hr /><br />
                        <div class="form-group disabled">
                            <label for="cost" class="col-md-4 col-md-offset-1 text-right cost-text">Final Cost</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="cost" name="cost" value="0" disabled>
                            </div>
                            <button type="submit" class="btn btn-primary col-md-2">&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                        <br />
                        <div class="white" style="text-align: center">
                            <span id="help" class=""></span>
                        </div>
                        <div class="row" style="height: 30px"></div>
                    </form>
                </div>
            </div>
		</div>

		<?php include '../../php/base/foot.php' ?>

        <link rel="stylesheet" type="text/css" href="../../css/jquery.timepicker.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-datepicker.css" />
        <script type="text/javascript" src="../../js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="../../js/jquery.timepicker.js"></script>
        <script type="text/javascript" src="../../js/datepair.js"></script>

        <script>
            var people = 0, days = [0,0,0,0,0], totaldays, err_msg = "";
            function calc() {
                for ( var i = 0; i < $('.person').length; i+=1 ) {
                    var $el = $($('.person')[i]);
                    if ( $el.find(".shid").val().length ) {
                        var msg = "", err_gender = 0, err_date = 0;
                        if ( $el.find(".gender option:selected").val() == "X" ) {
                            err_gender = 1
                        }
                        if ( datepair[i].getTimeDiff() == 0 ) { // Time is messed up
                            err_date = 1
                        }
                        if ( err_date && err_gender ) {
                            err_msg += "<li>Member " + (i+1) + " : gender and date/time invalid</li>"
                            continue;
                        } else if ( err_date ) {
                            err_msg += "<li>Member " + (i+1) + " : dates and time entered are invalid</li>"
                            continue;
                        } else if ( err_gender ) {
                            err_msg += "<li>Member " + (i+1) + " : gender needs to be filled</li>"
                            continue;
                        }
                        people += 1;
                        days[i] = datepair[i+1].dateDelta / 24 / 60 / 60 / 1000; // dateDelta was in millis
                        totaldays += days[i];
                    }
                }
                console.log("people : " + people + "  days : " + days)
                if ( err_msg != "" ) {
                    $('#cost').val("ERROR")
                    $('.error-msg').show().find(".text")
                            .html("We got some invalid data : <ul style='text-align: left'>" + err_msg + "</ul>")
                    return 1
                }
                var caution_deposit = 0

                if ( people < 0 ) {
                    $('.error-msg').show()
                        .find(".text").html("We got invalid data. <br /> The number of people in your team cannot be negative")
                    $('#cost').val("ERROR")
                    return 0
                } else if ( people == 0 ) {
                    // $('.error-msg').show()
                    //     .find(".text").html("Please input the information for atleast 1 person to pay for")
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
                var cost = totaldays * 250 + 200 * people + caution_deposit
                console.log(cost)
                if ( people == 0 ) {
                    $("#cost").val("0")
                    $("#help").html("")
                } else {
                    $("#cost").val(cost.toString())
                    $("#help").html("Caution Deposit : Rs. <u>" + caution_deposit.toString() + "</u> - <b>This will be returned to you when you leave</b>")
                }
                return 0
            }
            var datepair = [null, null, null, null, null];
            $(document).ready(function() {
                $("#boys").change(calc)
                $("#girls").change(calc)
                $("#days").change(calc)
                $('#calc .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $('#calc .date').datepicker({
                    'format': 'yyyy-mm-dd',
                    'autoclose': true
                });

                // initialize datepair

                for ( var i = 0; i < 5; i+=1 ) {
                    datepair[i] = new Datepair($('.person_' + (i+1))[0]);
                }

            })

        </script>
	</body>
</html>
