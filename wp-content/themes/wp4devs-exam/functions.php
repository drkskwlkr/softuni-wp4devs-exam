<?php

/**
 * I am not enirely sure if I need these, esp. the thumbnail size
 */
add_theme_support( 'post-thumbnails' ) ;

add_image_size( 'property-thumbnail', 105, 120 ) ;

/**
 * Load CSS
 * 
 * @return nothing
 */
function wp4dev_load_css() {
    wp_enqueue_style(
        'wp4devs-exam',
        get_template_directory_uri() . '/css/master.css', array(),
        filemtime(  get_template_directory() . '/css/master.css' ) ) ;
}
add_action( 'wp_enqueue_scripts', 'wp4dev_load_css' ) ;

/**
 * Fixing the menu styling for convenience
 * 
 * Perhaps not the best way to do it but I don't care
 */
function wp4dev_add_custom_styles() {
  $custom_css = '
      /* Add custom styles here */
      #menu-navigation, #menu-navigation-1 {
        list-style-type: none ;
        display: inline-flex ;
        padding-bottom: 24px ;
      }

      #menu-navigation > li, #menu-navigation-1 > li {
        padding-right: 16px ;
      }' ;
  wp_add_inline_style( 'wp4devs-exam', $custom_css ) ;
}
add_action( 'wp_enqueue_scripts', 'wp4dev_add_custom_styles' ) ;

/**
 * Taking care of our custom menus
 *
 * @return void
 */
function softuni_register_nav_menu() {
    register_nav_menus( array(
        // 'header_menu' => __( 'Navigation', 'softuni' ),
        // 'footer_menu' => __( 'Navigation', 'softuni' ),
        'Navigation' => __( 'Navigation', 'softuni' ),
    ) ) ;
}
add_action( 'init', 'softuni_register_nav_menu', 0 ) ;