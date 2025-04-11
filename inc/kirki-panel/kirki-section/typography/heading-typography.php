<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//  Heading Typography Section
new \Kirki\Section(
	'heading_typography_sec',
	[       
        'priority'    => 160,
		'title'       => esc_html__( 'Heading Typography', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_typography',
	]
);

// H1 Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'h1_typography',
		'label'       => esc_html__( 'H1 Tag', 'rb-theme-helper' ),
		'section'     => 'heading_typography_sec',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'bold',
			'font-size'       => '56px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
		],
		'output'      => [
			[
				'element' => 'h1',
			],
		],
	]
);

// H2 Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'h2_typography',
		'label'       => esc_html__( 'H2 Tag', 'rb-theme-helper' ),
		'section'     => 'heading_typography_sec',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'bold',
			'font-size'       => '48px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
		],
		'output'      => [
			[
				'element' => 'h2',
			],
		],
	]
);

// H3 Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'h3_typography',
		'label'       => esc_html__( 'H3 Tag', 'rb-theme-helper' ),
		'section'     => 'heading_typography_sec',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'bold',
			'font-size'       => '36px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
		],
		'output'      => [
			[
				'element' => 'h3',
			],
		],
	]
);

// H4 Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'h4_typography',
		'label'       => esc_html__( 'H4 Tag', 'rb-theme-helper' ),
		'section'     => 'heading_typography_sec',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'bold',
			'font-size'       => '30px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
		],
		'output'      => [
			[
				'element' => 'h4',
			],
		],
	]
);

// H5 Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'h5_typography',
		'label'       => esc_html__( 'H5 Tag', 'rb-theme-helper' ),
		'section'     => 'heading_typography_sec',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'bold',
			'font-size'       => '24px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
		],
		'output'      => [
			[
				'element' => 'h5',
			],
		],
	]
);

// H6 Typography
new \Kirki\Field\Typography(
	[
		'settings'    => 'h6_typography',
		'label'       => esc_html__( 'H6 Tag', 'rb-theme-helper' ),
		'section'     => 'heading_typography_sec',
		'priority'    => 10,
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Roboto',
			'variant'         => 'bold',
			'font-style'      => 'normal',
			'font-size'       => '18px',
			'line-height'     => '1.5',
			'letter-spacing'  => '0',
			'text-transform'  => 'none',
		],
		'output'      => [
			[
				'element' => 'h6',
			],
		],
	]
);