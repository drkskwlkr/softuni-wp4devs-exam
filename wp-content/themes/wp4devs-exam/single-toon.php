<?php get_header(); ?>

<div class="property-single">
			<main class="property-main">
				<div class="property-card">
					<div class="property-primary">
						<header class="property-header">
							<div class="property-image-box property-image-box-single">
							<?php
								if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else {
									echo '<img src="' . get_template_directory_uri() . '/images/bedroom.jpg" alt="property image">' ;
								}
							?>
							</div>
							<br />
							<h1 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								<div class="property-body">
									<?php the_content() ; ?>
								</div>

								<div class="property-details grid">
									<div class="property-details-card">
										<div class="property-details-card-title">
											<h3><?php echo __('Unique facts about this character', 'softuni') ; ?></h3>
										</div>
										<div class="property-details-card-body">
											<ul>
												<?php
												$specialties = get_post_custom_values('Facts about this character')[0] ;
												//var_dump($specialties) ;

												if ( null == $specialties) {
													echo __('We have no facts about this toon', 'softuni') ;
												} else {
													$list = explode( '|', $specialties) ;
													foreach ($list as $list_item) {
														echo '<li> » ' . esc_html($list_item) . '</li>';
													}
												}
												?>
											</ul>
										</div>
									</div>
									<div class="property-details-card">
										<div class="property-details-card-title">
											<h3>Stats</h3>
										</div>
										<div class="property-details-card-body">
											<!-- Get page views -->
											<?php
												//$page_views = intval( get_post_meta( $post->ID, 'page_load_counter', true ) ) ;
												$page_views = get_post_meta( $post->ID, 'page_load_counter', true ) ;

												if ( empty ( $page_views ) ) {
													$page_views = 1 ;
												}
											?>
											<p>Page views: <?php echo $page_views++ ; ?></p>
											<?php update_post_meta( $post->ID, 'page_load_counter', $page_views ) ; ?>

											<!-- Get page likes -->
											<?php
												$page_likes = intval( get_post_meta( $post->ID, 'page_like_counter', true ) ) ;

												if ( empty ( $page_likes ) ) {
													$page_likes = 1 ;
												}
											?>
											Page likes: <span id="toon-votes"><?php echo $page_likes++ ; ?></span></p>
											<div><a href="#" class="button button-wide"><?php echo __('Like this Toon', 'softuni') ; ?></a></div>
										</div>
									</div>
								</div>
				
						</header>
					</div>
				</div>
			</main>
		</div>

		<h2 class="section-heading"><?php echo __('Other toons:', 'softuni') ; ?></h2>

		<ul class="properties-listing">
		<?php

			$exclude_this = get_the_ID() ;

			$args = array(
					'numberposts' => 2,
					'category'		=> 0,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'		  => array(),
					'post__not_in' => array($post->ID),
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'toon',
					'suppress_filters' => true,
			) ;
			$random_posts = get_posts($args) ;
			
			foreach ($random_posts as $post) :
				setup_postdata($post); ?>

				<?php get_template_part( 'template-parts/property', 'toon' ); ?>

			<?php endforeach ;
			wp_reset_postdata() ; ?>
		</ul>
		
<?php get_footer(); ?>