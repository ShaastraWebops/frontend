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
                <div class="col-md-2 col-md-offset-3">
                    <img class="img-thumbnail" id="profile-pic" src="../../img/login/photo.jpg" alt="Profile Pic"></img>
                </div>
                <div class="col-md-4">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Shaastra ID:</th>
                                    <th>MM12B037</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Name:</th>
                                    <td>Abhishek Shandilya</td>
                                </tr>
                                <tr>
                                    <th>Email id:</th>
                                    <td>abhishek.sandy@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>College:</th>
                                    <td>IIT MADRAS</td>
                                </tr>
                                <tr>
                                    <th>Phone:</th>
                                    <td>+91 9884299211</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <button class="btn btn-info">Edit Profile</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-info">Change your profile pic</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
    		</div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Registered Events</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="event.php?category=Aerofest&amp;event=Aerobotics">Aerobotics</a></td>
                                    <td>TDP</td>
                                </tr>
                                <tr>
                                    <td><a href="event.php?category=Design+and+Build&amp;event=Robotics">Robotics</a></td>
                                    <td>TDP</td>
                                </tr>
                                <tr>
                                    <td><a href="event.php?category=Coding&amp;event=Reverse+Coding">Reverse Coding</a></td>
                                    <td>Qualification Round</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td>
                                        <button class="btn btn-info">Register for an event</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-warning">Unregister from an event</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include '../base/foot.php' ?>
</html>
