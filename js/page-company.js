//スライダープラグインの実装
$('.slick-items').slick({
	infinite: true,
	slidesToShow: 3,
	autoplay: true,
	autoplaySpeed: 0,
	speed: 12000,
	pauseOnFocus: true,
	pauseOnHover: true,
	swipe: false,
	arrows: false,
	cssEase: "linear",
	responsive: [
        {
	        breakpoint: 768,
	        settings: {
		        slidesToShow: 2
	        },
	    },
        {
	        breakpoint: 480,
	        settings: {
                slidesToShow: 1,
                speed: 9000,
                autoplay: true,
                arrows: false,
	        },
	    },
    ],
});
