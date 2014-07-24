<style>
    /* ---------------- MENU BAR CSS ------------------ */
    #menu-btn {
        outline: 0;
        opacity: 1;
        cursor: pointer;
        margin-top: 20px;
        margin-left: 20px;
        z-index: 10000;
        color : #ffffff;
        letter-spacing: 2px;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100px;
        height: 40px;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;

    }
    #menu-btn span {
        display: inline-block;
        vertical-align: middle;
        text-transform: uppercase;  
    }
    /* Handle text when menu is open/closed */
    #menu-btn.menu-open {
        margin-left: 220px !important;
    }
    #menu-btn.menu-open .title {
        display: none;   
    }
    #menu-btn .title.title-close {
        display: none;   
    }
    #menu-btn.menu-open .title.title-close {
        display: inline-block;   
    }
    #menu-btn .menubars {
        width: 29px;
        height: 19px;
        position: relative;
        top: 1px;
    }
    #menu-btn.menu-open .menubars {
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
        background-color: rgba(0, 0, 0, 0.7);
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
        height: 12.5%; /* Change depending in number of items in menu */
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
        background-color: #1f1f1f;
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
        height: 44px;
        position: relative;
        display: block;
    }
    #menu .nav li .table-cell>span:after {
        content: "";
        position: absolute;
        height: 3px;
        background-color: #FFF;
        width: 28px;
        bottom: -15px;
        left: 86px;
        opacity: 0;
        -webkit-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -moz-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -o-transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        transition: all 300ms cubic-bezier(0.215, .61, .355, 1);
        -webkit-transition-delay: 130ms;
        -moz-transition-delay: 130ms;
        -o-transition-delay: 130ms;
        transition-delay: 130ms;
    }
    #menu .nav li .small {
        position: absolute;
        display: block;
        width: 100%;
        top: 0;
        left: 0;
        color: #c6a66d;
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
        color: #c6a66d;
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
    #menu .nav li:hover .big, #menu .nav li:hover .small,
    #menu .nav li.current .table-cell>span:after, 
    #menu .nav li:hover .table-cell>span:after {
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
        font-size: .875em;
        letter-spacing: 2px;
    }
    #menu .nav .big {
        font-size: 1.125em;
        letter-spacing: 3px;
    }




    #menu .nav li.social {
        text-align: center;
    }
    #menu .nav li.social span {
        display: inline-block;
        vertical-align: top;
        position: relative;
        width: 98px;
        height: 100%;
        margin: 0;
        padding: 0;
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
        margin: auto;
        width: 100%;
        height: 100%;
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
        

</style>

<div id="menu-btn" style="">
    <!--<span class="glyphicon glyphicon-tasks"></span>-->
    <span class="title">MENU</span>
    <span class="title title-close">CLOSE</span>
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
</div>

<!-- menu popup start -->
<div id='menu-bg'>
    <nav id="menu">
        <ul class="nav">
            <li>
                <span class="bg"></span>
                <a href="../pages/home.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="small">Go back to the</span>
                            <span class="big">Homepage</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="../pages/categories.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="small">Check out our</span>
                            <span class="big">Events</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="../pages/lectures.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="small">Learn from the best</span>
                            <span class="big">Lectures</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="../pages/spons.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="small">Know our</span>
                            <span class="big">Sponsors</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="../pages/shows.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="small">Be fascinated by</span>
                            <span class="big">Shows</span>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <span class="bg"></span>
                <a href="../pages/contact.php" class="table">
                    <span class="table-cell">
                        <span>
                            <span class="small">Reach out to</span>
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
                </span>
                <span>
                    <a class="twitter-color" href="https://twitter.com/ShaastraIITM" target="_blank">
                        <span class="icon"></span>
                    </a>
                </span> 
                <span>
                    <a class="youtube-color" href="https://www.youtube.com/user/iitmshaastra" target="_blank">
                        <span class="icon"></span>
                    </a>
                </span> 
                <span>
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
    }
    function hide_menu () {
        $("#menu").removeClass('open')
        $("#menu-btn").removeClass('menu-open')
        $("#menu-bg").removeClass('menu-open')
        $('body').removeClass('no-scroll')
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
