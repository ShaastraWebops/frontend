<style>
/* Social Icons used in places */
a.social-icon {
    margin:5px 5px 0px 5px;
    padding:0px 0px 0px 0px;
    width:50px;
    height:50px;
    float:left;
    background: #191919;
    border:solid 1px #222121;
    -moz-border-radius: 5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    border: 2px solid #fff;
    border: 2px outset rgba(255, 255, 255, 0.8);
}
a.social-icon.facebook {
    background: #191919 url(../../img/icons/facebook.png) no-repeat -0px -75px;
    -webkit-transition:All 0.3s ease-out;
    -moz-transition:All 0.3s ease-out;
    -o-transition:All 0.3s ease-out;
}
a.social-icon.facebook:hover {
    background-position: -0px -0px;
}
a.social-icon.twitter {
    background: #191919 url(../../img/icons/twitter.png) no-repeat -0px -75px;
    -webkit-transition:All 0.3s ease-out;
    -moz-transition:All 0.3s ease-out;
    -o-transition:All 0.3s ease-out;
}
a.social-icon.twitter:hover {
    background-position: -0px -0px;
}
a.social-icon.google {
    background:#191919 url(../../img/icons/google.png) no-repeat -0px -75px;
    -webkit-transition:All 0.3s ease-out;
    -moz-transition:All 0.3s ease-out;
    -o-transition:All 0.3s ease-out;
}
a.social-icon.google:hover {
    background-position: -0px -0px;
}
a.social-icon.youtube {
    background:#191919 url(../../img/icons/youtube.png) no-repeat -0px -75px;
    -webkit-transition:All 0.3s ease-out;
    -moz-transition:All 0.3s ease-out;
    -o-transition:All 0.3s ease-out;
}
a.social-icon.youtube:hover {
    background-position: -0px -0px;
}
.social-vertical {
    display: none;
}
@media (min-width: 768px) {
    .social-vertical {
        position: fixed;
        top: 35%;
        left: 10px;
        z-index: 5;
        display: inline-block;
        width: 60px;
    }
}
</style>
<div class="row social-vertical">
    <div class="col-xs-12">
        <a target="_blank" class="social-icon facebook" href="<?php if ( isset($facebook) ) echo $facebook; else echo 'https://www.facebook.com/Shaastra'; ?>"></a>
    </div>
    <div class="col-xs-12">
        <a target="_blank" class="social-icon twitter" href="https://twitter.com/ShaastraIITM"></a>
    </div>
    <!-- <div class="col-xs-12">
        <a class="social-icon google" href="https://www.youtube.com/user/iitmshaastra"></a>
    </div> -->
    <div class="col-xs-12">
        <a target="_blank" class="social-icon youtube" href="https://www.youtube.com/user/iitmshaastra"></a>
    </div>
</div>
