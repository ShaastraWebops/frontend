<style>
    /* ---------------- MENU BAR CSS ------------------ */
    #menu-btn {
        outline: 0;
        opacity: 1;
        cursor: pointer;
        margin-top: 10px;
        margin-left: 20px;
        z-index: 10000;
        color : #ffffff;
        letter-spacing: 2px;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100px;
        height: 60px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #menu-btn.menu-open {
        position: fixed;
    }
    #menu-btn span {
        display: inline-block;
        vertical-align: middle;
        text-transform: uppercase;
    }
    #menu-btn .title-menu, #menu-btn .title-back {
        display: none;
    }
    #menu-btn:hover .title-menu, #menu-btn:hover .title-back {
        display: inline-block;
    }
    /* Handle text when menu is open/closed */
    #menu-btn.menu-open {
        margin-left: 220px !important;
    }
    #menu-btn.menu-open .title-menu, #menu-btn.menu-open .title-back {
        display: none;
    }
    #menu-btn .title-close {
        display: none;
    }
    #menu-btn.menu-open .title-close {
        display: none;
    }
    #menu-btn.menu-open:hover .title-close {
        display: inline-block;
    }
    #menu-btn.menu-open .title.title-close {
        display: inline-block;
    }
    #menu-btn .menubars, #menu-btn .menubars-back {
        width: 29px;
        height: 19px;
        position: relative;
        top: 1px;
    }
    #menu-btn .title-back {
        margin-top: 13px;
    }
    #menu-btn .menubars-back {
        margin-top: 0px;
    }
    #menu-btn.menu-open .menubars, #menu-btn.menu-open .menubars-back {
        display: none;
    }
    #menu-btn .menubars-close {
        display: none;
    }
    #menu-btn.menu-open .menubars-close {
        display: inline-block;
    }
    /* The animation for menubars When menu is closed */
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
    /* The animation for menubars When menu is open */
    #menu-btn .menubars-close .menu-bar {
        position: absolute;
        width: 29px;
        height: 3px;
        background-color: #FFF;
        -webkit-transition: all 300ms cubic-bezier(0.215,.61,.355,1);
        -moz-transition: all 300ms cubic-bezier(0.215,.61,.355,1);
        -o-transition: all 300ms cubic-bezier(0.215,.61,.355,1);
        transition: all 300ms cubic-bezier(0.215,.61,.355,1);
    }

    #menu-btn .menubars-close .menu-bar.bar1 {
        transform:rotate(45deg);
        -moz-transform:rotate(45deg);
        -ms-transform:rotate(45deg);
        -webkit-transform:rotate(45deg);
    }
    #menu-btn .menubars-close .menu-bar.bar2 {
        transform:rotate(-45deg);
        -moz-transform:rotate(-45deg);
        -ms-transform:rotate(-45deg);
        -webkit-transform:rotate(-45deg);
    }
    #menu-btn:hover .menubars-close .menu-bar.bar1 {
        transform:rotate(-45deg);
        -moz-transform:rotate-45deg);
        -ms-transform:rotate(-45deg);
        -webkit-transform:rotate(-45deg);
    }
    #menu-btn:hover .menubars-close .menu-bar.bar2 {
        transform:rotate(-135deg);
        -moz-transform:rotate(-135deg);
        -ms-transform:rotate(-135deg);
        -webkit-transform:rotate(-135deg);
    }

    /* The background which shades out the rest of the screen */
    #menu-bg {
        opacity: 0;
        background-color: #aaaaaa;
        background-color: rgba(0, 0, 0, 0.85);
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0px;
        left: 0px;
        z-index: -1;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }
    #menu-bg.menu-open {
        opacity: 1;
        z-index: 9000;
    }

    body.no-scroll {
        overflow: hidden;
        height: 100%;
    }

    /* CSS for the MENU */
    #menu {
        left: -200px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        transition: all 0.3s ease;
        font-size: 90%;
        width: 200px;
        height: 100%;
        top: 0;
        bottom: 0;
        z-index: 10000;
        position: fixed;
        background-color: #000000;
        opacity: 0;
        display: inline-block;
        vertical-align: top;
    }
    #menu.open {
        left: 0px;
        opacity: 1;
    }

    #menu .nav {
        position: relative;
        z-index: 10;
        height: 100%;
    }
    #menu .nav li {
        display: block;
        position: relative;
        height: 9.09%; /* placeholder - Change depending in number of items in menu */
        text-align: center;
    }
    #menu .nav li .bg {
        position: absolute;
        z-index: 1;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        -webkit-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -moz-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -o-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        background-color: #0f0f0f;
    }
    #menu .nav li:after {
        content: "";
        position: absolute;
        bottom: -25px;
        left: 0;
        background: url(../../img/icons/rect-shadow.png) 0 0 no-repeat;
        width: 100%;
        height: 25px;
        pointer-events: none;
    }
    #menu .nav li:nth-child(1) {
        z-index: 100;
    }
    #menu .nav li:nth-child(2) {
        z-index: 90;
    }
    #menu .nav li:nth-child(3) {
        z-index: 80;
    }
    #menu .nav li:nth-child(4) {
        z-index: 70;
    }
    #menu .nav li:nth-child(5) {
        z-index: 60;
    }
    #menu .nav li:nth-child(6) {
        z-index: 50;
    }
    #menu .nav li:nth-child(7) {
        z-index: 40;
    }
    #menu .nav li:nth-child(8) {
        z-index: 30;
    }
    #menu .nav li:nth-child(9) {
        z-index: 20;
    }
    #menu .nav li:nth-child(10) {
        z-index: 10;
    }


    #menu .nav li .table-cell {
        height: 100%;
        display: table-cell;
        vertical-align: middle;

    }
    #menu .nav li .table-cell>span {
        height: 30px;
        position: relative;
        display: block;
    }
    #menu .nav li .small {
        position: absolute;
        display: block;
        width: 100%;
        top: 0;
        left: 0;
        color: #ccc;
        -webkit-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -moz-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -o-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
    }
    #menu .nav li .big {
        position: absolute;
        display: block;
        width: 100%;
        bottom: 0;
        left: 0;
        color: #328fa7;
        -webkit-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -moz-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -o-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -webkit-transition-delay: 50ms;
        -moz-transition-delay: 50ms;
        -o-transition-delay: 50ms;
        transition-delay: 50ms;
    }
    #menu .nav li.current .bg, #menu .nav li:hover .bg {
        opacity: .9;
    }
    #menu .nav li.current .big, #menu .nav li.current .small,
    #menu .nav li:hover .big, #menu .nav li:hover .small {
        color: #FFF;
        opacity: 1;
        -webkit-transform: translate3d(0, -5px, 0);
        -moz-transform: translate3d(0, -5px, 0);
        -o-transform: translate3d(0, -5px, 0);
        transform: translate3d(0, -5px, 0);
    }
    #menu .nav a {
        text-transform: uppercase;
        position: relative;
        z-index: 2;
    }
    #menu .nav a.table {
        margin: 0px;
        padding: 0px;
        display: table;
        height: 100%;
        width: 100%

    }
    #menu .nav a:hover,
    #menu .nav a:focus {
        background-color: inherit;
    }
    #menu .nav .small {
        font-size: .75em;
        letter-spacing: 2px;
    }
    #menu .nav .big {
        font-size: 1.1em;
        letter-spacing: 3px;
        font-weight: 900;
    }
    #menu .nav li.social {
        text-align: center;
    }
    #menu .nav li.social span {
        position: relative;
        display: inline-block;
        width: 25%;
        overflow-x: hidden;
        height: 100%;
        margin: 0px;
        padding: 0px;
        border: 0px;
    }
    #menu .nav li.social span a {
        display: block;
        height: 100%;
        width: 100%;
        margin: 0;
        background-image: url(../../img/icons/white-mesh.png);
        background-position: 0 0;
        background-repeat: repeat;
    }
    .facebook-color {
        background-color: #5473a3;
    }
    .facebook-color:hover {
        background-color: #395d94 !important;
    }
    .twitter-color {
        background-color: #56acef;
    }
    .twitter-color:hover {
        background-color: #398ed0 !important;
    }
    .google-color {
        background-color: #d34836;
    }
    .google-color:hover {
        background-color: #a32816 !important;
    }
    .youtube-color {
        background-color: #e52d27;
    }
    .youtube-color:hover {
        background-color: #b31217 !important;
    }
    .linkedin-color {
        background-color: #4875B4;
    }
    .linkedin-color:hover {
        background-color: #285594 !important;
    }
    #menu .nav li.social .icon {
        position: absolute;
        display: block;
        margin: 0;
        width: 100%;
        height: 100%;
        z-index: 3;
    }
    #menu .nav li.social .facebook-color .icon {
        background: url(../../img/icons/facebook-white_24x24.png) no-repeat center;
    }
    #menu .nav li.social .twitter-color .icon {
        background: url(../../img/icons/twitter-white_24x24.png) no-repeat center;
    }
    #menu .nav li.social .youtube-color .icon {
        background: url(../../img/icons/youtube-white_24x24.png) no-repeat center;
    }
    #menu .nav li.social .google-color .icon {
        background: url(../../img/icons/google-white_24x24.png) no-repeat center;
    }
    #menu .nav li.social .linkedin-color .icon {
        background: url(../../img/icons/linkedin-white_24x24.png) no-repeat center;
    }
    @media (min-width: 768px) {
        #menu-btn {
            position: fixed;
        }
        #menu .nav li {
            height: 8.33%; /* placeholder - Change depending in number of items in menu */
        }
    }
    .search-container {
        padding-left: 200px;
        margin-top: 60px;
        width: 100%;
        height: 100%;
    }

    .search-container #search-input {
        font-size: 2.5em;
        border: .125em solid #737373;
        border-width: 0 0 2px 0;
        background-color: transparent;
        padding: .1em .3em;
        width: 100%;
        outline: 0;
    }

    .searchform #search-input:focus {
        border-color: #328fa7;
        color: #FFFFFF;
        outline: 0;
    }
    #search-input {
        font-size: 3em;
        width: 100%;
    }
    #search-message {
        font-size: 1.5em;
        color: #f55;
        padding: 20px 50px;
        text-align: center;
    }
    .search-container #search-display {
        padding-bottom: 150px;
        height: 100%;
    }
    .search-container #search-display .search-display-wrapper {
        overflow-y: auto;
        height: 100%;
    }
    .search-container .search-element {
        cursor: pointer;
        background: #000;
        background: rgba(0,0,0,0.9);
        margin: 0;
        padding: 0;
    }
    .search-container .search-element .wrapper {
        border-radius : 5px;
        border: 1px solid #fff;
        color: #fff;
        margin: 10px 5px;
    }
    .search-container .search-element.template {
        display: none;
    }
    .search-container .search-element .head {
        font-size: 1.2em;
        line-height: 1.3em;
        height: 2.6em;
        width: 100%;
        /*text-overflow:ellipsis;
        white-space: nowrap;*/
        overflow: hidden;
        text-align: center;
        display: block;
        font-weight: bold;
    }
    .search-container .search-element .wrapper:hover {
        text-decoration: none;
        color: #328fa7;
        background-color: rgba(255,255,255,0.1);
        text-decoration: none;
    }
    .search-container .search-element .img {
        width: 100%;
        padding: 5px;
        background: url('../../img/icons/loading.gif') no-repeat 100% 100%;
    }
