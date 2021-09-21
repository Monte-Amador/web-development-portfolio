<?php
/**
 * This snippet checks to make sure the required plugins are active
 * and that the current page is the front page.
 * 
 * 1. Display a gallery of images from the ACF rows OR
 * 2. Display a custom announcement on top of a static image
 * 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BACWTT
 */
?>

<header>
  <!-- Homepage Hero Section Slideshow with Announcements -->
  <section id="hero">
    <?php // ACF Slideshow
      if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) && is_plugin_active( 'msa-slick-slideshow/msa-slick-slideshow.php' ) && is_front_page() ) : ?>
      
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
  </section>
</header>

<?php if (is_front_page() ) : ?>
  <?php include_once('primary-programs.php'); ?>
  <?php include_once('secondary-programs.php'); ?>
<?php endif; ?>