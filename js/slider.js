function Slider(selector){
	this.el = $(selector);
	this.maxTransitionTime = 650;

	this.slides = this.el.find('> div');
	this.slideCount = this.slides.length;
	this.active = 1;

	if(!this.supportTransitions()){
		this.maxTransitionTime = 0;
	}

	this.bindings();
}

Slider.prototype.bindings = function() {
	var $this = this;
	$('.prev').click(function(){ $this.previousSlide(); });
	$('.next').click(function(){ $this.nextSlide(); });
	$('.goto').click(function(){ $this.goToSlide($(this).data('index')); $(window).scrollTop(760) });
};


Slider.prototype.supportTransitions = function(first_argument) {
	var transition = document.body.style.transition || document.documentElement.style.transition;
	if(typeof transition == 'string') {
		return true;
	}
	return false;
};

Slider.prototype.goToSlide = function(slideIndex) {
	if(slideIndex == this.active){
		return;
	}

	if(this.el.data('animating') == 1){
		return;
	}

	var $this = this,
		oldIndex = this.active-1;

	this.el.data('animating', 1);

	this.slides.eq(oldIndex).addClass('out2');
	this.slides.eq(slideIndex-1).addClass('out').removeClass('noTransition').removeClass('out');

	$('.goto').removeClass('active').eq(slideIndex-1).addClass('active');

	$('.smuti').removeClass('smuti1 smuti2 smuti3 smuti4 smuti5 smuti6').addClass('smuti'+slideIndex);
	$('.kasice').removeClass('kasice1 kasice2 kasice3 kasice4 kasice5 kasice6').addClass('kasice'+slideIndex);

	setTimeout(function(){
		$this.slides.eq(oldIndex).addClass('noTransition').addClass('out').removeClass('out2');
		$this.el.data('animating', 0);
	}, $this.maxTransitionTime);

	this.active = slideIndex;
};

Slider.prototype.previousSlide = function() {
	var slideIndex;

	if(this.active === 1){
		slideIndex = this.slideCount;
	}
	else{
		slideIndex = this.active - 1;
	}
	this.goToSlide(slideIndex);
};

Slider.prototype.nextSlide = function() {
	var slideIndex;
	if(this.active === this.slideCount){
		slideIndex = 1;
	}
	else{
		slideIndex = this.active + 1;
	}

	this.goToSlide(slideIndex);
};