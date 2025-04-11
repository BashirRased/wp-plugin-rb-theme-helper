<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Footer Switch Section
new \Kirki\Section(
	'rbth_footer_switch_sec',
	[       
        'priority'    => 160,
		'title'       => __( 'Footer Switch', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_switch',
	]
);

// Footer Widget On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_footer_widget_switch',
		'label'       => esc_html__( 'Footer Widget On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_footer_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Scroll to Top On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_scroll_top_switch',
		'label'       => esc_html__( 'Scroll to Top On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_footer_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		],
	]
);