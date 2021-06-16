// Theme Core JS 

;(function($){

	// Search Form 
	$('#search_fa_icon').on( 'click', function(){
		$('.search_form').addClass('visible_form');
	});

	$('.dismiss-icon').on( 'click', function(){
		$('.search_form').removeClass('visible_form');
	});

	// Mobile Menu with Sub Menu 
	$('.mobile_menu_bar').on( 'click', function(){
		$(this).toggleClass("change");
		$('.mobile_menu').toggleClass('visible');
	});

	// mobile dropdown menu 
	$('.mobile_menu li.menu-item-has-children').attr( 'data-content', '\f107' ).on( 'click', function(){
		$(this).children('.sub-menu').slideToggle();
	});

	// sticky header 
	$(window).on('scroll', function(){
		if ( window.pageYOffset > 50 ) {
			$('.site_header').addClass('sticky_header');
			$('.back_top').addClass('visible');
		}else {
			$('.site_header').removeClass('sticky_header');
			$('.back_top').removeClass('visible');
		}
	}); 

	// back to top 
	$('.back_top').on( 'click', function(){
		$('html, body').animate({
        scrollTop: 0
      }, 500 );
	});

}(jQuery));