<html lang="en"><head>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200' rel='stylesheet' type='text/css'>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">



<title>Shaastra Events</title>

<!-- Bootstrap core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->

<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

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
        p:hover{
          opacity:0.6;
        }
        .jumbotron p{
          color: black;
          font-weight:400;

        }
        .jumbotron p:hover{
          opacity: 0.6
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

      </style>
      <script src="../js/webmirror.js"></script>
      <script src="erp.shaastra.org/static/dajaxice/dajaxice.core.js"></script>


    </head>

<body background="../img/bg.png">

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
            <button type="button" class="btn btn-primary">Save changes</button>
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
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='involve-nav' data-href='#involve'>Involve</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='quiz-nav' data-href='#quiz'>Quizzes</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='online-nav' data-href='#online'>Online</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='flagship-nav' data-href='#flagship'>Flagship</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='spotlight-nav' data-href='#spotlight'>Spotlight</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='workshops-nav' data-href='#workshops'>Workshops</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='shows-nav' data-href='#shows'>Shows</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='bevent-nav' data-href='#bevent'>B-Events</a>
      <a class="btn btn-primary btn-sm btn-grey scroll-to" role="button" id='misc-nav' data-href='#misc'>Associated</a>


    </div>

  </div>
  <!--/.navbar-collapse -->
</div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" id='events_main'>
  <div class="container" style="text-align: center;margin-top:20px">
  <h1>Events</h1>
  <p>Events. The essence of Shaastra.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4 event-info">
      <h2>Heading</h2>
      <p data-mirror=1>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
    </div>
    <div class="col-md-4 event-info">
      <h2>Heading</h2>
      <p data-mirror=2>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
    </div>
    <div class="col-md-4 event-info">
      <h2>Heading</h2>
      <p data-mirror=3>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
    </div>
  </div>

  <hr>


</div>
<div class="jumbotron" id='aerofest'>
  <div class="container" style="
  text-align: center;
  /* opacity: 1; */
  ">
  <h1><img src="../img/events/aerofest.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='aerofest-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Aerobotics</h2>
    <p data-mirror=4>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Wright Design</h2>
    <p data-mirror=5>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Paper Planes</h2>
    <p data-mirror=6>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>TopGun</h2>
    <p data-mirror=7>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Airshow</h2>
    <p data-mirror=8>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Boeing National Aeromodelling Competition</h2>
    <p data-mirror=9>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>

<!-- END Aero-->
<!-- START Design&Build-->
<div class="jumbotron" id='design'>
  <div class="container" style="
  text-align: center;
  /* opacity: 1; */
  ">
  <h1><img src="../img/events/design.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='design-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Fire and Ice</h2>
    <p data-mirror=10>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Ultimate Engineer</h2>
    <p data-mirror=11>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Lunar Rover Challenge</h2>
    <p data-mirror=12>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Contraptions</h2>
    <p data-mirror=1>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>RoboWars</h2>
    <p data-mirror=13>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Junkyard Wars</h2>
    <p data-mirror=14>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Robotics</h2>
    <p data-mirror=15>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Robo Oceana</h2>
    <p data-mirror=16>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Master Builder</h2>
    <p data-mirror=17>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<hr>


</div>
<!-- END Design&Build-->

<!-- START Coding -->
<div class="jumbotron" id='coding'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/coding.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='coding-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Open Programming Contest</h2>
    <p data-mirror=18>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Reverse Coding</h2>
    <p data-mirror=19>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Automania</h2>
    <p data-mirror=20>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Code Obfuscation</h2>
    <p data-mirror=21>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Triathlon </h2>
    <p data-mirror=22>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Debugging</h2>
    <p data-mirror=23>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Hackfest Workshop</h2>
    <p data-mirror=24>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Paypal Hackfest</h2>
    <p data-mirror=25>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Coding -->

<!-- START Involve -->
<div class="jumbotron" id='involve'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/involve.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='involve-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Project X</h2>
    <p data-mirror=26>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Cube Open</h2>
    <p data-mirror=27>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Puzzle Champ</h2>
    <p data-mirror=28>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Math Modelling</h2>
    <p data-mirror=29>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Involve -->
<!-- START Quizzes -->
<div class="jumbotron" id='quiz'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/quiz.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='quiz-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Auto Quiz</h2>
    <p data-mirror=30>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Junior Quiz</h2>
    <p data-mirror=31>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Main Quiz</h2>
    <p data-mirror=32>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>How Things Work</h2>
    <p data-mirror=33>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Quizzes -->

<!-- START Online -->
<div class="jumbotron" id='online'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/online.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='online-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Online Puzzle Champ</h2>
    <p data-mirror=34>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Online Math Modelling</h2>
    <p data-mirror=35>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Finance &amp; Consultancy</h2>
    <p data-mirror=36>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Online -->
<!-- START Flagship -->
<div class="jumbotron" id='flagship'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/dept.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='flagship-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Robo Oceana</h2>
    <p data-mirror=37>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Forensics</h2>
    <p data-mirror=38>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Shaastra Circuit Design Challenge</h2>
    <p data-mirror=39>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Chemical X</h2>
    <p data-mirror=40>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Master Builder</h2>
    <p data-mirror=41>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Desmod</h2>
    <p data-mirror=42>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Flagship -->
<!-- START Spotlight -->
<div class="jumbotron" id='spotlight'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/spotlight.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div>
<div class="container" id='spotlight-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Shaastra Junior</h2>
    <p data-mirror=43>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>IIT Madras Symposium</h2>
    <p data-mirror=44>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Sustainable Cityscape</h2>
    <p data-mirror=45>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Paper &amp; Poster Presentation</h2>
    <p data-mirror=46>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Ideas Challenge</h2>
    <p data-mirror=47>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Pan IIT Research Expo</h2>
    <p data-mirror=48>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Education Fair</h2>
    <p data-mirror=49>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Spotlight -->


<!-- START Workshops-->
<div class="jumbotron" id='workshops'>
  <div class="container" style="
  text-align: center;
  /* opacity: 1; */
  ">
  <h1><img src="../img/events/workshop.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div>
<div class="container" id='workshops-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Autonomous Robotics</h2>
    <p data-mirror=50>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Chuckglider</h2>
    <p data-mirror=51>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Paper Planes</h2>
    <p data-mirror=52>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>3D Animation</h2>
    <p data-mirror=53>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Hovercraft</h2>
    <p data-mirror=54>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>RoboSoccer</h2>
    <p data-mirror=55>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Network Security</h2>
    <p data-mirror=56>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Digital Fabrication &amp; Prototyping</h2>
    <p data-mirror=57>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Android Development</h2>
    <p data-mirror=58>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Rubik's Cube</h2>
    <p data-mirror=59>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Forensics</h2>
    <p data-mirror=60>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Boeing Aeromodelling</h2>
    <p data-mirror=61>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<hr>


</div>
<!-- END Design&Build-->

<!-- START Exhibitions -->
<div class="jumbotron" id='shows'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/shows.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='shows-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Product Launch</h2>
    <p data-mirror=62>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Tech Lounge</h2>
    <p data-mirror=63>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Magic Materials</h2>
    <p data-mirror=64>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Shaastra Exhibitions</h2>
    <p data-mirror=65>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Space Trek Planetarium</h2>
    <p data-mirror=66>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Exhibitions -->

<!-- START BEvents -->
<div class="jumbotron" id='bevent'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/bevent.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='bevent-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Case Study</h2>
    <p data-mirror=67>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Vittaneeti</h2>
    <p data-mirror=68>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Estimus</h2>
    <p data-mirror=1>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Art of Business</h2>
    <p data-mirror=69>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END BEvent -->
<!-- START Misc -->
<div class="jumbotron" id='misc'>
  <div class="container" style="
  text-align: center;
  ">
  <h1><img src="../img/events/misc.png"></h1>
  <p>Aerofest. Enticed by unidentified/identified flying objects? Events in this category include the Boeing National Aeromodelling competition.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div><div class="container" id='misc-events'>
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Ericsson Industry Defined Problem</h2>
    <p data-mirror=70>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>Eaton Industry Defined Problem</h2>
    <p data-mirror=71>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4 event-info">
    <h2>GE Industry Defined Problem</h2>
    <p data-mirror=72>  sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4 event-info">
    <h2>Research Confluence</h2>
    <p data-mirror=73>  id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>

<footer style='text-align:center'> &copy; 2015 Shaastra Webops </footer>
</div>
<!-- END Misc -->

<!-- container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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

      // WwbMirror tokens
      <?php 

      ?>
      $(document).ready(function(){
        scrollTargets.push('#aerofest-nav');
        scrollTargets.push('#design-nav');
        scrollTargets.push('#coding-nav');
        scrollTargets.push('#involve-nav');
        scrollTargets.push('#quiz-nav');
        scrollTargets.push('#online-nav');
        scrollTargets.push('#flagship-nav');
        scrollTargets.push('#spotlight-nav');
        scrollTargets.push('#workshops-nav');
        scrollTargets.push('#shows-nav');
        scrollTargets.push('#bevent-nav');
        scrollTargets.push('#misc-nav');



        $(window).resize();
      });


      $(window).resize(function(){
        scrollLevels = [];
        scrollLevels.push('#aerofest');
        scrollLevels.push('#design');
        scrollLevels.push('#coding');
        scrollLevels.push('#involve');
        scrollLevels.push('#quiz');
        scrollLevels.push('#online');
        scrollLevels.push('#flagship');
        scrollLevels.push('#spotlight');
        scrollLevels.push('#workshops');
        scrollLevels.push('#shows');
        scrollLevels.push('#bevent');
        scrollLevels.push('#misc');
        scrollLevels.push('footer'); //base case




        //scrollLevels.push($('body').position().top + $('body').height());// base case.

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
          $(parallaxComputeRefs[i]).css('background-position-y',(bgOffset+absDisp)+'px');

        };
      })
      $(document).ready(function(){
        parallaxTargets = [];
        parallaxTargets.push('#aerofest .container');
        parallaxTargets.push('#design .container');
        parallaxTargets.push('#coding .container');
        parallaxTargets.push('#involve .container');
        parallaxTargets.push('#quiz .container');
        parallaxTargets.push('#online .container');
        parallaxTargets.push('#flagship .container');
        parallaxTargets.push('#spotlight .container');
        parallaxTargets.push('#workshops .container');
        parallaxTargets.push('#shows .container');
        parallaxTargets.push('#bevent .container');
        parallaxTargets.push('#misc .container');

        parallaxComputeRefs.push('#aerofest');
        parallaxComputeRefs.push('#design');
        parallaxComputeRefs.push('#coding');
        parallaxComputeRefs.push('#involve');
        parallaxComputeRefs.push('#quiz');
        parallaxComputeRefs.push('#online');
        parallaxComputeRefs.push('#flagship');
        parallaxComputeRefs.push('#spotlight');
        parallaxComputeRefs.push('#workshops');
        parallaxComputeRefs.push('#shows');
        parallaxComputeRefs.push('#bevent');
        parallaxComputeRefs.push('#misc');

        $(window).resize();
      })

      $(document).ready(function(){
        rolldownTargets = [];

        rolldownTargets.push('#aerofest-events .event-info p');
        rolldownTargets.push('#design-events .event-info  p');
        rolldownTargets.push('#coding-events .event-info  p');
        rolldownTargets.push('#involve-events .event-info  p');
        rolldownTargets.push('#quiz-events .event-info  p');
        rolldownTargets.push('#online-events .event-info  p');
        rolldownTargets.push('#flagship-events .event-info  p');
        rolldownTargets.push('#spotlight-events .event-info  p');
        rolldownTargets.push('#workshops-events .event-info  p');
        rolldownTargets.push('#shows-events .event-info  p');
        rolldownTargets.push('#bevent-events .event-info  p');
        rolldownTargets.push('#misc-events .event-info  p');

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

          var slope = (dispTop1 - dispTop2)/(scrollTop1 - scrollTop2);
          var offset = -slope*scrollTop1;

          parallaxFuncs[i] = {
            slope: slope,
            offset: offset,
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
        $('[data-mirror]').each(function( i, e ){
          updateData(e);
          <?php
            if(isset($_GET['token'])){
              echo "hookMirror(e,'"+$_GET['token']+"')";
            }
          ?>
        });
      })
    </script>
    <script src="../bootstrap/js/bootstrap.js"></script>

  </body></html>