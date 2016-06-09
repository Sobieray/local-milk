/**
 * Main JS file where all custom JS is done
 */
(function($) {

	$(document).ready( function() {
		$(document).foundation();
		$('.top-bar-right img').click(function() {
			if ($('.search form').hasClass('closed')) {
				$('.search form').removeClass('closed');
				setTimeout(function() {
					$('.search input[type=text').focus();
				}, 200);
			} else {
				$('.search form').addClass('closed');
			};

		});

	}); // document.ready()

})(jQuery);
