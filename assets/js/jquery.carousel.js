jQuery(document).ready(function($) {

	carouselInstance = $('#carousel-services').touchCarousel({					
		pagingNav: false,
		snapToItems: false,
		itemsPerMove: 1,				
		scrollToLast: false,
		loopItems: true,
		scrollbar: true,
		autoplay: true,
		autoplayDelay: 1500,	
		keyboardNav: true
	}).data('touchCarousel');	

	$("#carousel-partners").touchCarousel({		
		itemsPerPage: 1,	
		scrollbar: true,
		scrollbarAutoHide: true,
		scrollbarTheme: "dark",				
		pagingNav: false,
		snapToItems: false,
		scrollToLast: false,
		useWebkit3d: true,				
		loopItems: true
	});	

	var $width = $(window).width();
	if ($width < 1000) {	
		$('#carousel-services').css('width', 100 - (40/$width*100) + '%');
	}

	$(window).resize(function(){
		var $width = $(window).width();
		if ($width < 1000) {	
			$('#carousel-services').css('width', 100 - (40/$width*100) + '%');	
		} else { 
			$('#carousel-services').css('width', '100%');
		}
	});

});