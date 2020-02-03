<?php
/**
 * Plugin Name:       Ammonite Cart Templates
 * Description:       Custom WooCommerce cart template theme overrides
 * Version:           1.0.0
 * Author:            Daniel Ellis
 * Author URI:        https://danielellisdevelopment.com/
 */

/*
  Basic Security
*/
if ( ! defined( 'ABSPATH' ) ) {
  die;
}

/*
  Container Class
*/
if ( !class_exists( 'Ammonite_Cart_Templates' ) ) {
  class Ammonite_Cart_Templates {
    public static function enqueue_styles() {
      wp_enqueue_style( 'ammonite-responsive-wc-cart', plugins_url('assets/css/ammonite-responsive-wc-cart.css', __FILE__ ), array(), '1.0.0', 'all' );
    }
  }

  // The below functions run on plugin load
  add_action( 'wp_enqueue_scripts', array( 'Ammonite_Cart_Templates', 'enqueue_styles' ) );
}
