<?php
    if ( isset($_REQUEST['page']) ) {
        $tab = $_REQUEST['page'];
        $tab_path = '../../php/misc/pre-shaastra/' . $tab . '.html';
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
        <title><?php echo $event . ' - ' . substr($tab, 2); ?> | Shaastra 2015</title>
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
                        /*if ($dir_event_handle = opendir($event_path)) {*/
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
                            <?php
                        }
                        /*closedir($dir_event_handle);*/
                    /*}*/
                    ?>
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

    <?php if ( $editable ) { // Modal used as form ?>
    <!-- EDITABLE MODAL -->
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
    <!-- /EDITABLE MODAL -->
    <?php } ?>

    <!-- MAIN CONTENT OF A TAB -->
    <div class="main-content" style='margin:125px 75px 75px 75px; min-height : 80%'>
        <div class="container-fluid">
            <div class='row'>
                <?php if (isset($editable) && $editable) { ?>
                <form method="post" action='../../php/scripts/save_to_file.php'>
                    <div class='data col-xs-8 col-xs-offset-2'>
                        <input type='hidden' name='filename' value="<?php echo $tab_path; ?>" />
                        <?php //if ( strtolower(substr($tab, 2)) == "registration" && !$editable ) { ?>
                            <textarea name="data" id='data' style='min-height : 100px;' class="black">
                                <?php echo $data; ?>
                            </textarea>
                        <?php //} else { ?>
                            <!-- <h2>Please contact webops to edit this.</h2> -->
                        <?php //} ?>
                    </div>
                </form>
                <?php } else { ?>
                <div class='data col-xs-8 col-xs-offset-2'>
                    <?php //if ( strtolower(substr($tab, 2)) == "registration" && !$editable ) {
                        //eval($data);
                    //}
                    //else {
                        echo $data;
                    //} ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT OF A TAB -->

    <?php include '../../php/base/foot.php' ?>
    <?php include '../../php/modules/iitm.php' ?>
    <?php include '../../php/modules/event_rightbar.php'; ?>
    <?php include '../../php/modules/social.php' ?>

    <?php if ( $editable
        //&& !strtolower(substr($tab, 2)) == "registration"
        ) { // The fns to send data ?>
    <script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>

    <script>
        $(document).ready(function() {
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
