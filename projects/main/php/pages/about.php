<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>About | Shaastra '15</title>
        <?php include '../base/head.php' ?>
        <style>
            .main {
                color : #ffffff;
                /*padding: 5px;*/
                /*margin: 0 auto;*/
                margin-top: 40px;
                /*margin-left: 200px;*/
                /*margin-right: 200px;*/
                font-weight: 10;
                font-size: 1.1em;
                text-align: justify;
            }
        </style>
    </head>

    <body>
        <?php include '../base/menu.php' ?>

        <div class="container-fluid title white centered" style="margin-bottom:2%">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">ABOUT US</h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid main white">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <p>
                        <span class='shaastra-title'>Shaastra</span> is the annual technical festival of Indian Institute of Technology Madras, Chennai, India and the first ISO certified festival of its kind.
                    </p>
                    <br />
                    <p><span class=''>Shaastra</span> returns in its 16th edition, bringing with it an experience of innovation, competition and learning that has become its hallmark over the years.
                    </p>
                    <br />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <iframe width="100%" height="300px" src="//www.youtube.com/embed/PJDylHdwJec" frameborder="0" allowfullscreen align="left"></iframe>
                </div>
                <div class="col-md-6">
                    <p>
                        Mark the four days from January 3rd to January 6th, 2015 on your calendars, as <span class=''>Shaastra</span> will keep you engrossed in a plethora of professional shows, competitions and lectures that have something for everybody. With some of the sharpest minds of the nation converging under one banner, one can expect to go back inspired.
                    </p>
                    <br />
                    <p>
                        The classic events of <span class=''>Shaastra</span> shall return bigger and better and be joined by an injection of new exciting competitions. Envisage 3.0 will showcase several new acts crafted completely by students. With Airshow, Fire and Ice, Shaastra Junior Quiz, Robowars and several such competitions will both entertain and challenge the participants. One can also head back indoors to hear some of the pioneers of technology across the globe share their views on the latest happenings of the world. We shall also celebrate the contributions of Indian researchers across all branches of science by hosting the Research Expo, giving students a stage to showcase their groundbreaking research.
                    </p>
                </div>
            </div>
        </div>

        <?php include '../base/foot.php' ?>
    </body>

</html>
