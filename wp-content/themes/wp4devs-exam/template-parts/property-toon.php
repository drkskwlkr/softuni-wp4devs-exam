<li class="property-card">
  <div class="property-primary">
    <h2 class="property-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="property-meta">
      <!--span class="meta-location">Ovcha Kupel, Sofia</span-->
      <span class="meta-location">
        <?php
          // $specialties = get_post_custom_values('Facts about this character')[0] ;
          // if ( null !== $specialties ) {
          //   $list = explode( '|', $specialties) ;
          //   echo '<ul class="properties-listing">' ;
          //   foreach ($list as $list_item) {
          //     echo '<li class="properties-listing"> ' . esc_html($list_item) . '</li>';
          //   }
          //   echo '</ul>' ;
          // } else {
          //   echo __('We have no facts about this toon', 'softuni') ;
          // }
        ?>
        <?php the_title(); ?> has <span id="likes-counter">333</span> likes so far.
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