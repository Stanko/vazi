$(document).ready(function(){
	// MENU LAVA
	// var lava = $('.lava'),
	// 	offset = 14,
	// 	lavaTimeout = false;

	// function fixLava(){
	// 	lava.css({
	// 		'left': $('.menu a.active').offset().left + offset / 2,
	// 		'width': $('.menu a.active').outerWidth() - offset
	// 	}).show();
	// }

	// fixLava();
	// $(window).resize(fixLava);

	$('.menu span a').hover(function(){
		clearTimeout(lavaTimeout);

		lava.stop().animate({
			'left': $(this).offset().left + offset / 2,
			'width': $(this).outerWidth() - offset
		}).show();

	}, function(){
		lavaTimeout = setTimeout(function(){
			lava.stop().animate({
				'left': $('.menu a.active').offset().left + offset / 2,
				'width': $('.menu a.active').outerWidth() - offset
			}).show()
		}, 300);
	});




	var logoAndMenu = $('.logo, .menu');

	// FIXED MENU
	function fixMenu(){
		if($(window).scrollTop() > 100){
			logoAndMenu.addClass('small');
		}
		else{
			logoAndMenu.removeClass('small');
		}
	}
	$(window).scroll(fixMenu);
	fixMenu();

	var slider = new Slider('.slider'),
		day = new Date().getDay();

	if(day >= 1 && day <= 6){
		slider.goToSlide(day);
	}


	// Posebne
	$('.posebneLink').click(function(){
		$('.posebna').fadeIn();
	});
	$('.posebna').click(function(){
		$('.posebna').fadeOut();
	});
});