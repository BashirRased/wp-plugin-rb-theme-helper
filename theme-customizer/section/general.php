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

// Page Width.
new \Kirki\Field\Select(
	array(
		'settings' => 'rbth_site_width',
		'label'    => esc_html__( 'Page Width', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'default'  => 'custom-width',
		'choices'  => array(
			'full-width'   => esc_html__( 'Full Width', 'rb-theme-helper' ),
			'custom-width' => esc_html__( 'Box Width', 'rb-theme-helper' ),
		),
	)
);

// Box Width.
new \Kirki\Field\Number(
	array(
		'settings'        => 'rbth_site_box_width',
		'label'           => esc_html__( 'Box Width', 'rb-theme-helper' ),
		'section'         => 'rbth_general',
		'choices'         => array(
			'min'  => 1320,
			'max'  => 1920,
			'step' => 1,
		),
		'default'         => 1320,
		'active_callback' => array(
			array(
				'setting'  => 'rbth_site_width',
				'operator' => '==',
				'value'    => 'custom-width',
			),
		),
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
		'settings' => 'color_setting_rgba',
		'label'    => esc_html__( 'Breadcrumbs Overlay Color', 'rb-theme-helper' ),
		'section'  => 'rbth_general',
		'choices'  => array(
			'alpha' => true,
		),
	)
);
