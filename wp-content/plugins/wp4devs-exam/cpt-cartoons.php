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
function softuni_Toons_cpt() {
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
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Toon' ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
    'show_in_rest'       => true,
    'menu_icon'          => 'dashicons-nametag'
	);

	register_post_type( 'Toon', $args );

    flush_rewrite_rules();
}
add_action( 'init', 'softuni_Toons_cpt' );