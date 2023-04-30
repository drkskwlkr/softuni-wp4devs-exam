<?php get_header(); ?>

<h1><?php echo __( 'Author page for ', 'softuni' ) . get_the_author_meta( 'user_firstname' ) . ' ' . get_the_author_meta( 'user_lastname' ) ; ?></h1>

<div class="box"><?php
	$avatar = get_avatar_url( get_the_author_meta( 'user_email' ) ) ;
	echo '<img src="' . $avatar . '" />' ;
	$description = get_the_author_meta( 'description' ) ;
	echo '<p>' . $description . '</p>' ;
?></div><br />
	
	<ul class="properties-listing">
	<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/property', 'item' ); ?>
		<?php endwhile; ?>
			<?php posts_nav_link(); ?>
		<?php endif; ?>
	</ul>
	
<?php get_footer(); ?>