<!-- change it, and the animation -->
<!-- <div class="menuB">
    <c id="menu_icon" class="hi-icon hi-icon-list"></c>            
</div>

<div id="menu_popup">
    <table style="color:white; width:100%">
        <tr>
            <th class="header">SHAASTRA 2015</th>
        </tr>
        <tr>
            <td class="gap"></td>
        </tr>
        <tr>
            <td id="close_menu" class="menu_options" style="color:#00425a;font-size:1.5em"><span class="glyphicon glyphicon-chevron-left"></span>Back to Website</td>
        </tr>
        <tr>
            <td class="gap"></td>
        </tr>    
        <tr>
            <td class="menu_options"><a class="next_page" href="home.html">Home</a></td>
        </tr>
        <tr>
            <td class="menu_options"><a class="next_page" href="#">About Us</a></td>
        </tr>
        <tr>
            <td class="menu_options"><a class="next_page" href="#">Events</a></td>
        </tr>
        <tr>
            <td class="menu_options"><a class="next_page" href="envisage.htm">Shows</a></td>
        </tr>
        <tr>
            <td class="menu_options"><a class="next_page" href="lectures.html">Lectures</a></td>
        </tr>
        <tr>
            <td class="menu_options"><a class="next_page" href="#">Sponsors</a></td>
        </tr>
        <tr>
            <td class="menu_options"><a class="next_page" href="contacts.html">Contact Us</a></td>
        </tr>                                   
        <tr>
            <td class="header" style="font-family: Cursive"><i>---follow us on---</i></td>
        </tr>  
        <tr>
            <td id="facebook" class="menu_options"><a style="color:#3b5998" href="http://facebook.com/Shaastra" target="_blank"><i class="fa fa-facebook"></i>&nbsp;Facebook</a></td>
        </tr>
        <tr>
            <td id="twitter" class="menu_options" ><a style="color:#428bca" href="http://twitter.com/ShaastraIITM" target="_blank"><i class="fa fa-twitter"></i>&nbsp;Twitter</a></td>
        </tr>
        <tr>
            <td id="you_tube" class="menu_options"><a  style="color:#cc181e" href="http://youtube.com/user/iitmshaastra" target="_blank"><i class="fa fa-youtube"></i>&nbsp;YouTube</a></td>
        </tr>                        
    </table>            
    </div>  -->

        <section id="set-7">
            <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
                <c id="menu_icon" style="position:absolute; top:0%; left:0%; z-index:399" class="hi-icon hi-icon-list"></c>
            </div>
        </section>
        
        <!-- menu popup start -->
        
        <div class="menu_popup" style="position:absolute; background-color:black; z-index:400; height:100%; width:30%; top:0%; left:-30%; opacity:0">
            <div class="white container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <a class="header" href="home.php">SHAASTRA 2015</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="close_menu" href="javascript:void(0);">
                            <span class="glyphicon glyphicon-chevron-left"></span> Back to Website
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="next_page" href="home.php">Home</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="next_page" href="about.php">About Us</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="next_page" href="events.php">Events</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="next_page" href="shows.php">Shows</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="next_page" href="lectures.php">Lectures</a>
                    </div>
                    <div class="col-xs-12">
                        <a class="next_page" href="spons.php">Sponsors</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <a class="next_page" href="contact.php">Contact Us</a>
                    </div>
                </div>
                <div class="row margin-bottom-1">
                    <hr />
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <a href="https://www.facebook.com/Shaastra"><img src="../img/social/facebook.png" /></a>
                    </div>
                    <div class="col-xs-4">
                        <a href="https://twitter.com/ShaastraIITM"><img src="../img/social/twitter.png" /></a>
                    </div>
                    <div class="col-xs-4">
                        <a href="https://www.youtube.com/user/iitmshaastra"><img src="../img/social/youtube.png" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu popup end -->

<script>
    $(document).ready(function(){
        $("#menu_icon").click(function(){
            $(".menu_popup").animate({
                left: '0%',
                opacity: '1'                  
            },"slow");
        });  
        $(".menu_options").hover(function(){
            $(this).css("background-color","#EBF4FA");
            $(this).css("color","black");
            $(".close_menu").css("color","#99C68E"); 
            $(this).css("font-size",""); 
            $(this).css("font-weight","bolder"); 
        }, function(){
            $(this).css("background-color","black"); 
            $(this).css("color","white"); 
            $(".close_menu").css("color","#99C68E");    
            $(this).css("font-weight","initial");    
        });
        $(".close_menu").click(function(){
            $(".menu_popup").animate({
                left: '-30%',
                opacity: '0'                  
            },"slow");                      
        });
    });   
</script>