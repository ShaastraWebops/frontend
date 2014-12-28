<?php
    include '../../php/base/logmein.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register Dash | Shaastra 2015</title>
        <?php include '../../php/base/head.php' ?>
        <style>
            #profile .row {
                border-bottom: 1px solid #fff;
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
                    <h1 class="text-center">Onspot Registration</h1>
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
                <div class="alert alert-info alert-dismissible error-msg col-md-10 col-centered" role="alert" style="display: none;">
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
                                    <div class="row hidden">
                                        <div class="col-sm-4 head">Shaastra ID</div>
                                        <div class="col-sm-8 text-left" style="padding: .2em .6em .3em;"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">Name</div>
                                        <div class="col-sm-4 label text-left" style="width: auto" name="first_name"></div>
                                        <div class="col-sm-4 label text-left" name="last_name"></div>
                                        <input class="col-sm-4 form" name="first_name" type="text" placeholder="First Name" required />
                                        <input class="col-sm-4 form" name="last_name" type="text" placeholder="Last Name" />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 head">Email id</div>
                                        <div class="col-sm-8 text-left" style="padding: .2em .6em .3em;"></div>
                                        <input class="col-sm-8 form" name="email" type="email" placeholder="eg: me@example.com" />
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
                                        <div class="col-sm-4 head">Password</div>
                                        <div class="col-sm-8 label text-left" name="password"></div>
                                        <input class="col-sm-8 form" name="password" type="check" placeholder="Change password" />
                                    </div>
                                    <div class="row" style="border-bottom: 0px;">
                                        <input class="col-sm-12 form no-form-style btn btn-primary" name="submit" type="submit" value="Save" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 col-md-offset-2 hidden done-data">
                        <h3>Welcome !</h3>

                        You have been registered at Shaastra !<br />
                        Your Shaastar ID is : <b class="shid"></b>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            var branches = Array('School', 'Arts', 'Accounting', 'Applied Mechanics', 'Mechatronics', 'Aerospace Engineering', 'Automobile Engineering', 'Biotech / Biochemical / Biomedical', 'Biology', 'Ceramic Engineering', 'Chemical Engineering', 'Chemistry', 'Design', 'Engineering Design', 'Civil Engineering', 'Computer Science and Engineering', 'Electronics and Communications Engineering', 'Electrical and Electronics Engineering', 'Electrical Engineering', 'Electronics and Instrumentation Engineering', 'Engineering Physics', 'Economics', 'Fashion Technology', 'Humanities and Social Sciences', 'Industrial Production', 'Production', 'Information Technology and Information Science', 'Management', 'Manufacturing', 'Mathematics', 'Metallurgy and Material Science', 'Mechanical Engineering', 'Ocean Engineering and Naval Architecture', 'Physics', 'Telecom', 'Textile Engineering', 'Others');
            var events = Array();
            var teams = Array();

            function toggle_form(e) {
                e && e.preventDefault()
                if($('#profile .form').css('display') == 'none') {
                    $("#profile .edit").html('View Profile');
                    $('#profile .label').hide()
                    $('#profile .form').show()
                    window.location.hash = "edit-profile"
                }
                else{
                    $("#profile .edit").html('Edit Profile');
                    $('#profile .label').show()
                    $('#profile .form').hide()
                    window.location.hash = "profile"
                }
                $('#profile .form').each(function(i, el) {
                    var $el = $(el);
                    var $lab = $el.siblings("#profile .label[name=" + $el.attr('name') + "]")
                    if ($lab.length) {
                        $el.val($lab.text())
                    }
                })
            }
            function pad(n, width, z) {
                z = z || '0';
                n = n + '';
                return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
            }

            $(document).ready(function( ) {
                init_profile();

                $('#profile .label').hide()
                $.each(branches, function(i, k) {
                    $('#profile .form[name=branch]').append($('<option value="' + k + '">' + k + '</option>'))
                });

            })
            function init_profile() {
                $('#profile form').submit(function(e) {
                    e.preventDefault();
                    var $el = $(this)
                    var json_info = {
                        //'name' : $el.find('.name')
                    }
                    $el.find('.form').each(function(i, el) {
                        var $el = $(el);
                        if ( $el.attr("name") == "want_accomodation" ) {
                            console.log($el.val().toLowerCase() == "wanted")
                            json_info[$el.attr('name')] = ($el.val().toLowerCase()=="wanted")?Number(true):Number(false);
                        } else {
                            json_info[$el.attr('name')] = $el.val()
                        }
                    })
                    if ( json_info['password'] == "" ) {
                        delete json_info['password']
                    }
                    console.log(json_info)
                    $.ajax({ // SEND INFO FOR PROFILE
                        type: "POST",
                        url: "<?php echo $ERP_SITE_URL; ?>api/mobile/profile/",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                        },
                        cache: false,
                        data: json_info
                    }).done(function(res) {
                        $.ajax({ // SEND INFO FOR PROFILE
                            type: "POST",
                            url: "<?php echo $ERP_SITE_URL; ?>api/mobile/profile/",
                            beforeSend: function(xhr) {
                                xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                            },
                            cache: false,
                            data: json_info
                        }).done(function(res) {
                            data = res['data']
                            console.log(data)
                            // window.location.href = window.location.origin + window.location.pathname +
                            //     "?first_name=" + data.first_name +
                            //     "&last_name=" + data.last_name +
                            //     "&valid_profile=" + ( ( data.city != "" && data.mobile_number != "" )? '1' : '0' )

                        }).fail(function(xhr) {
                            console.log(xhr.status)
                        })
                    })
                })
            }
            </script>
    </body>
    <?php include '../../php/base/foot.php' ?>
</html>