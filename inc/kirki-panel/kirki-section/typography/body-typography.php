<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Body Typography Section
new \Kirki\Section(
	'body_typography_sec',
	[       
        'priority'    => 160,
		'title'       => esc_html__( 'Body Typography', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_typography',
	]
);

// Body Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'body_typography',
		'label'       => esc_html__( 'Body Tag', 'rb-theme-helper' ),
		'section'     => 'body_typography_sec',
		'priority'    => 10,
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'regular',
			'font-size'       => '16px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
		],
		'output'      => [
			[
				'element' => 'body',
			],
		],
	]
);