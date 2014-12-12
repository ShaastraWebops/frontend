<?php include '../../php/base/logmein.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Events | Shaastra 2015 | IIT Madras Techfest | Chennai</title>
    <meta name="keywords" content="events shaastra,aerofest shaastra,b-events shaastra,coding shaastra,department flagship shaastra,design and build shaastra,electronics fest shaastra,involve shaastra,quizzing shaastra,spotlight shaastra,workshops shaastra">
    <meta name"description" content="Get involved in Shaastra 2015 events-aerofest,b-events,coding,department flagship,design and build,electronics fest,involve,quizzing,spotlight,workshops">
    <meta name="robots" content="NOODP">
    <?php include '../../php/base/head.php' ?>
    <style>
        #event-list {
            color: #fff;
        }
        #event-list .event-group .event-item {
            padding: 0;
            margin: 0.5%;
        }
        #event-list .event-group .event-item > div {
            display: inline-block;
            position: relative;
            padding: 0;
            margin: 0;
            width: 100%;
            top: 0;
            -webkit-transition: all 0.9s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            /*border: 1px solid transparent;*/
        }
        #event-list .event-group .event-item:hover > div {
            border-color: #fff;
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
            font-size: 1.5em;
            font-weight: 900;
            /*font-family: "Times New Roman", sans-serif;*/
            font-family: "Helvetica", sans-serif;
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
            background-color: rgba(0, 0, 0, 0.6);
        }
        #event-list .event-group .event-item a div > span {
            margin: 0px;
            padding: 0px;
        }
        #event-list .event-group .event-item a div > span > span {
            margin: auto;
        }
        #event-list .event-group.first .event-item a:hover div {
            margin-top: 100%;
        }
        #event-list .event-group.last .event-item a:hover div {
            margin-top: -100%;
        }
        .animation.spotlight>img{
            position: absolute;
            top: 60%;
            left: -10%;
            height: 20%;
            -webkit-transform: rotate(-30deg);
               -moz-transform: rotate(-30deg);
            -webkit-animation: fly 0.8s linear forwards;
               -moz-animation: fly 0.8s linear forwards;
            -webkit-transition: all 1s;
        }
        @-webkit-keyframes fly{
            0%{
                top: 60%;
                left: -10%;
                opacity: 1;
                -webkit-transform: rotate(-30deg);
            }
            50%{
                top: 30%;
                left: 30%;
                -webkit-transform: rotate(0deg);
            }
            100%{
                top: 60%;
                left: 70%;
                -webkit-transform: rotate(30deg);
            }
        }
        @-moz-keyframes fly{
            0%{
                top: 60%;
                left: -10%;
                opacity: 1;
            }
            25%{
                top: 45%;
                left: 10%;
            }
            45%{
                top: 30%;
                left: 25%;
                /*-webkit-transform: rotate(0deg);*/
            }
            55%{
                top: 30%;
                left: 35%;
            }
            75%{
                top: 45%;
                left: 50%;
            }
            100%{
                top: 60%;
                left: 70%;
                -moz-transform: rotate(30deg);
            }
        }
        .leftcurtain{
            width: 5%;
            height: 100%;
            top: 0px;
            left: 0px;
            position: absolute;
        }
         .rightcurtain{
            width: 5%;
            height: 100%;
            right: 0px;
            top: 0px;
            position: absolute;
        }
        .rightcurtain img, .leftcurtain img{
            width: 100%;
            height: 100%;
        }
        #score {
           color: red;
           position: absolute;
           top: 55%;
           left: 42.5%;
           z-index: 150;
           font-size: 7em;
           display: none;
        }

        #speech {
            z-index:100;
            position:absolute;
            height:17%;
            left:50%;
            top:15%;
            display:none;
        }

        #man {
            z-index:100;
            position:absolute;
            height:50%;
            top:24%;
            left:34%;
            display:none;
        }
        .animation.workshops > #spanner{ /* 255x600 */
            position: fixed;
            top: 80%;
            left: 45%;
            width: 10%;
            -webkit-transform-origin:center 7%;
               -moz-transform-origin:center 7%;
            -webkit-animation: moveSpanner 2s ease-in-out forwards;
               -moz-animation: moveSpanner 2s ease-in-out forwards;
        }
        .animation.workshops > #nut{ /* 130x150 */
            position: fixed;
            top: 7.5%;
            left: 47.5%;
            width: 5%;
            -webkit-transform-origin:center center;
               -moz-transform-origin:center center;
            -webkit-animation: tightenNut 1s ease-in-out 1s forwards;
               -moz-animation: tightenNut 1s ease-in-out 1s forwards;
        }
        @-webkit-keyframes moveSpanner{
            0%{
                top: 80%;
            }
            50%{
                top: 10%;
                -webkit-transform: rotate(0deg);
            }
            100%{
                top: 10%;
                -webkit-transform: rotate(60deg);
            }
        }
        @-moz-keyframes moveSpanner{
            0%{
                top: 80%;
            }
            50%{
                top: 10%;
                -moz-transform: rotate(0deg);
            }
            100%{
                top: 10%;
                -moz-transform: rotate(60deg);
            }
        }
        @-webkit-keyframes tightenNut{
            from{
                -webkit-transform: rotate(0deg);
            }
            to{
                -webkit-transform: rotate(60deg);
            }
        }
        @-moz-keyframes tightenNut{
            from{
                -moz-transform: rotate(0deg);
            }
            to{
                -moz-transform: rotate(60deg);
            }
        }
    </style>
