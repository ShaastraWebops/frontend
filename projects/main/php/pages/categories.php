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
            $event_row_count = 5;
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
        style="position:absolute; z-index: -1;top:0%; overflow: hidden;
        height: 100%; width: 100%; left:0%;">
        <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
    </div>

    <div class="animation department_flagship"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:-100%;
            background: url(../../img/events/Department_Flagship_animation.png) no-repeat center center;
            background-size: auto 100%;">
    </div>

    <div class="animation spotlight"
        style="position:absolute; z-index: -1; overflow: hidden;
            height: 100%; width: 100%; top:0%; left:0%;display:none">
        <img src="../../img/events/rcCar.png">
        <canvas style="position:absolute; left:0px; top:0px;">Sorry Browser Won't Support</canvas>
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
                    for (var i = 3; i < 100; i++) {
                        points.push({
                            // x: (0.1*$canvas.width())+i * (0.8*$canvas.width()/100),
                            // y: (0.8*$canvas.height()-4*i) + Math.sin(1.2*i) * 100
                            x: (0.1*canvas.width)+i * (0.8*canvas.width/100),
                            y: (0.8*canvas.height-4*i) + Math.sin(1.2*i) * 100
                        });
                    }
                    function draw() {

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
                        ctx.strokeStyle = '#00425a';
                        ctx.fillStyle = '#00425a';                    
                        ctx.beginPath();
                        ctx.moveTo(points[3].x, points[3].y);                        
                        for (var p = 4, plen = currentPoint; p < plen; p++) {
                            ctx.lineTo(points[p].x, points[p].y);
                        }
                        ctx.stroke();

                        window.requestAnimationFrame(draw);
                    }
                    draw();
                    setTimeout( function(){
                        $(".animation.b-events").fadeOut(animation_time*0.1)
                    }, animation_time*0.9);

                } else if($el.hasClass("coding")) {
                    animation_time = 2000;
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
                        ctx.font = '10pt Georgia';
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
                    setTimeout( function(){
                        $(".animation.coding").fadeOut(animation_time*0.1)
                    }, animation_time*0.9);
                    setTimeout(function(){
                        if(Game_Interval) clearInterval(Game_Interval);
                    }, animation_time);

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
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time)
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
                    }, animation_time)
                } else if($el.hasClass("shows")) {
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "100%"
                    }, animation_time)
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
                    //end ramp
                    ctx.beginPath();
                    ctx.moveTo(0.88*canvas.width, 0.85*canvas.height);
                    ctx.lineTo(0.88*canvas.width, canvas.height);
                    ctx.lineTo(1*canvas.width, canvas.height);                    
                    ctx.closePath();
                    ctx.fill();
                    // var img = $(".animation.spotlight>img");
                    // img.css("position","absolute");

                    // img.css("top","55%");
                    // img.css("left","-10%");
                    // img.css("-webkit-transform","rotate(-30deg)");

                    // img.animate({top:"55%", left:"-10%"},"slow");
                    // img.animate({top:"20%", left:"30%"},"slow");
                    // img.animate({webkitTransform:"rotate(30deg)"},"slow");
                    // img.animate({
                    //     step: function() {
                    //       $(this).css('-webkit-transform','rotate(30deg)');
                    //       // $(this).css('-moz-transform','rotate('+now+'deg)'); 
                    //       // $(this).css('-ms-transform','rotate('+now+'deg)');
                    //       // $(this).css('-o-transform','rotate('+now+'deg)');
                    //       // $(this).css('transform','rotate('+now+'deg)');  
                    //     },
                    //     duration:'slow'
                    // },'linear');

                    // img.css("top","60%");
                    // img.css("left","70%");
                    // img.css("-webkit-transform","rotate(30deg)");
                    //using CSS instead of jQeury for animation
                    

                } else if($el.hasClass("workshops")) {
                    $(".animation.aerofest")
                        .css("z-index", 10000)
                        .animate({
                        left: "50%"
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
