<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Sidebar Section
new \Kirki\Section(
	'rbth_sidebar',
	[       
        'priority'    => 160,
		'title'       => esc_html__( 'Sidebar', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_option',
	]
);

// Sidebar Blog
new \Kirki\Field\Select(
	[
		'settings'    => 'rbth_sidebar_blog',
		'label'       => esc_html__( 'Sidebar Blog', 'rb-theme-helper' ),
		'section'     => 'rbth_sidebar',
		'default'     => 'left-sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'rb-theme-helper' ),
		'choices'     => [
			'left-sidebar' => esc_html__( 'Left Sidebar', 'rb-theme-helper' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'rb-theme-helper' ),
			'no-sidebar' => esc_html__( 'No Sidebar', 'rb-theme-helper' )
		],
	]
);

// Sidebar Signle
new \Kirki\Field\Select(
	[
		'settings'    => 'rbth_sidebar_single',
		'label'       => esc_html__( 'Sidebar Signle', 'rb-theme-helper' ),
		'section'     => 'rbth_sidebar',
		'default'     => 'left-sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'rb-theme-helper' ),
		'choices'     => [
			'left-sidebar' => esc_html__( 'Left Sidebar', 'rb-theme-helper' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'rb-theme-helper' ),
			'no-sidebar' => esc_html__( 'No Sidebar', 'rb-theme-helper' )
		],
	]
);