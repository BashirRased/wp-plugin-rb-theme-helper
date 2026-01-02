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
		$site_width_setting = get_theme_mod( 'rbth_site_width', 'custom-width' );
		$page_width         = get_theme_mod( 'rbth_site_box_width', 1320 );

		if ( 'full-width' === $site_width_setting ) {
			$page_width = '100%';
		} elseif ( 'custom-width' === $site_width_setting ) {
			$page_width = $page_width . 'px';
		} else {
			$page_width = '1320px';
		}

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
		} else {
			$primary = '#f93601';
		}

		if ( '' !== $primary_dark_raw ) {
			$primary_dark = $primary_dark_raw;
		} else {
			$primary_dark = '#d41900';
		}

		if ( '' !== $primary_light_raw ) {
			$primary_light = $primary_light_raw;
		} else {
			$primary_light = '#fca78e';
		}

		if ( '' !== $secondary_raw ) {
			$secondary = $secondary_raw;
		} else {
			$secondary = '#007bff';
		}

		if ( '' !== $secondary_dark_raw ) {
			$secondary_dark = $secondary_dark_raw;
		} else {
			$secondary_dark = '#0056b3';
		}

		if ( '' !== $secondary_light_raw ) {
			$secondary_light = $secondary_light_raw;
		} else {
			$secondary_light = '#66b2ff';
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
			} else {
				$multi_colors[ $i ] = $default_color;
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

		$custom_css .= '
		}			
		@media (min-width: 1401px) and (max-width: 1980px) {		
			.container-xxl,
			.container-xl,
			.container-lg,
			.container-md,
			.container-sm,
			.container {
				max-width: ' . esc_attr( $page_width ) . ';
			}		
		}
		';

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

/**
 * Build PHP date format string from Kirki settings
 *
 * @return string
 */
function rbth_get_custom_date_format() {
	$sorting = get_theme_mod( 'rbth_date_meta_sorting', array( 'day', 'month', 'year' ) );

	$format_parts = array();

	foreach ( $sorting as $item ) {

		switch ( $item ) {
			/* Weekday Prefix */
			case 'week_prefix':
				$week_prefix = get_theme_mod( 'rbth_date_meta_week_prefix', 'option-1' );
				switch ( $week_prefix ) {
					case 'option-2':
						$format_parts[] = '-';
						break;
					case 'option-3':
						$format_parts[] = '/';
						break;
					case 'option-4':
						$format_parts[] = ' ';
						break;
					default:
						$format_parts[] = ', ';
				}
				break;

			/* Weekday */
			case 'week':
				$week = get_theme_mod( 'rbth_date_meta_week', 'option-1' );
				switch ( $week ) {
					case 'option-2':
						$format_parts[] = 'D';
						break;
					default:
						$format_parts[] = 'l';
				}
				break;

			/* Day Prefix */
			case 'day_prefix':
				$day_prefix = get_theme_mod( 'rbth_date_meta_day_prefix', 'option-1' );
				switch ( $day_prefix ) {
					case 'option-2':
						$format_parts[] = '-';
						break;
					case 'option-3':
						$format_parts[] = '/';
						break;
					case 'option-4':
						$format_parts[] = ' ';
						break;
					default:
						$format_parts[] = ', ';
				}
				break;

			/* Day */
			case 'day':
				$day = get_theme_mod( 'rbth_date_meta_day', 'option-1' );
				switch ( $day ) {
					case 'option-2':
						$format_parts[] = 'j';
						break;
					case 'option-3':
						$format_parts[] = 'jS';
						break;
					default:
						$format_parts[] = 'd';
				}
				break;

			/* Month Prefix */
			case 'month_prefix':
				$month_prefix = get_theme_mod( 'rbth_date_meta_month_prefix', 'option-1' );
				switch ( $month_prefix ) {
					case 'option-2':
						$format_parts[] = '-';
						break;
					case 'option-3':
						$format_parts[] = '/';
						break;
					case 'option-4':
						$format_parts[] = ' ';
						break;
					default:
						$format_parts[] = ', ';
				}
				break;

			/* Month */
			case 'month':
				$month = get_theme_mod( 'rbth_date_meta_month', 'option-1' );
				switch ( $month ) {
					case 'option-2':
						$format_parts[] = 'n';
						break;
					case 'option-3':
						$format_parts[] = 'F';
						break;
					case 'option-4':
						$format_parts[] = 'M';
						break;
					default:
						$format_parts[] = 'm';
				}
				break;

			/* Year Prefix */
			case 'year_prefix':
				$year_prefix = get_theme_mod( 'rbth_date_meta_year_prefix', 'option-1' );
				switch ( $year_prefix ) {
					case 'option-2':
						$format_parts[] = '-';
						break;
					case 'option-3':
						$format_parts[] = '/';
						break;
					case 'option-4':
						$format_parts[] = ' ';
						break;
					default:
						$format_parts[] = ', ';
				}
				break;

			/* Year */
			case 'year':
				$year = get_theme_mod( 'rbth_date_meta_year', 'option-2' );
				switch ( $year ) {
					case 'option-2':
						$format_parts[] = 'Y';
						break;
					default:
						$format_parts[] = 'y';
				}
				break;

			/* Time Prefix */
			case 'time_prefix':
				$time_prefix = get_theme_mod( 'rbth_date_meta_time_prefix', 'option-1' );
				switch ( $time_prefix ) {
					case 'option-2':
						$format_parts[] = ' at ';
						break;
					case 'option-3':
						$format_parts[] = ' @ ';
						break;
					default:
						$format_parts[] = ', ';
				}
				break;

			/* Time */
			case 'time':
				$time = get_theme_mod( 'rbth_date_meta_time', 'option-1' );
				switch ( $time ) {
					case 'option-2':
						$format_parts[] = 'h:i a';
						break;
					case 'option-3':
						$format_parts[] = 'g:i A';
						break;
					case 'option-4':
						$format_parts[] = 'h:i A';
						break;
					default:
						$format_parts[] = 'g:i a';
				}
				break;
		}
	}

	// Space-separated date format.
	return implode( '', $format_parts );
}

/**
 * Get blog date meta format (default | custom | relative)
 *
 * @return string
 */
function rbth_blogpage_date_format() {
	$format = get_theme_mod( 'rbth_date_meta_format', 'default' );

	// Default WordPress date format.
	if ( 'default' === $format ) {
		return get_the_time( get_option( 'date_format' ) );
	}

	// Custom (Kirki-driven) date format.
	if ( 'custom' === $format ) {
		return get_the_time( rbth_get_custom_date_format() );
	}

	// Relative time (e.g. 11 months ago).
	if ( 'relative' === $format ) {
		return human_time_diff(
			get_the_time( 'U' ),
			time()
		) . ' ' . esc_html__( 'ago', 'rb-theme-helper' );
	}

	// Fallback.
	return get_the_time( get_option( 'date_format' ) );
}
