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
			$('#logo-redondo').hide();
			$('#logo-verde').show();
		} else {
			$('.header-top').removeClass('navbar-fixed');
			$('#logo-redondo').show();
			$('#logo-verde').hide();
		}
	});
}); 

/* ----------------------------------------------------------- */
/*  Ejecutar funciones en ready y en resize
/* ----------------------------------------------------------- */

$(document).ready(function(){
	altoFila();
	cambiarLogo();
	$(window).resize(function() {
		altoFila();
		cambiarLogo();
	});
});

/* ----------------------------------------------------------- */
/*  Alto-col
/* ----------------------------------------------------------- */

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


/* ----------------------------------------------------------- */
/*  ./cambiar por logo pequeño
/* ----------------------------------------------------------- */
function cambiarLogo() {
	var width = $(window).width();
	var url = window.location.href;
	if (width <= 1024) { 
		/* $("#logo-redondo img").attr("src", url +"wp-themes/images/logo_75.png");		 */
		$('#logo-redondo img').attr('src',function(index,attr){
		      return attr.replace('logo_redondo','tucaso_phone');
		});
	}else {
		$('#logo-redondo img').attr('src',function(index,attr){
		      return attr.replace('tucaso_phone','logo_redondo');
		});
	}
}


/* ----------------------------------------------------------------- */
/*  Agregar el botón contactanos (todas las páginas de servicios)
/* ----------------------------------------------------------------- */

var home = window.location.hostname;
var contactosUrl  = "http://"+home+"/tucaso/contactanos"; 

if (home.indexOf('tucaso.cl') >= 0) { 
	contactosUrl = "http://"+home+"/contactanos"; 
}

$('.panel-body section').each(function(index) {
    var $section = $(this);
      var $newBtn = $("<div class='text-right'><a class='btn btn-default' href='"+contactosUrl+"'/'><i class='fa fa-envelope-o'></i>Contáctanos</a></div>");
      $section.append($newBtn);
});