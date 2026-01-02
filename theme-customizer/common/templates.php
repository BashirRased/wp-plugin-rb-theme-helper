<?php
/**
 * Theme helper templates (preloader, header, footer, etc.).
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

if ( ! function_exists( 'rbth_preloader' ) ) {
	/**
	 * Preloader template loader.
	 *
	 * Loads preloader based on global (Kirki) and per-page (ACF) settings.
	 *
	 * @return void
	 */
	function rbth_preloader() {
		// Get global Kirki option.
		$kirki_on = get_theme_mod( 'rbth_preloader', false );

		// Stop if global setting is off.
		if ( ! $kirki_on ) {
			return;
		}

		// Default.
		$page_preloader = '';

		// Get the current queried object ID.
		$queried_id = get_queried_object_id();

		// Get per-page ACF choice if ACF is active.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_preloader = get_field( 'page_preloader', $queried_id );
		}

		// Show preloader only if not disabled via ACF.
		if ( 'disable' !== $page_preloader ) {
			get_template_part( 'template-parts/header/preloader' );
		}
	}
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

if ( ! function_exists( 'rbth_content_with_sidebar_output' ) ) {
	/**
	 * Render content with sidebar layout based on ACF or Customizer settings.
	 *
	 * Logic:
	 * 1. If choose_sidebar === 'special' (ACF) and ACF is active => use ACF field 'sidebar_position'
	 * 2. Elseif theme mod rbth_sidebar_choose === 'custom' => try ACF 'rbth_sidebar_position' then fallback to theme mod 'rbth_sidebar_position'
	 * 3. Else => default rendering that respects RTL (sidebar left for RTL, right for LTR)
	 */
	function rbth_content_with_sidebar_output() {
		// Get choose_sidebar (ACF if available, otherwise theme mod).
		$sidebar_choose   = function_exists( 'get_field' ) ? get_field( 'choose_sidebar' ) : get_theme_mod( 'rbth_sidebar_choose', 'default' );
		$sidebar_position = '';

		// 1) special (per-post ACF)
		if ( 'special' === $sidebar_choose && function_exists( 'get_field' ) ) {
			$sidebar_position = get_field( 'sidebar_position' );
		} elseif ( 'custom' === get_theme_mod( 'rbth_sidebar_choose' ) ) {
			// try ACF value first (if ACF used to store this), otherwise fallback to theme mod.
			if ( function_exists( 'get_field' ) ) {
				$sidebar_position = get_field( 'rbth_sidebar_position' );
			}
			if ( empty( $sidebar_position ) ) {
				$sidebar_position = get_theme_mod( 'rbth_sidebar_position', 'no-sidebar' );
			}
		}

		// Helper: normalize the position string for more robust matching.
		if ( ! empty( $sidebar_position ) ) {
			$pos = sanitize_text_field( strtolower( str_replace( array( ' ', '_' ), '-', (string) $sidebar_position ) ) );

			$left_variants  = array( 'left-sidebar', 'sidebar-left', 'left' );
			$right_variants = array( 'right-sidebar', 'sidebar-right', 'right' );
			$none_variants  = array( 'no-sidebar', 'nosidebar', 'none' );

			if ( in_array( $pos, $none_variants, true ) ) {
				// No sidebar.
				get_template_part( 'template-parts/content/content' );
				return;
			} elseif ( in_array( $pos, $left_variants, true ) ) {
				// Sidebar left.
				get_sidebar();
				get_template_part( 'template-parts/content/content' );
				return;
			} elseif ( in_array( $pos, $right_variants, true ) ) {
				// Sidebar right.
				get_template_part( 'template-parts/content/content' );
				get_sidebar();
				return;
			}
			// If it didn't match any known token, fall through to RTL-default below.
		}

		// 3) Default behavior: respect RTL (sidebar left) else show content then sidebar (sidebar right)
		if ( is_rtl() ) {
			get_sidebar();
			get_template_part( 'template-parts/content/content' );
		} else {
			get_template_part( 'template-parts/content/content' );
			get_sidebar();
		}
	}
	do_action( 'rbth_content_with_sidebar', 'rbth_content_with_sidebar_output' );
}
