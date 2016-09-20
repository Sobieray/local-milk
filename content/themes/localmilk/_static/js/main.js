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
		// init Isotope
		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			percentPosition: true,
		  	masonry: {
		    	// use element for option
		    	columnWidth: '.grid-sizer'
		  	}
		  // options
		});
		// filter items on button click
		$('.filter-button-group').on( 'click', 'button', function() {
		  var filterValue = $(this).attr('data-filter');
		  $grid.isotope({ filter: filterValue });
		  $(this).addClass('active');
		  if ($('.filter-button-group button').hasClass('active')) {
		  	$(this).removeClass('active');
		  }
		});


	}); // document.ready()		
})(jQuery);
