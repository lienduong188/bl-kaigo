// JavaScript Document

//hamburger menu
$(".openbtn").click(function () {
  $(this).toggleClass('active');
    $("#g-nav").toggleClass('panelactive');
    $(".circle-bg").toggleClass('circleactive');
});

$("#g-nav a").click(function () {
    $(".openbtn").removeClass('active');
    $("#g-nav").removeClass('panelactive');
    $(".circle-bg").removeClass('circleactive');
});

//smooth scroll
$(function(){
  $('a[href^="#"]').click(function(){
    let speed = 500;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});	

//fixed button
$(function () {
	//スクロールで表示非表示を切り替えるため、デフォルト表示設定として、対象HTMLのクラスに'.hidden'をつけて'display: none;'を効かせておく。
	$(window).scroll(function () {
		//上の余白は1000pxを超えていれば、ふわっと表示。
		if ($(this).scrollTop() < 1000) {
			if ($('.fx').hasClass('hidden') == false){
			let ElementPageTop = $('.fx');
			ElementPageTop.addClass('visuallyhidden');
			setTimeout(function () {
				ElementPageTop.addClass('hidden');
			}, 400);	
		}
		//上の余白が1000pxなければ非表示に変更。
		} else {
			if ($('.fx').hasClass('hidden') == true){
				let ElementPageTop = $('.fx');
				ElementPageTop.addClass('fixed');
				ElementPageTop.addClass('visuallyhidden');
				ElementPageTop.removeClass('hidden');
				setTimeout(function () {
					$('.fx').removeClass('visuallyhidden');
				}, 20);
			}
		}
	});
});

//animation
function Animate(){
	$('.bgLRextendTrigger').each(function(){
		let elemPos = $(this).offset().top+100;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('bgLRextend');
		}else{
			$(this).removeClass('bgLRextend');
		}
	});	

	$('.bgappearTrigger').each(function(){
		let elemPos = $(this).offset().top+100;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
			$(this).addClass('bgappear');
		}else{
			$(this).removeClass('bgappear');
		}
	});	
	
	$('.fadeUpTrigger').each(function(){
		let elemPos = $(this).offset().top+100;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('fadeUp');
		}else{
		$(this).removeClass('fadeUp');
		}
	});
	
	$('.bounceInLeftTrigger').each(function(){
		let elemPos = $(this).offset().top+150;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('bounceInLeft');
		}else{
		$(this).removeClass('bounceInLeft');
		}
	});
	
	$('.zoomInTrigger').each(function(){
		let elemPos = $(this).offset().top+150;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('zoomIn');
		}else{
		$(this).removeClass('zoomIn');
		}
	});	
	$('.bounceInTrigger').each(function(){
		let elemPos = $(this).offset().top+50;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('bounceIn');
		}else{
		$(this).removeClass('bounceIn');
		}
	});	
	$('.bounceInRightTrigger').each(function(){
		let elemPos = $(this).offset().top+50;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('bounceInRight');
		}else{
		$(this).removeClass('bounceInRight');
		}
	});	
	
	$('.bounceInDownTrigger').each(function(){
		let elemPos = $(this).offset().top+50;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('bounceInDown');
		}else{
		$(this).removeClass('bounceInDown');
		}
	});	

	$('.bounceInUpTrigger').each(function(){
		let elemPos = $(this).offset().top-50;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('bounceInUp');
		}else{
		$(this).removeClass('bounceInUp');
		}
	});	
	
	$('.flipInXTrigger').each(function(){
		let elemPos = $(this).offset().top-50;
		let scroll = $(window).scrollTop();
		let windowHeight = $(window).height();
		if (scroll >= elemPos - windowHeight){
		$(this).addClass('flipInX');
		}else{
		$(this).removeClass('flipInX');
		}
	});

}
$(window).scroll(function (){
	Animate();
});
	
$(window).on('load', function(){
	Animate();
});

