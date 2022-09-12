// rellax
if ($(window).width() > 767) {
	var rellax = new Rellax('.rellax');
}

// values slider
var values_slider = new Swiper ('.values-slider', {
    slidesPerView: 1.2,
    effect: 'slide',
    loop: true,
    simulateTouch: true,
    spaceBetween: 15,
    autoplay: {
        delay: 5000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
    },
    autoHeight: true,
    calculateHeight: true,
    slideToClickedSlide: true,
    pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true,
	},
    breakpoints: {
        575: {
            slidesPerView: 1.5,
            spaceBetween: 15,
        }, 767: {
            slidesPerView: 2,
            spaceBetween: 20,
        }, 1200: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    }
});