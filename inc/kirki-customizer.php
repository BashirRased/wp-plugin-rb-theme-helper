<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// RB Theme Options
new \Kirki\Panel(
	'rbth_theme_option',
	[
		'priority'    => 10,
		'title'       => __( 'RB Theme Options', 'rb-theme-helper' ),
	]
);

// General Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/general-section.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/general-section.php' );
}

// Type Section
// if( file_exists( dirname ( __FILE__ ) . '/kirki-section/type-section.php' ) ) {
// 	require_once ( dirname ( __FILE__ ) . '/kirki-section/type-section.php' );
// }

// Social Link Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/social-link-section.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/social-link-section.php' );
}

// Header Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/header-section.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/header-section.php' );
}

// Post Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/post-section.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/post-section.php' );
}

// Sidebar
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/sidebar-section.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/sidebar-section.php' );
}

// Footer Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/footer-section.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/footer-section.php' );
}