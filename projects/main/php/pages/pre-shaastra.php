<?php include '../../php/base/logmein.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pre Shaastra | Shaastra 2015 | Sampark | Lectures | Workshops | Events | IIT Madras Techfest | Chennai</title>
    <meta name="keywords" content="pre shaastra 2015,pre shaastra,sampark,lectures,workshops,events">
    <meta name"description" content="Distance doesn’t matter anymore for Shaastra comes right to your doorstep to guarantee you the experience of a lifetime.Aimed at ‘Designing Dreams’, we proudly present Sampark'14">
    <meta name="robots" content="NOODP">
    <?php include '../../php/base/head.php' ?>
    <style>

        .dummy {
            margin-top: 100%; /* This is the height:width ratio */;
        }
        .dummy2{
                margin:50%;
        }
        .curtain {
			-moz-box-shadow: inset 0 0 0px 2px black;
			-webkit-box-shadow: inset 0 0 0px 2px black;
			box-shadow: inset 0 0 0px 2px black;
			-o-box-shadow: inset 0 0 0px 2px black;
			text-align: center;
        }
        .curtain a {
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
       .curtain a div {
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
        .curtain.top a:hover div {
            margin-top: 100%;
        }
        .curtain.bottom a:hover div {
            margin-top: -100%;
        }
        .space
        {
            margin:5%;
        }
        .col-xs-6,.col-xs-12{
        	padding-left:0;
        	padding-right:0;
        	-webkit-box-shadow(inset 0 0 1px transparent);
   -moz-box-shadow(inset 0 0 1px transparent);

        box-shadow(inset 0 0 1px transparent);
        }
    </style>
</head>
<body>
    <?php $back="../../php/pages/home.php"; include '../../php/base/menu.php' ?>
    <div class="container-fluid white centered">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center title">PRE SHAASTRA</h1>
                <div class="white breaker">
                    <span class="left"></span>
                        <div class="dice white"></div>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="space"></div>
                </div>
            </div>
        </div>
        <div class="col-xs-8 col-xs-offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 curtain top" style="background:url('../../img/SAMPARK.jpg') no-repeat; background-size: 100% 100%;">
                    <div>
                        <div class="dummy">
                        </div>
                        <a  href="../../php/pages/contentlist.php?name=sampark">
                            <div>
                                <span class="vertical-table">
                                        <span class="vertical-table-cell">
                                            <span>
                                                <span class="transparent-text" style="font-size:50px;">
                                                   SAMPARK
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6">
                   <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 curtain top" style="background:url('../../img/lectures.jpg') no-repeat; background-size: 100% 100%;">
                                <div>
                                <div class="dummy2">
                                </div>
                                <a  href="../../php/pages/contentlist.php?name=lectures">
                                    <div>
                                        <span class="vertical-table">
                                        <span class="vertical-table-cell">
                                            <span>
                                                <span class="transparent-text">
                                                   LECTURES
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6 curtain bottom" style="background:url('../../img/workshops.jpg') no-repeat; background-size: 100% 100%;">
                                <div>
                                <div class="dummy">
                                </div>
                                <a  href="../../php/pages/contentlist.php?name=workshops">
                                    <div>
                                       <span class="vertical-table">
                                        <span class="vertical-table-cell">
                                            <span>
                                                <span class="transparent-text">
                                                   WORKSHOPS
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    </div>
                                </a>
                                </div>
                            </div>
                            <div class="col-xs-6 curtain bottom" style="background:url('../../img/events.jpg') no-repeat; background-size: 100% 100%;">
                                <div>
                                <div class="dummy">
                                </div>
                                <a  href="../../php/pages/contentlist.php?name=events">
                                    <div>
                                        <span class="vertical-table">
                                        <span class="vertical-table-cell">
                                            <span>
                                                <span class="transparent-text" >
                                                   EVENTS
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    </div>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../../php/base/foot.php' ?>
    <?php include '../../php/modules/event_rightbar.php'; ?>
