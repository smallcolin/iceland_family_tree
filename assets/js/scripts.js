!function($){

// Family Menu

	// Screen sub menu
	// $(".fullmenu li:nth-of-type(2)").hover(function(){
	// 	$(this).children(".sub-menu").slideToggle();
	// });
	//
	// Responsive sub menu
	// $(".responsive-menu li:nth-of-type(2)").click(function(){
	// 	$(".sub-menu").slideToggle();
	// });

// Responsive Menu

	$(".menu-icon").click(function() {
		$(".responsive-menu").fadeToggle();
		$(this).children().toggleClass("fa-bars fa-times");
	});

// Scroll to top button

	// When clicked the user is taken back to the top of the page
	var scrollButton = function() {
		var _scroll = $(window).scrollTop();

		if ( _scroll > 270 ) {
			$('.top-button').show();
		}
		else {
			$('.top-button').hide();
		}
	};

	scrollButton();
	$(window).scroll(scrollButton);

	$(".top-button").click(function() {
		$('html, body').animate({
			scrollTop: 0
		}, 1200);
	});


// Header Size on Scroll

	if ($(window).width() >= 992) {
		$(window).scroll(function() {
			var scroll = $(window).scrollTop();

			if (scroll >= 100) {
				$("#header").addClass("smaller");
			}
			else {
				$("#header").removeClass("smaller");
			}
		});
	}

// Swiper slideshow

	var mySwiper = new Swiper('.swiper-container', {
		pagination: '.swiper-pagination',
		paginationClickable: true,
		paginationType: 'progress',
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		grabCursor: true,
		loop: true,
		spaceBetween: 30
		// effect: 'fade'
	});

	// Retain image opacity on image/link hover

	$(".slide-link").hover(function() {
		$(this).siblings(".slide-image").css('opacity', '0.6');
	}, function() {
		$(this).siblings(".slide-image").css('opacity', '1');
	});

	// Search form

	$(".fa-search").click(function() {
		$(".search-icon").children().toggleClass("fa-search fa-ellipsis-h");
		$(".searchform").slideToggle();
		$("#search-input").focus();
	});

	// All Country taxonomy button
	//
	// $("#allCountries").click(function() {
	// 	console.log('show all countries here');
	// 	$.ajax({
	//
	// 	});
	// });


}(jQuery);
