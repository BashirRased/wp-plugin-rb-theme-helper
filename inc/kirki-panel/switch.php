<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Header Switch
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/switch/header-switch.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/switch/header-switch.php' );
}

// Page Switch
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/switch/page-switch.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/switch/page-switch.php' );
}

// Footer Switch
if( file_exists( dirname ( __FILE__ ) . '/kirki-section/switch/footer-switch.php' ) ) {
	require_once ( dirname ( __FILE__ ) . '/kirki-section/switch/footer-switch.php' );
}