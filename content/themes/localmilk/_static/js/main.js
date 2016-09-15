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
		if (!$('body').hasClass('single-post')) {
			$('a[href*="#"]:not([href="#"])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html, body').animate({
			          scrollTop: target.offset().top - 50
			        }, 1000);
			        return false;
			      }
			    }
			});
		}
		$('.comment-body').addClass('group');
		$('.menu-icon').click(function() {
			if ($('.mobile-menu-logo').hasClass('show')) {
				$('.mobile-menu-logo').removeClass('show');
			}else {
				$('.mobile-menu-logo').addClass('show');
			}
		});

	}); // document.ready()		
})(jQuery);