</style>

<div id="menu-btn" style="">
    <div class="menu-menu">
        <span class="title title-close hidden-sm hidden-xs">CLOSE</span>
        <span class='menubars'>
            <span class="menu-bar bar1"></span>
            <span class="menu-bar bar2"></span>
            <span class="menu-bar bar3"></span>
            <span class="menu-bar bar4"></span>
        </span>
        <span class='menubars-close'>
            <span class="menu-bar bar1"></span>
            <span class="menu-bar bar2"></span>
        </span>
        <span class="title title-menu hidden-sm hidden-xs">MENU</span>
    </div>
    <?php if ( isset($back) ) { ?>
        <a class="menu-back" style="display:block; color:#fff; text-decoration:none" href="<?php echo $back; ?>">
            <span class='menubars-back'>
                <span class="glyphicon-arrow-left glyphicon glyphicon-md"> </span>
            </span>
            <span class="title title-back hidden-sm hidden-xs">BACK</span>
        </a>
    <?php } ?>
</div>


<!-- menu popup start -->
<div id='menu-bg'>
    <div class="search-container container-fluid">
        <form class="searchform">
            <input type="search" id="search-input" placeholder="Search events and workshops" autocomplete="off" />
        </form>
        <div id="search-message">Please wait, the search is not yet ready</div>
        <div id="search-display" class="col-xs-12">
            <div class="search-display-wrapper">
            <a class="search-element col-sm-2 col-xs-6 template">
                <div class="wrapper">
                    <span class="head"></span>
                    <img class="loading-img" style="display:none" src="../../img/icons/loading.gif" />
                    <img class="img" src="../../img/icons/loading.gif" />
                </div>
            </a>
            </div>
        </div>
    </div>
    <nav id="menu">
        <ul class="nav">
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/home.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Home</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/dashboard.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">
                                <?php
                                    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] >= 0 )
                                        echo 'Dashboard';
                                    else
                                        echo 'Log In <span class="hidden-xs"><br /> Register</span>';
                                ?>
                            </span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/pre-shaastra.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Pre Shaastra <span class="hidden">Activities</span></span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/categories.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Events</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/eventlist.php?category=Workshops" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Workshops</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/lectures2.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Lectures</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/exhibitions.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Exhibitions</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/hospi.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Hospitality</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/spons.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Sponsors</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/about.php" class="table">
                    <span class="table-cell">
                        <span>
                            <!-- <span class="small hidden-xs">Reach out to</span> -->
                            <span class="big">About Us</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="<?php echo $SITE_URL; ?>../../php/pages/contact.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="big">Contact Us</span>
                        </span>
                    </span>
                </a>
            </li>
            <li class="social">
                <span>
                    <a class="facebook-color" href="https://www.facebook.com/Shaastra" target="_blank">
                        <span class="icon"></span>
                    </a>
                </span><!--
                --><span>
                    <a class="twitter-color" href="https://twitter.com/ShaastraIITM" target="_blank">
                        <span class="icon"></span>
                    </a>
                </span><!--
                --><span>
                    <a class="youtube-color" href="https://www.youtube.com/user/iitmshaastra" target="_blank">
                        <span class="icon"></span>
                    </a>
                </span><!--
                --><span>
                    <a class="linkedin-color" href="http://in.linkedin.com/pub/shaastra-iitm/16/914/405" target="_blank">
                        <span class="icon"></span>
                    </a>
                </span>
            </li>
        </ul>
    </nav>
