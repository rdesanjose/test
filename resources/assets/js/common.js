function resize() {
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	
	// STICKY FOOTER
	var footerHeight = $('footer').outerHeight();
	var footerTop = (footerHeight) * -1
	$('footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});

	if(windowWidth <= 460) {
		$('.main-nav').addClass('mobile');
		$('.main-nav ul').css('display','none');
	}else{
		$('.main-nav').removeClass('mobile');
		$('.main-nav ul').css('display','flex');
	}
}

$(window).resize(function() {
	resize();
});

$(window).load(function() {
	resize();

	$('[data-fancybox]').fancybox({
		protect: true
	});

	$('.burger-menu').on('click', function() {
		$('.main-nav ul').slideToggle();
	});
});