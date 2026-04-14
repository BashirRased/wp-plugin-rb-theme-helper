<?php
/**
 * Common functions and helpers.
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'rbth_theme_custom_styles' ) ) {
	/**
	 * Convert a HEX color code to an RGB string (e.g., "249, 54, 1").
	 *
	 * @param string $hex Hex color code.
	 * @return string RGB formatted string.
	 */
	function rbth_hex_to_rgb_string( $hex ) {
		$hex = str_replace( '#', '', $hex );

		if ( strlen( $hex ) === 3 ) {
			$r = hexdec( str_repeat( substr( $hex, 0, 1 ), 2 ) );
			$g = hexdec( str_repeat( substr( $hex, 1, 1 ), 2 ) );
			$b = hexdec( str_repeat( substr( $hex, 2, 1 ), 2 ) );
		} elseif ( strlen( $hex ) === 6 ) {
			$r = hexdec( substr( $hex, 0, 2 ) );
			$g = hexdec( substr( $hex, 2, 2 ) );
			$b = hexdec( substr( $hex, 4, 2 ) );
		} else {
			return '0, 0, 0';
		}

		return sprintf( '%d, %d, %d', $r, $g, $b );
	}

	/**
	 * Enqueue custom dynamic CSS variables based on Theme Mods (Colors + Fonts).
	 *
	 * @return void
	 */
	function rbth_theme_custom_styles() {
		/*
		|--------------------------------------------------------------------------
		| Theme Colors
		|--------------------------------------------------------------------------
		*/
		$primary_raw         = sanitize_hex_color( get_theme_mod( 'rbth_primary_color', '#f93601' ) );
		$primary_dark_raw    = sanitize_hex_color( get_theme_mod( 'rbth_primary_color_dark', '#d41900' ) );
		$primary_light_raw   = sanitize_hex_color( get_theme_mod( 'rbth_primary_color_light', '#fca78e' ) );
		$secondary_raw       = sanitize_hex_color( get_theme_mod( 'rbth_secondary_color', '#007bff' ) );
		$secondary_dark_raw  = sanitize_hex_color( get_theme_mod( 'rbth_secondary_color_dark', '#0056b3' ) );
		$secondary_light_raw = sanitize_hex_color( get_theme_mod( 'rbth_secondary_color_light', '#66b2ff' ) );

		// Primary & Secondary fallbacks.
		if ( '' !== $primary_raw ) {
			$primary = $primary_raw;
		}

		if ( '' !== $primary_dark_raw ) {
			$primary_dark = $primary_dark_raw;
		}

		if ( '' !== $primary_light_raw ) {
			$primary_light = $primary_light_raw;
		}

		if ( '' !== $secondary_raw ) {
			$secondary = $secondary_raw;
		}

		if ( '' !== $secondary_dark_raw ) {
			$secondary_dark = $secondary_dark_raw;
		}

		if ( '' !== $secondary_light_raw ) {
			$secondary_light = $secondary_light_raw;
		}

		// Convert HEX to RGB for rgba().
		$primary_rgb         = rbth_hex_to_rgb_string( $primary );
		$primary_dark_rgb    = rbth_hex_to_rgb_string( $primary_dark );
		$primary_light_rgb   = rbth_hex_to_rgb_string( $primary_light );
		$secondary_rgb       = rbth_hex_to_rgb_string( $secondary );
		$secondary_dark_rgb  = rbth_hex_to_rgb_string( $secondary_dark );
		$secondary_light_rgb = rbth_hex_to_rgb_string( $secondary_light );

		/*
		|--------------------------------------------------------------------------
		| Multi Colors
		|--------------------------------------------------------------------------
		*/
		$default_multi_colors = array(
			1 => '#fa4b1c',
			2 => '#ffc107',
			3 => '#26CC8C',
			4 => '#7726eb',
			5 => '#48B1BC',
			6 => '#e13ccf',
			7 => '#007aff',
			8 => '#0dcaf0',
		);

		$multi_colors = array();
		foreach ( $default_multi_colors as $i => $default_color ) {
			$color_raw = sanitize_hex_color( get_theme_mod( "rbth_color_$i", '' ) );
			if ( '' !== $color_raw ) {
				$multi_colors[ $i ] = $color_raw;
			}
		}

		$multi_colors_rgb = array();
		foreach ( $multi_colors as $i => $hex ) {
			$multi_colors_rgb[ $i ] = rbth_hex_to_rgb_string( $hex );
		}

		/*
		|--------------------------------------------------------------------------
		| Font Families
		|--------------------------------------------------------------------------
		*/
		$font_family_1 = esc_attr( get_theme_mod( 'rbth_font_family_1', '"Figtree", sans-serif' ) );
		$font_family_2 = esc_attr( get_theme_mod( 'rbth_font_family_2', '"Nunito", sans-serif' ) );
		$font_family_3 = esc_attr( get_theme_mod( 'rbth_font_family_3', '"Caveat", cursive' ) );

		/*
		|--------------------------------------------------------------------------
		| Build CSS Output
		|--------------------------------------------------------------------------
		*/
		$custom_css  = ':root {';
		$custom_css .= "
			/* ==== COLOR VARIABLES ==== */
			--color-primary: $primary;
			--color-primary-light: $primary_light;
			--color-primary-dark: $primary_dark;
			--color-secondary: $secondary;
			--color-secondary-light: $secondary_light;
			--color-secondary-dark: $secondary_dark;

			/* ==== RGB VALUES ==== */
			--color-primary-rgb: $primary_rgb;
			--color-primary-light-rgb: $primary_light_rgb;
			--color-primary-dark-rgb: $primary_dark_rgb;
			--color-secondary-rgb: $secondary_rgb;
			--color-secondary-light-rgb: $secondary_light_rgb;
			--color-secondary-dark-rgb: $secondary_dark_rgb;

			/* ==== FONT VARIABLES ==== */
			--font-family-1: $font_family_1;
			--font-family-2: $font_family_2;
			--font-family-3: $font_family_3;
		";

		foreach ( $multi_colors as $i => $hex ) {
			$rgb         = $multi_colors_rgb[ $i ];
			$custom_css .= "
			--color-$i: $hex;
			--color-{$i}-rgb: $rgb;";
		}

		/*
		|--------------------------------------------------------------------------
		| Register & Enqueue
		|--------------------------------------------------------------------------
		*/
		if ( ! wp_style_is( 'rbth-dynamic-styles', 'registered' ) ) {
			wp_register_style(
				'rbth-dynamic-styles',
				false,
				array(),
				time()
			);
		}

		wp_enqueue_style( 'rbth-dynamic-styles' );
		wp_add_inline_style( 'rbth-dynamic-styles', $custom_css );
	}
	add_action( 'wp_head', 'rbth_theme_custom_styles', 99 );
}

if ( ! function_exists( 'rbth_excerpt_dots' ) ) {
	/**
	 * Filter excerpt more text (dots).
	 *
	 * @return string
	 */
	function rbth_excerpt_dots() {
		$excerpt_more = get_theme_mod( 'rbth_excerpt_more_text', 'off' );
		// If enabled, hide dots.
		if ( $excerpt_more ) {
			return '';
		}
		// Default dots.
		return '&hellip;';
	}
	add_filter( 'excerpt_more', 'rbth_excerpt_dots' );
}

if ( ! function_exists( 'rbth_excerpt_words' ) ) {
	/**
	 * Filter post excerpt length based on Customizer setting.
	 *
	 * @param int $length Default excerpt length.
	 * @return int
	 */
	function rbth_excerpt_words( $length ) {

		$excerpt_length = get_theme_mod( 'rbth_excerpt_word', 30 );

		// Ensure a valid integer.
		$excerpt_length = absint( $excerpt_length );

		// Fallback safety.
		if ( 0 === $excerpt_length ) {
			return $length;
		}

		return $excerpt_length;
	}
}
add_filter( 'excerpt_length', 'rbth_excerpt_words', 999 );
