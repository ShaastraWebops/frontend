<div class="menuB">
    <span class="glyphicon glyphicon-list"></span>
</div>

<!-- menu popup start -->

<div class="menu_popup" 
        style="position:absolute; background-color:black; z-index:400; height:100%; width:30%; top:0%; left:-30%; opacity:0">
    <div class="white container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <a class="header menu_options" href="home.php">SHAASTRA 2015</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="close_menu menu_options" href="javascript:void(0);">
                    <span class="glyphicon glyphicon-chevron-left"></span> Back to Website
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="next_page current_page disable menu_options" href="home.php">Home</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="next_page menu_options" href="about.php">About Us</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="next_page menu_options" href="events.php">Events</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="next_page menu_options" href="shows.php">Shows</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="next_page menu_options" href="lectures.php">Lectures</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="next_page menu_options" href="spons.php">Sponsors</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <a class="next_page menu_options" href="contact.php">Contact Us</a>
            </div>
        </div>
        <div class="row margin-bottom-1">
            <hr/>
        </div>
        <div class="row">
            <div class="col-xs-4">
                <a class="social" href="https://www.facebook.com/Shaastra"><img src="../img/social/facebook.png" /></a>
            </div>
            <div class="col-xs-4">
                <a class="social" href="https://twitter.com/ShaastraIITM"><img src="../img/social/twitter.png" /></a>
            </div>
            <div class="col-xs-4">
                <a class="social" href="https://www.youtube.com/user/iitmshaastra"><img src="../img/social/youtube.png" /></a>
            </div>
        </div>
    </div>
</div>
<!-- menu popup end -->

<script>
    $(document).ready(function(){
        $(".menuB span").hover(function(){
            $(this).css("color","#00425a");
            $(this).removeClass("glyphicon-list");
            $(this).addClass("glyphicon-th-large");
        },function(){
            $(this).css("color","white");
            $(this).removeClass("glyphicon-th-large");
            $(this).addClass("glyphicon-list");
        });
        $(".menuB").click(function(){
            $(".menu_popup").animate({
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
        $('body').click(function(e){
            console.log(e.clientX)
            // hideMenu();
        });         
    });   
</script>
<style type="text/css">
    .menu_options{
        color: white;
    }
</style>