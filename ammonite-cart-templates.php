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
<<<<<<< HEAD
  }

  // The below functions run on plugin load
=======

    // public static function set_up_wc_and_theme_template_overrides( $template, $template_name, $template_path ) {
    //   global $woocommerce;
    //
    //   $_template = $template;
    //
    //   if ( ! $template_path ) $template_path = $woocommerce->template_url;
    //
    //   $plugin_path  = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/woocommerce/';
    //
    //
    //   // Itterate through possible template locations
    //   if ( file_exists( $plugin_path . $template_name ) )
    //     // If the template exists in the plugin, get it from there
    //     $template = $plugin_path . $template_name;
    //
    //   if ( ! $template )
    //     // If the template does not exist in the plugin but exists in the theme, get it from there
    //     $template = locate_template(
    //       array(
    //         $template_path . $template_name,
    //         $template_name
    //       )
    //     );
    //
    //   if ( ! $template )
    //     // If the template does not exist in the plugin or theme, use the WooCommerce default
    //     $template = $_template;
    //
    //   // Return the filtered template
    //   return $template;
  }

  // The below functions run on plugin load
  // add_filter( 'woocommerce_locate_template', array( 'Ammonite_Cart_Templates', 'set_up_wc_and_theme_template_overrides' ), 10, 3 );
>>>>>>> 97914536818634b89be4e5075512d2b9afe420ee
  add_action( 'wp_enqueue_scripts', array( 'Ammonite_Cart_Templates', 'enqueue_styles' ) );
}
