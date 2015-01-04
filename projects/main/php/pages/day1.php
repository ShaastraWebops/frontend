<?php
    $name = 'Day 1';
    $filename = '../misc/day1.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $name; ?> | Shaastra 2015</title>
    <meta name="keywords" content="<?php echo $name; ?> shaastra,shaastra <?php echo $type; ?>">
    <meta name"description" content="Know more about the Lecture given by <?php echo $name; ?> in Pre-shaastra Lecture series">
    <meta name="robots" content="NOODP">
    <?php include '../base/head.php' ?>
    <style>
    .title{
        letter-spacing: 0.2em;
    }
    </style>
</head>

<body class=''>
    <?php include '../base/menu.php'; ?>
    <div class="container-fluid white centered">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center title">SHAASTRA - DAY 1</h1>
                    <div class="white breaker">
                        <span class="left"></span>
                            <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>
    <div class="main-content" style='margin:25px 75px 75px 75px; min-height : 80%'>
        <div class="container-fluid">
            <div class='row'>
                <?php
                    $data = file_get_contents($filename);
                    if (isset($_REQUEST['edit'])) { ?>
                    <form method="post" action='../scripts/save_to_file.php'>
                        <div class='data col-xs-8 col-xs-offset-2'>
                            <input type='hidden' name='filename' value="<?php echo $filename; ?>" />
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
    <!-- END MAIN CONTENT OF A TAB -->

    <?php include '../base/foot.php' ?>
    <!-- <?php include '../modules/iitm.php' ?> -->
    <?php include '../modules/event_rightbar.php'; ?>
    <?php include '../modules/social.php' ?>
    <?php if ( isset($_REQUEST['edit']) ) { // The fns to send data ?>
    <script type="text/javascript" src="../../js/ckeditor/ckeditor.js"></script>
    <script>
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
            setInterval(function() { $('#main-focus').focus() }, 500);
        })
    </script>
</body>
</html>
