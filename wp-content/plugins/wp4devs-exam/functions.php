<?php

/**
 * Enqueue Jquery for Likes button
 */

function wp4dev_toons_scripts() {
  wp_enqueue_script( 'softuni-script', plugins_url( 'assets/scripts/scripts.js', __FILE__ ), array( 'jquery', 1.1 ) ) ;
  wp_localize_script( 'softuni-script', 'my_ajax_object', array ( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) ) ;
}
add_action( 'wp_enqueue_scripts', 'wp4dev_toons_scripts' ) ;

function wp4dev_upvote_toon() {
  $toon_id = esc_attr( $_POST['toon_id']) ;
  $upvotes = get_post_meta( $toon_id, 'page_like_counter', true) ;
  update_post_meta( $toon_id, 'page_like_counter', ++$upvotes ) ;
}
add_action( 'wp_ajax_nopriv_upvote_toon', 'wp4dev_upvote_toon' ) ;
add_action( 'wp_ajax_upvote_toon', 'wp4dev_upvote_toon' ) ;


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
  return 'Your document contains' . $word_count . 'word(s)' ;
}
add_shortcode('word_count', 'wp4dev_word_count_shortcode' );
