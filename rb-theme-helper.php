<?php
/**
 * Plugin Name:       RB Theme Helper
 * Plugin URI:        https://github.com/BashirRased/wp-plugin-rb-theme-helper
 * Description:       RB Theme Helper is used for theme options.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Tested up to: 6.2
 * Requires PHP: 7.1
 * Author:            Bashir Rased
 * Author URI:        https://bashirrased.com/
 * Text Domain:       rb-theme-helper
 * Domain Path: 	  /languages
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Kirki Customizer
if( class_exists( 'Kirki' ) ) {
	if( file_exists( dirname( __FILE__ ) . '/inc/kirki-customizer.php' ) ) {
		require_once( dirname( __FILE__ ) . '/inc/kirki-customizer.php' );
	}
}