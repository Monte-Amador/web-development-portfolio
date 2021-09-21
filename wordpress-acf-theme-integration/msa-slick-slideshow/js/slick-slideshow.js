jQuery(function($){
	$(document).ready(function(){
		$('.slick-wrapper').slick({
			// infinite: true,
			speed: 1500,
			lazyLoad: 'progressive',
			prevArrow: false,
			nextArrow: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			pauseOnHover: true,
			fade: true,
			autoplay: true,
			autoplaySpeed: 4000,
		});

	});
});