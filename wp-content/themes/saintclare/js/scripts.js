$(function(){
	//your jQuery here
	var $header = $('header');
	var $menu = $('.menu')

	$('.fa-arrow-circle-down').on('click', function(){
		$.smoothScroll({
			scrollTarget: ".about"
		});
	});
	

	$('.mobileNav').on('click', function(){
		$menu.slideToggle();
		checkClass();
	});

	$('.menu-item').on('click', function(){
		if ($menu.css('display') == 'block') {
			$menu.slideToggle();
			$header.removeClass('headerB');
		}
	});

	$(window).scroll(function(){
			var aboutTop = $('.about').offset().top;
			if ($(window).scrollTop() > aboutTop) {
				$header.addClass("headerB");
			}
			else {
				$header.removeClass("headerB");
			}			
	})

	function checkClass(){
		if ($header.hasClass('headerB')){
			return
		}
		else {
			$header.addClass('headerB')
		}
	}
});