

$(document).ready(function() {
	$('.menu-toggle').click(function(e) {
		e.preventDefault();
		$('.menu').toggleClass('menu-show');
		$('.menu').toggleClass('menu-hide');
	});

	$('.menu .close').click(function() {
		$('.menu').toggleClass('menu-show');
		$('.menu').toggleClass('menu-hide');
	});

});