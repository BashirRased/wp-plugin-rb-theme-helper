<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Header Section
new \Kirki\Section(
	'rbth_header',
	[       
        'priority'    => 160,
		'title'       => __( 'Header', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_option',
	]
);

// Header Top
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_header_top_switch',
		'label'       => __( 'Header Top Active', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Time
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_time_show',
		'label'       => __( 'Time Show', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Date
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_date_show',
		'label'       => __( 'Date Show', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Advertisement
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_ads',
		'label'       => __( 'Advertisement Show', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Advertisement ID
new \Kirki\Field\Text(
	[
		'settings'    => 'rbth_ads_id',
		'label'       => __( 'Advertisement ID', 'rb-theme-helper' ),
		'section'     => 'rbth_header'
	]
);

// Mobile Numbers
new \Kirki\Field\Text(
	[
		'settings' => 'rbth_mobile',
		'label'    => esc_html__( 'Mobile Numbers', 'rb-theme-helper' ),
		'section'  => 'rbth_header',
	]
);

// Email Address
new \Kirki\Field\Text(
	[
		'settings' => 'rbth_email',
		'label'    => esc_html__( 'Email Address', 'rb-theme-helper' ),
		'section'  => 'rbth_header',
	]
);

// Header Fixed Menu
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_menu_fixed',
		'label'       => __( 'Header Fixed Menu Active', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Header Transparent Menu
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_menu_transparent',
		'label'       => __( 'Header Transparent Menu Active', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Breadcrumb
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_breadcrumb_switch',
		'label'       => esc_html__( 'Breadcrumb Active', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Breadcrumb Image
new \Kirki\Field\Image(
	[
		'settings'    => 'rbth_breadcrumb_img',
		'label'       => esc_html__( 'Breadcrumb Image URL', 'rb-theme-helper' ),
		'section'     => 'rbth_header',
		'active_callback' => [
			[
				'setting'  => 'rbth_breadcrumb_switch',
				'operator' => '==',
				'value'    => true,
			],
			'choices'     => [
				'save_as' => 'rbth_breadcrumb_img',
			]
		],
	]
);