<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Header Switch Section
new \Kirki\Section(
	'rbth_header_switch_sec',
	[       
        'priority'    => 160,
		'title'       => __( 'Header Switch', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_switch',
	]
);

// Preloader On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_preloader_switch',
		'label'       => __( 'Preloader On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_header_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Header Top On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_header_top_switch',
		'label'       => __( 'Header Top On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_header_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Header Fixed Menu On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_menu_fixed_switch',
		'label'       => __( 'Header Fixed Menu On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_header_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Header Transparent Menu On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_menu_transparent_switch',
		'label'       => __( 'Header Transparent Menu On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_header_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Breadcrumb On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_breadcrumb_switch',
		'label'       => esc_html__( 'Breadcrumb On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_header_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);