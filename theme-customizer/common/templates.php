<?php
/**
 * Theme helper templates (preloader, header, footer, etc.).
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



if ( ! function_exists( 'rbth_header_top' ) ) {
	/**
	 * Determines whether the Header Top area should be displayed.
	 *
	 * Uses the global Kirki theme option and per-page ACF field
	 * to decide if the Header Top section is enabled.
	 *
	 * The result is stored in a global variable for use inside
	 * the header-top template.
	 */
	function rbth_header_top() {
		// Global Kirki option.
		$kirki_on = get_theme_mod( 'rbth_header_top', false );

		if ( ! $kirki_on ) {
			return;
		}

		$page_header_top = '';
		$queried_id      = get_queried_object_id();

		// Per-page ACF option.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_header_top = get_field( 'page_header_top', $queried_id );
		}

		// Store result for template usage.
		$GLOBALS['rbth_show_header_top'] = ( 'disable' !== $page_header_top );
	}
}

if ( ! function_exists( 'rbth_breadcrumbs' ) ) {
	/**
	 * Breadcrumbs template loader.
	 *
	 * Loads breadcrumbs based on global (Kirki) and per-page (ACF) settings.
	 *
	 * @return void
	 */
	function rbth_breadcrumbs() {
		// Get global Kirki option.
		$kirki_on = get_theme_mod( 'rbth_breadcrumbs', false );

		// Stop if global setting is off.
		if ( ! $kirki_on ) {
			return;
		}

		// Default.
		$page_choose = '';

		// Get the current queried object ID.
		$queried_id = get_queried_object_id();

		// Get per-page ACF choice if ACF is active.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_choose = get_field( 'page_breadcrumbs_choose', $queried_id );
		}

		// Show breadcrumbs only if not disabled via ACF.
		if ( 'disable' !== $page_choose ) {
			get_template_part( 'template-parts/header/breadcrumbs' );
		}
	}
}

if ( ! function_exists( 'rbth_scroll_to_top' ) ) {
	/**
	 * Scroll to top template output.
	 *
	 * @return void
	 */
	function rbth_scroll_to_top() {
		// Get Kirki theme option.
		$kirki_on = get_theme_mod( 'rbth_scroll_to_top', false );

		// Get the current queried object ID.
		$queried_id  = get_queried_object_id();
		$page_active = false;

		// Check per-page ACF field if ACF is available.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_active = get_field( 'page_scroll_to_top_disable', $queried_id );
		}

		// Set transparent header class based on logic.
		if ( $page_active && $kirki_on ) {
			echo '';
		} elseif ( $kirki_on ) {
			get_template_part( 'template-parts/footer/scroll-to-top' );
		}
	}
}

if ( ! function_exists( 'rbth_get_sidebar_position' ) ) {
	/**
	 * Get resolved sidebar position from ACF or Customizer.
	 *
	 * @return string left-sidebar|right-sidebar|no-sidebar
	 */
	function rbth_get_sidebar_position() {

		$sidebar_choose = function_exists( 'get_field' )
			? get_field( 'choose_sidebar' )
			: get_theme_mod( 'rbth_sidebar_choose', 'default' );

		$sidebar_position = '';

		// Per-post (ACF special).
		if ( 'special' === $sidebar_choose && function_exists( 'get_field' ) ) {
			$sidebar_position = get_field( 'sidebar_position' );

			// Global custom.
		} elseif ( 'custom' === get_theme_mod( 'rbth_sidebar_choose' ) ) {

			if ( function_exists( 'get_field' ) ) {
				$sidebar_position = get_field( 'rbth_sidebar_position' );
			}

			if ( empty( $sidebar_position ) ) {
				$sidebar_position = get_theme_mod( 'rbth_sidebar_position', 'no-sidebar' );
			}
		}

		$pos = sanitize_key(
			str_replace( '_', '-', strtolower( (string) $sidebar_position ) )
		);

		if ( in_array( $pos, array( 'left-sidebar', 'right-sidebar', 'no-sidebar' ), true ) ) {
			return $pos;
		}

		// Fallback (RTL aware).
		return is_rtl() ? 'left-sidebar' : 'right-sidebar';
	}
}

if ( ! function_exists( 'rbth_left_sidebar' ) ) {
	/**
	 * Output the left sidebar template when applicable.
	 *
	 * @return void
	 */
	function rbth_left_sidebar() {

		if ( 'left-sidebar' !== rbth_get_sidebar_position() ) {
			return;
		}

		get_template_part( 'sidebar', 'left' );
	}
}

if ( ! function_exists( 'rbth_right_sidebar' ) ) {
	/**
	 * Output the right sidebar template when applicable.
	 *
	 * @return void
	 */
	function rbth_right_sidebar() {

		if ( 'right-sidebar' !== rbth_get_sidebar_position() ) {
			return;
		}

		get_template_part( 'sidebar', 'right' );
	}
}
