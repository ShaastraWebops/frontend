<?php
    include '../../php/base/logmein.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Checkin | Shaastra 2015</title>
        <?php include '../../php/base/head.php' ?>
        <style>
            #profile .row {
                /*border-bottom: 1px solid #fff;*/
                padding: 0.2em 0;
            }
            #profile .head {
                font-weight: bold;
            }
            #profile .label {
                color: white;
                font-size: 1em;
                font-weight: 100;
                border-radius: 0em;
                text-align: left;
            }
            :empty {
                display: inline-block;
            }

        </style>
    </head>

    <body>
        <?php $back="../../php/pages/home.php"; include '../../php/base/menu.php' ?>

        <div class="container-fluid title white centered" style='margin-bottom:2%;'>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">CHECK IN</h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main white">
            <div class="row row-centered">
                <div class="alert alert-danger alert-dismissible error-msg col-md-10 col-centered" role="alert" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <span class="bold head"></span>
                    <span class="text"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-md-offset" id="profile" style="">
                    <form method="POST">
                    <div class="container-fluid">
                        <div class="form-group">
                            <!-- <div class="col-md-12  person-label text-cetner">
                                <div class="col-md-2 text-center bold">
                                    Shaastra ID
                                </div>
                                <div class="col-md-1 text-center bold">
                                    Gender
                                </div>
                                <div class="col-md-2 text-center bold">
                                    From
                                </div>
                                <div class="col-md-2 text-center bold">
                                    To
                                </div>
                                <div class="col-md-2 text-center bold">
                                    Mobile
                                </div>
                                <div class="col-md-2 text-center bold">
                                    Email
                                </div>

                            </div> -->
                            <?php for ( $i = 0; $i < 7; $i++ ) { ?>
                                <div class="form-group row person_<?php echo $i+1; ?> person">
                                    <div class="col-md-12" style="padding: 4px 0px">
                                        <div class="col-md-1">
                                            <input type="text" name="shid_<?php echo $i+1; ?>" class="form-control shid" placeholder="Shaastra ID" value="">
                                        </div>
                                        <div class="col-md-1" style="padding: 0">
                                            <select type="select" name="gender_<?php echo $i+1; ?>" class="form-control gender">
                                                <option value="X" selected>-------</option>
                                                <option value="M">Male  </option>
                                                <option value="F">Female </option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="col-md-6" style="padding : 0 2px;">
                                                <input type="text" name="start_date_<?php echo $i+1; ?>" class="form-control date start" placeholder="Checkin" value="">
                                            </div>
                                            <div class="col-md-6" style="padding : 0 2px;">
                                                <input type="text" name="start_time_<?php echo $i+1; ?>" class="form-control time start" placeholder="Time" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="col-md-6" style="padding : 0 2px;">
                                                <input type="text" name="end_date_<?php echo $i+1; ?>" class="form-control date end" placeholder="Checkout" value="">
                                            </div>
                                            <div class="col-md-6" style="padding : 0 2px;">
                                                <input type="text" name="end_time_<?php echo $i+1; ?>" class="form-control time end" placeholder="Time" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <input type="text" name="room" class="form-control date end" placeholder="Room" value="">
                                        </div>
                                    </div>
                                </div>
                            <?php  } ?>
                        </div>
                        <div class="container-fluid form-group">
                            <div class="col-md-6 col-qms">
                                <div class="row ">
                                    <div class="col-sm-4 head">Shaastra ID</div>
                                    <div class="col-sm-3" style="padding: 0">
                                        <input class="form-control shid" name="shid" type="text" placeholder="Shaastra ID" />
                                    </div>
                                    <div class="btn-group pull-right" role="group">
                                        <a class="btn btn-danger col-md-6 clear_data">Clear Data</a>
                                        <a class="btn btn-primary col-md-6 get_data">Get Data</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">Email id</div>
                                    <div class="col-sm-8 text-left" style="padding: .2em .6em .3em;"></div>
                                    <input class="col-sm-8 form" name="email" type="email" placeholder="eg: me@example.com" />
                                </div>
                                <div class="row">
                                    <br /><br />
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">Name</div>
                                    <div class="col-sm-4 label text-left" style="width: auto" name="first_name"></div>
                                    <div class="col-sm-4 label text-left" name="last_name"></div>
                                    <input class="col-sm-4 form" name="first_name" type="text" placeholder="First Name" required />
                                    <input class="col-sm-4 form" name="last_name" type="text" placeholder="Last Name" />
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">Gender</div>
                                    <div class="col-sm-3 label text-left" name="gender"  style="">M</div>
                                    <select class="col-sm-3 form" name="gender" required >
                                        <option>M</option>
                                        <option>F</option>
                                    </select>
                                    <div class="col-sm-2 head">Age</div>
                                    <input class="col-sm-3 form" name="age" type="number" placeholder="" min="10" max="90" />
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">College Name</div>
                                    <input class="col-sm-8 form" name="college_text" type="text" placeholder="eg: IIT Madras" required />
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">City</div>
                                    <input class="col-sm-8 form" name="city" type="text" placeholder="eg: Chennai" required />
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">Phone</div>
                                    <input class="col-sm-8 form" name="mobile_number" type="text" placeholder="eg: +919003097073" required />
                                </div>
                                <div class="row hidden">
                                    <div class="col-sm-4 head">Accomodation</div>
                                    <select class="col-sm-3 form"   name="want_accomodation" required >
                                        <option selected>Not Wanted</option>
                                        <option>Wanted</option>
                                    </select>
                                    <br />
                                    <p class="pull-right text-right">(This does not guarantee accomodation. We will get back to you with a confirmation)</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">Barcode</div>
                                    <input class="col-sm-8 form" name="barcode" type="text" placeholder="Barcode" />
                                </div>
                            </div>
                            <div class="col-md-6 col-hospi">
                                <div class="row">
                                    <div class="col-sm-5 head">SBIcollect Ref Number</div>
                                    <input class="col-sm-4 form" name="ref_no" type="text" placeholder="Reference Number" value="" />
                                    <!-- <a class="btn btn-primary col-sm-2 pull-right">Get data</a> -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">From</div>
                                    <input class="col-sm-3 form date start" name="start_date" type="text" placeholder="Date Start" value="" />
                                    <input class="col-sm-3 col-sm-offset-1 form time start" name="start_time" type="text" placeholder="Time Start" value="" />
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 head">To</div>
                                    <div class="col-sm-8 text-left" style="padding: .2em .6em .3em;"></div>
                                    <input class="col-sm-3 form date end" name="end_date" type="text" placeholder="Date End" value="" />
                                    <input class="col-sm-3 col-sm-offset-1 form time end" name="end_time" type="text" placeholder="Time End" value="" />
                                </div>
                                
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="col-md-6 col-md-offset-3" style="border-bottom: 0px;">
                                <input class="col-sm-12 form no-form-style btn btn-primary" name="submit" type="submit" value="Save" />
                            </div>
                        </div>
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

    <script type="text/javascript">
        var datepair = []
        function pad(n, width, z) {
            z = z || '0';
            n = n + '';
            return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
        }

        $(document).ready(function( ) {
            $('#profile .label').hide()
            $('.col-hospi .date').datepicker({
                'format': 'yyyy-mm-dd',
                'autoclose': true
            });
            $('.col-hospi .time').timepicker({
                'showDuration': true,
                'timeFormat': 'g:ia'
            });
            datepair[0] = new Datepair($(".col-hospi")[0]);
            $(".get_data").click(get_data)
            $(".col-qms .clear_data").click(qms_clear_data)
        })
        function qms_clear_data () {
            $(".col-qms .clear_data").text("Clearing ...").attr("disabled", true)
            window.setTimeout(function() {
                $(".col-qms input").val("")
                $(".col-qms select").val("")
                $(".col-qms [name=gender]").val("M")
                // $(".col-qms [type=submit]").val("Save")
                $(".col-qms .clear_data").text("Clear Data").attr("disabled", false)
            }, 1)
        }
        function get_data() {
            $(".get_data").text("Fetching ...").attr("disabled", true)
            var json_info = {}
            if ( $("[name=shid]").val() ) {
                json_info["id"] = $("[name=shid]").val()
            }
            else if ( $("[name=email]").val() ) {
                json_info["email"] = $("[name=email]").val()
            }
            json_info['data'] = 1 
            $.ajax({
                type: "POST",
                url: "<?php echo $ERP_SITE_URL; ?>api/mobile/profile/",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', "Token <?php echo $ERP_TOKEN; ?>");
                },
                cache: false,
                data: json_info
            }).done(function(res) {
                $(".get_data").text("Get Data").attr("disabled", false)
                data = res['data']
                var names = ["first_name", "last_name", "gender", "email", "shid", "age", "collehe_text", "college_roll", "branch", "city", "mobile_number"]
                for( var i = 0; i < names.length; i++ ) {
                    if ( names[i] == "shid" ) {
                        $("[name=" + names[i] + "]").val(data[names[i]])    
                    }
                    $("[name=" + names[i] + "]").val(data[names[i]])
                }
            }).fail(function(xhr) {
                $(".get_data").text("Get Data").attr("disabled", false)
                console.log(xhr)
                if ( xhr.status == 400 ) {
                    $(".error-msg").show(300)
                        .find(".head").html("Error ")
                    $(".error-msg")
                        .find(".text").html("code : " + xhr.status + "<br />" + xhr['responseJSON']["message"])
                } else if ( xhr.status == 404 ) {
                    $(".error-msg").show(300)
                        .find(".head").html("Error ")
                    $(".error-msg")
                        .find(".text").html("code : " + xhr.status + "<br /> Cannot connect to the internet" )
                } else if ( xhr.status == 500 ) {
                    $(".error-msg").show(300)
                        .find(".head").html("Error ")
                    $(".error-msg")
                        .find(".text").html("code : " + xhr.status + "<br /> Internal error ! Contact webops" )
                }
            })
        }
    </script>
    </body>
</html>
