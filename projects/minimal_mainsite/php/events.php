<html lang="en"><head>
<title>Events | Shaastra '15</title>

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

      <?php include 'head.php' ?>

      <style>
        body{
          font-family:'Titillium Web', sans-serif;
          color:#BBB;
        }
        div.jumbotron *, div.jumbotron {
          -webkit-transition: all 0s linear; /* For Safari 3.1 to 6.0 */
          transition: all 0s linear;
        }
        p{
          font-family: 'Titillium Web', sans-serif;
        }
        .jumbotron p{
          color: white;
          font-weight:500;
          border: 1px solid #444;
          background: rgba(0, 0, 0, 0.51);
          border-radius: 5px;
        }
        .jumbotron .container{
          position:relative;
        }
        .jumbotron{
          background-color: rgba(238, 238, 238, 0.86);
          position:relative;
          overflow:hidden;
          background-image:url('../img/events/cloudysky.png');
          background-size:1920px auto;
          background-repeat: :no-repeat;
          background-position-y: 0px
        }

        .modal-body{
          color: black;
        }
        .modal-header{
          color:black;
        }

        #quiz{
          background-image:url('../img/events/parallax/quiz.png');
        }
        #bevent{
          background-image:url('../img/events/parallax/bevent.png');
        }
        #aerofest{
          background-image:url('../img/events/parallax/aero.png');
        }
        #flagship{
          background-image:url('../img/events/parallax/dept.png');
          background-position-y: 0px

        }
        #elec{
          background-image:url('../img/events/parallax/elec.png');
          background-position-y: 0px;

        }
        #workshops{
          background-image:url('../img/events/parallax/ws2.jpg');
          background-position-y: -200px

        }
        #coding{
          background-image:url('../img/events/parallax/coding.png');
        }
        #quiz{
          background-image:url('../img/events/parallax/involve.png');
        }
        #design{
          background-image:url('../img/events/parallax/design.png');
        }
        #spotlight{
          background-image:url('../img/events/parallax/spotlight.png');
        }
        #shows{
          background-image:url('../img/events/parallax/exhibitions.png');
        }

        .btn-grey{
          background-color: transparent;
          border-color: none;
          border: 2px solid transparent;
        }
        .btn-grey:hover{
          background-color: transparent;
          border-color: rgb(150,150,150)
        }
        .white-logo:hover{
          opacity: 0.5
        }
        .event-info{
          text-align:center;
        }
        .event-info p{
          opacity:1;
        }

        *{
          font-family: 'Titillium Web', sans-serif
        }
        .title{
          font-family: 'Dosis', sans-serif;
        }
        .white {
          color: #ffffff;
        }
        .breaker {
          width:387px;
          height:14px;
          margin:0 auto;
          position:relative;
          margin-bottom: 30px;
          padding-top: 10px;
        }
        .breaker span {
          width:160px;
          height:1px;
          display:inline-block;
          margin:14px 0 6px 0;
          color : #000;
        }
        .dice {
          width : 51px;
          height : 28px;
          margin : 0 8px;
        }

        .breaker .dice {
          width:51px;
          height:28px;
          float:left;
          margin:0 8px;
        }
        .dice {
          background:url(../img/dice.png) no-repeat;
        }
        .dice.white {
          background:url(../img/dice_white.png) no-repeat;
        }

        .breaker span {
          background: #d5d5d5;
          background: #000;
        }
        .breaker.white span {
          background: #fff;
        }
        .breaker .left{
          float: left;
          background: linear-gradient(to left, #000, transparent);
        }
        .breaker .right{
          float: right;
          background: linear-gradient(to right, #000, transparent);
        }
        .breaker.white .left{
          float: left;
          background: linear-gradient(to left, #fff, transparent);
        }
        .breaker.white .right{
          float: right;
          background: linear-gradient(to right, #fff, transparent);
        }
        .navbar-selected{
          background-color: transparent;
          border-color: white;
        }
        /* menu adjustment. not really clean but since it's getting in the way..*/
        .menuB{
          position:fixed;
          left: 15px;
          top: 5px;
        }
      </style>

      <script type='text/javascript'>
        // Requirement for webmirror.js
        var WEB_MIRROR_SERVICE_URL = 'http://erp.shaastra.org/webmirror/'
      </script>
      <script src="../js/webmirror.js"></script>

    </head>

<body background="../img/bg.png">
  <?php include 'menu.php' ?>
  <!-- Invisible Signals element for global signals. -->
  <div class='signal-hub' style='display:none'></div>

    <!-- Bootstrap modals for events -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- End modals-->

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container" style="
      text-align: center;
      ">
      <div class='row'>
        <div class="col-md-4 col-md-offset-4" style="
        text-align: center;
        ">
        <a class='scroll-to' data-href='#events_main'>
          <div class="white breaker white-logo">
            <span class="left"></span>
            <div class="dice white"></div>
            <span class="right"></span>
          </div>
        </a>

      </div>
    </div>
    <div class="row" style='padding-top:10px;margin-bottom:5px'>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='aerofest-nav' data-href='#aerofest'>Aerofest</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='design-nav' data-href='#design'>Design and Build</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='coding-nav' data-href='#coding'>Coding</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='quiz-nav' data-href='#quiz'>Involve &amp; Quizzes</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='elec-nav' data-href='#elec'>Electrical</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='flagship-nav' data-href='#flagship'>Flagship</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='spotlight-nav' data-href='#spotlight'>Spotlight</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='workshops-nav' data-href='#workshops'>Workshops</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='shows-nav' data-href='#shows'>Shows</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='bevent-nav' data-href='#bevent'>B-Events</a>


    </div>

  </div>
  <!--/.navbar-collapse -->
</div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" data-offset=0 id='events_main'>
  <div class="container" style="text-align: center;margin-top:20px">
  <h1 style="color:black">Events</h1>
  <p data-mirror=90 data-cluster="EVNT">Events. The essence of Shaastra.</p>
</div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row" style='opacity:0'>
    <div class="col-md-4 event-info">
      <h2>Heading</h2>
      <p data-mirror=1>Donec Loading. </p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
    </div>
    <div class="col-md-4 event-info">
      <h2>Heading</h2>
      <p data-mirror=2>Donec Loading. </p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

    </div>
    <div class="col-md-4 event-info">
      <h2>Heading</h2>
      <p data-mirror=3>Donec Loading.</p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
    </div>
  </div>



</div>
<div class="jumbotron" data-offset=0 id='aerofest'>
  <div class="container" style="
  text-align: center;
  /* opacity: 1; */
  ">
  <h1><img src="../img/events/aerofest.png"></h1>
  <p data-cluster='EVNT' data-mirror=75>Loading.</p>
</div>
</div><div class="container" id='aerofest-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Aerobotics</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=4>Donec Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Wright Design</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=5>Donec Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Airshow</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=8>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
</div>
<div class="row">
  
  <div class="col-md-4 event-info">
    <h2>Boeing National Aeromodelling Competition</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=9>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>

<hr>


</div>

<!-- END Aero-->
<!-- START Design&Build-->
<div class="jumbotron" data-offset="-200" id='design'>
  <div class="container" style="
  text-align: center;
  /* opacity: 1; */
  ">
  <h1><img src="../img/events/design.png"></h1>
  <p data-cluster='EVNT' data-mirror=76>Loading.</p>
</div>
</div><div class="container" id='design-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Fire and Ice</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=10>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Ultimate Engineer</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=11>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Master Builder</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=17>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Contraptions</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=1>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>RoboWars</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=13>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  <div class="col-md-4 event-info">
    <h2>Junkyard Wars</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=14>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Robotics</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=15>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  
</div>
<hr>


</div>
<!-- END Design&Build-->

<!-- START Coding -->
<div class="jumbotron" data-offset="-200" id='coding'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/coding.png"></h1>
  <p data-cluster='EVNT' data-mirror=77>Loading.</p>

</div>
</div><div class="container" id='coding-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Open Programming Contest</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=18>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Reverse Coding</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=19>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Hackfest Workshop</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=24>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Code Obfuscation</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=21>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Triathlon </h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=22>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
</div>

<hr>


</div>
<!-- END Coding -->

<!-- START Quizzes -->
<div class="jumbotron" data-offset="-100" id='quiz'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/quiz.png"></h1>
  <p data-cluster="EVNT" data-mirror=79>Loading.</p>
</div>
</div><div class="container" id='quiz-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Auto Quiz</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=30>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Junior Quiz</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=31>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Main Quiz</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=32>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Project X</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=26>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Cube Open</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=27>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Puzzle Champ</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=28>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>How Things Work</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=33>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<hr>

</div>
<!-- END Quizzes -->

<!-- START Online -->
<div class="jumbotron" data-offset="-100" id='elec'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/elec.png"></h1>
  <p data-cluster="EVNT" data-mirror=80>Loading.</p>
</div>
</div><div class="container" id='elec-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Fun with Oscilloscopes</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=34>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Electronics Store</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=35>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Arduino Programmer's Challenge</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=36>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>PCB Design Workshop</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=88>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Workshops by TI</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=89>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Circuit Design Challenge</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=39>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Online -->
<!-- START Flagship -->
<div class="jumbotron" data-offset="-150" id='flagship'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/dept.png"></h1>
  <p data-cluster="EVNT" data-mirror=81>Loading.</p>
</div>
</div><div class="container" id='flagship-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Robo Oceana</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=37>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Forensics</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=38>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Master Builder</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=41>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Desmod</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=42>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Flagship -->
<!-- START Spotlight -->
<div class="jumbotron" data-offset="-300" id='spotlight'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/spotlight.png"></h1>
  <p data-cluster="EVNT" data-mirror=82>Loading.</p>
</div>
</div>
<div class="container" id='spotlight-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Shaastra Junior</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=43>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Tech and Innovation Fair</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=44>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  <div class="col-md-4 event-info">
    <h2>Sustainable Cityscape</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=45>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Industry Defined Problem</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=46>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  <div class="col-md-4 event-info">
    <h2>Pan IIT Research Expo</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=48>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Spotlight -->


<!-- START Workshops-->
<div class="jumbotron" data-offset="-100" id='workshops'>
  <div class="container" style="
  text-align: center;
  /* opacity: 1; */
  ">
  <h1><img src="../img/events/workshop.png"></h1>
  <p data-cluster="EVNT" data-mirror=83>Loading.</p>
</div>
</div>
<div class="container" id='workshops-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>RoboSoccer and Line Follower</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=50>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Boeing AeroModelling</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=53>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  <div class="col-md-4 event-info">
    <h2>Rubik's Cube </h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=52>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  
  <div class="col-md-4 event-info">
    <h2>Web &amp; Mobile Applications</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=51>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Hovercraft</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=54>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  <div class="col-md-4 event-info">
    <h2>SPAD</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=55>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Digital Fabrication &amp; Rapid Prototyping</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=56>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
</div>
<hr>


</div>
<!-- END Design&Build-->

<!-- START Exhibitions -->
<div class="jumbotron" data-offset="-150" id='shows'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/shows.png"></h1>
  <p data-cluster="EVNT" data-mirror=84>Loading.</p>
</div>
</div><div class="container" id='shows-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Product Launch</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=62>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Tech Lounge</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=63>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  <div class="col-md-4 event-info">
    <h2>Magic Materials</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=64>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Shaastra Exhibitions</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=65>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Space Trek Planetarium</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=66>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
</div>

<hr>


</div>
<!-- END Exhibitions -->

<!-- START BEvents -->
<div class="jumbotron" data-offset=0 id='bevent'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/bevent.png"></h1>
  <p data-cluster="EVNT" data-mirror=85>Loading.</p>
</div>
</div><div class="container" id='bevent-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Case Study</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=67>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Vittaneeti</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=68>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
  <div class="col-md-4 event-info">
    <h2>Estimus</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=74>  Loading.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Art of Business</h2>

    <p data-transform=1 data-cluster="EVNT" data-mirror=69>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Big Data Challenge</h2>
    <p data-transform=1 data-cluster="EVNT" data-mirror=87>  Loading. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>

  </div>
</div>


</div>
<!-- END BEvent -->




<!-- container -->


    <script type='text/javascript'>
      //  Sensitive Scroll Levels.
      var scrollLevels = [];
      var scrollTargets = [];

      //  Parallax Helpers.
      var parallaxFuncs = [];
      var parallaxTargets = [];
      var parallaxComputeRefs = [];

      //  Rolldown helpers.
      // event based.
      var rolldownSensor = 'scrolled';
      var rolldownTargets = [];

      // current Scroll state.. used by more than one functionality.
      var currState = -1;

      // WebMirror constants
      

        
      var EWH = new EventWriteupHandler("#myModal")
      

      $(document).ready(function(){
        scrollTargets.push('#aerofest-nav');
        scrollTargets.push('#design-nav');
        scrollTargets.push('#coding-nav');
        scrollTargets.push('#quiz-nav');
        scrollTargets.push('#elec-nav');
        scrollTargets.push('#flagship-nav');
        scrollTargets.push('#spotlight-nav');
        scrollTargets.push('#workshops-nav');
        scrollTargets.push('#shows-nav');
        scrollTargets.push('#bevent-nav');



        $(window).resize();
      });


      $(window).resize(function(){
        scrollLevels = [];
        scrollLevels.push('#aerofest');
        scrollLevels.push('#design');
        scrollLevels.push('#coding');
        scrollLevels.push('#quiz');
        scrollLevels.push('#elec');
        scrollLevels.push('#flagship');
        scrollLevels.push('#spotlight');
        scrollLevels.push('#workshops');
        scrollLevels.push('#shows');
        scrollLevels.push('#bevent');


        scrollLevels.push($('body').position().top + $('body').height());// base case.

      });
      
      $(window).scroll(function(){
        var height = $(window).scrollTop();
        var i,j;
        for(i = 0;i<scrollLevels.length;i++){

          if($(scrollLevels[i]).position().top-parseInt(window.innerHeight/2)>height){

            if(currState == i)
              // same state.. exit..
              break;

            currState = i;
            for(j=0;j<scrollTargets.length;j++)
              $(scrollTargets[j]).removeClass('navbar-selected');

            $(scrollTargets[i-1]).addClass('navbar-selected')
            //$('.signal-hub').trigger('scroll-changed')
            break;
          }
        }
      });

      $(document).ready(function(){
        var scrollOffset = 40;// deliberate offset in pixels to make the scroll look better.
        var scrollSpeed = 2;// speed in pixel per ms
        $('.scroll-to').click(function(){
          var destScroll = $($(this).data('href')).position().top - scrollOffset;
          var currentScroll = $(window).scrollTop();
          $('html,body').animate({scrollTop:destScroll},parseInt(Math.abs(destScroll-currentScroll)/scrollSpeed),'swing');
        })
      });

      $(window).scroll(function(){
        var height = $(window).scrollTop();
        var bgOffset = -100 //offset in px to be applied to background images for parallax
        for (var i = 0; i < parallaxFuncs.length; i++) {
          var absDisp = parallaxFuncs[i].calc.call(parallaxFuncs[i],height);
          $(parallaxTargets[i]).css('top',absDisp+'px');
          // CHANGE THIS ASAP
          $(parallaxComputeRefs[i]).css('background-position-y',(bgOffset+absDisp+parallaxFuncs[i].backgoundOrigin)+'px');

        };
      })
      $(document).ready(function(){
        parallaxTargets = [];
        parallaxTargets.push('#aerofest .container');
        parallaxTargets.push('#design .container');
        parallaxTargets.push('#coding .container');
        parallaxTargets.push('#quiz .container');
        parallaxTargets.push('#elec .container');
        parallaxTargets.push('#flagship .container');
        parallaxTargets.push('#spotlight .container');
        parallaxTargets.push('#workshops .container');
        parallaxTargets.push('#shows .container');
        parallaxTargets.push('#bevent .container');

        parallaxComputeRefs.push('#aerofest');
        parallaxComputeRefs.push('#design');
        parallaxComputeRefs.push('#coding');
        parallaxComputeRefs.push('#quiz');
        parallaxComputeRefs.push('#elec');
        parallaxComputeRefs.push('#flagship');
        parallaxComputeRefs.push('#spotlight');
        parallaxComputeRefs.push('#workshops');
        parallaxComputeRefs.push('#shows');
        parallaxComputeRefs.push('#bevent');

        $(window).resize();
      })

      $(document).ready(function(){
        rolldownTargets = [];

        rolldownTargets.push('#aerofest-events .event-info p');
        rolldownTargets.push('#design-events .event-info  p');
        rolldownTargets.push('#coding-events .event-info  p');
        rolldownTargets.push('#quiz-events .event-info  p');
        rolldownTargets.push('#online-events .event-info  p');
        rolldownTargets.push('#flagship-events .event-info  p');
        rolldownTargets.push('#spotlight-events .event-info  p');
        rolldownTargets.push('#workshops-events .event-info  p');
        rolldownTargets.push('#shows-events .event-info  p');
        rolldownTargets.push('#bevent-events .event-info  p');

        /*for (var i = 0; i < rolldownTargets.length; i++) {
          $(rolldownTargets[i]).slideUp();
        };*/
        $(window).resize();
      })


      $(window).resize(function(){

        // recompute linear functions for parallax displacement.

        var sensorOffset = 0; //deliberate offset in pixels for the parallax effect.
        for (var i = 0; i < parallaxTargets.length; i++) {
          var scrollTop1 = $(parallaxComputeRefs[i]).position().top - parseInt(window.innerHeight/8);
          var dispTop1 = 0;

          var scrollTop2 = $(parallaxComputeRefs[i]).position().top + parseInt(window.innerHeight/2)
          var dispTop2 = 300;

          var origin = parseInt($(parallaxComputeRefs[i]).data('offset'))
          console.log(origin);

          var slope = (dispTop1 - dispTop2)/(scrollTop1 - scrollTop2);
          var offset = -slope*scrollTop1;

          parallaxFuncs[i] = {
            slope: slope,
            offset: offset,
            backgoundOrigin: origin,
            calc:function( x ){
              return parseInt(this.slope*x + this.offset)
            }
          }

        };
      })
      $(document).ready(function(){
         $('.signal-hub').on('scroll-changed',function(){
            /*for (var i = 0; i < rolldownTargets.length; i++) {
                if(i == currState-1)continue;
                $(rolldownTargets[i]).slideUp();
                $(rolldownTargets[i]).animate({opacity:0});
              };*/
        $(window).resize();

          setTimeout(function(){
              
              $(rolldownTargets[currState-1]).slideDown(300,"swing",function(){
                $(rolldownTargets[currState-1]).animate({opacity:1},300);
              });
            }
          ,500);
         });
      })

      $(window).load(function(){
        console.log('resizing')
        $(window).resize();
      })

      $(document).ready(function(){
        // enable uplink and attach mirror to all elements with the data-mirror attribute
        // Note this is a test token(but still capable of hacking the main database). DO NOT COMMIT TO PRODUCTION

        UM.setTransform(function( text ){
          return EWH.processText( text, 400 )
        })

        <?php
          if(isset($_GET["token"])){
            echo "$('.modal-body').attr('contenteditable','true');";
            echo "$('.jumbotron [data-mirror]').attr('contenteditable','true');";
            echo "UM.setToken('" . $_GET["token"] . "');";
          }
        ?>

        UM.autoDiscover('[data-mirror]')
        UM.autoDiscover('.modal-body')

        $('.btn[data-toggle=modal]').click(function(){
          EWH.processOnClick(this)// Invoke to set data variables.
          UM.refresh('.modal-body')  // Refresh content..
        })
        

      });

      
    </script>
    <script src="../bootstrap/js/bootstrap.js"></script>

  </body>
      <?php include 'base.php' ?>

  </html>
