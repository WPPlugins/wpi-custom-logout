<?php
/**
 * Plugin Name: WPi Custom Logout
 * Plugin URI:  http://wooprali.prali.in/plugins/wpi-custom-logout
 * Description: This plugin in used for custom logout page redirection to home page
 * Version: 1.0.0
 * Author: wooprali
 * Author URI: http://wooprali.prali.in
 * Text Domain: wooprali
 * Domain Path: /locale/
 * Network: true
 * License: GPL2
 */
defined('ABSPATH') or die("No script kiddies please!");
add_action('wp_logout','go_home');
function go_home(){
  wp_redirect( home_url() );
  exit();
}
?>