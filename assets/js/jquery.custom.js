jQuery(document).ready(function($) {

	$('ul.menu').superfish();

	$('#contact strong').gradientText({
			colors: ['#548231', '#73b243']
	});
	
	$('#call-modal').click(function(e) {     
		$('#modal').reveal({ 
			animation: 'fade', 
			animationspeed: 200,  
			closeonbackgroundclick: true,
			dismissmodalclass: 'close'
		});
		return false;
	});

});