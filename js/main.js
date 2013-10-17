$(document).ready(function(){
	// MENU LAVA
	var lava = $('.lava'),
		offset = 14,
		lavaTimeout = false;

	function fixLava(){
		lava.css({
			'left': $('.menu a.active').offset().left + offset / 2,
			'width': $('.menu a.active').outerWidth() - offset
		}).show();
	}

	fixLava();
	$(window).resize(fixLava);

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

		var link;
		if($(window).scrollTop() >= 620){
			link = $('.menuLink');
			link.addClass('active').siblings().removeClass('active');
		}
		else{
			link = $('.homeLink');
			link.addClass('active').siblings().removeClass('active');
		}

		lava.stop().animate({
			'left': link.offset().left + offset / 2,
			'width': link.outerWidth() - offset
		}).show();
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
	$('.posebna, .kontakt').click(function(){
		$('.posebna, .kontakt').fadeOut();
	});


	// Kontakt
	$('.kontaktLink').click(function(){
		$('.kontakt').fadeIn();
	});
	$('.kontakt .center').click(function(e){
		e.stopPropagation();
	});



	$('#contactForm').on('submit' , function(){
		var email = $("#contactEmail").val(),
			message = $("#contactMessage").val(),
			name = $("#contactName").val();

		if(!(email.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1) || email.length<5){
			$('#contactError').html('Sva polja su obavezna');
			return false;
		}

		if(message.length < 2){
			$('#contactError').html('Sva polja su obavezna');
			return false;
		}

		$('#contactError').html('&nbsp;');
		$('#contactSubmit').html('Loading...').attr('disabled', 'disabled');

		$.ajax({
			url: 'contactMail.php',
			type: 'post',
			data: {
				'email' : email,
				'name' : name,
				'message' : message
			},
			dataType: 'json',
			success: function(response){
				if(response){
					$('#contactError').html('Vaša poruka je poslata, hvala!');
					$("#contactEmail").val('');
					$("#contactMessage").val('');
				}
				else{
					$('#contactError').html('Greška, pokušajte opet');
				}
				$('#contactSubmit').html('Pošalji').attr('disabled', null);
			},
			error: function() {
				$('#contactError').html('Greška, pokušajte opet');
				$('#contactSubmit').html('Pošalji').attr('disabled', null);
			}
		});

		return false;
	});
});