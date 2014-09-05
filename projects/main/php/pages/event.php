<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        if ( isset($_REQUEST['category']) ) {
            $category = $_REQUEST['category'];
            $category_path = '../events/' . $category ;
        }
        if (!isset($category) || $category=="") { // No category given, redirect to categories page
            header('Location: ../pages/categories.php');
        }
        if ( isset($_REQUEST['event']) ) {
            $event = $_REQUEST['event'];
            $event_path = $category_path . '/' . $event;
        if (!is_dir($event_path)) { // Invalid event
            header('Location: ../pages/eventlist.php?category=' . urlencode($category));
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
            header('Location: ../pages/eventlist.php?category=' . urlencode($category));
        }
        if ( isset($_REQUEST['tab']) ) {
            $tab = $_REQUEST['tab'];
            $tab_path = $event_path . '/' . $tab . '.html';
        }


        if ( isset($_REQUEST['edit']) ) {
            $editable = 1;
        } else {
            $editable = 0;
        }

        if (!isset($tab) || $tab=="") { // If it comes here, category and event is there, no tab is given. Reidrect to first tab
            if (count($tab_list) < 1) {
                if ( $editable) { // No tabs exist - create first tab. File gets created later
                    $tab='Home';
                    $tab_path=$event_path . '/' . $tab . '.html';
                } else { // No tab exists - tell user under construction and die.
                    include '../pages/under_construction.php';
                    die();
                }
            } else {
                $tab = $tab_list[0]; // 3 so we dont use . and ..
                $tab_path = $event_path . '/' . $tab . '.html';
            }
        }

        if (!file_exists($tab_path)) {
            if ( $editable ) { // Create a new file
                $fp = fopen($tab_path, "w"); fclose($fp); // Create new file
                $data = '';
            } else { // invalid page - tell user it is 404 not found
                include '../pages/404.php';
                die();
            }
        } else {
            $data = file_get_contents($tab_path);
        }

        if ($editable && $data == '') { // empty file, show help
            $data = file_get_contents('../events/sample.html');
        }
        ?>
        <title><?php echo $event . ' - ' . $tab; ?> | Shaastra '15</title>
        <?php include '../base/head.php' ?>
        <style>
            .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus{
                background-image:url(../../img/icons/arrow.png);
                background-size:20px 9px;
                background-repeat:no-repeat;
                background-position:bottom center;
            }
            .navbar-inverse .navbar-nav>li>a{
                font-size:125%;
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
            }
            #edit_modal.newtab .not-for-new {
                display: none;
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
            }
            a.social-icon.facebook:hover {
                background-position: -0px -0px;
            }
            a.social-icon.twitter {
                background: #191919 url(../../img/icons/twitter.png) no-repeat -0px -88px;
                -webkit-transition:All 0.3s ease-out;
                -moz-transition:All 0.3s ease-out;
                -o-transition:All 0.3s ease-out;
            }
            a.social-icon.twitter:hover {
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
            .social-vertical {
                display: none;
            }
            @media (min-width: 768px) {
                .social-vertical {
                    position: fixed;
                    top: 200px;
                    right: 50px;
                    z-index: 10000;
                    display: inline-block;
                    width: 60px;
                }
            }
        </style>
    </head>

    <body class=''>

        <?php include '../base/menu.php'; ?>

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
                    <a class="navbar-brand title" href=''><?php echo $event; ?></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php
                        /*if ($dir_event_handle = opendir($event_path)) {*/
                            foreach(scandir($event_path) as $file) {
                                if ( '.' === $file ) continue;
                                if ( '..' === $file ) continue;
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
                    <form action='../scripts/event.php' method='POST'>
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
    <div class="main-content" style='margin:75px 75px 0 75px; height : 80%'>
        <div class="container-fluid">
            <div class='row'>
                <?php if (isset($editable) && $editable) { ?>
                <form method="post" action='../scripts/save_to_file.php'>
                    <div class='data col-md-offset-1 col-md-10'>
                        <input type='hidden' name='filename' value='<?php echo $tab_path; ?>' />
                        <textarea name="data" id='data' style='min-height : 100px;'>
                            <?php echo $data; ?>
                        </textarea>
                    </div>
                </form>
                <?php } else { ?>
                <div class='data col-md-offset-1 col-md-10'>
                    <?php echo $data; ?>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT OF A TAB -->

    <?php include '../base/foot.php' ?>
    <?php include '../modules/social.php' ?>

    <?php if ( $editable ) { // The fns to send data ?>
    <script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>

    <script>
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
                $('#edit_modal').find('.dirname').val('<?php echo $event_path; ?>')
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
                $('#edit_modal').find('.dirname').val('<?php echo $event_path; ?>')
                $('#edit_modal').find('.taburl').prop('href', "<?php
                    if ($editable) {
                        $editurl = '&edit';
                    } else {
                        $editurl = '';
                    }
                    echo '?category=' . urlencode($category) . '&event=' . urlencode($event) . '&tab=' . urlencode($filetab) . $editurl;
                    ?>");
                $('#edit_modal').removeClass('newtab')
            }
            $('#edit_modal').modal()
        }
        $(document).ready(function() {
            CKEDITOR.inline('data')
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
            $(window).scroll(function(){
                var $nav = $('.navbar');
                if ($('body').scrollTop() > 0) {
                    if ($nav.data('size') == 'big') {
                        $nav.data('size','small').stop().animate({
                            height:'50px',
                        }, 600);
                    }
                } else {
                    if ($nav.data('size') == 'small') {
                        $nav.data('size','big').stop().animate({
                            height:'60px',
                        }, 600);
                    }
                }
            });
        })
    </script>
</body>
</html>
