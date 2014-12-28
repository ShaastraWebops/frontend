<?php include '../../php/base/logmein.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Hospitality | Shaastra 2015</title>
		<meta name="keywords" content="hospitality shaastra 2015,hospitality shaastra,shaastra hospi,iitm,techfest,chennai,madras,accomodation">
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
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <a href="http://www.thehindugroup.in/subscribe"><img src="../../img/logo/hindu_subscription.jpg" style="width: 100%" /></a>
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
                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] >= 0 ) { ?>
                <div class="col-sm-10 col-sm-offset-1 text-justify">
                    <form role="form" class="form-horizontal" id="calc" submit="#">
                        <!-- <center><h3>Enter Shaastra IDs and date of stay </h3></center> -->
                        <br /><hr /><br />
                        <?php for ( $i = 0; $i < 7; $i++ ) { ?>
                            <div class="form-group">
                                <div class="col-md-12 person_<?php echo $i+1; ?> person">
                                    <div class="col-md-2">
                                        <div class="col-md-1" style="padding: 0">#<?php echo $i+1; ?></div>
                                        <div class="col-md-11">
                                            <select type="select" name="gender_<?php echo $i+1; ?>" class="form-control gender">
                                                <option value="X" selected>-------</option>
                                                <option value="M">Male  </option>
                                                <option value="F">Female </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" name="shid_<?php echo $i+1; ?>" class="form-control shid" placeholder="Shaastra ID" value="">
                                    </div>
                                    <label for="shid" class="col-md-1 text-right">From</label>
                                    <div class="col-md-2">
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="start_date_<?php echo $i+1; ?>" class="form-control date start" placeholder="Date" value="">
                                        </div>
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="start_time_<?php echo $i+1; ?>" class="form-control time start" placeholder="Time" value="">
                                        </div>
                                    </div>
                                    <label for="shid" class="col-md-1 text-right">To</label>
                                    <div class="col-md-2">
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="end_date_<?php echo $i+1; ?>" class="form-control date end" placeholder="Date" value="">
                                        </div>
                                        <div class="col-md-6" style="padding : 0 2px;">
                                            <input type="text" name="end_time_<?php echo $i+1; ?>" class="form-control time end" placeholder="Time" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h4><span class="label label-danger valid" style="display:none">Invalid</span></h4>
                                    </div>
                                </div>
                            </div>
                        <?php  } ?>
                        <br /><hr /><br />
                        <div class="form-group disabled">
                            <label for="cost_m" class="col-md-3 text-right costm-text">Male Hostel Cost</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="cost_m" name="cost_m" value="0" disabled>
                            </div>
                            <label for="cost_f" class="col-md-3 text-right costf-text">Female Hostel Cost</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="cost_f" name="cost_f" value="0" disabled>
                            </div>
                        </div>
                        <div class="white" style="text-align: center">
                            <div class="col-md-6 text-center">
                                <span id="help_m" class=""></span>
                            </div>
                            <div class="col-md-6 text-center">
                                <span id="help_f" class=""></span>
                            </div>
                        </div>
                        <br /><br /><br />
                        <div class="form-group disabled">
                            <label for="cost" class="col-md-4 col-md-offset-1 text-right cost-text">Final Cost</label>
                            <div class="col-md-2">
                                <input class="form-control" type="text" id="cost" name="cost" value="0" disabled>
                            </div>
                            <button class="submit btn btn-primary col-md-2">&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;</button>
                        </div>
                        <br />
                        <div class="white" style="text-align: center">
                            <span id="help" class=""></span>
                        </div>
                        <div class="row" style="height: 30px"></div>
                    </form>
                </div>
                <?php } else { ?>
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h3> You need to login first. Please go to the <a href="../../php/pages/login.php">login page</a> and then return here.</h3>
                    </div>
                <?php } ?>
            </div>
		</div>

		<?php include '../../php/base/foot.php' ?>
        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] >= 0 ) { ?>

        <link rel="stylesheet" type="text/css" href="../../css/jquery.timepicker.css" />
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap-datepicker.css" />
        <script type="text/javascript" src="../../js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="../../js/jquery.timepicker.js"></script>
        <script type="text/javascript" src="../../js/datepair.js"></script>

        <script>
            var people_f = 0, days_f = [0,0,0,0,0,0,0], totaldays_f, err_msg = "";
            var people_m = 0, days_m = [0,0,0,0,0,0,0], totaldays_m;
            function date_checker() {
                for ( var i = 0; i < 7; i++ ) {
                    console.log(datepair[i].startDateInput.value)
                    var changed = false
                    if ( datepair[i].startDateInput.value == "" || 
                        datepair[i].startDateInput.value < "2015-01-02" ) {
                        datepair[i].startDateInput.value = "2015-01-02"
                        changed = true
                    }
                    if ( datepair[i].endDateInput.value == "" || 
                        datepair[i].endDateInput.value > "2015-01-06" ) {
                        datepair[i].endDateInput.value = "2015-01-06"
                        changed = true
                    }
                    if ( datepair[i].endDateInput.value == "2015-01-06" && 
                        datepair[i].endTimeInput.value.indexOf("pm") != -1 && 
                        parseInt(datepair[i].endTimeInput.value) > 6) {
                        datepair[i].endTimeInput.value = "6:30pm"
                        changed = true
                    }
                    if ( changed ) {
                        $(".person_" + (i+1)).trigger('change')
                    }
                }
            }
            function calc() {
                err_msg = ""
                totaldays_m = 0
                totaldays_f = 0
                people_m = 0
                people_f = 0
                for ( var i = 0; i < $('.person').length; i+=1 ) {
                    var $el = $($('.person')[i]);

                    if ( $el.find(".shid").val().length ) {
                        var msg = "", err_gender = 0, err_date = 0, show_invalid = false, male = false;
                        if ( datepair[i].startDateInput.value != "" && datepair[i].endDateInput.value != "" && datepair[i].startTimeInput.value != "" && datepair[i].endTimeInput.value != "")
                            show_invalid = true
                        if ( $el.find(".gender option:selected").val() == "X" ) {
                            err_gender = 1
                        } else if ($el.find(".gender option:selected").val() == "M") {
                            male = true
                        } else if ($el.find(".gender option:selected").val() == "F") {
                            male = false
                        }   
                        if ( datepair[i].getTimeDiff() <= 0 ) { // Time is messed up
                            err_date = 1
                        }
                        if ( err_date && err_gender ) {
                            err_msg += "<li>Member " + (i+1) + " : <b>Gender</b> and <b>date/time</b> invalid</li>"
                            if ( show_invalid ) $el.find(".valid").show().removeClass("label-success").addClass("label-danger").text("Invalid")
                            days_m[i] = 0; days_f[i] = 0
                            continue;
                        } else if ( err_date ) {
                            err_msg += "<li>Member " + (i+1) + " : <b>Date and time</b> entered are invalid</li>"
                            if ( show_invalid ) $el.find(".valid").show().removeClass("label-success").addClass("label-danger").text("Invalid")
                            days_m[i] = 0; days_f[i] = 0
                            continue;
                        } else if ( err_gender ) {
                            err_msg += "<li>Member " + (i+1) + " : <b>Gender</b> needs to be filled</li>"
                            if ( show_invalid ) $el.find(".valid").show().removeClass("label-success").addClass("label-danger").text("Invalid")
                            days_m[i] = 0; days_f[i] = 0
                            continue;
                        }
                        if ( datepair[i].startDateInput.value != "" &&
                            datepair[i].startDateInput.value < "2015-01-02" ) {
                            err_msg += "<li>Member " + (i+1) + " : <b>Start Date</b> doesnt fall within Shaastra dates (3rd to 6th January 2015)</li>"
                            if ( show_invalid ) $el.find(".valid").show().removeClass("label-success").addClass("label-danger").text("Invalid")
                            days_m[i] = 0; days_f[i] = 0
                            continue;
                        }
                        if ( datepair[i].endDateInput.value != "" &&
                            datepair[i].endDateInput.value > "2015-01-06" ) {
                            err_msg += "<li>Member " + (i+1) + " : <b>End Date</b> doesnt fall within Shaastra dates (3rd to 6th January 2015)</li>"
                            if ( show_invalid ) $el.find(".valid").show().removeClass("label-success").addClass("label-danger").text("Invalid")
                            days_m[i] = 0; days_f[i] = 0
                            continue;
                        }
                        if ( datepair[i].endDateInput.value == "2015-01-06" && 
                            datepair[i].endTimeInput.value.indexOf("pm") != -1 && 
                            parseInt(datepair[i].endTimeInput.value) > 6) {
                            err_msg += "<li>Member " + (i+1) + " : <b>End Date/Time</b> - We only allow stay upto 6pm on 6th December 2015</li>"
                            if ( show_invalid ) $el.find(".valid").show().removeClass("label-success").addClass("label-danger").text("Invalid")
                            days_m[i] = 0; days_f[i] = 0
                            continue;
                        }
                        
                        if ( male ) {
                            people_m += 1;
                            days_m[i] = datepair[i].dateDelta / 24 / 60 / 60 / 1000; // dateDelta was in millis
                            if ( datepair[i].timeDelta > 0 ) {
                                days_m[i] += 1
                            }   
                            totaldays_m += days_m[i];
                            days = days_m[i]
                        } else {
                            people_f += 1;
                            days_f[i] = datepair[i].dateDelta / 24 / 60 / 60 / 1000; // dateDelta was in millis
                            if ( datepair[i].timeDelta > 0 ) {
                                days_f[i] += 1
                            }   
                            days = days_f[i]
                            totaldays_f += days_f[i];
                        }
                        $el.find(".valid").show().addClass("label-success").removeClass("label-danger").text("Valid" + " : " + days + " day(s)")
                    } else {
                        $el.show().find(".valid").removeClass("label-success").addClass("label-danger").text("Invalid")
                    }
                }
                console.log("people_m : " + people_m + "  days : " + days_m)
                console.log("people_f : " + people_f + "  days : " + days_f)
                // console.log(err_msg)
                if ( err_msg != "" ) {
                    $('#cost_f').val("ERROR")
                    $('#cost_m').val("ERROR")
                    $('#cost').val("ERROR")
                    $('.error-msg').show(300)
                        .find(".alert").removeClass("alert-success").addClass("alert-danger")
                    $('.error-msg').find(".text")
                        .html("We got some invalid data : <ul style='text-align: left'>" + err_msg + "</ul>")
                    return 1
                } else {
                    $('.error-msg').hide(300).find(".text").html("")
                    $('#cost_f').val(0)
                    $('#cost_m').val(0)
                    $('#cost').val(0)
                }
                var caution_deposit_m = 0

                if ( people_m < 0 ) {
                    $('.error-msg').show()
                        .find(".text").html("We got invalid data. <br /> The number of people in your team cannot be negative")
                    $('#cost_f').val("ERROR")
                    $('#cost_m').val("ERROR")
                    $('#cost').val("ERROR")
                    return 0
                } else if ( people_m == 0 ) {
                    caution_deposit_m = 0
                } else if ( people_m == 1 )
                    caution_deposit_m = 700
                else if ( people_m <= 3)
                    caution_deposit_m = 1400
                else if ( people_m <= 5 )
                    caution_deposit_m = 2100
                else if ( people_m <= 6 )
                    caution_deposit_m = 2800
                else if ( people_m <= 7 )
                    caution_deposit_m = 3500
                else {
                    $('.error-msg').show()
                        .find(".text").html("You can register for 5 people at a time. <br />In case your team consists of more than 5 people, please complete payment for 7 people and do this process once again for the remaining.")
                    $('#cost').val("ERROR")
                    $("#help").val("Only 7 people at a time !")
                    return 1
                }
                var cost_m = totaldays_m * 300 + caution_deposit_m
                // console.log("days : " + totaldays + " people : " + people + " caution : " + caution_deposit + " cost : " + cost)
                if ( people_m == 0 ) {
                    $("#cost_m").val("0")
                    $("#help_m").html("")
                } else {
                    $("#cost_m").val(cost_m.toString())
                    $("#help_m").html("Caution Deposit : Rs. <u>" + caution_deposit_m.toString() + "</u> - <b>This will be returned to you when you leave</b>")
                }

                if ( people_f < 0 ) {
                    $('.error-msg').show()
                        .find(".text").html("We got invalid data. <br /> The number of people in your team cannot be negative")
                    $('#cost_m').val("ERROR")
                    $('#cost_f').val("ERROR")
                    $('#cost').val("ERROR")
                    return 0
                } else if ( people_f == 0 ) {
                    caution_deposit_f = 0
                } else if ( people_f == 1 )
                    caution_deposit_f = 700
                else if ( people_f <= 3)
                    caution_deposit_f = 1400
                else if ( people_f <= 5 )
                    caution_deposit_f = 2100
                else if ( people_f <= 6 )
                    caution_deposit_f = 2800
                else if ( people_f <= 7 )
                    caution_deposit_f = 3500
                else {
                    $('.error-msg').show()
                        .find(".text").html("You can register for 5 people at a time. <br />In case your team consists of more than 5 people, please complete payment for 7 people and do this process once again for the remaining.")
                    $('#cost').val("ERROR")
                    $("#help").val("Only 7 people at a time !")
                    return 1
                }
                var cost_f = totaldays_f * 300 + caution_deposit_f
                // console.log("days : " + totaldays + " people : " + people + " caution : " + caution_deposit + " cost : " + cost)
                if ( people_f == 0 ) {
                    $("#cost_f").val("0")
                    $("#help_f").html("")
                } else {
                    $("#cost_f").val(cost_f.toString())
                    $("#help_f").html("Caution Deposit : Rs. <u>" + caution_deposit_f.toString() + "</u> - <b>This will be returned to you when you leave</b>")
                }

                var cost = cost_f + cost_m
                var caution_deposit = caution_deposit_f + caution_deposit_m
                if ( people_f + people_m == 0 ) {
                    $("#cost").val("0")
                    $("#help").html("")
                } else {
                    $("#cost").val(cost.toString())
                    $("#help").html("Caution Deposit : Rs. <u>" + caution_deposit.toString() + "</u> - <b>This will be returned to you when you leave</b>")
                }

                return 0
            }
            var datepair = [null, null, null, null, null, null, null];
            $(document).ready(function() {
                // initialize datepair
                $('#calc .date').datepicker({
                    'format': 'yyyy-mm-dd',
                    'autoclose': true
                });
                for ( var i = 0; i < 7; i+=1 ) {
                    datepair[i] = new Datepair($('.person_' + (i+1))[0]);
                }

                $(".person input").keyup(calc)
                $(".person").on("rangeSelected", calc)
                $('#calc .time').timepicker({
                    'showDuration': true,
                    'timeFormat': 'g:ia'
                });

                $(".submit").click(function(e) {
                    e.preventDefault()
                    var $el = $(this)
                    var $form = $(this).closest("form")
                    var json_info = {}
                    for ( var i = 0; i < $('.person').length; i+=1 ) {
                        var $el = $('.person_' + (i+1));
                        if ( $el.find(".valid").hasClass("label-success") && !$el.find(".valid").hasClass("label-danger") ) {
                            json_info["shid_" + (i+1)] = $el.find(".shid").val()
                            json_info["start_date_" + (i+1)] = $el.find(".start.date").val()
                            json_info["start_time_" + (i+1)] = $el.find(".start.time").val()
                            json_info["end_date_" + (i+1)] = $el.find(".end.date" ).val()
                            json_info["end_time_" + (i+1)] = $el.find(".end.time").val()
                            json_info["gender_" + (i+1)] = $el.find(".gender").val()
                        }
                    }

                    // console.log(json_info)
                    $.ajax({ // UPLOAD
                        type: "POST",
                        url: "<?php echo $ERP_SITE_URL; ?>api/mobile/accom/", //<?php echo $_SESSION['user_id']; ?>/",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                        },
                        cache: false,
                        data: json_info
                    }).done(function(res) {
                        console.log(res)
                        // data = JSON.parse(res.data)
                        console.log(data)
                        console.log("yohoho")
                        $('.error-msg').show(300)
                            .find(".alert").addClass("alert-success").removeClass("alert-danger")
                        $('.error-msg').find(".text")
                            .html("SUCCESS")
                        // $('html, body').animate({scrollTop : 0},800);
                    }).fail(function(xhr) {
                        console.log(xhr.status)
                        if ( xhr.status == 500 ) {
                            $('.error-msg').show(300)
                                .find(".alert").removeClass("alert-success").addClass("alert-danger")
                            $('.error-msg').find(".text")
                                .html("There was an error. Error Status : " + xhr.status  + ". If it persists, tell the <a href='mailto:webops@shaastra.org'>webops team</a> with the error code ACCOM_500")
                            $('html, body').animate({scrollTop : 0},800);
                        } else if ( xhr.status == 404 ) {
                            $('.error-msg').show(300)
                                .find(".alert").removeClass("alert-success").addClass("alert-danger")
                            $('.error-msg').find(".text")
                                .html("There was an error. Error Status : " + xhr.status  + ". If it persists, tell the <a href='mailto:webops@shaastra.org'>webops team</a> with the error code ACCOM_404")
                            $('html, body').animate({scrollTop : 0},800);
                        } else if ( xhr.status == 400 ) {
                            $('.error-msg').show(300)
                                .find(".alert").removeClass("alert-success").addClass("alert-danger")
                            
                            var data = xhr.responseJSON
                            console.log(data)
                            var msg = "<b>Some errors were found in your submission</b> <br />" + data.message;
                            
                            $('.error-msg').find(".text")                        
                                .html(msg)
                            $('html, body').animate({scrollTop : 0},800);
                        }
                    })
                })
            })

        </script>
        <?php } ?>
	</body>
</html>
