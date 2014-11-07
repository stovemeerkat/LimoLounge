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
	$('#flavors-nextBtn').click(function(){
		changeToStep('#colors');
	});
	$('#colors-nextBtn').click(function(){
		changeToStep('#specials');
	});
	$('#colors-backBtn').click(function(){
		changeToStep('#flavors');
	});
	$('#specials-backBtn').click(function(){
		changeToStep('#colors');
	});
});

var changeToStep = function(selector){
	var selectedPoint = selector + '-point'
	$('.config-step').hide();
	$(selector).show();
	$('.point').css('background-color', 'rgba(255, 255, 255, 0)');
	$(selectedPoint).css('background-color', '#000000');
};
