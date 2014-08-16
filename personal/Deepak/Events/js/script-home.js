(function ($, undefined) {

	"use strict";

	var win = $(window),
	documentBody = (($.browser.chrome)||($.browser.safari)) ? document.body : document.documentElement,
	$Body = $("body"),
	$Nav = $("#nav"),
	$NavItem = $(".navItem"),
	$NavActive = $("#nav-active"),
	$Twitter = $("#twitter"),
	$TwitterMask = $("#twitter-mask"),
	$LinkedinMask = $("#linkedin-mask"),
	SocialColor = true,
	$Home = $("#homepage"),
	$Works = $("#works"),
	$WorksFolio = $("#works-folio"),
	$About = $("#about"),
	$device = $("#device"),
	$orientation = $("#orientation"),
	$miniDevice = $("#mini-device"),
	$Browser = $("#browser"),
	$Continue = $(".continue"),
	continueNavigation = false,
	runningScroll = false,

	_device = function(){
		if (continueNavigation === false){
			var widthWindow = win.outerWidth(),
				heightWindow = win.outerHeight();
			if ($.browser.msie || $.browser.opera){
				$Body.addClass("ie");
				var IEVersion = parseInt($.browser.version,10);
				if (IEVersion<9){
					$Browser.show();
				}
			}
			if (navigator.userAgent.match(/(android|iphone|ipad|blackberry|symbian|symbianos|symbos|netfront|model-orange|javaplatform|iemobile|windows phone|samsung|htc|opera mobile|opera mobi|opera mini|presto|huawei|blazer|bolt|doris|fennec|gobrowser|iris|maemo browser|mib|cldc|minimo|semc-browser|skyfire|teashark|teleca|uzard|uzardweb|meego|nokia|bb10|playbook)/gi)) {
				if ( ((screen.width  >= 480) && (screen.height >= 800)) || ((screen.width  >= 800) && (screen.height >= 480)) || navigator.userAgent.match(/ipad/gi) ) {
					//tablet
					// Find matches
					$device.hide();
					$miniDevice.hide();
					var mql = window.matchMedia("(orientation: portrait)");

					// If there are matches, we're in portrait
					if(mql.matches){
						// Portrait orientation
						$orientation.show();
						$device.show();
					}

					// Add a media query change listener
					mql.addListener(function(m){
						if(m.matches){
							// Changed to portrait
							$device.show();
							$orientation.show();
						}
						else{
							// Changed to landscape
							$device.fadeOut();
							$orientation.fadeOut();
							$(documentBody).css({scrollTop: $Home.offset().top});
						}
					});
				} else {
					//mobile
					$device.hide();
					$orientation.hide();
					$device.show();
					$miniDevice.show();
				}
			} else {
				if (widthWindow<1024 || heightWindow<700){
					$device.hide();
					$orientation.hide();
					$device.show();
					$miniDevice.show();
				}
				else{
					$device.hide();
					$orientation.hide();
					$device.fadeOut();
					$miniDevice.hide();
				}
			}
			$Continue.on("click",function(){
				$device.fadeOut();
				$Browser.fadeOut();
				continueNavigation = true;
			});
		}
	},

	_resizeWindow = function(){
		var heightWindow = win.outerHeight();
		$Home.css({
			"height":heightWindow
		});
		$Works.css({
			"height":heightWindow
		});
		$About.css({
			"height":heightWindow-70
		});
		$WorksFolio.css({
			"top":heightWindow/2-196
		});
	},

	_scrollTo = function(){
		$NavItem.click(function(){
			if (runningScroll === false){
				runningScroll=true;
				var destination = $(this).attr("href");
				if(destination === "#about"){
					$(documentBody).animate({scrollTop: $(destination).offset().top-60}, 2000,'easeInOutQuint',function(){runningScroll=false;});
				}
				else{
					$(documentBody).animate({scrollTop: $(destination).offset().top}, 2000,'easeInOutQuint',function(){runningScroll=false;});
				}
			}
			return false;
		});
	},

	_headerFunction = function(){
		var scrollPosition = win.scrollTop(),
			HomeHeight = $Home.outerHeight();
		if (scrollPosition >= HomeHeight){
			if (SocialColor === true){
				$Nav.stop(true,false).animate({
					"background-color":"white"
					//"border-color":"rgba(0,0,0,0.4)"
				},500,'easeInOutQuint');
				$Twitter.stop(true,false).animate({
					//"border-color":"rgba(0,0,0,0.4)"
				},500,'easeInOutQuint');
				$TwitterMask.stop(true,false).fadeOut(250,'easeInOutQuint',function(){
					$NavItem.animate({
						"color":"black"
					},125,'easeInOutQuint');
					$(this).css({
						"background-position":"0px 0px"
					}).fadeIn(125,'easeInOutQuint');
				});
				$LinkedinMask.stop(true,false).fadeOut(250,'easeInOutQuint',function(){
					$(this).css({
						"background-position":"0px 0px"
					}).fadeIn(125,'easeInOutQuint');
				});
				SocialColor = false;
			}
		}
		else {
			if (SocialColor === false){
				$NavActive.animate({"opacity":"0"},1000);
				$Nav.stop(true,false).animate({
					"background-color":"rgba(0,0,0,0.4)"
				},500,'easeInOutQuint');
				$Twitter.stop(true,false).animate({
				},500,'easeInOutQuint');
				$TwitterMask.stop(true,false).fadeOut(250,'easeInOutQuint',function(){
					$NavItem.animate({
						"color":"white"
					},125,'easeInOutQuint');
					$(this).css({
						"background-position":"0px -16px"
					}).fadeIn(125,'easeInOutQuint');
				});
				$LinkedinMask.stop(true,false).fadeOut(250,'easeInOutQuint',function(){
					$(this).css({
						"background-position":"0px -17px"
					}).fadeIn(125,'easeInOutQuint');
				});
				SocialColor = true;
			}
		}
	},

	init = function() {
		_resizeWindow();
		win.resize(_resizeWindow);
		_scrollTo();
		_device();
		win.resize(_device);
		win.scroll(_headerFunction);
	};
	
	// when DOM is ready...
	$(init);
	
})(jQuery);