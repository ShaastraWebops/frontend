<?php include '../../php/base/logmein.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
		if ( isset($_REQUEST['category']) ) {
			$category = $_REQUEST['category'];
			$category_path = '../../php/events/' . $category ;
		}
                if (!isset($category) || $category=="") { // No category, send back to categories page
                    header('Location: ../../php/pages/categories.php');
                }

                if (!is_dir($category_path)) {
		    header('Location: ../../php/pages/categories.php');
		} else {
		    $event_list = scandir($category_path);
		}
        $default_img = '../../img/logo/200x200_dice_white.png';
	?>
    <title><?php echo $category; ?> Events | Shaastra 2015</title>

    <?php include '../../php/base/head.php' ?>
    <style>
        #event-list {
            color: #fff;
        }
        #event-list .event-group .event-item {
            padding: 0;
            margin: 1%;
        }
        #event-list .event-group .event-item > div {
            display: inline-block;
            position: relative;
            padding: 0;
            margin: 0;
            width: 100%;
        }
        #event-list .event-group .event-item > div > .dummy {
            margin-top: 100%; /* This is the height:width ratio */;
        }
        #event-list .event-bg {
            background: url(../../img/logo/200x200_dice_white.png) no-repeat;
            background-size: cover;
        }
        #event-list .event-group .event-item a {
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            overflow: hidden;
            text-decoration: none;
            color: #fff;
            font-size: 1.3em;
            font-weight: 900;
            letter-spacing: 0.1em;
            text-transform: uppercase;
        }
        #event-list .event-group .event-item a div {
            position: relative;
            -webkit-transition: margin 0.2s ease-out,
                -webkit-transform 0.3s ease-out;
            -moz-transition: margin 0.3s ease-out,
                -moz-transform 0.3s ease-out;
            -ms-transition: margin 0.3s ease-out,
                -ms-transform 0.3s ease-out;
            -o-transition: margin 0.3s ease-out,
                -o-transform 0.3s ease-out;
            transition: margin 0.3s ease-out,
                transform 0.3s ease-out;
            height: 100%;
            width: 100%;
        }
        #event-list .event-group .event-item a div > span {
            margin: 0px;
            padding: 0px;
        }
        #event-list .event-group .event-item a div > span > span {
            margin: auto;
            text-align: center;
        }

        #event-list .event-group .event-item a div > span > span > span {
            background-color: rgba(0, 0, 0, 0.7);
            width: 100%;
            display: inline-block;
            padding: 0;
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }
        #event-list .event-group .event-item a:hover div > span > span > span {
            padding: 40% 0px 40% 0px;
            opacity: 0.01;
        }
    </style>
</head>
<body>

    <?php include '../../php/base/menu.php' ?>
    <div class="container-fluid white centered">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center title"><?php echo $category; ?></h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                    <br />
                    <p class="text-center">For any queries, contact <a href="https://mail.google.com/mail/?view=cm&fs=1&to=events@shaastra.org">events@shaastra.org</a></p>
                </div>
            </div>
        </div>

    <div class="container-fluid vertical-table" style="height: 80%; padding: 0">
    <div class="row vertical-table-cell" style="">
    <div id="event-list" class="container-fluid">
        <?php
            $event_row_count = 5;
            $event_count = count($event_list);
            unset($event_list[array_search('.', $event_list)]);
            unset($event_list[array_search('..', $event_list)]);
            unset($event_list[array_search('Sampark', $event_list)]);
            unset($event_list[array_search('sample.html', $event_list)]);
            $event_i = 0;
            foreach ( $event_list as $event ) {
                //if ($event === '.' or $event === '..') continue;
                //$event_img = '../../img/events/list/' . strtolower($category) . '/' . strtolower($event) . '.jpg';
                $event_img = '../../img/events/list/' . strtolower(str_replace("'", "", $event)) . '.jpg';
                if (!file_exists($event_img)) {
                //    $event_img = $default_img;
                }
        ?>
            <?php if ( $event_i % $event_row_count == 0 ) { ?>
                <div class="row row-centered event-group <?php
                    // Give different class to indicate first and last row
                    if ( floor(($event_count-1)/$event_row_count) == 0 ) echo '';
                    elseif ($event_i == 0) echo ' first ';
                    elseif (floor($event_i/$event_row_count) == floor(($event_count-1)/$event_row_count)) echo ' last ';
                ?>">
            <?php } ?>
                    <div class="col-md-2 col-sm-4 col-sm-offset-0 col-xs-6 col-centered event-item event-bg <?php
                        // Give different class to indicate first and last column
                        if ($event_i % $event_row_count == 0) echo ' first ';
                        elseif ($event_i == $event_count - 1 || $event_i % $event_row_count == $event_row_count-1) echo ' last ';
                    ?>" style="background:url('<?php echo $event_img; ?>') no-repeat; background-size: 100% 100%;">
                        <div>
                            <div class="dummy"></div>
                            <a href="../../php/pages/event.php?category=<?php echo urlencode($category); ?>&event=<?php echo urlencode($event); ?>">
                                <div>
                                    <span class="vertical-table">
                                        <span class="vertical-table-cell text-center transparent-text"><!--
                                            --><span><?php echo $event; ?></span><!--
                                        --></span>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div> <!-- End a event-item -->
            <?php if($event_i % $event_row_count == $event_row_count-1) { ?>
                </div> <!-- End a event-group -->
            <?php } ?>
        <?php
                $event_i++;
            }
        ?>
    </div>
    </div>
    </div>

    <?php include '../../php/base/foot.php' ?>
    <?php include '../../php/modules/event_rightbar.php'; ?>

    <script>
    $(document).ready(function() {
        $transtext = $('.transparent-text');
        if ( ( $transtext.css('text-stroke-color') !== undefined ||
            $transtext.css('-webkit-text-stroke-color') !== undefined ||
            $transtext.css('-moz-text-stroke-color') !== undefined ) &&
            ( $transtext.css('text-stroke-width') !== undefined ||
            $transtext.css('-webkit-text-stroke-width') !== undefined ||
            $transtext.css('-moz-text-stroke-width') !== undefined ) &&
            ( $transtext.css('background-clip') === 'text' ||
            $transtext.css('-webkit-background-clip') == 'text' ||
            $transtext.css('-moz-background-clip') === 'text' ) &&
            ( $transtext.css('text-fill-color') !== undefined ||
            $transtext.css('-webkit-text-fill-color') !== undefined ||
            $transtext.css('-moz-text-fill-color') !== undefined ) &&
            ( $transtext.css('background-clip') !== undefined ||
            $transtext.css('-webkit-background-clip') !== undefined ||
            $transtext.css('-moz-background-clip') !== undefined ) ) {
            // Phew ... the condition is valid => transparent-text works !
            $transtext.each(function(i) {
                var $el = $(this);
                var $el_event = $el.closest('.event-item');
                $el.css('background-image', $el_event.css('background-image'))
                    .css('background-repeat', $el_event.css('background-repeat'))
                    .css('background-size', $el_event.css('background-size'));
            })
        }
    })
    </script>
</body>
</html>
