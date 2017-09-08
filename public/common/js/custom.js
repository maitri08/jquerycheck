$(document).ready(function(){
	
	$(this).scrollTop(0);
	
	new WOW().init();
	
	$(".offer_cross").click(function(){
		$(".offer_printshoot").slideUp("slow");
	});
	
	var windowWidth1 = $(window).width();
	if(windowWidth1 <= 767){
		$(".footer_btmInnerLft .footer_headBTM").click(function(){
			$(this).toggleClass("active");
			$(this).siblings(".footer_btmInnerLft ul").slideToggle();
		});
	}
	
	$('.PSPOPUP_bgSliderOutr').slick({
		dots: false,
		fade: true,
		autoplay: false,
		arrows: true,
	});
	
	$('.banner_slideroutr').slick({
		dots: true,
		autoplay: true,
		arrows: false,
	});
	
	/* header menu Start */
	$('.menu_iconlogo').click(function(){
		$('.popup_menu').addClass("headerMenuOpen");
		$('body').addClass('overflow');
	});
	$('.cross_icon').click(function(){
		$('.popup_menu').removeClass("headerMenuOpen");
		$('body').removeClass('overflow');
	});
	
	var windowWidth = $(window).width();
	if(windowWidth >= 768){
		$('.menu > .menuList:first-child').addClass('active');
		$('.menu > .menuList').hover(function(){
		$('.menu > .menuList.active').removeClass('active');
			$(this).toggleClass("active");
		});
	}
	var windowWidth2 = $(window).width();
	if(windowWidth2 <= 767){
		/* $(".menuList:first-child > .menuListLink").addClass("active");
		$(".menuListLink").click(function(){
			$(".menuList > .menuListLink.active").removeClass("active");
			$(this).toggleClass("active");
		}); */
		$(".menuList:first-child > .sub_menu").slideDown();
		$(".menuListLink").click(function(){
			$(this).parent().siblings().find(".sub_menu").slideUp();
			$(this).next().slideToggle();
		});
	}
	/* header menu End */
	
	/* listing popup start */
	
	$('.list_POPUPLink').click(function(){
		$('.listingPopup_contentoutr').addClass("listPopupOpen");
		//$('.listingPOPUPOverLay').addClass("OverlayOpen");
		$('body').addClass('overflow');
	});
	$('.Listingcross_icon').click(function(){
		$('.listingPopup_contentoutr').removeClass("listPopupOpen");
		//$('.listingPOPUPOverLay').removeClass("OverlayOpen");
		$('body').removeClass('overflow');
	});
	
	
	$('.listingPopup_contentoutr').click(function(){
		$('.listingPopup_contentoutr').removeClass("listPopupOpen");
		$('.listingPOPUPOverLay').removeClass("OverlayOpen");
		$('body').removeClass('overflow');
	});
	
	$(".listingPopup_content").click(function( event ) {
		event.stopPropagation();
	});
	
	/* listing popup End */
	
	
	$(".bottm_arrowAnchor").click(function() {
		var headerprojectsecH = $(".banner_sec").outerHeight() + $(".offer_printshoot").outerHeight() - $(".header").outerHeight() + (14);
		$('html,body').animate({scrollTop: headerprojectsecH}, 1500);
	});

	$('.catg_sliderOutr').slick({
		  dots: false,
		  infinite: true,
		  arrows: true,
		  autoplay: false,
		  speed: 300,
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  responsive: [
			{
			  breakpoint: 1599,
			  settings: {
				slidesToShow: 4,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			  }
			},
			{
			  breakpoint: 1199,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 1,
				infinite: true,
				dots: false
			  }
			},
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
	});
	
	$('.see_listContnt li:first-child').addClass('active');
	$('.see_listContnt li').click(function(){
		$('.see_listContnt li.active').removeClass('active');
		$(this).addClass('active');
	});
	
    $(".photo_framsList:first").show();
	$(".see_listContnt li a").click(function(){
        $(".photo_framsList").hide();
		var id = $(this).data("id");
		$("#"+id).show();
    });
	
	$('.PUPL_contentbtm ul li:first-child').addClass('active');
	$('.PUPL_contentbtm ul li').click(function(){
		$('.PUPL_contentbtm ul li.active').removeClass('active');
		$(this).addClass('active');
	});
	
    $(".PUPL_contentbtmcontnt:first").show();
	$(".PUPL_contentbtm ul li a").click(function(){
        $(".PUPL_contentbtmcontnt").hide();
		var id = $(this).data("id");
		$("#"+id).show();
    });
	
});
$(window).scroll(function(){
	if($(this).scrollTop() >= 50){
		$('.header').addClass('fixed');
	}
	else{
		$('.header').removeClass('fixed');
	}
}); 
$(window).scroll(function(){
	if($(this).scrollTop() >= 100){
		$('.chat_icon').addClass('chat_iconFixed');
	}
	else{
		$('.chat_icon').removeClass('chat_iconFixed');
	}
}); 