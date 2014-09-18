<?php
    session_start();
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] >= 0 ) {
        header('Location: ../pages/dashboard.php');
    } else {
        //header('Location: ../pages/login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login | Shaastra '15</title>
        <?php include '../base/head.php' ?>

        <style>
            .my-tab {
                padding: 2em 1em 3em 1em;
            }
            .login-form {
                /* Size & position */
                width: 100%;
                margin: 0 auto 0%;
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
            .register-box {
                background-color: rgba(0, 0, 0, 0.2);
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
                background: transparent url(../../img/icons/facebook.png) no-repeat -0px -0px;
                background-size: 60px 150px;
            }
            a.social-icon.facebook:hover {
                background-position: -0px -88px;
            }
            a.social-icon.facebook .text {
                color: #5473a3;
            }
            a.social-icon.facebook:hover .text {
                color: #fff;
            }
            a.social-icon.google {
                background:transparent url(../../img/icons/google.png) no-repeat -0px -0px;
                background-size: 60px 150px;
            }
            a.social-icon.google:hover {
                background-position: -0px -88px;
            }
            a.social-icon.google .text {
                color: #d34836;
            }
            a.social-icon.google:hover .text {
                color: #fff;
            }
            .inset-forgot-password {
                position: absolute; 
                bottom: 0; 
                right: 0; 
                color: #4875B4; 
                z-index: 10; 
                padding: 8px;
                cursor: pointer;
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
                <div class="col-md-6 col-centered text-center">
                    <span style="font-size: 1.2em;">Join us with one click</span>
                </div>
            </div>

            <div class="row row-centered">

                <div class="col-md-4 text-center col-centered">
                    <a class="social-icon facebook" href="<?php echo $ERP_SITE_URL; ?>login/facebook?type=participant">
                        <span class="text">Login using Facebook</span>
                    </a>
                </div>
            </div>
            <div class="row row-centered">
                <div class="col-md-4 text-center col-centered">
                    <a class="social-icon google" href="<?php echo $ERP_SITE_URL; ?>login/google?type=participant">
                        <span class="text">Login using Google</span>
                    </a>
                </div>
            </div>

            <div class="row row-centered" style="padding-top: 5%;">
                <div class="col-md-3 col-centered text-center">
                    <span style="font-size: 2em;">OR</span>
                    <span style="font-size: 1.2em;">, Login using your Shaastra account</span>
                </div>
            </div>

            <div class="row row-centered">
                <div class="col-md-6 col-centered centered">
                    <div class="btn-group">
                        <button data-tab=".tab-login" type="button" class="my-tab-link active btn btn-primary btn-lg">Login</button>
                        <button data-tab=".tab-register" type="button" class="my-tab-link btn btn-primary btn-lg">Register</button>
                    </div>
                    
                </div>
            </div>        

            <div class="row row-centered error-msg" style="padding: 1em; display: none;">
                <div class="col-md-6 text-center col-centered">
                    <div class="alert alert-danger">
                        <span class="bold">Error </span>
                        <span class="text">There was an error</span>
                    </div>
                </div>
            </div>

            <div class="row my-tab row-centered tab-login" style="height: 100%;">
                <div class="col-md-5 col-centered login-box box">
                    <form id="login-form" role="form">
                        <div class="form-group">
                            <label class="control-label hidden">Email address</label>
                            <div class="input-group col-md-12">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="text" class="form-control email" placeholder="Username or Email or Shaastra ID" required style="border-top-right-radius: 4px;">
                                <input type="password" class="form-control password" placeholder="Password" required style="border-top-right-radius: 0px;border-bottom-right-radius: 4px;">
                                <a data-tab=".tab-forgot" class="pull-right my-tab-link inset-forgot-password" >Forgot Password</a>
                            </div>
                        </div>                    
                        <button type="submit" class="btn btn-primary col-md-4 col-centered login-btn">Login</button>
                    </form>
                </div>
            </div>
            <div class="row my-tab tab-register" style="display: none;">
                <div class="col-md-6 col-md-offset-3 register-box box">
                    <form id="register-form" role="form">
                        <div class="form-group">
                            <label class="control-label col-md-3">Name</label>
                            <div class="input-group col-md-9">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control first_name" placeholder="First name" required style="border-top-right-radius: 4px;">
                                <input type="text" class="form-control last_name" placeholder="Last name" required style="border-top-right-radius: 0px;">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email address</label>
                            <div class="input-group col-md-9">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control email" placeholder="Enter a valid email id" required>
                            </div>
                        </div>                    
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="input-group col-md-9">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control password" placeholder="Password - Atleast 6 characters" required style="border-top-right-radius: 4px;">
                                <!--<input type="password" class="form-control" id="rpw" placeholder="Re-enter password for security" required style="border-top-right-radius: 0px;">-->
                            </div>
                        </div>
                        <div class="row row-centered">
                            <button type="submit" class="btn btn-primary col-md-4 col-centered register-btn">Register</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row my-tab tab-forgot row-centered" style="display: none;">
                <div class="col-md-6 col-centered">
                    <form id="forgot-form" role="form">
                        <div class="form-group">
                            <label class="control-label hidden">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter a E-Mail id, Shaastra ID or Barcode" required>
                        </div>                    
                        <button type="submit" class="btn btn-darkest col-md-4 col-centered forgot-btn">Forgot Password</button>
                    </form>
                </div>
            </div>

        </div>
    </body>
    <?php include '../base/foot.php' ?>
    <script>
    function toTitleCase(str) {
        return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
    }
    function show_tab(iden) {
        if ( $(".my-tab " + iden).hasClass("active") ) {
            return  
        }
        $(".my-tab").slideUp(500).removeClass("active");
        $(".my-tab" + iden).slideDown(500).addClass("active");
        $("html, body").animate({scrollTop: 1000}, 500);
    }
    $(document).ready(function() {
        $(".my-tab-link").click(function(ev) {
            var $el = $(ev.target).closest(".my-tab-link")
            show_tab($el.data("tab"))

            $(".my-tab-link").removeClass("active")
            $el.addClass('active')
        })  
        $('#login-form').submit(function(e) {
            var $el = $(this)
            // django login
            $.post('<?php echo $ERP_SITE_URL; ?>participant_login/', {
                'email' : $el.find('.email').val(),
                'password' : $el.find('.password').val()
            }).fail(function(xhr) {
                if ( xhr.status == 500 || xhr.status == 401 ) {
                    var $el = $('.error-msg').show().find('.text')
                    $el.html('Unable to login. There was an error in our servers. <br />We\'re probably on it already, but you can tell us the issue anyway :) <br /> COntact : <a href="mailto:webops@shaastra.org">webops@shaastra.org</a>')
                } else if ( xhr.status == 400 ) {
                    var data = xhr.responseJSON
                    var $el = $('.error-msg').show().find('.text')
                    $el.html('<br />')
                    for (var key in data) {
                        $el.html($el.html() + '<b>' + toTitleCase(key) + '</b>' + ' - ' + data[key] + '<br />')
                    }
                }
            }).done(function(data) { // now php's turn
                $.post('../scripts/login.php', {
                    'first_name' : data['first_name'],
                    'last_name' : data['last_name'],
                    'email' : data['email'],
                    'user_id' : data['user_id'],
                    'token' : data['token']
                }).done(function(data) { // Logged into php and django, go to dash
                    window.location.href = "../pages/dashboard.php"
                    // alert('login')
                    // console.log(data)
                }).fail(function() { // php error
                    var $el = $('.error-msg').show().find('.text')
                    $el.html('Unable to login. There was an error in our servers. <br />We\'re probably on it already, but you can tell us the issue anyway :) <br /> COntact : <a href="mailto:webops@shaastra.org">webops@shaastra.org</a>')
                })
            });
            e.preventDefault()
        })
        $('#register-form').submit(function(e) {
            var $el = $(this)
            // django login
            $.post('<?php echo $ERP_SITE_URL; ?>participant_registration/', {
                'first_name' : $el.find('.first_name').val(),
                'last_name' : $el.find('.last_name').val(),
                'email' : $el.find('.email').val(),
                'password' : $el.find('.password').val()
            }).fail(function(xhr) {
                if ( xhr.status == 500 || xhr.status == 401 ) {
                    var $el = $('.error-msg').show().find('.text')
                    $el.html('Unable to register. There was an error in our servers. <br />We\'re probably on it already, but you can tell us the issue anyway :) <br /> COntact : <a href="mailto:webops@shaastra.org">webops@shaastra.org</a>')
                } else if ( xhr.status == 400 ) {
                    var data = xhr.responseJSON
                    var $el = $('.error-msg').show().find('.text')
                    $el.html('<br />')
                    for (var key in data) {
                        $el.html($el.html() + '<b>' + toTitleCase(key) + '</b>' + ' - ' + data[key] + '<br />')
                    }
                }
            }).done(function(data) { // now php's turn
                $.post('../scripts/login.php', {
                    'first_name' : data['first_name'],
                    'last_name' : data['last_name'],
                    'email' : data['email'],
                    'user_id' : data['user_id'],
                    'token' : data['token']
                }).done(function(data) { // Logged into php and django, go to dash
                    window.location.href = "../pages/dashboard.php"
                    //console.log(data)
                }).fail(function() { // php error
                    var $el = $('.error-msg').show().find('.text')
                    $el.html('Unable to login. There was an error in our servers. <br />We\'re probably on it already, but you can tell us the issue anyway :) <br /> COntact : <a href="mailto:webops@shaastra.org">webops@shaastra.org</a>')
                })
            });
            e.preventDefault()
        })
        $('#forgot-form').submit(function(e) {
            alert('forgot')
            e.preventDefault()
        })
    })
    </script>
</html>
