<!DOCTYPE html>
<html>
    <head>

        <?php
            if (isset($logged_in) && $logged_in) {
                header('Location: ../pages/dashboard.php');
            } else {
                //header('Location: ../pages/login.php');
            }
        ?>
        <title>Login | Shaatsra '15</title>
        <?php include '../base/head.php' ?>

        <style>
            .login-box {

                padding: 0.5em;
            }
            .login-form {
                /* Size & position */
                width: 100%;
                margin: 3em auto 0%;
                padding: 10px;
                position: relative; /* For the submit button positioning */

                /* Styles */
                box-shadow:
                    0 0 1px rgba(0, 0, 0, 0.3),
                    0 3px 7px rgba(0, 0, 0, 0.3),
                    inset 0 1px rgba(255,255,255,1),
                    inset 0 -3px 2px rgba(0,0,0,0.25);
                border-radius: 5px;
                background: white; /* Fallback */
                background: -moz-linear-gradient(#eeefef, #ffffff 10%);
                background: -ms-linear-gradient(#eeefef, #ffffff 10%);
                background: -o-linear-gradient(#eeefef, #ffffff 10%);
                background: -webkit-gradient(linear, 0 0, 0 100%, from(#eeefef), color-stop(0.1, #ffffff));
                background: -webkit-linear-gradient(#eeefef, #ffffff 10%);
                background: linear-gradient(#eeefef, #ffffff 10%);
            }

            .login-form .field {
                position: relative; /* For the icon positioning */
            }

            .login-form .field i {
                /* Size and position */
                left: 0px;
                top: 0px;
                position: absolute;
                height: 36px;
                width: 36px;

                /* Line */
                border-right: 1px solid rgba(0, 0, 0, 0.1);
                box-shadow: 1px 0 0 rgba(255, 255, 255, 0.7);

                /* Styles */
                color: #777777;
                text-align: center;
                line-height: 42px;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -ms-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
                pointer-events: none;
            }

            .login-form input[type=text],
            .login-form input[type=password] {
                font-family: 'Lato', Calibri, Arial, sans-serif;
                font-size: 13px;
                font-weight: 400;
                text-shadow: 0 1px 0 rgba(255,255,255,0.8);
                /* Size and position */
                width: 100%;
                padding: 10px 18px 10px 45px;

                /* Styles */
                border: none; /* Remove the default border */
                box-shadow:
                    inset 0 0 5px rgba(0,0,0,0.1),
                    inset 0 3px 2px rgba(0,0,0,0.1);
                border-radius: 3px;
                background: #f9f9f9;
                color: #777;
                -webkit-transition: color 0.3s ease-out;
                -moz-transition: color 0.3s ease-out;
                -ms-transition: color 0.3s ease-out;
                -o-transition: color 0.3s ease-out;
                transition: color 0.3s ease-out;
            }

            .login-form input[type=text] {
                margin-bottom: 10px;
            }

            .login-form input[type=text]:hover ~ i,
            .login-form input[type=password]:hover ~ i {
                color: #52cfeb;
            }

            .login-form input[type=text]:focus ~ i,
            .login-form input[type=password]:focus ~ i {
                color: #42A2BC;
            }

            .login-form input[type=text]:focus,
            .login-form input[type=password]:focus,
            .login-form button[type=submit]:focus {
                outline: none;
            }

            .login-form .submit {
                /* Size and position */
                width: 65px;
                height: 65px;
                position: absolute;
                top: 17px;
                right: -25px;
                padding: 10px;
                z-index: 2;

                /* Styles */
                background: #ffffff;
                border-radius: 50%;
                box-shadow:
                    0 0 2px rgba(0,0,0,0.1),
                    0 3px 2px rgba(0,0,0,0.1),
                    inset 0 -3px 2px rgba(0,0,0,0.2);
            }

            .login-form .submit:after {
                /* Size and position */
                content: "";
                width: 10px;
                height: 10px;
                position: absolute;
                top: -2px;
                left: 30px;

                /* Styles */
                background: #ffffff;

                /* Other masks trick */
                box-shadow: 0 62px white, -32px 31px white;
            }

            .login-form button {
                /* Size and position */
                width: 100%;
                height: 100%;
                margin-top: -1px;

                /* Icon styles */
                font-size: 1.4em;
                line-height: 1.75;
                color: white;

                /* Styles */
                border: none; /* Remove the default border */
                border-radius: inherit;
                background: #52cfeb; /* Fallback */
                background: -moz-linear-gradient(#52cfeb, #42A2BC);
                background: -ms-linear-gradient(#52cfeb, #42A2BC);
                background: -o-linear-gradient(#52cfeb, #42A2BC);
                background: -webkit-gradient(linear, 0 0, 0 100%, from(#52cfeb), to(#42A2BC));
                background: -webkit-linear-gradient(#52cfeb, #42A2BC);
                background: linear-gradient(#52cfeb, #42A2BC);
                box-shadow:
                    inset 0 1px 0 rgba(255,255,255,0.3),
                    0 1px 2px rgba(0,0,0,0.35),
                    inset 0 3px 2px rgba(255,255,255,0.2),
                    inset 0 -3px 2px rgba(0,0,0,0.1);

                cursor: pointer;
            }

            .login-form button:hover,
            .login-form button[type=submit]:focus {
                background: #52cfeb;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -ms-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }

            .login-form button:active {
                background: #42A2BC;
                box-shadow:
                    inset 0 0 5px rgba(0,0,0,0.3),
                    inset 0 3px 4px rgba(0,0,0,0.3);
            }
            /* Social Icons used in places */
            a.social-icon {
                margin:5px 5px 0px 5px;
                padding:0px 0px 0px 0px;
                width:100%;
                height:60px;
                float:left;
                color: #fff;
                font-size: 2em;
                text-decoration: none;
                background: transparent;
                border:solid 1px #222121;
                -moz-border-radius: 5px;
                -webkit-border-radius:5px;
                border-radius:5px;
                border: 2px solid #fff;
                border: 2px outset rgba(255, 255, 255, 0.8);
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }
            a.social-icon .text {
                margin-left: 60px;
                -webkit-transition: all 0.3s ease-out;
                -moz-transition: all 0.3s ease-out;
                -o-transition: all 0.3s ease-out;
                transition: all 0.3s ease-out;
            }
            a.social-icon.facebook {
                background: transparent url(../../img/icons/facebook.png) no-repeat -0px -88px;
            }
            a.social-icon.facebook:hover {
                background-position: -0px -0px;
            }
            a.social-icon.facebook .text {
                color: #5473a3;
            }
            a.social-icon.facebook:hover .text {
                color: #fff;
            }
            a.social-icon.twitter {
                background: transparent url(../../img/icons/twitter.png) no-repeat -0px -88px;
            }
            a.social-icon.twitter:hover {
                background-position: -0px -0px;
            }
            a.social-icon.twitter .text {
                color: #56acef;
            }
            a.social-icon.twitter:hover .text {
                color: #fff;
            }
            a.social-icon.google {
                background:transparent url(../../img/icons/google.png) no-repeat -0px -88px;
            }
            a.social-icon.google:hover {
                background-position: -0px -0px;
            }
            a.social-icon.google .text {
                color: #d34836;
            }
            a.social-icon.google:hover .text {
                color: #fff;
            }
        </style>

    </head>

    <body>
        <?php include '../base/menu.php' ?>

        <div class="container-fluid title white centered" style='margin-bottom:2%;'>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">LOGIN</h1>
                    <div class="white breaker">
                        <span class="left"></span>
                        <div class="dice white"></div>
                        <span class="right"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid white" style="height: auto;">
            <div class="row row-centered">
                <div class="col-md-3 col-centered text-center">
                    <span style="font-size: 1.2em;">Join us with one click</span>
                </div>
            </div>

            <div class="row row-centered">

                <div class="col-md-4 text-center col-centered">
                    <a class="social-icon facebook" href="https://www.facebook.com/Shaastra">
                        <span class="text">Login using Facebook</span>
                    </a>
                </div>
            </div>

            <div class="row row-centered">
                <div class="col-md-4 text-center col-centered">
                    <a class="social-icon twitter" href="https://twitter.com/ShaastraIITM">
                        <span class="text">Login using Twitter</span>
                    </a>
                </div>
            </div>

            <div class="row row-centered">
                <div class="col-md-4 text-center col-centered">
                    <a class="social-icon google" href="https://www.youtube.com/user/iitmshaastra">
                        <span class="text">Login using Google Plus</span>
                    </a>
                </div>
            </div>


            <div class="row row-centered" style="padding-top: 5%;">
                <div class="col-md-3 col-centered text-center">
                    <span style="font-size: 2em;">OR</span>
                    <span style="font-size: 1.2em;">, Login using your Shaastra account</span>
                </div>
            </div>

            <div class="row row-centered" style="height: 100%;">
                <div class="col-md-4 col-centered login-box">
                    <h3 style="">
                        <a href="" class="label label-danger white no-style pull-left"> Forgot Password </a>
                        <a href="" class="label label-primary white no-style pull-right"> Register </a>
                    </h3>
                    <form class="login-form">
    					<p class="field">
    						<input type="text" name="login" placeholder="Username or EMail or Shaastra ID">
    						<i class="glyphicon glyphicon-user"></i>
    					</p>
    						<p class="field">
    							<input type="password" name="password" placeholder="Password">
    							<i class="glyphicon glyphicon-lock"></i>
    					</p>
    					<p class="submit">
    						<button type="submit" name="submit"><i class="glyphicon glyphicon-arrow-right"></i></button>
    					</p>
    				</form>
                </div>
            </div>

        </div>
    </body>
    <?php include '../base/foot.php' ?>
</html>
