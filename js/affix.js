//Function from Bluthemes, lets you add li elemants to affix object without having to alter and data attributes set out by bootstrap
$ = jQuery;
$(function(){

	// name your elements here
	var stickyElement   = '.panel-affix',   // the element you want to make sticky
		bottomElement   = '#affix-footer'; // the bottom element where you want the sticky element to stop (usually the footer) 

	// make sure the element exists on the page before trying to initalize
	if($( stickyElement ).length){
		$( stickyElement ).each(function(){

			// let's save some messy code in clean variables
			// when should we start affixing? (the amount of pixels to the top from the element)
			var fromTop = $( this ).offset().top, 
				// where is the bottom of the element?
				fromBottom = $( document ).height()-($( this ).offset().top + $( this ).outerHeight()),
				// where should we stop? (the amount of pixels from the top where the bottom element is)
				// also add the outer height mismatch to the height of the element to account for padding and borders
				stopOn = $( document ).height()-( $( bottomElement ).offset().top)+($( this ).outerHeight() - $( this ).height()); 

			// if the element doesn't need to get sticky, then skip it so it won't mess up your layout
			if( (fromBottom-stopOn) > 300 ){
				// let's put a sticky width on the element and assign it to the top
				$( this ).css('width', $( this ).width()).css('top', '').css('position', '');
				// assign the affix to the element
				$( this ).affix({
					offset: { 
						// make it stick where the top pixel of the element is
						top: fromTop - 150,  /* --> Debe ser el mismo valor negativo */
						// make it stop where the top pixel of the bottom element is
						bottom: stopOn + 400
					}
				// when the affix get's called then make sure the position is the default (fixed) and it's at the top
				}).on('affix.bs.affix', function(){ $( this ).css('top', '100px').css('position', ''); }); /* --> Deben ser iguales */
			}
			// trigger the scroll event so it always activates 
			$( window ).trigger('scroll'); 
		}); 
	}

});

//Offset scrollspy height to highlight li elements at good window height
$('body').scrollspy({
	offset: 200  /* --> Debe ser el doble */
});

//Smooth Scrolling For Internal Page Links
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	  var target = $(this.hash);
	  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	  if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top - 200 /* --> Debe ser el mismo valor negativo */
		}, 1000);
		return false;
	  }
	}
  });
});