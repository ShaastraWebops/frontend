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
		    height: 33em;
		    /*height: 100%;*/
	    }
	}
	.right-menu, .right-menu .row {
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
        background-color: rgba(255, 255, 255, 0.3);
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
	    width: 17em;
		-webkit-transition: all 200ms ease-in-out;
	    -moz-transition: all 200ms ease-in-out;
	    -o-transition: all 200ms ease-in-out;
	    transition: all 200ms ease-in-out;
	}
	.right-menu:hover .row {
		background-color: rgba(0, 0, 0, 0.7);
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
			<a ><span class="text">Search</span> <span class="glyphicon-md glyphicon glyphicon-search"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Aerofest"><span class="text">Aerofest</span> <span class="glyphicon-md glyphicon glyphicon-send"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=B-Events"><span class="text">B-Events</span> <span class="glyphicon-md glyphicon glyphicon-stats"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Coding"><span class="text">Coding</span> <span class="glyphicon-md glyphicon glyphicon-qrcode"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Department+Flagship"><span class="text">Department Flagship</span> <span class="glyphicon-md glyphicon glyphicon-flag"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Design+and+Build"><span class="text">Design And Build</span> <span class="glyphicon-md glyphicon glyphicon-cog"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Electronics+Fest"><span class="text">Electronics Fest</span> <span class="glyphicon-md glyphicon glyphicon-flash"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Involve"><span class="text">Involve</span> <span class="glyphicon-md glyphicon glyphicon-user"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Quizzing"><span class="text">Quizzing</span> <span class="glyphicon-md glyphicon glyphicon-question-sign"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Spotlight"><span class="text">Spotlight</span> <span class="glyphicon-md glyphicon glyphicon-screenshot"></span></a>
		</li>
		<li class="line hidden-xs">
			<a href="../pages/eventlist.php?category=Workshops"><span class="text">Workshops</span> <span class="glyphicon-md glyphicon glyphicon-briefcase"></span></a>
		</li>
	</ul>
</div>