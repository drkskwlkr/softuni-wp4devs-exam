<?php
/** 
 * Let's register a CPT for cartoon characters
 * We can then vote for them.
 */

 /**
 * Register a custom post type called "Toon".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_toons_cpt() {
	$labels = array(
		'name'                  => _x( 'Toons', 'Post type general name', 'softuni' ),
		'singular_name'         => _x( 'Toon', 'Post type singular name', 'softuni' ),
		'menu_name'             => _x( 'Toons', 'Admin Menu text', 'softuni' ),
		'name_admin_bar'        => _x( 'Toon', 'Add New on Toolbar', 'softuni' ),
		'add_new'               => __( 'Add New', 'softuni' ),
		'add_new_item'          => __( 'Add New Toon', 'softuni' ),
		'new_item'              => __( 'New Toon', 'softuni' ),
		'edit_item'             => __( 'Edit Toon', 'softuni' ),
		'view_item'             => __( 'View Toon', 'softuni' ),
		'all_items'             => __( 'All Toons', 'softuni' ),
	) ;

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'toon' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'thumbnail', 'custom-fields' ),
    'show_in_rest'       => true,
    'menu_icon'          => 'dashicons-nametag'
	) ;

  register_post_type( 'Toon', $args ) ;

  flush_rewrite_rules() ;
}
add_action( 'init', 'softuni_Toons_cpt' ) ;

/**
 * Register a custom taxonomy (race/origin)
 */
function softuni_toons_field_taxonomy() {
  $labels = array(
  'name'              => _x( 'Toon Origin', 'taxonomy general name', 'softuni' ),
  'singular_name'     => _x( 'Toon Origin', 'taxonomy singular name', 'softuni' ),
  'search_items'      => __( 'Search by origin', 'softuni' ),
  'all_items'         => __( 'All origins', 'softuni' ),
  'parent_item'       => __( 'Parent Field', 'softuni' ),
  'parent_item_colon' => __( 'Parent Field:', 'softuni' ),
  'edit_item'         => __( 'Edit Field', 'softuni' ),
  'update_item'       => __( 'Update Field', 'softuni' ),
  'add_new_item'      => __( 'Add New Origin', 'softuni' ),
  'new_item_name'     => __( 'New Origin Name', 'softuni' ),
  'menu_name'         => __( 'Toon Origin', 'softuni' ),
  ) ;

  $args = array(
  'hierarchical'      => false,
  'labels'            => $labels,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
  'show_in_rest'      => true
  ) ;

register_taxonomy( 'origin', 'toon', $args ) ;
}
add_action( 'init', 'softuni_toons_field_taxonomy' ) ;