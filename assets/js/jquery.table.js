jQuery(document).ready(function($) {

	var $width = $(window).width();
	if ($width < 680) {	
		$('#schedule-table').hide();
		$('.hidden').show();
	}

	$(window).resize(function(){
		var $width = $(window).width();
		if ($width < 680) {	
			$('#schedule-table').hide();
			$('.hidden').show();	
		} else { 
			$('#schedule-table').show();
			$('.hidden').hide();	
		}
	});

});