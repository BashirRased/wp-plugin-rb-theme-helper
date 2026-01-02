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
		global $transparent_header;

		$transparent_header = '';

		// Get global Kirki option.
		$kirki_on = get_theme_mod( 'rbth_header_transparent', false );

		// Stop if global setting is off.
		if ( ! $kirki_on ) {
			return;
		}

		// Default.
		$page_transparent = '';

		// Get the current queried object ID.
		$queried_id = get_queried_object_id();

		// Get per-page ACF choice if ACF is active.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_transparent = get_field( 'header_transparent', $queried_id );
		}

		// Set transparent header class only if not disabled via ACF.
		if ( 'disable' !== $page_transparent ) {
			$transparent_header = 'transparent-header';
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
		global $sticky_header;

		$sticky_header = '';

		// Get global Kirki option.
		$kirki_on = get_theme_mod( 'rbth_header_sticky', false );

		// Default ACF value.
		$page_sticky = '';

		// Get the current queried object ID.
		$queried_id = get_queried_object_id();

		// Get per-page ACF choice if ACF is active.
		if ( $queried_id && function_exists( 'get_field' ) ) {
			$page_sticky = get_field( 'header_sticky', $queried_id );
		}

		// Determine sticky header class.
		if ( ! $kirki_on ) {
			// Global setting OFF → always disable.
			$sticky_header = 'sticky-header-disable';
		} elseif ( 'disable' === $page_sticky ) {
			// Global ON but page disables sticky header.
			$sticky_header = 'sticky-header-disable';
		} else {
			// Global ON and not disabled per-page.
			$sticky_header = 'sticky-header-enable';
		}
	}
}

if ( ! function_exists( 'rbth_render_blog_element' ) ) {
	/**
	 * Render blog elements in chosen order with a dynamic content wrapper for meta and title.
	 *
	 * @param string $wrapper_class Class for wrapping post-meta and post-title.
	 */
	function rbth_render_blog_element( $wrapper_class = 'blog-list__content' ) {

		// Get the element order from Customizer.
		$element_list = get_theme_mod(
			'rbth_element_sorting',
			array( 'post-thumbnail', 'post-meta', 'post-title' ) // default.
		);

		if ( empty( $element_list ) || ! is_array( $element_list ) ) {
			return;
		}

		$open_wrapper = false;

		foreach ( $element_list as $element_item ) {

			// Post-thumbnail outside wrapper.
			if ( 'post-thumbnail' === $element_item ) {
				if ( locate_template( 'template-parts/post-element/post-thumbnail.php' ) ) {
					get_template_part( 'template-parts/post-element/post-thumbnail' );
				}
				continue;
			}

			// Open wrapper if it's the first post-meta or post-title.
			if ( ! $open_wrapper && in_array( $element_item, array( 'post-meta', 'post-title' ), true ) ) {
				echo '<div class="' . esc_attr( $wrapper_class ) . '">';
				$open_wrapper = true;
			}

			// Render element if exists.
			if ( locate_template( 'template-parts/post-element/' . $element_item . '.php' ) ) {
				get_template_part( 'template-parts/post-element/' . $element_item );
			}
		}

		// Close wrapper if opened.
		if ( $open_wrapper ) {
			get_template_part( 'template-parts/post-element/post-excerpt' );
			echo '</div>';
		}
	}
}

if ( ! function_exists( 'rbth_render_blog_element_single' ) ) {
	/**
	 * Render blog elements in chosen order with a dynamic content wrapper for meta and title.
	 *
	 * @param string $wrapper_class Class for wrapping post-meta and post-title.
	 */
	function rbth_render_blog_element_single( $wrapper_class = 'blog-list__content' ) {

		// Get the element order from Customizer.
		$element_list = get_theme_mod(
			'rbth_element_sorting_single_page',
			array( 'post-thumbnail', 'post-meta', 'post-title' ) // default.
		);

		if ( empty( $element_list ) || ! is_array( $element_list ) ) {
			return;
		}

		$open_wrapper = false;

		foreach ( $element_list as $element_item ) {

			// Post-thumbnail outside wrapper.
			if ( 'post-thumbnail' === $element_item ) {
				if ( locate_template( 'template-parts/post-element/post-thumbnail.php' ) ) {
					get_template_part( 'template-parts/post-element/post-thumbnail' );
				}
				continue;
			}

			// Open wrapper if it's the first post-meta or post-title.
			if ( ! $open_wrapper && in_array( $element_item, array( 'post-meta', 'post-title' ), true ) ) {
				echo '<div class="' . esc_attr( $wrapper_class ) . '">';
				$open_wrapper = true;
			}

			// Render element if exists.
			if ( locate_template( 'template-parts/post-element/' . $element_item . '.php' ) ) {
				get_template_part( 'template-parts/post-element/' . $element_item );
			}
		}

		// Close wrapper if opened.
		if ( $open_wrapper ) {
			if ( is_singular() ) {
				get_template_part( 'template-parts/post-element/post-content' );
			} else {
				get_template_part( 'template-parts/post-element/post-excerpt' );
			}
			echo '</div>';
		}
	}
}

if ( ! function_exists( 'rbth_render_post_meta' ) ) {
	/**
	 * Render post meta items in chosen order if enabled.
	 */
	function rbth_render_post_meta() {

		// Get the switch value (0/1).
		$meta_list_on_off = get_theme_mod( 'rbth_meta_list_on_off', 0 );

		// If not enabled, exit early.
		if ( 1 !== (int) $meta_list_on_off ) {
			return;
		}

		// Get the meta list order.
		$meta_list = get_theme_mod(
			'rbth_meta_list',
			array( 'author_meta', 'comment_meta' ) // default.
		);

		if ( ! empty( $meta_list ) && is_array( $meta_list ) ) {
			foreach ( $meta_list as $meta_item ) {
				do_action( 'rb_blog_one_' . $meta_item );
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
		$meta_list_on_off = get_theme_mod( 'rbth_meta_list_on_off_single_page', 0 );

		// If not enabled, exit early.
		if ( 1 !== (int) $meta_list_on_off ) {
			return;
		}

		// Get the meta list order.
		$meta_list = get_theme_mod(
			'rbth_meta_list_single_page',
			array( 'author-meta', 'comment-meta' ) // default.
		);

		if ( ! empty( $meta_list ) && is_array( $meta_list ) ) {
			foreach ( $meta_list as $meta_item ) {
				// Only load if the file exists.
				if ( locate_template( 'template-parts/post-meta/' . $meta_item . '.php' ) ) {
					get_template_part( 'template-parts/post-meta/' . $meta_item );
				}
			}
		}
	}
}
