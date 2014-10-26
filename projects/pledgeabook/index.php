<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Pledge a book | Shaastra</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="shortcut icon" href="./pics/favicon.png">

		<script type="text/javascript" src="js/jquery.js"></script>
		<script src="booklet/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
        <script src="js/flipclock.min.js" type="text/javascript"></script>

		<link href="booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/flipclock.css" type="text/css" media="screen" />

		<script src="cufon/cufon-yui.js" type="text/javascript"></script>
		<script src="cufon/ChunkFive_400.font.js" type="text/javascript"></script>
		<script src="cufon/Note_this_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('.b-load h1,.b-load p,#tab,#head-sub h4,#hit-count h4,#count1 h4,#count2 h4');
			Cufon.replace('.article', {hover:true});
			Cufon.replace('.title', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
			Cufon.replace('.reference a', {textShadow: '1px 1px #C59471', fontFamily:'ChunkFive'});
			Cufon.replace('.loading', {textShadow: '1px 1px #000', fontFamily:'ChunkFive'});
		</script>

    </head>
    <body>
    	<div class="header" style="text-align:center;">
            <div class="header-inner" style="display: inline-block; width: 100%;">
                <img src="pics/shaastra_hr.png" width="400" height="105" style="display:inline-block;"/>
                <span style="display:inline-block; font-size:1.6em; vertical-align: top; padding: 40px 10px 0px 20px">presents</span>
                <span style="font-family:lobster !important; display:inline-block; font-size:3em; padding:30px 20px 0 20px; vertical-align: top;">Pledge-A-Book     </span>
                <span style="display:inline-block; font-size:1.6em; vertical-align: top; padding: 40px 10px 0 20px">with the support of</span>
                <img src="pics/unesco.png" width="250" height="90" />
            <div id="social-icons-header" style="margin-top:-20px">
                <img src="images/social_fb_color.png" onclick="window.open('http://www.facebook.com/Shaastra','_blank');">
                <img src="images/social_youtube_color.png" onclick="window.open('http://www.youtube.com/user/iitmshaastra','_blank');">
                <img src="images/social_google_color.png" onclick="window.open('https://plus.google.com/u/0/109668817957263291803/about','_blank');">
                <img src="images/social_twitter_color.png" onclick="window.open('https://twitter.com/ShaastraIITM','_blank');">
            </div>

            </div>
        </div>
		<div class="book_wrapper">
			<a id="next_page_button"></a>
			<a id="prev_page_button"></a>
			<div id="loading" class="loading">Loading pages...</div>
            <div id="bookmark">
                <ul>
                    <li data-page="1" id="tab" class="active">About Pledge-A-Book</li>
                    <li data-page="2" id="tab">Campaign So Far</li>
                    <li data-page="4" id="tab">How to support</li>
                    <li data-page="8" id="tab">Contact Us</li>
                    <!-- <li data-page="10" id="tab">Gallery</li> -->
                </ul>
            </div>
            <div id="hit-count">
                <h4 style="font-size:19px; font-weight:bold; text-align:center">Supporters</h4>
                <div class="clock"></div>
                <!-- <p class="increment">I support this campaign</p> -->
            </div>
            <div id="count1">
                <h4 style="font-size:19px; font-weight:bold; text-align:center">Books Collected</h4>
                <div class="clock1"></div>
            </div>
            <div id="count2">
                <h4 style="font-size:19px;font-weight:bold;text-align:center">Libraries</h4>
                <div class="clock2"></div>
            </div>
			<div id="mybook" style="display:none;">
				<div class="b-load">
					<div>
					<!--<img src="images/1.jpg" alt=""/>-->
						<h1>About Pledge-A-Book</h1>
                        <br /><br /><br /><br />
						<p> '<b>Pledge-A-Book</b>' aims in aiding the under-privileged and giving them access to the resource of books.We hope to do our bit to help and spread education, literacy, multilingualism and encourage a reading habit among underprivileged children. The campaign will involve collection of a variety of books from the society. The books collected from the campaign is used for establishing reading facilities for the ones who are deprived of it. The campaign is targeted to impact the society at various levels. There are many people of different age groups who lack resources to acquire knowledge and so we aim to provide them with books therefore enabling them to lead a better life.<p>
                        <br /><br /><br />
                        <a href="javascript:void(0)" onclick='nextpage()' class="article right">Next</a>
					</div>
					<div>
                        <h1>Campaign so far:</h1>
                        <p>
                            Campaign flagged off by famous science writer Mr. Anil Ananthaswamy in August 2014
                            <br /><br />
                            1st Collection Drive at IIT Madras with a collection of around 400 books.
                            <br /><br />
                            2nd Collection Drive at IIT Madras with a collection of over 600 books.
                            <br /><br />
                            Collection at Terry Fox Run Chennai.
                            <br /><br />
                            UNESCO supports the Campaign in September 2014.
                            <br /><br />
                            1st Library of about 120 books is set up at Avanti Teaching Centre in Pondicherry on 2nd October 2014 in the Daan Utsav (Joy of Giving Week)
                            <br /><br />
                            Renowned British actor and writer Mr. Stephen Fry also supports the campaign by pledging a book in October 2014.
                        </p>

                        <a href="javascript:void(0)" onclick='prevpage()' class="article left">Back</a>
                    </div>
                    <div>
                    <p>
                        <br /><br />
                        The campaign is encouraged by The Hindu in an article on 9th October 2014.
                        <br /><br />
                        Higginbothams Chennai donates 200 books.
                        <br /><br />
                        Mr. Vijay Govindarajan supports the campaign in October 2014.
                        <br /><br />
                        2nd Library of about 80 books is set up with help of AARVAM
                        <br /><br />
                        Famous writer Sudha Murthy pledges and supports the campaign.
                        <br /><br /><br /><br /><br /><br /><br /><br /><br />
                        <a href="javascript:void(0)" onclick='nextpage()' class="article right">Next</a>
                    </p>
                    </div>
                    <div>
                        <h1>How to support:</h1>
    					<p>You can support the campaign by pledging your old books. We accept wide range of books.
    					You can donate children's books, novels, JEE preparation materials. You can also support the campaign by pledging your engineering books.
    					You can support the campaign by taking part in collection drives. We regularly organize collection drives inside the green campus of IIT Madras. You can contribute to the campaign by dropping off your books at one of the following points in your respective cities.
                        </p>
    					<br />

                        <p style="color:#008">Pledge-A-Book Collection Centers : </p>
                        <br />

                        <p><b>CHENNAI</b></p>
                        <p>OFFICE, DEAN OF STUDENTS</p>
                        <p>
                            IIT Madras<br />
                            Chennai - 600036<br />
                            Tel : +91 99620 35992<br />
                        </p>

                        <br />
                        <a href="javascript:void(0)" onclick='prevpage()' class="article left">Back</a>

					</div>
					<div>

                        <br /><br />
                        <p style="color:#003">ALTIUS FOUNDATION</p>
                        <p>
                            Old No. 19/ New no.33, Flat No.3, Saravanalayam P.S.Sivaswami Salai ( near Vivekananda College)<br />
                            Mylapore<br />
                            Chennai - 600 004<br />
                            Phone : 044 24981967<br />
                        </p>
                        <br />
                        <p style="color:#003">Indian Development Foundation (Southern Region) Chennai</p>
                        <p>
                            6/PP1, School Street, Mogappair West<br />
                            Chennai 600 037<br />
                            Tel. 044 2653 1168,  +91 98400 40191<br />
                            Email : idftamilnadu@gmail.com
                        </p>
                        <br />
                        <p style="color:#003">Agni Shine</p>
                        <p>
                            No: 15 B, Easwaran Koil Street, Selaiyur<br />
                            Chennai - 600073
                        </p>
                        <br /><br /><br />
                        <a href="javascript:void(0)" onclick='nextpage()' class="article right">Next</a>
                    </div>
                    <div>
                        <br /><br />
                        <p style="color:#003">OPEN India</p>
                        <p>
                            No. 26 Venkateshwara Nagar, 19th Street, Kottivakkam <br />
                            Chennai - 600041<br />
                            Tel : +91 98407 58870
                        </p>
                        <br ><hr /><br >

                        <p><b>MUMBAI</b></p>
                        <p style="color:#003">Indian Developemnt Foundation</p>
                        <p>L 10/ 3&4 Jal Ratan Deep, Bangur Nagar, <br />
                        Goregaon(West), Mumbai 400 104.</p>
                        <p>Tel : 022 28762008, 022 28763008, +91 - 9819131388 </p>
                        <p> Email : idfindia@gmail.com / info@idf.org.in </p>
                        <br >
                        <hr />
                        <br /><br /><br /><br /><br /><br /><br />

                        <a href="javascript:void(0)" onclick='prevpage()' class="article left">Back</a>

					</div>
					<div>


                        <!-- <p><b>JAIPUR</b></p>
                        <p style="color:#003">IDF (Northern Region) JAIPUR </p>
                        <p>%Sarthak Manav Kushthashram 3-Dha-1 Jawahar Nagar Jaipur 302 004</p>
                        <p>Tel. + 91 - 0141 -2655406 </p>
                        <p> Cell: +91 - 9785647318 - 8003514069 </p>
                        <p> Email: idfjaipur@gmail.com ; idfkovid@gmail.com </p>
                        <br /><br /> -->

                        <br ><br />
                        <p><b> BANGALORE</b></p>
                        <p style="color:#003">Indian Developemnt Foundation</p>
                        <p>C/o. #B.202, Suraj Ganga Socrates, No. 87/2, <br />
                        Vajrahalli, Kanakapura MainRoad, Bangalore 560062</p>
                        <p> Cell: +91 9449074443  </p>
                        <p> Email: idfsouthindia@gmail.com </p>
                        <br />
                        <hr />
                        <br />
                        <p><b>HYDERABAD</b></p>
    					<p style="color:#003">Indian Development Foundation</p>
                        <p>Plot No. 432, (Old No. 1-1-742/A) Near Narmada Hospital, <br />
                        Gandhi Nagar, Hyderabad - 500 080</p>
    					<p>	Cell: +91 -  8978993222  </p>
    					<p>	Email: idfap01@gmail.com </p>
                        <br /><br />
                        <hr />
                        <br /><br />
                        <a href="javascript:void(0)" onclick='nextpage()' class="article right">Next</a>
                    </div>

                    <div>
						<h1>Contact Us</h1>
                        <br />
                        <p>Reach us via Email : <a href="mailto:pledgeabook@shaastra.org">pledgeabook@shaastra.org</a></p>
                        <br />
                        <p style="color:#06F"><strong>Pledge a Book Team :</strong></p>
                        <br />
                        <p> <span style="color:#003">Romil Shah</span> - 9962035992</p>
                        <p> <span style="color:#003">Ayush Sirothia</span> - 9884180433</p>
                        <p> <span style="color:#003">Yash Dixit</span> - 9840256679</p>
                        <p> <span style="color:#003">Mazhar Shaikh</span> - 9003107267</p>
                        <p> <span style="color:#003">Vishal Paidimarri</span> - 9003102645</p>
                        <p> <span style="color:#003">Mohit Sharma</span> - 9884184617</p>
                        <p> <span style="color:#003">Shreyas Srinath</span> - 9940128288</p>
                        <p> <span style="color:#003">Shubham Jain</span> - 9962035992</p>
                        <br /><br /><br /><br /><br /><br />
                        <a href="javascript:void(0)" onclick='prevpage()' class="article left">Back</a>
					</div>
					<!--<div>
                        <h1>Gallery</h1>
                        <img src="pics/gallery/1.jpg" />
                        <img src="pics/gallery/2.jpg" />
                        <img src="pics/gallery/3.jpg" />
                    </div>
                    <div>
                        <img src="pics/gallery/4.jpg" />
                        <img src="pics/gallery/5.jpg" />
                        <img src="pics/gallery/6.jpg" />
                    </div>
                    <div>
                        <img src="pics/gallery/7.jpg" />
                        <img src="pics/gallery/8.jpg" />
                        <img src="pics/gallery/9.jpg" />
                    </div><div>
                        <img src="pics/gallery/10.jpg" />
                        <img src="pics/gallery/11.jpg" />
                        <img src="pics/gallery/12.jpg" />
                    </div>-->
                    <div>
						<img src="images/6.jpg" width="0" height="0" alt="" style="display:none;"/>
					</div>
				</div>
			</div>
            <div style="display: inline-block; float:left;" class="btn">
                <b>&larr; Previous</b>
            </div>
            <div style="display: inline-block; float:right;" class="btn">
                <b>Next &rarr;</b>
            </div>
		</div>
        <div id="sponsors">
        <h1 style="font-family:lobster;">Partners</h1>
        <img src="pics/avanti.jpg" width="280" height="160" />
        <img src="pics/IDF logo - cyan.png" width="130" height="160" />
        </div>
        <!-- The JavaScript -->

        <script type="text/javascript">
			$(function() {
				var $mybook 		= $('#mybook');
				var $bttn_next		= $('#next_page_button');
				var $bttn_prev		= $('#prev_page_button');
				var $loading		= $('#loading');
				var $mybook_images	= $mybook.find('img');
				var cnt_images		= $mybook_images.length;
				var loaded			= 0;
				//preload all the images in the book,
				//and then call the booklet plugin

				$mybook_images.each(function(){
					var $img 	= $(this);
					var source	= $img.attr('src');
					$('<img/>').load(function(){
						++loaded;
						if(loaded == cnt_images){
							$loading.hide();
							$bttn_next.show();
							$bttn_prev.show();
							$mybook.show().booklet({
								name:               null,                            // name of the booklet to display in the document title bar
								width:              800,                             // container width
								height:             500,                             // container height
								speed:              600,                             // speed of the transition between pages
								direction:          'LTR',                           // direction of the overall content organization, default LTR, left to right, can be RTL for languages which read right to left
								startingPage:       0,                               // index of the first page to be displayed
								easing:             'easeInOutQuad',                 // easing method for complete transition
								easeIn:             'easeInQuad',                    // easing method for first half of transition
								easeOut:            'easeOutQuad',                   // easing method for second half of transition

								closed:             true,                           // start with the book "closed", will add empty pages to beginning and end of book
								closedFrontTitle:   null,                            // used with "closed", "menu" and "pageSelector", determines title of blank starting page
								closedFrontChapter: null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank starting page
								closedBackTitle:    null,                            // used with "closed", "menu" and "pageSelector", determines chapter name of blank ending page
								closedBackChapter:  null,                            // used with "closed", "menu" and "chapterSelector", determines chapter name of blank ending page
								covers:             false,                           // used with  "closed", makes first and last pages into covers, without page numbers (if enabled)

								pagePadding:        10,                              // padding for each page wrapper
								pageNumbers:        true,                            // display page numbers on each page

								hovers:             false,                            // enables preview pageturn hover animation, shows a small preview of previous or next page on hover
								overlays:           false,                            // enables navigation using a page sized overlay, when enabled links inside the content will not be clickable
								tabs:               false,                           // adds tabs along the top of the pages
								tabWidth:           60,                              // set the width of the tabs
								tabHeight:          20,                              // set the height of the tabs
								arrows:             false,                           // adds arrows overlayed over the book edges
								cursor:             'pointer',                       // cursor css setting for side bar areas

								hash:               false,                           // enables navigation using a hash string, ex: #/page/1 for page 1, will affect all booklets with 'hash' enabled
								keyboard:           true,                            // enables navigation with arrow keys (left: previous, right: next)
								next:               $bttn_next,          			// selector for element to use as click trigger for next page
								prev:               $bttn_prev,          			// selector for element to use as click trigger for previous page

								menu:               null,                            // selector for element to use as the menu area, required for 'pageSelector'
								pageSelector:       false,                           // enables navigation with a dropdown menu of pages, requires 'menu'
								chapterSelector:    false,                           // enables navigation with a dropdown menu of chapters, determined by the "rel" attribute, requires 'menu'

								shadows:            true,                            // display shadows on page animations
								shadowTopFwdWidth:  166,                             // shadow width for top forward anim
								shadowTopBackWidth: 166,                             // shadow width for top back anim
								shadowBtmWidth:     50,                              // shadow width for bottom shadow

								before:             function(){},                    // callback invoked before each page turn animation
								after:              function(){}                     // callback invoked after each page turn animation
							});
							Cufon.refresh();
						}
					}).attr('src',source);
				});

			});

        </script>
        <script type="text/javascript">
            var prev_page = 1;
            var working = 0;
			$(document).ready(function(e) {
                $("#bookmark").find('li').click(function(){
                    if ( working == 1 ) return
                    working = 1
					var $el = $(this)
					$("#bookmark").find('li').removeClass('active');
					$el.addClass('active');
                    page = parseInt($el.data("page"))
                    pp = parseInt(prev_page/2)
                    p = parseInt(page/2)
                    console.log(pp - p)

                    if(pp < p){ // turn front
						for (var i=1; i <= Math.abs(pp-p); i++){
    						setTimeout(function() {
    							$("#next_page_button").click()
    						},(i-1)*700);
    					}
                        setTimeout(function(){
                            working = 0
                        }, Math.abs(pp-p)*750);
					}
					else if(p < pp){
						for (var i=1;i <= Math.abs(pp-p); i++){
							setTimeout(function(){
								$("#prev_page_button").click()
							}, (i-1)*750);
						}
                        setTimeout(function(){
                            working = 0
                        }, Math.abs(pp-p)*750);
					}
					prev_page = page
				});
            });
            function nextpage() {
                if ( working == 1 ) return
                working = 1
                $("#next_page_button").click();
                prev_page = (1 + parseInt(prev_page/2) ) * 2
                setTimeout(function(){
                    working = 0
                }, 700);
            }
            function prevpage() {
                if ( working == 1 ) return
                working = 1
                $("#prev_page_button").click();
                prev_page = Math.min(parseInt(prev_page/2)-1, 0) * 2
                setTimeout(function(){
                    working = 0
                }, 700);
            }
		</script>
        <script type="text/javascript">
		var clock;
		var clock1;
		var clock2;
			$(document).ready(function() {
				clock = new FlipClock($('.clock'), 1045, { //
					clockFace: 'Counter'
				});
				clock1 = new FlipClock($('.clock1'), 1273, { // books
					clockFace: 'Counter'
				});
				clock2 = new FlipClock($('.clock2'), 3, { // libraries
					clockFace: 'Counter'
				});
				$('.increment').click(function() {
					clock.increment();
				});
                socials = $('#social-icons-header > img')
                $(socials).hover(function() {
                    var $el = $(this)
                    $el.prop("src", $el.prop("src").replace("_color", "_bw"))
                }, function() {
                    var $el = $(this)
                    $el.prop("src", $el.prop("src").replace("_bw", "_color"))
                })
			});
			</script>
    </body>
</html>
