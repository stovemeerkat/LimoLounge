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
	$('.config-step').hide();
	$(selector).show();
	$('.point').css('background-color', 'rgba(255, 255, 255, 0)');
	$(selectedPoint).css('background-color', '#000000');
};
