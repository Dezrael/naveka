$(document).ready(function(){

	$('.main-banner').slick({
		useTransform: false,
	    slidesToShow: 1,
	    slidesToScroll: 1,
	    dots: true,
	    arrows: false,
	    autoplay: true,
	    autoplaySpeed: 5000,
	    fade: true,
	    cssEase: 'ease-in-out'
	});

	$(".rev-but").magnificPopup();
});