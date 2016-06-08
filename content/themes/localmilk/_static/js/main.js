/**
 * Main JS file where all custom JS is done
 */
(function($) {

	$(document).ready( function() {
		$(document).foundation();
		$('.top-bar-right img').click(function() {
			if ($('.search form').hasClass('closed')) {
				$('.search form').removeClass('closed');
			} else {
				$('.search form').addClass('closed');
			};

		});

	}); // document.ready()

})(jQuery);
