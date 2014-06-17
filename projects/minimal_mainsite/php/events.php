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
        .jumbotron{
          background-color: rgba(238, 238, 238, 0.46)
        }

        .btn-grey{
          background-color: rgb(150,150,150);
          border-color: rgb(150,150,150);
        }
        .btn-grey:hover{
          opacity: 0.5;
          background-color: rgb(150,150,150);
        }
        .white-logo:hover{
          opacity: 0.5
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
          background-color: #3276b1;
        }

      </style>
    </head><body background="../img/bg.png">



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
        <a href='#events_main'>
          <div class="white breaker white-logo">
            <span class="left"></span>
            <div class="dice white"></div>
            <span class="right"></span>
          </div>
        </a>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
    </div>
    <div class="row" style='padding-top:10px;margin-bottom:5px'>
      <a class="btn btn-primary btn-sm btn-grey" role="button" id='aerofest-nav' href='#aerofest'>Aerofest</a>
      <a class="btn btn-primary btn-sm btn-grey" role="button" id='design-nav' href='#design'>Design and Build</a>
      <a class="btn btn-primary btn-sm btn-grey" role="button" id='coding-nav' href='#coding'>Coding</a>

    </div>

  </div>
  <!--/.navbar-collapse -->
</div>
</div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" id='events_main'>
  <div class="container" style="
  text-align: center;margin-top:20px
  ">
  <h1>Events</h1>
  <p>Events. The essence of Shaastra.</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more »</a></p>
</div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
</div><div class="container">
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4">
    <h2>Aerobotics</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Wright Design</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Paper Planes</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <h2>TopGun</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Airshow</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Boeing National Aeromodelling Competition</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
</div><div class="container">
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4">
    <h2>Fire and Ice</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Ultimate Engineer</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Lunar Rover Challenge</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <h2>Contraptions</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>RoboWars</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Junkyard Wars</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <h2>Robotics</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Robo Oceana</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Master Builder</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
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
</div><div class="container">
<!-- Example row of columns -->
<div class="row">
  <div class="col-md-4">
    <h2>Open Programming Contest</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Reverse Coding</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Automania</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <h2>Code Obfuscation</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Triahlon </h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
  <div class="col-md-4">
    <h2>Debugging</h2>
    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    <p><button class="btn btn-default" data-toggle="modal" data-target="#myModal"  role="button">View details »</button></p>
  </div>
</div>

<hr>


</div>
<!-- END Coding -->
<!-- container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type='text/javascript'>
      var scrollLevels = [];
      var scrollTargets = [];
      var currState = -1;
      $(document).ready(function(){
        scrollTargets.push('#aerofest-nav');
        scrollTargets.push('#design-nav');
        scrollTargets.push('#coding-nav');
        $(window).resize();
      });

      $(window).resize(function(){
        scrollLevels.push($('#aerofest').position().top);
        scrollLevels.push($('#design').position().top);
        scrollLevels.push($('#coding').position().top);

        scrollLevels.push($('body').position().top + $('body').height());// base case.

        for(var j = 0;j<scrollLevels.length;j++)
          scrollLevels[j] -= parseInt(window.innerHeight/2);
      });
      
      $(window).scroll(function(){
        var height = $(window).scrollTop();
        var i,j;
        for(i = 0;i<scrollLevels.length;i++){

          if(scrollLevels[i]>height){

            if(currState == i)
              // same state.. exit..
              break;

            currState = i;
            for(j=0;j<scrollTargets.length;j++)
              $(scrollTargets[j]).removeClass('navbar-selected');

            $(scrollTargets[i-1]).addClass('navbar-selected')
            break;
          }
        }
      })
    </script>
    <script src="../bootstrap/js/bootstrap.js"></script>

  </body></html>