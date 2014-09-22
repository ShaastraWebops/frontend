<style>
	.right-menu {
		display: none;
	}
	
	@media (min-width: 768px) {
	    .right-menu {
			position: fixed;
			top: 50%;
	        right: 0px;
	        z-index: 5;
	        display: inline-block;
		    width: 3em;
		    height: 18em;
		    /*height: 100%;*/
	    }
	}
	.right-menu {
		-webkit-transition: all 400ms ease-in-out;
	    -moz-transition: all 400ms ease-in-out;
	    -o-transition: all 400ms ease-in-out;
	    transition: all 400ms ease-in-out;
	}
	.right-menu .row {
	    padding: 0px;
		position: relative;
		top: -50%;
		height: 100%;
        background-color: #000;
        background-color: rgba(255, 255, 255, 0.2);
		border-radius: 5px 0px 0px 5px;
	}
	.right-menu .line {
		overflow: hidden;
		list-style: none;
		text-align: right;
		white-space: nowrap;
		height: 3em;
		line-height: 3em;
	}
	.right-menu .line .text {
		white-space: nowrap;
		float: left;
	    -webkit-transition: all 300ms ease-in-out;
	    -moz-transition: all 300ms ease-in-out;
	    -o-transition: all 300ms ease-in-out;
	    transition: all 300ms ease-in-out;
	    position: absolute; 
	    opacity: 1;
		overflow-x: hidden;
		cursor: pointer;
		width: 0px;
		line-height: 3em;
		font-size: 1.2em;
		right: 3em;
	}
	.right-menu .line a {
		color: white;
	}
	.right-menu .line .glyphicon {
		display: inline-block;
		float: right;
		padding: 0.2em;
	}
	.glyphicon-md {
		font-size: 2em;
	}

	.right-menu:hover {
	    width: 15em;
		-webkit-transition: all 200ms ease-in-out;
	    -moz-transition: all 200ms ease-in-out;
	    -o-transition: all 200ms ease-in-out;
	    transition: all 200ms ease-in-out;
	}
	.right-menu:hover .line .text {
		opacity: 1;
		width: 100%;
	}
	.right-menu .line:hover .text {
		font-weight: bold;
	}
</style>

<div class="container-fluid right-menu">
	<ul class="row">
		<li class="line hidden-xs">
			<?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] >= 0 ) { ?>
				<a href="../pages/dashboard.php"><span class="text">Dashboard</span> <span class="glyphicon-md glyphicon glyphicon-tasks"></span></a>
			<?php } else { ?>
				<a href="../pages/login.php"><span class="text">Login</span> <span class="glyphicon-md glyphicon glyphicon-lock"></span></a>
			<?php } ?>
		</li>
		<li class="line hidden-xs">
			<?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] >= 0 ) { ?>
				<a href="../scripts/logout.php"><span class="text">Logout</span> <span class="glyphicon-md glyphicon glyphicon-remove"></span></a>
			<?php } else { ?>
				<a href="../pages/login.php"><span class="text">Register</span> <span class="glyphicon-md glyphicon glyphicon-user"></span></a>
			<?php } ?>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/hospi.php"><span class="text">Accomodation</span> <span class="glyphicon-md glyphicon glyphicon-home"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/spons.php"><span class="text">Sponsors</span> <span class="glyphicon-md glyphicon glyphicon-usd"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/about.php"><span class="text">About Us</span> <span class="glyphicon-md glyphicon glyphicon-question-sign"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/contact.php"><span class="text">Contact Us</span> <span class="glyphicon-md glyphicon glyphicon-phone-alt"></span></a>
		</li>
	</ul>
</div>