<?php get_header(); ?>

		<div class="property-single">
			<main class="property-main">
				<div class="property-card">
					<div class="property-primary">
						<header class="property-header">
							<!--h2 class="property-title"><a href="#">Two-bedroom apartment</a></h2-->
							<h1 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<div class="property-meta">
								<span class="meta-location">
									<?php
										if( null !== get_post_custom_values( 'Location' )) {
											echo get_post_custom_values( 'Location' )[0] ;
										} else {
											echo __( 'Location not entered', 'softuni' ) ;
										}
									?>
								</span>
								<span class="meta-total-area">
									<?php
										if( null !== get_post_custom_values( 'Total Area' )) {
											echo __( 'Total area: ', 'softuni' ) . get_post_custom_values( 'Total Area' )[0] . ' sq.m' ;
										} else {
											echo __( 'Total area not entered', 'softuni' ) ;
										}
									?>
								</span><br>
								<span class="meta-price">
									<?php
										if( null !== get_post_custom_values( 'Asking Price' )) {
											echo __( 'Asking Price: ', 'softuni' ) . '€' . number_format( get_post_custom_values( 'Asking Price' )[0], 2, '.', ',') ;
										} else {
											echo __( 'Asking price not entered', 'softuni' ) ;
										}
									?>
								</span>
							</div>

							<div class="property-details grid">
								<div class="property-details-card">
									<div class="property-details-card-title">
										<h3>Rooms</h3>
									</div>
									<div class="property-details-card-body">
										<ul>
											<li>2 Bedrooms</li>
											<li>1 Bathroom</li>
											<li>1 Living room</li>
											<li>Separated kitchen</li>
										</ul>
									</div>
								</div>
								<div class="property-details-card">
									<div class="property-details-card-title">
										<h3>Additional Details</h3>
									</div>
									<div class="property-details-card-body">
										<ul>
											<li>Floor: 6</li>
											<li>Elevator/Lift</li>
											<li>Brick-built</li>
											<li>Electricity</li>
											<li>Water Supply</li>
											<li>Heating</li>
										</ul>
									</div>
								</div>
							</div>
				
						</header>

						<div class="property-body">
							<p>Real estate agency "New Home" presents you a two-room apartment in a newly built building in Ovcha Kupel. With quick access to the Ring Road, close to public transport stops, shops and restaurants, a kindergarten.</p>
							<p>The apartment has an entrance hall, living room with kitchenette, bedroom, bathroom with toilet, terrace.</p>
							<p>The exposure is east/north.<br>There is an opportunity to purchase a garage in the building.</p>
							<p>The building will be completed with luxury common areas, staircases and a lobby. Commercial areas include a restaurant, gym, a beauty salon, a shop, and a pharmacy.</p>
						</div>
					</div>
				</div>
			</main>
			<aside class="property-secondary">
				<div class="property-image property-image-single">
					<div class="property-image-box property-image-box-single">
						<?php
        		if ( has_post_thumbnail() ) {
          		the_post_thumbnail();
        		} else {
          		echo '<img src="' . get_template_directory_uri() . '/images/bedroom.jpg" alt="property image">' ;
        		}
      			?>


						<!--img src="images/bedroom.jpg" alt="property image"-->
					</div>
				</div>
				<?php // TODO: Add Likes Counter ?>
				<a href="#" class="button button-wide">Like the property</a>
			</aside>
		</div>

		<h2 class="section-heading">Other similar properties:</h2>
		<ul class="properties-listing">
			<li class="property-card">
				<div class="property-primary">
					<h2 class="property-title"><a href="#">Two-bedroom apartment</a></h2>
					<div class="property-meta">
						<span class="meta-location">Ovcha Kupel, Sofia</span>
						<span class="meta-total-area">Total area: 99.50 sq.m</span>
					</div>
					<div class="property-details">
						<span class="property-price">€ 100,815</span>
						<span class="property-date">Posted 14 days ago</span>
					</div>
				</div>
				<div class="property-image">
					<div class="property-image-box">
						<img src="images/bedroom.jpg" alt="property image">
					</div>
				</div>
			</li>

			<li class="property-card">
				<div class="property-primary">
					<h2 class="property-title"><a href="#">Two-bedroom apartment</a></h2>
					<div class="property-meta">
						<span class="meta-location">Ovcha Kupel, Sofia</span>
						<span class="meta-total-area">Total area: 91.65 sq.m</span>
					</div>
					<div class="property-details">
						<span class="property-price">€ 100,815</span>
						<span class="property-date">Posted 14 days ago</span>
					</div>
				</div>
				<div class="property-image">
					<div class="property-image-box">
						<img src="images/bedroom.jpg" alt="property image">
					</div>
				</div>
			</li>
		</ul>
		
<?php get_footer(); ?>