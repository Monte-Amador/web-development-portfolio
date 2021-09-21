<?php
/**
 *  ACF Announcements Rows
 * @link https://bacwtt.org
 *
 * @package BACWTT
 */

?>
<?php $rand = array_rand($gallery, 1); ?>
<div id=flex-container style="background:url(<?php echo $gallery[$rand]['url']; ?>);">
      <div id="announcement-wrapper">
        <?php while ( have_rows('announcements') ) : the_row() ; ?>

          <div class="announcement-block" class="<?php the_sub_field('display_length'); ?>000">

            <!-- TITLE -->
            <h5 class="announcement-title">
              <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('title'); ?></a>
            </h5>
            
            <!-- LINK IMAGE-->
            <a href="<?php the_sub_field('link'); ?>" class="announcement-image-link">
              <img src="<?php the_sub_field('image'); ?>">
            </a>
            <!-- INTRODUCTORY TEXT -->
            <p class="announcement-excerpt"><?php the_sub_field('text'); ?></p>

            <!-- READ MORE LINK -->
            <a href="<?php the_sub_field('link'); ?>" class="read-more"><?php the_sub_field('link_text'); ?> 
            <span class="uabb-next-right-arrow">
              <i class="fl-button-icon fl-button-icon-after fas fa-angle-right" aria-hidden="true"></i>
            </span>
          </a>
        </div>
      <?php endwhile; ?>
      </div>
  </div>