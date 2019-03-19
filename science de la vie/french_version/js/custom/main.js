$(document).ready(function(){
	$('#navigationMenu').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		prevArrow: `<div class="pl-3 pr-3 text-light text-center d-flex flex-column align-self-center">
                        <span class="fas fa-caret-left fa-2x fa-md-3x"></span>
                    </div>`,
		nextArrow: `<div class="pl-3 pr-3 text-light text-center d-flex flex-column align-self-center justify-content-center">
                        <span class="fas fa-caret-right fa-2x fa-md-3x"></span>
                    </div>`,
	});
});

$('.popup-sitemap').magnificPopup({
	type: 'image',
	showCloseBtn: true,
	// other options
});
