$ = jQuery;

$("span.menu").click(function(){
	$(" ul.navig").slideToggle("slow" , function(){
	});
});

$(function(){
										 
});
$(window).load(function(){
  $('.flexslider').flexslider({
	animation: "slide",
	start: function(slider){
	  $('body').removeClass('loading');
	}
  });
});

/* Scroll to top */
//Thanks to: http://www.webtipblog.com/adding-scroll-top-button-website/

$(document).ready(function(){

$(function(){
 
    $(document).on( 'scroll', function(){
 
    	if ($(window).scrollTop() > 400) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
 
	$('.scroll-top-wrapper').on('click', scrollToTop);
});
 
function scrollToTop() {
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
	element = $('body');
	offset = element.offset();
	offsetTop = offset.top;
	$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}

});
/* END*/

/* ----------------------------------------------------------- */
/*  Fixed header
/* ----------------------------------------------------------- */
/*
jQuery(function($) {
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > 300 ) {
			$('.header-top').addClass('navbar-fixed');
			$('.header-top').removeClass('init-top');
			$('.navbar-nav').removeClass('links-nav-medio');
			$('.navbar').removeClass('navbar-default');
			$('.navbar').addClass('navbar-verde');
			$('#logo').hide();
			$('#logo75').show();
		} else {
			$('.header-top').removeClass('navbar-fixed');
			$('.header-top').addClass('init-top');
			$('.navbar-nav').addClass('links-nav-medio');
			$('.navbar').addClass('navbar-default');
			$('.navbar').removeClass('navbar-verde');
			$('#logo').show();
			$('#logo75').hide();
		}
	});
});  */

jQuery(function($) {
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > 300 ) {
			$('.header-top').addClass('navbar-fixed');
		} else {
			$('.header-top').removeClass('navbar-fixed');
		}
	});
}); 

/* ----------------------------------------------------------- */
/*  Alto-col
/* ----------------------------------------------------------- */

$(document).ready(function(){
	altoFila();
	$(window).resize(function() {
		altoFila();
	});
});

function altoFila() {
	$('.welcome-row').each(function(){  
        var highestBox = 0;
		var width = $(window).width();
		if (width >= 768) {
			$('.column', this).each(function(){
				if($(this).height() > highestBox) 
				   highestBox = $(this).height(); 
			}); 
			$('.welcome-left',this).css("height", highestBox+"px");
		}
	});    
}

/* ----------------------------------------------------------- */
/*  Smoth Scroll
/* ----------------------------------------------------------- */
/*
  Movido a affix.js
*/
/* ----------------------------------------------------------- */
/*  ./Smoth Scroll
/* ----------------------------------------------------------- */

