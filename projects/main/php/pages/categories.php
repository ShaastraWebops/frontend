<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events | Shaastra '15</title>
    
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
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }   
        #event-list .event-group .event-item:hover > div {
            border-color: #fff;
        }
        #event-list .event-group .event-item > div > .dummy { 
            margin-top: 100%; /* This is the height:width ratio */;
        }
        #event-list .event-bg {
            background: url(../../img/logo/200x200_dice_white.png) no-repeat;
            background-size: 100% 100%;
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
        @media screen and (-webkit-min-device-pixel-ratio:0) { /* Is only done in Chrome and Safari */
            #event-list .event-group .event-item .transparent-text {
                background: #fff;
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-fill-color: transparent;
                -webkit-text-stroke-color: white;
                -webkit-text-stroke-width: 0.2px;
                text-stroke-color: white;
                text-stroke-width: 0.2px;
            }
        }
        @-moz-document url-prefix() { /* Is only done in Firefox */
            #event-list .event-group .event-item .transparent-text {
                background: #fff;
                -moz-background-clip: text;
                -moz-text-fill-color: transparent;
                background-clip: text;
                text-fill-color: transparent;
                -moz-text-stroke-color: white;
                -moz-text-stroke-width: 0.2px;
                text-stroke-color: white;
                text-stroke-width: 0.2px;
            }
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
            display: table;
            height: 100%;
            width: 100%;
        }
        #event-list .event-group .event-item a div > span > span {
            height: 100%;
            display: table-cell;
            vertical-align: middle;
            margin: auto;
            text-align: center;
        }        
        #event-list .event-group .event-item a div > span > span > span {
            background-color: rgba(0, 0, 0, 0.95);
            width: 100%;
            display: inline-block;
        }

    </style>
</head>
<body>
    <?php include '../base/menu.php' ?>
    <div class="container-fluid white centered">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center title">EVENTS</h1>
                <div class="white breaker">
                    <span class="left"></span>
                        <div class="dice white"></div>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="display: table; width: 100%; height: 80%; padding: 0">
    <div class="row" style="display: table-cell; height: 100%; vertical-align:middle">
    <div id="event-list" class="container-fluid">
        <?php
            $default_img = '../../img/logo/200x200_dice_white.png';
            $event_list = scandir('../events');
            $event_row_count = 5;
            $event_count = count($event_list);
            $event_i = 0;
            foreach ( $event_list as $event ) {
                if ($event === '.' or $event === '..') continue;
                if (!is_dir('../events/' . $event)) continue;

                $event_img = '../../img/events/' . $event;
                if (!file_exists($event_img)) {
                    $event_img = $default_img;
                }
        ?>
            <?php if ( $event_i % $event_row_count == 0 ) { ?>
                <div class="row event-group <?php // Give different class to indicate first and last row
                    if ($event_i == 0) echo 'first';
                    elseif (floor($event_i/$event_row_count) == floor($event_count/$event_row_count)-1) echo 'last'; 
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
                            <a href="../pages/eventlist.php?category=<?php echo urlencode($event); ?>">
                                <div>
                                    <span>
                                        <span> 
                                            <span>
                                                <span class="transparent-text">
                                                    <?php echo $event; ?>
                                                </span>
                                            </span>
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
</body>
</html>
