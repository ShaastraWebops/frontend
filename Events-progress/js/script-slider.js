(function ($, undefined) {

	"use strict";

	var win = $(window),
	documentBody = (($.browser.chrome)||($.browser.safari)) ? document.body : document.documentElement,
	$Body = $("body"),
	$Works = $("#works"),
	$WorksFolio = $("#works-folio"),
	$WorksFolioBottom = $("#works-folio-bottom"),
	$LinkThumbnailsTop = $("#works-folio-top").find(".link-thumbnails"),
	$LinkThumbnailsBottom = $WorksFolioBottom.find(".link-thumbnails"),
	$Thumbnails = $(".div-thumbnails"),
	$MiniThumbnails = $(".div-mini-thumbnails"),
	$LiMiniThumbnails = $(".mini-thumbnails"),
	$WorksFolioSlider = $("#works-folio-slider"),
	$SliderClose = $("#slider-close"),
	Works_Height = win.outerHeight(),
	runningScroll = false,
	sliderOpen = false,
	heightWindow = win.outerHeight(),
	widthWindow = win.outerWidth(),
	currentSlide,
	currentKinetic,

	_resizeWindow = function(){
		heightWindow = win.outerHeight(),
		widthWindow = win.outerWidth();
		$WorksFolioSlider.css({"margin-left": -widthWindow/2+"px"});
		if (sliderOpen===true){
			if (heightWindow < 800){
				var Works_Height_Temp = Works_Height+772-392-100-120,
					MarginTopWorksFolioSlider = 130,
					MarginBottomWorksFolioSlider = 145,
					MarginTopWorksFolio = -90,
					HeightWorksFolioSlider = 470;
					$Body.addClass("small-screen");
			}
			else{
				var Works_Height_Temp = Works_Height+772-392,
					MarginTopWorksFolioSlider = 100,
					MarginBottomWorksFolioSlider = MarginTopWorksFolioSlider,
					MarginTopWorksFolio = -160,
					HeightWorksFolioSlider = 580;
					$Body.removeClass("small-screen");
			}
			$Works.css({"height":Works_Height_Temp},700);
			$WorksFolioSlider.css({
				"height":HeightWorksFolioSlider,
				"width": "100%",
				"margin-top": -MarginTopWorksFolioSlider+"px",
				"margin-bottom": -MarginBottomWorksFolioSlider+"px"
			});
			$WorksFolio.css({
				"margin-top":MarginTopWorksFolio+"px"
			});
		}
	},

	_scrollTo = function(){
		$Thumbnails.on("click",function(){
			if (runningScroll === false && sliderOpen===false){
				runningScroll=true;
				$(documentBody).animate({scrollTop: $Works.offset().top}, 700,'easeOutQuint',function(){_openSlider();runningScroll=false;});
				currentSlide=$(this).attr("data-slide");
			}
			return false;
		});
	},

	_openSlider = function(){
		if (sliderOpen===false){
			sliderOpen=true;
			if (heightWindow < 800){
				var Works_Height_Temp = Works_Height+772-392-100-120,
					MarginTopWorksFolioSlider = 130,
					MarginBottomWorksFolioSlider = 145,
					MarginTopWorksFolio = -90,
					HeightWorksFolioSlider = 470;
					$Body.addClass("small-screen");
			}
			else{
				var Works_Height_Temp = Works_Height+772-392,
					MarginTopWorksFolioSlider = 100,
					MarginBottomWorksFolioSlider = 118,
					MarginTopWorksFolio = -160,
					HeightWorksFolioSlider = 580;
			}
			var $MiniThumbnailsColor = $MiniThumbnails.find("[data-slide="+currentSlide+"]").find("a");
			$Works.animate({"height":Works_Height_Temp},700,'easeOutQuint');
			$Thumbnails.delay(200).fadeOut(700);
			if ($.browser.msie){
				$WorksFolioBottom.find(".div-mini-thumbnails").animate({
					"margin-top":"0px"
				},700,'easeOutQuint');
				$LinkThumbnailsTop.find(".div-thumbnails").transition({
					rotateX: "90deg"
				},700,'easeOutQuint',function(){
					$MiniThumbnails.find("a").animate({"color":"white"},700,'easeOutQuint');
					$WorksFolioSlider.animate({
						"height":HeightWorksFolioSlider,
						"width": "100%",
						"margin-top": -MarginTopWorksFolioSlider+"px",
						"margin-bottom": -MarginBottomWorksFolioSlider+"px"
					},500,'easeOutQuad');
					$WorksFolio.animate({
						"margin-top":MarginTopWorksFolio+"px"
					},500,'easeOutQuint',function(){
						$MiniThumbnailsColor.animate({"background-color":"transparent"},700,'easeOutQuint');
						$("#"+currentSlide).fadeIn(700,'easeOutQuint',function(){
							var $this = $(this);
							$this.addClass("slide-visible");
							$this.find(".img-slide").animate({
								"left":"305px"
							},700,'easeOutQuint',function(){
								$this.find(".content-folio-slide").fadeIn(700,'easeOutQuint');
							});
							_swipe($this);
							_mouseWheel($this);
							$SliderClose.fadeIn(700,'easeOutQuint');
						});
					});
				});
				$LinkThumbnailsBottom.find(".div-thumbnails").transition({
					rotateX: "90deg"
				},700,'easeOutQuint');
			}
			else{
				$LinkThumbnailsBottom.transition({
					rotateX: "-90deg"
				},700,'easeOutQuint');
				$LinkThumbnailsTop.transition({
					rotateX: "90deg"
				},700,'easeOutQuint',function(){
					$MiniThumbnails.find("a").animate({"color":"white"},700,'easeOutQuint');
					$WorksFolioSlider.animate({
						"height":HeightWorksFolioSlider,
						"width": "100%",
						"margin-top": -MarginTopWorksFolioSlider+"px",
						"margin-bottom": -MarginBottomWorksFolioSlider+"px"
					},500,'easeOutQuad');
					$WorksFolio.animate({
						"margin-top":MarginTopWorksFolio+"px"
					},500,'easeOutQuint',function(){
						$MiniThumbnailsColor.animate({"background-color":"transparent"},700,'easeOutQuint');
						$("#"+currentSlide).fadeIn(700,'easeOutQuint',function(){
							var $this = $(this);
							$this.addClass("slide-visible");
							$this.find(".img-slide").animate({
								"left":"305px"
							},700,'easeOutQuint',function(){
								$this.find(".content-folio-slide").fadeIn(700,'easeOutQuint');
							});
							_swipe($this);
							_mouseWheel($this);
							$SliderClose.fadeIn(700,'easeOutQuint');
						});
					});
				});
			}
			_closeSlider();
			_showWork();
			return false;
		}
	},

	_swipe = function($this){
		$this.kinetic({
			triggerHardware: true,
			y: false
		});
	},

	_mouseWheel = function($this){
		$this.bind("mousewheel", function(event, delta) {
            var dir = delta > 0 ? "Left" : "Right",
                vel = Math.abs(delta),
                widthThis = parseInt($this.find(".img-slide").css("width"),10)-widthWindow+305,
                tempPosition = $this.scrollLeft();
            if (event.originalEvent.wheelDeltaX && dir === "Right" || event.originalEvent.axis===1 && dir === "Right"){
				if (tempPosition<widthThis){
					tempPosition = tempPosition + 100*vel;
					$this.scrollLeft(tempPosition);
					return false;
				}
            }
            else if (event.originalEvent.wheelDeltaX && dir === "Left" || event.originalEvent.axis===1 && dir === "Left"){
				if (tempPosition >= 0){
					tempPosition = tempPosition - 100*vel;
					$this.scrollLeft(tempPosition);
					return false;
				}
            }
        });
	},

	_showWork = function(){
		$LiMiniThumbnails.on("click",function(){
			var showSlide = $(this).attr("data-slide");
			if ($(".slide-visible").attr("id") !== showSlide){
				$MiniThumbnails.find("[data-slide="+currentSlide+"]").find("a").animate({"background-color":"#1F1F1F"},700,'easeOutQuint');
				$(".slide-visible").fadeOut(350,'easeOutQuint',function(){
					$(this).removeClass("slide-visible");
					$(this).find(".img-slide").css({"left":"0px"});
					$MiniThumbnails.find("[data-slide="+showSlide+"]").find("a").animate({"background-color":"transparent"},1000,'easeOutQuint');
					$("#"+showSlide).fadeIn(700,'easeOutQuint',function(){
						var $this=$(this);
						currentSlide = showSlide;
						$this.addClass("slide-visible");
						$this.find(".img-slide").animate({
							"left":"305px"
						},700,'easeOutQuint',function(){
							$this.find(".content-folio-slide").fadeIn(700,'easeOutQuint');
						});
						_swipe($this);
						_mouseWheel($this);
					});
				});
			}
			return false;
		});
	},

	_closeSlider = function(){
		if (sliderOpen===true){
			$SliderClose.on("click",function(){
				$MiniThumbnails.find("[data-slide="+currentSlide+"]").find("a").animate({"background-color":"#1F1F1F"},350,'easeOutQuint');
				$(".slide-visible").fadeOut(700,'easeOutQuint');
				$SliderClose.fadeOut(700,'easeOutQuint');
				var Works_Height_Temp = Works_Height;
				$Works.animate({"height":Works_Height_Temp},700,'easeOutQuint');
				$WorksFolio.animate({
					"margin-top":"0px"
				},700,'easeOutQuint');
				if ($.browser.msie || $.browser.opera){
					$WorksFolioBottom.find(".div-mini-thumbnails").animate({
						"margin-top":"-14px"
					},700,'easeOutQuint');
				}
				$WorksFolioSlider.animate({
					"height":"0px",
					"width": "100%",
					"position": "relative",
					"top": "0",
					"left": "50%",
					"margin-top": "0px",
					"margin-bottom": "0px"
				},500,'easeOutQuint',function(){
					$Thumbnails.fadeIn(300);
					if ($.browser.msie){
						$LinkThumbnailsBottom.find(".div-thumbnails").transition({
							rotateX: "0deg"
						},700,'easeOutQuint');
						$LinkThumbnailsTop.find(".div-thumbnails").transition({
							rotateX: "0deg"
						},700,'easeOutQuint');
					}
					else{
						$LinkThumbnailsBottom.transition({
							rotateX: "0deg"
						},700,'easeOutQuint');
						$LinkThumbnailsTop.transition({
							rotateX: "0deg"
						},700,'easeOutQuint');
					}
					$MiniThumbnails.find("a").animate({"color":"#1F1F1F"},700,'easeOutQuint');
					$(".slide-visible").removeClass("slide-visible");
					sliderOpen=false;
				});
				return false;
			});
		}
	},

	init = function() {
		_resizeWindow();
		win.resize(_resizeWindow);
		win.scroll(_scrollTo);
		_scrollTo();
	};
	
	// when DOM is ready...
	$(init);
	
})(jQuery);