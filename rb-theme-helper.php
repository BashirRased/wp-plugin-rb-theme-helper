<?php
/**
 * Plugin Name:       RB Theme Helper
 * Plugin URI:        https://github.com/BashirRased/wp-plugin-rb-theme-helper
 * Description:       RB Theme Helper is used for common theme options. This plugin add generate 3 common options color, typography & switch. It depends on the plugin Kirki Customizer Framework.
 * Version:           1.0.1
 * Requires at least: 6.6
 * Tested up to: 6.7
 * Requires PHP: 7.4
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