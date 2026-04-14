<?php
/**
 * Common frontend output actions.
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'rbth_transparent_header' ) ) {
	/**
	 * Determines and sets the global transparent header class.
	 *
	 * @return void
	 */
	function rbth_transparent_header() {
		global $rbth_transparent_header;

		$rbth_transparent_header = ''; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude

		// Get global Kirki option.
		$kirki_on = get_theme_mod( 'rbth_header_transparent', false );

		// Stop if global setting is off.
		if ( ! $kirki_on ) {
			return;
		}

		// Default.
		$page_transparent = ''; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude

		// Get the current queried object ID.
		$queried_id = get_queried_object_id();

		// Get per-page ACF choice if ACF is active.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_transparent = get_field( 'header_transparent', $queried_id );
		}

		// Set transparent header class only if not disabled via ACF.
		if ( 'disable' !== $page_transparent ) {
			$rbth_transparent_header = 'transparent-header'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
		}
	}
}

if ( ! function_exists( 'rbth_sticky_header' ) ) {
	/**
	 * Determines and sets the global sticky header class.
	 *
	 * @return void
	 */
	function rbth_sticky_header() {
		global $rbth_sticky_header;

		$rbth_sticky_header = ''; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude

		// Get global Kirki option.
		$kirki_on = get_theme_mod( 'rbth_header_sticky', false );

		// Default ACF value.
		$page_sticky = ''; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude

		// Get the current queried object ID.
		$queried_id = get_queried_object_id();

		// Get per-page ACF choice if ACF is active.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_sticky = get_field( 'header_sticky', $queried_id );
		}

		// Determine sticky header class.
		if ( ! $kirki_on ) {
			// Global setting OFF → always disable.
			$rbth_sticky_header = 'sticky-header-disable'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
		} elseif ( 'disable' === $page_sticky ) {
			// Global ON but page disables sticky header.
			$rbth_sticky_header = 'sticky-header-disable'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
		} else {
			// Global ON and not disabled per-page.
			$rbth_sticky_header = 'sticky-header-enable'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude
		}
	}
}

if ( ! function_exists( 'rbth_render_post_meta' ) ) {
	/**
	 * Render post meta items in chosen order if enabled.
	 */
	function rbth_render_post_meta() {

		// Get the switch value (0/1).
		$rbth_meta_list_on_off = get_theme_mod( 'rbth_meta_list_on_off', 0 );

		// If not enabled, exit early.
		if ( 1 !== (int) $rbth_meta_list_on_off ) {
			return;
		}

		// Get the meta list order.
		$rbth_meta_list = get_theme_mod(
			'rbth_meta_list',
			array( 'author_meta', 'comment_meta' ) // default.
		);

		if ( ! empty( $rbth_meta_list ) && is_array( $rbth_meta_list ) ) {
			foreach ( $rbth_meta_list as $rbth_meta_item ) {
				// Only load if the file exists.
				if ( locate_template( 'template-parts/post-meta/' . $rbth_meta_item . '.php' ) ) {
					get_template_part( 'template-parts/post-meta/' . $rbth_meta_item );
				}
			}
		}
	}
}

if ( ! function_exists( 'rbth_render_post_meta_single' ) ) {
	/**
	 * Render post meta items in chosen order if enabled.
	 */
	function rbth_render_post_meta_single() {

		// Get the switch value (0/1).
		$rbth_meta_list_on_off = get_theme_mod( 'rbth_meta_list_on_off_single_page', 0 );

		// If not enabled, exit early.
		if ( 1 !== (int) $rbth_meta_list_on_off ) {
			return;
		}

		// Get the meta list order.
		$rbth_meta_list = get_theme_mod(
			'rbth_meta_list_single_page',
			array( 'author-meta', 'comment-meta' ) // default.
		);

		if ( ! empty( $rbth_meta_list ) && is_array( $rbth_meta_list ) ) {
			foreach ( $rbth_meta_list as $rbth_meta_item ) {
				// Only load if the file exists.
				if ( locate_template( 'template-parts/post-meta/' . $rbth_meta_item . '.php' ) ) {
					get_template_part( 'template-parts/post-meta/' . $rbth_meta_item );
				}
			}
		}
	}
}
