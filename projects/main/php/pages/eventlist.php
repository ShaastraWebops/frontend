<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
		if ( isset($_REQUEST['category']) ) {
			$category = $_REQUEST['category'];
			$category_path = '../events/' . $category ;
		}
                if (!isset($category) || $category=="") { // No category, send back to categories page
                    header('Location: ../pages/categories.php');  
                }
                
                if (!is_dir($category_path)) {
		    header('Location: ../pages/categories.php'); 
		} else {
		    $event_list = scandir($category_path);
		}
        $default_img = '../../img/logo/200x200_dice_white.png';
	?>
    <title><?php echo $category; ?> Events | Shaastra '15</title>
    
    <?php include '../base/head.php' ?>
    <style>
        #event-list {
            color: #fff;
        }
        #event-list .event-group .event-item {
            padding: 0;
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
            font-size: 1em;
            font-size: 1.5vw;
            font-weight: 900;
            font-family: "Times New Roman", sans-serif;
            letter-spacing: 0.1em; 
            letter-spacing: 0.15vw; 
            text-transform: uppercase;
        }
        /*@media screen and (-webkit-min-device-pixel-ratio:0) {
            #event-list .event-group .event-item .transparent-text {
                -webkit-background-clip: text;
                -moz-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                -moz-text-fill-color: transparent;
                text-fill-color: transparent;
                -webkit-text-stroke-width: 0.2px;
                -moz-text-stroke-width: 0.2px;
                text-stroke-width: 0.2px;
                -webkit-text-stroke-color: white;
                -moz-text-stroke-color: white;
                text-stroke-color: white;
            }
        }*/
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
            height: 90%;
            width: 90%;
            margin: 5%;
            background-color: rgba(0, 0, 0, 0.95);
        }
        #event-list .event-group .event-item a div > span {
            margin: 0px;
            padding: 0px;
        }
        #event-list .event-group .event-item a div > span > span {
            margin: auto;
            padding: 2%;
        }        

        #event-list .event-group.first .event-item a div {
            margin-top: 10%;
            margin-bottom: 0%;
        }
        #event-list .event-group.last .event-item a div {
            margin-top: 0%;
            margin-bottom: 10%;
        }
        #event-list .event-group.first.last .event-item a div {
            margin-top: 5%;
            margin-bottom: 5%;
        }
        #event-list .event-group .event-item.first a div {
            margin-left: 10%;
            margin-right: 0%;
        }
        #event-list .event-group .event-item.last a div {
            margin-left: 0%;
            margin-right: 10%;
        }
        #event-list .event-group .event-item.first.last a div {
            margin-top: 5%;
            margin-bottom: 5%;
        }

        #event-list .event-group .event-item a:hover div {
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -ms-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
        }
        #event-list .event-group.first .event-item a:hover div {
            margin-top: 100%;
        }
        #event-list .event-group.last .event-item a:hover div {
            margin-top: -100%;
        }
        #event-list .event-group.first.last .event-item a:hover div {
            margin-top: auto;
        }
        #event-list .event-group .event-item.first a:hover div {
            margin-left: 100%;
        }
        #event-list .event-group .event-item.last a:hover div {
            margin-left: -100%;
        }
        #event-list .event-group .event-item.first.last a:hover div {
            margin-left: auto;
        }
    </style>
</head>
<body>
        
    <?php include '../base/menu.php' ?>
    <div class="container-fluid white centered">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center title">EVENTS - <?php echo $category; ?></h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>

    <div class="container-fluid table" style="height: 80%; padding: 0">
    <div class="row table-cell" style="">
    <div id="event-list" class="container-fluid">
        <?php
            $event_row_count = 5;
            $event_count = count($event_list);
            $event_i = 0;
            foreach ( $event_list as $event ) {
                if ($event === '.' or $event === '..') continue;
                $event_img = '../../img/events/' . $category . '/' . $event;
                if (!file_exists($event_img)) {
                    $event_img = $default_img;
                }
        ?>
            <?php if ( $event_i % $event_row_count == 0 ) { ?>
                <div class="row event-group <?php // Give different class to indicate first and last row
                    if ( floor(($event_count-1)/$event_row_count) == 0 ) echo '';
                    elseif ($event_i == 0) echo 'first';
                    elseif (floor($event_i/$event_row_count) == floor(($event_count-1)/$event_row_count)) echo 'last'; 
                ?>">
            <?php } ?>
                    <div class="col-md-2 col-md-offset-<?php // Give a padding for first event-item
                        if ($event_i % $event_row_count == 0) echo '1';
                        else echo '0'; 
                    ?> col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg <?php // Give different class to indicate first and last column
                        if ($event_i % $event_row_count == 0) echo 'first';
                        elseif ($event_i % $event_row_count == $event_row_count-1) echo 'last'; 
                    ?>" style="background:url('<?php echo $event_img; ?>') no-repeat; background-size: 100% 100%;">
                        <div>
                            <div class="dummy"></div>
                            <a href="../pages/event.php?category=<?php echo urlencode($category); ?>&event=<?php echo urlencode($event); ?>">
                                <div>
                                    <span class="vertical-table">
                                        <span class="vertical-table-cell text-center transparent-text"> 
                                            <?php echo $event; ?>
                                        </span>
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
    <?php include '../base/foot.php' ?>
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
