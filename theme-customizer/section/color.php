<?php
/**
 * Theme Colors Kirki Settings
 *
 * Registers color fields for the RB Theme Helper.
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$heading_css = "margin:20px 0 10px; font-family:'Roboto', sans-serif; font-weight:700; font-size:25px;";

/**
 * ==================================================
 * COLOR SECTION
 * ==================================================
 */
new \Kirki\Section(
	'rbth_theme_color',
	array(
		'priority' => 12,
		'title'    => esc_html__( 'Color', 'rb-theme-helper' ),
		'panel'    => 'rbth_theme_options',
	)
);

/**
 * Heading: Primary Colors
 */
new \Kirki\Field\Custom(
	array(
		'settings' => 'rbth_group_primary_colors',
		'section'  => 'rbth_theme_color',
		'default'  => '<h1 style="' . $heading_css . '">' . esc_html__( 'Primary Colors', 'rb-theme-helper' ) . '</h1>',
	)
);

/**
 * Primary Color
 */
new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_primary_color',
		'label'    => esc_html__( 'Primary Color', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#f93601',
	)
);

/**
 * Primary Color - Dark
 */
new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_primary_color_dark',
		'label'    => esc_html__( 'Primary Color - Dark', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#d41900',
	)
);

/**
 * Primary Color - Light
 */
new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_primary_color_light',
		'label'    => esc_html__( 'Primary Color - Light', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#fca78e',
	)
);

/**
 * Heading: Secondary Colors
 */
new \Kirki\Field\Custom(
	array(
		'settings' => 'rbth_group_secondary_colors',
		'section'  => 'rbth_theme_color',
		'default'  => '<h1 style="' . $heading_css . '">' . esc_html__( 'Secondary Colors', 'rb-theme-helper' ) . '</h1>',
	)
);

/**
 * Secondary Colors Fields ...
 */
new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_secondary_color',
		'label'    => esc_html__( 'Secondary Color', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#007bff',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_secondary_color_dark',
		'label'    => esc_html__( 'Secondary Color - Dark', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#0056b3',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_secondary_color_light',
		'label'    => esc_html__( 'Secondary Color - Light', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#66b2ff',
	)
);

/**
 * Heading: Multi Colors
 */
new \Kirki\Field\Custom(
	array(
		'settings' => 'rbth_group_multi_colors',
		'section'  => 'rbth_theme_color',
		'default'  => '<h1 style="' . $heading_css . '">' . esc_html__( 'Multi Colors', 'rb-theme-helper' ) . '</h1>',
	)
);

/**
 * Multi Colors Fields ...
 */
new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_1',
		'label'    => esc_html__( 'Color - 1', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#fa4b1c',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_2',
		'label'    => esc_html__( 'Color - 2', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#ffc107',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_3',
		'label'    => esc_html__( 'Color - 3', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#26CC8C',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_4',
		'label'    => esc_html__( 'Color - 4', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#7726eb',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_5',
		'label'    => esc_html__( 'Color - 5', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#48B1BC',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_6',
		'label'    => esc_html__( 'Color - 6', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#e13ccf',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_7',
		'label'    => esc_html__( 'Color - 7', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#007aff',
	)
);

new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_color_8',
		'label'    => esc_html__( 'Color - 8', 'rb-theme-helper' ),
		'section'  => 'rbth_theme_color',
		'default'  => '#0dcaf0',
	)
);
