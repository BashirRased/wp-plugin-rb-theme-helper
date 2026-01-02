<?php
/**
 * RB Theme Options Loader
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * RB Theme Helper Panel
 */
new \Kirki\Panel(
	'rbth_theme_options',
	array(
		'priority' => 10,
		'title'    => esc_html__( 'RB Theme Helper', 'rb-theme-helper' ),
	)
);

// Include Sections.
$sections = array(
	'wp-section',
	'general',
	'typography',
	'color',
	'blog',
);

foreach ( $sections as $section ) {
	$section_file = __DIR__ . '/section/' . $section . '.php';
	if ( file_exists( $section_file ) ) {
		require_once $section_file;
	}
}
