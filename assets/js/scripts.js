!function($){

// Responsive Menu

	$(".menu-icon").click(function() {
		$(".responsive-menu").fadeToggle("slow", "linear");
		$(this).children().toggleClass("fa-bars fa-times");
		// $("#fade").toggle();
	});

	// $("#fade").click(function() {
	// 	$("#fade").slideUp();
	// 	$(".responsive-menu").slideUp();
	// 	$(".menu-icon").children().toggleClass("fa-bars fa-times");
	// });

// Scroll to top button



// Header Size on Scroll

	$(window).scroll(function() {
		var scroll = $(window).scrollTop();

		if (scroll >= 100) {
			$("#header").addClass("smaller");
		}
		else {
			$("#header").removeClass("smaller");
		}
	});

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

	$(".slide-link").hover(function(){
		$(this).siblings(".slide-image").css('opacity', '0.6');
	}, function() {
		$(this).siblings(".slide-image").css('opacity', '1');
	});



}(jQuery);
