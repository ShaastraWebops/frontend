<?php
    if ( isset($_REQUEST['category']) ) {
        $category = $_REQUEST['category'];
        $category_path = '../../php/events/' . $category ;
    }
    if (!isset($category) || $category=="") { // No category given, redirect to categories page
        header('Location: ../../php/pages/categories.php');
    }
    if ( isset($_REQUEST['event']) ) {
        $event = $_REQUEST['event'];
        $event_path = $category_path . '/' . $event;

        $notifications_path = $event_path . '/notifications.txt';  //for marquee

        if (!is_dir($event_path)) { // Invalid event
            header('Location: ../../php/pages/eventlist.php?category=' . urlencode($category));
        } else {// get tab list
            $tab_list = scandir($event_path);
            foreach ($tab_list as $tab_i => $tab_file_name) {
                if ( $tab_file_name === ".." || $tab_file_name === "." ) {
                    unset($tab_list[$tab_i]);
                } else {
                    $tab_list[$tab_i] = str_replace('.html', '', $tab_file_name);
                }
            }
            $tab_list = array_values($tab_list);
        }
    } else { // No event given, redirect to the corresponding eventlist page
        header('Location: ../../php/pages/eventlist.php?category=' . urlencode($category));
    }
    if ( isset($_REQUEST['tab']) ) {
        $tab = $_REQUEST['tab'];
        $tab_path = $event_path . '/' . $tab . '.html';
    }

    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php

        if ( isset($_REQUEST['edit']) ) {
            $editable = 1;
        } else {
            $editable = 0;
        }

        if (!isset($tab) || $tab=="") { // If it comes here, category and event is there, no tab is given. Reidrect to first tab
            if (count($tab_list) < 1) {
                if ( $editable) { // No tabs exist - create first tab. File gets created later
                    $tab = '00Home';
                    $tab_path = $event_path . '/' . $tab . '.html';
                } else { // No tab exists - tell user under construction and die.
                    include '../../php/pages/under_construction.php';
                    die();
                }
            } else {
                $tab = $tab_list[0];
                $tab_path = $event_path . '/' . $tab . '.html';
            }
        }

        if (!file_exists($tab_path)) {
            if ( $editable ) { // Create a new file
                if (count($tab_list) < 1) {
                    $tab = '00Home';
                    $tab_path = $event_path . '/' . $tab . '.html';
                } else {
                    $tab = $tab_list[0];
                    $tab_path = $event_path . '/' . $tab . '.html';
                }
                //$fp = fopen($tab_path, "w");
                //fclose($fp); // Create new file
                $data = '';
            } else { // invalid page - tell user it is 404 not found
                include '../../php/pages/404.php';
                die();
            }
        } else {
            $data = file_get_contents($tab_path);
            $notifications_data = file_get_contents($notifications_path);   //for marquee
        }

        if ($editable && $data == '') { // empty file, show help
            $data = file_get_contents('../../php/events/sample.html');
        }
        ?>
        <title><?php echo $event . ' - ' . ucwords(substr($tab, 2)); ?> | Shaastra 2015</title>
        <?php include '../../php/base/head.php' ?>
        <style>
            .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus{
                background-image: url(../../img/icons/arrow.png);
                background-size: 20px 9px;
                background-repeat: no-repeat;
                background-position: bottom center;
            }
            .navbar-inverse .navbar-nav>li>a{
                font-size: 125%;
                text-transform: none;
                font-weight: bold;
                color:#cccccc;
            }
            .navbar-nav>li>a:hover{
                background-color:#F2A62C;
                color:#ffffff;
            }
            .navbar-nav>li{
                border-bottom:thick solid #777;
            }
            .navbar-nav>li:hover{
                border-bottom:thick solid #09E65A;
            }
            .navbar-nav>li.active{
                border-bottom:thick solid #00A3E8;
            }
            .cke_button_icon.cke_button__savebtn_icon {
                width : 70px;
                background-position:right !important;
            }
            .cke_button_icon.cke_button__savebtn_icon:after {
                content:'Save';
            }
            .main-content .data {
                background-color : #888888;
                background-color : rgba(0, 0, 0, 0.5);
                border : 2px solid #dddddd;
                border-radius : 10px;
                color : #ffffff;
                min-height: 90%;
            }
            .main-content .data, .main-content .row, .main-content > div {
                min-height: 100%;
                height: 100%;
            }
            #edit_modal.newtab .not-for-new {
                display: none;
            }
            iframe {
                max-width: 100%;
            }
            .navbar-inverse .navbar-brand {
                color: #fff;
            }
            .navbar-inverse .navbar-brand:hover {
                color: #eee;
            }
            .form {
                margin: 0.2em 0;
                color: black;
                display: inline-block;
                text-align: left;
            }
            marquee p {
                display: inline-block;
                margin: 0 3em;
                font-size: 1.2em;
            }
            marquee p:before {
                content: "•";
                margin-right: 0.5em;
            }
        </style>
    </head>

    <body class=''>

        <?php include '../../php/base/menu.php'; ?>

        <!-- TABBAR -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" data-size='big'>
            <div class="container-fluid" style='padding:0px 10%;'>
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand title white" style="letter-spacing: 0.1em" href=''><?php echo $event; ?></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php
                            foreach(scandir($event_path) as $file) {
                                if ( '.' === $file ) continue;
                                if ( '..' === $file ) continue;
                                if ('notifications.txt' === $file ) continue;  //for marquee
                                $filetab = str_replace('.html', '', $file);
                                ?>
                                <li class="default <?php if ($file == $tab . '.html') echo 'active'; ?>" >
                                    <a href="<?php if ($editable)
                                    echo 'javascript:void(0)';
                                    else
                                        echo '?category=' . urlencode($category) . '&event=' . urlencode($event) . '&tab=' . urlencode($filetab);
                                    ?>"
                                    <?php if ($editable)
                                    echo ' data-tabname="' . $filetab . '" onclick="tab_name_edit(this)" ';
                                    ?>
                                    >
                                    <?php echo substr($filetab, 2); ?>
                                </a>
                            </li>
                        <?php } ?>
                    <?php if ($editable) { ?>
                    <li class="default"><a href="javascript:void(0)" data-tabname='+' onclick='tab_name_edit(this);' class='newtab'>+</a></li>
                    <?php } ?>
                </ul>
            </div>
            <!-- <div contenteditable="true">Hello</div> -->

            <?php if (isset($editable) && $editable) { ?>
                <!-- for marquee start -->
                <form method="post" action="../../php/scripts/save_to_file.php">
                    <input type="hidden" name="filename" value="<?php echo $notifications_path; ?>" />
                    <textarea name="data" id="marquee">
                        <?php echo $notifications_data; ?>
                    </textarea>
                </form>
                <!-- for marquee end -->
            <?php } else if ($notifications_data != "") { ?>
                <!-- for marquee start -->
                <marquee bgcolor="" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    <!-- <div><?php echo $notifications_data; ?></div> -->
                    <div><?php echo str_replace(array("<br>", "<br/>", "<br />"), 'a', $notifications_data); ?></div>
                </marquee>
                <!-- for marquee end -->
            <?php } ?>
        </div>
    </div>
    <!-- / TABBAR -->

    <?php if ( $editable ) { ?>
    <div class="modal container-fluid fade" id='edit_modal'>
        <div class="modal-dialog black" style='width : 80%'>
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title">Tab Properties</h4>
                </div>
                <div class="modal-body">
                    <form action='../../php/scripts/event.php' method='POST'>
                        <div class='container-fluid rename'>
                            <div class='row row-centered'>
                                <div class='col-md-4 col-centered not-for-new'>
                                    <div class='row'>
                                        <div class='col-md-12 text-center'>
                                            <h3>Delete Tab</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12 text-center' style='padding-top:10px;'>
                                            If you delete a tab, all content will be deleted - you won't be able to see it ever again :'( ! <br />
                                            <br />
                                            <input type="submit" class="btn btn-md btn-primary" value='Delete it' name='delete' /> if you're sure.
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-4 col-centered' style='border-right : solid 2px #dddddd; border-left : solid 2px #dddddd'>

                                    <div class='row'>
                                        <div class='col-md-12 text-center'>
                                            <h3>Edit Tab</h3>
                                        </div>
                                    </div>
                                    <div class='row not-for-new' style='padding-top:10px;'>
                                        <div class='col-md-5 black'>Old priority</div>
                                        <div class='col-md-7'>
                                            <input class='readonly oldpriority' name='oldpriority' style='width:100%' type='text' value='' readonly/>
                                        </div>
                                    </div>
                                    <div class='row not-for-new' style='padding-top:10px;'>
                                        <div class='col-md-5 black'>Old name</div>
                                        <div class='col-md-7'>
                                            <input class='readonly oldname' name='oldname' style='width:100%' type='text' value='' readonly/>
                                        </div>
                                    </div>
                                    <div class='row' style='padding-top:10px;'>
                                        <div class='col-md-5'>New priority</div>
                                        <div class='col-md-7'>
                                            <input class='newpriority' name='newpriority' style='width:100%' type='text' value=''/>
                                        </div>
                                    </div>
                                    <div class='row' style='padding-top:10px;'>
                                        <div class='col-md-5'>New name</div>
                                        <div class='col-md-7'>
                                            <input class='newname' name='newname' style='width:100%' type='text' value=''/>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12 text-center' style='padding-top:10px;'>
                                            <input type="submit" class="btn btn-md btn-primary" value='Edit Tab Info' name='rename' />
                                        </div>
                                    </div>

                                    <input class='dirname' name='dirname' type='hidden' value='' />

                                </div>
                                <div class='col-md-4 col-centered not-for-new'>
                                    <div class='row'>
                                        <div class='col-md-12 text-center'>
                                            <h3>Edit content</h3>
                                        </div>
                                    </div>
                                    <div class='row'>
                                        <div class='col-md-12 text-center' style='padding-top:10px;'>
                                            Want to edit the content of the tab ?<br />
                                            <br />
                                            <a class='btn btn-md btn-primary taburl' href=''>Go to the tab</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="main-content" style='margin:125px 75px 75px 75px; min-height : 80%'>
        <div class="container-fluid">
            <div class='row'>
                <?php if (isset($editable) && $editable) { ?>
                <form method="post" action='../../php/scripts/save_to_file.php'>
                    <div class='data col-xs-8 col-xs-offset-2'>
                        <input type='hidden' name='filename' value="<?php echo $tab_path; ?>" />
                        <textarea name="data" id='data' style='min-height : 100px;' class="black">
                            <?php echo $data; ?>
                        </textarea>
                    </div>
                </form>
                <?php } else { ?>
                <div class='data col-xs-8 col-xs-offset-2'>
                    <?php echo $data; ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php if ( $editable ) { ?>
    <div class="container" id="event-info">
        <div class="row row-centered">
            <div class="alert alert-danger alert-dismissible error-msg col-md-10 col-centered" role="alert" style="display: none;">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <span class="bold head"></span>
                <span class="text"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <h3 class="centered"><span class="head">Event Information</span></h3>
                <form role="form" action="" method="POST">
                    <input type="hidden" name="name" class="form-control form" value="<?php echo $event ?>">
                    <div class="form-group team_size_min">
                        <label for="team_size_min" class="col-md-4 member-label">Team Size (Min)</label>
                        <div class="col-md-8 text-left" style="padding: 0">
                            <input type="number" name="team_size_min" class="form form-control" placeholder="" style="width: 5em" min="1" max="10" value="1">
                        </div>
                    </div>
                    <div class="form-group team_size_max">
                        <label for="team_size_max" class="col-md-4 member-label">Team Size (Max)</label>
                        <div class="col-md-8 text-left" style="padding: 0">
                            <input type="number" name="team_size_max" class="form form-control" placeholder="" style="width: 5em" min="1" max="10" value="1">
                            <a class="pull-right" href="javascript:void(0)" onclick="$('#event-info .team_size_min input').val(1) && $('#event-info .team_size_max input').val(1)">Not a team event</a>
                        </div>
                    </div>
                    <div class="form-group registration_starts">
                        <label for="registration_starts" class="col-md-4 member-label">Registration Starts</label>
                        <div class="col-md-8 text-left" style="padding: 0">
                            <input type="text" name="registration_starts" class="form-control form" placeholder="" required style="width: 10em">
                            <span class="pull-right">(yyyy-mm-dd)</span>
                        </div>
                    </div>
                    <div class="form-group registration_ends">
                        <label for="registration_ends" class="col-md-4 member-label">Registration Ends</label>
                        <div class="col-md-8 text-left" style="padding: 0">
                            <input type="text" name="registration_ends" class="form-control form" placeholder="" required style="width: 10em" value="">
                            <span class="pull-right">(yyyy-mm-dd)</span>
                        </div>
                    </div>
                    <div class="form-group has_tdp">
                        <label for="has_tdp" class="col-md-4">TDP Submission Needed</label>
                        <div class="col-md-8 text-left" style="padding: 0">
                            <select name="has_tdp" class="form form-control" required style="width: 5em">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row-centered">
                        <button type="submit" class="btn btn-primary col-md-5 col-centered save" style="margin: 0.2em 0;">Save Submission</button>
                    </div>

                </form>
            </div>
            <div class="col-md-5" id="event-uploads">
                <h3 class="centered"><span class="head">Uploads</span></h3>
                <form method="POST" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                        <label for="upload" class="col-md-4 member-label">Upload file</label>
                        <div class="col-md-8" style="padding: 0">
                            <input type="file" name="upload" class="form white" style="color: #fff;" />
                        </div>
                        <input type="hidden" name="folder" class="form" value="<?php echo $event; ?>" />
                    </div>
                    <div class="form-group row-centered">
                        <button type="submit" class="btn btn-primary col-md-5 col-centered upload" style="margin: 0.2em 0;">Upload File</button>
                    </div>
                </form>
                <h3>Uploaded files : </h3>
                <ul class="upload-list">
                    <?php
                        if ( ! file_exists("../../media/" . $event) )
                            mkdir("../../media/" . $event);
                        foreach(scandir("../../media/" . $event) as $file) {
                            if ( '.' === $file ) continue;
                            if ( '..' === $file ) continue;
                    ?>
                        <li> <?php echo $file; ?> -
                            <a href="../../media/<?php echo $event . '/' . $file ?>">
                                ../../media/<?php echo $event . '/' . $file ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>


    <?php include '../../php/base/foot.php' ?>
    <?php if ( ! $editable ) include '../../php/modules/iitm.php'; ?>
    <?php include '../../php/modules/event_rightbar.php'; ?>
    <?php if ( $event == "Symposium" ) {
        $facebook = "https://www.facebook.com/iitm.internationalsymposium";
    }?>
    <?php include '../../php/modules/social.php' ?>

    <?php if ( $editable ) { // The fns to send data ?>
    <script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>

    <script>
        var this_event = null
        function tab_name_edit(el) {
            var $el = $(el);
            $el.prop('disabled',true);
            var tabname = $el.data('tabname').replace(/^\s+|\s+$/g, '');
            var k = $('#edit_modal').find('.col-md-4')[1];
            if ($el.hasClass('newtab')) {
                $(k).find('h3').html("Create New Tab");
                $(k).find('input[type="submit"]').val("Create New Tab");
                $('#edit_modal').find('.oldname').val('');
                $('#edit_modal').find('.newname').val('New Tab');
                $('#edit_modal').find('.oldpriority').val('');
                $('#edit_modal').find('.newpriority').val(0);
                $('#edit_modal').find('.dirname').val("<?php echo $event_path; ?>")
                $('#edit_modal').addClass('newtab')
            } else {
                $(k).find('h3').html("Edit Tab");
                $(k).find('input[type="submit"]').val("Edit Tab Info");
                var oldpriority = parseInt(tabname.substr(0, 2));
                var oldname = tabname.substr(2);
                $('#edit_modal').find('.oldname').val(oldname).css('background', '#eee');
                $('#edit_modal').find('.newname').val(oldname);
                $('#edit_modal').find('.oldpriority').val(oldpriority);
                $('#edit_modal').find('.newpriority').val(oldpriority);
                $('#edit_modal').find('.dirname').val("<?php echo $event_path; ?>")
                console.log($('#edit_modal').find('.taburl'));
                $('#edit_modal').find('.taburl').prop('href', "<?php
                    if ($editable) {
                        $editurl = '&edit';
                    } else {
                        $editurl = '';
                    }
                    echo '?category=' . urlencode($category) . '&event=' . urlencode($event) . '&tab='; ?>"
                    + encodeURI($el.data('tabname')) +
                    "<?php echo $editurl;
                    ?>");
                $('#edit_modal').removeClass('newtab')
            }
            $('#edit_modal').modal()
        }
        function init_event_info() {
            var $el = $('#event-info form')
            var json_info = {
                "action_for" : "name",
                "action_for_id" : "<?php echo $event; ?>",
            }
            $.ajax({ // SEND INFO FOR PROFILE
                type: "GET",
                url: "<?php echo $ERP_SITE_URL; ?>api/mobile/events/",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', "Token <?php echo $ERP_TOKEN; ?>");
                },
                chache: false,
                data: json_info
            }).done(function(res) {
                var data = res.data
                if ( data.length != 1 ) {
                    var $el = $('#event-info .error-msg').show()
                    $el.find('.head').html("Error : ")
                    $el.find('.text').html("Contact webops team. Your event doesn't seem to exist. Give them the error code : EVENT_LENGTH_0")
                    return
                }
                data = data[0]
                this_event = data
                $('#event-info [name=has_tdp]').val((this_event.has_tdp)?1:0)
                $('#event-info [name=team_size_min]').val(this_event.team_size_min)
                $('#event-info [name=team_size_max]').val(this_event.team_size_max)
                $('#event-info [name=registration_starts]').val(this_event.registration_starts.split("T")[0])
                $('#event-info [name=registration_ends]').val(this_event.registration_ends.split("T")[0])

            }).fail(function(xhr) {
                console.log(xhr.status)
                console.log(xhr)
            })
            $('#event-info form').submit(function(e) {
                e && e.preventDefault()
                var $el = $(this)
                var json_info = {
                    "action" : "edit",
                    "event_id" : this_event.id,
                    "has_tdp" : $('#event-info [name=has_tdp]').find(":selected").attr("value") == "1",
                    "registration_starts" : $('#event-info [name=registration_starts]').val(),
                    "registration_ends" : $('#event-info [name=registration_ends]').val(),
                    "team_size_min" : parseInt($('#event-info [name=team_size_min]').val()),
                    "team_size_max" : parseInt($('#event-info [name=team_size_max]').val()),
                }
                $.ajax({ // SEND INFO FOR PROFILE
                    type: "POST",
                    url: "<?php echo $ERP_SITE_URL; ?>api/mobile/events/",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', "Token <?php echo $ERP_TOKEN; ?>");
                    },
                    chache: false,
                    data: json_info
                }).done(function(res) {
                    // window.location.reload()
                    console.log(res)
                }).fail(function(xhr) {
                    console.log(xhr.status)
                    console.log(xhr)
                })
            })
        }
        function init_event_uploads() {
            $('#event-uploads form').submit(function(e) {
                e && e.preventDefault()
                var $el = $(this)
                $.ajax({ // SEND INFO FOR PROFILE
                    type: "POST",
                    url: "<?php echo $ERP_SITE_URL; ?>api/mobile/events/",
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('Authorization', "Token <?php echo $ERP_TOKEN; ?>");
                    },
                    chache: false,
                    data: json_info
                }).done(function(res) {
                    // window.location.reload()
                    console.log(res)
                }).fail(function(xhr) {
                    console.log(xhr.status)
                    console.log(xhr)
                })
            })
        }
        $(document).ready(function() {
            init_event_info()
            CKEDITOR.inline('data')
            CKEDITOR.inline('marquee') //for marquee
            $(window).bind('keydown', function(event) {
                if (event.ctrlKey || event.metaKey) {
                    var letter = String.fromCharCode(event.which).toLowerCase();
                    if ( letter == 's' ) {
                        $('.cke_button__savebtn').click();
                        event.preventDefault();
                    }
                }
            });
        });
    </script>
    <?php } ?>

    <script>
        $(document).ready(function() {
            setInterval(function() { $('#main-focus').focus() }, 500);
        })
    </script>
</body>
</html>
