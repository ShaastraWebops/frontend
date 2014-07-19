<style>
    #menu-btn {
        outline: 0;
        opacity: 1;
        cursor: pointer;
        margin-top: 20px;
        margin-left: 10px;
        z-index: 1999;
        color : #ffffff;
        letter-spacing: 2px;
        position: fixed;
        top: 0px;
        left: 0px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #menu-btn span {
        display: inline-block;
        vertical-align: middle;
        text-transform: uppercase;  
    }
    #menu-btn .menubars {
        width: 29px;
        height: 19px;
        position: relative;
        top: 1px;
    }
    #menu-btn .menubars .menu-bar {
        position: absolute;
        width: 29px;
        height: 3px;
        background-color: #FFF;
        -webkit-transition: all 300ms cubic-bezier(0.215,.61,.355,1);
        -moz-transition: all 300ms cubic-bezier(0.215,.61,.355,1);
        -o-transition: all 300ms cubic-bezier(0.215,.61,.355,1);
        transition: all 300ms cubic-bezier(0.215,.61,.355,1);
    }
    #menu-btn .menubars .menu-bar.bar1 {
        top: 0px;
        opacity: 1;
    }
    #menu-btn .menubars .menu-bar.bar2 {
        top: 7px;
        opacity: 1;
    }
    #menu-btn .menubars .menu-bar.bar3 {
        top: 14px;
        opacity: 1;
    }
    #menu-btn .menubars .menu-bar.bar4 {
        top: 21px;
        opacity: 0;
    }
    #menu-btn:hover .menubars .menu-bar {
        -webkit-transform: translate3d(0, -7px, 0);
        -moz-transform: translate3d(0, -7px, 0);
        -o-transform: translate3d(0, -7px, 0);
        transform: translate3d(0, -7px, 0);
    }
    #menu-btn:hover .menubars .menu-bar.bar1 {
        opacity: 0;
        -webkit-transition-delay: 0ms;
        -moz-transition-delay: 0ms;
        -o-transition-delay: 0ms;
        transition-delay: 0ms;
    }
    #menu-btn:hover .menubars .menu-bar.bar2 {
        -webkit-transition-delay: 70ms;
        -moz-transition-delay: 70ms;
        -o-transition-delay: 70ms;
        transition-delay: 70ms;
    }
    #menu-btn:hover .menubars .menu-bar.bar3 {
        -webkit-transition-delay: 140ms;
        -moz-transition-delay: 140ms;
        -o-transition-delay: 140ms;
        transition-delay: 140ms;
    }
    #menu-btn:hover .menubars .menu-bar.bar4 {
        opacity: 1;
        -webkit-transition-delay: 210ms;
        -moz-transition-delay: 210ms;
        -o-transition-delay: 210ms;
        transition-delay: 210ms;
    }

    #menu-btn.menu-open {
        margin-left: 200px !important;
    }

    #menu-bg {
        opacity: 0;
        background-color: #aaaaaa;
        background-color: rgba(0, 0, 0, 0.7);
    }
    #menu-bg.menu-open {
        opacity: 1;
    }
    #menu {
        left: -200px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size: 90%;
        width: 200px;
        height: 100%;
        top: 0;
        z-index: 2000;
        position: fixed;
        background-color: black;
        opacity: 0;
    }
    #menu.open {
        left: 0px;
        opacity: 1;
    }
    #menu .header {
      color: white;
      width: 100%;
      text-align: center;
      padding-top: 4%;
      padding-bottom: 4%; }

    #menu .row {
      color: white;
      font-size: 1.2em;
      padding-left: 4%;
      padding-right: 4%;
      padding-top: 2%;
      padding-bottom: 2%;
      width: 100%;
      text-align: center;
      text-decoration: none;
      cursor: pointer; }
    #menu.col-xs-12 {
      position: relative;
      z-index: 1;
      /* needed for setting pseudo-element z-index */
      overflow: hidden;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden; }

    #menu.col-xs-12 a {
      position: relative;
      display: inline-block;
      outline: none;
      vertical-align: bottom;
      text-decoration: none;
      white-space: nowrap; }

    #menu.col-xs-12 a::before,
    #menu.col-xs-12 a::after {
      pointer-events: none;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      -webkit-font-smoothing: antialiased;
      font-smoothing: antialiased; }

    .link-braces a {
      padding: 0 0.25em;
      font-weight: 500;
      -webkit-transition: color 0.2s;
      transition: color 0.2s; }

    .link-braces a:hover {
      color: #fff; }

    .link-braces a::before,
    .link-braces a::after {
      position: absolute;
      top: 0;
      font-weight: 100;
      font-size: 150%;
      line-height: 1;
      opacity: 0;
      -webkit-transition: opacity 0.2s, -webkit-transform 0.2s;
      transition: opacity 0.2s,         transform 0.2s; }

    .link-braces a::before {
      left: -0.1em;
      content: '[';
      -webkit-transform: translateX(-100%);
      transform: translateX(-100%); }

    .link-braces a::after {
      right: -0.1em;
      content: ']';
      -webkit-transform: translateX(100%);
      transform: translateX(100%); }

    .link-braces a:hover::before,
    .link-braces a:hover::after {
      opacity: 1;
      -webkit-transform: translateX(0);
      transform: translateX(0); }

    .close_menu:hover span {
      position: relative;
      -webkit-animation: arrow_left 1s ease-in-out infinite; }

    @-webkit-keyframes arrow_left {
      from {
        left: 0em;
        opacity: 1; }

      to {
        opacity: 0;
        left: -0.5em; } }


</style>

<div id="menu-btn" style="">
    <!--<span class="glyphicon glyphicon-tasks"></span>-->
    <span class="title">MENU</span>
    <span class='menubars'>
        <span class="menu-bar bar1"></span>
        <span class="menu-bar bar2"></span>
        <span class="menu-bar bar3"></span>
        <span class="menu-bar bar4"></span>
    </span>
</div>

<!-- menu popup start -->
<div class='menu-bg'>
    <nav id="menu">
        <div class="white container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <a class="header white" href="home.php">
                        <img src='../../img/logo/250x50_white.png' style='width : 100%; height : auto;' />
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <a class="close_menu white" href="javascript:void(0);">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                         Back to Website
                    </a>
                </div>
            </div>
            <div class="row" id="home-menu">
                <div class="col-xs-12 link-braces text-center">
                    <a class="next_page white" style="padding: 0px 30px;" href="home.php">Home</a>
                </div>
            </div>
            <div class="row" id="about-menu">
                <div class="col-xs-12 link-braces">
                    <a class="next_page white" style="padding: 0px 30px;" href="about.php">About Us</a>
                </div>
            </div>
            <div class="row" id="events-menu">
                <div class="col-xs-12 link-braces">
                    <a class="next_page white" style="padding: 0px 30px;" href="events.php">Events</a>
                </div>
            </div>
            <div class="row" id="shows-menu">
                <div class="col-xs-12 link-braces">
                    <a class="next_page white" style="padding: 0px 30px;" href="shows.php">Shows</a>
                </div>
            </div>
            <div class="row" id="lecture-menu">
                <div class="col-xs-12 link-braces">
                    <a class="next_page white" style="padding: 0px 30px;" href="lectures.php">Lectures</a>
                </div>
            </div>
            <div class="row" id="spons-menu">
                <div class="col-xs-12 link-braces">
                    <a class="next_page white" style="padding: 0px 30px;" href="spons.php">Sponsors</a>
                </div>
            </div>
            <div class="row" id="contact-menu">
                <div class="col-xs-12 link-braces">
                    <a class="next_page white" style="padding: 0px 30px;" href="contact.php">Contact Us</a>
                </div>
            </div>
            <div class="row margin-bottom-1">
                <hr class="col-xs-10 col-xs-offset-1" />
            </div>
            <div class="row">
                <div class="col-xs-4 text-center">
                    <a class="social bs-tooltip" href="https://www.facebook.com/Shaastra" data-toggle="tooltip" data-placement="top" title="Like Us">
                        <img src="../../img/icons/facebook.png" />
                    </a>
                </div>
                <div class="col-xs-4 text-center">
                    <a class="social bs-tooltip" href="https://twitter.com/ShaastraIITM" data-toggle="tooltip" data-placement="top" title="Follow Us">
                        <img src="../../img/icons/twitter.png" />
                    </a>
                </div>
                <div class="col-xs-4 text-center">
                    <a class="social bs-tooltip" href="https://www.youtube.com/user/iitmshaastra" data-toggle="tooltip" data-placement="top" title="Subscribe">
                        <img src="../../img/icons/youtube.png" />
                    </a>
                </div>

            </div>
        </div>
    </nav>
</div>
<!-- menu popup end -->

<script>
    function show_menu () {
        $("#menu").addClass('open')
        $("#menu-btn").addClass('menu-open')
    }
    function hide_menu () {
        $("#menu").removeClass('open')
        $("#menu-btn").removeClass('menu-open')
    }

    $(document).ready(function(){        
        $("#menu-btn").click(function(){ show_menu(); });  
        $("#menu_btn.menu-open").click(function(){ hide_menu(); });
        $('body').keydown(function(e){
            if(e.which == 27){ // escape key
                hide_menu(); 
            }
        });
        $('body').click(function(e){ // clicked somewhere else
            if(e.clientX > 200){
                hide_menu();                
            }
        });
    });   
    

</script>
