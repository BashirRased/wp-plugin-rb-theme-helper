<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Post Excerpt Section
new \Kirki\Section(
	'rbth_excerpt_sec',
	[       
        'priority'    => 160,
		'title'       => __( 'Post Excerpt', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_option',
	]
);

// Post Excerpt Active
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_excerpt',
		'label'       => __( 'Post Excerpt Active', 'rb-theme-helper' ),
		'section'     => 'rbth_excerpt_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Post Excerpt Total Word
new \Kirki\Field\Number(
	[
		'settings' => 'rbth_excerpt_word',
		'label'    => __( 'Post Excerpt Total Word', 'rb-theme-helper' ),
		'section'  => 'rbth_excerpt_sec',
		'default'  => 20,
		'choices'  => [
			'min'  => 20,
			'max'  => 50,
			'step' => 1,
		],
		'active_callback' => [
            [
                'setting'  => 'rbth_excerpt',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);