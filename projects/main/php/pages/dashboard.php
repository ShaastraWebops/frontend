<?php
    include '../../php/base/logmein.php';
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] >= 0 ) {
        //header('Location: ../../php/pages/dashboard.php');
    } else {
        header('Location: ../../php/pages/login.php');
        die();
    }

    $cooktime = time()+60*60*24*30;
    if ( isset($_REQUEST['first_name']) ) {
        $_SESSION['first_name'] = $_REQUEST['first_name'];
        setcookie("first_name", $_SESSION['first_name'], $cooktime);
    }
    if ( isset($_REQUEST['last_name']) ) {
        $_SESSION['last_name'] = $_REQUEST['last_name'];
        setcookie("last_name", $_SESSION['last_name'], $cooktime);
    }
    if ( isset($_REQUEST['valid_profile']) ) {
        $_SESSION['valid_profile'] = $_REQUEST['valid_profile'];
        setcookie("valid_profile", $_SESSION['valid_profile'], $cooktime);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard | Shaastra 2015</title>
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
            .tab-pane {
                padding-bottom: 3em;
            }
            #teams .form, #events .form {
                margin: 0.2em 0;
            }
            .template {
                display: none;
            }
            #dashboard-tabs a {
                color: #fff !important;
            }
            .nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
                background-color: #666;
            }
            .nav-tabs>li>a:hover {
                background-color: #333;
            }
            .form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
                background-color: #aaa;
            }
            .inset-remove {
                position: absolute;
                bottom: 0;
                right: 0;
                color: #4875B4;
                z-index: 10;
                padding: 8px;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <?php include '../../php/base/menu.php' ?>

        <div class="container-fluid title white centered" style='margin-bottom:2%;'>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">DASHBOARD</h1>
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
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs col-md-6 col-md-offset-3" id="dashboard-tabs" role="tablist" style="margin-bottom: 1em;">
                        <li class="active"><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
                        <li><a href="#teams" role="tab" data-toggle="tab">Teams</a></li>
                        <li><a href="#events" role="tab" data-toggle="tab">Events</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content col-md-12">
                        <div class="tab-pane active col-md-8 col-md-offset-2" id="profile" style="">
                            <form method="POST">
                                <div class="container-fluid">
                                    <div class="row" style="padding-bottom: 1em;">
                                        <div class="col-md-12 text-center" style="font-size:1.2em; vertical-align:middle">
                                            <a class="pull-left btn btn-info edit">Edit Profile</a>
                                            <span class="bold">Profile Details</span>
                                            <a class="pull-right btn btn-info" href="../../php/scripts/logout.php">Logout</a>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-4 head">Shaastra ID</div>
                                            <div class="col-sm-8 text-left" style="padding: .2em .6em .3em;"><?php echo 'SH15' . str_pad($_SESSION['user_id'], 5, '0', STR_PAD_LEFT); ?></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 head">Name</div>
                                            <div class="col-sm-4 label text-left" style="width: auto" name="first_name"><?php echo $_SESSION['first_name']; ?></div>
                                            <div class="col-sm-4 label text-left" name="last_name"><?php echo $_SESSION['last_name']; ?></div>
                                            <input class="col-sm-4 form" name="first_name" type="text" placeholder="First Name" required />
                                            <input class="col-sm-4 form" name="last_name" type="text" placeholder="Last Name" />
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 head">Email id</div>
                                            <div class="col-sm-8 text-left" style="padding: .2em .6em .3em;"><?php echo $_SESSION['email']; ?></div>
                                            <!-- <input class="col-sm-8 form" name="email" type="email" placeholder="eg: me@example.com" /> -->
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
                                        <div class="row">
                                            <div class="col-sm-4 head">Password</div>
                                            <div class="col-sm-8 label text-left" name="password"></div>
                                            <input class="col-sm-8 form" name="password" type="text" placeholder="Change password" />
                                        </div>
                                        <div class="row" style="border-bottom: 0px;">
                                            <input class="col-sm-12 form no-form-style btn btn-primary" name="submit" type="submit" value="Save Profile" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 tab-pane" id="teams">
                            <div class="col-md-6 create" style="">
                                <h3 class="centered"><span class="head">Create a Team</span> <span class="btn pull-right btn-primary reset">Reset</span></h3>
                                <form role="form" action="" method="POST">
                                    <div class="form-group">
                                        <label for="team_name" class="col-md-4">Team Name</label>
                                        <div class="col-md-8" style="padding: 0">
                                            <input type="text" name="name" class="form-control form" placeholder="Team Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group first member">
                                        <label for="member" class="col-md-4 member-label">Member</label>
                                        <div class="col-md-8" style="padding: 0">
                                            <input readonly="readonly" type="text" name="member" class="form-control form" placeholder="Shaastra ID" value="<?php echo 'SH15' . str_pad($_SESSION['user_id'], 5, '0', STR_PAD_LEFT); ?>">
                                            <!-- <a href="" class="remove_member inset-remove"> Remove </a> -->
                                        </div>
                                    </div>
                                    <div class="form-group template member">
                                        <label for="member" class="col-md-4 member-label">Member</label>
                                        <div class="col-md-8" style="padding: 0">
                                            <input type="text" name="member" class="form-control form" placeholder="Shaastra ID">
                                            <a class="remove_member inset-remove"> Remove </a>
                                        </div>
                                    </div>
                                    <div class="form-group row-centered">
                                        <a class="btn btn-success col-md-5 col-centered add" style="margin: 0.2em 0;">Add Member</a>
                                        <button type="submit" class="btn btn-primary col-md-5 col-centered save" style="margin: 0.2em 0;">Save Team</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 current">
                                <h3>Your Current Teams</h3>
                                <div class="team-msg">
                                    Loading ...
                                </div>
                                <div class="panel-group" id="team-accordion">
                                    <div class="panel panel-default template team">
                                        <div class="panel-heading">
                                            <h4 class="panel-title bold">
                                                <a data-toggle="collapse" data-parent="#team-accordion" href="#team-accordion-no">
                                                    Team: <span class="name">Name</span>
                                                </a>
                                                <div class="btn-group pull-right">
                                                    <span class="btn btn-primary btn-xs edit">Edit</span>
                                                    <span class="btn btn-primary btn-xs delete">Delete</span>
                                                </div>
                                            </h4>
                                        </div>
                                        <div id="team-accordion-no" class="panel-collapse collapse">
                                            <div class="panel-body content black ">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 tab-pane" id="events">
                            <div class="col-md-6 register" style="">
                                <h3 class="centered"><span class="head">Register to an Event</span> <span class="btn pull-right btn-primary reset">Reset</span></h3>
                                <form role="form" action="" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="team_name" class="col-md-4">Event Name</label>
                                        <div class="col-md-8" style="padding: 0">
                                            <select type="text" name="name" class="form-control form" placeholder="Event Name" required>
                                                <option value="">-----</option>
                                                <!-- <option value="Symposium">Symposium</option> -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group participant">
                                        <label for="participant" class="col-md-4 member-label">Participant</label>
                                        <div class="col-md-8" style="padding: 0">
                                            <input readonly="readonly" type="text" name="participant" class="form-control form" placeholder="Shaastra ID" value="<?php echo 'SH15' . str_pad($_SESSION['user_id'], 5, '0', STR_PAD_LEFT); ?>">
                                            <!-- <a href="" class="remove_member inset-remove"> Remove </a> -->
                                        </div>
                                    </div>
                                    <div class="form-group team" style="display: none">
                                        <label for="team" class="col-md-4 member-label">Team</label>
                                        <div class="col-md-8" style="padding: 0">
                                            <select type="text" name="team" class="form-control form" placeholder="Team Name">
                                                <option value="">-----</option>
                                            </select>
                                            <span class="team-help text">hello</span>
                                        </div>
                                    </div>
                                    <div class="form-group tdp">
                                        <label for="tdp" class="col-md-4 member-label">Submission</label>
                                        <div class="col-md-8" style="padding: 0">
                                            <input type="file" name="tdp" class="form" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row-centered">
                                        <button type="submit" class="btn btn-primary col-md-5 col-centered save" style="margin: 0.2em 0;">Save Submission</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 current">
                                <h3>Your Current Events</h3>
                                <div class="event-msg">
                                    Loading ...
                                </div>
                                <div class="panel-group" id="event-accordion">
                                    <div class="panel panel-default template event">
                                        <div class="panel-heading">
                                            <h4 class="panel-title bold">
                                                <a data-toggle="collapse" data-parent="#event-accordion" href="#event-accordion-no">
                                                    Event: <span class="name">Name</span>
                                                </a>
                                                <div class="btn-group pull-right">
                                                    <span class="btn btn-primary btn-xs edit">Edit</span>
                                                    <span class="btn btn-primary btn-xs delete">Unregister</span>
                                                </div>
                                            </h4>
                                        </div>
                                        <div id="event-accordion-no" class="panel-collapse collapse">
                                            <div class="panel-body content black ">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
            function team_create_add(e) {
                if( e ) e.preventDefault()
                var $el = $('#teams .create .template').clone().removeClass('template')
                $el.find('[name=member]').val('')
                $('#teams .create .template').before($el)
                $el.find('.remove_member').click(function(e) {
                    $(this).closest('.member').remove()
                    e.preventDefault();
                })
                return $el
            }
            function team_create_reset(e) {
                if ( e ) e.preventDefault();
                $('#teams .create .head').html('Create A Team')
                $('#teams .create .member').not('.first').not('.template').remove()
                $('#teams .create [name=name]').val('')
                //$('#teams .create .first [name=member]').val('')
            }
            function team_edit(el) { // Edit team
                var $el = $(el)
                team_create_reset();
                $('#teams .create [name=name]').val($el.find('.name').text())
                $('#teams .create .head').html('Edit Team')
                $('#teams .create').data('id', $el.data('id'))
                // add new members
                $el.find('.content .member .member_id').each(function(key, val) {
                    if ( parseInt($(val).text().substr(4, $(val).text().length)) == <?php echo $_SESSION['user_id']; ?> ){
                        return
                    }
                    var $mem = team_create_add()
                    $mem.find('[name=member]').val($(val).text())
                })
            }
            function team_delete(el) {
                var confirmation = confirm('Are you sure you want to delete the team ?')
                if (confirmation) {
                    var $el = $(el);
                    json_info = {
                        'action' : 'delete',
                        'id' : $el.closest('.team').data('id')
                    }
                    $.ajax({ // SEND POST INFO FOR TEAM
                        type: "POST",
                        url: "<?php echo $ERP_SITE_URL; ?>api/mobile/teams/",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                        },
                        cache: false,
                        data: json_info
                    }).done(function(res) { // Refresh to get back data :)
                        window.location.reload()
                    }).fail(function(xhr) {
                        console.log(xhr.status)
                    })
                }
            }

            function event_create_reset(e) {
                if ( e ) e.preventDefault();
                $('#events .register .head').html('Registert to an Event')
                $('#events .register [name=name]').val('')
                $('#events .register .team').hide()
                $('#events .register .participant').show()
                $('#events .register .tdp').show()
            }
            function event_edit(el) { // Edit team
                var $el = $(el).closest('.event')
                event_create_reset();
                //console.log(events.filter(customFilter({'id' : $el.data('event_id')}))[0].name)
                this_event = events.filter(customFilter({'id' : $el.data('event_id')}))[0]
                $('#events .register [name=name]').val(this_event.name)
                $('#events .register .head').html('Edit Event Registration')
                if ( this_event.team_size_max > 1 ) { // Needs a Team
                    $('#events .register .team').show()
                    $('#events .register .participant').hide()
                    $('#events .register .team [name=name]').val(teams.filter(customFilter({'id' : $el.data('team_id')}))[0].name)
                } else {
                    $('#events .register .team').hide()
                    $('#events .register .participant').show()
                }
                if ( this_event.has_tdp ) { // Needs a TDP
                    $('#events .register .tdp').show()
                } else {
                    $('#events .register .tdp').hide()
                }
            }
            function event_delete(el) {
                $el = $(el).closest('.event')
                var confirmation = confirm('Are you sure you want to unregister from the event ?')
                if (confirmation) {
                    json_info = {
                        'action' : 'unregister',
                        'event_id' : $el.data('event_id'),
                        'user_id' : <?php echo $_SESSION['user_id']; ?>,
                    }
                    if ( parseInt($el.data('team_id')) > 0) {
                        console.log($el.data('team_id'))
                        json_info['team'] = teams.filter(customFilter({'id' : parseInt($el.data('team_id'))}))[0].name
                    }
                    $.ajax({ // SEND POST INFO FOR TEAM
                        type: "POST",
                        url: "<?php echo $ERP_SITE_URL; ?>api/mobile/events/",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                        },
                        cache: false,
                        data: json_info
                    }).done(function(res) { // Refresh to get back data :)
                        window.location.reload()
                    }).fail(function(xhr) {
                        console.log(xhr.status)
                    })
                }
            }

            $(document).ready(function( ) {
                // ------------------------------------------------
                // Initial queries
                init_profile();
                init_teams();
                init_events();
                // ------------------------------------------------
                // Form submits and clicks
                $('#profile .form').hide()
                $('#profile .edit').click(toggle_form)
                $.each(branches, function(i, k) {
                    $('#profile .form[name=branch]').append($('<option value="' + k + '">' + k + '</option>'))
                    // console.log(k)
                });
                $('#teams .add').click(team_create_add)
                $('#teams .reset').click(team_create_reset)
                $('#events .register select[name=name]').change(function(ev) {
                    $el = $(this)
                    this_event = events.filter(customFilter({'id' : parseInt($el.find(":selected").attr('name'))}))
                    if ( this_event.length != 1 ) {
                        $alert = $('.error-msg').show()
                        $el.find('.text').html(" There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code EVENT_SELECT_NOT_FOUND")
                        $alert.find('.head').html("Error ")
                        //setTimeout(function() {$alert.fadeOut(500)}, 1000)
                        $el.find(':selected').removeAttr('selected')
                        return
                    }
                    if ( new Date(this_event.registration_ends) > new Date() ) {
                        $alert = $('.error-msg').show().removeClass('alret-danger').addClass('alert-info')
                        $el.find('.text').html(" The registrations for this event are over.")
                        $alert.find('.head').html("Note ")
                        //setTimeout(function() {$alert.fadeOut(500)}, 1000)
                        $el.find(':selected').removeAttr('selected')
                        return
                    } else if ( new Date(this_event.registration_starts) < new Date() ) {
                        $alert = $('.error-msg').show().removeClass('alret-danger').addClass('alert-info')
                        $el.find('.text').html(" The registrations for this event have not yet started.")
                        $alert.find('.head').html("Note ")
                        //setTimeout(function() {$alert.fadeOut(500)}, 1000)
                        $el.find(':selected').removeAttr('selected')
                        return
                    }
                    this_event = this_event[0]
                    if ( this_event.is_mine ) {
                        $alert = $('.error-msg').show(500)
                        $alert.find('.text').html("You have already registered for this event. If you wish to edit your entry, please click the '<b>edit</b>' button near the event name in <b>Your Current Events</b> list ")
                        $alert.find('.head').html("Note ")
                        setTimeout(function() {$alert.fadeOut(500)}, 4000)
                        $el.find(':selected').removeAttr('selected')
                    }
                    if ( this_event.team_size_max > 1 ) { // Needs a Team
                        $('#events .register .team').show()
                        $('#events .register .participant').hide()
                        var my_msg = '<p>Team size allowed : ' + this_event.team_size_min + " - " + this_event.team_size_max + "</p>"

                        if ( teams.length == 0 )
                            my_msg += "<p style='' class='text2'>You do not have any teams. You can add it in the <a onclick=\"$('#dashboard-tabs a[href=#teams]').click()\" href='javascript:void(0)'>teams</a> section</p>"
                        else
                            my_msg += "<p style='display: none' class='text2'></p>"
                        $("#events .register .team .team-help").show().html(my_msg)
                    } else {
                        $('#events .register .team').hide()
                        $('#events .register .participant').show()
                        $("#events .register .team .team-help").hide().html('')
                    }
                    if ( this_event.has_tdp ) { // Needs a TDP
                        $('#events .register .tdp').show()
                    } else {
                        $('#events .register .tdp').hide()
                    }
                })
                $('#events .register select[name=team]').change(function(ev) {
                    this_event = events.filter(customFilter({'id' : parseInt($('#events .register select[name=name]').find(":selected").attr('name'))}))[0]
                    this_team = teams.filter(customFilter({'id' : parseInt($(this).find(":selected").attr('name'))}))[0]
                    if ( this_event.team_size_max > 1 ) { // Needs a Team
                        $('#events .register .team').show()
                        $('#events .register .participant').hide()
                        var my_text = "Size of Team " + this_team.name + " : " + this_team.members.length
                        if ( this_team.members.length <= this_event.team_size_max && this_team.members.length >= this_event.team_size_min ) {
                            my_text += "<b class='pull-right label label-success' style='font-size: 0.9em'> Valid </b>"
                            $('#events .register [type=submit]').removeAttr("disabled")
                        }
                        else {
                            my_text += "<b class='pull-right label label-danger' style='font-size: 0.9em> Invalid </b>"
                            $('#events .register [type=submit]').attr("disabled", "")
                        }
                        $("#events .register .team .team-help .text2").show().html(my_text)
                    } else {
                    }
                })

                <?php
                    if ( isset($_SESSION['valid_profile']) && $_SESSION['valid_profile'] == "0" ) {
                ?>

                    var $el = $('.error-msg').addClass('alert-danger').removeClass('alert-info')
                    $el.find('.head').html("Wait Up ! ")
                    $el.find('.text').html(" We need some basic information about yourself before proceeding. Please fill in the profile information and submit it.")
                    $el.hide().slideDown(500);
                    $('body').scrollTop(0)
                    window.location.hash = "#edit-profile"
                    $('#dashboard-tabs a').each(function(i,v) {
                        v.href = "" // Disabling all links
                    })
                <?php
                    } else {
                ?>
                    $('#dashboard-tabs a').click(function (e) {
                        var $el = $(this)
                        window.location.hash = $el.attr('href').substr($el.attr('href').indexOf('#'))
                    })
                <?php
                    }
                ?>
                hash = window.location.hash; // retrieve current hash value
                if ( hash ==  "#_=_" ) {

                } else if ( hash == "#edit-profile" ) {
                    setTimeout(function() {
                        $('#dashboard-tabs a[href="#profile"]').tab('show')
                        toggle_form(); // and show form
                    }, 500); // This is a random time - jugaad.
                } else if ( $(hash).length ) {
                    setTimeout(function() {
                        $('#dashboard-tabs a[href="' + hash + '"]').tab('show')
                    }, 500); // This is a random time - jugaad.
                }
            })
            function init_profile() {
                $.ajax({ // GET USER PROFILE INFO
                    type: "GET",
                    url: "<?php echo $ERP_SITE_URL; ?>api/mobile/profile/", //<?php echo $_SESSION['user_id']; ?>/",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                    },
                    cache: false,
                }).done(function(res) {
                    var data = res['data']
                    $.each(data, function(key, val) {
                        var $inp = $('#profile .label[name=' + key + ']')
                        if ( $inp.length && val !== null && val !== undefined) {
                            if ( $inp.prop('tagName') == "SELECT") {
                                $inp.text(val)
                            }
                            $inp.text(val)
                        }
                    })
                }).fail(function(xhr) {
                    if ( xhr.status == 500 ) { // error
                        var $el = $('.error-msg').addClass('alert-danger').removeClass('alert-info')
                        $el.find('.head').html("Error ")
                        $el.find('.text').html(" There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code PROFILE_ERROR_500")
                        $el.hide().slideDown(500);
                        $('body').scrollTop(0)
                    } else if ( xhr.status == 404 ) { // UserProfile doesnt exist - show error
                        var $el = $('.error-msg').addClass('alert-info').removeClass('alert-danger')
                        $el.find('.head').html("Wait Up ! ")
                        $el.find('.text').html(" We need some basic information about yourself before proceeding. Please fill in the profile information and submit it.")
                        $el.hide().slideDown(500, toggle_form);
                        $('body').scrollTop(0)
                    }
                })
                $('#profile form').submit(function(e) {
                    e.preventDefault();
                    var $el = $(this)
                    var json_info = {
                        //'name' : $el.find('.name')
                    }
                    $el.find('.form').each(function(i, el) {
                        var $el = $(el);
                        json_info[$el.attr('name')] = $el.val()
                    })
                    if ( json_info['password'] == "" ) {
                        delete json_info['password']
                    }
                    $.ajax({ // SEND INFO FOR PROFILE
                        type: "POST",
                        url: "<?php echo $ERP_SITE_URL; ?>api/mobile/profile/", //<?php echo $_SESSION['user_id']; ?>/",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                        },
                        cache: false,
                        data: json_info
                    }).done(function(res) {
                        data = res['data']
                        window.location.href = window.location.origin + window.location.pathname +
                            "?first_name=" + data.first_name +
                            "&last_name=" + data.last_name +
                            "&valid_profile=" + ( ( data.city != "" && data.mobile_number != "" )? '1' : '0' )
                    }).fail(function(xhr) {
                        console.log(xhr.status)
                    })
                })
            }
            function init_events() {
                $.ajax({ // GET EVENT INFO
                    type: "GET",
                    url: "<?php echo $ERP_SITE_URL; ?>api/mobile/events/", //<?php echo $_SESSION['user_id']; ?>/",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                    },
                    cache: false,
                    data: {'action_for' : 'all'},
                }).done(function(res) {
                    var data = res['data']
                    $('#events .event-msg').html('You have not registered to any events :(')
                    if ( data.length == 0 ) { // no teams
                        $('#events .event-msg').html('You have not registered to any events :(')
                    } else {
                        $.each(data, function(key, val) {
                            var team_id = -1;
                            if ( val.is_mine ) {
                                $('#events .event-msg').hide()
                                if (val.team_size_max > 1) {
                                    for( var i = 0; i < val.teams_registered.length; i++ ) { // If is_mine, find the registered team
                                        if ( teams.filter(customFilter({'id' : val.teams_registered[i]})).length ) {
                                            team_id = val.teams_registered[i]
                                            $('#events .event-msg').hide()
                                        }
                                    }
                                }
                            }
                            console.log(val.is_mine)
                            if (! val.registration_sarts) {
                                val.registration_starts = new Date(null)
                            }
                            if (! val.registration_ends) {
                                val.registration_ends = new Date(null)
                            }
                            events.push(val)
                            if (new Date(val.registration_ends) > new Date() && new Date(val.registration_starts) < new Date()) {
                                $('#events .register [name=name]').append('<option name="' + val.id + '">' + val.name + '</option>')
                            }
                            if ( ! val.is_mine ) return;
                            // else add to current list
                            var $el = $('#events .current .template').clone().removeClass('template')
                            $el.find('.name').html(val.name)
                            $el.data('event_id', val.id)
                            $el.data('team_id', team_id)
                            $el.find('.content').html('')
                            if ( val.team_size_max > 1 ) {
                                $el.data('team_event', true)
                                // $el.find('.content').html($el.find('.content').html() +
                                //     '<b>Team size</b> : ')
                                // if (val.team_size_min == val.team_size_max) {
                                //     $el.find('.content').html($el.find('.content').html() +
                                //         $el.team_size_min + "<br />")
                                // } else {
                                //     if ( val.team_size_min ) {
                                //         $el.find('.content').html($el.find('.content').html() +
                                //             $el.team_size_min + " - ")
                                //     }
                                //     $el.find('.content').html($el.find('.content').html() +
                                //         $el.team_size_max + "<br />")
                                // }
                            } else {
                                $el.data('team_event', false)
                            }
                            // if ( val.registration_ends ) {
                            //     $el.find('.content').html($el.find('.content').html() +
                            //         '<b>Registration Ends</b> : ' + val.registration_ends + "<br />")
                            // } else {
                            //     $el.find('.content').html($el.find('.content').html() +
                            //         '<b>Registration Ends</b> : Not announced yet'  + "<br />")
                            // }
                            if ( val.has_tdp && val.tdp_submitted ) {
                                $el.find('.content').html($el.find('.content').html() +
                                    '<b>TDP</b> : Required. ' + "Latest submitted TDP can be seen <a href='" + val.tdp_submitted + "'>here</a>" + "<br />")
                            } else if ( val.has_tdp ) {
                                $el.find('.content').html($el.find('.content').html() +
                                    '<b>TDP</b> : Required - needs to be submitted' + "<br />")
                            } else {
                                $el.find('.content').html($el.find('.content').html() +
                                    '<b>TDP</b> : Not required' + "<br />")
                            }
                            if ( val.team_size_max > 1 ) {
                                $el.find('.content').html($el.find('.content').html() +
                                    "<b>Team Size</b> : " + val.team_size_min + " to " + val.team_size_max + "<br />")
                                if ( val.is_mine ) {
                                    this_team = teams.filter(customFilter({'id' : team_id}))[0]
                                    $el.find('.content').html($el.find('.content').html() +
                                        "<b>Team Registered</b> : " + this_team.name + " (" + this_team.members.length + " member" + ( (this_team.members.length>=1)?'s':'' ) + ")"  + "<br />")
                                }
                            } else {
                                $el.find('.content').html($el.find('.content').html() +
                                    "<b>Team Size</b> : Single participant event - No teams<br />")
                            }
                            $el.find('#event-accordion-no').attr('id', 'event-accordion-' + key)
                            $el.find('.panel-title a').attr('href', '#event-accordion-' + key)

                            $el.find('.edit').click(function(e) {
                                $('#events .register').css('border', 'solid 2px #fff')
                                    .animate({'border-width': 0}, {
                                        duration: 500,
                                        step: function( cur_width ) {
                                            $('#events .register').css( {'border' : 'solid 2px rgba(255, 255, 255, ' + cur_width / 2 + ')' });
                                        }
                                    }, function() { $('#events .register').css( {'border' : '0' }) });
                                team_edit($(this).closest('.team')[0])
                            })
                            $el.find('.edit').click( function(e) {
                                event_edit($(this))
                            })
                            $el.find('.delete').click( function(e) {
                                event_delete($(this))
                            })
                            $('#events .current .template').after($el)
                        })
                        if ( events.length == 0 )
                            $('#events .event-msg').html('You have not registered to any events :(')
                    }
                }).fail(function(xhr) {
                    if ( xhr.status == 500 ) { // error
                        var $el = $('.error-msg').addClass('alert-danger').removeClass('alert-info')
                        $el.find('.head').html("Error ")
                        $el.find('.text').html("There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code EVENT_ERROR_500")
                        $el.hide().slideDown(500);
                        $('body').scrollTop(0)
                    } else if ( xhr.status == 404 ) { // UserProfile doesnt exist - show error
                        var $el = $('.error-msg').addClass('alert-info').removeClass('alert-danger')
                        $el.find('.head').html("Wait Up ! ")
                        $el.find('.text').html("We need some basic information about yourself before proceeding. Please fill in the profile information and submit it.")
                        $el.hide().slideDown(500, toggle_form);
                        $('body').scrollTop(0)
                    }
                })
                $('#events form').submit(function(e) {
                    e.preventDefault();
                    var $el = $(this)
                    // var json_info = {}
                    // $el.find('.form').each(function(i, el) {
                    //     var $el = $(el);
                    //     json_info[$el.attr('name')] = $el.val()
                    // })
                    var json_info = new FormData($el[0]);
                    var this_event = events.filter(customFilter({'id' : parseInt($('#events .register select[name=name]').find(":selected").attr('name'))}))[0]
                    if ( $('#events .register [name=tdp]').val() != "" && this_event.tdp_submission != "" ) {
                        var confirmation = confirm('Are you sure you want to delete the old submission and submit the current document ?')
                        if ( ! confirmation ) return;
                    }
                    $.ajax({ // SEND INFO FOR PROFILE
                        type: "POST",
                        url: "<?php echo $ERP_SITE_URL; ?>api/mobile/events/", //<?php echo $_SESSION['user_id']; ?>/",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                        },
                        cache: false,
                        data: json_info,
                        contentType: false,
                        processData: false,
                    }).done(function(res) {
                        data = res['data']
                        $alert = $('.error-msg').show()
                        $alert.find('.text').html("Your submission has been saved. You can edit your submission by clicking the edit button")
                        $alert.find('.head').html("Submitted")
                        setTimeout(function() { window.location.reload() }, 500 )
                    }).fail(function(xhr) {
                        if ( xhr.status == 500 ) { // error
                            var $el = $('.error-msg').addClass('alert-danger').removeClass('alert-info')
                            $el.find('.head').html("Error ")
                            $el.find('.text').html(" There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code TEAM_SUBMIT_ERROR_500")
                            $el.hide().slideDown(500);
                            $('body').scrollTop(0)
                        } else if ( xhr.status == 404 ) { // Couldnt find the page o.O
                            var $el = $('.error-msg').addClass('alert-info').removeClass('alert-danger')
                            $el.find('.head').html("Error ")
                            $el.find('.text').html(" There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code TEAM_SUBMIT_ERROR_404")
                            $el.hide().slideDown(500, toggle_form);
                            $('body').scrollTop(0)
                        } else if ( xhr.status == 400 ) { // Bad request
                            var $el = $('.error-msg').addClass('alert-info').removeClass('alert-danger').show()
                            var data = xhr.responseJSON
                            $el.find('.head').html("Error(s) found while submitting your request")
                            $el.find('.text').html('<br />')
                            for (var key in data) {
                                $el.find('.text').html($el.find('.text').html() + '<b>' + toTitleCase(key) + '</b>' + ' - ' + data[key] + '<br />')
                            }
                            $('body').scrollTop(0)
                        }
                    })
                })
            }
            function init_teams() {
                $.ajax({ // GET TEAM INFO
                    type: "GET",
                    url: "<?php echo $ERP_SITE_URL; ?>api/mobile/teams/", //<?php echo $_SESSION['user_id']; ?>/",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                    },
                    cache: false,
                    async : false
                }).done(function(res) {
                    var data = res['data']
                    if ( data.length == 0 ) { // no teams
                        $('#teams .team-msg').html('You have no teams :(')
                    } else {
                        $.each(data, function(key, val) {
                            teams.push(val)
                            $('#events .register .team [name=team]').append('<option name="' + val.id + '">' + val.name + '</option>')

                            var $inp = $('#teams .current .template').clone().removeClass("template")
                            $inp.find('.name').html(val.name)
                            var members = val.members

                            $.each(members, function(key, val) {
                                $inp.find('.content').html( $inp.find('.content').html()
                                    + "<div class='col-md-12 member'>"
                                    + "<b class='member_id'>SH15" + pad(val.id, 5, 0) + "</b> - "
                                    + "<span class='member_name'>" + val.first_name + " " + val.last_name + "</span>"
                                    //+ " - " + val.email
                                    + "</div>"
                                    )
                            })
                            $inp.data('id', val.id)
                            $inp.find('#team-accordion-no').attr('id', 'team-accordion-' + key)
                            $inp.find('.panel-title a').attr('href', '#team-accordion-' + key)
                            $('#teams .current .template').after($inp)

                            $inp.find('.edit').click(function(e) {
                                $('#teams .create').css('border', 'solid 2px #fff')
                                    .animate({'border-width': 0}, {
                                        duration: 500,
                                        step: function( cur_width ) {
                                            $('#teams .create').css( {'border' : 'solid 2px rgba(255, 255, 255, ' + cur_width / 2 + ')' });
                                        }
                                    }, function() { $('#teams .create').css( {'border' : '0' }) });
                                team_edit($(this).closest('.team')[0])
                            })
                            $inp.find('.delete').click(function(e) {
                                team_delete($(this))
                            })
                        })
                        $('#teams .team-msg').hide()
                    }
                }).fail(function(xhr) {
                    if ( xhr.status == 500 ) { // error
                        var $el = $('.error-msg').addClass('alert-danger').removeClass('alert-info')
                        $el.find('.head').html("Error ")
                        $el.find('.text').html(" There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code TEAMS_ERROR_500")
                        $el.hide().slideDown(500);
                        $('body').scrollTop(0)
                    } else if ( xhr.status == 404 ) { // UserProfile doesnt exist - show error
                        var $el = $('.error-msg').addClass('alert-info').removeClass('alert-danger')
                        $el.find('.head').html("Wait Up ! ")
                        $el.find('.text').html(" We need some basic information about yourself before proceeding. Please fill in the profile information and submit it.")
                        $el.hide().slideDown(500, toggle_form);
                        $('body').scrollTop(0)
                    }
                })
                $('#teams form').submit(function(e) {
                    e.preventDefault()
                    var $el = $(this);
                    var member_info = []
                    $('#teams .create .member').not('.template').each(function(key, val) {
                        $inp = $(val).find('[name=member]')
                        member_info.push(parseInt($inp.val().substr(4, $inp.val().length)))
                    })
                    json_info = {
                        'name' : $('#teams .create [name=name]').val(),
                        'member' : member_info
                    }
                    if ( $('#teams .create').data('id') )
                        json_info['id'] = $('#teams .create').data('id')

                    $.ajax({ // SEND POST INFO FOR TEAM
                        type: "POST",
                        url: "<?php echo $ERP_SITE_URL; ?>api/mobile/teams/",
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', "Token <?php echo $_SESSION['token']; ?>");
                        },
                        cache: false,
                        data: json_info
                    }).done(function(res) { // Refresh to get back data :)
                        window.location.reload()
                    }).fail(function(xhr) {
                        if ( xhr.status == 500 ) { // error
                            var $el = $('.error-msg').addClass('alert-danger').removeClass('alert-info')
                            $el.find('.head').html("Error ")
                            $el.find('.text').html(" There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code TEAM_SUBMIT_ERROR_500")
                            $el.hide().slideDown(500);
                            $('body').scrollTop(0)
                        } else if ( xhr.status == 404 ) { // Couldnt find the page o.O
                            var $el = $('.error-msg').addClass('alert-info').removeClass('alert-danger')
                            $el.find('.head').html("Error ")
                            $el.find('.text').html(" There seems to be an error in our systems. We're probably on it already, but you can send us an error report at <a href='mailto:webops@shaastra.org'>webops@shaastra.org</a> with the error code TEAM_SUBMIT_ERROR_404")
                            $el.hide().slideDown(500, toggle_form);
                            $('body').scrollTop(0)
                        } else if ( xhr.status == 400 ) { // Bad request
                            var $el = $('.error-msg').addClass('alert-info').removeClass('alert-danger').show()
                            var data = xhr.responseJSON
                            $el.find('.head').html("Error(s) found while submitting your request")
                            $el.find('.text').html('<br />')
                            for (var key in data) {
                                $el.find('.text').html($el.find('.text').html() + '<b>' + toTitleCase(key) + '</b>' + ' - ' + data[key] + '<br />')
                            }
                            $('body').scrollTop(0)
                        }
                    })
                })
            }
            function customFilter(values) {
                return function(el) {
                    var r = el;
                    var keys = Object.keys( values );
                    var answer = true;
                    for( var i = 0, len = keys.length; i < len; i++) {
                        if( r[keys[i]] !== values[keys[i]] ) {
                            answer = false;
                            break;
                        }
                    }
                    return answer;
               }
            }
            function toTitleCase(str) {
                return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
            }
            </script>
    </body>
    <?php include '../../php/base/foot.php' ?>
</html>
