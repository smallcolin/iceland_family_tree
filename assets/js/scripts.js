!function($){

// Family in Main Menu

	var family = '.fullmenu li:nth-of-type(2)';

	$(family).hoverIntent(function() {
		$(this).children(".sub-menu").slideToggle();
	});

// All drop-down menus on Family page

	var familyListItem = '.cpt-menu li';
	var familyMenu = '.name-list';

	$(familyListItem).hoverIntent(function() {
		$(this).children(familyMenu).slideToggle();
		// Menu doesn't stay open
	});

// Responsive Menu

	$(".menu-icon").click(function() {
		$(".responsive-menu").fadeToggle();
		$(this).children().toggleClass("fa-bars fa-times");
		$(".fa-search").toggle();
		$("#header").toggleClass("brown");
		$("#header a, #header i").toggleClass("white-text");
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
		spaceBetween: 30,
		touch: true
	});

// Gallery modal

	// var picture = '.gallery-list li img';
	var picture = '.another-gallery-container .gallery-image';

	// Enlarge image
	$(picture).click(function() {
		var style = $(this).attr("style");
		let src = style.substring(23, style.length -3);

		$("#modal img").attr("src", src);
		$("#fade").show();
		$("#modal").show();
		$("#modal img").show();
	});

	// Click on Fade
	$("#fade").click(function() {
		$(this).hide();
		$("#modal").hide();
		$("#modal img").hide();
	});

	// Click on Modal
	$("#modal").click(function() {
		$(this).hide();
		$("#fade").hide();
		$("#modal img").hide();
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
