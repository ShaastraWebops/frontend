<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php
            if (isset($logged_in) && $logged_in) {
                header('Location: ../pages/dashboard.php');
            } else {
                // header('Location: ../pages/login.php');
            }
        ?>
        <title>Registration | Shaatsra '15</title>
        <?php include '../base/head.php' ?>


    </head>

    <body>
        <?php include '../base/menu.php' ?>

        <div class="container-fluid title white centered" style='margin-bottom:2%;'>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">REGISTRATION</h1>
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
                <div class="col-md-6 col-md-offset-3">
                  <form id="reg" role="form">
                    <div class="form-group">
                        <label class="control-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Full Name" required autofocus>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter a valid email id" required>
                    </div>                    
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" id="pw" placeholder="Atleast 6 characters" required></input>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Re-enter password</label>
                        <input type="password" class="form-control" id="rpw" placeholder="Same as the above" required></input>
                    </div>
                    <button type="submit" class="btn btn-primary col-md-4 col-md-offset-1">SUBMIT</button>
                    <button type="reset" class="btn btn-warning col-md-4 col-md-offset-2">RESET</button>
                  </form>
                </div>
    		</div>
        </div>
    </body>
    <?php include '../base/foot.php' ?>
</html>
