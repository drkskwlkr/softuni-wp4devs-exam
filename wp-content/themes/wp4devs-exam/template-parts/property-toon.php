<li class="property-card">
  <div class="property-primary">
    <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="property-meta">

      <span class="meta-location">
        <?php
          $page_views = get_post_meta( $post->ID, 'page_load_counter', true ) ;
          if ( empty ( $page_views ) ) {
            $page_views = 1 ;
          }
        ?>

        <?php the_title(); ?> has <strong><?php echo $page_views ; ?></strong> page views and <strong><span id="likes-counter">333</span></strong> likes so far.
      </span>
      <span class="meta-total-area">
      </span>
    </div>
    <div class="property-details">
      <span class="property-price">      </span>
      <span class="property-date">      </span>
    </div>
  </div>
  <div class="property-image">
    <div class="property-image-box">
      <?php
        if ( has_post_thumbnail() ) { ?>
          <a href="<?php the_permalink() ; ?>">
          <?php echo the_post_thumbnail() ;
        } else {
          echo '<img src="' . get_template_directory_uri() . '/images/bedroom.jpg" alt="property image">' ;
        }
      ?>
    </div>
  </div>
</li>