<div class="menuB">
    <!--<span class="glyphicon glyphicon-tasks"></span>-->
    <span>MENU</span>
    <button class="menu" type="button">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>

<!-- menu popup start -->

<div id="menu_popup">
    <div class="white container-fluid">
        <div class="row">
            <div class="col-xs-12 cl-effect-12">
                <a class="header h2 white" href="home.php">SHAASTRA 2015</a>
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
            <div class="col-xs-12 link-braces">
                <a class="next_page col-xs-6 col-xs-offset-3 white" href="home.php">Home</a>
            </div>
        </div>
        <div class="row" id="about-menu">
            <div class="col-xs-12 link-braces">
                <a class="col-xs-6 col-xs-offset-3 next_page white" href="about.php">About Us</a>
            </div>
        </div>
        <div class="row" id="events-menu">
            <div class="col-xs-12 link-braces">
                <a class="col-xs-6 col-xs-offset-3 next_page white" href="events.php">Events</a>
            </div>
        </div>
        <div class="row" id="shows-menu">
            <div class="col-xs-12 link-braces">
                <a class="col-xs-6 col-xs-offset-3 next_page white" href="shows.php">Shows</a>
            </div>
        </div>
        <div class="row" id="lecture-menu">
            <div class="col-xs-12 link-braces">
                <a class="col-xs-8 col-xs-offset-2 next_page white" href="lectures.php">Lectures</a>
            </div>
        </div>
        <div class="row" id="spons-menu">
            <div class="col-xs-12 link-braces">
                <a class="col-xs-8 col-xs-offset-2 next_page white" href="spons.php">Sponsors</a>
            </div>
        </div>
        <div class="row" id="contact-menu">
            <div class="col-xs-12 link-braces">
                <a class="col-xs-8 col-xs-offset-2 next_page white" href="contact.php">Contact Us</a>
            </div>
        </div>
        <div class="row margin-bottom-1">
            <hr class="col-xs-10 col-xs-offset-1" />
        </div>
        <div class="row">
            <div class="col-xs-4 text-center">
                <a class="social bs-tooltip" href="https://www.facebook.com/Shaastra" data-toggle="tooltip" data-placement="top" title="Like Us">
                    <img src="../img/social/facebook.png" />
                </a>
            </div>
            <div class="col-xs-4 text-center">
                <a class="social bs-tooltip" href="https://twitter.com/ShaastraIITM" data-toggle="tooltip" data-placement="top" title="Follow Us">
                    <img src="../img/social/twitter.png" />
                </a>
            </div>
            <div class="col-xs-4 text-center">
                <a class="social bs-tooltip" href="https://www.youtube.com/user/iitmshaastra" data-toggle="tooltip" data-placement="top" title="Subscribe">
                    <img src="../img/social/youtube.png" />
                </a>
            </div>

        </div>
    </div>
</div>
<!-- menu popup end -->

<script>
    $(document).ready(function(){        
        $(".menuB").click(function(){
            $("#menu_popup").animate({
                left: '0%',
                opacity: '1'                  
            },"slow");
        });  
        $(".close_menu").click(function(){
            hideMenu();                      
        });
        $('body').keydown(function(e){
            if(e.which == 27){
                hideMenu(); 
            }
        });
        $('*').click(function(e){
            if(e.clientX > 0.3*(window.innerWidth)){
                hideMenu();                
            }
        });
        function menu_rescale () {
            if(window.innerWidth<680){
                $(".close_menu").addClass("col-xs-10 col-xs-offset-1");
            }
            else{
                $(".close_menu").removeClass("col-xs-10 col-xs-offset-1");
            }   
        }
        menu_rescale();
        $(window).resize(function(){
           menu_rescale();
        });
    });   
        document.getElementById("menu_popup").style.height = screen.availHeight+"px";
</script>