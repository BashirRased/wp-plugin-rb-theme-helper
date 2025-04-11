<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Primary Color Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/color/primary-color.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/color/primary-color.php' );
}

// Secondary Color Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/color/secondary-color.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/color/secondary-color.php' );
}

// Light Color Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/color/light-color.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/color/light-color.php' );
}

// Dark Color Section
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/color/dark-color.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/color/dark-color.php' );
}