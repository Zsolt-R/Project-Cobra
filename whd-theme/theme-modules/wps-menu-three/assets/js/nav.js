/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
jQuery(document).ready(function($) { 


	var button = $('.site-nav-m-toggler');
	var mobile_menu = $('#site-navigation-mobile');



	button.on('click', function(event){
		event.preventDefault();
			$(mobile_menu).toggleClass("show");
	});

	$('.site-content').on('click', function(event){
		event.preventDefault();
			if( mobile_menu.hasClass("show") ){
				mobile_menu.removeClass("show");
			}
	});


  
});