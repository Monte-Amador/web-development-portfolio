<?php
/**
 * Primary Program Posts Custom Query
 * @link https://bacwtt.org
 *
 * @package BACWTT
 */

?>
<!-- CREATE CTA POSTCARD SECTIONS -->
  <div class="primary-programs">
    <!-- Create Custom Query -->
    <?php $custom_query = new WP_Query( array(
      'post_type' => 'any', 
      'post__in' => array( 11002, 11000),
      'orderby' => 'ID',
      'order' => 'ASC' 
      ) 
    );
    // Display content from custom query
    while($custom_query->have_posts()) : $custom_query->the_post(); ?>
      <div <?php post_class('post-wrapper'); ?> id="post-<?php the_ID(); ?>">
        <div class="inner-wrapper">
          <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>

          <?php if(has_post_thumbnail()) : ?>
            <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>

          <?php the_excerpt(); ?>
          <div class="cta-button-wrap">
            <a class="cta-button button" href="<?php the_permalink(); ?>" target="_self" role="button"><span>Learn More</span><i class="fl-button-icon fl-button-icon-after fas fa-angle-right" aria-hidden="true"></i></a> 
          </div>
        </div> <!-- end .inner-wrapper -->
      </div> <!-- end .post-wrapper -->
    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the custom query ?>
  </div> <!-- end .primary-programs -->