</div>
<!-- menu popup end -->
<script>

    function show_menu () {
        $("#menu").addClass('open')
        $("#menu-btn").addClass('menu-open')
        $("#menu-bg").addClass('menu-open')
        $('body').addClass('no-scroll')
        $('#search-input').focus()
    }
    function hide_menu () {
        $("#menu").removeClass('open')
        $("#menu-btn").removeClass('menu-open')
        $("#menu-bg").removeClass('menu-open')
        $('body').removeClass('no-scroll')
        $('#search-input').blur()
    }

    var search_list = null;
    $(document).ready(function(){
        $(".menu-menu").click(function(ev){
            if($("#menu-btn").hasClass('menu-open') && ev.clientX > 200){
                hide_menu();
            } else {
                show_menu();
            }
        });
        $(".menu-back").click(function(e) {
            e.stopPropogation()
        })
        $("#menu-btn.menu-open").click(function(ev){
            hide_menu();
        });
        $('body').keydown(function(e){
            if(e.which == 27){ // escape key
                hide_menu();
            }
            else {
                search();
            }
        });
        $('#search-input').click(function(e) {
            e.preventDefault()
        })

        $.ajax({
            dataType: "json",
            cache: true,
            url: "../../php/scripts/search_list.php",
            async: true
        }).done(function(data) {
            window.search_list = data
            $('#search-message').slideUp(500)
            $('#search-input').keyup(search)
        }).fail(function(xhr) {
            $('#search-message').show().html("Error ! There seems to be an error. We cannot prepare the search as we are unable to connect to the internet")
            window.search_list = null
        });
    });
    function search(e) {
        if ( search_list == null ) {
            $('#search-message').show()
            return
        }
        $('#search-message').hide()

        query = $('#search-input').val().toLowerCase()
        if ( query == "" ) {
            $('.search-container .search-element').not(".template").remove()
        } else {
            queries = query.split(' ')
            $('.search-container .search-element').not(".template").remove()
            $.each(search_list, function(key, val) {
                found_substr = 0
                for ( var i = 0; i < queries.length; i++ ) {
                    if ( val.tags.toLowerCase().indexOf(query.toLowerCase()) != -1 ) {
                        found_substr = 1
                        break;
                    }
                }

                if  ( found_substr ) {
                    var $el = $('.search-container .search-element.template')
                        .clone().removeClass("template")
                    $el.find('.head').text(key)
                    setTimeout(function() {
                        if ( val.url ) $el.prop("href", val.url)
                    }, 500);
                    if ( val.img ) {
                        $el.find('.img').prop("src", val.img).hide()
                        $el.find('.loading-img').show()
                        $el.find('.img').on("load", function() {
                            var $el = $(this).closest("a")
                            $el.find('.img').show()
                            $el.find('.loading-img').hide()
                        })
                    }
                    $el.insertAfter('.search-container .search-element.template')
                }
            })
            if ( $('.search-container .search-element').not(".template").length == 0 )
                $('#search-message').show().html("Your search did not match any activity at Shaastra.")

        }
    }
</script>
