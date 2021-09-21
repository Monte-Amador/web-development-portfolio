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

<?php if (is_front_page() ) : ?>
  <header>
    <section id="hero">
      <?php include('hero-section.php'); ?>
    </section>
  </header>
  <?php include('primary-programs.php'); ?>
  <?php include('secondary-programs.php'); ?>
<?php endif; ?>