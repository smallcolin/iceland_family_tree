!function($){

// Responsive Menu

	$(".menu-icon").click(function() {
		$(".responsive-menu").toggle();
		$(this).children().toggleClass("fa-bars fa-times");
		$("#fade").toggle();
	});

	$("#fade").click(function() {
		$("#fade").slideUp();
		$(".responsive-menu").slideUp();
		$(".menu-icon").children().toggleClass("fa-bars fa-times");
	});

// Scroll to top button



}(jQuery);