<?php get_header(); ?>

<h1>404 — <?php echo _x('You lost or something?', '404 Page Title', 'softuni') ; ?></h1>

<div><?php echo __('Perhaps try the search tool?', 'softuni') ; ?></div>
<div><?php echo get_search_form() ; ?></div>
	
<?php get_footer(); ?>