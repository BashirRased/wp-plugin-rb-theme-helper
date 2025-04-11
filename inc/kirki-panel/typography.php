<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Body Typography
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/typography/body-typography.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/typography/body-typography.php' );
}

// Heading Typography
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/typography/heading-typography.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/typography/heading-typography.php' );
}