jQuery(document).ready(function(){


	jQuery('.service-wrap').slick({
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		backDelay: 1000,
		arrows: true,
	});

	jQuery('.menu .close').click(function(){
		jQuery('.menu').slideUp();
	});

	jQuery('header nav ul li:first-of-type').click(function(){
		jQuery('.menu').slideToggle();
	});

	jQuery('.image-wrap').hover(function(){
		jQuery(this).find('.overlay').fadeToggle();
	},function(){
		jQuery(this).find('.overlay').fadeToggle();
	});

	// Header Replacement

	if (jQuery('.pg-title').length) {
		jQuery('.logo').text(jQuery('.pg-title').text());
	}
	if (jQuery('.slogan').length) {
		jQuery('header h2').html(jQuery('.slogan').html());
	}
	if (jQuery('.bg-data').length) {
		var imageUrl = jQuery('.bg-data').attr('src');
		jQuery('.skyline').css('background-image', 'url(' + imageUrl + ')');
		jQuery('header .bottom-content p').css('background-image', 'url(' + imageUrl + ')');
		jQuery('header .bottom').fadeIn();
	}
	if (jQuery('.repeat-bg').length) {
		jQuery('header').css('background-size', 'cover')
	}


	jQuery('.examples').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		arrows: false,
		slide: 'div',
		cssEase: 'linear',
		autoplay: true,
		autoplaySpeed: 2000
	});

	jQuery('.btm-btn').click(function(){ 
		jQuery(this).fadeOut();
		jQuery('.bottom').slideDown();
	});

});