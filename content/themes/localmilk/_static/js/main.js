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
		$('a[href*="#"]:not([href="#"])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000);
		        return false;
		      }
		    }
		});
	}); // document.ready()		
})(jQuery);
