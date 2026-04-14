<?php
/**
 * The template for displaying all custom post types.
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

/**
 * ============================
 * ----- CONTENT OF TABLE -----
 * ============================
 * +++++  01. Custom Post Type - Home Section
 * +++++  02. Custom Post Type - Portfolio
 * +++++  03. Custom Post Type - Service
 * +++++  04. Custom Post Type - Project
 * +++++  05. Custom Post Type - Event
 * +++++  06. Custom Post Type - Donation
 * +++++  07. Custom Post Type - Team
 * +++++  08. Custom Post Type - Travel
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * 01. Custom Post Type - Home Section
 */
if ( ! function_exists( 'rbth_post_type_home_section' ) ) {
	/**
	 * Register Home Section post type.
	 */
	function rbth_post_type_home_section() {
		$labels = array(
			'name'                  => esc_html_x( 'Home Sections', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Home Section', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Home Sections', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Home Section', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Home Section', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Home Section', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Home Section', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Home Section', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Home Sections', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Home Sections', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Home Sections:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No Home Sections found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No Home Sections found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Home Section Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set home_section image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove home_section image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as home_section image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Home Section archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into home_section', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this home_section', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Home Sections list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Home Sections list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter Home Sections list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_home_section_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'home_section' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 31,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'home_section', $args );
	}
	add_action( 'init', 'rbth_post_type_home_section' );

	/**
	 * Home Section Dashboard Icon
	 */
	function rbth_post_type_home_section_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMCw2LjE4OGMwLjE0NS0wLjQsMC40MzgtMC41MjksMC44NTEtMC41MjgNCgkJYzIuODk2LDAuMDA5LDUuNzksMC4wMDUsOC42ODYsMC4wMDVjMC41NDksMCwwLjc5OSwwLjI1MiwwLjc5OSwwLjgwNWMwLjAwMSwxLjAyMSwwLjAwMSwyLjA0MSwwLDMuMDYyDQoJCWMwLDAuNTUyLTAuMjUxLDAuODA1LTAuNzk5LDAuODA1Yy0yLjg5NSwwLjAwMS01Ljc5LTAuMDA0LTguNjg2LDAuMDA1QzAuNDM5LDEwLjM0MSwwLjE0NSwxMC4yMTIsMCw5LjgxM0MwLDguNjA0LDAsNy4zOTYsMCw2LjE4OA0KCQl6Ii8+DQoJPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNBN0FBQUQiIGQ9Ik0wLDExLjg0NGMwLjA2OC0wLjEwOCwwLjEyNC0wLjIyNywwLjIwOC0wLjMyMQ0KCQljMC4xMjMtMC4xMzksMC4yOTMtMC4xODgsMC40NzktMC4xODhjMC4zOTEsMC4wMDIsMC43OCwwLjAwMSwxLjE3MSwwLjAwMWMyLjU2MSwwLDUuMTIsMC4wMDcsNy42ODEtMC4wMDcNCgkJYzAuNTM2LTAuMDAzLDAuODExLDAuMzM1LDAuODAzLDAuODA3Yy0wLjAxNywxLjAwNC0wLjAxNiwyLjAwOS0wLjAwMSwzLjAxM2MwLjAwNywwLjQxMy0wLjEzLDAuNzA1LTAuNTI3LDAuODUyDQoJCWMtMy4wOTUsMC02LjE4OCwwLTkuMjgxLDBDMC4yNjQsMTUuOTEyLDAuMDg2LDE1LjczNSwwLDE1LjQ2OEMwLDE0LjI2LDAsMTMuMDUyLDAsMTEuODQ0eiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTYsOS44MTNjLTAuMTQ2LDAuMzk4LTAuNDM4LDAuNTM0LTAuODUyLDAuNTI3DQoJCWMtMS4wMTUtMC4wMTUtMi4wMjktMC4wMDQtMy4wNDQtMC4wMDVjLTAuNTExLDAtMC43NjktMC4yNTgtMC43NjktMC43NjdjLTAuMDAxLTEuMDUyLTAuMDAxLTIuMTAzLDAtMy4xNTMNCgkJYzAtMC40ODgsMC4yNjQtMC43NTEsMC43NTMtMC43NTFjMS4wMjEtMC4wMDEsMi4wNCwwLjAxLDMuMDYxLTAuMDA1QzE1LjU2Miw1LjY1MywxNS44NTQsNS43ODgsMTYsNi4xODgNCgkJQzE2LDcuMzk2LDE2LDguNjA0LDE2LDkuODEzeiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNOS44MTMsMGMwLjM5OSwwLjE0NSwwLjUzMywwLjQzOCwwLjUyNywwLjg1MQ0KCQljLTAuMDE0LDEuMDE1LTAuMDA0LDIuMDI5LTAuMDA1LDMuMDQ0YzAsMC41MS0wLjI1OSwwLjc2OS0wLjc2NywwLjc3Yy0xLjA0NiwwLTIuMDkyLDAtMy4xMzksMA0KCQljLTAuNTA5LTAuMDAxLTAuNzY2LTAuMjU5LTAuNzY2LTAuNzdDNS42NjMsMi44OCw1LjY3MywxLjg2NCw1LjY1OSwwLjg1QzUuNjUzLDAuNDM4LDUuNzg3LDAuMTQ1LDYuMTg4LDBDNy4zOTYsMCw4LjYwNCwwLDkuODEzLDANCgkJeiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNNC4xNTYsMGMwLjAzLDAuMDE3LDAuMDYxLDAuMDM1LDAuMDkyLDAuMDQ5DQoJCUM0LjUxLDAuMTY3LDQuNjYsMC4zNjcsNC42NjEsMC42NTZDNC42NjUsMS43NzUsNC42NjYsMi44OTYsNC42Niw0LjAxNUM0LjY1OCw0LjM4Miw0LjM4Miw0LjY1OCw0LjAxNSw0LjY2DQoJCUMyLjg5Niw0LjY2NiwxLjc3NSw0LjY2NCwwLjY1Niw0LjY2MkMwLjMxMiw0LjY2MSwwLjEyNSw0LjQ0NSwwLDQuMTU2YzAtMS4yMDksMC0yLjQxNywwLTMuNjI1QzAuMDg2LDAuMjY0LDAuMjYzLDAuMDg2LDAuNTMxLDANCgkJQzEuNzM5LDAsMi45NDcsMCw0LjE1NiwweiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTYsNC4xNTZjLTAuMDE4LDAuMDMtMC4wMzYsMC4wNjEtMC4wNSwwLjA5Mg0KCQljLTAuMTE4LDAuMjYyLTAuMzE3LDAuNDEyLTAuNjA3LDAuNDEzYy0xLjExOSwwLjAwNC0yLjIzOSwwLjAwNS0zLjM1OC0wLjAwMWMtMC4zNjgtMC4wMDItMC42NDQtMC4yNzgtMC42NDYtMC42NDYNCgkJYy0wLjAwNi0xLjExOS0wLjAwNC0yLjIzOS0wLjAwMi0zLjM1OEMxMS4zMzgsMC4zMTIsMTEuNTU0LDAuMTI1LDExLjg0NCwwYzEuMjA4LDAsMi40MTYsMCwzLjYyNCwwDQoJCUMxNS43MzYsMC4wODYsMTUuOTEyLDAuMjY0LDE2LDAuNTMxQzE2LDEuNzM5LDE2LDIuOTQ3LDE2LDQuMTU2eiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTEuODQ0LDE2Yy0wLjAzMS0wLjAxNy0wLjA2MS0wLjAzNS0wLjA5My0wLjA1DQoJCWMtMC4yNjEtMC4xMTgtMC40MTItMC4zMTctMC40MTMtMC42MDdjLTAuMDA0LTEuMTE5LTAuMDA1LTIuMjM5LDAuMDAxLTMuMzU4YzAuMDAyLTAuMzY4LDAuMjc3LTAuNjQ1LDAuNjQ2LTAuNjQ2DQoJCWMxLjExOS0wLjAwNiwyLjIzOS0wLjAwNSwzLjM1OC0wLjAwMWMwLjI5LDAuMDAxLDAuNDg5LDAuMTUxLDAuNjA3LDAuNDEzYzAuMDE1LDAuMDMyLDAuMDMzLDAuMDYyLDAuMDUsMC4wOTMNCgkJYzAsMS4yMDgsMCwyLjQxNiwwLDMuNjI0Yy0wLjA4NywwLjI2OC0wLjI2NSwwLjQ0NC0wLjUzMiwwLjUzMkMxNC4yNiwxNiwxMy4wNTIsMTYsMTEuODQ0LDE2eiIvPg0KPC9nPg0KPC9zdmc+DQo=';
	}
}

/**
 * 02. Custom Post Type - Portfolio
 */
if ( ! function_exists( 'rbth_post_type_portfolio' ) ) {
	/**
	 * Register Portfolio post type.
	 */
	function rbth_post_type_portfolio() {
		$labels = array(
			'name'                  => esc_html_x( 'Portfolios', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Portfolio', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Portfolios', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Portfolio', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Portfolio', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Portfolio', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Portfolio', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Portfolio', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Portfolios', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Portfolios', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Portfolios:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No portfolios found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No portfolios found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Portfolio Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set portfolio image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove portfolio image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as portfolio image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Portfolio archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into portfolio', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this portfolio', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Portfolios list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Portfolios list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter portfolios list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_portfolio_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'portfolio' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 32,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'portfolio', $args );
	}
	add_action( 'init', 'rbth_post_type_portfolio' );

	/**
	 * Portfolio Dashboard Icon
	 */
	function rbth_post_type_portfolio_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMCwxMy4wNjNjMC0xLjc3MSwwLTMuNTQxLDAtNS4zMTINCgkJYzAuMDE1LDAuMDAzLDAuMDMsMC4wMDUsMC4wNDYsMC4wMUMyLjQ4Miw4LjU3Myw0LjkyMSw5LjM3OSw3LjM1NCwxMC4yYzAuNDQxLDAuMTQ5LDAuODUzLDAuMTQ5LDEuMjkzLDAuMDAxDQoJCWMyLjQ0OC0wLjgyNCw0LjkwMS0xLjYzNSw3LjM1NC0yLjQ1YzAsMS43NzEsMCwzLjU0MiwwLDUuMzEyYy0wLjA1NCwwLjE3NC0wLjA4NywwLjM1Ni0wLjE2NSwwLjUxOA0KCQljLTAuMzUxLDAuNzI3LTAuOTM4LDEuMDg1LTEuNzQ2LDEuMDg1Yy00LjA2LTAuMDAxLTguMTE5LTAuMDAxLTEyLjE3OS0wLjAwMWMtMC4wNTMsMC0wLjEwNCwwLTAuMTU2LTAuMDAyDQoJCWMtMC43ODItMC4wMjgtMS40NzktMC41NzctMS42ODYtMS4zMjlDMC4wNDQsMTMuMjQ1LDAuMDIyLDEzLjE1NCwwLDEzLjA2M3oiLz4NCgk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0E3QUFBRCIgZD0iTTAsNi42ODljMC0wLjU4MywwLTEuMTY3LDAtMS43NQ0KCQlDMC4wMDgsNC45MiwwLjAyLDQuOTAxLDAuMDIyLDQuODgyYzAuMTA5LTAuODA5LDAuODU4LTEuNTc3LDEuOTM0LTEuNTVjMS4wNjIsMC4wMjYsMi4xMjMsMC4wMDYsMy4xODUsMC4wMDYNCgkJYzAuMDYxLDAsMC4xMjEsMCwwLjE5OCwwYzAtMC4yNjMtMC4wMDgtMC41MDEsMC4wMDItMC43NGMwLjAyNS0wLjY3NywwLjU3Ny0xLjI0MywxLjI1NC0xLjI1M2MwLjkzNy0wLjAxNSwxLjg3My0wLjAxNCwyLjgxLDAuMDA0DQoJCWMwLjE5OSwwLjAwMywwLjQxNCwwLjA3NCwwLjU5LDAuMTcxYzAuNDIsMC4yMzMsMC42NDYsMC42MDgsMC42NjUsMS4wOTRjMC4wMSwwLjIzNywwLjAwMiwwLjQ3NCwwLjAwMiwwLjcyNA0KCQljMC4wODksMCwwLjE1MSwwLDAuMjEzLDBjMS4wOTMsMCwyLjE4Ni0wLjAwMywzLjI3OCwwLjAwMWMwLjgzMywwLjAwNCwxLjUyMSwwLjUxLDEuNzYzLDEuMjg2YzAuMDMyLDAuMTA0LDAuMDU3LDAuMjEsMC4wODUsMC4zMTUNCgkJYzAsMC41ODMsMCwxLjE2NywwLDEuNzVjLTAuMDE1LDAuMDA3LTAuMDI3LDAuMDE2LTAuMDQzLDAuMDIxQzEzLjM3Myw3LjU3LDEwLjc5LDguNDMzLDguMjAzLDkuMjg2DQoJCUM4LjA3NSw5LjMyOCw3LjkwOSw5LjMyMyw3Ljc4MSw5LjI4MUM2LjMzNCw4LjgwOSw0Ljg5LDguMzI0LDMuNDQ0LDcuODQyQzIuMjk2LDcuNDU5LDEuMTQ4LDcuMDczLDAsNi42ODl6IE02LjY3MiwzLjMyNg0KCQljMC44OTYsMCwxLjc3MSwwLDIuNjUzLDBjMC0wLjIyMiwwLTAuNDMzLDAtMC42NDZjLTAuODkyLDAtMS43NzEsMC0yLjY1MywwQzYuNjcyLDIuOTAxLDYuNjcyLDMuMTA3LDYuNjcyLDMuMzI2eiIvPg0KPC9nPg0KPC9zdmc+DQo=';
	}
}

/**
 * 03. Custom Post Type - Service
 */
if ( ! function_exists( 'rbth_post_type_service' ) ) {
	/**
	 * Register Service post type.
	 */
	function rbth_post_type_service() {
		$labels = array(
			'name'                  => esc_html_x( 'Services', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Service', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Services', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Service', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Service', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Service', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Service', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Service', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Services', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Services', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Services:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No services found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No services found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Service Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set service image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove service image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as service image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Service archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into service', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this service', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Services list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Services list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter services list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_service_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'service' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 33,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'service', $args );
	}
	add_action( 'init', 'rbth_post_type_service' );

	/**
	 * Service Dashboard Icon
	 */
	function rbth_post_type_service_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTYsOC4wNTRjLTAuMDIzLDAuMzY4LTAuMDA2LDAuNzQ1LTAuMDc3LDEuMTA0DQoJCWMtMC4yMzYsMS4yMDItMS4zNjksMS45ODItMi41NzgsMS44MDJjLTAuMTE5LTAuMDE4LTAuMTgyLDAuMDE3LTAuMjQ4LDAuMTEzYy0wLjk2NywxLjM4NC0yLjI4MiwyLjI0Mi0zLjkzNiwyLjU3OA0KCQljLTAuMTEzLDAuMDIzLTAuMTcyLDAuMDY2LTAuMjIsMC4xNzFjLTAuMjcsMC41OC0wLjkxMSwwLjg4NC0xLjUyNywwLjczMWMtMC42MDgtMC4xNS0xLjA0My0wLjcxOS0xLjAyMS0xLjMzOQ0KCQljMC4wMjEtMC42NDMsMC40OTItMS4xODEsMS4xMjUtMS4yODZjMC41NC0wLjA5MSwxLjA5MiwwLjE2NCwxLjM2NywwLjY0OGMwLjA2NCwwLjExMywwLjEyNiwwLjEyOCwwLjI0MSwwLjEwMg0KCQljMi4xNjItMC40OSwzLjc1Ny0yLjIyOSw0LjA1MS00LjQyM2MwLjM2Ni0yLjczNC0xLjUzNC01LjMzOS00LjI0MS01LjgxMmMtMi44MTItMC40OS01LjQ0LDEuMjY2LTYuMDQ3LDQuMDYxDQoJCWMtMC4yNjYsMS4yMjQtMC4wODgsMi40LDAuNDkyLDMuNTEzYzAuMjIzLDAuNDI2LDAuMTEyLDAuNzAxLTAuMzQ1LDAuODU0Yy0xLjQ0LDAuNDgyLTIuOTYyLTAuNTU4LTMuMDIxLTIuMDgyDQoJCWMtMC4wMjEtMC41NzItMC4wMjgtMS4xNTEsMC4wMjgtMS43MjFjMC4xMDMtMS4wMzEsMS4wMzItMS44ODYsMi4wNjgtMS45NDVjMC4xNjMtMC4wMDksMC4yMzMtMC4wNywwLjMwNy0wLjIxMQ0KCQlDMy42NCwyLjU3Miw1LjU3NiwxLjMzLDguMjE1LDEuNDExYzIuNDc0LDAuMDc2LDQuMjY1LDEuMzQxLDUuMzgyLDMuNTQ4YzAuMDU3LDAuMTExLDAuMTE0LDAuMTUzLDAuMjM4LDAuMTYxDQoJCWMxLjE5NCwwLjA3LDIuMTMzLDEuMDU4LDIuMTQ5LDIuMjU2YzAuMDAzLDAuMjI2LDAsMC40NTEsMCwwLjY3NkMxNS45ODksOC4wNTMsMTUuOTk1LDguMDUzLDE2LDguMDU0eiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNNy45NDQsMy41MjJjMi4xNDEtMC4wMDcsMy45MDcsMS42MTIsNC4wODYsMy43MDINCgkJYzAuMTg1LDIuMTU1LTEuMzQ3LDQuMDgtMy40NzksNC4zNjljLTAuNDk0LDAuMDY3LTAuOTg0LDAuMDQyLTEuNDczLTAuMDY0Yy0wLjA3My0wLjAxNi0wLjE3MSwwLTAuMjM3LDAuMDM3DQoJCWMtMC41MDUsMC4yODMtMS4wMDMsMC41NzktMS41MDcsMC44NjRjLTAuMzIzLDAuMTgyLTAuNjg2LDAuMDE1LTAuNzM2LTAuMzM5Yy0wLjAxMy0wLjA4NiwwLjAwNi0wLjE4MiwwLjAyOC0wLjI2OQ0KCQljMC4xMTYtMC40NDUsMC4yMzMtMC44OTIsMC4zNi0xLjMzNGMwLjAzMi0wLjExMiwwLjAxLTAuMTg0LTAuMDYzLTAuMjcyQzMuOTM4LDkuMDA0LDMuNjU4LDcuNjQyLDQuMjA0LDYuMTc1DQoJCWMwLjU0OC0xLjQ2OSwxLjY0NC0yLjMzLDMuMTkzLTIuNjA0QzcuNDYxLDMuNTYsNy41MjQsMy41NTEsNy41ODksMy41NDZDNy43MjMsMy41MzUsNy44NTYsMy41MjgsNy45NDQsMy41MjJ6IE03Ljk5NSw4LjA1OA0KCQljMC4yNjctMC4wMDEsMC40ODEtMC4yMTEsMC40ODMtMC40NzVjMC4wMDMtMC4yNjktMC4yMjQtMC40OTQtMC40ODktMC40ODlDNy43MjgsNy4wOTksNy41MTIsNy4zMTksNy41MTQsNy41ODENCgkJQzcuNTE1LDcuODQ2LDcuNzI5LDguMDYsNy45OTUsOC4wNTh6IE02LjM4NCw4LjA1OEM2LjY1LDguMDU5LDYuODY0LDcuODUsNi44NjgsNy41ODRjMC4wMDQtMC4yNTktMC4yMTMtMC40ODMtMC40NzItMC40OQ0KCQlDNi4xMzEsNy4wODcsNS45MDIsNy4zMTMsNS45MDMsNy41OEM1LjkwNCw3Ljg0NSw2LjExNyw4LjA1Nyw2LjM4NCw4LjA1OHogTTkuNjAxLDguMDU4YzAuMjY4LDAuMDAzLDAuNDgzLTAuMjA0LDAuNDg5LTAuNDY5DQoJCWMwLjAwNi0wLjI2Ni0wLjIyLTAuNDk2LTAuNDg0LTAuNDk1Yy0wLjI2MSwwLjAwMS0wLjQ3OSwwLjIyMS0wLjQ4LDAuNDgxQzkuMTIzLDcuODQxLDkuMzM1LDguMDU1LDkuNjAxLDguMDU4eiIvPg0KPC9nPg0KPC9zdmc+DQo=';
	}
}

/**
 * 04. Custom Post Type - Project
 */
if ( ! function_exists( 'rbth_post_type_project' ) ) {
	/**
	 * Register Project post type.
	 */
	function rbth_post_type_project() {
		$labels = array(
			'name'                  => esc_html_x( 'Projects', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Project', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Projects', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Project', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Project', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Project', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Project', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Project', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Projects', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Projects', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Projects:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No projects found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No projects found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Project Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set project image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove project image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as project image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Project archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into project', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this project', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Projects list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Projects list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter projects list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_project_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'project' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 34,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'project', $args );
	}
	add_action( 'init', 'rbth_post_type_project' );

	/**
	 * Project Dashboard Icon
	 */
	function rbth_post_type_project_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNNS41NzUsMTQuMDcyYy0wLjA1NywwLTAuMDk1LDAtMC4xMzMsMA0KCQljLTEuMDQsMC0yLjA4LDAuMDA0LTMuMTItMC4wMDFjLTAuNjA0LTAuMDAzLTEuMTQ3LTAuNDA5LTEuMzA1LTAuOTYzYy0wLjE5NS0wLjY4NCwwLjE5Ny0xLjQwOSwwLjg3Ny0xLjYyMg0KCQljMC42ODgtMC4yMTUsMS40MjQsMC4xNjEsMS42NTIsMC44NDdjMC4wMTcsMC4wNTEsMC4wMzEsMC4xMDQsMC4wNjksMC4xNTJjMC0zLjE5NCwwLTYuMzksMC05LjYwNmMwLjA3NSwwLDAuMTM1LDAsMC4xOTUsMA0KCQljMy43MTYsMCw3LjQzMiwwLDExLjE0NywwYzAuNDI4LDAsMC41OTMsMC4xNjQsMC41OTMsMC41OWMwLDMuMzM5LDAsNi42NzksMCwxMC4wMThjMCwwLjQyMS0wLjE2NCwwLjU2MS0wLjU3NiwwLjU5Mw0KCQljLTAuMzU2LDAuMDI4LTAuNTk2LTAuMDk4LTAuODQ1LTAuMzVjLTIuMzE1LTIuMzM2LTQuNjQ1LTQuNjU2LTYuOTY4LTYuOTg0Yy0wLjIzNy0wLjIzOC0wLjUwNC0wLjM3Ny0wLjg0NS0wLjMyDQoJCUM1Ljg3Miw2LjUsNS41NzcsNi44NjIsNS41NzUsNy4zMzNjLTAuMDAzLDAuOTQ0LDAsMS44ODksMCwyLjgzM2MwLDEuMjI1LDAsMi40NSwwLDMuNjc3QzUuNTc1LDEzLjkxLDUuNTc1LDEzLjk3OCw1LjU3NSwxNC4wNzJ6Ig0KCQkvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTAuNjI1LDE1Ljk5OWMtMS4zNSwwLTIuNjk5LDAtNC4wNDgsMA0KCQljLTAuMzY2LDAtMC40ODMtMC4xMTgtMC40ODMtMC40ODRjMC0yLjcwNCwwLTUuNDA4LDAtOC4xMTJjMC0wLjM1MywwLjIxOS0wLjU1NCwwLjQ5LTAuNDQ4QzYuNjQ5LDYuOTgsNi43MDksNy4wMjksNi43Niw3LjA4DQoJCWMyLjc1MiwyLjc1LDUuNTAyLDUuNTAxLDguMjUzLDguMjUxYzAuMTI4LDAuMTI3LDAuMTg4LDAuMjY5LDAuMTE5LDAuNDM5QzE1LjA2MywxNS45NDQsMTQuOTIsMTYsMTQuNzM5LDE2DQoJCUMxMy4zNjcsMTUuOTk4LDExLjk5NiwxNS45OTksMTAuNjI1LDE1Ljk5OXogTTExLjQ4NiwxNC4yOWMtMS4yMjktMS4yMjktMi40NjUtMi40NjUtMy42NzgtMy42NzhjMCwxLjE5NSwwLDIuNDM1LDAsMy42NzgNCgkJQzkuMDU1LDE0LjI5LDEwLjI4OCwxNC4yOSwxMS40ODYsMTQuMjl6Ii8+DQoJPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNBN0FBQUQiIGQ9Ik0zLjEwMiwxMS4wODhjLTAuNTgtMC4yNDEtMS4xMzctMC4yNDctMS42NzYsMC4wNDINCgkJYy0wLjUzOSwwLjI5LTAuODQ0LDAuNzU1LTAuOTc4LDEuMzQ3YzAtMC4wNDMsMC0wLjA4NSwwLTAuMTI4YzAtMy4xNzEtMC4wMDEtNi4zNDIsMC05LjUxM2MwLTAuNjQ1LDAuMzI5LTEuMTM0LDAuODktMS4zMzMNCgkJQzIuMTgzLDEuMjAzLDMuMDUzLDEuODAzLDMuMSwyLjcxOUMzLjEwMywyLjc3LDMuMTAyLDIuODIsMy4xMDIsMi44NzFjMCwyLjY3LDAsNS4zNDEsMCw4LjAxMQ0KCQlDMy4xMDIsMTAuOTQxLDMuMTAyLDExLjAwMiwzLjEwMiwxMS4wODh6Ii8+DQoJPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNBN0FBQUQiIGQ9Ik03LjU4OCwyLjIzMmMwLTAuNzQsMC0xLjQ3MywwLTIuMjE5YzEuNTk1LDAsMy4xODcsMCw0Ljc5MywwDQoJCWMwLDAuNzM0LDAsMS40NzEsMCwyLjIxOUMxMC43ODQsMi4yMzIsOS4xOTEsMi4yMzIsNy41ODgsMi4yMzJ6Ii8+DQoJPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNBN0FBQUQiIGQ9Ik0xMi45MjIsMi4yNGMwLTAuNzU4LDAtMS40ODYsMC0yLjI0DQoJCWMwLjI2NSwwLDAuNTI2LTAuMDAzLDAuNzg3LDAuMDA0YzAuMDMzLDAuMDAxLDAuMDczLDAuMDQ0LDAuMDk3LDAuMDc4YzAuNDU1LDAuNjM0LDAuNDU1LDEuNDUsMCwyLjA3Ng0KCQljLTAuMDI2LDAuMDM2LTAuMDc1LDAuMDc3LTAuMTE1LDAuMDc5QzEzLjQ0LDIuMjQ0LDEzLjE4OCwyLjI0LDEyLjkyMiwyLjI0eiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNNy4wNTUsMC4wMDljMCwwLjc1MiwwLDEuNDc2LDAsMi4yMjcNCgkJYy0wLjA3LTAuMDM1LTAuMTI5LTAuMDYzLTAuMTg2LTAuMDkyYy0wLjQ5OS0wLjI1OC0xLTAuNTExLTEuNDkyLTAuNzc5QzUuMjg5LDEuMzE3LDUuMTk5LDEuMjE4LDUuMTc1LDEuMTI2DQoJCUM1LjE0LDAuOTkyLDUuMjY2LDAuOTI4LDUuMzc0LDAuODcyYzAuNTE1LTAuMjY1LDEuMDI3LTAuNTMyLDEuNTQtMC43OThDNi45NTMsMC4wNTQsNi45OTQsMC4wMzcsNy4wNTUsMC4wMDl6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==';
	}
}

/**
 * 05. Custom Post Type - Event
 */
if ( ! function_exists( 'rbth_post_type_event' ) ) {
	/**
	 * Register Event post type.
	 */
	function rbth_post_type_event() {
		$labels = array(
			'name'                  => esc_html_x( 'Events', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Event', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Events', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Event', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Event', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Event', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Event', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Event', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Events', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Events', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Events:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No events found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No events found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Event Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set event image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove event image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as event image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Event archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into event', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this event', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Events list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Events list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter events list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_event_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'event' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 35,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'event', $args );
	}
	add_action( 'init', 'rbth_post_type_event' );

	/**
	 * Event Post Dashboard Icon
	 */
	function rbth_post_type_event_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIzLjI0NyAzLjI1IDE2IDE2IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDMuMjQ3IDMuMjUgMTYgMTYiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNBN0FBQUQiIGQ9Ik0xOS4yNDYsOC45NjRjMCwwLjA2NiwwLDAuMTE5LDAsMC4xNzINCgkJYzAsMi40MSwwLjAwMyw0LjgxOSwwLDcuMjI4Yy0wLjAwMiwxLjM5OC0wLjkzOSwyLjU0Ni0yLjMwOCwyLjgyNWMtMC4xOSwwLjAzOS0wLjM4OSwwLjA1NC0wLjU4NCwwLjA1NA0KCQljLTMuNDAzLDAuMDA0LTYuODA2LDAuMDA0LTEwLjIwOCwwLjAwMmMtMS42MzYsMC0yLjg5MS0xLjI2LTIuODkzLTIuODk3Yy0wLjAwMi0yLjQwMywwLTQuODA3LDAtNy4yMWMwLTAuMDUzLDAtMC4xMDUsMC0wLjE3Mw0KCQlDOC41ODQsOC45NjQsMTMuOTA0LDguOTY0LDE5LjI0Niw4Ljk2NHogTTEyLjc0NywxNy4xNTZjMC44MTItMC4wNDUsMS40LTAuNzUsMS4yNjYtMS41MzljLTAuMDQ5LTAuMjgxLTAuMDkyLTAuNTYzLTAuMTQ2LTAuODQ0DQoJCWMtMC4wMjEtMC4xMTcsMC4wMDYtMC4yMDIsMC4wOTUtMC4yODRjMC4yMS0wLjE5MywwLjQxNy0wLjM4OSwwLjYxNS0wLjU5NWMwLjM2OC0wLjM3OSwwLjQ4NC0wLjgzLDAuMzEzLTEuMzMNCgkJYy0wLjE2OS0wLjQ5Mi0wLjUyOS0wLjc3NS0xLjA0Ni0wLjg1M2MtMC4yODItMC4wNDMtMC41NjYtMC4wNzctMC44NDYtMC4xMzJjLTAuMDc4LTAuMDE2LTAuMTY3LTAuMDg1LTAuMjA3LTAuMTU1DQoJCWMtMC4xNDItMC4yNTMtMC4yNjEtMC41Mi0wLjM5Ni0wLjc3OGMtMC4yNDItMC40NjItMC42MjctMC43MTMtMS4xNDgtMC43MTJjLTAuNTIyLDAuMDAxLTAuOTA0LDAuMjU0LTEuMTQ0LDAuNzE3DQoJCWMtMC4xMjgsMC4yNDgtMC4yNTksMC40OTUtMC4zNzQsMC43NWMtMC4wNTcsMC4xMjUtMC4xMzgsMC4xNzgtMC4yNjgsMC4xOTRjLTAuMjY1LDAuMDMzLTAuNTI5LDAuMDc2LTAuNzk0LDAuMTE1DQoJCWMtMC41MjUsMC4wNzUtMC44ODksMC4zNTktMS4wNTksMC44NjFjLTAuMTcyLDAuNTA4LTAuMDQ3LDAuOTYxLDAuMzMsMS4zNDJjMC4yMDEsMC4yMDIsMC40MTYsMC4zOTIsMC42MSwwLjYwMQ0KCQljMC4wNTQsMC4wNTksMC4wODgsMC4xNjksMC4wNzksMC4yNDljLTAuMDMyLDAuMjcxLTAuMDg0LDAuNTQtMC4xMzMsMC44MDljLTAuMDk3LDAuNTMsMC4wNTgsMC45NzIsMC40ODksMS4yOQ0KCQljMC40NDQsMC4zMjksMC45MjUsMC4zMzgsMS40MTEsMC4wODZjMC4yMzMtMC4xMTksMC40NjUtMC4yMzgsMC42OTItMC4zNjljMC4xMTgtMC4wNjgsMC4yMTgtMC4wNjMsMC4zMzMsMC4wMDMNCgkJYzAuMjI4LDAuMTI4LDAuNDU0LDAuMjYxLDAuNjkzLDAuMzY2QzEyLjMxNSwxNy4wMzYsMTIuNTM0LDE3LjA4NywxMi43NDcsMTcuMTU2eiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTUuNTMyLDQuMzYxYzAuMzc5LDAuMDA5LDAuNzYxLDAsMS4xNCwwLjAzMQ0KCQljMS40MDQsMC4xMTQsMi41MzgsMS4zMjQsMi41NzIsMi43M2MwLjAwNiwwLjIyLDAsMC40NCwwLDAuNjcyYy01LjMyOCwwLTEwLjY0NywwLTE1Ljk2NSwwQzMuMTA1LDYuNDk2LDMuNjMsNS4yNjUsNC44ODgsNC42NDcNCgkJYzAuNDA4LTAuMiwwLjg0NC0wLjI3NywxLjI5NS0wLjI3OWMwLjI2Mi0wLjAwMSwwLjUyMy0wLjAwNSwwLjc4NS0wLjAwN0w2Ljk2Myw0LjM1NmMwLDAuNTQ2LDAuMDAxLDEuMDkzLDAuMDAyLDEuNjQNCgkJYzAuMDAxLDAuMzc1LDAuMjM5LDAuNjQsMC41NzEsMC42NGMwLjMzMywwLDAuNTctMC4yNjUsMC41NzEtMC42NEM4LjExLDUuNDUsOC4xMSw0LjkwMyw4LjExLDQuMzU2TDguMTA2LDQuMzYxDQoJCWMwLjA3NiwwLjAwMiwwLjE1MywwLjAwNywwLjIzLDAuMDA3YzEuOTQyLDAsMy44ODQsMCw1LjgyNSwwYzAuMDc2LDAsMC4xNTQtMC4wMDUsMC4yMy0wLjAwN2wtMC4wMDQtMC4wMDUNCgkJYzAuMDAxLDAuNTQ2LDAuMDAxLDEuMDkzLDAuMDAzLDEuNjRjMC4wMDEsMC4zNzUsMC4yMzksMC42NCwwLjU3LDAuNjRjMC4zMzQsMCwwLjU3LTAuMjY1LDAuNTcxLTAuNjQNCgkJYzAuMDAxLTAuNTQ2LDAuMDAxLTEuMDkzLDAuMDAzLTEuNjRMMTUuNTMyLDQuMzYxeiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNNi45NjgsNC4zNjFDNi45NjcsNC4xODQsNi45NjIsNC4wMDUsNi45NjcsMy44MjcNCgkJQzYuOTc0LDMuNTA2LDcuMjIsMy4yNTgsNy41MjgsMy4yNTNjMC4zMTctMC4wMDUsMC41NzEsMC4yNDYsMC41NzksMC41NzRjMC4wMDQsMC4xNzgsMCwwLjM1NiwwLDAuNTM0TDguMTEsNC4zNTYNCgkJYy0wLjM4MiwwLTAuNzY1LDAtMS4xNDcsMEw2Ljk2OCw0LjM2MXoiLz4NCgk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0E3QUFBRCIgZD0iTTE0LjM5Myw0LjM2MWMwLTAuMTc4LTAuMDA0LTAuMzU2LDAtMC41MzQNCgkJYzAuMDA3LTAuMzIxLDAuMjUzLTAuNTY5LDAuNTYyLTAuNTc0YzAuMzE1LTAuMDA1LDAuNTcsMC4yNDYsMC41NzgsMC41NzRjMC4wMDUsMC4xNzgsMCwwLjM1NiwwLDAuNTM0bDAuMDA0LTAuMDA1DQoJCWMtMC4zODIsMC0wLjc2NiwwLTEuMTQ3LDBMMTQuMzkzLDQuMzYxeiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNOS42MSwxNS44MTRjMC4wNTItMC4zMDYsMC4xMDQtMC42MSwwLjE1NC0wLjkxNA0KCQljMC4wNzQtMC40NC0wLjA0Ni0wLjgyNS0wLjM1NC0xLjE0NmMtMC4yMDctMC4yMTQtMC40MjctMC40MTMtMC42MzQtMC42MjZjLTAuMDQ1LTAuMDQ2LTAuMTAxLTAuMTM2LTAuMDgzLTAuMTc3DQoJCWMwLjAyNC0wLjA1NSwwLjEwOS0wLjEwNCwwLjE3NS0wLjExNmMwLjI2OS0wLjA0OSwwLjU0LTAuMDgyLDAuODExLTAuMTIxYzAuNDgzLTAuMDY3LDAuODM1LTAuMzE4LDEuMDUxLTAuNzU3DQoJCWMwLjEyMi0wLjI1MSwwLjI0Mi0wLjUwMywwLjM3Mi0wLjc1YzAuMDI5LTAuMDU1LDAuMDk4LTAuMTIzLDAuMTQ4LTAuMTIzYzAuMDUxLDAuMDAxLDAuMTE4LDAuMDcsMC4xNDgsMC4xMjUNCgkJYzAuMTAyLDAuMTg4LDAuMjA0LDAuMzc4LDAuMjg0LDAuNTc1YzAuMjQ3LDAuNjExLDAuNzAzLDAuOTE3LDEuMzUyLDAuOTY2YzAuMTk0LDAuMDE0LDAuMzkxLDAuMDQ2LDAuNTgyLDAuMDgzDQoJCWMwLjA2OCwwLjAxNCwwLjE3NSwwLjA1OSwwLjE4NCwwLjEwM2MwLjAxMSwwLjA2My0wLjAzOSwwLjE1NC0wLjA4OSwwLjIwN2MtMC4xODYsMC4xOTMtMC4zODMsMC4zNzUtMC41NzIsMC41NjMNCgkJYy0wLjM0OSwwLjM0Mi0wLjQ4NiwwLjc1LTAuMzk3LDEuMjMzYzAuMDUsMC4yNjMsMC4wOTUsMC41MjYsMC4xMzEsMC43OWMwLjAwOSwwLjA2OCwwLDAuMTg0LTAuMDM5LDAuMjA1DQoJCWMtMC4wNTksMC4wMy0wLjE2MSwwLjAxNy0wLjIyNy0wLjAxNmMtMC4yMzQtMC4xMTQtMC40NjMtMC4yNDQtMC42OTMtMC4zNjdjLTAuNDQyLTAuMjM1LTAuODg0LTAuMjM4LTEuMzI3LDAuMDAyDQoJCWMtMC4yNCwwLjEzMS0wLjQ4LDAuMjYtMC43MjQsMC4zODNDOS43MTQsMTYuMDA5LDkuNjExLDE1Ljk1Niw5LjYxLDE1LjgxNHoiLz4NCjwvZz4NCjwvc3ZnPg0K';
	}
}

/**
 * 06. Custom Post Type - Donation
 */
if ( ! function_exists( 'rbth_post_type_donation' ) ) {
	/**
	 * Register Donation post type.
	 */
	function rbth_post_type_donation() {
		$labels = array(
			'name'                  => esc_html_x( 'Donations', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Donation', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Donations', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Donation', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Donation', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Donation', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Donation', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Donation', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Donations', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Donations', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Donations:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No donations found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No donations found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Donation Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set donation image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove donation image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as donation image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Donation archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into donation', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this donation', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Donations list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Donations list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter donations list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_donation_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'donation' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 36,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'donation', $args );
	}
	add_action( 'init', 'rbth_post_type_donation' );

	/**
	 * Donation Dashboard Icon
	 */
	function rbth_post_type_donation_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTYsNC44MTNjLTAuMDkyLDAuMDk1LTAuMTY5LDAuMjE1LTAuMjc4LDAuMjgxDQoJCWMtMC43MzMsMC40NDQtMS4zLDEuMDQzLTEuNzU2LDEuNzY2Yy0wLjMwNywwLjQ4Ny0wLjYwNSwwLjk5Mi0wLjk4OSwxLjQxNmMtMC41NCwwLjU5Ni0xLjIyOSwwLjk5Mi0yLjA0MywxLjExNA0KCQljLTAuMjU2LDAuMDM5LTAuNTIsMC4wMjktMC43NzYsMC4wNjVjLTAuNjQ1LDAuMDkxLTEuMjIzLDAuMzY2LTEuNzgsMC42ODRjLTAuNDQ3LDAuMjU1LTAuODc2LDAuNTQ0LTEuMzM0LDAuNzc1DQoJCWMtMC41MzIsMC4yNjktMS4xMDQsMC40MS0xLjcwOCwwLjMwOGMtMC40NjctMC4wNzktMC44NTktMC4yODYtMS4wNjQtMC43NDRDNC4xNSwxMC4yMSw0LjE4OCw5LjkzNyw0LjI5Miw5LjY3NA0KCQljMC4xOTQtMC40ODUsMC41NDQtMC44NTcsMC45Mi0xLjIwNWMwLjQzNy0wLjQwMywwLjkzMi0wLjcxMSwxLjQ3OS0wLjk0MkM3LjMxMyw3LjI2Niw3LjkwMyw2Ljk1LDguNDA1LDYuNDkNCgkJQzguNDg4LDYuNDE0LDguNTYxLDYuMzI1LDguNjYsNi4yMThDOC40Miw2LjEsOC4yMDQsNS45OTEsNy45ODMsNS44ODhjLTAuMDMxLTAuMDE1LTAuMDgtMC4wMDItMC4xMTgsMC4wMDkNCgkJQzcuNjY3LDUuOTU5LDcuNDY4LDYuMDIsNy4yNzIsNi4wOTFDNy4yMjMsNi4xMSw3LjE2OSw2LjE1OCw3LjE0Niw2LjIwN2MtMC4wNzQsMC4xNi0wLjEzNSwwLjMyNy0wLjIwMSwwLjQ5DQoJCUM2LjgyNiw2Ljk4OCw2LjY1OCw3LjA2Nyw2LjM2NSw2Ljk1QzUuOTE5LDYuNzcxLDUuNDYyLDYuNjM1LDQuOTgzLDYuNTgzQzQuNzU2LDYuNTU4LDQuNTI2LDYuNTQ1LDQuMjk4LDYuNTQyDQoJCWMtMC4zMDYtMC4wMDQtMC40Ny0wLjE4NS0wLjM5NS0wLjQ4NGMwLjE2My0wLjY1LDAuMzMyLTEuMjk4LDAuNTE0LTEuOTQyQzQuNTgsMy41NCw0Ljk4LDMuMTc4LDUuNTE1LDIuOTM1DQoJCWMwLjgwOC0wLjM2NywxLjY1Mi0wLjYyMywyLjUtMC44NzNDOC43ODIsMS44MzUsOS41NTgsMS42MywxMC4zMTMsMS4zN2MwLjc0My0wLjI1NSwxLjM4My0wLjcxNSwyLjAyMS0xLjE2Ng0KCQlDMTIuNDMxLDAuMTM1LDEyLjUyNywwLjA2OCwxMi42MjUsMGMwLjA2MywwLDAuMTI1LDAsMC4xODgsMGMwLjQ1NSwwLjIwOCwwLjg4MywwLjQ1OCwxLjI3MiwwLjc3NA0KCQljMC45MjYsMC43NTEsMS41NTMsMS42OTEsMS44MDIsMi44NjdDMTUuOTM0LDMuODYzLDE1Ljk2Myw0LjA4OSwxNiw0LjMxM0MxNiw0LjQ3OSwxNiw0LjY0NiwxNiw0LjgxM3oiLz4NCgk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0E3QUFBRCIgZD0iTTAsMTEuMzQ0YzAuMDQzLTAuMjQ1LDAuMDY0LTAuNDk2LDAuMTMxLTAuNzM0DQoJCUMwLjYyMyw4Ljg0NSwxLjc3LDcuNzU4LDMuNTU3LDcuMzYzYzAuNTkxLTAuMTMxLDEuMTg4LTAuMTE0LDEuODA5LDAuMDUxYy0wLjA2OCwwLjA1MS0wLjExOSwwLjA4OS0wLjE3LDAuMTI3DQoJCWMtMC42MDYsMC40NjEtMS4xNSwwLjk4Mi0xLjQ4MiwxLjY4MUMzLjU5OSw5LjQ2MywzLjQ2Niw5LjY2NiwzLjI3LDkuODU0Yy0wLjM4LDAuMzY2LTAuNDU5LDAuODM1LTAuMjY2LDEuMzIzDQoJCWMwLjE4NSwwLjQ2NywwLjU0MSwwLjc0LDEuMDQ4LDAuNzk0YzAuMTU1LDAuMDE2LDAuMzEyLDAuMDE0LDAuNDY4LDAuMDJjMC4zMywwLjAxMSwwLjU2OCwwLjIzNCwwLjU3MSwwLjUzNw0KCQlzLTAuMjMxLDAuNTM5LTAuNTYyLDAuNTQ3Yy0wLjM5NiwwLjAwOS0wLjc5MiwwLjAwNC0xLjE4OCwwLjAwM2MtMC4xNzMsMC0wLjMyLDAuMDQ5LTAuMzk3LDAuMjE5DQoJCWMtMC4wOTUsMC4yMDksMC4wMjQsMC40NTYsMC4yNTgsMC40ODZjMC4yMjUsMC4wMjksMC40NTYsMC4wMTgsMC42ODUsMC4wMjRjMC4wMywwLjAwMSwwLjA2MSwwLjAwMywwLjExMywwLjAwNg0KCQljMCwwLjEwNC0wLjAwMiwwLjIwNywwLjAwMSwwLjMwOWMwLjAwNiwwLjI0MywwLjE1MiwwLjQwNywwLjM2MiwwLjQwN2MwLjIxMiwwLDAuMzU0LTAuMTU5LDAuMzYxLTAuNDA2DQoJCWMwLjAwMi0wLjEwOCwwLTAuMjE4LDAtMC4zMzNjMC40MTctMC4wODYsMC43NC0wLjI5MiwwLjk0LTAuNjY2YzAuMTk3LTAuMzY4LDAuMTk1LTAuNzQ1LDAuMDIyLTEuMTQ0DQoJCWMwLjU1OS0wLjAxMiwxLjA3Ni0wLjEyOSwxLjU1Ni0wLjM2YzAuNDc2LTAuMjI5LDAuOTMtMC41MDIsMS40MDEtMC43NjFjMC4wOTgsMC40NjYsMC4xMTEsMC45NDUsMC4wMywxLjQyNA0KCQljLTAuMjY2LDEuNTU2LTEuMTIzLDIuNjY3LTIuNTQ3LDMuMzRjLTAuNDA3LDAuMTkyLTAuODQyLDAuMjk3LTEuMjg5LDAuMzQ5QzQuNzg4LDE1Ljk3OCw0LjczOCwxNS45OSw0LjY4OCwxNg0KCQljLTAuMjA4LDAtMC40MTcsMC0wLjYyNSwwYy0wLjE2OS0wLjAyNi0wLjM0MS0wLjA0Mi0wLjUwNy0wLjA4Yy0xLjc4Ni0wLjQwMi0yLjkzNC0xLjQ4My0zLjQyNS0zLjI0OQ0KCQlDMC4wNjQsMTIuNDMzLDAuMDQzLDEyLjE4MywwLDExLjkzOEMwLDExLjczOSwwLDExLjU0MiwwLDExLjM0NHoiLz4NCjwvZz4NCjwvc3ZnPg0K';
	}
}

/**
 * 07. Custom Post Type - Team
 */
if ( ! function_exists( 'rbth_post_type_team' ) ) {
	/**
	 * Register Team post type.
	 */
	function rbth_post_type_team() {
		$labels = array(
			'name'                  => esc_html_x( 'Teams', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Team', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Teams', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Team', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Team', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Team', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Team', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Team', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Teams', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Teams', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Teams:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No teams found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No teams found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Team Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set team image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove team image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as team image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Team archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into team', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this team', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Teams list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Teams list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter teams list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_team_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'team' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 50,
			'supports'           => array( 'title', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'team', $args );
	}
	add_action( 'init', 'rbth_post_type_team' );

	/**
	 * Team Dashboard Icon
	 */
	function rbth_post_type_team_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNNy44MTYsOC40OGMxLjM4MSwwLjAyMSwyLjQ5NCwwLjI4MSwzLjQ1OCwxLjAwNw0KCQljMC41MjEsMC4zOTMsMC44OTYsMC44OTMsMS4wMTcsMS41NDhjMC4xNDYsMC44MDEtMC4xMTksMS40NzctMC42NzQsMi4wNDdjLTAuNTY1LDAuNTgxLTEuMjcyLDAuOTIyLTIuMDQ3LDEuMTEzDQoJCWMtMS40ODYsMC4zNjgtMi45MzEsMC4yNjctNC4yOTMtMC40NjRjLTAuMzI3LTAuMTc2LTAuNjQxLTAuNDA4LTAuOS0wLjY3NGMtMC45OTctMS4wMi0wLjkxOS0yLjQ1LDAuMTY0LTMuNDA4DQoJCUM1LjE5LDkuMDc2LDUuOTY0LDguNzYsNi44MDUsOC42MDNDNy4yMDEsOC41MjgsNy42MDYsOC41MDMsNy44MTYsOC40OHoiLz4NCgk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0E3QUFBRCIgZD0iTTUuMDc4LDQuNzU5YzAuMDM2LTEuMjE4LDAuNDc4LTIuMTA1LDEuNDA4LTIuNzENCgkJYzEuMTY3LTAuNzYsMi42NzktMC41NDEsMy42MzUsMC40OTljMS4wOTcsMS4xOTMsMS4wNjksMy4xMTItMC4wNzQsNC4yNTlDOS4yODEsNy41NzYsOC4zNSw3Ljg0NSw3LjI5OSw3LjU3Mg0KCQlDNi4yMSw3LjI5MSw1LjUyNCw2LjU2Niw1LjIwNiw1LjQ5N0M1LjEyNSw1LjIyMyw1LjEwNyw0LjkzMSw1LjA3OCw0Ljc1OXoiLz4NCgk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0E3QUFBRCIgZD0iTTExLjE2NCw2Ljk4M2MxLjA1NC0xLjE3NywxLjE4Mi0yLjQ0OCwwLjQ0OC0zLjgyMg0KCQljMC42NDUtMC4zOTQsMS44ODgtMC4zODcsMi42NjcsMC42MTJjMC43NCwwLjk0NywwLjYyNCwyLjM2OS0wLjI2LDMuMTdDMTMuMjA5LDcuNjc2LDExLjkyNiw3LjY5NSwxMS4xNjQsNi45ODN6Ii8+DQoJPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiNBN0FBQUQiIGQ9Ik00LjgzOSw2Ljk4NEM0LjA3Niw3LjY4MywyLjgxNiw3LjY3OCwyLjAyMSw2Ljk3NQ0KCQlDMS4xMzMsNi4xODgsMC45NzMsNC44MzksMS42NTUsMy44NjZjMC42My0wLjg5OSwxLjgyOS0xLjIxMywyLjc0MS0wLjcxMUMzLjY1Myw0LjUyOSwzLjc4Niw1LjgwMyw0LjgzOSw2Ljk4NHoiLz4NCgk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0E3QUFBRCIgZD0iTTMuMjM0LDEyLjk1N2MtMC45MDEtMC4wMDktMS43MjEtMC4xNjEtMi40MjgtMC42ODQNCgkJYy0wLjk3OS0wLjcyMi0xLjA3Ni0xLjkwNS0wLjI0LTIuNzg5YzAuNTA1LTAuNTMyLDEuMTM5LTAuODM3LDEuODM5LTEuMDEzYzAuNzkzLTAuMiwxLjU5MS0wLjIxLDIuMzg3LTAuMDA3DQoJCWMwLjAyMSwwLjAwNSwwLjA0MiwwLjAxMywwLjA2MywwLjAyMUM0Ljg2NCw4LjQ4OSw0Ljg3MSw4LjUsNC44NzUsOC41MDJDNC42MDIsOC42NDMsNC4zMjIsOC43NzIsNC4wNTcsOC45MjkNCgkJYy0wLjU1OSwwLjMyOS0xLjAyOCwwLjc1My0xLjMyNCwxLjM0NWMtMC40MzIsMC44NjEtMC4yODgsMS44NCwwLjM3MywyLjU0M0MzLjEzOSwxMi44NTMsMy4xNzEsMTIuODg5LDMuMjM0LDEyLjk1N3oiLz4NCgk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0E3QUFBRCIgZD0iTTEyLjgwMSwxMi45MjFjMC4zMTEtMC4zMTMsMC41NDgtMC42NzEsMC42NTItMS4xMDMNCgkJYzAuMTg5LTAuNzg0LTAuMDMyLTEuNDY5LTAuNTMxLTIuMDc2Yy0wLjM5OS0wLjQ4NS0wLjkxMS0wLjgyLTEuNDc2LTEuMDgzYy0wLjEwNS0wLjA0OS0wLjIxMi0wLjA5NC0wLjM2Ny0wLjE2Mg0KCQljMC4xOTgtMC4wNDUsMC4zNTQtMC4wOSwwLjUxMy0wLjExM2MxLjE5OS0wLjE3NiwyLjMyOSwwLjAwNiwzLjM1NSwwLjY4MmMwLjMzOCwwLjIyNCwwLjYxNywwLjUwNSwwLjgxOCwwLjg2DQoJCWMwLjM4MywwLjY4MSwwLjI5MywxLjQ3NS0wLjIzNiwyLjA1Yy0wLjQ1OSwwLjQ5Ni0xLjA1LDAuNzUyLTEuNjk4LDAuODc4Yy0wLjMzMywwLjA2NC0wLjY3NiwwLjA4NS0xLjAxMywwLjEyNQ0KCQlDMTIuODEzLDEyLjk2LDEyLjgwNiwxMi45NCwxMi44MDEsMTIuOTIxeiIvPg0KPC9nPg0KPC9zdmc+DQo=';
	}
}

/**
 * 08. Custom Post Type - Travel
 */
if ( ! function_exists( 'rbth_post_type_travel' ) ) {
	/**
	 * Register Travel post type.
	 */
	function rbth_post_type_travel() {
		$labels = array(
			'name'                  => esc_html_x( 'Travels', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Travel', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Travels', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Travel', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Travel', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Travel', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Travel', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Travel', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Travels', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Travels', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Travels:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No travels found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No travels found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Travel Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set travel image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove travel image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as travel image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Travel archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into travel', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this travel', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Travels list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Travels list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter travels list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_travel_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'travel' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 50,
			'supports'           => array( 'title', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'travel', $args );
	}
	add_action( 'init', 'rbth_post_type_travel' );

	/**
	 * Travel Post Type Dashboard Icon
	 */
	function rbth_post_type_travel_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMCwxMS4zMTJjMC0wLjExNCwwLTAuMjI5LDAtMC4zNDQNCgkJYzAuMDA4LTAuMDE0LDAuMDE3LTAuMDI2LDAuMDIxLTAuMDQxYzAuMjMzLTAuNzE1LDAuODI3LTAuOTg0LDEuNTEyLTAuNjg1YzAuNDk2LDAuMjE3LDAuOTkyLDAuNDMyLDEuNDg0LDAuNjU0DQoJCWMwLjEwMywwLjA0NiwwLjE2MSwwLjAzNSwwLjIzOC0wLjA0OWMxLjA0Ni0xLjEzMiwyLjA5Ni0yLjI2LDMuMTQ0LTMuMzg5YzAuMjYyLTAuMjgxLDAuMjItMC41MzktMC4xMTYtMC43MTcNCgkJQzQuNDk2LDUuNzk1LDIuNzA4LDQuODQ5LDAuOTIsMy45MDFDMC44NDMsMy44NTksMC43NjYsMy44MTMsMC42OTgsMy43NmMtMC4zODMtMC4zLTAuNTAyLTAuODA2LTAuMjk5LTEuMjUxDQoJCWMwLjIwNC0wLjQ0NiwwLjYwOS0wLjY0MywxLjEyMi0wLjUzNEM0LjE0NSwyLjUyOCw2Ljc3LDMuMDgsOS4zOTMsMy42NDVjMC4yNzMsMC4wNTksMC40NTksMCwwLjY0Ni0wLjIwMw0KCQljMC44OTgtMC45NzIsMS44MDktMS45MywyLjcxMS0yLjg5NmMwLjI0LTAuMjU5LDAuNTMzLTAuNDA5LDAuODcxLTAuNDg1YzAuMDg0LTAuMDE5LDAuMTctMC4wNCwwLjI1NC0wLjA2DQoJCWMwLjE5NywwLDAuMzk2LDAsMC41OTQsMGMwLjA0NSwwLjAxMSwwLjA4OCwwLjAyNSwwLjEzMywwLjAzM2MwLjY3MiwwLjExNywxLjE0NiwwLjQ1OSwxLjMxMywxLjE1Mg0KCQlDMTUuOTQzLDEuMzExLDE1Ljk3MSwxLjQzNywxNiwxLjU2M2MwLDAuMTg4LDAsMC4zNzUsMCwwLjU2M2MtMC4wMSwwLjAyMy0wLjAyMywwLjA0Ni0wLjAyNywwLjA2OQ0KCQlDMTUuOTE2LDIuNjM0LDE1LjczMiwzLDE1LjQsMy4zMDVjLTAuNzUyLDAuNjg5LTEuNDk0LDEuMzktMi4yMywyLjA5OGMtMC4xMzcsMC4xMzEtMC4yNDYsMC4xNTgtMC40MTgsMC4wODgNCgkJYy0wLjQyNi0wLjE3Ni0wLjg2Ny0wLjIxNi0xLjMxMS0wLjA2NmMtMS4xNzIsMC4zOTYtMi4zNDQsMC43OS0zLjUxMywxLjE5M0M3LjE1Myw2Ljg4Niw2LjY3Nyw3LjUzNSw2LjY2Nyw4LjM1NA0KCQljLTAuMDEyLDAuOTUzLDAsMS45MDYtMC4wMDYsMi44NThjMCwwLjA3Ni0wLjAzOSwwLjE3My0wLjA5MywwLjIyNWMtMC40NDgsMC40MjgtMC45MDEsMC44NTEtMS4zNiwxLjI2Nw0KCQljLTAuMTA4LDAuMDk5LTAuMTM0LDAuMTc0LTAuMDY5LDAuMzEzYzAuMjIyLDAuNDc3LDAuNDI3LDAuOTU5LDAuNjM2LDEuNDQxYzAuMzA0LDAuNjk4LDAuMDM3LDEuMjg1LTAuNjg5LDEuNTIxDQoJCUM1LjA3NywxNS45ODIsNS4wNywxNS45OTMsNS4wNjMsMTZjLTAuMTE1LDAtMC4yMjksMC0wLjM0NSwwYy0wLjM1LTAuMDg2LTAuNTc5LTAuMzE4LTAuNzgtMC42MDQNCgkJYy0wLjQwMS0wLjU3LTAuODE2LTEuMTMxLTEuMjMyLTEuNjljLTAuMDgzLTAuMTEtMC4xODYtMC4yMTMtMC4yOTYtMC4yOTZjLTAuNTkyLTAuNDQyLTEuMTg0LTAuODg1LTEuNzg2LTEuMzEzDQoJCUMwLjMzNSwxMS44OTMsMC4wOTMsMTEuNjY1LDAsMTEuMzEyeiIvPg0KCTxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBmaWxsPSIjQTdBQUFEIiBkPSJNMTYsOC4yNWMwLDEuMDUyLDAsMi4xMDQsMCwzLjE1NQ0KCQljLTAuMDQ3LDAuMjM5LTAuMDgyLDAuNDgxLTAuMTQ1LDAuNzE2Yy0wLjI4OSwxLjA4MS0wLjkzOCwxLjkyNC0xLjc3MywyLjY0MUMxMy40OSwxNS4yNjksMTIuODMsMTUuNjY5LDEyLjEyNSwxNg0KCQljLTAuMDg0LDAtMC4xNjYsMC0wLjI1LDBjLTAuMDE4LTAuMDExLTAuMDMzLTAuMDI0LTAuMDUxLTAuMDMyYy0wLjkyOC0wLjQyNS0xLjc1OC0wLjk5LTIuNDU5LTEuNzMzDQoJCWMtMC45MDQtMC45NTYtMS40MDEtMi4wNzMtMS4zNjktMy40MUM4LjAxNiwxMC4wMzMsOCw5LjI0MSw4LDguNDVjMC0wLjM0NCwwLjEwNC0wLjQ4NywwLjQzMi0wLjU5OQ0KCQljMS4wOTMtMC4zNzEsMi4xODctMC43MzgsMy4yNzctMS4xMTZjMC4yMDMtMC4wNzEsMC4zODctMC4wNjgsMC41OSwwLjAwMWMxLjA3NCwwLjM3MiwyLjE1MiwwLjc0LDMuMjMyLDEuMQ0KCQlDMTUuNzU0LDcuOTExLDE1LjkyMiw4LjAyMywxNiw4LjI1eiBNMTEuNzM4LDExLjM3NGMtMC4yMTctMC4xODYtMC40MTYtMC4zNi0wLjYyMS0wLjUzYy0wLjMwNS0wLjI1My0wLjcwNS0wLjIzLTAuOTUxLDAuMDUNCgkJYy0wLjI1LDAuMjg3LTAuMjE5LDAuNjk1LDAuMDgyLDAuOTU5YzAuMzczLDAuMzI0LDAuNzQ4LDAuNjQ2LDEuMTI3LDAuOTY1YzAuMzM0LDAuMjgyLDAuNzM2LDAuMjM2LDEuMDEyLTAuMTA5DQoJCWMwLjEzNS0wLjE3MSwwLjI3LTAuMzQ0LDAuNDA0LTAuNTE2YzAuNDYzLTAuNTg5LDAuOTI4LTEuMTc2LDEuMzg5LTEuNzY4YzAuMjQtMC4zMSwwLjE5MS0wLjcxOC0wLjEtMC45NDYNCgkJYy0wLjI5Ny0wLjIzMS0wLjY5NS0wLjE4Mi0wLjk0NSwwLjEyMWMtMC4wNjMsMC4wNzUtMC4xMjMsMC4xNTQtMC4xODQsMC4yMzJDMTIuNTQ5LDEwLjM0MywxMi4xNDgsMTAuODU0LDExLjczOCwxMS4zNzR6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==';
	}

	/**
	 * Travel Post Type Taxonomy -> Transport Type
	 */
	function rbth_travel_transport_type() {
		register_taxonomy(
			'transport_type',
			'travel',
			array(
				'label'             => 'Transport Type',
				'hierarchical'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'transport-type' ),
			)
		);
	}
	add_action( 'init', 'rbth_travel_transport_type' );

	/**
	 * Travel Post Type Taxonomy -> Transport Name
	 */
	function rbth_transport_name_taxonomy() {
		register_taxonomy(
			'transport_name',
			'travel',
			array(
				'label'             => 'Transport Name',
				'hierarchical'      => true,
				'show_admin_column' => true,
				'rewrite'           => array( 'slug' => 'transport-name' ),
			)
		);
	}
	add_action( 'init', 'rbth_transport_name_taxonomy' );

	/**
	 * Travel Post Type Taxonomy -> Transport Location
	 */
	function rbth_travel_location() {
		register_taxonomy(
			'travel_location',
			'travel',
			array(
				'label'             => 'Travel Location',
				'hierarchical'      => true,
				'show_admin_column' => true,
			)
		);
	}
	add_action( 'init', 'rbth_travel_location' );

	/**
	 * Travel Post Meta - Register
	 */
	function rbth_travel_meta_box() {
		add_meta_box(
			'rbth_travel_details', // Meta Box ID.
			'Travel Details', // Meta Box Title.
			'rbth_travel_meta_callback', // Callback Function for HTML content render.
			'travel', // Post Type.
			'normal', // Meta Box Context Postion -> normal, side, advanced.
			'high' // Meta Box Context Postion Priority -> high, core, low.
		);
	}
	add_action( 'add_meta_boxes', 'rbth_travel_meta_box' );

	/**
	 * Travel Post Meta - Display Backend
	 *
	 * @param WP_Post $post Current post object.
	 */
	function rbth_travel_meta_callback( $post ) {
		$from_date = get_post_meta( $post->ID, 'from_date', true );
		$to_date   = get_post_meta( $post->ID, 'to_date', true );
		$persons   = get_post_meta( $post->ID, 'travel_persons', true );
		?>
		<p>
			<label><?php echo esc_html__( 'From Date', 'rb-theme-helper' ); ?></label><br>
			<input type="date" name="from_date" value="<?php echo esc_attr( $from_date ); ?>">
		</p>
		<p>
			<label><?php echo esc_html__( 'To Date', 'rb-theme-helper' ); ?></label><br>
			<input type="date" name="to_date" value="<?php echo esc_attr( $to_date ); ?>">
		</p>
		<p>
			<label><?php echo esc_html__( 'Travel Persons', 'rb-theme-helper' ); ?></label><br>
			<input type="number" name="travel_persons" value="<?php echo esc_attr( $persons ); ?>">
		</p>
		<?php
	}

	/**
	 * Save Travel Post Meta.
	 *
	 * @param int $post_id Post ID.
	 */
	function rbth_save_travel_meta( $post_id ) {

		// Check if nonce is set.
		if ( ! isset( $_POST['rbth_travel_meta_nonce'] ) ) {
			return;
		}

		// Verify nonce.
		if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['rbth_travel_meta_nonce'] ) ), 'rbth_travel_meta_action' ) ) {
			return;
		}

		// Prevent autosave overwrite.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		// Check user capability.
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		// Save From Date.
		if ( isset( $_POST['from_date'] ) ) {
			update_post_meta(
				$post_id,
				'from_date',
				sanitize_text_field( wp_unslash( $_POST['from_date'] ) )
			);
		}

		// Save To Date.
		if ( isset( $_POST['to_date'] ) ) {
			update_post_meta(
				$post_id,
				'to_date',
				sanitize_text_field( wp_unslash( $_POST['to_date'] ) )
			);
		}

		// Save Travel Persons.
		if ( isset( $_POST['travel_persons'] ) ) {
			update_post_meta(
				$post_id,
				'travel_persons',
				intval( $_POST['travel_persons'] )
			);
		}
	}
	add_action( 'save_post', 'rbth_save_travel_meta' );
}