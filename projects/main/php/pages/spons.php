<!DOCTYPE html>
<html>
<head>
    <title>Spons | Shaastra 2015</title>
    <?php include '../base/head.php' ?>
    
    <style>
        .tabs {
            margin-left:65px;
            margin-right:65px;;
            margin-top:10px;
            width:90%;
            display:inline-block;
        }
        .tab-links:after {
            display:block;
            clear:both;
            content:'';
        }
        .tab-links li {
            margin-left:5px;
            float:left;
            list-style:none;
        }
        .tab-links a {
            padding:9px 15px;
            display:inline-block;
            border-radius:3px 3px 0px 0px;
            background:#7FB5DA;
            font-size:16px;
            font-weight:600;
            color:#4c4c4c;
            transition:all linear 0.2s;
            text-decoration:none;   
        }
        .tab-links a:hover {
            background:#a7cce5;
        }
        li.active a, li.active a:hover {
            background:#fff;
            color:#4c4c4c;
        }
        .tab-content {
            padding:15px;
            margin-top:-10px;
            border-radius:3px;
            box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
            background:#fff;
        }
        .tab {
            display:none;
        }
        .tab.active {
            display:block;
        }

    </style>
    
    <script>
        $(document).ready(function() {
        $('#tab1').load('../modules/tab.htm #Tab1');
        $('.tabs .tab-links a').on('click', function(e)  {
            var currentAttrValue = $(this).attr('href');
            $('.tabs ' + currentAttrValue).show().siblings().hide();
            $(this).parent('li').addClass('active').siblings().removeClass('active');
            e.preventDefault();
        });
    });
    </script>
        <style>
        .d4, .d8, .d12, .d6{
        transition:all linear 0.2s;
        padding: 10px 10px;
        border-radius: 5px;
        border: 1px solid white;
        opacity:0.8;
        }
        .d4:hover, .d8:hover, .d12:hover, .d6:hover{
        border: 1px solid #a1a1a1;
        background-color: #eee; 
        opacity:1;
        }
        img.sponsor{
        margin: 15px;
        }
        /*img{
        border: 1px solid white;
        border-radius: 5px;
        padding: 10px 10px;
        }
        img:hover{
        border: 1px solid #a1a1a1;
        background-color: #eee;
        }*/
        .row {
        display: table;
        }
        .row [class*="col-"] {
        float: none;
        display: table-cell;
        vertical-align: top;
        }
    </style>
    
</head>
<body>
    <?php include '../base/menu.php' ?>

    <div class="container-fluid title white centered" style='margin-bottom:2%'>
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center title">SPONSORS</h1>
                <div class="white breaker">
                    <span class="left"></span>
                    <div class="dice white"></div>
                    <span class="right"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="tabs">

        <ul class="tab-links"> <strong><li class="active">
                    <a href="#tab1">2014</a>
                </li>
                <li>
                    <a href="#tab2" onclick="$('#tab2').load('../modules/tab.htm #Tab2');">2013</a>
                </li>
                <li>
                    <a href="#tab3" onclick="$('#tab3').load('../modules/tab.htm #Tab3');">2011</a>
                </li>
                <li>
                    <a href="#tab4" onclick="$('#tab4').load('../modules/tab.htm #Tab4');">2010</a>
                </li></strong> 
        </ul>

        <div class="tab-content">
            <div id="tab1" class="tab active"></div>

            <div id="tab2" class="tab"></div>

            <div id="tab3" class="tab"></div>

            <div id="tab4" class="tab"></div>
        </div>
    </div>
    <?php include '../base/foot.php' ?>
</body>
</html>