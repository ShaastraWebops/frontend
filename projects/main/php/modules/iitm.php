<style>
.logo-vertical {
    display: none;
}
.logo-vertical .col-centered {
    padding: 5;
}
@media (min-width: 768px) {
    .logo-vertical {
        position: fixed;
        bottom: 10px;
        right: 50px;
        z-index: 10000;
        display: inline-block;
        width: 120px;
    }
}
.col-centered img{
    -webkit-transition: all 300ms ease-in-out;
    -moz-transition: all 300ms ease-in-out;
    -o-transition: all 300ms ease-in-out;
    transition: all 300ms ease-in-out;
}
.iitm-logo img {
    height: 62px;
    width: 50px;
    float: right;
}
.tuv-logo img {
    height: 50px;
    width: 50px;
    float: left;
}

.iitm-logo:hover img {
    height: 74px;
    width: 60px;
    padding: 0;
}
.tuv-logo:hover img {
    height: 60px;
    width: 60px;
    padding: 0;
}
</style>
<div class="row logo-vertical row-centered">
    <a target="_blank" class="tuv-logo col-xs-6 col-centered" href="../pages/about.php">
        <img src="../../img/logo/iso_white.png"/>
    </a>
    <a target="_blank" class="iitm-logo col-xs-6 col-centered" href="http://www.iitm.ac.in">
        <img src="../../img/logo/iitm_white.png"/>
    </a>
</div>