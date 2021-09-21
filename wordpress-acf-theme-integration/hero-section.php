<?php // ACF Slideshow
  if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) && is_plugin_active( 'msa-slick-slideshow/msa-slick-slideshow.php' )) : ?>
  
    <?php $images = get_field('slideshow_images'); ?>

    <!-- Display Slideshow if not displaying custom announcements -->
    <?php if ( $images && ! have_rows('announcements') ) : ?>
      <div class="slick-wrapper" style="position: relative;">
        <?php foreach( $images as $image ): ?>
          <div class="slide-image">
            <img data-lazy="<?php echo $image['url']; ?>">
          </div>
        <?php endforeach; ?>
      </div>

    <!-- if custom announcements are being displayed on top of the slideshow, use a static background image that refreshes randomly to display instead of an image slideshow -->

    <?php else: ?>
      <?php 
        if ( have_rows('announcements') ) : ?>
          <?php include_once('announcements.php'); ?>
        <?php endif; ?>
    <?php endif; // end $images conditional ?>
<?php else: ?>
    <?php if(has_post_thumbnail()) { the_post_thumbnail(); }?>
<?php endif; // end conditional for plugins and homepage ?>