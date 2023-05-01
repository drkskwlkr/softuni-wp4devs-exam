<li class="property-card">
  <div class="property-primary">
    <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="property-meta">
      <!--span class="meta-location">Ovcha Kupel, Sofia</span-->
      <span class="meta-location">
        <!-- Get page views -->
        <?php
          //$page_views = intval( get_post_meta( $post->ID, 'page_load_counter', true ) ) ;
          $page_views = get_post_meta( $post->ID, 'page_load_counter', true ) ;

          if ( empty ( $page_views ) ) {
            $page_views = 1 ;
          }
        ?>
        <?php echo __( 'Page views: ', 'softuni') . $page_views ; ?>
        <br />
        <!-- Get page likes -->
        <?php
          $page_likes = get_post_meta( $post->ID, 'page_like_counter', true ) ;

          //var_dump($page_likes) ; die() ;

          if ( empty ( $page_likes ) ) {
            $page_likes = 1 ;
          }
        ?>
        <?php echo __( 'Page likes: ', 'softuni' ) . $page_likes ?>
      </span>
      <span class="meta-total-area">      </span>
    </div>
    <div class="property-details">
      <span class="property-price">      </span>
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