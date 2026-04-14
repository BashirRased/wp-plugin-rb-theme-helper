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
$rbth_sections = array(
	'wp-section',
	'general',
	'typography',
	'color',
	'blog',
);

foreach (
	$rbth_sections as $rbth_section
	) {
	$rbth_section_file = __DIR__ . '/section/' . $rbth_section . '.php';
	if ( file_exists( $rbth_section_file ) ) {
		require_once $rbth_section_file;
	}
}
