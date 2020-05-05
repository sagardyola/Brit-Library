jQuery(document).ready(function() {
	// define variables
	var navOffset, scrollPos;

	navOffset = jQuery("nav").offset().top;

	// add utility wrapper elements for positioning
	jQuery("nav").wrap('<div class="nav-placeholder"></div>');
	jQuery(".nav-placeholder").height(jQuery("nav").outerHeight());
	jQuery("nav").wrapInner('<div class="nav-inner"></div>');

	// run on scroll event
	jQuery(window).scroll(function() {
		scrollPos = jQuery(window).scrollTop();
		if (scrollPos >= navOffset) {
			jQuery("nav").addClass("fixed");
		} else {
			jQuery("nav").removeClass("fixed");
		}

	});


});