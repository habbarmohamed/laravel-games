/*jslint browser: false*/
/*global $: false */
/*eslint browser: "true"*/
/* =================================
------------------------------------
	Game Warrior Template
	Version: 1.0
 ------------------------------------ 
 ====================================*/



$(window).on('load', function () {
    'use srtict';
	// ------------------
	// 	Preloder
	// --------------------
	$(".loader").fadeOut(); 
	$("#preloder").delay().fadeOut("slow");

});

(function($) {

	/*------------------
		Navigation
	--------------------*/
	$('.nav-switch').on('click', function (event) {
        'use strict';
		$('.main-menu').slideToggle(400);
		event.preventDefault();
	});


	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

    
    // $('nav ul li').click(function () {

    //     $(this).addClass('active').siblings().removeClass('active');
    // });
    

	/*------------------
		Hero Slider
	--------------------*/
	$('.hero-slider').owlCarousel({
		loop: true,
		nav: false,
		dots: true,
		mouseDrag: false,
		animateOut: 'fadeOut',
    	animateIn: 'fadeIn',
		items: 1,
		autoplay: true
	});
	var dot = $('.hero-slider .owl-dot');
	dot.each(function() {
		var index = $(this).index() + 1;
		if (index < 10) {
            $(this).html('0').append(index);
			$(this).append('<span>.</span>');
		} else {
			$(this).html(index);
			$(this).append('<span>.</span>');
		}
	});


	/*------------------
		News Ticker
	--------------------*/
	$('.news-ticker').marquee({
	    duration: 10000,
	    //gap in pixels between the tickers
	    //gap: 200,
	    delayBeforeStart: 0,
	    direction: 'left',
	    duplicated: true
	});


	$('.site-btn').on('click', function () {
       $('html').animate({
           scrollTop: 800
       }, 800);
    });

     $(window).on('scroll', function () {
       if ($('html').scrollTop() > 400) {
           $('.back-to-top').fadeIn();
       } else {
           $('.back-to-top').fadeOut();
       }
    });

    $('.back-to-top').on('click', function () {
       $('html').animate({
           scrollTop: 0
       }, 800);
    }); 

	$(".alert").slideDown(300).delay(5000).slideUp(300);

	
	$('#myTable').DataTable();
})
(jQuery);

