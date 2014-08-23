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
                <div class="col-md-3 col-md-offset-1">
                    <p id="salute" class="lead"></p>                    
                </div>
                <div class="col-md-1 col-md-offset-7">
                    <a href="login.php">
                        <button class="btn btn-info">Logout</button>
                    </a>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-5">
                    <div class="table-responsive">
                        <table class="table">                            
                            <thead>
                                <tr>
                                    <th style="font-size:1.2em;text-align:center;vertical-align:middle">
                                        <img src="../../img/login/photo.jpg" style="margin-right:2%">
                                        Profile Details
                                    </th>
                                    <th style="text-align:center">
                                        <button id="edit" class="btn btn-info" onclick="toggleEditable()">Edit Profile</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="details">
                                <tr>
                                    <th>Shaastra ID:</th>
                                    <td>MM12B037</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td id="name" contentEditable="false">Abhishek Shandilya</td>
                                </tr>
                                <tr>
                                    <th>Email id:</th>
                                    <td name="email" contentEditable="false">abhishek.sandy@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>College:</th>
                                    <td id="college" contentEditable="false">IIT MADRAS</td>
                                </tr>
                                <tr>
                                    <th>City:</th>
                                    <td id="city" contentEditable="false">Chennai</td>
                                </tr>
                                <tr>
                                    <th>Phone:</th>
                                    <td id="phone" contentEditable="false">9884299211</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
    		<!-- </div> -->
            <!-- <div class="row"> -->
                <div class="col-md-7">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="font-size:1.2em;text-align:center;vertical-align:middle">Registered Events</th>
                                    <th>
                                        <button class="btn btn-info col-md-12">Register for an event</button>
                                    </th>
                                    <th>
                                        <button class="btn btn-warning col-md-12">Unregister from an event</button>
                                    </th>
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
        <script type="text/javascript">
            editable = ["name", "college", "city", "phone"];
            function toggleEditable(){
                if(document.getElementById(editable[1]).contentEditable == "false"){
                    document.getElementById("edit").innerHTML = "Save";
                    for(i=0;i<4;i++){
                        document.getElementById(editable[i]).contentEditable = "true";
                        document.getElementById(editable[i]).style.backgroundColor = "rgba(255,255,255,0.3)";
                    }
                }
                else{
                    document.getElementById("edit").innerHTML = "Edit Profile";
                    for(i=0;i<4;i++){
                        document.getElementById(editable[i]).contentEditable = "false";
                        document.getElementById(editable[i]).style.backgroundColor = "transparent";
                    }
                }
            }
            $("document").ready(function(){
                $("#salute").text("Hi! "+$("#name").text());
            });
        </script>
    </body>
    <?php include '../base/foot.php' ?>
</html>
