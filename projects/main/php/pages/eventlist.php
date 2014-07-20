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
            letter-spacing: 10%; 
            text-transform: uppercase;
        }
        #event-list .event-group .event-item .transparent-text {
            background: #fff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            -moz-background-clip: text;
            -moz-text-fill-color: transparent;
            -ms-background-clip: text;
            -ms-text-fill-color: transparent;
            -o-background-clip: text;
            -o-text-fill-color: transparent;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-text-stroke-color: white;
            -webkit-text-stroke-width: 0.2px;
            -moz-text-stroke-color: white;
            -moz-text-stroke-width: 0.2px;
            -ms-text-stroke-color: white;
            -ms-text-stroke-width: 0.2px;
            -o-text-stroke-color: white;
            -o-text-stroke-width: 0.2px;
            text-stroke-color: white;
            text-stroke-width: 0.2px;
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
            height: 90%;
            width: 90%;
            margin: 5%;
            background-color: rgba(0, 0, 0, 0.95);
        }
        #event-list .event-group .event-item a div > span {
            margin: 0px;
            padding: 0px;
            display: table;
            height: 100%;
            width: 100%
        }
        #event-list .event-group .event-item a div > span > span {
            height: 100%;
            display: table-cell;
            vertical-align: middle;
            margin: auto;
            text-align: center;
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
        #event-list .event-group .event-item.first a div {
            margin-left: 10%;
            margin-right: 0%;
        }
        #event-list .event-group .event-item.last a div {
            margin-left: 0%;
            margin-right: 10%;
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
        #event-list .event-group .event-item.first a:hover div {
            margin-left: 100%;
        }
        #event-list .event-group .event-item.last a:hover div {
            margin-left: -100%;
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

    <div id="event-list" class="container-fluid">
        <div class="row event-group first">
            <div class="col-md-2 col-md-offset-1 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg first">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span class="transparent-text"> 
                                    Hackfest
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span class="transparent-text">
                                    Robowars
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span class="transparent-text">
                                    Boeing National Aero modelling Competition
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span class="transparent-text">
                                    Mobile Dev workshop
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg last">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span class="transparent-text">
                                    Open Programing Contest
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row event-group last">
            <div class="col-md-2 col-md-offset-1 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg first">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span>
                                    HELLO
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span>
                                    HELLO
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span>
                                    HELLO
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span>
                                    HELLO
                                </span>
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-6 col-xs-offset-3 event-item event-bg last">
                <div>
                    <div class="dummy"></div>
                    <a href="">
                        <div>
                            <span>
                                <span>
                                    HELLO
                                </span>
                            </span>
                        </div>
                    </a>
                </div> 
            </div>
        </div>
    </div>
    <?php include '../base/foot.php' ?>
</body>
</html>