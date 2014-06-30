	<!--navbar start-->
	<style>
		  .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse .navbar-nav>.active>a:focus{
		  /*background-color:#F28A02;*/
		  background-image:url(../img/arrow.png);
		  background-size:20px 9px;
		  background-repeat:no-repeat;
		  background-position:bottom center;
		  }
		  .navbar-nav>li.active{
		  border-bottom:thick solid #00A3E8;
		  }
		  .navbar-inverse .navbar-nav>li>a{
		  font-size:125%;
		  text-transform:uppercase;
		  font-family: 'Oswald';
		  }
		  .navbar-nav>li.default>a:hover{
		  /*background-color:#F2A62C;*/
		  }
		  .navbar-nav>li.default{
		  border-bottom:thick solid #777;
		  }
		  .navbar-nav>li.default:hover{
		  border-bottom:thick solid #09E65A;
		  }
		  .navbar{
		  /*background-color:#F5B056;*/
		  }
	</style>
	
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand menu">Symposium 2015</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="default" id="home"><a href="">Home</a></li>
			<li class="default" id="about"><a href="">About</a></li>
            <li class="default" id="schedule"><a href="">Schedule</a></li>
            <li class="default" id="speakers"><a href="">Speakers</a></li>
            <li class="default" id="partners"><a href="">Partners</a></li>
			<li class="default" id="faq"><a href="">FAQ</a></li>
			<li class="default" id="register"><a href="">Register</a></li>
			<li class="default" id="hospitality"><a href="">Hospitality</a></li>
			<li class="default" id="contact"><a href="">Contact</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
	<!--navbar end-->