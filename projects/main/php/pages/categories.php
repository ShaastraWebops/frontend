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
            /*padding-right: 0.2em;*/
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
            /*font-size: 1.5vw;*/
            font-weight: 900;
            font-family: "Times New Roman", sans-serif;
            letter-spacing: 0.1em;
            /*letter-spacing: 0.15vw; */
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
            background-color: rgba(0, 0, 0, 0.95);
            width: 100%;
            display: inline-block;
        }
        .animation.spotlight>img{
            position: absolute;
            top: 60%;
            left: -10%;
            -webkit-transform: rotate(-30deg);
            -webkit-animation: fly 0.8s linear forwards;
        }
        @-webkit-keyframes fly{
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
                -webkit-transform: rotate(30deg);   
            }
        }
        .animation.design_and_build>#spanner{
            position: absolute;
            top: 40%;
            left: 45%;
            -webkit-transform-origin:10% 10%;
            -webkit-transform: rotate(-55deg);
        }
        .animation.design_and_build>#nut{
            position: absolute;
            top: 40%;
            -webkit-transform: rotate();
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
        .animation.sampark>img{
            height: 100%;
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

    <div class="container-fluid vertical-table" style="height: 80%; padding: 0">
    <div class="row vertical-table-cell" style="">
    <div id="event-list" class="container-fluid">
        <?php
            $default_img = '../../img/logo/200x200_dice_white.png';
            $event_list = scandir('../events');
            $event_row_count = 4;
            $event_count = count($event_list);
            $event_i = 0;
            foreach ( $event_list as $event ) {
                if ($event === '.' or $event === '..') continue;
                if (!is_dir('../events/' . $event)) continue;

                $event_img = '../../img/events/' . $event . ".png";
                if (!file_exists($event_img)) {
                    $event_img = $default_img;
                }
        ?>
            <?php if ( $event_i % $event_row_count == 0 ) { ?>
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
                    ?>" style="background:url('<?php echo $event_img; ?>') no-repeat; background-size: 100% 100%;">
                        <div>
                            <div class="dummy"></div>
                            <a class="category-link <?php echo str_replace(' ', '_', strtolower($event)) ?>"
                            <a class="category-link <?php echo str_replace(' ', '_', strtolower($event)) ?>" 
                                href="../pages/eventlist.php?category=<?php echo urlencode($event); ?>">
                                <div>
                                    <span class="vertical-table">
                                        <span class="vertical-table-cell">
                                            <span>
                                                <!-- <span class="transparent-text">
                                                    <?php echo $event; ?>
                                                </span> -->
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
            height: 100%; width: 100%; top:0%; left:-100%;
            background: url(../../img/events/Aerofest_animation.png) no-repeat center center;
            background-size: auto 100%;">
    </div>

    <div class="animation b-events"
        style="position:absolute; z-index: -1;top:0%; overflow: hidden;
        height: 100%; width: 100%; left:0%;">
        <canvas id="canvasB" style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>        
    </div>

    <div class="animation coding"
        style="position:fixed; z-index: -1;top:0%; overflow: hidden;
        height: 100%; width: 100%; left:0%;">
        <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation department_flagship"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:-100%;
            background: url(../../img/events/Department_Flagship_animation.png) no-repeat center center;
            background-size: auto 100%;">
    </div>

    <div class="animation electronics_fest"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <svg width="185" height="255" id="svg2" style="position:relative;top:0%;left:85%;transform:scale(0.8);">
            <path style="fill:#fff;fill-opacity:1"
                d="m 60.592371,253.62886 c -4.95188,-3.14039 -10.25174,-9.6854 -11.90897,-14.70685 -0.69134,-2.09481 -2.10725,-3.66182 -4.02734,-4.45715 -3.98461,-1.65048 -8.32751,-6.77816 -10.45177,-12.34047 -1.33561,-3.49725 -1.58957,-6.04652 -1.08137,-10.85513 0.82209,-7.77864 0.82248,-8.79331 0.006,-16.48136 -0.36181,-3.40827 -0.21729,-7.4606 0.32115,-9.00518 0.61869,-1.77479 0.63346,-3.72647 0.0401,-5.30313 -0.51637,-1.37215 -1.55331,-5.95264 -2.30431,-10.17887 -2.16649,-12.19199 -3.69028,-16.23529 -13.12107,-34.81595 C 7.7458615,115.15427 5.6442315,108.2584 4.9598515,92.484763 c -0.79142,-18.24047 2.29078,-32.23239 10.3167795,-46.83391 10.65845,-19.390659 27.16723,-33.305786 48.25429,-40.6731651 5.58495,-1.9512658 8.93193,-2.4654418 15.40408,-2.3664298 l 8.26878,0.126497 -6.83948,0.878807 c -28.06813,3.6064808 -53.75437,22.9494819 -65.82416,49.5688309 -5.3219295,11.73728 -7.0649895,20.32288 -7.0649895,34.79937 0,17.606457 1.89822,24.394797 12.8629695,46.000007 10.1143,19.92948 10.84702,21.82561 13.52495,35 2.02741,9.97407 2.20812,12.37561 1.74981,23.25432 -0.13378,3.17537 0.31798,6.80145 1.00798,8.09073 1.0055,1.8788 0.99617,2.95017 -0.0476,5.47012 -4.01424,9.69123 1.92007,24.26154 11.06337,27.16351 1.06898,0.33928 2.44526,2.1369 3.05839,3.99471 2.81011,8.51471 12.17977,16.68679 21.15555,18.45157 l 4.35323,0.85591 -5.55422,0.10956 c -4.50693,0.0889 -6.40335,-0.42893 -10.05752,-2.74634 z m 50.964969,1.78087 c 8.97578,-1.76478 18.34545,-9.93686 21.15555,-18.45157 0.61313,-1.85781 1.98941,-3.65543 3.0584,-3.99471 9.1433,-2.90197 15.07761,-17.47228 11.06337,-27.16351 -1.0438,-2.51995 -1.05312,-3.59132 -0.0476,-5.47012 0.69,-1.28928 1.14175,-4.91536 1.00798,-8.09073 -0.4707,-11.17289 -0.30846,-13.35355 1.74656,-23.47457 2.43909,-12.0126 5.43791,-19.89644 12.29824,-32.33177 11.26215,-20.4143 14.19812,-30.58695 14.12705,-48.947987 -0.0859,-22.19491 -7.16145,-40.54858 -21.9902,-57.041726 C 141.56011,16.632814 121.30132,5.9625009 103.04359,3.6165621 l -6.839479,-0.878807 8.268779,-0.126497 c 6.47215,-0.09901 9.81913,0.415164 15.40409,2.3664298 21.08706,7.3673791 37.59584,21.2825061 48.25428,40.6731651 8.02601,14.60152 11.10821,28.59344 10.31679,46.83391 -0.68689,15.831217 -2.78053,22.656067 -13.34439,43.500007 -5.78594,11.41645 -9.72687,20.56027 -10.77485,25 -4.92788,20.87671 -5.19889,22.41731 -4.34131,24.67915 0.48397,1.27647 0.60375,5.24585 0.26618,8.82085 -0.77621,8.22037 -0.77445,9.15741 0.0316,16.78449 0.5082,4.80861 0.25425,7.35788 -1.08136,10.85513 -2.12427,5.56231 -6.46716,10.68999 -10.45177,12.34047 -1.94772,0.80678 -3.33641,2.36358 -4.05761,4.54884 -1.65709,5.02105 -7.51625,12.10886 -12.35296,14.94336 -3.28372,1.92439 -5.60498,2.50156 -9.72535,2.41814 l -5.41214,-0.10956 4.35323,-0.85591 z M 69.944971,240.49017 c -3.94661,-2.40628 -7.23204,-7.51588 -7.23712,-11.2554 l -0.004,-2.75 29,0 28.999999,0 -0.004,2.75 c -0.005,3.73952 -3.29051,8.84912 -7.23712,11.2554 -2.94203,1.79378 -5.05919,1.98712 -21.759139,1.98712 -16.69995,0 -18.81711,-0.19334 -21.75914,-1.98712 z m 40.041259,-1.36738 c 3.7787,-1.59936 6.17464,-4.079 7.62353,-7.88985 l 1.04485,-2.74817 -26.950499,0 -26.9505,0 1.04485,2.74817 c 1.41518,3.7222 3.8127,6.26335 7.40565,7.84932 4.24321,1.87299 32.379399,1.904 36.782119,0.0405 z M 50.878431,219.17032 c -2.97957,-3.17161 -2.91297,-8.64299 0.14014,-11.51124 2.29358,-2.15471 2.6616,-2.17431 40.82568,-2.17431 l 38.511229,0 2.17432,2.31445 c 2.97957,3.17161 2.91296,8.64299 -0.14014,11.51124 -2.29359,2.15471 -2.66161,2.17431 -40.825689,2.17431 l -38.51123,0 z m 79.371129,-2.1401 c 1.35,-1.35 2.45455,-2.94545 2.45455,-3.54545 0,-0.6 -1.10455,-2.19545 -2.45455,-3.54545 l -2.45454,-2.45455 -36.090909,0 -36.09091,0 -2.45454,2.45455 c -1.35,1.35 -2.45454,2.94545 -2.45454,3.54545 0,0.6 1.10454,2.19545 2.45454,3.54545 l 2.45454,2.45455 36.09091,0 36.090909,0 z m -79.371129,-18.8599 c -2.97957,-3.17161 -2.91297,-8.64299 0.14014,-11.51124 2.29358,-2.15471 2.6616,-2.17431 40.82568,-2.17431 l 38.511229,0 2.17432,2.31445 c 2.97957,3.17161 2.91296,8.64299 -0.14014,11.51124 -2.29359,2.15471 -2.66161,2.17431 -40.825689,2.17431 l -38.51123,0 z m 79.371129,-2.1401 c 1.35,-1.35 2.45455,-2.94545 2.45455,-3.54545 0,-0.6 -1.10455,-2.19545 -2.45455,-3.54545 l -2.45454,-2.45455 -36.090909,0 -36.09091,0 -2.45454,2.45455 c -1.35,1.35 -2.45454,2.94545 -2.45454,3.54545 0,0.6 1.10454,2.19545 2.45454,3.54545 l 2.45454,2.45455 36.09091,0 36.090909,0 z"
                id="path3112"/>
            <path style="fill:#ff0;fill-opacity:0;stroke:#fff;"
                d="m 54.60101,178.57084 c -4.80169,-0.63497 -5.29876,-1.5197 -7.95167,-14.1534 C 44.3001,153.22988 42.63569,148.76197 34.70162,132.34509 26.66697,115.72011 25.00889,111.85736 23.14208,105.4154 19.79153,93.853352 20.51703,76.516826 24.8824,63.828654 30.60671,47.190639 44.51108,31.729193 60.7807,23.910286 69.44365,19.74702 77.19512,17.67089 86.54625,17.009324 c 24.18634,-1.711117 46.74296,8.513195 61.6966,27.965424 9.4615,12.307851 14.08339,26.586916 14.07811,43.493531 -0.004,13.261931 -1.86048,19.479371 -12.12007,40.593821 -9.86684,20.30615 -10.7206,22.55464 -13.42468,35.35534 -1.97078,9.32941 -3.25609,12.50739 -5.51541,13.63706 -1.30026,0.65012 -6.63885,0.76787 -37.62819,0.82996 -19.86212,0.0398 -37.42634,-0.10134 -39.0316,-0.31362 l 0,0 z"
                id="glow"/>
        </svg>
        <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation spotlight"
        style="position:fixed; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <img src="../../img/events/rcCar.png">
        <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation design_and_build"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <!-- <img id="nut" src="../../img/events/nut.png"> -->
        <!-- <img id="spanner" src="../../img/events/spanner.png"> -->
        <!-- <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas> -->
    </div>

    <div class="animation sampark"
        style="position:fixed; z-index: -1; overflow: auto;
            height: 100%; width: 100%; top:0%; left:0%;display:none" align="center">
        <!-- <img src="../../img/events/samparkMap.png"> -->
    </div>

    <div class="animation shows"
        style="position:fixed; z-index: -1; overflow: auto;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <div class="leftcurtain"><img src="../../img/events/frontcurtain.jpg"/></div>
        <div class="rightcurtain"><img src="../../img/events/frontcurtain.jpg"/></div>
    </div>

    <?php include '../base/foot.php' ?>    

    <script type="text/javascript">
        var animation_time = 1000;
        $(document).ready(function() {
            $(".category-link").click(function(ev) {
                ev.preventDefault();
                var that = this;
                var $el = $(this);
                if( $el.hasClass("aerofest")) {
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time)
                        
                } else if($el.hasClass("b-events")) {
                    animation_time = 2200;
                    $(".animation.b-events").css("z-index", 10000);
                    // var $canvas = $(".animation.b-events").find("canvas")
                    // var ctx = $canvas[0].getContext('2d');
                    // $canvas.width('100%');
                    // $canvas.height('100%');
                    var canvas = document.getElementById("canvasB"),
                    ctx = canvas.getContext("2d");
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                    var points = [],
                    points2 = [],
                    currentPoint = 1,
                    nextTime = new Date().getTime()+500,
                    pace = 10;
                    // make some points
                    points.push({
                        // x: 0.05*$canvas.width(), 
                        // y: 0.1*$canvas.height()
                        x: 0.05*canvas.width, 
                        y: 0.1*canvas.height                        
                    });
                    points.push({
                        // x: 0.05*$canvas.width(), 
                        // y: 0.95*$canvas.height()
                        x: 0.05*canvas.width, 
                        y: 0.95*canvas.height
                    });
                    points.push({
                        // x: 0.95*$canvas.width(), 
                        // y: 0.95*$canvas.height()
                        x: 0.95*canvas.width, 
                        y: 0.95*canvas.height
                    });
                    for (var i = 3; i < 50; i++) {
                        points.push({
                            // x: (0.1*$canvas.width())+i * (0.8*$canvas.width()/100),
                            // y: (0.8*$canvas.height()-4*i) + Math.sin(1.2*i) * 100
                            x: (0.1*canvas.width)+i * (0.8*canvas.width/50),
                            y: (0.8*canvas.height-10*i) + 100*Math.random()
                        });
                    }                    
                    for (var i = 3; i < 50; i++) {
                        points2.push({
                            x: (0.1*canvas.width)+i * (0.8*canvas.width/50),
                            y: (0.8*canvas.height-10*i) + 100*Math.random()
                        });
                    }
                    function drawGraph() {
                        if(new Date().getTime() > nextTime){
                            nextTime = new Date().getTime() + pace;
                            currentPoint++;
                            if(currentPoint > points.length){
                                currentPoint = 0;
                            }
                        }
                        // ctx.clearRect(0,0,canvas.width, canvas.height);
                        ctx.lineWidth = 2;
                        ctx.strokeStyle = '#fff';
                        ctx.fillStyle = '#fff';
                        ctx.beginPath();
                        ctx.moveTo(points[0].x, points[0].y);                        
                        for (var p = 1; p < 3; p++) {
                            ctx.lineTo(points[p].x, points[p].y);
                        }
                        ctx.stroke();

                        ctx.lineWidth = 5;
                        ctx.strokeStyle = '#00f';
                        ctx.fillStyle = '#00f';                    
                        ctx.beginPath();
                        ctx.moveTo(points[3].x, points[3].y);                        
                        for (var p = 4, plen = currentPoint; p < plen; p++) {
                            ctx.lineTo(points[p].x, points[p].y);
                        }
                        ctx.stroke();

                        ctx.lineWidth = 5;
                        ctx.strokeStyle = '#f00';
                        ctx.fillStyle = '#f00';                    
                        ctx.beginPath();
                        ctx.moveTo(points2[3].x, points2[3].y);                        
                        for (var p = 4, plen = currentPoint; p < plen; p++) {
                            ctx.lineTo(points2[p].x, points2[p].y);
                        }
                        ctx.stroke();
                        window.requestAnimationFrame(drawGraph);
                    }
                    drawGraph();
                    // setTimeout( function(){
                    //     $(".animation.b-events").fadeOut(animation_time*0.1)
                    // }, animation_time*0.9);

                } else if($el.hasClass("coding")) {
                    animation_time = 1800;
                    $(".animation.coding").css("z-index", 10000);
                    var $canvas = $(".animation.coding").find("canvas")
                    var Game_Interval = 0;
                    var yPositions = Array(300).join(0).split('');
                    var ctx = $canvas[0].getContext('2d');
                    $canvas.width('100%')
                    $canvas.height('100%')
                    var draw = function () {
                        ctx.fillStyle = 'rgba(0,0,0,0.05)';
                        ctx.fillRect(0, 0, $canvas.width(), $canvas.width());
                        ctx.fillStyle = '#0F0';
                        ctx.font = '0.8em Georgia';
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
                    $(".animation.department_flagship")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time);

                } else if($el.hasClass("design_and_build")) {
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time)

                } else if($el.hasClass("electronics_fest")) {
                    $(".animation.electronics_fest").css("z-index", 10000);
                    animation_time = 1700;
                    setTimeout(function(){
                        $(".animation.electronics_fest").fadeIn(animation_time*0.1);
                    }, animation_time*0.05);
                    // setTimeout(function(){
                    //     $(".animation.electronics_fest").fadeOut(animation_time*0.1);
                    // }, animation_time*0.95);
                    var canvas = $(".animation.electronics_fest").find("canvas")[0];
                    var ctx = canvas.getContext('2d');
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
                    var bluePoints = [],
                    redPoints=[],
                    currentPoint = 1,
                    nextTime = new Date().getTime()+500,
                    pace = 50;
                    // for (var i = 0; i < 10; i++) {
                    redPoints.push( 
                                    // {x: 0.47*canvas.width,y: 0.73*canvas.height},
                                    // {x: 0.48*canvas.width,y: 0.73*canvas.height},
                                    {x: 0.495*canvas.width,y: 0.62*canvas.height},
                                    {x: 0.6*canvas.width,y: 0.62*canvas.height},
                                    {x: 0.6*canvas.width,y: 0.8*canvas.height},
                                    {x: 0.75*canvas.width,y: 0.8*canvas.height},
                                    {x: 0.75*canvas.width,y: 0.4*canvas.height},
                                    {x: 0.7*canvas.width,y: 0.4*canvas.height},
                                    {x: 0.7*canvas.width,y: 0.2*canvas.height},                                    
                                    {x: 0.82*canvas.width,y: 0.2*canvas.height},
                                    {x: 0.82*canvas.width,y: 0.65*canvas.height},
                                    {x: 0.92*canvas.width,y: 0.65*canvas.height},
                                    {x: 0.92*canvas.width,y: 0.34*canvas.height});
                    bluePoints.push( 
                                    // {x:0.42*canvas.width,y:0.47*canvas.height},
                                    {x:0.495*canvas.width,y:0.59*canvas.height},
                                    {x:0.55*canvas.width,y:0.59*canvas.height},
                                    {x:0.55*canvas.width,y:0.3*canvas.height},
                                    {x:0.64*canvas.width,y:0.3*canvas.height},
                                    {x:0.64*canvas.width,y:0.7*canvas.height},
                                    {x:0.7*canvas.width,y:0.7*canvas.height},
                                    {x:0.7*canvas.width,y:0.5*canvas.height},
                                    {x:0.85*canvas.width,y:0.5*canvas.height},
                                    {x:0.85*canvas.width,y:0.7*canvas.height},
                                    {x:0.9*canvas.width,y:0.7*canvas.height},
                                    // {x:0.9*canvas.width,y:0.34*canvas.height},
                                    {x:0.9*canvas.width,y:0.34*canvas.height});
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
                        ctx.strokeStyle = '#f00';
                        ctx.fillStyle = '#f00';                    
                        ctx.beginPath();
                        ctx.moveTo(redPoints[0].x, redPoints[0].y);                        
                        for (var p = 0, plen = currentPoint; p < plen; p++) {
                            ctx.lineTo(redPoints[p].x, redPoints[p].y);
                        }
                        ctx.stroke();
                        ctx.lineWidth = 5;
                        ctx.strokeStyle = '#00f';
                        ctx.fillStyle = '#00f';                    
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

                } else if($el.hasClass("involve_and_quizzes")) {
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time)

                } else if($el.hasClass("sampark")) {
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time);

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
                    animation_time = 800;
                    setTimeout(function(){
                        $(".animation.spotlight").fadeIn(animation_time*0.1);
                    }, animation_time*0.05);
                    setTimeout(function(){
                        $(".animation.spotlight").fadeOut(animation_time*0.1);
                    }, animation_time*0.95);

                    $(".animation.spotlight").css("z-index", 10000);
                    var canvas = $(".animation.spotlight").find("canvas")[0];
                    var ctx = canvas.getContext('2d');
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight;
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

                } else if($el.hasClass("workshops")) {
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time)
                }
                setTimeout(function() {
                    window.location = that.href;
                }, animation_time)
            });
        });
    </script>
</body>
</html>
