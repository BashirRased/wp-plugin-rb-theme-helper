<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Kirki Panels
if( file_exists( dirname ( __FILE__ ) . '/kirki-panel.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-panel.php' );
}

// Kirki Panels - Color
if( file_exists( dirname ( __FILE__ ) . '/kirki-panel/color.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-panel/color.php' );
}

// Kirki Panels - Typography
if( file_exists( dirname ( __FILE__ ) . '/kirki-panel/typography.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-panel/typography.php' );
}

// Kirki Panels - Switch
if( file_exists( dirname ( __FILE__ ) . '/kirki-panel/switch.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-panel/switch.php' );
}