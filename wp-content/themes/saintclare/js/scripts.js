$(function(){
	//your jQuery here
	$('.fa-arrow-circle-down').on('click', function(){
		$.smoothScroll({
			scrollTarget: ".about"
		});
	});

	$(window).scroll(function(){
		var aboutTop = $('.about').offset().top;
		if ($(window).scrollTop() > aboutTop) {
			$('header').addClass("headerB");
		}
		else {
			$('header').removeClass("headerB");
		}
	})
	$('.mobileNav').on('click', function(){
		$('.menu').slideToggle();
	});
	$('.menu-item').on('click', function(){
		if ($('.menu').css('display') == 'block') {
			$('.menu').slideToggle();
		}
	});
});