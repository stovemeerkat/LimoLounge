$(document).ready(function(){
	$('#flavors-point').click(function(){
		changeToStep('#flavors');
	});
	$('#colors-point').click(function(){
		changeToStep('#colors');
	});
	$('#specials-point').click(function(){
		changeToStep('#specials');
	});
});

var changeToStep = function(selector){
	var selectedPoint = selector + '-point'
	$('.config-step').fadeOut('slow');
	$(selector).fadeIn('slow');
	$('.point').css('background-color', '#FFFFFF');
	$(selectedPoint).css('background-color', '#000000');
};
