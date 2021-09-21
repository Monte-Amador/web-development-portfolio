<?php
/*
Plugin Name: MSA Slick Slideshow
Plugin URI: http://monteamador.com/slick-slideshow
Description: Slick Slideshow Intgration 
Version: 1.0
Author: Monte Amador
Author URI: http://monteamador.com
*/

// CREATE AND DEFINE PATH TO PLUGIN
// USED TO RETRIEVE PLUGIN SCRIPTS AND STYLES

// TEST IF PLUGIN IS ACTIVE
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
// CHECK FOR ADVANCED-CUSTOM-FIELDS-PRO PLUGIN USING PLUGIN NAME
if ( is_plugin_active( 'msa-slick-slideshow/msa-slick-slideshow.php' ) ) {

  define('MSA_SLICK_SLIDESHOW_PATH', plugin_dir_url(__FILE__));

// ENQUEUE FRONT-END SCRIPTS
  add_action( 'wp_enqueue_scripts', 'msa_slick_slideshow_frontend_scripts' );

  function msa_slick_slideshow_frontend_scripts() {
   
   wp_enqueue_style('msa-slick-slideshow-styles', MSA_SLICK_SLIDESHOW_PATH . 'css/msa-slick-slideshow.css');

   // FOR DEVELOPMENT ONLY, ENQUEUE MINIFIED VERSION FOR PRODUCTION
   wp_enqueue_script('slick-js', MSA_SLICK_SLIDESHOW_PATH . 'js/slick.js', array( 'jquery'));
   wp_enqueue_script('msa-slick-slideshow-scripts', MSA_SLICK_SLIDESHOW_PATH . 'js/slick-slideshow.js', array( 'jquery'));
 }

} // END CONDITIONAL TEST FOR ACTIVE PLUGIN

// Do not delete closing bracket
?>