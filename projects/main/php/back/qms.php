<?php
    include '../../php/base/logmein.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>QMS Dash | Shaastra 2015</title>
        <?php include '../../php/base/head.php' ?>
        <style>
            #profile .row {
                /*border-bottom: 1px solid #fff;*/
                padding: 0.2em 0;
            }
            #profile .head {
                font-weight: bold;
            }
            #profile .form:not(.no-form-style) {
                color: black;
                display: block;
                border: 1px solid #ccc;
                border-radius: 2px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
                -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
                -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
                transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            }
            #profile .form:not(.no-form-style):focus {
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
                    <h1 class="text-center">QMS</h1>
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
            <div class="row" >
                <div class="col-md-10 col-md-offset-1">
                    <!-- Tab panes -->
                    <div class="col-md-8 col-md-offset-2" id="profile" style="">
                        <form method="POST">
                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <div class="row ">
                                        <div class="col-sm-4 head">Shaastra ID</div>
                                        <div class="col-sm-8 text-left label" style="padding: .2em .6em .3em;"></div>
                                        <input class="col-sm-3 form shid" name="shid" type="text" placeholder="Shaastra ID" />
                                        <a class="btn btn-danger col-md-2 pull-right clear_data">Clear Data</a>
                                        <a class="btn btn-primary col-md-2 pull-right get_data">Get Data</a>
                                        
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
                                        <div class="col-sm-3 label text-left" name="age"></div>
                                        <input class="col-sm-3 form" name="age" type="number" placeholder="" min="10" max="90" />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">College Name</div>
                                        <div class="col-sm-8 label text-left" name="college_text"></div>
                                        <input class="col-sm-8 form" name="college_text" type="text" placeholder="eg: IIT Madras" required />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">Roll No</div>
                                        <div class="col-sm-8 label text-left" name="college_roll"></div>
                                        <input class="col-sm-8 form" name="college_roll" type="text" placeholder="eg: EP12B001" />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">Branch</div>
                                        <div class="col-sm-8 label text-left" name="branch"></div>
                                        <!-- <input class="col-sm-8 form" name="branch" type="text" placeholder="eg: Electrical Engineering" required /> -->
                                        <select class="col-sm-8 form" name="branch" type="text" placeholder="eg: Electrical Engineering">

                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">City</div>
                                        <div class="col-sm-8 label text-left" name="city"></div>
                                        <input class="col-sm-8 form" name="city" type="text" placeholder="eg: Chennai" required />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">Phone</div>
                                        <div class="col-sm-8 label text-left" name="mobile_number"></div>
                                        <input class="col-sm-8 form" name="mobile_number" type="text" placeholder="eg: +919003097073" required />
                                    </div>
                                    <div class="row hidden">
                                        <div class="col-sm-4 head">Accomodation</div>
                                        <div class="col-sm-8 label text-left" name="want_accomodation"></div>
                                        <select class="col-sm-3 form" name="want_accomodation" required >
                                            <option selected>Not Wanted</option>
                                            <option>Wanted</option>
                                        </select>
                                        <br />
                                        <p class="pull-right text-right">(This does not guarantee accomodation. We will get back to you with a confirmation)</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">Barcode</div>
                                        <div class="col-sm-8 label text-left" name="barcode"></div>
                                        <input class="col-sm-8 form" name="barcode" type="text" placeholder="Barcode" />
                                    </div>
                                    <div class="row" style="border-bottom: 0px;">
                                        <input class="col-sm-12 form no-form-style btn btn-primary" name="submit" type="submit" value="Save" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var branches = Array('School', 'Arts', 'Accounting', 'Applied Mechanics', 'Mechatronics', 'Aerospace Engineering', 'Automobile Engineering', 'Biotech / Biochemical / Biomedical', 'Biology', 'Ceramic Engineering', 'Chemical Engineering', 'Chemistry', 'Design', 'Engineering Design', 'Civil Engineering', 'Computer Science and Engineering', 'Electronics and Communications Engineering', 'Electrical and Electronics Engineering', 'Electrical Engineering', 'Electronics and Instrumentation Engineering', 'Engineering Physics', 'Economics', 'Fashion Technology', 'Humanities and Social Sciences', 'Industrial Production', 'Production', 'Information Technology and Information Science', 'Management', 'Manufacturing', 'Mathematics', 'Metallurgy and Material Science', 'Mechanical Engineering', 'Ocean Engineering and Naval Architecture', 'Physics', 'Telecom', 'Textile Engineering', 'Others');        
            function pad(n, width, z) {
                z = z || '0';
                n = n + '';
                return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
            }

            $(document).ready(function( ) {
                $('#profile .label').hide()
                $.each(branches, function(i, k) {
                    $('#profile .form[name=branch]').append($('<option value="' + k + '">' + k + '</option>'))
                });
                $(".get_data").click(get_data)
                $(".clear_data").click(clear_data)
            })
            function clear_data () {
                $(".clear_data").text("CLearing ...").prop("disabled", true)
                window.setTimeout(function() {
                    $("input").val("")
                    $("select").val("")
                    $("[name=gender]").val("M")
                    $("[type=submit]").val("Save")
                    $(".clear_data").text("Clear Data").prop("disabled", false)
                }, 1)
            }
            function get_data() {
                $(".get_data").text("Fetching ...").prop("disabled", true)
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
                    $(".get_data").text("Get Data").prop("disabled", false)
                    data = res['data']
                    console.log(data)
                    var names = ["first_name", "last_name", "gender", "email", "shid", "age", "collehe_text", "college_roll", "branch", "city", "mobile_number"]
                    for( var i = 0; i < names.length; i++ ) {
                        if ( names[i] == "shid" ) {
                            $("[name=" + names[i] + "]").val("SH15" + pad(data['user'], 5, '0'))
                        } else {
                            $("[name=" + names[i] + "]").val(data[names[i]])
                        }
                    }
                }).fail(function(xhr) {
                    $(".get_data").text("Get Data").prop("disabled", false)
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
    <?php include '../../php/base/foot.php' ?>
</html>
