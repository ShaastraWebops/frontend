<?php
    if (isset($logged_in) && $logged_in) {
        //header('Location: ../pages/dashboard.php');
    } else {
        header('Location: ../pages/login.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        
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
                <div class="col-md-4 col-md-offset-1">
                    <div class="table-responsive" style="border: 1px solid #fff; border-radius: 10px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2" style="font-size:1.2em;text-align:center;vertical-align:middle">
                                        <span class="">Profile Details</span>
                                        <button class="pull-right btn btn-info">Edit Profile</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Shaastra ID:</th>
                                    <td>MM12B037</td>
                                </tr>
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
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="table-responsive" style="border: 1px solid #fff; border-radius: 10px;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="3" style="font-size:1.2em;text-align:center;vertical-align:middle">Registered Events</th>
                                </tr>
                                <tr>
                                    <th>Event name</th>
                                    <th>Pending Task</th>
                                    <th>Upcoming Deadline</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="event.php?category=Aerofest&amp;event=Aerobotics">Aerobotics</a></td>
                                    <td>TDP</td>
                                    <td>30th August 2014</td>
                                </tr>
                                <tr>
                                    <td><a href="event.php?category=Design+and+Build&amp;event=Robotics">Robotics</a></td>
                                    <td>TDP</td>
                                    <td>30th August 2014</td>
                                </tr>
                                <tr>
                                    <td><a href="event.php?category=Coding&amp;event=Reverse+Coding">Reverse Coding</a></td>
                                    <td>Qualification Round</td>
                                    <td>30th August 2014</td>
                                </tr>
                                <tr>
                                    <td><a href="event.php?category=Coding&amp;event=Code+Obfuscation">Code Obfuscation</a></td>
                                    <td>Qualification Round</td>
                                    <td>30th August 2014</td>
                                </tr>
                                <tr>                                
                                    <td><a href="event.php?category=Department+Flagship&amp;event=Forensics">Forensics</a></td>
                                    <td>Qualification Round</td>
                                    <td>30th August 2014</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include '../base/foot.php' ?>
</html>
