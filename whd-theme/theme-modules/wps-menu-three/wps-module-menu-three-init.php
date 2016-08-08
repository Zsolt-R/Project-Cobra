<?php
/**
 *	WPS-nav-module
 *
 */

//Define module location.
define('MODULE_LOCATION',get_stylesheet_directory() . '/theme-modules/wps-menu-three');
define('MODULE_LOCATION_URI',get_stylesheet_directory_uri() . '/theme-modules/wps-menu-three');


// Deregister parent main navigation script.
add_action( 'wp_enqueue_scripts', 'remove_theme_scripts', 100 );
function remove_theme_scripts() {
    // Deregister Parent theme Script.
   wp_dequeue_script('main_menu_core');  
}

// Add child Scripts.
add_action( 'wp_enqueue_scripts', 'add_module_mthree_scripts', 20 );

function add_module_mthree_scripts() {

  /* Slideout mobile navigation. - sidenav_one component */    
  wp_enqueue_script('site_nav_js', MODULE_LOCATION_URI.'/assets/js/min/nav.min.js', array(), '1.1.2', true );

}



/* Mobile Navigation and toggle button - sidenav_one component */
require MODULE_LOCATION.'/theme-components/objects/wps-sidenav-one-mobile-nav.php';

// Child theme frontent class filter functions.
require MODULE_LOCATION.'/inc/settings/child-front-layout-setup.php';


/* Setup Module */
add_action( 'after_setup_theme', 'module_mo_setup', 11);

/**
 * Module setup function
 */
function module_mo_setup() {

  /**  
   * Add settings
   */


  // Add secondary navigation
  remove_action( 'layout_header__body', 'theme_site_navigation',10 );

  add_action( 'layout_header__body', 'theme_site_nav',10);

  /**
   * Add  frontend class filters
   */
  // Add secondary navigation
  add_action( 'theme_header', 'theme_site_nav_mobile',10 );

  /* add toggle button - sidenav_one component */
  add_action('layout_header__body','theme_site_nav_toggle_button',11);

  /* Header Layout Adjust */
  add_filter( 'header_layout_right_class', 'adjust_layout_header_right' );
  add_filter( 'header_layout_left_class', 'adjust_layout_header_left' );

}