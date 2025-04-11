<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// RB Theme - Color
new \Kirki\Panel(
	'rbth_theme_color',
	[
		'priority'    => 10,
		'title'       => __( 'RB Theme - Color', 'rb-theme-helper' ),
	]
);

// RB Theme - Typography
new \Kirki\Panel(
	'rbth_theme_typography',
	[
		'priority'    => 11,
		'title'       => __( 'RB Theme - Typography', 'rb-theme-helper' ),
	]
);

// RB Theme - Switch
new \Kirki\Panel(
	'rbth_theme_switch',
	[
		'priority'    => 12,
		'title'       => __( 'RB Theme - Switch', 'rb-theme-helper' ),
	]
);