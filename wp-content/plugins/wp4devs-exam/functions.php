<?php

/**
 * Enqueue jQuery for Likes button on CPT type 'Toon'
 */

function wp4dev_toons_scripts() {
  wp_enqueue_script( 'jquery' ) ;
  wp_enqueue_script( 'wp4dev-jquery-toons', plugins_url( 'assets/scripts/scripts.js', __FILE__ ), array() ) ;
  wp_localize_script( 'wp4dev-jquery-toons', 'wp4dev_ajax_object', array ( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) ) ;
}
add_action( 'wp_enqueue_scripts', 'wp4dev_toons_scripts' ) ;

function wp4dev_upvote_toon() {
  $post_id = esc_attr( $_POST['post_id']) ;
  $upvotes = get_post_meta( $post_id, 'page_like_counter', true) ;
  if ( empty( $upvotes ) || $upvotes < 1 ) {
    update_post_meta( $post_id, 'page_like_counter', 1 ) ;
  } else {
    update_post_meta( $post_id, 'page_like_counter', $upvotes + 1 ) ;
  }
}
add_action( 'wp_ajax_nopriv_wp4dev_upvote_toon', 'wp4dev_upvote_toon' ) ;
add_action( 'wp_ajax_wp4dev_upvote_toon', 'wp4dev_upvote_toon' ) ;


/**
 * Make shortcode that displays wordcount for given article
 */

 //TODO: Does not work yet :(

 function wp4dev_word_count_shortcode($atts) {
  $atts = shortcode_atts(array(
      'id' => get_the_ID(),
  ), $atts, 'word_count') ;

  $post = get_post( $atts['id'] ) ;
  $content = $post->post_content ;
  
  $word_count = str_word_count( strip_tags($content) ) ;
  return '<div>Your document contains ' . $word_count . 'word(s)</div>' ;
}
add_shortcode('word_count', 'wp4dev_word_count_shortcode' );