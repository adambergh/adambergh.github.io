$('a[href^="#"]').click(function(e) {
	e.preventDefault();

	$('html, body').animate({
		scrollTop: $($(this).attr('href')).offset().top - parseInt($('.grid:first').css('padding-top'))
	}, 'slow');

});