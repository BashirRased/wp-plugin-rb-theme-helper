<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Footer Section
new \Kirki\Section(
	'rbth_footer',
	[       
        'priority'    => 160,
		'title'       => esc_html__( 'Footer', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_option',
	]
);

// Footer Widget Switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_footer_widget',
		'label'       => esc_html__( 'Footer Widget Active', 'rb-theme-helper' ),
		'section'     => 'rbth_footer',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Copyright Text Switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_copyright_switch',
		'label'       => esc_html__( 'Copyright Text Active', 'rb-theme-helper' ),
		'section'     => 'rbth_footer',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Copyright Text
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbth_copyright_text',
		'label'       => esc_html__( 'Copyright Text', 'rb-theme-helper' ),
		'section'     => 'rbth_footer',
        'active_callback' => [
            [
                'setting'  => 'rbth_copyright_switch',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Powered By Text Switch
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_poweredby_switch',
		'label'       => esc_html__( 'Powered By Text Active', 'rb-theme-helper' ),
		'section'     => 'rbth_footer',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Powered By Text
new \Kirki\Field\Textarea(
	[
		'settings'    => 'rbth_poweredby_text',
		'label'       => esc_html__( 'Powered By Text', 'rb-theme-helper' ),
		'section'     => 'rbth_footer',
        'active_callback' => [
            [
                'setting'  => 'rbth_poweredby_switch',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Scroll to Top
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_scroll_top',
		'label'       => esc_html__( 'Scroll to Top Active', 'rb-theme-helper' ),
		'section'     => 'rbth_footer',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);