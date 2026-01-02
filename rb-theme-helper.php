<?php
/**
 * Plugin Name:       RB Theme Helper
 * Plugin URI:        https://github.com/BashirRased/wp-plugin-rb-theme-helper
 * Description:       Provides common theme options (color, typography, and switch).
 *                    Depends on the Kirki Customizer Framework.
 * Version:           1.0.2
 * Requires at least: 6.6
 * Tested up to:      6.7
 * Requires PHP:      7.4
 * Author:            Bashir Rased
 * Author URI:        https://bashir-rased.com/
 * Text Domain:       rb-theme-helper
 * Domain Path:       /languages
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Load Kirki settings if available.
 *
 * @return void
 */
function rbth_kirki_settings() {
	if ( ! class_exists( 'Kirki' ) ) {
		return;
	}

	$kirki_file = __DIR__ . '/theme-customizer/kirki-customizer.php';

	if ( file_exists( $kirki_file ) ) {
		require_once $kirki_file; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
	}
}
add_action( 'after_setup_theme', 'rbth_kirki_settings', 20 );

// Loading Templates.
$templates_file = __DIR__ . '/theme-customizer/common/templates.php';
if ( file_exists( $templates_file ) ) {
	require_once $templates_file; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
}

// Loading Elements.
$elements_file = __DIR__ . '/theme-customizer/common/elements.php';
if ( file_exists( $elements_file ) ) {
	require_once $elements_file; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
}

// Common Functions.
$functions_file = __DIR__ . '/inc/functions.php';
if ( file_exists( $functions_file ) ) {
	require_once $functions_file; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
}

// Global Variables.
$globals_file = __DIR__ . '/inc/global-variables.php';
if ( file_exists( $globals_file ) ) {
	require_once $globals_file; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
}

// Custom Post Types.
$custom_post_file = __DIR__ . '/inc/custom-posts.php';
if ( file_exists( $custom_post_file ) ) {
	require_once $custom_post_file; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
}
