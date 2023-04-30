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
 * Taking care of our custom menus
 *
 * @return void
 */
function softuni_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu Name', 'softuni' ),
        'footer_menu'  => __( 'Footer Menu', 'softuni' ),
    ) );
}
add_action( 'after_setup_theme', 'softuni_register_nav_menu', 0 );