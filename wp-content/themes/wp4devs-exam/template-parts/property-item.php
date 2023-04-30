<li class="property-card">
  <div class="property-primary">
    <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="property-meta">
      <!--span class="meta-location">Ovcha Kupel, Sofia</span-->
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
      </span>
    </div>
    <div class="property-details">
      <span class="property-price">
        <?php
          if( null !== get_post_custom_values( 'Asking Price' )) {
            echo __( 'Asking Price: €', 'softuni' ) . number_format( get_post_custom_values( 'Asking Price' )[0], 2, '.', ',') ;
          } else {
            echo __( 'Asking price not entered', 'softuni' ) ;
          }
        ?>
      </span>
      <span class="property-date">Posted on <?php
          $post_date = strtotime( get_the_date() ) ;
          $current_date = current_time('timestamp') ;
          $delta = floor(($current_date - $post_date) / (60 * 60 * 24)) ;
          echo date( 'd.m.Y', $post_date ) . ' (' . $delta . ' days ago)' ;
        ?>
      </span>
    </div>
  </div>
  <div class="property-image">
    <div class="property-image-box">
      <?php
        if ( has_post_thumbnail() ) {
          the_post_thumbnail();
        } else {
          echo '<img src="' . get_template_directory_uri() . '/images/bedroom.jpg" alt="property image">' ;
        }
      ?>
    </div>
  </div>
</li>