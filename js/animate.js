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

document.addEventListener("DOMContentLoaded", () => {
	Array.from(document.querySelectorAll('.onInitHidden')).forEach((e) => {
		e.classList.add('hidden');
		e.classList.remove('hidden');
	})
});

const bgLRextendTriggers = document.querySelectorAll('.bgLRextendTrigger'); //アニメーションさせたい要素
window.addEventListener('scroll', () => {
  const scroll = window.scrollY; //スクロール量を取得
  const windowHeight = window.innerHeight; //画面の高さを取得
  bgLRextendTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('bgLRextend'); //is-animatedクラスを加える
    }
  })
});

const bgAppearTriggers = document.querySelectorAll('.bgappearTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  bgLRextendTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('bgappear'); //is-animatedクラスを加える
    }
	})
});

const fadeUpTriggers = document.querySelectorAll('.fadeUpTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  fadeUpTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('fadeUpT'); //is-animatedクラスを加える
    }
	})
});

const bounceInTriggers = document.querySelectorAll('.bounceInTrigger');
window.addEventListener('scroll', () => {
  const scroll = window.scrollY; //スクロール量を取得
  const windowHeight = window.innerHeight; //画面の高さを取得
  bounceInTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('bounceIn'); //is-animatedクラスを加える
    }
  })
});

const bounceInLeftTriggers = document.querySelectorAll('.bounceInLeftTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  bounceInLeftTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('bounceInLeft'); //is-animatedクラスを加える
    }
	})
});

const bounceInRightTriggers = document.querySelectorAll('.bounceInRightTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  bounceInRightTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('bounceInRight'); //is-animatedクラスを加える
    }
	})
});

const bounceInUpTriggers = document.querySelectorAll('.bounceInUpTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  bounceInUpTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('bounceInUp'); //is-animatedクラスを加える
    }
	})
});

const bounceInDownTriggers = document.querySelectorAll('.bounceInDownTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  bounceInDownTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('bounceInDown'); //is-animatedクラスを加える
    }
	})
});

const zoomInTriggers = document.querySelectorAll('.zoomInTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  zoomInTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('zoomIn'); //is-animatedクラスを加える
    }
	})
});
	
const flipInXTriggers = document.querySelectorAll('.flipInXTrigger');
window.addEventListener('scroll', () => {
	const scroll = window.scrollY; //スクロール量を取得
	const windowHeight = window.innerHeight; //画面の高さを取得
  flipInXTriggers.forEach((e) => {
    const targetPos = e.getBoundingClientRect().top + scroll; //ターゲット要素の位置を取得
    if (scroll > targetPos - windowHeight) { //スクロール量 > ターゲット要素の位置
      e.classList.add('flipInX'); //is-animatedクラスを加える
    }
	})
});

