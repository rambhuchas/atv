

(function ($) {
	'use strict';

	// 6.EM MOBILE MENU
	$('.mobile-menu nav').meanmenu({
		meanScreenWidth: "990",
		meanMenuContainer: ".mobile-menu",
		onePage: true,
	});
	// top quearys menu 
	var emsmenu = $(".em-quearys-menu i.t-quearys");
	var emscmenu = $(".em-quearys-menu i.t-close");
	var emsinner = $(".em-quearys-inner");
	emsmenu.on('click', function () {
		emsinner.addClass('em-s-open').fadeToggle(1000);
		$(this).addClass('em-s-hidden');
		emscmenu.removeClass('em-s-hidden');
	});
	emscmenu.on('click', function () {
		emsinner.removeClass('em-s-open').fadeToggle(1000);
		$(this).addClass('em-s-hidden');
		emsmenu.removeClass('em-s-hidden');
	});
	// 6.HOME 2 HERO CAROUSEL
	$('.em-slick-slider-new').slick({
		dots: true,
		speed: 300,
		arrows: true,
		autoplay: true,
		fade: true,
		autoplaySpeed: 6000,
		responsive: [{
			breakpoint: 769,
			settings: {
				arrows: false,
			}
		}]
	});
	
	    /*-- 
        Screenshot Center Active Slider 
    ------------------------------------*/
    var sliderScreenshotActive = $('.slider-screenshot-active');
    sliderScreenshotActive.slick({
        arrows: false,
        autoplay: true,
        dots: false,
        autoplaySpeed: 2000,
        infinite: true,
        centerMode: true,
        centerPadding: '30px',
        slidesToShow: 3,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1920,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '60px',
                }
            },
			 {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '90px',
                }
            },
			
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    centerPadding: '50px',
                }
            },
            {
              breakpoint: 768,
              settings: {
                centerPadding: '45px',
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '0px',
                slidesToShow: 3
              }
            }
        ]
    });
   
	// 6.EM SLICK SLIDER
	$('.em-slick-testi-description').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		dots: true,
		fade: true,
		asNavFor: '.em-slick-testi-wraper'
	});
	$('.em-slick-testi-wraper').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.em-slick-testi-description',
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true
	});
	// 6.EM HEADROOM MENU
	if ($('.headrooma').length != 0) {
		// grab an element
		var myElement = document.querySelector(".headrooma");
		// construct an instance of Headroom, passing the element
		var headroom = new Headroom(myElement);
		// initialise
		headroom.init();
	}
	// 6.EM WOW ACTIVE JS
	new WOW().init();
	// 6.EM NIVO SLIDER
	$('#mainSlider').nivoSlider({
		directionNav: true,
		animSpeed: 1000,
		slices: 18,
		autoplay: true,
		randomStart: true,
		pauseTime: 800000,
		pauseOnHover: false,
		controlNav: true,
		prevText: '<i class="fa fa-angle-left nivo-prev-icon"></i>',
		nextText: '<i class="fa fa-angle-right nivo-next-icon"></i>'
	});
	// 6.SCROLLUP JS
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	});
	// VenuboX
	$('.venobox').venobox({

		numeratio: true,

		infinigall: true

	});
	// 6.ONEPAGE MENU
	var top_offset = $('.one_page').height() + 0;
	$('.one_page .apple_menu .nav_scroll').onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 1000,
		scrollOffset: top_offset,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
	});

	$(".nav_scroll li:first-child").addClass("current");
	/* sticky nav 1 */
	$('.one_page').scrollToFixed({
		preFixed: function () {
			$(this).find('.scroll_fixed').addClass('prefix');
		},
		postFixed: function () {
			$(this).find('.scroll_fixed').addClass('postfix').removeClass('prefix');
		}
	});

	// 6.EM STIKY NAV
	var headers1 = $('.trp_nav_area');
	$(window).on('scroll', function () {

		if ($(window).scrollTop() > 200) {
			headers1.addClass('hbg2');
		} else {
			headers1.removeClass('hbg2');
		}

	});

	// 6.EM COUNTARUP 
	$('.countr_text h1').counterUp({
		delay: 10,
		time: 1000
	});
	// 6.EM PORTFOLIO
	$('.em_load').imagesLoaded(function () {

		if ($.fn.isotope) {

			var $portfolio = $('.em_load');

			$portfolio.isotope({

				itemSelector: '.grid-item',

				filter: '*',

				resizesContainer: true,

				layoutMode: 'masonry',

				transitionDuration: '0.8s'

			});
			$('.filter_menu li').on('click', function () {

				$('.filter_menu li').removeClass('current_menu_item');

				$(this).addClass('current_menu_item');

				var selector = $(this).attr('data-filter');

				$portfolio.isotope({

					filter: selector,

				});

			});

		};

	});
	// 6.EM BLOG MASONARY
	$('.bgimgload').imagesLoaded(function () {
		if ($.fn.isotope) {
			var $blogmassonary = $('.blog-messonary');
			$blogmassonary.isotope({
				itemSelector: '.grid-item',
				filter: '*',
				resizesContainer: true,
				layoutMode: 'masonry',
				transitionDuration: '0.8s'
			});

		};
	});
	// 6.EM TESTIMONIAL
	$('.testimonial_list').owlCarousel({
		loop: true,
		autoplay: false,
		autoplayTimeout: 10000,
		dots: false,
		nav: false,
		navText: ["<i class='fa fa-long-arrow-left''></i>", "<i class='fa fa-long-arrow-right''></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1000: {
				items: 1
			},
			1920: {
				items: 1
			}
		}
	})
	/* Blog Curousel */
	$('.blog_carousel').owlCarousel({
		dots: true,
		nav: true,
		autoplayTimeout: 10000,
		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			992: {
				items: 3
			},
			1920: {
				items: 3
			}
		}
	})

	/* Brand Curousel */
	$('.brand_carousel').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayTimeout: 4000,
		dots: false,
		nav: false,
		navText: ["<i class='fa fa-long-arrow-left'></i>", "<i class='fa fa-long-arrow-right''></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 4
			},
			992: {
				items: 4
			},
			1920: {
				items: 6
			}
		}
	})
	$('.single_gallery').owlCarousel({
		nav: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1920: {
				items: 1
			}
		}
	})
	$('.portfolio_gallery_post').owlCarousel({
		nav: true,
		dots: false,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		responsive: {
			0: {
				items: 1
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			},
			1920: {
				items: 1
			}
		}
	})
	// Mouse Direction Hover Iffect
	$('.single_protfolio').directionalHover();
	$('.single_protfolio').directionalHover({
		// CSS class for the overlay
		overlay: "em_port_content",
		// Linear or swing
		easing: "swing",
		speed: 50
	});

})(jQuery);

