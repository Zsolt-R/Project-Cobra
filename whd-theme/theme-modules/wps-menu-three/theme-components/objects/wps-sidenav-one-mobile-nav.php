<?php
/**
 * Child theme main navigation 
 * pluggable function override.
 * Include this file outside theme setup, it needs to be run as fast s possible in order to override the main theme's function
 *
 * @package wpshapers-theme
 */

/**
 * Override main navigation with pluggable function
 * this function override must happen as fast as possible, using it on child theme setup will throw an error
 */
function theme_site_nav() {
  	
		echo '<nav id="site-navigation"'. main_nav_class() .' role="navigation" data-ui-component="site-main-navigation">';

		wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'site-nav__list', 'walker' => new Theme_Menu_Object() ) );
		echo '</nav><!-- #site-navigation -->';	
}

function theme_site_nav_mobile() {

  echo '<nav id="site-navigation-mobile" class="site-nav-m" role="navigation">';

  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'site-nav-m__list', 'depth' => 0 ) );
  
  echo '</nav><!-- #site-navigation -->';
}

/**
 * Mobile sidenav toggle button function
 */
function theme_site_nav_toggle_button(){
    echo  '<button class="site-nav-m-toggler">'.do_shortcode('[wps_ico class="fa fa-bars"]').' Menu</button>';
}