</head>
<body>
    <?php $back="../../php/pages/home.php"; include '../../php/base/menu.php' ?>
    <div class="container-fluid white centered">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center title">EVENTS</h1>
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
            $default_img = '../../img/logo/200x200_dice_white.png';
            $event_list = scandir('../../php/events');
            unset($event_list[array_search('.', $event_list)]);
            unset($event_list[array_search('..', $event_list)]);
            unset($event_list[array_search('Sampark', $event_list)]);
            unset($event_list[array_search('Others', $event_list)]);
            unset($event_list[array_search('sample.html', $event_list)]);
            $event_row_count = 5;
            $event_count = count($event_list);
            $event_i = 0;
            foreach ( $event_list as $event ) {
                if (!is_dir('../../php/events/' . $event)) continue;

                $event_img = '../../img/events/categories/' . strtolower(str_replace("'", "", $event)) . ".jpg";
                if (!file_exists($event_img)) {
                    $event_img = $default_img;
                }
        ?>
            <?php if ( $event_i % $event_row_count == 0 ) {
                ?>
                <div class="row row-centered event-group
                <?php
                    // Give different class to indicate first and last row
                    if ( floor(($event_count-1)/$event_row_count) == 0 ) echo '';
                    elseif ($event_i == 0) echo ' first ';
                    elseif (floor($event_i/$event_row_count) == floor(($event_count-1)/$event_row_count)) echo ' last row-centered';
                ?>">
            <?php } ?>
                    <div class="col-md-2 col-sm-4 col-sm-offset-0 col-xs-6 col-centered event-item event-bg <?php
                        // Give different class to indicate first and last column
                        if ($event_i % $event_row_count == 0) echo ' first ';
                        elseif ($event_i % $event_row_count == $event_row_count-1) echo ' last ';
                    ?>" style="background:url('<?php echo $event_img; ?>') no-repeat; background-size: 100% 98%;">
                        <div>
                            <div class="dummy"></div>
                            <a class="category-link <?php echo str_replace(' ', '_', strtolower($event)) ?>"
                                href="../../php/pages/eventlist.php?category=<?php echo urlencode($event); ?>">
                                <div>
                                    <span class="vertical-table">
                                        <span class="vertical-table-cell">
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
    <div class="animation aerofest"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 50%; width: 50%; top:25%; left:-100%;
            background: url(../../img/events/Aerofest_animation.png) no-repeat center center;
            background-size: auto 100%;">
    </div>

    <div class="animation b-events"
        style="position:fixed; z-index: -1; top:0%; overflow: hidden;
        height: 100%; width: 100%; left:0%;">
        <canvas id="canvasB" style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation coding"
        style="position:fixed; z-index: -1;top:0%; overflow: hidden;
        height: 100%; width: 100%; left:0%;">
        <canvas id="canvasC" style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation department_flagship"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 50%; width: 50%; top:25%; left:-100%;
            background: url(../../img/events/shark.svg) no-repeat center center;
            background-size: auto 100%;">
    </div>

    <div class="animation design_and_build"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <!-- <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas> -->
    </div>

    <div class="animation electronics_fest"
        style="position:fixed; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <svg id="lightBulb" width="512px" height="512px" style="position:relative;top:4%;left:64%;">
          <g transform="scale(0.4)">
            <path
             d="M256,32c77.313,0,140,62.688,140,140c0,76.125-45.875,85-54.5,168c0,7.75-6.25,14-14,14h-143c-7.75,0-14-6.25-14-14h-0.031  C161.875,257,116,248.125,116,172C116,94.688,178.688,32,256,32 M326,368c7.75,0,14,6.25,14,14s-6.25,14-14,14H186  c-7.75,0-14-6.25-14-14s6.25-14,14-14H326 M326,410c7.75,0,14,6.25,14,14s-6.25,14-14,14H186c-7.75,0-14-6.25-14-14s6.25-14,14-14  H326 M312,452c0,15.469-12.531,28-28,28h-56c-15.469,0-28-12.531-28-28H312 M256,0C161.156,0,84,77.156,84,172  c0,47.625,15.563,74.969,29.25,99.125c11.625,20.438,21.688,38.156,25.281,71.094c0.344,7.313,2.438,14.188,5.844,20.219  C141.563,368.375,140,375,140,382c0,7.563,1.813,14.688,5.063,21c-3.25,6.313-5.063,13.438-5.063,21  c0,19.719,12.469,36.563,29.938,43.094C176.625,492.906,200.125,512,228,512h56c27.875,0,51.375-19.094,58.063-44.906  C359.531,460.563,372,443.719,372,424c0-7.563-1.844-14.688-5.094-21c3.25-6.313,5.094-13.438,5.094-21  c0-7-1.563-13.625-4.375-19.531c3.406-6.063,5.469-12.969,5.813-20.281c3.625-32.906,13.656-50.594,25.281-71.063  C412.438,247,428,219.625,428,172C428,77.156,350.844,0,256,0L256,0z"
             id="outline" style="fill:#fff"/>
            <path
             style="fill:#ffff00;fill-opacity:0"
             d="m 176.53788,349.35337 c -3.5604,-3.56039 -3.9161,-4.73975 -7.80621,-25.88218 -3.98698,-21.66893 -8.43728,-33.14979 -27.33103,-70.50848 -14.41134,-28.4956 -18.83314,-39.5383 -21.67995,-54.142 -9.13386,-46.85528 8.25238,-98.02934 44.2856,-130.348763 14.02991,-12.583895 45.4503,-28.701204 62.92083,-32.275673 16.29654,-3.33427 44.65023,-2.858953 61.18135,1.025634 25.15873,5.911957 44.55921,17.159779 65.13829,37.765245 27.16837,27.203197 38.58116,52.616717 40.59284,90.390537 1.82753,34.31618 -1.31725,44.75477 -31.28826,103.85621 -12.57205,24.79152 -16.67592,36.79698 -20.28932,59.35442 -4.14373,25.86809 1.93245,24.171 -86.54095,24.171 -65.965,0 -76.21827,-0.44103 -79.18319,-3.40595 z"
             id="glow"/>
          </g>
        </svg>
        <img id="battery" src="../../img/events/battery.svg" style="position:absolute;top:50%;left:25%;height:20%" alt="battery">
        <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation quizzing involve"
        style="position:fixed; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;">
        <div id="quizzes_div">
            <img id="speech" src="../../img/events/speech_bubble.png" alt="speech bubble">
            <img id="man" src="../../img/events/man.svg" alt="man">
            <p id="score">10</p>
        </div>
    </div>

    <div class="animation shows"
        style="position:fixed; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <div class="leftcurtain"><img src="../../img/events/frontcurtain.jpg" alt="curtain"/></div>
        <div class="rightcurtain"><img src="../../img/events/frontcurtain.jpg" alt="curtain"/></div>
    </div>

    <div class="animation spotlight"
        style="position:fixed; z-index: -1; overflow: hidden;
            height: 50%; width: 50%; top:25%; left:25%;display:none">
        <img src="../../img/events/rcCar.png" alt="RC car">
        <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation workshops"
        style="position:fixed; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <img id="spanner" class="img-responsive" src="../../img/events/spanner.svg" alt="spanner"> 
        <img id="nut" class="img-responsive" src="../../img/events/nut.svg" alt="nuts">
    </div>
    <div class="animation background"
        style="position:fixed; z-index: 5000; overflow: hidden;background-color:rgba(0,0,0,0.7);
            height: 100%; width: 100%; top:0%; left:0%;display:none">
    </div>

    <?php include '../../php/base/foot.php' ?>
    <?php include '../../php/modules/event_rightbar.php'; ?>

    <script type="text/javascript">
        var animation_time = 1000;
        $(document).ready(function() {
            $(".category-link").click(function(ev) {
                ev.preventDefault();
                var that = this;
                var $el = $(this);
                $('.animation.background').fadeIn(500);
                if( $el.hasClass("aerofest")) {
                    $('body').css('overflow', "hidden")
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time)

                } else if($el.hasClass("b-events")) {
                    animation_time = 2000;
                    $(".animation.b-events").css("z-index", 10000);
                    var canvas = document.getElementById("canvasB"),
                    ctx = canvas.getContext("2d");
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                    var points = [],
                    points2 = [],
                    currentPoint = 1,
                    nextTime = new Date().getTime()+500,
                    pace = 50;
                    // make some points
                    points.push({
                        x: 0.05*canvas.width,
                        y: 0.1*canvas.height
                    });
                    points.push({
                        x: 0.05*canvas.width,
                        y: 0.95*canvas.height
                    });
                    points.push({
                        x: 0.95*canvas.width,
                        y: 0.95*canvas.height
                    });
                    for (var i = 5; i < 60; i+=5) {
                        if(i==5){
                            points.push({
                                x: (0.05*canvas.width),
                                y: (0.95*canvas.height)
                            });
                        }else{
                            points.push({
                                x: (0.05*canvas.width) + (i)*(0.95*canvas.width/60),
                                y: (0.95*canvas.height-10*(i-5)) - 100*Math.random()
                            });
                        }
                    }
                    function drawGraph() {
                        if(new Date().getTime() > nextTime){
                            nextTime = new Date().getTime() + pace;
                            currentPoint++;
                            if(currentPoint > points.length){
                                currentPoint = 0;
                            }
                        }
                        ctx.lineWidth = 2;
                        ctx.strokeStyle = '#fff';
                        ctx.fillStyle = '#fff';
                        ctx.beginPath();
                        ctx.moveTo(points[0].x, points[0].y);
                        for (var p = 1; p < 3; p++) {
                            ctx.lineTo(points[p].x, points[p].y);
                        }
                        //Line Graph
                        ctx.stroke();
                        ctx.lineWidth = 5;
                        ctx.strokeStyle = '#fff';
                        ctx.fillStyle = '#fff';
                        ctx.beginPath();
                        ctx.moveTo(points[3].x, points[3].y);
                        for (var p = 4, plen = currentPoint; p < plen; p++) {
                            ctx.lineTo(points[p].x, points[p].y);
                        }
                        ctx.stroke();
                        //Bar Graph
                        // ctx.lineWidth = 20;
                        // ctx.strokeStyle = '#fff';
                        // ctx.fillStyle = '#fff';
                        // ctx.beginPath();
                        // for (var p = 4, plen = currentPoint; p < plen; p++) {
                        //     ctx.moveTo(points[p].x, 0.95*canvas.height);
                        //     ctx.lineTo(points[p].x, points[p].y);
                        // }
                        // ctx.stroke();
                        window.requestAnimationFrame(drawGraph);
                    }
                    drawGraph();

                } else if($el.hasClass("coding")) {
                    animation_time = 1800;
                    $(".animation.coding").css("z-index", 10000);
                    var canvas = document.getElementById("canvasC"),
                    ctx = canvas.getContext("2d");
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                    var Game_Interval = 0;
                    var yPositions = Array(300).join(0).split('');
                    var draw = function () {
                        ctx.fillStyle = 'rgba(0,0,0,0.05)';
                        ctx.fillRect(0, 0, canvas.width, canvas.width);
                        ctx.fillStyle = '#0F0';
                        ctx.font = '1em Georgia';
                        yPositions.map(function(y, index){
                            text = String.fromCharCode(1e2+Math.random()*33);
                            x = (index * 10)+10;
                            ctx.fillText(text, x, y);
                            if(y > 100 + Math.random()*1e4) {
                                yPositions[index] = 0;
                            } else {
                                yPositions[index] = y + 10;
                            }
                        });
                    }
                    Game_Interval = setInterval(draw, 5);
                    // setTimeout( function(){
                    //     $(".animation.coding").fadeOut(animation_time*0.05)
                    // }, animation_time*0.95);
                    // setTimeout(function(){
                    //     if(Game_Interval) clearInterval(Game_Interval);
                    // }, animation_time);

                } else if($el.hasClass("department_flagship")) {
                    $('body').css('overflow', "hidden")
                    $(".animation.department_flagship")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time);

                // } else if($el.hasClass("design_and_build")) {
                //     $(".animation.design_and_build")
                //         .css("z-index", 10000)
                //         .animate({
                //         left: "100%"
                //     }, animation_time)

                } else if($el.hasClass("electronics_fest")) {
                    $(".animation.electronics_fest").css("z-index", 10000);
                    animation_time = 1700;
                    setTimeout(function(){
                        $(".animation.electronics_fest").fadeIn(animation_time*0.1);
                    }, animation_time*0.05);
                    var canvas = $(".animation.electronics_fest").find("canvas")[0];
                    var ctx = canvas.getContext('2d');
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                    var bluePoints = [],
                    redPoints=[],
                    currentPoint = 1,
                    nextTime = new Date().getTime()+500,
                    pace = 50;
                    bluePoints.push( {x: 0.283*canvas.width,y: 0.69*canvas.height},
                                    {x: 0.283*canvas.width,y: 0.7*canvas.height},
                                    {x: 0.4*canvas.width,y: 0.7*canvas.height},
                                    {x: 0.4*canvas.width,y: 0.8*canvas.height},
                                    {x: 0.55*canvas.width,y: 0.8*canvas.height},
                                    {x: 0.55*canvas.width,y: 0.4*canvas.height},
                                    {x: 0.5*canvas.width,y: 0.4*canvas.height},
                                    {x: 0.5*canvas.width,y: 0.2*canvas.height},
                                    {x: 0.62*canvas.width,y: 0.2*canvas.height},
                                    {x: 0.62*canvas.width,y: 0.65*canvas.height},
                                    {x: 0.72*canvas.width,y: 0.65*canvas.height},
                                    {x: 0.72*canvas.width,y: 0.34*canvas.height});
                    redPoints.push({x:0.283*canvas.width,y:0.51*canvas.height},
                                    {x:0.283*canvas.width,y:0.50*canvas.height},
                                    {x:0.35*canvas.width,y:0.50*canvas.height},
                                    {x:0.35*canvas.width,y:0.3*canvas.height},
                                    {x:0.44*canvas.width,y:0.3*canvas.height},
                                    {x:0.44*canvas.width,y:0.7*canvas.height},
                                    {x:0.5*canvas.width,y:0.7*canvas.height},
                                    {x:0.5*canvas.width,y:0.5*canvas.height},
                                    {x:0.65*canvas.width,y:0.5*canvas.height},
                                    {x:0.65*canvas.width,y:0.7*canvas.height},
                                    {x:0.7*canvas.width,y:0.7*canvas.height},
                                    {x:0.7*canvas.width,y:0.34*canvas.height});
                    console.log(redPoints.length+" "+bluePoints.length);
                    function drawCircuit() {
                        if(new Date().getTime() > nextTime){
                            nextTime = new Date().getTime() + pace;

                            currentPoint++;
                            if(currentPoint > redPoints.length){
                                currentPoint = 0;
                            }
                        }
                        ctx.lineWidth = 5;
                        ctx.strokeStyle = '#cc3333';
                        ctx.fillStyle = '#cc3333';
                        ctx.beginPath();
                        ctx.moveTo(redPoints[0].x, redPoints[0].y);
                        for (var p = 0, plen = currentPoint; p < plen; p++) {
                            ctx.lineTo(redPoints[p].x, redPoints[p].y);
                        }
                        ctx.stroke();
                        ctx.lineWidth = 5;
                        ctx.strokeStyle = '#3333cc';
                        ctx.fillStyle = '#3333cc';
                        ctx.beginPath();
                        ctx.moveTo(bluePoints[0].x, bluePoints[0].y);
                        for (var p = 0, plen = currentPoint; p < plen; p++) {
                            ctx.lineTo(bluePoints[p].x, bluePoints[p].y);
                        }
                        ctx.stroke();
                        window.requestAnimationFrame(drawCircuit);
                    }
                    drawCircuit();
                    setTimeout(function(){
                        $("#glow").animate({fillOpacity:"1"},animation_time*0.2);
                    }, animation_time*0.6);

                } else if($el.hasClass("involve") || $el.hasClass("quizzing")) {
                    animation_time = 2200;
                    $(".animation.quizzing").css("z-index", 10000);
                    $('#man').fadeIn();
                    $('#score').fadeIn(200)
                    $('#speech')
                        .queue( function(next){
                        $(this).delay(800).fadeIn();
                        next();
                    });
                    $('#score')
                        .delay(1000)
                        .queue( function(next){
                        $(this).text("20");
                    });

                } else if($el.hasClass("sampark")) {
                    animation_time = 3500;
                    $(".animation.sampark").css("z-index", 10000);
                    setTimeout(function(){
                        $(".animation.sampark").fadeIn(animation_time*0.1);
                    }, animation_time*0.05);
                    //----------------mapBorder animation
                    var x = document.getElementById("indianMap");
                    x.style.fillOpacity = 0;
                    var pathLength = x.getTotalLength();
                    x.style.strokeDashoffset = pathLength;
                    duration = 1;
                    delay = 0.1;
                    x.style.strokeDasharray = pathLength+" "+pathLength;
                    x.style.WebkitAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                    x.style.mozAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                    // x.style.oAnimation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                    // x.style.animation = "mapBorder "+duration+"s ease-in-out "+delay+"s forwards";
                    //----------------location animation
                    var n = 8; //no. of sampark locations
                    for(var i=1;i<=n;i++){
                        sampark(i);
                    }
                    $(".coords path").css("fill-opacity","0");
                    $(".cities g").css("opacity","0");
                    function sampark(i){
                        setTimeout(function(){
                            console.log("hi"+i);
                            $(".coords path:nth-child("+i+")").animate({fillOpacity:"1"},animation_time*0.05);
                            $(".cities g:nth-child("+i+")").animate({opacity:"1"},animation_time*0.05);
                        },animation_time*0.05*i + 1100);
                    }

                } else if($el.hasClass("shows")) {
                    animation_time = 1100;
                    $(".animation.shows").css("z-index", 10000);
                    setTimeout(function(){
                        $(".animation.shows").fadeIn(animation_time*0.1);
                    }, animation_time*0.05);
                    setTimeout(function(){
                        $(".leftcurtain").stop().animate({width:'50%'}, 1000 );
                        $(".rightcurtain").stop().animate({width:'51%'}, 1000 );
                    },animation_time*0.1);

                    // setTimeout(function(){
                    //     $(".animation.shows").fadeOut(animation_time*0.05);
                    // }, animation_time*0.95);

                } else if($el.hasClass("spotlight")) {
                    animation_time = 1000;
                    setTimeout(function(){
                        $(".animation.spotlight").fadeIn(animation_time*0.1);
                    }, animation_time*0.05);
                     setTimeout(function(){
                        $(".animation.spotlight").fadeOut(animation_time*0.1);
                    }, animation_time*0.95);

                    $(".animation.spotlight").css("z-index", 10000);
                    var canvas = $(".animation.spotlight").find("canvas")[0];
                    var ctx = canvas.getContext('2d');
                    canvas.width = window.innerWidth/2;
                    canvas.height = window.innerHeight/2;
                    ctx.fillStyle = '#fff';
                    //start ramp
                    ctx.beginPath();
                    ctx.moveTo(0*canvas.width, canvas.height);
                    ctx.lineTo(0.12*canvas.width, canvas.height);
                    ctx.lineTo(0.12*canvas.width, 0.85*canvas.height);
                    ctx.closePath();
                    ctx.fill();
                    //landing ramp
                    ctx.beginPath();
                    ctx.moveTo(0.88*canvas.width, 0.85*canvas.height);
                    ctx.lineTo(0.88*canvas.width, canvas.height);
                    ctx.lineTo(1*canvas.width, canvas.height);
                    ctx.closePath();
                    ctx.fill();
                    //using CSS instead of jQeury for animation

                } else if($el.hasClass("workshops") || $el.hasClass('design_and_build')) {
                    animation_time = 2000;
                    $(".animation.workshops").css("z-index", 10000);
                    setTimeout(function(){
                        $(".animation.workshops").fadeIn(animation_time*0.1);
                    }, animation_time*0.05);
                }
                setTimeout(function() {
                    window.location = that.href;
                }, animation_time)
            });
        });
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
