<!DOCTYPE html>
<html>
    <head>
        <?php
            if (isset($logged_in) && $logged_in) {
                //header('Location: ../pages/dashboard.php');
            } else {
                header('Location: ../pages/login.php');
            }
        ?>
        <title>Dashboard | Shaatsra '15</title>
        <?php include '../base/head.php' ?>


    </head>

    <body>
        <?php include '../base/menu.php' ?>

        <div class="container-fluid title white centered" style='margin-bottom:2%;'>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">DASHBOARD</h1>
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
                <div class="col-md-10 col-md-offset-1">
                  YOOOOOO
                </div>
    		</div>
        </div>
    </body>
    <?php include '../base/foot.php' ?>
</html>
