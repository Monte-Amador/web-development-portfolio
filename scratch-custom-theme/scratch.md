lightweight, minimal


<!DOCTYPE HTML>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/4_libraries/fontawesome-all.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/css/bundle.css">
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/slick.js"></script>
  
  <title>Evergreen Educational Advisors - EEA</title>
</head>


<!-- page header and navigation -->
  <header>
    <div id="nav-wrap">
      <h1 class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/dog-training-logo.svg" alt="Dog Training and Dog Bonding"></a>
      </h1>

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

  <header id="masthead" class="site-header">
    <div class="site-branding">
      <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
      else :
        ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
      endif;
      $_s_description = get_bloginfo( 'description', 'display' );
      if ( $_s_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
      <?php endif; ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        )
      );
      ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

  <header id="masthead" class="site-header">
    <div class="site-branding">
      <?php
      the_custom_logo();
      if ( is_front_page() && is_home() ) :
        ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php
      else :
        ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php
      endif;
      $_s_description = get_bloginfo( 'description', 'display' );
      if ( $_s_description || is_customize_preview() ) :
        ?>
        <p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
      <?php endif; ?>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation">
      <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
        )
      );
      ?>
    </nav><!-- #site-navigation -->
  </header><!-- #masthead -->

<!-- working WordPress header -->
<header>
    <div id="nav-wrap">
      <h1 class="logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/dog-training-logo.svg" alt="Dog Training and Dog Bonding"></a>
      </h1>

      <!-- input toggler class -->
      <input type="checkbox" id="nav-toggle" class="nav-toggle">
      <nav>
        <?php 
        wp_nav_menu( array(
          'menu_class'   => "uncheck",
          'container'   => false,
        ) );
        ?>
     
      </nav>

      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
      </label>
    </div>
  </header>