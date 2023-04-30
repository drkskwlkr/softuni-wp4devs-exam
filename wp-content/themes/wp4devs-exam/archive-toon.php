<?php get_header(); ?>

<h1><?php the_archive_title(); ?></h1>

	<ul class="properties-listing">
	<?php if ( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/property', 'toon' ); ?>
		<?php endwhile; ?>
			<?php posts_nav_link(); ?>
		<?php endif; ?>
	</ul>
	
<?php get_footer(); ?>