<?php
/**
 * Typography Options
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ==================================================
 * TYPOGRAPHY SECTION
 * ==================================================
 */
new \Kirki\Section(
	'rbth_theme_typography',
	array(
		'priority' => 11,
		'title'    => esc_html__( 'Typography', 'rb-theme-helper' ),
		'panel'    => 'rbth_theme_options',
	)
);

// Font Family - 01.
new \Kirki\Field\Select(
	array(
		'settings' => 'rbth_font_family_1',
		'label'    => esc_html__( 'Font Family - 01', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_typography',
		'default'  => 'roboto',
		'choices'  => $GLOBALS['global_font_list'],
	)
);

// Font Family - 02.
new \Kirki\Field\Select(
	array(
		'settings' => 'rbth_font_family_2',
		'label'    => esc_html__( 'Font Family - 02', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_typography',
		'default'  => 'roboto',
		'choices'  => $GLOBALS['global_font_list'],
	)
);

// Font Family - 03.
new \Kirki\Field\Select(
	array(
		'settings' => 'rbth_font_family_3',
		'label'    => esc_html__( 'Font Family - 03', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_typography',
		'default'  => 'roboto',
		'choices'  => $GLOBALS['global_font_list'],
	)
);
