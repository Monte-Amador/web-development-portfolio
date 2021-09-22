<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead">
    <div id="nav-wrap">
    	<?php 
    	if ( has_custom_logo() ) :
    		$image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
    		?>
    		<h1 class="logo">
    			<a href="/"><img src="<?php echo $image[0]; ?>" alt="Dog Training and Dog Bonding"></a>
    		</h1>
    		<?php 
    	else:
    		?>
    		<h1 class="logo">
    			<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/dog-training-logo.svg" alt="Dog Training and Dog Bonding"></a>
    		</h1>
    		<?php
    	endif;
    	?>
      

      <!-- input toggler class -->
      <input type="checkbox" id="nav-toggle" class="nav-toggle">
      <nav>
        <ul class="uncheck">
          <li><a href="#">Home</a></li>
          <li><a href="#team">The Team</a></li>
          <li><a href="#how-we-work">How We Work</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#" class="nav-button" onclick="openForm()">Contact</a></li>
        </ul>
      </nav>

      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
      </label>
    </div>
  </header>
