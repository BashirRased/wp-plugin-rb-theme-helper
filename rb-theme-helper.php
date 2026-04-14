<?php
/**
 * Plugin Name:       RB Theme Helper
 * Plugin URI:        https://github.com/BashirRased/wp-plugin-rb-theme-helper
 * Description:       Provides common theme options (color, typography, and switch).
 *                    Depends on the Kirki Customizer Framework.
 * Version:           1.0.2
 * Requires at least: 6.7
 * Tested up to:      6.9
 * Requires PHP:      8.1
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
		require_once $kirki_file;
	}
}
add_action( 'after_setup_theme', 'rbth_kirki_settings', 20 );

// Loading Templates.
$rbth_templates_file = __DIR__ . '/theme-customizer/common/templates.php';
if ( file_exists( $rbth_templates_file ) ) {
	require_once $rbth_templates_file;
}

// Loading Elements.
$rbth_elements_file = __DIR__ . '/theme-customizer/common/elements.php';
if ( file_exists( $rbth_elements_file ) ) {
	require_once $rbth_elements_file;
}

// Common Functions.
$rbth_functions_file = __DIR__ . '/inc/functions.php';
if ( file_exists( $rbth_functions_file ) ) {
	require_once $rbth_functions_file;
}

// Global Variables.
$rbth_globals_file = __DIR__ . '/inc/global-variables.php';
if ( file_exists( $rbth_globals_file ) ) {
	require_once $rbth_globals_file;
}

// Custom Post Types.
$rbth_custom_post_file = __DIR__ . '/inc/custom-posts.php';
if ( file_exists( $rbth_custom_post_file ) ) {
	require_once $rbth_custom_post_file;
}

// Helpest Theme Actions.
$rbth_helpest_actions_file = __DIR__ . '/inc/helpest-actions.php';
if ( file_exists( $rbth_helpest_actions_file ) ) {
	require_once $rbth_helpest_actions_file;
}
