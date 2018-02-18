jQuery(document).ready(function() {
	jQuery('ul.main-menu').superfish();
	jQuery(function() {
		// Dropdown toggle
		jQuery('.togglebar').click(function(){
		  jQuery('.responsive-menu').toggle();
		});
		jQuery(document).click(function(e) {
		  var target = e.target;
		  if (!jQuery(target).is('.togglebar') && !jQuery(target).parents().is('.togglebar')) {
		    jQuery('.responsive-menu').hide();
		  }
		});
	});
	jQuery(window).scroll(function () {
		if ( jQuery(window).width() < 768 ){
			jQuery('header').addClass('fixed-header')
			jQuery('#slideshow').css('padding-top','80px')
		}
		else{
			if( jQuery(window).scrollTop() >= 251 ){
				jQuery('#logo-fixed').css('display','block');	
				jQuery('.header-menu').addClass('fixed-header');
			}
			else if ( (jQuery(window).scrollTop() <= 250) ){
				jQuery('#logo-fixed').css('display','none');	
				jQuery('.header-menu').removeClass('fixed-header');
			}
		}
	});
});