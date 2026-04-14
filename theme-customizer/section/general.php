<?php
/**
 * General Kirki Settings
 *
 * Registers general fields for the RB Theme Helper.
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * ==================================================
 * GENERAL SECTION
 * ==================================================
 */
new \Kirki\Section(
	'rbth_general',
	array(
		'priority' => 10,
		'title'    => esc_html__( 'General', 'rb-theme-helper' ),
		'panel'    => 'rbth_theme_options',
	)
);

// Preloader On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_preloader',
		'label'    => esc_html__( 'Preloader On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Header Top On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_header_top',
		'label'    => esc_html__( 'Header Top On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Header Transparent On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_header_transparent',
		'label'    => esc_html__( 'Header Transparent On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Header Sticky On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_header_sticky',
		'label'    => esc_html__( 'Header Sticky On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Breadcrumbs On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_breadcrumbs',
		'label'    => esc_html__( 'Breadcrumbs On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Breadcrumbs Color.
new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_breadcrumbs_color',
		'label'    => esc_html__( 'Breadcrumbs Color', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
	)
);

// Breadcrumbs Overlay Color.
new \Kirki\Field\Color(
	array(
		'settings' => 'rbth_breadcrumbs_overlay_color',
		'label'    => esc_html__( 'Breadcrumbs Overlay Color', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'choices'  => array(
			'alpha' => true,
		),
	)
);

// Scroll To Top On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_scroll_to_top',
		'label'    => esc_html__( 'Scroll To Top On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Copyright On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_copyright_switch',
		'label'    => esc_html__( 'Copyright On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			1 => esc_html__( 'Enable', 'rb-theme-helper' ),
			0 => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Copyright Text.
new \Kirki\Field\Editor(
	array(
		'settings'        => 'rbth_copyright_text',
		'label'           => esc_html__( 'Copyright Text', 'rb-theme-helper' ),
		'section'         => 'rbth_general',
		'active_callback' => function () {
			$val = get_theme_mod( 'rbth_copyright_switch', 0 );
			return 1 === (int) $val;
		},
	)
);

// Powered By On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_poweredby_switch',
		'label'    => esc_html__( 'Powered By On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'off',
		'choices'  => array(
			1 => esc_html__( 'Enable', 'rb-theme-helper' ),
			0 => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Powered By Text.
new \Kirki\Field\Editor(
	array(
		'settings'        => 'rbth_poweredby_text',
		'label'           => esc_html__( 'Powered By Text', 'rb-theme-helper' ),
		'section'         => 'rbth_general',
		'active_callback' => function () {
			$val = get_theme_mod( 'rbth_poweredby_switch', 0 );
			return 1 === (int) $val;
		},
	)
);
