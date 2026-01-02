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
 * +++++  01. Custom Post Type - Homepage Section
 * +++++  02. Custom Post Type - Portfolio
 * +++++  03. Custom Post Type - Service
 * +++++  04. Custom Post Type - Project
 * +++++  05. Custom Post Type - Event
 * +++++  06. Custom Post Type - Donation
 * +++++  07. Custom Post Type - Team
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * 01. Custom Post Type - Homepage Section
 */
if ( ! function_exists( 'rbth_post_type_homepage_section' ) ) {
	/**
	 * Register Homepage Section post type.
	 */
	function rbth_post_type_homepage_section() {
		$labels = array(
			'name'                  => esc_html_x( 'Homepage Sections', 'Post type general name', 'rb-theme-helper' ),
			'singular_name'         => esc_html_x( 'Homepage Section', 'Post type singular name', 'rb-theme-helper' ),
			'menu_name'             => esc_html__( 'Homepage Sections', 'rb-theme-helper' ),
			'name_admin_bar'        => esc_html__( 'Homepage Section', 'rb-theme-helper' ),
			'add_new'               => esc_html__( 'Add New', 'rb-theme-helper' ),
			'add_new_item'          => esc_html__( 'Add New Homepage Section', 'rb-theme-helper' ),
			'new_item'              => esc_html__( 'New Homepage Section', 'rb-theme-helper' ),
			'edit_item'             => esc_html__( 'Edit Homepage Section', 'rb-theme-helper' ),
			'view_item'             => esc_html__( 'View Homepage Section', 'rb-theme-helper' ),
			'all_items'             => esc_html__( 'All Homepage Sections', 'rb-theme-helper' ),
			'search_items'          => esc_html__( 'Search Homepage Sections', 'rb-theme-helper' ),
			'parent_item_colon'     => esc_html__( 'Parent Homepage Sections:', 'rb-theme-helper' ),
			'not_found'             => esc_html__( 'No Homepage Sections found.', 'rb-theme-helper' ),
			'not_found_in_trash'    => esc_html__( 'No Homepage Sections found in Trash.', 'rb-theme-helper' ),
			'featured_image'        => esc_html__( 'Homepage Section Image', 'rb-theme-helper' ),
			'set_featured_image'    => esc_html__( 'Set homepage_section image', 'rb-theme-helper' ),
			'remove_featured_image' => esc_html__( 'Remove homepage_section image', 'rb-theme-helper' ),
			'use_featured_image'    => esc_html__( 'Use as homepage_section image', 'rb-theme-helper' ),
			'archives'              => esc_html__( 'Homepage Section archives', 'rb-theme-helper' ),
			'insert_into_item'      => esc_html__( 'Insert into homepage_section', 'rb-theme-helper' ),
			'uploaded_to_this_item' => esc_html__( 'Uploaded to this homepage_section', 'rb-theme-helper' ),
			'items_list'            => esc_html__( 'Homepage Sections list', 'rb-theme-helper' ),
			'items_list_navigation' => esc_html__( 'Homepage Sections list navigation', 'rb-theme-helper' ),
			'filter_items_list'     => esc_html__( 'Filter Homepage Sections list', 'rb-theme-helper' ),
		);
		$args   = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'menu_icon'          => rbth_post_type_homepage_section_icon(),
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'homepage_section' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 31,
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
			'show_in_rest'       => true, // Gutenberg + REST API support.
		);
		register_post_type( 'homepage_section', $args );
	}
	add_action( 'init', 'rbth_post_type_homepage_section' );

	/**
	 * Homepage Section Dashboard Icon
	 */
	function rbth_post_type_homepage_section_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjYuOTgxcHgiIGhlaWdodD0iMjIuNzVweCIgdmlld0JveD0iMC4wMDkgMC42MjUgMjYuOTgxIDIyLjc1IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAuMDA5IDAuNjI1IDI2Ljk4MSAyMi43NSINCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMjQuOTQ4LDAuNjI1SDIuMDVjLTEuMjc4LDAtMi4wNDEsMC43NjMtMi4wNDEsMi4wNDF2MTguNjY3YzAsMS4yNzgsMC43NjMsMi4wNDIsMi4wNDIsMi4wNDJoMjIuODk3DQoJCWMxLjI3NywwLDIuMDQtMC43NjQsMi4wNC0yLjA0MmMwLjAwMi02LjIyMiwwLjAwMi0xMi40NDQsMC0xOC42NjdDMjYuOTg4LDEuMzg4LDI2LjIyNiwwLjYyNSwyNC45NDgsMC42MjV6IE01Ljc3MSwzLjExNQ0KCQlMNS43NzEsMy4xMTVMNS43NzEsMy4xMTVMNS43NzEsMy4xMTV6IE01LjU1OSwzLjExNUw1LjU1OSwzLjExNUw1LjU1OSwzLjExNUw1LjU1OSwzLjExNXogTTQuODI2LDIuMjM0DQoJCUM0LjgyMiwyLjIyOSw0LjgyLDIuMjI1LDQuODE2LDIuMjJoMC4wMTlDNC44MzIsMi4yMjUsNC44MjksMi4yMjksNC44MjYsMi4yMzR6IE00LjA4MSwzLjExNUw0LjA4MSwzLjExNUw0LjA4MSwzLjExNUw0LjA4MSwzLjExNQ0KCQl6IE0zLjEzNSwyLjIzNEMzLjEzMSwyLjIyOSwzLjEyOSwyLjIyNCwzLjEyNSwyLjIyaDAuMDE5QzMuMTQxLDIuMjI0LDMuMTM4LDIuMjI5LDMuMTM1LDIuMjM0eiBNMi4zODgsMy4xMTVMMi4zODgsMy4xMTUNCgkJTDIuMzg4LDMuMTE1TDIuMzg4LDMuMTE1eiBNMi4yMzgsMy4xMTVMMi4yNDcsMy4xNUgyLjIzNEwyLjIzOCwzLjExNXogTTMuMTM3LDMuMTQ2QzMuMTM4LDMuMTQ3LDMuMTM5LDMuMTQ5LDMuMTQsMy4xNUgzLjEzNQ0KCQlDMy4xMzYsMy4xNDksMy4xMzYsMy4xNDcsMy4xMzcsMy4xNDZ6IE0zLjkzMSwzLjExNUwzLjkzOSwzLjE1SDMuOTI3TDMuOTMxLDMuMTE1eiBNNC44MjgsMy4xNDlMNC44MjgsMy4xNDlMNC44MjgsMy4xNDkNCgkJQzQuODI3LDMuMTUsNC44MjcsMy4xNDksNC44MjgsMy4xNDl6IE01LjYxMiwzLjExNkw1LjYxNywzLjE1aC0wLjAxTDUuNjEyLDMuMTE2eiBNNi41MDksMi4yMmwxOC4zODQsMC4wMDENCgkJYzAuNDc5LDAsMC41MDIsMC4wMjMsMC41MDIsMC41MDZWMy4xNUg2LjUxOUM2LjYxMSwzLjAyNSw2LjY3NiwyLjg4LDYuNjgsMi43MDhDNi42ODQsMi41MTcsNi42MTQsMi4zNTUsNi41MDksMi4yMnogTTI1LjM5NSw0Ljc3DQoJCXYxNi41NDZjMCwwLjQxOC0wLjA0NCwwLjQ2MS0wLjQ2OCwwLjQ2MUgyLjA1OWMtMC40MDcsMC0wLjQ1NC0wLjA0Ni0wLjQ1NC0wLjQ0NlY0Ljc3MUwyNS4zOTUsNC43N3oiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNNy43NjIsMTAuMjU5aDExLjc4MmwzLjk3Ni0wLjAwMWMwLjYxNywwLDAuOTMxLTAuMzEzLDAuOTMyLTAuOTM2YzAuMDAxLTAuNzY1LDAuMDAyLTEuNTMtMC4wMDEtMi4yOTQNCgkJYzAtMC41OTEtMC4zMTMtMC45MDMtMC45MDMtMC45MDNINy42ODJjLTAuNTg5LDAtMC45MDIsMC4zMTItMC45MDMsMC45MDJ2Mi4yNDlDNi43NzksOS45NjUsNy4wNzMsMTAuMjU5LDcuNzYyLDEwLjI1OXoNCgkJIE04LjM4Nyw4LjY0NlY3LjczNGgxNC40NDd2MC45MTJIOC4zODd6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgZD0iTTcuNzY4LDE1LjMzNmgxNS43MzVjMC42MzksMCwwLjk1LTAuMzA3LDAuOTUxLTAuOTM3di0yLjI3NGMtMC4wMDEtMC42MTItMC4zMTctMC45MjMtMC45MzgtMC45MjNINy43Mw0KCQljLTAuNjU4LDAtMC45NTEsMC4yOTctMC45NTEsMC45NjJ2Mi4xOTNDNi43NzksMTUuMDQzLDcuMDc1LDE1LjMzNiw3Ljc2OCwxNS4zMzZ6IE04LjM5NiwxMy43Mjd2LTAuOTEyaDE0LjQ0N3YwLjkxMkg4LjM5NnoiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNNy42ODIsMjAuNDFsNy45MzIsMC4wMDFsNy45MzMtMC4wMDFjMC41OSwwLDAuOTAxLTAuMzEyLDAuOTAzLTAuOTAxbDAuMDAxLTIuMjQ5DQoJCWMwLTAuNjg4LTAuMjk0LTAuOTgyLTAuOTgzLTAuOTgyTDcuNzA5LDE2LjI3NWMtMC42MjYsMC0wLjkzLDAuMzA1LTAuOTMsMC45NDF2Mi4yOTFDNi43OCwyMC4wOTgsNy4wOTMsMjAuNDEsNy42ODIsMjAuNDF6DQoJCSBNOC4zOTQsMTguNzk3di0wLjkxaDE0LjQ0N3YwLjkxSDguMzk0eiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIGQ9Ik0zLjQyMywxMC4yNThsMS4xOTEsMC4wMDJsMS4xOS0wLjAwMmMwLjU1Mi0wLjAwMSwwLjg3MS0wLjMyLDAuODc2LTAuODcyDQoJCWMwLjAwMy0wLjI4LDAuMDAyLTAuNTU5LDAuMDAxLTAuODM4bDAtMC4zNTZsMC0wLjM1NmMwLTAuMjc5LDAuMDAxLTAuNTU4LTAuMDAxLTAuODM3QzYuNjc2LDYuNDQ2LDYuMzU3LDYuMTI3LDUuODA2LDYuMTI2DQoJCUw0LjYxNSw2LjEyNEwzLjQyNCw2LjEyNkMyLjg2OSw2LjEyNywyLjU1LDYuNDQ2LDIuNTQ5LDdjLTAuMDAzLDAuNzk0LTAuMDAzLDEuNTg4LDAsMi4zODFDMi41NSw5LjkzNywyLjg2OSwxMC4yNTYsMy40MjMsMTAuMjU4eg0KCQkgTTQuMTU1LDguNjQ5di0wLjkxSDUuMDd2MC45MUg0LjE1NXoiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMy40MTcsMTUuMzM1bDEuMTA3LDAuMDAzbDEuMjc0LTAuMDAzYzAuNTU4LTAuMDAyLDAuODc5LTAuMzE4LDAuODgyLTAuODcNCgkJYzAuMDAzLTAuNzk0LDAuMDAzLTEuNTg3LDAtMi4zODFjLTAuMDAxLTAuNTY1LTAuMzE5LTAuODc5LTAuODk1LTAuODgybC0wLjM5LTAuMDAxbC0wLjc3NSwwLjAwMWwtMC43OTQtMC4wMDFsLTAuNCwwLjAwMQ0KCQljLTAuNTU4LDAuMDA1LTAuODc4LDAuMzIyLTAuODc5LDAuODdjLTAuMDAzLDAuNzkzLTAuMDAyLDEuNTg3LDAsMi4zODJDMi41NTEsMTUuMDExLDIuODY4LDE1LjMzMiwzLjQxNywxNS4zMzV6IE00LjE2MiwxMy43Mg0KCQl2LTAuOTA5aDAuOTExdjAuOTA5SDQuMTYyeiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIGQ9Ik01LjgxNywxNi4yODFsLTEuMTM4LTAuMDAzbC0xLjI3MSwwLjAwNGMtMC41MzcsMC4wMDItMC44NTgsMC4zMjQtMC44NTksMC44NjMNCgkJYy0wLjAwMywwLjgwMy0wLjAwNCwxLjYwNCwwLDIuNDA4YzAuMDAzLDAuNTMxLDAuMzI1LDAuODUyLDAuODYzLDAuODU4bDAuNDksMC4wMDJsMC43MjktMC4wMDFsMC43MzIsMC4wMDJsMC40NjItMC4wMDMNCgkJYzAuNTM0LTAuMDA3LDAuODU0LTAuMzMsMC44NTYtMC44NjRjMC4wMDQtMC44MDIsMC4wMDQtMS42MDcsMC0yLjQwOUM2LjY3OCwxNi42MDQsNi4zNTUsMTYuMjg0LDUuODE3LDE2LjI4MXogTTUuMDY2LDE3Ljg4OXYwLjkxDQoJCWgtMC45MXYtMC45MUg1LjA2NnoiLz4NCjwvZz4NCjwvc3ZnPg0K';
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
	 * Homepage Section Dashboard Icon
	 */
	function rbth_post_type_portfolio_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjIuNzVweCIgaGVpZ2h0PSIyMi43NTFweCIgdmlld0JveD0iMi4xMjUgMC42MjUgMjIuNzUgMjIuNzUxIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDIuMTI1IDAuNjI1IDIyLjc1IDIyLjc1MSINCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBzdHJva2U9IiNBN0FBQUQiIHN0cm9rZS13aWR0aD0iMC43NSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMi41LDE4LjRjMC01LjQ5OCwwLTExLDAtMTYuNQ0KCQlDMi42NDcsMS40NDgsMi45NDcsMS4xNDYsMy40MDIsMWM2LjczMiwwLDEzLjQ2MywwLDIwLjE5NiwwYzAuNDU0LDAuMTQ3LDAuNzU0LDAuNDQ5LDAuOTAyLDAuOTAyYzAsNS41LDAsMTEsMCwxNi41DQoJCWMtMC4zMDMsMC43NDgtMC41ODIsMC45MzUtMS4zOTYsMC45MzVjLTEuOTMyLDAtMy44NjEsMC01Ljc5NSwwYy0wLjA4MiwwLTAuMTYyLDAtMC4yNzksMGMwLjI0NCwwLjQ4OCwwLjQ2NCwwLjkzNywwLjY5MywxLjM3OA0KCQljMC4wMjYsMC4wNDksMC4xMjUsMC4wODMsMC4xOSwwLjA4NWMwLjM3MiwwLjAwOSwwLjc0NC0wLjAwMSwxLjExNiwwLjAwN2MwLjQ5MiwwLjAxLDAuOTE4LDAuMzUyLDEuMDM1LDAuODE1DQoJCWMwLjEyMywwLjQ5MS0wLjA5NywxLjAwMS0wLjU0MSwxLjI0M2MtMC4xLDAuMDU0LTAuMjA1LDAuMDkxLTAuMzEyLDAuMTM2Yy0zLjgxMiwwLTcuNjE5LDAtMTEuNDI5LDANCgkJYy0wLjAyNC0wLjAxNS0wLjA0Ny0wLjAzMS0wLjA3My0wLjA0Yy0wLjU3My0wLjE5MS0wLjg4LTAuNjY2LTAuNzk0LTEuMjMyQzcsMjEuMTc0LDcuNDUsMjAuODA5LDguMDU1LDIwLjgwNQ0KCQljMC4zMjktMC4wMDMsMC42NTktMC4wMTEsMC45ODcsMC4wMDRjMC4xNTQsMC4wMDYsMC4yMjktMC4wNTEsMC4yOS0wLjE4NmMwLjEwOC0wLjI0MSwwLjIzMy0wLjQ3NSwwLjM1MS0wLjcxMQ0KCQljMC4wOS0wLjE4MiwwLjE4MS0wLjM2MywwLjI4Ni0wLjU3NWMtMC4xMywwLTAuMjE0LDAtMC4yOTksMGMtMS45NzUsMC0zLjk1LDAuMDAxLTUuOTI0LDBjLTAuNjM5LDAtMS4wMTEtMC4yNzEtMS4yMTUtMC44NzgNCgkJQzIuNTI0LDE4LjQzOCwyLjUxLDE4LjQyMSwyLjUsMTguNHogTTIzLjc2NiwxNy4xMzJjLTAuMTE1LDAtMC4yMTQsMC0wLjMxMywwYy01LjQ0MSwwLTEwLjg4NSwwLTE2LjMyNy0wLjAwMQ0KCQljLTAuMSwwLTAuMjAyLDAuMDAzLTAuMy0wLjAxNWMtMC4xNzYtMC4wMzEtMC4yNzYtMC4xNDgtMC4yODctMC4zMjVjLTAuMDEyLTAuMTg4LDAuMDc4LTAuMzIxLDAuMjYtMC4zNjkNCgkJYzAuMTAyLTAuMDI1LDAuMjEyLTAuMDIzLDAuMzE5LTAuMDIzYzUuNDUtMC4wMDIsMTAuODk5LTAuMDAyLDE2LjM0OC0wLjAwMmMwLjA5NywwLDAuMTkyLDAsMC4zMDIsMGMwLTAuMDk0LDAtMC4xNDgsMC0wLjIwNw0KCQljMC00LjY0NiwwLTkuMjkyLDAtMTMuOTRjMC0wLjM4Mi0wLjE0NC0wLjUxNi0wLjU0My0wLjUxNmMtNi40NzksMC0xMi45NiwwLTE5LjQ0MSwwYy0wLjQyMywwLTAuNTUxLDAuMTI3LTAuNTUxLDAuNTUxDQoJCWMwLDQuNjI2LDAsOS4yNTIsMCwxMy44NzhjMCwwLjA3NCwwLDAuMTQ4LDAsMC4yMzRjMC4xMTQsMCwwLjE5MiwwLDAuMjcxLDBjMC41OTQsMCwxLjE4OCwwLDEuNzgzLDAuMDAyDQoJCWMwLjA5MiwwLDAuMTksMC4wMDIsMC4yNzUsMC4wMzNjMC4xNzcsMC4wNjMsMC4yNjEsMC4yMDQsMC4yMzIsMC4zODdjLTAuMDMzLDAuMjA1LTAuMTcxLDAuMzEyLTAuMzc4LDAuMzEzDQoJCWMtMC42MzcsMC4wMDMtMS4yNzQsMC4wMDItMS45MTIsMC4wMDNjLTAuMDg0LDAtMC4xNjgsMC0wLjI3MSwwYzAsMC4zMDYsMCwwLjU4MiwwLDAuODU5YzAsMC41MDEsMC4xMDksMC42MSwwLjYwMSwwLjYxDQoJCWM2LjQ0NSwwLDEyLjg5LDAsMTkuMzM0LDBjMC4wNzgsMCwwLjE1OCwwLjAwNCwwLjIzMy0wLjAwOGMwLjIwOS0wLjAzMywwLjM1MS0wLjE1OCwwLjM1OC0wLjM2OQ0KCQlDMjMuNzc1LDE3Ljg3MSwyMy43NjYsMTcuNTE2LDIzLjc2NiwxNy4xMzJ6IE0xMC4wNjUsMjAuNzkxYzIuMzA4LDAsNC41NzIsMCw2Ljg2OSwwYy0wLjIyMi0wLjQ0MS0wLjQzNi0wLjg1OS0wLjYzNy0xLjI4Mw0KCQljLTAuMDYxLTAuMTI3LTAuMTMxLTAuMTc4LTAuMjc1LTAuMTc1Yy0wLjU2MywwLjAwOS0xLjEzMSwwLjAwMy0xLjY5NCwwLjAwM2MtMS4xMTYsMC0yLjIzMS0wLjAwMS0zLjM0NywwLjAwNA0KCQljLTAuMDc1LDAtMC4xOTIsMC4wMjUtMC4yMTksMC4wNzZDMTAuNTIzLDE5Ljg2MSwxMC4zMDMsMjAuMzE0LDEwLjA2NSwyMC43OTF6IE0xMy40OTksMjEuNTM1Yy0xLjc2OCwwLTMuNTM2LDAtNS4zMDQsMA0KCQljLTAuMDcxLDAtMC4xNDQtMC4wMDMtMC4yMTQsMC4wMDNjLTAuMTk4LDAuMDE3LTAuMzM1LDAuMTU3LTAuMzQyLDAuMzQ3Yy0wLjAwOCwwLjE4OCwwLjExOSwwLjM0NiwwLjMxMiwwLjM3Ng0KCQljMC4wNywwLjAxMSwwLjE0MywwLjAwNywwLjIxNCwwLjAwN2MzLjU1OCwwLDcuMTE2LDAsMTAuNjcyLDBjMC4wNzIsMCwwLjE0NiwwLjAwNCwwLjIxNS0wLjAwOA0KCQljMC4xOTItMC4wMzEsMC4zMTgtMC4xODgsMC4zMTItMC4zNzdjLTAuMDEtMC4xODgtMC4xNDYtMC4zMjgtMC4zNDQtMC4zNDVjLTAuMDctMC4wMDYtMC4xNDUtMC4wMDMtMC4yMTUtMC4wMDMNCgkJQzE3LjAzNCwyMS41MzUsMTUuMjY4LDIxLjUzNSwxMy40OTksMjEuNTM1eiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIHN0cm9rZT0iI0E3QUFBRCIgc3Ryb2tlLXdpZHRoPSIwLjc1IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xOS43Myw0LjMwM2MwLjcyNSwwLDEuNDEyLDAsMi4wOTksMA0KCQljMC41NTYsMC4wMDEsMC44MzMsMC4yNzUsMC44MzMsMC44M2MwLjAwMSwyLjM3NywwLjAwMSw0Ljc1NCwwLDcuMTMxYzAsMC41NjEtMC4yODIsMC44MzctMC44NTIsMC44MzcNCgkJYy0wLjYwOCwwLjAwMi0xLjIxOSwwLjAwMi0xLjgyNiwwLjAwMmMtMC4wNzcsMC0wLjE1NCwwLTAuMjI4LDBjLTAuMTUzLDAuNTcxLTAuMzY2LDAuNzMxLTAuOTU1LDAuNzMxDQoJCWMtMy41MzYsMC4wMDEtNy4wNzQsMC4wMDEtMTAuNjEsMGMtMC41ODUsMC0wLjc5NS0wLjE1OC0wLjk1NS0wLjczMWMtMC42MDksMC0xLjIyNC0wLjAyMS0xLjgzNywwLjAwNg0KCQljLTAuNzA2LDAuMDMxLTEuMDg1LTAuMTk2LTEuMDc0LTEuMDYzYzAuMDI4LTIuMjg0LDAuMDItNC41NjgsMC4wMDItNi44NTJDNC4zMjQsNC42MTcsNC42NjEsNC4yNzEsNS4yMzYsNC4yOTYNCgkJQzUuOSw0LjMyNSw2LjU2Niw0LjMwMyw3LjI2OCw0LjMwM2MwLTAuMjI4LTAuMDAxLTAuNDQ3LDAtMC42NjVjMC4wMDMtMC41MSwwLjI4Ny0wLjgsMC43OTgtMC44YzMuNjIzLTAuMDAxLDcuMjQ3LTAuMDAxLDEwLjg3LDANCgkJYzAuNTEsMCwwLjc5MywwLjI5MSwwLjc5NywwLjgwMkMxOS43MzIsMy44NTIsMTkuNzMsNC4wNjUsMTkuNzMsNC4zMDN6IE04LjAxMiwxMC45MjVjMC4wNjctMC4wNzksMC4xMTMtMC4xMywwLjE1Ni0wLjE4NA0KCQljMS4xNTgtMS40NDcsMi4zMTYtMi44OTQsMy40NzUtNC4zNDFjMC4yOTItMC4zNjQsMC40OTUtMC4zNjMsMC43ODIsMC4wMDNjMC44MDQsMS4wMjQsMS42MDgsMi4wNDksMi40MTMsMy4wNzINCgkJYzAuMDQyLDAuMDU0LDAuMDksMC4xMDQsMC4xNDMsMC4xNjNjMC40OTgtMC41LDAuOTgyLTAuOTg2LDEuNDctMS40NzJjMC4yNzEtMC4yNzEsMC40MzQtMC4yNzEsMC43MDQsMA0KCQljMC41NTQsMC41NTEsMS4xMDQsMS4xMDQsMS42NTYsMS42NTVjMC4wNTEsMC4wNTIsMC4xMDYsMC4wOTksMC4xNzYsMC4xNjFjMC0yLjE1NSwwLTQuMjc2LDAtNi4zOTZjLTMuNjY4LDAtNy4zMTksMC0xMC45NzIsMA0KCQlDOC4wMTIsNi4wMzEsOC4wMTIsOC40Niw4LjAxMiwxMC45MjV6IE0xNS40NDUsMTAuMjM5YzAuMDI1LDAuMDM1LDAuMDU4LDAuMDgyLDAuMDkzLDAuMTI2YzAuMjY1LDAuMzM4LDAuNTMyLDAuNjc0LDAuNzk0LDEuMDE0DQoJCWMwLjE0NiwwLjE4OSwwLjEyOSwwLjQwNi0wLjAyOSwwLjUzN2MtMC4xNywwLjE0MS0wLjM3OSwwLjEwOC0wLjU0NS0wLjA4NGMtMC4wMzMtMC4wMzgtMC4wNjMtMC4wNzgtMC4wOTQtMC4xMTgNCgkJYy0xLjE2Ny0xLjQ4Ni0yLjMzNC0yLjk3Mi0zLjUwMS00LjQ1N2MtMC4wNDItMC4wNTMtMC4wODctMC4xMDItMC4xMzgtMC4xNmMtMS4zMzIsMS42NjUtMi42NDYsMy4zMDctMy45NTksNC45NQ0KCQlDOC4wMzIsMTIuMDksOC4wMDQsMTIuMTQ4LDguMDAzLDEyLjJDNy45OTcsMTIuNDkyLDgsMTIuNzg0LDgsMTMuMDg5YzMuNjcyLDAsNy4zMjUsMCwxMC45OTksMGMwLTAuNjY4LDAuMDAzLTEuMzI1LTAuMDA2LTEuOTgyDQoJCWMtMC4wMDEtMC4wNjMtMC4wNzMtMC4xMzQtMC4xMjYtMC4xODdjLTAuNTktMC41OTQtMS4xODYtMS4xODQtMS43NzMtMS43NzljLTAuMDk1LTAuMDk2LTAuMTY4LTAuMjEyLTAuMjQyLTAuMzA3DQoJCUMxNi4zNTQsOS4zMzMsMTUuOTAyLDkuNzgyLDE1LjQ0NSwxMC4yMzl6IE03LjI1MiwxMi4zNTRjMC0yLjQ0NCwwLTQuODc1LDAtNy4zMDJjLTAuNzMzLDAtMS40NTMsMC0yLjE3MSwwDQoJCWMwLDIuNDQxLDAsNC44NjYsMCw3LjMwMkM1LjgxMiwxMi4zNTQsNi41MzEsMTIuMzU0LDcuMjUyLDEyLjM1NHogTTE5Ljc0LDUuMDQ0YzAsMi40NDUsMCw0Ljg3LDAsNy4zMDljMC43MjgsMCwxLjQ0NywwLDIuMTc1LDANCgkJYzAtMi40NCwwLTQuODcxLDAtNy4zMDlDMjEuMTg4LDUuMDQ0LDIwLjQ3NSw1LjA0NCwxOS43NCw1LjA0NHoiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBzdHJva2U9IiNBN0FBQUQiIHN0cm9rZS13aWR0aD0iMC43NSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMTAuOTI3LDE0LjkzOQ0KCQljLTAuMDA0LDAuMjAzLTAuMTc2LDAuMzY5LTAuMzc1LDAuMzU4Yy0wLjE4OS0wLjAwOC0wLjM1MS0wLjE3Ni0wLjM1NC0wLjM2MmMtMC4wMDItMC4xOTksMC4xNjYtMC4zNjUsMC4zNy0wLjM2Mw0KCQlDMTAuNzc2LDE0LjU3MywxMC45MzEsMTQuNzMyLDEwLjkyNywxNC45Mzl6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgc3Ryb2tlPSIjQTdBQUFEIiBzdHJva2Utd2lkdGg9IjAuNzUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTE2LjgsMTQuOTMNCgkJYzAuMDAyLDAuMTk2LTAuMTczLDAuMzcxLTAuMzY4LDAuMzdjLTAuMjAxLTAuMDAxLTAuMzYxLTAuMTctMC4zNTctMC4zNzRjMC4wMDMtMC4yMDEsMC4xNS0wLjM1LDAuMzUzLTAuMzU0DQoJCVMxNi43OTgsMTQuNzI5LDE2LjgsMTQuOTN6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgc3Ryb2tlPSIjQTdBQUFEIiBzdHJva2Utd2lkdGg9IjAuNzUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTEyLjAzOSwxNC41NzINCgkJYzAuMjA4LDAuMDA0LDAuMzYsMC4xNjIsMC4zNTQsMC4zNzNjLTAuMDA1LDAuMTk1LTAuMTY0LDAuMzUzLTAuMzU2LDAuMzU0Yy0wLjE5NywwLjAwMi0wLjM3LTAuMTctMC4zNy0wLjM2Nw0KCQlDMTEuNjY3LDE0LjczLDExLjgzNSwxNC41NjgsMTIuMDM5LDE0LjU3MnoiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBzdHJva2U9IiNBN0FBQUQiIHN0cm9rZS13aWR0aD0iMC43NSIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBkPSJNMTUuMzMyLDE0LjkyOA0KCQljMC4wMDMsMC4xOTctMC4xNjgsMC4zNzEtMC4zNjUsMC4zNzJjLTAuMTkxLDAuMDAxLTAuMzU0LTAuMTU1LTAuMzU5LTAuMzVjLTAuMDEtMC4yMTEsMC4xNDMtMC4zNzIsMC4zNS0wLjM3OA0KCQlDMTUuMTU5LDE0LjU2NiwxNS4zMjksMTQuNzI3LDE1LjMzMiwxNC45Mjh6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgc3Ryb2tlPSIjQTdBQUFEIiBzdHJva2Utd2lkdGg9IjAuNzUiIHN0cm9rZS1taXRlcmxpbWl0PSIxMCIgZD0iTTEzLjUwNiwxNC41NzINCgkJYzAuMjA2LDAuMDA0LDAuMzYzLDAuMTY4LDAuMzU1LDAuMzczYy0wLjAwNywwLjE5My0wLjE2NywwLjM1My0wLjM1OCwwLjM1NGMtMC4xOTgsMC4wMDMtMC4zNjctMC4xNjctMC4zNjYtMC4zNjcNCgkJQzEzLjEzNywxNC43MjcsMTMuMjk5LDE0LjU2OCwxMy41MDYsMTQuNTcyeiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIHN0cm9rZT0iI0E3QUFBRCIgc3Ryb2tlLXdpZHRoPSIwLjc1IiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIGQ9Ik0xNS42OTcsNC4zMDQNCgkJYzAuODEzLDAsMS40NiwwLjY0MiwxLjQ2NCwxLjQ1NWMwLjAwMywwLjgyMS0wLjY0NywxLjQ3NS0xLjQ3LDEuNDczYy0wLjgwNS0wLjAwMi0xLjQ2MS0wLjY2NC0xLjQ1OS0xLjQ2OA0KCQlDMTQuMjMyLDQuOTU3LDE0Ljg4OSw0LjMwNCwxNS42OTcsNC4zMDR6IE0xNS43MDUsNS4wMzZjLTAuNDA2LTAuMDAyLTAuNzQsMC4zMjYtMC43NCwwLjcyOWMwLDAuNDAxLDAuMzM3LDAuNzM2LDAuNzM5LDAuNzMzDQoJCWMwLjM5OS0wLjAwMiwwLjcxOS0wLjMyMiwwLjcyNC0wLjcyMkMxNi40MzQsNS4zNjQsMTYuMTE1LDUuMDM5LDE1LjcwNSw1LjAzNnoiLz4NCjwvZz4NCjwvc3ZnPg0K';
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
	 * Homepage Section Dashboard Icon
	 */
	function rbth_post_type_service_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjMuOTczcHgiIGhlaWdodD0iMjIuNTAxcHgiIHZpZXdCb3g9IjEuNzkxIDAuNjgxIDIzLjk3MyAyMi41MDEiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMS43OTEgMC42ODEgMjMuOTczIDIyLjUwMSINCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMjUuNDk3LDE4LjAyNmMtMC4yNDctMC4zMzYtMC42LTAuNTA3LTEuMDU3LTAuNTA3aC0wLjkwMXYtMS4yMjNsMC44ODYsMC4wMDINCgkJYzAuNDQ0LDAsMS4wMzMtMC4xNzIsMS4zMjQtMC45OTJsMC4wMTUtMy4yNDhsLTAuMDE0LTAuMDgxYy0wLjIzOC0wLjcwNC0wLjc2MS0xLjA0MS0xLjUzNy0wLjk5Nw0KCQljLTAuMDk0LDAuMDA3LTAuMTg3LDAuMDA5LTAuMjc5LDAuMDA5bC0xLjEyMS0wLjAwNlY4LjkzNWgtOC4wNjN2Mi4wMzdoLTEuOTU1VjguOTMzSDQuNzMxdjIuMDUxbC0wLjk2NiwwLjAwMUwzLjE3LDEwLjk4NA0KCQljLTAuMTc5LDAtMC4xOSwwLTAuMTktMC4xOTVWNy45MTNIMS43OTJMMS43OTEsMTEuMWwwLjAxMywwLjA4MWMwLjIyNywwLjY2NSwwLjcwMywxLjAwMiwxLjQxNywxLjAwMmwwLjExNi0wLjAwMw0KCQljMC4yMDQtMC4wMSwwLjQwOS0wLjAxMywwLjYxNS0wLjAxM2wwLjc4LDAuMDA2djAuNjI0YzAuMDAxLDAuOTE1LDAuNTIzLDEuNDM5LDEuNDMyLDEuNDM5aDUuMjI2YzAuODkxLDAsMS40MDMtMC41MTUsMS40MDYtMS40MTINCgkJdi0wLjYzM2gxLjk2djAuNjg2YzAuMDA1LDAuODIzLDAuNTQxLDEuMzU3LDEuMzY2LDEuMzU5bDUuMzQtMC4wMDJjMC44MDUsMCwxLjM1LTAuNTQzLDEuMzU2LTEuMzUxDQoJCWMwLjAwMy0wLjIwOCwwLjAwMi0wLjQxNSwwLjAwMS0wLjYyOXYtMC4wODFsMC44NDYtMC4wMDJjMC4yOCwwLDAuNTU5LDAuMDAxLDAuODM3LDAuMDA3YzAuMDMxLDAsMC4wNjcsMC4wMDEsMC4wNjgsMC4wODUNCgkJYzAuMDA1LDAuOTE1LDAuMDA2LDEuODMyLDAsMi43NDdjMCwwLjA0Ni0wLjAwMSwwLjA5LTAuMTc5LDAuMWwtMC4xNTMtMC4wMDJMNS40LDE1LjExMWMtMC44NDIsMC0xLjM2NywwLjUyOC0xLjM3MSwxLjM3OHYxLjAyOA0KCQljLTAuMDMxLDAuMDAxLTAuMDYzLDAuMDAyLTAuMDk0LDAuMDAybC0wLjgwMiwwLjAwMmMtMC42MzIsMC4wMDUtMS4wNTEsMC4yOTUtMS4yOTgsMC45MDdsLTAuMDQ0LDAuMDYzVjIyLjFsMC4wMTQsMC4wODENCgkJYzAuMjI3LDAuNjY1LDAuNzE1LDEuMDAyLDEuNDQ5LDEuMDAybDAuMDc2LTAuMDAxYzAuMzYzLTAuMDExLDAuNzI3LTAuMDE0LDEuMDktMC4wMTRsMS42NTMsMC4wMDYNCgkJYzAuODMtMC4wMDEsMS4zNjktMC41MzIsMS4zNzQtMS4zNTRjMC4wMDYtMC45NzksMC4wMDYtMS45NTcsMC0yLjkzN2MtMC4wMDQtMC44MzgtMC41MzUtMS4zNi0xLjM4NC0xLjM2Mkg1LjIybDAtMC4xODINCgkJYy0wLjAwMi0wLjMzNC0wLjAwNC0wLjY1OCwwLjAwOS0xLjAxYzAuMDA1LTAuMDA3LDAuMDQ4LTAuMDMxLDAuMTU4LTAuMDMxbDQuNjQtMC4wMDF2MS4yMjRMOS41NywxNy41MjFsLTAuMzUsMC4wMDENCgkJYy0wLjg4NiwwLTEuNDE2LDAuNTI1LTEuNDE3LDEuNDA1Yy0wLjAwMSwwLjk0Ny0wLjAwMSwxLjg5NiwwLDIuODQzYzAuMDAxLDAuODgsMC41MjMsMS40MDQsMS40MDYsMS40MDRsMS42NTksMC4wMDFsMS4yMTktMC4wMDENCgkJYzAuODM2LTAuMDAxLDEuMzc3LTAuNTQyLDEuMzc4LTEuMzc2YzAuMDAzLTAuOTcxLDAuMDAzLTEuOTQsMC0yLjkxMmMtMC4wMDItMC44MjQtMC41MzgtMS4zNTktMS4zNjMtMS4zNjRoLTAuODZ2LTEuMjA1aDUuMDYzDQoJCXYxLjIwNWwtMC40NTEtMC4wMDFsLTAuMzUxLDAuMDAxYy0wLjkwMywwLTEuNDIxLDAuNTE5LTEuNDIxLDEuNDI0djIuODJjMC4wMDEsMC44ODIsMC41MywxLjQwOCwxLjQxNSwxLjQwOGwxLjQzMywwLjAwMQ0KCQlsMS40MzItMC4wMDFjMC44MzgtMC4wMDEsMS4zODEtMC41NCwxLjM4NS0xLjM3MmMwLjAwMi0wLjk3MSwwLjAwMi0xLjk0LDAtMi45MTJjLTAuMDA0LTAuODI2LTAuNTM3LTEuMzYzLTEuMzYtMS4zNjhoLTAuODYyDQoJCXYtMS4yMTFoNC44djEuMjFoLTAuMzM2Yy0wLjE0OCwwLTAuMjk2LDAtMC40NjUsMC4wMDNjLTAuMTUxLDAuMDAyLTAuMzI0LDAuMDA0LTAuNDkyLDAuMDVjLTAuNTUsMC4xNDgtMC45MSwwLjYyMy0wLjkxOSwxLjIwOQ0KCQljLTAuMDEyLDEuMDQtMC4wMTYsMi4wODEsMCwzLjEyMmMwLjAxMSwwLjc0LDAuNTUsMS4yNjIsMS4zMTEsMS4yN2wxLjQwMiwwLjAwMXYtMS4xODhoLTEuMjczYy0wLjE4OSwwLTAuMjI5LTAuMDI1LTAuMjMxLTAuMDI2DQoJCWMtMC4wMDItMC4wMDMtMC4wMjYtMC4wNDEtMC4wMjYtMC4yMTVjLTAuMDAxLTAuOTM4LTAuMDAxLTEuODc5LDAuMDAxLTIuODE4YzAtMC4xNTcsMC4wMjEtMC4xOTMsMC4wMjEtMC4xOTQNCgkJYzAuMDA0LTAuMDAyLDAuMDM4LTAuMDIzLDAuMTg4LTAuMDIzbDEuNDMzLTAuMDAxbDEuNDMxLDAuMDAxYzAuMTUsMCwwLjE4MywwLjAyNSwwLjE4MywwLjAyNXMwLjAyNCwwLjAzMSwwLjAyNCwwLjE3NXYyLjg4Ng0KCQljLTAuMDAxLDAuMTg1LTAuMDA2LDAuMTktMC4xOTUsMC4xOTFIMjMuMDR2MS4xNzhoMC4yNWMwLjEzNCwwLDAuMjY4LDAuMDAzLDAuNCwwLjAwNmMwLjMyOSwwLjAwNSwwLjY1NywwLjAxMywwLjk3NS0wLjAxOQ0KCQljMC41MS0wLjA0NywwLjg3NS0wLjM3MywxLjA4NC0wLjk2OWwwLjAxNS0zLjYxNGwtMC4wOTUtMC4yNDRDMjUuNjE3LDE4LjIyMiwyNS41NjQsMTguMTE5LDI1LjQ5NywxOC4wMjZ6IE0yMS42MzMsMTAuMTE2djIuNjk5DQoJCWMtMC4wMDEsMC4yMzItMC4wMDEsMC4yMzItMC4yMjYsMC4yMzJIMTYuMTZjLTAuMTU1LDAtMC4xODktMC4wMjMtMC4xOS0wLjAyM2MtMC4wMDEtMC4wMDItMC4wMjQtMC4wMzUtMC4wMjQtMC4xODkNCgkJYy0wLjAwMi0wLjkwNi0wLjAwMi0xLjgxMywwLTIuNzJMMjEuNjMzLDEwLjExNnogTTExLjM5MywxMy4wNDdINi4xNDVjLTAuMjI0LDAtMC4yMjQtMC4wMDQtMC4yMjQtMC4yMDl2LTIuNzIzaDUuNjg4djIuNzE5DQoJCWMwLDAuMTU0LTAuMDI0LDAuMTg4LTAuMDI0LDAuMTg4QzExLjU4MywxMy4wMjIsMTEuNTUsMTMuMDQ3LDExLjM5MywxMy4wNDd6IE0xMi4yODEsMjAuNzc0YzAsMC4zMzQsMC4wMDEsMC42NjgtMC4wMDEsMQ0KCQljMCwwLjIxLTAuMDEyLDAuMjEtMC4yMDEsMC4yMWwtMS40NDMsMC4wMDJsLTEuNDQzLTAuMDAyYy0wLjE4OSwwLTAuMjAxLDAtMC4yMDEtMC4yMDd2LTIuODYyYzAtMC4yMDcsMC4wMDQtMC4yMDcsMC4yMDEtMC4yMDcNCgkJbDEuNDQyLTAuMDAybDEuNDQzLDAuMDAyYzAuMTk3LDAsMC4yMDEsMCwwLjIwMiwwLjIwN2wwLDAuOTYxbDAsMC40NzlMMTIuMjgxLDIwLjc3NHogTTE4LjU2MSwyMS43OTENCgkJYzAsMC4xODUtMC4wMDksMC4xOTMtMC4xOTIsMC4xOTNsLTIuOTA2LDAuMDAyYy0wLjE4My0wLjAwMS0wLjE4OC0wLjAxOS0wLjE4OC0wLjE3OWMtMC4wMDQtMC45NzYtMC4wMDQtMS45NTIsMC0yLjkzDQoJCWMwLTAuMTU4LDAuMDExLTAuMTY5LDAuMTY5LTAuMTdsMS40NzYtMC4wMDJsMS40NzgsMC4wMDJjMC4xNDcsMC4wMDEsMC4xNjQsMC4wMDYsMC4xNjUsMC4xNzUNCgkJQzE4LjU2MywxOS44NTIsMTguNTYzLDIwLjgyLDE4LjU2MSwyMS43OTF6IE0zLjAwNCwxOC43MzJjMCwwLDAuMDMtMC4wMjQsMC4xNjItMC4wMjRsMS41OTQtMC4wMDJsMS4zMTMsMC4wMDINCgkJYzAuMTI5LDAsMC4xNjIsMC4wMjEsMC4xNjMsMC4wMjFjMC4wMDEsMC4wMDEsMC4wMjMsMC4wMzMsMC4wMjMsMC4xNzVjMC4wMDIsMC45NjIsMC4wMDIsMS45MjMsMCwyLjg4NA0KCQljMCwwLjE0Mi0wLjAyNSwwLjE3MS0wLjAyNSwwLjE3MWMwLDAtMC4wMzEsMC4wMjYtMC4xODUsMC4wMjZMNC42MywyMS45ODZsLTEuNDQzLTAuMDAyYy0wLjIwOCwwLTAuMjA4LTAuMDA0LTAuMjA4LTAuMTk2di0yLjg4Ng0KCQlDMi45NzksMTguNzY0LDMuMDAzLDE4LjczMiwzLjAwNCwxOC43MzJ6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgZD0iTTIuOTc5LDQuODU2YzAtMC4xOCwwLjAyNC0wLjIxOCwwLjAyNC0wLjIyQzMuMDA3LDQuNjMzLDMuMDQ2LDQuNjA5LDMuMjMsNC42MDloNi4xNjZsMC4wMDUsMS4zNg0KCQljMC4wMDEsMC44NTcsMC41MzMsMS4zOSwxLjM4NywxLjM5aDUuOTU5YzAuODgsMCwxLjQwNS0wLjUyMSwxLjQwNS0xLjM5NVYwLjY4MUg5LjM5OFYzLjQyTDUuOTI2LDMuNDI0DQoJCWMtMC44NjYsMC0xLjczMy0wLjAwMi0yLjYyNi0wLjAxMWMtMC43NzcsMC0xLjI2NywwLjMyOC0xLjQ5NSwxLjAwM0wxLjc5Miw3LjczOWwxLjE4Ny0wLjA2VjQuODU2eiBNMTYuOTYzLDEuODY5djQuMDU5DQoJCWMwLDAuMTc3LTAuMDI0LDAuMjE1LTAuMDI2LDAuMjE3Yy0wLjAwMSwwLjAwMS0wLjAzNiwwLjAyNi0wLjIwNCwwLjAyNmgtNS45MDhjLTAuMTY5LDAtMC4yMDYtMC4wMjQtMC4yMDgtMC4wMjUNCgkJYy0wLjAwMy0wLjAwMy0wLjAyNy0wLjA0MS0wLjAyNy0wLjIxNFYxLjg2OUgxNi45NjN6Ii8+DQoJPHBvbHlnb24gZmlsbD0iI0E3QUFBRCIgcG9pbnRzPSIyMy41MDEsMTkuMjE1IDIyLjgxMSwxOS45NzYgMjIuMzgxLDE5LjQ4NSAyMS41NTEsMjAuMzMzIDIyLjgwNSwyMS41OTYgMjQuMjg2LDIwLjEwNiAJIi8+DQoJPHJlY3QgeD0iNi40NzciIHk9IjEwLjMxMSIgZmlsbD0iI0E3QUFBRCIgd2lkdGg9IjQuNjAyIiBoZWlnaHQ9IjEuMTU1Ii8+DQoJPHJlY3QgeD0iOC44NzUiIHk9IjExLjY4NSIgZmlsbD0iI0E3QUFBRCIgd2lkdGg9IjIuMTk5IiBoZWlnaHQ9IjEuMTY3Ii8+DQoJPHJlY3QgeD0iNi40NjkiIHk9IjExLjY4NSIgZmlsbD0iI0E3QUFBRCIgd2lkdGg9IjIuMTg1IiBoZWlnaHQ9IjEuMTYxIi8+DQoJPHJlY3QgeD0iMTYuNDgyIiB5PSIxMS42OSIgZmlsbD0iI0E3QUFBRCIgd2lkdGg9IjQuNjAzIiBoZWlnaHQ9IjEuMTU0Ii8+DQoJPHJlY3QgeD0iMTYuNDc1IiB5PSIxMC4zMTUiIGZpbGw9IiNBN0FBQUQiIHdpZHRoPSIyLjIwMyIgaGVpZ2h0PSIxLjE1NSIvPg0KCTxyZWN0IHg9IjE4Ljg5NiIgeT0iMTAuMzA3IiBmaWxsPSIjQTdBQUFEIiB3aWR0aD0iMi4xODYiIGhlaWdodD0iMS4xNiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIGQ9Ik0xMS4zODksMTkuNDE4bC0wLjE4NC0wLjE5TDEwLjUsMTkuOTkybC0wLjQzMy0wLjQ5NGwtMC44MTEsMC44MzVsMS4yNiwxLjI1NGwxLjUxNy0xLjUwOWwtMC4xNzUtMC4xNzcNCgkJQzExLjcyNiwxOS43NjksMTEuNTc5LDE5LjYxNSwxMS4zODksMTkuNDE4eiIvPg0KCTxwb2x5Z29uIGZpbGw9IiNBN0FBQUQiIHBvaW50cz0iMTYuNzY0LDE5Ljk3OCAxNi4zMzUsMTkuNDgzIDE1LjUxNiwyMC4zMjkgMTYuODA1LDIxLjYxMiAxOC4zMTIsMjAuMTA4IDE3LjQ4OCwxOS4yMTQgCSIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIGQ9Ik02LjAzNSwyMC4wOThsLTAuODI4LTAuODU2bC0wLjcyNCwwLjc2NWMtMC4wODUtMC4xMDQtMC4xNjYtMC4yMDMtMC4yNDMtMC4yOTdsLTAuMTcxLTAuMjA3TDMuMjEsMjAuMzI1DQoJCWwxLjMwMSwxLjI5M0w2LjAzNSwyMC4wOTh6Ii8+DQoJPHJlY3QgeD0iMTAuNzgxIiB5PSIzLjQzOSIgZmlsbD0iI0E3QUFBRCIgd2lkdGg9IjUuOTgxIiBoZWlnaHQ9IjEuMTU1Ii8+DQoJPHJlY3QgeD0iMTAuNzkyIiB5PSI0LjgwOSIgZmlsbD0iI0E3QUFBRCIgd2lkdGg9IjUuOTc5IiBoZWlnaHQ9IjEuMTU3Ii8+DQoJPHJlY3QgeD0iMTQuMjMiIHk9IjIuMDYiIGZpbGw9IiNBN0FBQUQiIHdpZHRoPSIxLjE2IiBoZWlnaHQ9IjEuMTYzIi8+DQoJPHJlY3QgeD0iMTUuNTk2IiB5PSIyLjA2MiIgZmlsbD0iI0E3QUFBRCIgd2lkdGg9IjEuMTY2IiBoZWlnaHQ9IjEuMTUxIi8+DQo8L2c+DQo8L3N2Zz4NCg==';
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
	 * Homepage Section Dashboard Icon
	 */
	function rbth_post_type_project_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTkuMzE0cHgiIGhlaWdodD0iMjAuNjVweCIgdmlld0JveD0iLTAuNzczIC0wLjIyMSAxOS4zMTQgMjAuNjUiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgLTAuNzczIC0wLjIyMSAxOS4zMTQgMjAuNjUiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgZD0iTTMuNDMxLDEyLjExMWMwLjM5NS0wLjE3OSwwLjU5OS0wLjUyNywwLjU3OC0wLjk5MWMtMC4wMDMtMC4wNTUsMC4wMDEtMC4wNywwLjAxMS0wLjA4DQoJCWMwLjEyNy0wLjEwOCwwLjI1NC0wLjMxMSwwLjI1Mi0wLjUxOWMtMC4wMDItMC4xOTUsMC4wOTQtMC4zNCwwLjI5Ny0wLjU3M2MwLjM5Ny0wLjQ2MSwwLjYxNi0xLjAyMiwwLjYxNS0xLjU4DQoJCWMwLjAwOS0xLjYxNy0xLjA1NS0yLjg0NS0yLjY0Ni0zLjA1NUMxLjUzOSw1LjE4MiwwLjU0MSw1LjU5MS0wLjEwNyw2LjM5MmMtMC41NjQsMC42OTQtMC43ODQsMS41ODItMC42MDQsMi40MzUNCgkJYzAuMDk0LDAuNDQzLDAuMzA2LDAuODM5LDAuNjg4LDEuMjc5YzAuMTAxLDAuMTE2LDAuMTQ4LDAuMjI2LDAuMTU2LDAuMzQ5YzAuMDA5LDAuMTY1LDAuMDczLDAuMzk2LDAuMjI5LDAuNTQ3DQoJCWMwLjAzMSwwLjAzMSwwLjA0NiwwLjA0NSwwLjA0MiwwLjE1OWMtMC4wMTIsMC40NDYsMC4xOTgsMC43ODMsMC41ODEsMC45NDljMC4yMDMsMC41NDYsMC42NTgsMC44NywxLjIyMywwLjg3aDAuMDA4DQoJCUMyLjc4MSwxMi45NzgsMy4yNDQsMTIuNjQyLDMuNDMxLDEyLjExMXogTTMuNTk5LDkuMTA5TDMuNTYsOS4xNTljLTAuMTkzLDAuMjQ1LTAuNDA3LDAuNTE5LTAuNSwwLjg3MUgxLjM1OQ0KCQlDMS4yODQsOS43MjYsMS4xMjIsOS40NDcsMC44NzcsOS4xOTdDMC41ODUsOC44OTksMC40NTYsOC40NjksMC41MjIsOC4wMTNDMC41OTgsNy40OTcsMC45MSw3LjA0LDEuMzU4LDYuNzkyDQoJCWMwLjYwNC0wLjMzNiwxLjM5NC0wLjI3MSwxLjkzLDAuMTUyYzAuNTIxLDAuNDE1LDAuNzQ2LDEuMTA0LDAuNTU4LDEuNzE0QzMuODAyLDguODAyLDMuNzE2LDguOTU4LDMuNTk5LDkuMTA5eiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIGQ9Ik0xOC41MzQsNy4yOTFjLTAuMDAzLTAuMTc5LTAuMDg2LTAuMzgzLTAuMjE2LTAuNTM0Yy0wLjEtMC4xMTQtMC4yMDctMC4yMi0wLjMxMy0wLjMyNA0KCQljLTAuMDc2LTAuMDc0LTAuMTUyLTAuMTQ4LTAuMjI2LTAuMjI4Yy0wLjE3Ni0wLjE4OS0wLjM5Ni0wLjI4Mi0wLjY3My0wLjI4MmwtMy40OTQsMC4wMDJjLTAuNTMyLDAtMC43NywwLjIzNC0wLjc3LDAuNzYxVjkuNjMNCgkJYzAsMC42NzEsMCwxLjM0NSwwLjAwNCwyLjAxNmMwLDAuMTk1LDAuMDU2LDAuMzQ3LDAuMTQ2LDAuNDY0Yy0wLjAzNi0wLjAwMi0wLjA2Mi0wLjAxMy0wLjEwMS0wLjAxM2gtMC45ODUNCgkJYzAuMDgxLTAuMjIxLDAuMTYxLTAuNDQ4LDAuMjEzLTAuNjg4YzAuMjA0LTAuOTI4LDAuMjAzLTEuOTA4LTAuMDAzLTIuOTk3Yy0wLjIwNy0xLjA5Ni0wLjg5OC0xLjgwNi0yLjAwMi0yLjA1Mw0KCQlDOS45OTUsNi4zMzIsOS44NzQsNi4zMTcsOS43NTQsNi4zYzAuMTY4LTAuMDczLDAuMjk1LTAuMjA1LDAuMzU5LTAuMzk0YzAuMjY0LDAuMTI2LDAuNTU5LDAuMDc5LDAuNzgyLTAuMTM2DQoJCWMwLjI1NC0wLjI0NiwwLjUxNi0wLjUxMiwwLjc3My0wLjc5MWMwLjE4NC0wLjIwMSwwLjIxNS0wLjQ3MywwLjA4Ny0wLjcyN2MwLjI3MS0wLjA5LDAuNDMzLTAuMjQ5LDAuNDYtMC42NDgNCgkJYzAuMDItMC4zNTgsMC4wMDktMC43MTktMC4wMDQtMS4wNTZjLTAuMDEtMC4yOTQtMC4xNzYtMC41MTctMC40NTUtMC42MTZjMC4xMjctMC4yNywwLjA4My0wLjU1MS0wLjEzMi0wLjc3OQ0KCQljLTAuMjU4LTAuMjctMC41LTAuNTExLTAuNzM5LTAuNzM4Yy0wLjIyNC0wLjIxMi0wLjUxMy0wLjI1OS0wLjc4LTAuMTI3QzkuOTY1LTAuMDI0LDkuNjgxLTAuMiw5LjI3My0wLjIyTDguNjExLTAuMjIxDQoJCWwtMC4xOCwwLjA0MkM4LjA2Ni0wLjEyMSw3Ljg5NC0wLjAwNCw3Ljc5MSwwLjI5QzcuNTI3LDAuMTU4LDcuMjMzLDAuMjAyLDcuMDE1LDAuNDExYy0wLjI5LDAuMjgtMC41NDgsMC41NDQtMC43ODgsMC44MDMNCgkJQzYuMDQzLDEuNDEyLDYuMDEyLDEuNjgxLDYuMTM5LDEuOTMyQzUuODYzLDIuMDI5LDUuNjkxLDIuMjU4LDUuNjgxLDIuNTU4QzUuNjY4LDIuOTEsNS42NzEsMy4yNzYsNS42ODUsMy42NTENCgkJQzUuNjk4LDMuOTQzLDUuODcsNC4xNjcsNi4xNDcsNC4yNmMtMC4xMywwLjI1OS0wLjEzMSwwLjQ4OCwwLjEzMiwwLjc4NkM2LjQ3NCw1LjI3MSw2LjY5LDUuNDc0LDYuOTMyLDUuNzAybDAuMDg0LDAuMDgNCgkJQzcuMTUxLDUuOTEsNy4zMTIsNS45NzcsNy40ODEsNS45NzdjMC4xMDIsMCwwLjIwMy0wLjAyMywwLjMwNC0wLjA3MUM3Ljg1LDYuMDkzLDcuOTc4LDYuMjIzLDguMTQ2LDYuMjk4DQoJCWMtMC4xMiwwLjAxOS0wLjI0MSwwLjAzMy0wLjM1OSwwLjA2QzYuNjk2LDYuNjAxLDYuMDA1LDcuMjk0LDUuNzg4LDguMzU5QzUuNjk1LDguODIzLDUuNjYyLDkuMjkyLDUuNjQ2LDkuNjAzDQoJCWMtMC4wNTksMC45ODcsMC4wNDcsMS43OTEsMC4zMjksMi40OTRoLTAuOTFjLTAuNjQxLDAtMC44NDcsMC4yMDMtMC44NDcsMC44Mzd2MC40NzljMC4wMDEsMC40OTcsMC4wMDEsMC45OTEtMC4wMTcsMS41MzENCgkJYy0wLjYzOSwwLjc4LTAuOTYsMS42OTItMC45NTcsMi43MXYwLjI1MkgzLjE4MmMtMC41MTEsMC4wMDMtMC43NTksMC4yNDktMC43NTksMC43NTNsMC4wMDEsMC4zMjYNCgkJYzAuMDAxLDAuMjI0LDAuMDAyLDAuNDUyLTAuMDA2LDAuNjgxYy0wLjAxLDAuMzkzLDAuMTg2LDAuNjA0LDAuMzcsMC43MjRsMC4wNjMsMC4wNGgwLjA5NmMzLjI3LDAsNi41MzcsMCw5LjgyOC0wLjAwMw0KCQlsMC4wOTctMC4wMTRsMC4wNjItMC4wNDFjMC4wNzEtMC4wNDYsMC4xMy0wLjA5NCwwLjE3Ny0wLjE0M2MwLjA1NCwwLjA1NywwLjExOCwwLjExLDAuMTk0LDAuMTYxbDAuMDYxLDAuMDM3aDEuNTk2bDAuMDg2LTAuMDENCgkJbDAuMDU5LTAuMDM0YzAuMTc4LTAuMTA0LDAuMzg5LTAuMzExLDAuMzgtMC43MWMtMC4wMDQtMC4xOTgtMC4wMDQtMC4zOTYtMC4wMDMtMC41OTZsLTAuMDAyLTAuNDU1DQoJCWMtMC4wMDMtMC40NTctMC4yNDgtMC43MDYtMC43MTUtMC43MTlsLTAuMTE1LTAuMDAxYzAuMDAxLTAuMTUzLDAuMDAxLTAuMzAxLTAuMDAzLTAuNDQ4Yy0wLjAyOS0wLjkwNS0wLjMzNy0xLjczNy0wLjkxNS0yLjQ3Mw0KCQljLTAuMDIxLTAuMDI4LTAuMDQxLTAuMDg0LTAuMDQyLTAuMTE4Yy0wLjAwOC0wLjUwMy0wLjAwNy0xLjAxNy0wLjAwNi0xLjUxM3YtMC40NzRjMC0wLjIzNy0wLjA1NS0wLjQwNS0wLjE0OS0wLjUzMWwyLjE1NCwwLjAwMQ0KCQlsMi4xNTgtMC4wMDFjMC40MzMsMCwwLjY5LTAuMjYxLDAuNjktMC42OTZDMTguNTQzLDkuOTA5LDE4LjU0MSw4LjU2NCwxOC41MzQsNy4yOTF6IE0xNy4yNjMsMTEuMDYxbC0zLjEyOSwwLjAwMVY5LjYyNQ0KCQljMC4xMTMsMC4xNTEsMC4yMywwLjMwMSwwLjM0OCwwLjQ0OWwwLjE0LDAuMThjMC4xNzcsMC4yMjYsMC4zNjIsMC4zMzUsMC41NjcsMC4zMzVjMC4yNSwwLDAuNDMzLTAuMTY3LDAuNTQ5LTAuMjkzbDEuNDI3LTEuNTg0DQoJCWMwLjA0My0wLjA0OCwwLjA3My0wLjA5MywwLjEwNC0wLjEzOGMtMC4wMDUsMC40OTktMC4wMSwxLTAuMDA5LDEuNDlMMTcuMjYzLDExLjA2MXogTTE2LjIxMSw3Ljg2MmwtMC42ODMsMC43NTlsLTAuMzAxLDAuMzMzDQoJCWMtMC4wNC0wLjA1Mi0wLjA4LTAuMTAyLTAuMTItMC4xNWMtMC4yMzEtMC4yOS0wLjYzMi0wLjM2LTAuOTA2LTAuMTU2Yy0wLjAyOCwwLjAyMS0wLjA0NCwwLjA0OS0wLjA2NywwLjA3M1Y3LjIwM2gxLjM4Nw0KCQljMC40NTgsMCwwLjkxNSwwLDEuMzc1LTAuMDAzYzAuMDQ1LDAsMC4wNzMsMC4wMDcsMC4xNTMsMC4wNzFjMC4xMjksMC4xMDQsMC4yMDUsMC4yMjUsMC4yMTgsMC40NjcNCgkJYy0wLjAxMS0wLjAxMy0wLjAyMi0wLjAyNS0wLjAzMy0wLjAzNUMxNi45MzgsNy40MjQsMTYuNTcxLDcuNDY4LDE2LjIxMSw3Ljg2MnogTTkuODYxLDcuNjA4YzAuNTU4LDAuMTIzLDAuODc3LDAuNDI5LDAuOTc1LDAuOTM1DQoJCWMwLjA2NywwLjM0NiwwLjEwMywwLjY5NCwwLjE0NCwxLjEwOWwwLjAwNywwLjA3MmMwLjAwNCwwLjAzOCwwLjAwNywwLjA3NSwwLjAxMSwwLjExM2MtMC45MzMsMC4xNzctMS42ODEtMC4wMDktMi4zNTUtMC41ODINCgkJQzguNDYyLDkuMTA0LDguMzA1LDguOSw4LjEyLDguNjYyQzcuOTE4LDguNDAzLDcuNzA0LDguMzQ4LDcuNTYyLDguMzQ4Yy0wLjE0MSwwLTAuMzQzLDAuMDUyLTAuNTMyLDAuMjkxDQoJCUM3LjA3Myw4LjQ1LDcuMTQzLDguMjY2LDcuMjUzLDguMDk1YzAuMTU5LTAuMjUsMC40MDUtMC40MDQsMC43NzItMC40ODRDOC42MzQsNy40NzgsOS4yNiw3LjQ3Nyw5Ljg2MSw3LjYwOHogTTcuNTgxLDEwLjAyMw0KCQljMC45LDAuODgxLDIuMDAzLDEuMjYxLDMuMjk5LDEuMTI4Yy0wLjA4MiwwLjM2MS0wLjIxMiwwLjY3Ni0wLjM3LDAuOTQzYy0wLjUyMSwwLjAwNS0xLjAzOSwwLjAwNy0xLjU1OSwwLjAwNw0KCQljLTAuNTA5LDAuMDAxLTEuMDM5LTAuMDAyLTEuNTE0LDAuMDNjLTAuMzA0LTAuNDUxLTAuNDcxLTAuOTY4LTAuNTEtMS41NDZDNy4xNDMsMTAuMzk4LDcuMzU5LDEwLjIxMyw3LjU4MSwxMC4wMjN6IE05LjEzNiwxNy41NDINCgkJdjAuMzU0SDguNzQydi0wLjM1NEg5LjEzNnogTTkuODAyLDE2LjI1MWMtMC41NjgtMC4wMDQtMS4xMzUtMC4wMDQtMS43MDUsMGMtMC4zNTUsMC4wMDUtMC42MDYsMC4yNTUtMC42MjcsMC42MjENCgkJYzAsMC4wMDUsMCwwLjAwOSwwLDAuMDE0SDUuNTA3di0zLjQ5N2g2Ljg4M3YzLjQ5N2gtMS45NjNjMC0wLjAwNSwwLTAuMDEsMC0wLjAxNUMxMC40MDQsMTYuNTAxLDEwLjE1OSwxNi4yNTcsOS44MDIsMTYuMjUxeg0KCQkgTTcuNDg4LDEuNjc5QzcuNTA1LDEuNjYyLDcuNTIzLDEuNjQ0LDcuNTQsMS42MjhDNy42NSwxLjY3OSw3Ljc2MSwxLjcwOSw3Ljg3LDEuNzI0Yy0wLjEwNywwLjA4NC0wLjIwNCwwLjE4LTAuMjg5LDAuMjg3DQoJCUM3LjU2NywxLjg5NCw3LjU0NiwxLjc3Nyw3LjQ4OCwxLjY3OXogTTguOTksMS4wNTVDOS4wMTUsMS4xNjksOS4wNywxLjI3LDkuMTM5LDEuMzYzQzkuMDc1LDEuMzU1LDkuMDE0LDEuMzQzLDguOTQ5LDEuMzQzDQoJCWMtMC4wNjMsMC0wLjEyMiwwLjAxMi0wLjE4NCwwLjAxOUM4LjgzOCwxLjI1OSw4Ljg5LDEuMTQ4LDguOTExLDEuMDU3QzguOTM1LDEuMDU2LDguOTU2LDEuMDU2LDguOTksMS4wNTV6IE0xMC45ODksMy4xMzgNCgkJYy0wLjExMywwLjAyMS0wLjIxNywwLjA3Ny0wLjMxMSwwLjE0OWMwLjAwNy0wLjA2MSwwLjAyLTAuMTE5LDAuMDItMC4xODFjMC0wLjA3MS0wLjAxMi0wLjE0LTAuMDIxLTAuMjA5DQoJCWMwLjA5MSwwLjA3MiwwLjE4NywwLjEzOCwwLjMxMiwwLjE2NmMwLjAwMSwwLjAyMiwwLjAwMywwLjA0NywwLjAwNSwwLjA3NEMxMC45OTIsMy4xMzgsMTAuOTksMy4xMzgsMTAuOTg5LDMuMTM4eiBNMTAuNDA5LDQuNTAyDQoJCWMtMC4wMTgsMC4wMTgtMC4wMzUsMC4wMzQtMC4wNTMsMC4wNTFjLTAuMTAyLTAuMDU0LTAuMjEzLTAuMDgxLTAuMzI1LTAuMDk3YzAuMTA4LTAuMDg3LDAuMjA3LTAuMTg1LDAuMjkyLTAuMjk1DQoJCUMxMC4zMzYsNC4yNzcsMTAuMzUzLDQuMzkzLDEwLjQwOSw0LjUwMnogTTguOTQ3LDIuNjJoMC4wMDJjMC4xMjcsMCwwLjI0NSwwLjA0OSwwLjMzNSwwLjE0YzAuMDkxLDAuMDkxLDAuMTQsMC4yMDksMC4xNCwwLjM0DQoJCWMtMC4wMDMsMC4yNTktMC4yMTYsMC40Ny0wLjQ3NSwwLjQ3Yy0wLjEyOSwwLTAuMjQ5LTAuMDUxLTAuMzQtMC4xNDRjLTAuMDktMC4wOS0wLjEzOC0wLjIwOS0wLjEzNy0wLjMzNA0KCQlDOC40NzUsMi44MzEsOC42ODgsMi42Miw4Ljk0NywyLjYyeiBNMTAuMzcyLDEuNzYyYy0wLjA0MSwwLjA4My0wLjA1NywwLjE2OS0wLjA2MiwwLjI1M2MtMC4wODItMC4xMDQtMC4xNzUtMC4xOTctMC4yNzctMC4yNzkNCgkJYzAuMTE4LTAuMDE2LDAuMjMyLTAuMDQ2LDAuMzMzLTAuMTA0YzAuMDE5LDAuMDE3LDAuMDM0LDAuMDMsMC4wNDcsMC4wNDNDMTAuNDA0LDEuNjk2LDEwLjM5LDEuNzI0LDEwLjM3MiwxLjc2MnogTTcuMjEyLDMuMjc2DQoJCUM3LjEyLDMuMjExLDcuMDE3LDMuMTYxLDYuOTEsMy4xMzJjMC0wLjAyMi0wLjAwMS0wLjA0OC0wLjAwMy0wLjA3NkM3LjAyLDMuMDMyLDcuMTIsMi45NzMsNy4yMTQsMi45MDQNCgkJYy0wLjAwNywwLjA1OS0wLjAyLDAuMTE1LTAuMDIsMC4xNzZDNy4xOTUsMy4xNDYsNy4yMDUsMy4yMTEsNy4yMTIsMy4yNzZ6IE03LjYwMyw0LjJjMC4wMzQsMC4wNDEsMC4wNjMsMC4wODQsMC4xLDAuMTIyDQoJCUM3Ljc1LDQuMzcsNy44MDQsNC40MDgsNy44NTYsNC40NWMtMC4xMDYsMC4wMTktMC4yMTUsMC4wNTYtMC4zMSwwLjExOUM3LjUzMSw0LjU1Miw3LjUxNyw0LjUzNSw3LjUsNC41MTcNCgkJQzcuNTYzLDQuNDEsNy41OTIsNC4zMDMsNy42MDMsNC4yeiBNOC45MzYsNC44NDRoMC4wMDljMC4wNjcsMCwwLjEzMi0wLjAxMywwLjE5Ny0wLjAyYy0wLjA2NSwwLjA4OS0wLjEyLDAuMTg5LTAuMTUzLDAuMzAzDQoJCUM4Ljk3LDUuMTI3LDguOTUxLDUuMTI2LDguOTMzLDUuMTI2QzguOTAyLDUuMDA2LDguODQ4LDQuOTEsOC43ODMsNC44MjlDOC44MzQsNC44MzQsOC44ODQsNC44NDQsOC45MzYsNC44NDR6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==';
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
	 * Homepage Section Dashboard Icon
	 */
	function rbth_post_type_event_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjIuNDk0cHgiIGhlaWdodD0iMjIuNDk5cHgiIHZpZXdCb3g9IjIuMTI3IDAuNTQ5IDIyLjQ5NCAyMi40OTkiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMi4xMjcgMC41NDkgMjIuNDk0IDIyLjQ5OSINCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMjEuNDY5LDE0Ljc2NWMtMC4xOTktMC4zNDYtMC4zOTgtMC42OTItMC41ODgtMS4wODJjMC40OTQtMC41MDUsMC42OTQtMS4yMTksMC41MzUtMS45MDgNCgkJYy0wLjE1OS0wLjY5MS0wLjY1MS0xLjI0Ni0xLjMxNi0xLjQ4NGMtMC4wOTItMC4wMzQtMC4xODgtMC4wNTktMC4yODUtMC4wODNWOS4zNzRjMC4xMjUsMC4xMTksMC4yODksMC4xOTYsMC40ODMsMC4xOTYNCgkJbDAuMTU3LTAuMDI4bDAuMDY4LTAuMDY0YzAuMDgxLTAuMDU5LDAuMjE2LTAuMTU3LDAuMjY0LTAuMzE0YzAuMTU1LTAuNDg5LDAuMjc5LTAuOTgsMC4zOS0xLjQzNw0KCQljMC4wNzktMC4zMjMtMC4xMDItMC42MjktMC40MTktMC43MTNjLTAuMzI2LTAuMDg0LTAuNjQxLDAuMDkyLTAuNzM2LDAuNDEyYy0wLjA3NCwwLjI1My0wLjEzOSwwLjUxMS0wLjIwNywwLjc2Ng0KCQljMC4wMDEtMS41MTcsMC4wMDEtMy4wMzUtMC4wMDItNC41NTFjLTAuMDAyLTEuMDM2LTAuNjg3LTEuODI0LTEuNzA0LTEuOTYxYy0wLjA3NC0wLjAxLTAuMTQ4LTAuMDEzLTAuMjI1LTAuMDEzTDE3Ljc4LDEuNjY3DQoJCWMwLTAuMDYyLDAtMC4xMi0wLjAwMy0wLjE3NmMtMC4wMTMtMC41MjYtMC40MDMtMC45Mi0wLjkyNy0wLjkzNmMtMC4yMjYtMC4wMDctMC40NTMtMC4wMDYtMC42NzcsMA0KCQljLTAuNTIxLDAuMDE2LTAuOTEyLDAuNDA5LTAuOTI4LDAuOTM2Yy0wLjAwMSwwLjA1MS0wLjAwMiwwLjEwMy0wLjAwMiwwLjE1NWgtMS4xNjJjMC0wLjA0OC0wLjAwMS0wLjA5Ni0wLjAwMi0wLjE0NA0KCQljLTAuMDE5LTAuNTU3LTAuNDAzLTAuOTM5LTAuOTU4LTAuOTVsLTAuMjYzLTAuMDAybC0wLjMxOCwwLjAwMmMtMC41ODMsMC4wMDgtMC45NzIsMC4zODgtMC45OTIsMC45NjgNCgkJYy0wLjAwMSwwLjA0Mi0wLjAwMiwwLjA4NS0wLjAwMiwwLjEyOGgtMS4xNTNjMC0wLjA0NywwLTAuMDkzLTAuMDAyLTAuMTM5QzEwLjM3NCwwLjk1OCw5Ljk4LDAuNTY2LDkuNDM2LDAuNTU0DQoJCWMtMC4yMTEtMC4wMDYtMC40MjMtMC4wMDUtMC42MywwQzguMjYzLDAuNTY2LDcuODc0LDAuOTUyLDcuODYsMS40OTZ2MC4xNUg2LjY5MlYxLjUzMWMtMC4wMDYtMC41NzgtMC40LTAuOTcxLTAuOTgtMC45NzkNCgkJTDUuNDEsMC41NDljLTAuMTAyLDAtMC4yMDMsMC4wMDEtMC4zMDQsMC4wMDNDNC41NjcsMC41NjgsNC4xNzksMC45NTYsNC4xNjIsMS40OTdDNC4xNjEsMS41NTEsNC4xNiwxLjYwNSw0LjE2MSwxLjY2DQoJCUMyLjkwNSwxLjY5LDIuMTI3LDIuNDkxLDIuMTI3LDMuNzU5VjE0LjY3YzAsMS4yMzIsMC44MjgsMi4wNjEsMi4wNTksMi4wNjFINy43OGMtMC4xODIsMS4zMzksMC4yNzEsMi4zNzYsMS4zNDksMy4wODYNCgkJYzEuMDU3LDAuNjk2LDIuMjIsMC43MSwzLjM4OSwwLjAzNGwwLjMzNiwwLjU4M2MwLjMwOCwwLjUzNSwwLjYxNiwxLjA3MSwwLjkzLDEuNjA0YzAuMzg4LDAuNjYxLDAuOTk0LDEuMDExLDEuNzUxLDEuMDExDQoJCWwwLjEwOS0wLjAwMmMwLjQyNS0wLjAxOSwwLjc3MS0wLjIwNSwxLjExOC0wLjQxMmMwLjQ4Mi0wLjI4OSwwLjU2LTAuNTcyLDAuMjg1LTEuMDQ4bC0xLjgyNC0zLjE1OGwwLjE4OC0wLjA0Mw0KCQljMC4zNzctMC4wODcsMC43NC0wLjE3MSwxLjExLTAuMjMxYzAuNzY2LTAuMTMsMS41ODEtMC4xOSwyLjU2Ni0wLjE5YzAuNTUxLDAsMS4xMDIsMC4wMTksMS42NTEsMC4wNDNsMC4xMzEsMC4wMDMNCgkJYzAuNTg5LDAsMS4wMDYtMC4yMTMsMS4yNzUtMC42NTRjMC4yODItMC40NzQsMC4yNjMtMC45ODctMC4wNi0xLjUyNkMyMS44NzcsMTUuNDc2LDIxLjY3MywxNS4xMiwyMS40NjksMTQuNzY1eiBNMTIuNzcyLDIuODg3DQoJCVYxLjc3MWgwLjA4NnYxLjExNkgxMi43NzJ6IE0zLjM4OSwzLjM0NkMzLjQyLDMuMDc1LDMuNzM2LDIuODkxLDQuMDIyLDIuODcxYzAuMDQtMC4wMDMsMC4wNzktMC4wMDMsMC4xMi0wLjAwM2gwLjAxNw0KCQljMCwwLjA5MSwwLDAuMTgsMC4wMDEsMC4yNjljMC4wMDksMC41NywwLjM5NywwLjk2LDAuOTY0LDAuOTdjMC4yMjcsMC4wMDYsMC40NTUsMC4wMDcsMC42OC0wLjAwMw0KCQlDNi4yOSw0LjA4MSw2LjY3LDMuNjk3LDYuNjksMy4yMDhjMC4wMDQtMC4xMTEsMC4wMDMtMC4yMjIsMC4wMDItMC4zNGgxLjE2N2MwLDAuMTAxLDAsMC4xOTksMC4wMDIsMC4yOTcNCgkJQzcuODczLDMuNzA2LDguMjYsNC4wOTMsOC44LDQuMTA2YzAuMjE5LDAuMDA2LDAuNDM2LDAuMDA3LDAuNjU2LDBjMC41MjYtMC4wMTcsMC45MS0wLjM5NiwwLjkzNC0wLjkyNQ0KCQljMC4wMDQtMC4wOTksMC4wMDQtMC4xOTgsMC4wMDMtMC4yOTloMS4xNTNjMCwwLjA3OSwwLDAuMTU3LDAuMDAxLDAuMjM1YzAuMDEzLDAuNjAzLDAuMzk0LDAuOTgyLDAuOTkyLDAuOTlsMC4zMjYsMC4wMDMNCgkJYzAuMTAyLDAsMC4yMDMtMC4wMDEsMC4zMDUtMC4wMDVjMC41MDgtMC4wMTksMC44OC0wLjM4OCwwLjkwNy0wLjg5N2MwLjAwNS0wLjExMSwwLjAwNS0wLjIyMiwwLjAwMy0wLjM0aDEuMTY0DQoJCWMtMC4wMDEsMC4xMDQtMC4wMDEsMC4yMDUsMC4wMDIsMC4zMDVjMC4wMTUsMC41MjQsMC40MDUsMC45MTYsMC45MjksMC45MzJjMC4yMzIsMC4wMDcsMC40NjYsMC4wMDgsMC43MDItMC4wMDENCgkJYzAuNTA1LTAuMDIxLDAuODg0LTAuNDAzLDAuODk5LTAuOTA3YzAuMDA0LTAuMTA4LDAuMDA1LTAuMjE3LDAuMDA0LTAuMzI5YzAuMDkzLDAuMDA0LDAuMTc5LDAuMDEsMC4yNjEsMC4wMjgNCgkJYzAuMjI3LDAuMDUsMC41MDUsMC4xODgsMC41NDMsMC41NjJjMC4wMzIsMC4yOTUsMC4wMjQsMC41OTcsMC4wMTcsMC45MTVjLTAuMDAxLDAuMDYxLTAuMDAzLDAuMTIxLTAuMDA0LDAuMTgySDMuMzczDQoJCUMzLjM3Miw0LjQ4NSwzLjM3LDQuNDE3LDMuMzY4LDQuMzQ4QzMuMzU5LDQsMy4zNTEsMy42NywzLjM4OSwzLjM0NnogTTIwLjE5NSwxMi41NTRsLTAuNjctMS4xNg0KCQljMC4yNTIsMC4wMywwLjQ3OSwwLjE4MSwwLjYxOSwwLjQxN0MyMC4yODEsMTIuMDQyLDIwLjI5NSwxMi4zMTcsMjAuMTk1LDEyLjU1NHogTTMuMzM1LDUuNzg1aDE1LjI2OXYxLjA4OQ0KCQljMC4wMDEsMC45NzUsMC4wMDEsMS45NS0wLjAwMSwyLjkyM2MtMC4xODgtMC4zMjQtMC4zNzUtMC42NDktMC41NjMtMC45NzRsLTAuNDI0LTAuNzM0Yy0wLjI5NC0wLjUwNy0wLjc0NC0wLjc5Ny0xLjIzNi0wLjc5Nw0KCQljLTAuNDg1LDAtMC45MzYsMC4yODMtMS4yMzYsMC43NzZDMTUuMTIzLDguMTAyLDE1LjEsOC4xNCwxNS4wNzksOC4xNzRjMC4wMDEtMC4zMjksMC4wMDQtMC42NTcsMC0wLjk4NQ0KCQljLTAuMDAzLTAuMzk2LTAuMjM0LTAuNjM2LTAuNjE5LTAuNjQ0Yy0wLjQ3OS0wLjAwOC0wLjk2LTAuMDA4LTEuNDQxLDBjLTAuMzc3LDAuMDA2LTAuNjE1LDAuMjQyLTAuNjIxLDAuNjE2DQoJCWMtMC4wMDksMC40OC0wLjAwOSwwLjk2MSwwLDEuNDQyYzAuMDA3LDAuMzgsMC4yNDYsMC42MTMsMC42MzksMC42MjFsMC4yNzgsMC4wMDJsMC40MS0wLjAwMWwwLjQyMiwwLjAwMWwwLjI4Ny0wLjAwMg0KCQljMC4wMDEsMCwwLjAwMSwwLDAuMDAyLDBjLTAuNDk2LDAuODEtMS4wMSwxLjY0My0xLjU0NiwyLjQ3NGMtMC4xOTUsMC4zMDEtMC40MzcsMC41NzItMC42OTIsMC44NTlsLTAuMjQsMC4yNzENCgkJYy0wLjI0OSwwLjI4Ny0wLjU0LDAuNTItMC44ODksMC43MDljLTAuMzU4LDAuMTk0LTAuNzA5LDAuMzk5LTEuMDYsMC42MDVjLTAuMTg4LDAuMTEtMC4zNzYsMC4yMi0wLjU2NSwwLjMyOA0KCQljMC4wNTktMC4wOTcsMC4xMDItMC4yMDgsMC4xMDQtMC4zNDdjMC4wMDgtMC40NzUsMC4wMDktMC45NDYsMC0xLjQyYy0wLjAwNi0wLjM4Mi0wLjI1MS0wLjYyMS0wLjYzOS0wLjYyNGwtMC43MDctMC4wMDMNCgkJTDcuNDkyLDEyLjA4Yy0wLjM3NiwwLjAwNS0wLjYyNCwwLjI0NC0wLjYzLDAuNjA4Yy0wLjAxLDAuNDg2LTAuMDEsMC45NzgsMCwxLjQ2NWMwLjAwNywwLjM1NCwwLjI0NiwwLjU4OSwwLjYxLDAuNg0KCQljMC4xLDAuMDAzLDAuMTk5LDAuMDA0LDAuMjk4LDAuMDA0bDAuNDE1LTAuMDAybDAuNTEzLDAuMDAybDAuMTk3LTAuMDAxYzAuMDY0LTAuMDAxLDAuMTE4LTAuMDE4LDAuMTczLTAuMDMNCgkJYy0wLjMwNSwwLjIxNS0wLjU4NywwLjQ2Ni0wLjg0NSwwLjc5Yy0wLjgwNiwwLjAwNS0xLjYxMSwwLjAwNy0yLjQxNywwLjAwN2wtMS43MS0wLjAwM2MtMC40NDgtMC4wMDItMC43NjEtMC4zMDEtMC43NjItMC43MjgNCgkJYy0wLjAwMy0yLjE0LTAuMDAyLTQuMjc4LTAuMDAxLTYuNDE3TDMuMzM1LDUuNzg1eiBNOS43MjQsMTUuNzI5YzAuNDYzLTAuMzAxLDAuOTM1LTAuNTcxLDEuNDM2LTAuODU4DQoJCWMwLjE1My0wLjA4OCwwLjMwNy0wLjE3NiwwLjQ2LTAuMjY1bDEuODg0LDMuMjYzYy0wLjE1MiwwLjA4OS0wLjMwMywwLjE3OS0wLjQ1NSwwLjI2OWMtMC40NDcsMC4yNjQtMC45MSwwLjUzNy0xLjM3NCwwLjc3OQ0KCQljLTAuMjc0LDAuMTQyLTAuNTYzLDAuMjEzLTAuODYxLDAuMjEzYy0wLjUsMC0wLjk4OS0wLjIwOC0xLjM0My0wLjU3MmMtMC4zNTQtMC4zNjMtMC41NDEtMC44NDgtMC41MjctMS4zNjMNCgkJQzguOTYzLDE2LjU1Niw5LjIzMiwxNi4wNDksOS43MjQsMTUuNzI5eiBNMTMuNzQzLDE1Ljg1OGMtMC4zODMtMC42NjUtMC43NjctMS4zMzEtMS4xMzEtMS45NTgNCgkJYzEuMDgtMS4wODEsMS45MDEtMi4zNjksMi41ODgtMy41MTlsMy42ODIsNi4zNzhjLTEuNjYzLDAuMDEyLTMuMDIyLDAuMjA0LTQuMjcxLDAuNjA1TDEzLjc0MywxNS44NTh6IE0xNi4xMDYsOC44MjYNCgkJYzAuMDMxLTAuMDU2LDAuMDYzLTAuMTExLDAuMDk3LTAuMTY4YzAuMDY5LTAuMTE2LDAuMTM2LTAuMTU3LDAuMTczLTAuMTU3YzAuMDM4LDAsMC4xMDgsMC4wNDMsMC4xNzksMC4xNjZsMy4xODUsNS41MTcNCgkJYzAuNDMxLDAuNzQ3LDAuODYsMS40OTMsMS4yOTMsMi4yMzZjMC4xMTEsMC4xOTYsMC4xMTYsMC4yMzksMC4wNzcsMC4zMDRjLTAuMDM3LDAuMDU3LTAuMTIzLDAuMDg2LTAuMjksMC4wNjZsLTAuMjg2LTAuMDINCgkJbC0wLjA0NCwwLjAxNGMtMC4xNDQsMC4wNDctMC4yMTQtMC4wMDktMC4zOTMtMC4zMjNjLTEuMzc4LTIuNDEzLTIuNzcxLTQuODItNC4xNjctNy4yMjVjLTAuMDI4LTAuMDQ5LTAuMDI5LTAuMDY3LTAuMDA3LTAuMTA3DQoJCUMxNS45OSw5LjAzMiwxNi4wNDksOC45MjksMTYuMTA2LDguODI2eiBNMTQuODY0LDIxLjQ4NWMtMC4zMzktMC41NjQtMC42NjctMS4xMzYtMS0xLjcxN0wxMy41NiwxOS4yNGwwLjU1MS0wLjMxOGwxLjY1MiwyLjg2MQ0KCQljLTAuMSwwLjAzNi0wLjE5OSwwLjA1Ni0wLjI5NywwLjA1NkMxNS4yMTYsMjEuODM5LDE1LjAwMiwyMS43MTMsMTQuODY0LDIxLjQ4NXogTTE2LjQ1NCwyLjg4OVYxLjc3M2gwLjEwMXYxLjExNkgxNi40NTR6DQoJCSBNOS4wODQsMi44ODVWMS43NjhoMC4wODN2MS4xMTdIOS4wODR6IE01LjM4MywyLjg4OFYxLjc2N2gwLjA4M3YxLjEyMUg1LjM4M3oiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMjEuOTk2LDExLjA3MWMwLjAyNywwLjAyMywwLjA1NCwwLjA0NSwwLjA3NywwLjA2OWwwLjE3OCwwLjE2OGwwLjE1Mi0wLjE0MmwwLjQ5OC0wLjI2MQ0KCQljMC4zNDMtMC4xOTUsMC42ODgtMC4zOSwxLjAyMS0wLjYwMWMwLjExLTAuMDcsMC4xODgtMC4xNzksMC4yMTYtMC4zMDZjMC4wMzMtMC4xNDgsMC0wLjMxNS0wLjA5Mi0wLjQ2DQoJCUMyMy44NzQsOS4yNjYsMjMuNTYyLDkuMTY5LDIzLjMsOS4zMWMtMC41MSwwLjI3My0wLjk1MSwwLjUzMS0xLjM1MSwwLjc4OGMtMC4xOTgsMC4xMzEtMC4yNTUsMC40NTgtMC4yMDgsMC42MzYNCgkJQzIxLjc4MywxMC44OSwyMS45MDEsMTAuOTksMjEuOTk2LDExLjA3MXoiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMjQuMjM4LDEyLjk4N2MtMC40OTEtMC4xNDktMC45OTUtMC4yODYtMS41LTAuNDA1Yy0wLjMtMC4wNzMtMC41NzcsMC4xMDQtMC42NywwLjQxMQ0KCQljLTAuMDk2LDAuMzMzLDAuMDQ5LDAuNjMyLDAuMzUyLDAuNzI2YzAuMzY0LDAuMTE0LDAuNzMxLDAuMjE0LDEuMDc0LDAuMzA3bDAuNDA1LDAuMTA1bDAuMDczLDAuMDAyDQoJCWMwLjQ1LDAsMC41ODYtMC4yODMsMC42MjMtMC40NDFDMjQuNjg1LDEzLjM3OCwyNC41MzUsMTMuMDgyLDI0LjIzOCwxMi45ODd6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgZD0iTTQuMzg2LDkuNTQyYzAuMDg3LDAuMDY2LDAuMTc2LDAuMTMsMC4yNjUsMC4xOTRjMC4xNDEsMC4xMDEsMC4yODIsMC4yMDMsMC40MSwwLjI4NQ0KCQljLTAuMDQyLDAuMTY0LTAuMDk2LDAuMzI0LTAuMTUsMC40ODRsLTAuMDcxLDAuMjEzYy0wLjA2LDAuMTg1LTAuMjQyLDAuNzUsMC4yNzEsMS4xMTNjMC4xNTMsMC4xMDksMC4zMDgsMC4xNjIsMC40NzMsMC4xNjINCgkJYzAuMjAzLDAsMC40MDgtMC4wOCwwLjY0Ni0wLjI1MmwwLjU5Mi0wLjQyOGwwLjA2MywwLjA0NWMwLjIwMSwwLjE0NywwLjQsMC4yOTIsMC42LDAuNDM0YzAuMzUzLDAuMjUsMC43MjgsMC4yNjMsMS4wNDcsMC4wMzkNCgkJYzAuMzE2LTAuMjI0LDAuNDMtMC42LDAuMzA1LTEuMDA1Yy0wLjA4MS0wLjI2MS0wLjE2My0wLjUyMS0wLjI1OS0wLjc5MkM4LjgxMiw5Ljg3Miw5LjA0Miw5LjcwMiw5LjI3LDkuNTMNCgkJYzAuMzMzLTAuMjUxLDAuNDUxLTAuNjA3LDAuMzI2LTAuOTc4QzkuNDcyLDguMTg3LDkuMTYzLDcuOTc1LDguNzUsNy45NzFMOC40MTUsNy45N0w3LjkxLDcuOTcxTDcuODYzLDcuODI3DQoJCWMtMC4wNzEtMC4yMTYtMC4xNC0wLjQyOS0wLjIxMi0wLjY0QzcuNTEzLDYuNzc2LDcuMjIsNi41NDgsNi44MjIsNi41NDVjLTAuMzkzLDAtMC42OTYsMC4yMzEtMC44MzMsMC42MzMNCgkJYy0wLjA4OCwwLjI2LTAuMTc2LDAuNTItMC4yNTcsMC43OTRDNS41OTgsNy45NjksNS40NjQsNy45NjgsNS4zMyw3Ljk2OEw0Ljg5Nyw3Ljk3MUM0LjQ4NCw3Ljk3NSw0LjE2Niw4LjE5LDQuMDQ1LDguNTQ2DQoJCUMzLjkyLDguOTE2LDQuMDQ3LDkuMjg4LDQuMzg2LDkuNTQyeiBNNy4zNjksMTAuMjE0Yy0wLjItMC4xMzYtMC4zNzEtMC4xOTctMC41NDgtMC4xOTdjLTAuMTc2LDAtMC4zNDUsMC4wNjEtMC41NDMsMC4xOTUNCgkJQzYuNDA1LDkuNzk1LDYuMzExLDkuNDc1LDUuOTQsOS4xNzdjMC40NTYtMC4wMSwwLjcyOC0wLjIwOCwwLjg4LTAuNjQzYzAuMDAxLDAuMDAzLDAuMDAyLDAuMDA3LDAuMDAzLDAuMDExDQoJCWMwLjE0MSwwLjQxMywwLjQzNSwwLjYyNiwwLjg3NywwLjYzNEM3LjMzMSw5LjQ2OCw3LjIzNiw5Ljc2NSw3LjM2OSwxMC4yMTR6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgZD0iTTExLjY4Myw5LjMwN2MtMC40NzQtMC4wMDctMC45NDctMC4wMDYtMS40MTksMEM5Ljg3NCw5LjMxMiw5LjYzNyw5LjU1NSw5LjYzMSw5Ljk1OA0KCQljLTAuMDAyLDAuMTY0LTAuMDAxLDAuMzI4LTAuMDAxLDAuNDkybDAsMC4xOTZsMCwwLjI3YzAsMC4xNDYtMC4wMDEsMC4yOTMsMC4wMDEsMC40NGMwLjAwOSwwLjM4MSwwLjIzOSwwLjYyNCwwLjYwMiwwLjYzMw0KCQljMC4yNSwwLjAwNiwwLjUsMC4wMDksMC43NSwwLjAwOWMwLjIzOSwwLDAuNDc4LTAuMDAyLDAuNzE3LTAuMDA4YzAuMzctMC4wMDgsMC42MDMtMC4yNSwwLjYwNy0wLjYzMQ0KCQljMC4wMDUtMC40NzEsMC4wMDUtMC45NDQsMC0xLjQxNkMxMi4zMDMsOS41NTYsMTIuMDYzLDkuMzEyLDExLjY4Myw5LjMwN3oiLz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMTAuMjQ5LDkuMjIzYzAuMjQsMC4wMDIsMC40NzksMC4wMDMsMC43MTksMC4wMDNjMC4yMzksMCwwLjQ3OS0wLjAwMSwwLjcyLTAuMDAzDQoJCWMwLjM3MS0wLjAwNSwwLjYwOC0wLjI0LDAuNjItMC42MTRjMC4wMDQtMC4xNjQsMC4wMDMtMC4zMjksMC4wMDItMC40OTRsLTAuMDAxLTAuMjE4bDAuMDAxLTAuMTY3DQoJCWMwLjAwMS0wLjE4OSwwLjAwMi0wLjM3OC0wLjAwMi0wLjU2N2MtMC4wMS0wLjM3NC0wLjIzNy0wLjYwOS0wLjU5MS0wLjYxNWMtMC40OTUtMC4wMDktMC45ODktMC4wMS0xLjQ4Ny0wLjAwMQ0KCQljLTAuMzU5LDAuMDA4LTAuNTk0LDAuMjUtMC41OTcsMC42MTZjLTAuMDA1LDAuNDc5LTAuMDA1LDAuOTU4LDAsMS40MzhDOS42MzYsOC45NzQsOS44NzgsOS4yMTgsMTAuMjQ5LDkuMjIzeiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIGQ9Ik02LjE0OSwxMi4wNzlsLTAuMjc3LTAuMDAybC0wLjQzNCwwLjAwMWwtMC40MzQtMC4wMDFsLTAuMjc3LDAuMDAyYy0wLjM4OSwwLjAwOC0wLjYyNCwwLjI0Mi0wLjYyOCwwLjYyOA0KCQljLTAuMDA2LDAuNDcyLTAuMDA2LDAuOTQ0LDAsMS40MTdjMC4wMDQsMC4zOTEsMC4yNCwwLjYyNiwwLjYyOCwwLjYyOWMwLjI0NywwLjAwMywwLjQ5NCwwLjAwNSwwLjc0MSwwLjAwNQ0KCQljMC4yMjUsMCwwLjQ1LTAuMDAyLDAuNjc2LTAuMDA0YzAuMzg1LTAuMDA1LDAuNjI3LTAuMjQ1LDAuNjMyLTAuNjI4YzAuMDA1LTAuNDczLDAuMDA1LTAuOTQ1LDAtMS40MTYNCgkJQzYuNzczLDEyLjMyMyw2LjUzOSwxMi4wODcsNi4xNDksMTIuMDc5eiIvPg0KPC9nPg0KPC9zdmc+DQo=';
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
	 * Homepage Section Dashboard Icon
	 */
	function rbth_post_type_donation_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjEuNzc1cHgiIGhlaWdodD0iMjIuNTAycHgiIHZpZXdCb3g9IjIuMjIzIDAuNDUxIDIxLjc3NSAyMi41MDIiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMi4yMjMgMC40NTEgMjEuNzc1IDIyLjUwMiINCgkgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8Zz4NCgk8cGF0aCBmaWxsPSIjQTdBQUFEIiBkPSJNMjMuOTg4LDE1LjUyMmwwLjAwMi0yLjA3M2MwLTAuNTc1LTAuMjU1LTAuODMyLTAuODI2LTAuODMyaC00LjM2YzAuNTM5LTEuMjA1LDAuNDM4LTIuMzkxLTAuMy0zLjUyNg0KCQlsLTAuMDU5LTAuMDg5Yy0wLjEwNC0wLjE1OC0wLjIwNi0wLjMxNS0wLjI5OS0wLjQ3OWMtMC4zMS0wLjU0Mi0wLjYxOC0xLjA4Ni0wLjkyNi0xLjYzbC0wLjU5OS0xLjA1Ng0KCQljLTAuMzg1LTAuNjgtMC45MjItMS4xODktMS41OTYtMS41MTNjLTAuNjY5LTAuMzIyLTEuMzc4LTAuNDQtMi4wNDUtMC41MmwtMC41NjItMC4wNjZjLTAuNTM3LTAuMDYzLTEuMDczLTAuMTI1LTEuNjA3LTAuMTk3DQoJCWMtMC44MDctMC4xMDctMS40OTktMC40OTgtMi4yMy0wLjkxTDguNDA3LDIuNTMyYzAtMC4wMDEsMC0wLjAwNCwwLTAuMDA3Yy0wLjAyNi0wLjUyOC0wLjI1OC0wLjkyNi0wLjY3LTEuMTUNCgkJQzcuMzMzLDEuMTU2LDYuOTI1LDAuOTQ5LDYuNTE2LDAuNzQxTDYuMDAxLDAuNDc5TDUuNDU3LDAuNDUxTDUuMzc5LDAuNDYzQzQuOTA2LDAuNjE4LDQuNTU4LDAuOTU4LDQuMzQzLDEuNDc0TDMuNjYsMi43NTYNCgkJQzMuMjQsMy41NDYsMi44MTksNC4zMzcsMi40MDIsNS4xMjlDMi4wNDEsNS44MTUsMi4yNDEsNi41NzcsMi44NzgsNi45NDFjMC40NTksMC4yNjIsMC45NTQsMC41MjUsMS40NjksMC43ODINCgkJYzAuNTY5LDAuMjg2LDEuMjQxLDAuMTMsMS42MzYtMC4zNjhjMC4yNDksMC4xNjQsMC40NTgsMC4zOTcsMC42ODgsMC43NkM3LjE0Niw4Ljg2Miw3LjY2LDkuMzUyLDguMjg5LDkuNjU4DQoJCWMwLjkxMSwwLjQ0MywxLjc4MywwLjk5OCwyLjYyNiwxLjUzM2MwLjQwNiwwLjI1OCwwLjgxMiwwLjUxNSwxLjI0NiwwLjc0NmMwLjA4NiwwLjIyNSwwLjE2OSwwLjQ1LDAuMjUyLDAuNjc5SDguNDU3DQoJCWMtMC42NDYsMC4wMDQtMC43ODIsMC40MTktMC43ODIsMC43N2MtMC4wMDMsMi42NDMtMC4wMDYsNS4yODQsMC4wMDEsNy45MjhjMC4wMDMsMC43OTYsMC40NTcsMS4zNzcsMS4yOCwxLjYxM2wxMy42OCwwLjAyNg0KCQlsMC4wMzItMC4wMDljMC45MDMtMC4yNDksMS4zMzgtMC44NjgsMS4zMy0xLjg5NEMyMy45ODMsMTkuMjA4LDIzLjk4NiwxNy4zNjQsMjMuOTg4LDE1LjUyMnogTTEzLjc4OSw4LjA3OWwtMC40MTcsMC4yOTMNCgkJbC0wLjk3Mi0xLjAxMUMxMi45NjYsNy4yNDksMTMuNDA5LDcuNDc5LDEzLjc4OSw4LjA3OXogTTE1LjEwNCw3LjYxMmMtMC4wNy0wLjA5Ni0wLjEzNi0wLjE5NS0wLjIwMS0wLjI5NA0KCQljLTAuMDktMC4xMzUtMC4xOC0wLjI3MS0wLjI3OC0wLjM5OGMtMC40NjYtMC42MDctMS4xLTAuOTE1LTEuODgzLTAuOTE1bC0wLjEyNiwwLjAwMmMtMC4zNTcsMC4wMTUtMC42ODMsMC4wNjQtMC45NywwLjE0Nw0KCQljLTAuNDQ3LDAuMTMtMC43NDgsMC4zOTktMC44NDcsMC43NTdzMC4wMjgsMC43NiwwLjM0NiwxLjEwNGMwLjE1NywwLjE3LDAuMzE5LDAuMzM3LDAuNDgxLDAuNTAzbDAuMzc3LDAuMzg5DQoJCWMwLjIyNiwwLjIzMywwLjQ1MywwLjQ2NiwwLjY3MywwLjcwNGMwLjMyLDAuMzQ4LDAuNDgzLDAuNzYzLDAuNDg0LDEuMjM1YzAsMC4wMzMtMC4wMDYsMC4wNjktMC4wMTQsMC4xMDcNCgkJYy0wLjEwNC0wLjA1Mi0wLjIwOC0wLjEwNi0wLjMwNy0wLjE2OGwtMC45MjktMC41OGMtMC41NjQtMC4zNTQtMS4xMjgtMC43MDctMS42OTYtMS4wNTNDOS44NjYsOC45NDEsOS41MTksOC43NjYsOS4xMDEsOC41NTgNCgkJQzguNTg0LDguMyw4LjIxNSw3Ljk4OCw3Ljk3MSw3LjYwNUM3LjY1NCw3LjEwNyw3LjI1MSw2LjU1Niw2LjY0Niw2LjE1OWwxLjI1LTIuMzUybDAuMDE4LDAuMDENCgkJQzguMDYyLDMuODk1LDguMjA0LDMuOTcsOC4zNDIsNC4wNTJjMC44MzIsMC40OTUsMS43OTksMC44MDIsMi45NTgsMC45MzlsMC4yMTYsMC4wMjVjMC43NjMsMC4wODksMS41NTIsMC4xODEsMi4zMTUsMC4zMjENCgkJYzAuNzIxLDAuMTMzLDEuMjc2LDAuNTUxLDEuNjUsMS4yNDJjMC4xODMsMC4zMzcsMC4zNzMsMC42NjksMC41NzEsMS4wMTVsMC4wMDksMC4wMTVDMTUuNzEsNy41NjMsMTUuMzIzLDcuNTcsMTUuMTA0LDcuNjEyeg0KCQkgTTE0LjUyLDEwLjk2MmMwLjAyNi0wLjQ5NC0wLjA3OC0wLjk4OS0wLjMxOS0xLjUwOGMwLjQ3My0wLjQ1MiwxLjM2My0wLjY0MiwyLjA1Ny0wLjQyMWMwLjY5OSwwLjIyMiwxLjIzNywwLjc3OCwxLjQzOSwxLjQ4NQ0KCQljMC4yMDIsMC43MDksMC4wMzcsMS40NjYtMC40NDQsMi4wMjhjLTAuMDQ3LDAuMDU4LTAuMDgyLDAuMDczLTAuMTcsMC4wNzNoLTAuMDAxYy0wLjk4LTAuMDA4LTEuOTU3LTAuMDA4LTIuOTU1LDANCgkJYy0wLjEwNywwLTAuMTMzLTAuMDI2LTAuMTY0LTAuMDcxbC0wLjIxNy0wLjMxOEMxNC4yMjYsMTEuOTY3LDE0LjQ4NSwxMS41NDIsMTQuNTIsMTAuOTYyeiBNNy4wMjgsMi41MzUNCgkJQzcuMDIxLDIuNTQ4LDcuMDEzLDIuNTY2LDcsMi41OUw0Ljk2Miw2LjQzMkM0Ljk0Niw2LjQ2LDQuOTM1LDYuNDgsNC45MjUsNi40OTVDNC45MDksNi40ODgsNC44ODYsNi40NzcsNC44NTQsNi40Nkw0LjU5Niw2LjMyNA0KCQlDNC4yOCw2LjE1NywzLjk2Myw1Ljk4OSwzLjY1MSw1LjgxNUMzLjYzNyw1LjgwOCwzLjYyLDUuNzkyLDMuNjAyLDUuNzc0QzMuNjE0LDUuNzQ3LDMuNjI1LDUuNzIzLDMuNjM4LDUuN2wyLjAyMS0zLjgwNQ0KCQljMC4wMTctMC4wMzEsMC4wMjktMC4wNTQsMC4wNC0wLjA2OWMwLjAxOCwwLjAwOCwwLjA0NCwwLjAyMSwwLjA4MSwwLjA0QzYuMTc2LDIuMDc2LDYuNTczLDIuMjg2LDYuOTY5LDIuNQ0KCQlDNi45OTUsMi41MTUsNy4wMTQsMi41MjYsNy4wMjgsMi41MzV6IE05LjAzNCwxNi41MjNsMS43NTEsMC4wMDFjMC4wOTcsMCwwLjE5NSwwLDAuMjk0LTAuMDAzDQoJCWMwLjQxNi0wLjAxNiwwLjcwNi0wLjI5NSwwLjcwNi0wLjY3OWMwLTAuMzg3LTAuMjk5LTAuNjcyLTAuNzEzLTAuNjc4Yy0wLjI4Ni0wLjAwMy0wLjU3Mi0wLjAwMy0wLjg1OC0wLjAwM2wtMS4xNDIsMC4wMDENCgkJbC0wLjAyMS0xLjE3NGgxMy41NjJ2MS4xNzRoLTcuNDU0Yy0wLjEwOSwwLTAuMjIsMC4wMDItMC4zMjEsMC4wMjJjLTAuMzMxLDAuMDU3LTAuNTY4LDAuMzUyLTAuNTUzLDAuNjg0DQoJCWMwLjAxMywwLjMyMSwwLjI1MSwwLjU5LDAuNTYzLDAuNjM3YzAuMTAzLDAuMDE3LDAuMjEyLDAuMDE4LDAuMzE4LDAuMDE4aDcuNDY0bC0wLjAwMSw0LjY0N2MwLDAuMzc3LTAuMDQyLDAuNDItMC40MTEsMC40Mg0KCQlsLTYuMzkyLDAuMDAybC02LjM5MS0wLjAwMmMtMC4zNDYsMC0wLjQwMi0wLjA1NS0wLjQwMi0wLjM4OVYxNi41MjN6Ii8+DQoJPHBhdGggZmlsbD0iI0E3QUFBRCIgZD0iTTExLjgyNSwyMC44MzdsNC4wMDYsMC4wMDJsNC4wMDYtMC4wMDJjMC41MTEsMCwwLjc4LTAuMjc0LDAuNzgtMC43OTN2LTEuOTUzDQoJCWMwLTAuNTU1LTAuMjQ5LTAuODAzLTAuODA3LTAuODAzbC0xLjMyNS0wLjAwMWwtNi42NjQsMC4wMDNjLTAuNTEsMC0wLjc2OSwwLjI2LTAuNzY5LDAuNzcxYy0wLjAwMSwwLjY2Ny0wLjAwMSwxLjMzMywwLDINCgkJQzExLjA1NSwyMC41NjgsMTEuMzIxLDIwLjgzNywxMS44MjUsMjAuODM3eiBNMTIuNDIyLDE5LjQ2MnYtMC44MDFoNi44Mjh2MC44MDFIMTIuNDIyeiIvPg0KCTxwYXRoIGZpbGw9IiNBN0FBQUQiIGQ9Ik0xMy4wMzcsMTYuNTJoMC4wMjFjMC4zNzQtMC4wMSwwLjY2MS0wLjMxMywwLjY1My0wLjY4OWMtMC4wMDgtMC4zNzEtMC4zMDQtMC42NjEtMC42ODMtMC42NjENCgkJYy0wLjM2OCwwLjAwNi0wLjY2OCwwLjMwOS0wLjY3LDAuNjc2QzEyLjM1OCwxNi4yMTcsMTIuNjYzLDE2LjUyLDEzLjAzNywxNi41MnogTTEzLjAzNywxNi4yNjhMMTMuMDM3LDE2LjI2OHYwLjAwMlYxNi4yNjh6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==';
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
	 * Homepage Section Dashboard Icon
	 */
	function rbth_post_type_team_icon() {
		return 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjAuNXB4IiBoZWlnaHQ9IjIwLjVweCIgdmlld0JveD0iOC44NzIgMS43NSAyMC41IDIwLjUiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgOC44NzIgMS43NSAyMC41IDIwLjUiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPHBhdGggZmlsbD0iI0E3QUFBRCIgZD0iTTI4LjY1MywxMC4xNDFsLTAuMTg1LDAuMDAyYy0wLjEsMC4wMDQtMC4yMDUsMC4wMzUtMC4zMjIsMC4wOTVjLTAuMTQ0LDAuMDczLTAuMjg3LDAuMTQ4LTAuNDMsMC4yMjQNCglsLTAuMzgyLDAuMjI1Yy0wLjQ1OS0wLjEyNS0wLjkxNi0wLjI1My0xLjM2OC0wLjM4M2MwLjUyMS0wLjQ4LDAuNzk2LTEuMDg0LDAuODIxLTEuODAyYzAuMDItMC41NTUsMC4wMzktMS4xMjgtMC4yMjctMS42ODINCgljLTAuNDItMC44NzgtMS4wOTgtMS4zODItMi4wMTctMS41MDFjMC4wNTUtMC4xMywwLjEwOC0wLjI1OCwwLjE1OC0wLjM4OWMwLjA0OC0wLjEzLDAuMDM3LTAuMzMxLTAuMDc3LTAuNDQ0DQoJYy0wLjQyNC0wLjQzNC0wLjg1My0wLjg2My0xLjI4NC0xLjI5NmwtMC40ODktMC40OTFMMjIuNDc5LDIuOTRjLTAuMjM0LDAuMTUxLTAuNDY0LDAuMjk5LTAuNjkxLDAuNDQ2DQoJYy0wLjE5Mi0wLjA4OC0wLjM4OS0wLjE2OS0wLjU4Ni0wLjI1bC0wLjM4My0wLjE2NGMtMC4wNTEtMC4yNC0wLjA5OC0wLjQ4MS0wLjE0NC0wLjcyMkwyMC41NzcsMS43NWgtMi45MTJsLTAuMDg5LDAuNDYzDQoJYy0wLjA0OSwwLjI1Ny0wLjA5OSwwLjUxNi0wLjE1MiwwLjc3MWMtMC4zMjgsMC4xNDEtMC42NTcsMC4yOC0wLjk3NCwwLjM5OGMtMC4yMDgtMC4xMjktMC40MTMtMC4yNjMtMC42MjEtMC4zOThsLTAuNDM5LTAuMjg1DQoJbC0wLjQzMiwwLjQzM2MtMC40NTIsMC40NTItMC44OTksMC45LTEuMzQxLDEuMzUzQzEzLjUwMyw0LjYsMTMuNDkzLDQuOCwxMy41NDEsNC45M2MwLjA0OSwwLjEzLDAuMTAyLDAuMjYsMC4xNTQsMC4zODMNCgljLTAuMDA4LDAuMDAxLTAuMDE2LDAuMDAzLTAuMDIzLDAuMDA0Yy0wLjIzNywwLjA0OS0wLjQ4MiwwLjEtMC43MTMsMC4yMDJjLTAuOTM0LDAuNDEzLTEuNDUzLDEuMTgtMS41MDEsMi4yMzQNCgljLTAuMDIxLDAuNDYzLTAuMDQ0LDAuOTQyLDAuMTA4LDEuNDI0YzAuMTM5LDAuNDQxLDAuMzgyLDAuODIzLDAuNzIyLDEuMTM2Yy0wLjM0NiwwLjEyMS0wLjY0NSwwLjA2NC0wLjk2NC0wLjE4NQ0KCWMtMC42OTEtMC41NDItMS40MjktMC43NjItMi4yMzgtMC42NDFMOC44NzIsOS41MTl2Ny4wNzVsMC44NjcsMC4yOTNjMC42MzUsMC4yMTUsMS4yNzEsMC40MywxLjkwNiwwLjY0MmwwLjEyNSwwLjA0Mw0KCWMwLjIzMywwLjA4MiwwLjQ3NCwwLjE2NiwwLjc1NSwwLjE2NmwwLjE0OC0wLjAwNWMwLjEtMC4wMDMsMC4zMDctMC4wMDksMC40NC0wLjE1M2wwLjAxMiwwLjAwNw0KCWMwLjIwOCwwLjEyNSwwLjQwNywwLjI0MywwLjYwMywwLjM2M2MwLjEwNCwwLjU0OSwwLjQ0LDAuOTA1LDAuOTgxLDEuMDRjMC4wNzcsMC4zNDIsMC4yNDUsMC41OTYsMC41MDEsMC43NTUNCgljMC4wOTksMC4wNjMsMC4yMDcsMC4wOTYsMC4zMDEsMC4xMjVjMC4wNzYsMC4wMjMsMC4xNjMsMC4wNTEsMC4xOTQsMC4wODFjMC4wMjUsMC4wMjUsMC4wNSwwLjExLDAuMDcsMC4xOA0KCWMwLjAyNywwLjA5MiwwLjA1OCwwLjE5NywwLjExNywwLjI5NGMwLjE1NywwLjI2LDAuNDIxLDAuNDM1LDAuNzYxLDAuNWMwLjExNywwLjU4LDAuNjIzLDEsMS4yMDgsMQ0KCWMwLjE4NCwwLDAuMzYzLTAuMDQxLDAuNTY2LTAuMTA1YzAuMTQ2LDAuMTA3LDAuMzAzLDAuMTk4LDAuNDYxLDAuMjg5bDAuMjQyLDAuMTQzaDAuNTY2bDAuMDU5LTAuMDM0DQoJYzAuMDQ1LTAuMDI2LDAuMDkzLTAuMDQ5LDAuMTQxLTAuMDcyYzAuMTMzLTAuMDY0LDAuMjg0LTAuMTM3LDAuMzk3LTAuMjdjMC4xMjYtMC4xNDksMC4yMTEtMC4zMTYsMC4zMDItMC40OTQNCgljMC4wMjEtMC4wNDEsMC4wNDItMC4wODMsMC4wNjQtMC4xMjZjMC40OTYtMC4xMDksMC44MjctMC40NDksMC45NDMtMC45NjljMC41MTktMC4xMiwwLjg0NC0wLjQ0NSwwLjk2Ny0wLjk3DQoJYzAuNTgzLTAuMTQxLDAuOTM0LTAuNTQ5LDAuOTYtMS4xMzJjMS43LTAuODU3LDMuNDA0LTEuNzA4LDUuMTA3LTIuNTU5bDAuNTExLTAuMjUxbDAuMjI0LTAuMDIzVjEwLjE1TDI4LjY1MywxMC4xNDF6DQoJIE0xMi4wMzIsMTEuODY4TDEwLjk3NCwxNi4xbC0wLjA2Ni0wLjAyMmMtMC4zMDItMC4xLTAuNTk2LTAuMTk4LTAuODg2LTAuMzAxYy0wLjAwNS0wLjIxMy0wLjAwNS0wLjQyNi0wLjAwNC0wLjYzOGwwLTQuNDQ5DQoJYzAuNTcsMC4zMjcsMS4xMzcsMC42NTksMS43MDQsMC45OTFMMTIuMDMyLDExLjg2OHogTTIwLjI2NSwxNi41NjNsLTAuNzMyLDAuODc2bDEuODEyLDEuNTE1YzAuMTM0LDAuMTEyLDAuMTA0LDAuMTUsMC4wODUsMC4xNzcNCgljLTAuMDY5LDAuMDg5LTAuMTUzLDAuMDQzLTAuMjItMC4wMTFjLTAuMzczLTAuMzA2LTAuNzQ0LTAuNjE1LTEuMTE0LTAuOTI0bC0wLjgwNC0wLjY1OWwtMC43MjgsMC44NzFsMS43NjEsMS40NzENCgljMC4wNDIsMC4wMzQsMC4wODQsMC4wNjgsMC4xMiwwLjEwN2MwLjA0OSwwLjA1MywwLjAzOCwwLjA3MiwwLjAyMiwwLjEwMWMtMC4wMjUsMC4wNDQtMC4wNDIsMC4wNDQtMC4wNiwwLjA0NGwtMC4wNzQsMC4wMDMNCglDMjAuMjUsMjAuMDY1LDIwLjE2NSwyMCwyMC4wOCwxOS45MzRjLTAuMjE4LTAuMTY3LTAuNDI0LTAuMzI1LTAuNTg5LTAuNTE0Yy0wLjE5LTAuMjE1LTAuNDMxLTAuNDQtMC43OTQtMC41MzYNCgljLTAuMTIzLTAuNTE2LTAuNDYtMC44NTUtMC45NzEtMC45NzVsLTAuMDA1LTAuMDE3Yy0wLjA0Mi0wLjEyNS0wLjA4Mi0wLjI0My0wLjE0MS0wLjM1MmMtMC4xNzMtMC4zMTgtMC40NTUtMC41MjItMC44MjctMC41OTINCgljLTAuMTE5LTAuNTkyLTAuNjE4LTEuMDA1LTEuMjE0LTEuMDA1Yy0wLjI5NiwwLTAuNTc0LDAuMTA0LTAuODA1LDAuMzAxYy0wLjE4NywwLjE1OS0wLjM1NCwwLjM0LTAuNTE1LDAuNTE0DQoJYy0wLjAyOSwwLjAzMS0wLjA1OSwwLjA2My0wLjA4OCwwLjA5NWwtMC4wMzMtMC4wMmMtMC4yMTMtMC4xMjgtMC40MjItMC4yNTItMC42MjctMC4zOGMwLjI1My0wLjkwMywwLjUxLTEuODA3LDAuNzcyLTIuNzA3DQoJbDAuNTE1LTAuMTE2YzAuNjE2LTAuMTM5LDEuMjUzLTAuMjgzLDEuODgzLTAuMzljMC4zODMtMC4wNjMsMC43NjgtMC4wMSwxLjEyMSwwLjA4NmwtMC4xMDQsMC4wNTMNCgljLTAuMzM1LDAuMTY2LTAuNjcxLDAuMzMyLTEsMC41MTFjLTAuNDcsMC4yNTUtMC43MDYsMC42ODgtMC42ODIsMS4yNTNjMC4wMjMsMC41MzMsMC4yODMsMC45MzYsMC43NTEsMS4xNjINCgljMC40MTcsMC4yMDIsMC44NTgsMC4xODEsMS4yNjItMC4wNThsMS4wOS0wLjY1YzAuMTI5LTAuMDc3LDAuMjM1LTAuMTE0LDAuMzIzLTAuMTE0YzAuMDcyLDAsMC4xNzgsMC4wMjEsMC4zNTQsMC4xOGwwLjY0MywwLjU3Nw0KCWMwLjYzMywwLjU2OCwxLjI2NiwxLjEzNywxLjg5MywxLjcxMmMwLjA2NCwwLjA2LDAuMTExLDAuMTU1LDAuMTExLDAuMTljMCwwLjA0OS0wLjA3MSwwLjA2LTAuMDk3LDAuMDZzLTAuMDYzLTAuMDA2LTAuMTAzLTAuMDM0DQoJYy0wLjEyNS0wLjA4OS0wLjI0Mi0wLjE4OC0wLjM1OS0wLjI4OUwyMC4yNjUsMTYuNTYzeiBNMTUuNTA0LDE3LjA5OGMwLjAwNi0wLjAwNSwwLjAxNS0wLjAxMSwwLjAzLTAuMDExDQoJYzAuMDIzLDAsMC4wNDksMC4wMTMsMC4wNjcsMC4wMzFjMC4wNDEsMC4wNDIsMC4wNSwwLjA3NywwLjA0NCwwLjA5Yy0wLjE3LDAuMTk5LTAuMzU5LDAuMzgtMC41NiwwLjU3bC0wLjExOSwwLjA5Ng0KCWMtMC4wMy0wLjAxOS0wLjA2OC0wLjA0Mi0wLjA3NC0wLjA0N2MtMC4wMTEtMC4wMjQtMC4wMTQtMC4wOS0wLjAxNy0wLjA5NUMxNS4wMzcsMTcuNTM2LDE1LjIzMSwxNy4zNDEsMTUuNTA0LDE3LjA5OHoNCgkgTTE1Ljg4MywxOC42MzJjMC4xNzMtMC4xODYsMC4zNTUtMC4zNjQsMC41NDItMC41MzljMC4wMy0wLjAyOCwwLjA1Ny0wLjAzOCwwLjA3LTAuMDM4bDAuMDE3LDAuMDA2DQoJYzAuMDI4LDAuMDE4LDAuMDYzLDAuMDYzLDAuMDk3LDAuMTA5Yy0wLjAyNSwwLjA0OC0wLjA0NiwwLjA4Ni0wLjA2NiwwLjEwN2MtMC4xNTgsMC4xNzQtMC4zMjYsMC4zMzktMC40OTYsMC41DQoJYy0wLjA0MywwLjA0MS0wLjA4NywwLjA2NC0wLjEyMiwwLjA2NGMtMC4wMDgsMC0wLjAzMywwLTAuMDY2LTAuMDM0QzE1LjgzOSwxOC43ODgsMTUuNzg2LDE4LjczNCwxNS44ODMsMTguNjMyeiBNMTYuODYsMTkuNTkNCglsMC4xMDgtMC4xMTRjMC4xMzYtMC4xNDUsMC4yNjQtMC4yOCwwLjQwNi0wLjM4OGMwLjAxMy0wLjAxMSwwLjA2NC0wLjAzLDAuMTI0LTAuMDNsMC4wMTYtMC4wMDYNCgljMC4wMTQsMC4wMTEsMC4wNDIsMC4wNTEsMC4wNjQsMC4wODNjLTAuMDI0LDAuMDQ4LTAuMDQ2LDAuMDg4LTAuMDY1LDAuMTA5Yy0wLjE1NywwLjE3NS0wLjMyNSwwLjMzOC0wLjQ5NSwwLjUNCgljLTAuMDYsMC4wNTYtMC4xLDAuMTIyLTAuMTksMC4wMzRDMTYuODAzLDE5Ljc1NCwxNi43NTMsMTkuNzAzLDE2Ljg2LDE5LjU5eiBNMTcuODI1LDIwLjU2YzAuMTc2LTAuMTg1LDAuMzU4LTAuMzYzLDAuNTQ0LTAuNTM2DQoJYzAuMDI3LTAuMDI1LDAuMDUxLTAuMDM1LDAuMDYzLTAuMDM1bDAuMDE5LDAuMDA5YzAuMDI3LDAuMDE5LDAuMDU4LDAuMDYsMC4wOTIsMC4xMDVjLTAuMDI3LDAuMDUyLTAuMDUsMC4wOTUtMC4wNzQsMC4xMjENCgljLTAuMTUyLDAuMTY5LTAuMzE1LDAuMzI4LTAuNDgsMC40ODRjLTAuMDQ1LDAuMDQ0LTAuMDkyLDAuMDY4LTAuMTI5LDAuMDY4Yy0wLjAxNCwwLTAuMDM2LTAuMDAzLTAuMDYzLTAuMDMNCglDMTcuNzMyLDIwLjY4NCwxNy43NzYsMjAuNjEsMTcuODI1LDIwLjU2eiBNMTMuMzY0LDEyLjY0MmMtMC4wMDEsMC4wMDQtMC4wMDIsMC4wMDgtMC4wMDMsMC4wMTINCgljLTAuMjAzLDAuNzItMC40MDksMS40MzktMC42MTUsMi4xNTlsLTAuNDksMS43MTNsLTAuMTkyLTAuMDY0bDEtNEMxMy4xNjcsMTIuNTIxLDEzLjI2NywxMi41NzksMTMuMzY0LDEyLjY0MnogTTEzLjIyMiwxMS4yNDINCgljMC4zMDUtMC4wNjMsMC4zNDUtMC4yODgsMC4zNDEtMC40MTZjLTAuMDAzLTAuMTA5LTAuMDAyLTAuMjE4LTAuMDAxLTAuMzI3YzAtMC4xNTMsMC4wMDEtMC4zMDYtMC4wMDYtMC40NTkNCgljLTAuMDA3LTAuMTQ0LTAuMTA0LTAuMzAzLTAuMjMtMC4zNzhjLTAuNTA3LTAuMzA3LTAuNzQ0LTAuNzM4LTAuNzIyLTEuMzE5bDAuMDA1LTAuMTY4YzAuMDA4LTAuMjg1LDAuMDE2LTAuNTU0LDAuMDc4LTAuODAzDQoJYzAuMTE0LTAuNDY0LDAuNTg0LTAuODYzLDEuMDctMC45MDljMC42MTItMC4wNjYsMS4xMjQsMC4yLDEuMzU1LDAuNjg3YzAuMDkzLDAuMTk1LDAuMTU5LDAuNDQ0LDAuMjAyLDAuNzYxDQoJYzAuMDMsMC4yMjQsMC4wMjcsMC40Ny0wLjAxLDAuNzNjLTAuMDYsMC40MzUtMC4yOTEsMC43NzEtMC42ODQsMC45OTZjLTAuMTkxLDAuMTA5LTAuMjgsMC4yNzEtMC4yNzEsMC40OTINCgljMC4wMSwwLjIyMSwwLjAwOSwwLjQ0MiwwLjAwMSwwLjY2NWMtMC4wMDksMC4zMDUsMC4xODUsMC40MTMsMC4zNTEsMC40NWMwLjE5NCwwLjA0MiwwLjM4NiwwLjA5MSwwLjU4NywwLjE0NA0KCWMtMC4xODUsMC4yOTgtMC4yODEsMC42MzItMC4yOTEsMS4wMWMtMC4xNSwwLjAzNy0wLjMwMSwwLjA3LTAuNDUyLDAuMTA0Yy0wLjAwOC0wLjQxNC0wLjIzNy0wLjcxOC0wLjY4Mi0wLjkwOQ0KCUMxMy42NDcsMTEuNTAxLDEzLjQzOCwxMS4zNzcsMTMuMjIyLDExLjI0MkMxMy4yMjIsMTEuMjQyLDEzLjIyMiwxMS4yNDIsMTMuMjIyLDExLjI0MnogTTE4LjQ3NSwzLjU4DQoJYzAuMDIyLTAuMTM0LDAuMDUyLTAuMjY3LDAuMDgxLTAuMzk5YzAuMDItMC4wOTMsMC4wNDEtMC4xODYsMC4wNjEtMC4yODZjMC4zMzQsMC4wMDQsMC42NiwwLjAwNSwxLjAxLDANCgljMC4wNDUsMC4yNDgsMC4wOTUsMC40OTQsMC4xNTksMC43MzdjMC4wNCwwLjE1MiwwLjE4MiwwLjI5NywwLjMzMywwLjMzN2MwLjUyOSwwLjEzNiwxLjAyNSwwLjM0MywxLjQ3MiwwLjYxNA0KCWMwLjA5OSwwLjA2MiwwLjIyNSwwLjEzNiwwLjQ2My0wLjAwNWMwLjIyMi0wLjEzMiwwLjQzOC0wLjI3NSwwLjYzMS0wLjQyNWMwLjExOSwwLjEyNCwwLjI0MSwwLjI0NiwwLjM2MiwwLjM2Nw0KCWMwLjE0NiwwLjE0NiwwLjI5MywwLjI5MywwLjQyLDAuMzg0Yy0wLjA2NywwLjE4Ni0wLjE0OCwwLjM2OS0wLjIyOSwwLjU1MWwtMC4wMzQsMC4wOTJjLTAuMTUyLDAuMTAyLTAuMzA3LDAuMi0wLjQ2NywwLjMwMQ0KCWwtMC4wMTQsMC4wMDljLTAuOTI0LTEuMjE5LTIuMTM1LTEuODM3LTMuNjM1LTEuODM3Yy0xLjQ3MiwwLjAxMS0yLjY3NSwwLjYzNC0zLjU3NywxLjg1MWMtMC4xNTYtMC4xMDItMC4zMDctMC4yMDMtMC40NzUtMC4zMw0KCWMtMC4wODgtMC4yLTAuMTc1LTAuNDAxLTAuMjUyLTAuNjA1YzAuMjMxLTAuMjM5LDAuNDY2LTAuNDc0LDAuNzA0LTAuNzEzbDAuMDU4LTAuMDU4bDAuMDM0LDAuMDIxDQoJYzAuMTk2LDAuMTI1LDAuMzg2LDAuMjQ4LDAuNTcyLDAuMzc1YzAuMTc5LDAuMTIzLDAuMzUzLDAuMTI1LDAuNTM1LDAuMDA5YzAuNDMzLTAuMjc0LDAuOTA2LTAuNDcxLDEuNDA4LTAuNTg0DQoJQzE4LjMxMiwzLjkzNywxOC40MzcsMy44MDQsMTguNDc1LDMuNTh6IE0xNi4yNzEsNi45MTRjLTAuMDIzLTAuMDctMC4wMTktMC4wNzgsMC4wMDItMC4xMTJjMC42NjctMS4wODMsMS42MjItMS42MzUsMi44NDktMS42MzkNCgljMS4yNDIsMCwyLjIwNiwwLjU2NiwyLjg0OSwxLjYzMWMwLDAuMDE2LTAuMDA4LDAuMDUyLTAuMDIzLDAuMTA3Yy0wLjMyMSwxLjE1NC0wLjI1MiwyLjA2NywwLjIyLDIuODcyDQoJYzAuMTAxLDAuMTY5LDAuMjMzLDAuMzAzLDAuMzYzLDAuNDMzYzAuMDI4LDAuMDI4LDAuMDU3LDAuMDU3LDAuMDg3LDAuMDg2Yy0wLjI0NiwwLjA2NC0wLjQ5MywwLjEyNS0wLjc0LDAuMTg2bC0wLjE1MiwwLjA0Ng0KCWMtMC4zMDYtMC4wNzMtMC42MS0wLjE0Ny0wLjkxNC0wLjIyNmMwLjI5My0wLjI2OCwwLjUwNC0wLjU3MSwwLjYyNS0wLjkwNGMwLjQxMi0xLjExOSwwLjI3OS0yLjc0MS0wLjc3OC0zLjU0Ng0KCWMtMC43OTQtMC42MDUtMS42NjktMC43MTktMi41NDQtMC4zMzFjLTAuOTAzLDAuNDAxLTEuNDIsMS4xNTMtMS40OTcsMi4xNzdjLTAuMDA3LDAuMTAxLTAuMDA1LDAuMjAxLTAuMDAzLDAuMzAzbDAuMDAyLDAuMTExDQoJYy0wLjA0NSwwLjc3MSwwLjEzOCwxLjM5NiwwLjU1OSwxLjkwN2MwLjA3MSwwLjA4NiwwLjE1MiwwLjE2NCwwLjIzNCwwLjI0MWMwLjAxMiwwLjAxMiwwLjAyNSwwLjAyMywwLjAzNywwLjAzNQ0KCWMtMC4yODMsMC4wNzMtMC41NjYsMC4xNDQtMC44NDgsMC4yMTNjLTAuMDExLDAuMDAzLTAuMDQ2LDAuMDExLTAuMDU2LDAuMDEyYy0wLjI5Ny0wLjA3MS0wLjU5NS0wLjE0NS0wLjg5LTAuMjIxDQoJYzAuMjY3LTAuMjQ0LDAuNDU1LTAuNTA0LDAuNTc0LTAuNzkxQzE2LjU2MSw4LjY5NywxNi41NzcsNy44MjUsMTYuMjcxLDYuOTE0eiBNMTYuOTU5LDEyLjA4Yy0wLjI0NiwwLTAuNTA1LDAuMDIyLTAuNzcxLDAuMDY1DQoJYzAuMDY3LTAuMjQ0LDAuMjQ5LTAuNDEyLDAuNTMyLTAuNDg2YzAuNTM4LTAuMTQxLDEuMDc5LTAuMjc1LDEuNjIxLTAuNDAyYzAuMjc0LTAuMDY1LDAuNDA1LTAuMjM1LDAuMzg3LTAuNTA2DQoJYy0wLjAwNy0wLjEwNi0wLjAwNS0wLjIxMy0wLjAwNC0wLjMyYzAuMDAxLTAuMTIxLDAuMDAyLTAuMjQzLTAuMDA1LTAuMzY1Yy0wLjAxLTAuMTMxLTAuMDg4LTAuMzE0LTAuMjM4LTAuNDA3DQoJYy0wLjUwNS0wLjMwOC0wLjc0LTAuNzQxLTAuNzE2LTEuMzIybDAuMDA2LTAuMTkzYzAuMDA4LTAuMjcsMC4wMTYtMC41MjUsMC4wNzMtMC43NjFjMC4xMTQtMC40NjQsMC41ODMtMC44NjgsMS4wNjYtMC45MTkNCgljMC42MDUtMC4wNjIsMS4xMjUsMC4yMDEsMS4zNjEsMC42ODJjMC4wOTcsMC4xOTgsMC4xNjUsMC40NDUsMC4xOTgsMC43MTZjMC4wMzIsMC4yNjEsMC4wMjgsMC41NDEtMC4wMSwwLjgxDQoJYy0wLjA2MiwwLjQyLTAuMjkyLDAuNzQ4LTAuNjg4LDAuOTc0Yy0wLjE3OCwwLjEwMi0wLjI2NCwwLjI1NS0wLjI1NywwLjQ1OGMwLjAwOCwwLjIzNSwwLjAwOCwwLjQ3MSwwLjAwMiwwLjcwOA0KCWMtMC4wMDMsMC4xNTgsMC4wNTIsMC4zNjEsMC4zMzksMC40MzJjMC41NDgsMC4xMywxLjA5NiwwLjI3LDEuNjQxLDAuNDFjMC4zOTYsMC4xMDMsMC41ODgsMC4zNCwwLjYwMiwwLjc0Ng0KCWMwLjAwNywwLjE5NiwwLjAwNSwwLjM5MSwwLjAwNCwwLjU4NmMtMC4wMDEsMC4xMTktMC4wMDIsMC4yMzgtMC4wMDEsMC4zNjRjLTAuMDMtMC4wMDQtMC4wNi0wLjAwOS0wLjA4OC0wLjAxN2wtMy45OTUtMS4xMQ0KCUMxNy42ODEsMTIuMTI4LDE3LjMyNCwxMi4wOCwxNi45NTksMTIuMDh6IE0xOS40MTEsMTQuMzI4Yy0wLjI5OCwwLTAuNiwwLjA5NC0wLjkyMywwLjI4N2wtMC4zNTQsMC4yMTMNCgljLTAuMjI3LDAuMTM3LTAuNDU0LDAuMjczLTAuNjgyLDAuNDA3Yy0wLjEzMSwwLjA3OC0wLjI1LDAuMDctMC4zMTEtMC4wMzljLTAuMDMyLTAuMDU5LTAuMDQtMC4xMjMtMC4wMjEtMC4xODMNCgljMC4wMTMtMC4wNDIsMC4wNDQtMC4xMDEsMC4xMjMtMC4xNGMwLjU4OC0wLjMwMywxLjE4MS0wLjU5NywxLjc3NC0wLjg4OWMwLjI3Ny0wLjEzNywwLjU3Ni0wLjE1NCwwLjkyMi0wLjA1Mw0KCWMwLjU1NiwwLjE2MiwxLjExMSwwLjMyLDEuNjY4LDAuNDc5YzAuMTE3LDAuMDMzLDAuMjM3LDAuMDY2LDAuMzU4LDAuMDgzYzAuMzEsMC4wMzksMC41OTItMC4wMTMsMC44NzctMC4xNjUNCgljMS4zODYtMC43MzgsMi43NzUtMS40NjksNC4xNjUtMi4xOTlsMS4yMTgtMC42NDF2MC41M2MtMC4wMDEsMC44MzEtMC4wMDEsMS42NjEsMC4wMDMsMi40OTFsLTAuMDMyLDAuMDU4DQoJYy0xLjcwNSwwLjg0Ny0zLjQwOSwxLjctNS4xMTUsMi41NTNjLTAuNzg4LTAuNzE5LTEuNTgyLTEuNDMxLTIuMzc2LTIuMTQ0bC0wLjE5MS0wLjE3MkMyMC4xNTUsMTQuNDg0LDE5Ljc5NCwxNC4zMjgsMTkuNDExLDE0LjMyOA0KCXogTTI1LjU1Miw3LjM3OGMwLjEzMywwLjQzNywwLjE0NSwwLjkyMSwwLjAzNiwxLjQzOWMtMC4wNzMsMC4zNDItMC4yODUsMC42MTUtMC42MzEsMC44MTFjLTAuMTk4LDAuMTEzLTAuMjg5LDAuMjc4LTAuMjc5LDAuNTA2DQoJYzAuMDEsMC4yMjksMC4wMDgsMC40NTgsMC4wMDIsMC42ODhjLTAuMDAzLDAuMTU0LDAuMDUyLDAuMzUyLDAuMzI5LDAuNDE3YzAuMjc1LDAuMDY1LDAuNTUsMC4xMzUsMC44MzYsMC4yMDhsLTIuNjE0LDEuMzc2DQoJYzAuMDAzLTAuMjI4LDAuMDA0LTAuNDQ2LTAuMDEtMC42NjRjLTAuMDE3LTAuMjY5LTAuMTAzLTAuNTIzLTAuMjYxLTAuNzcxYzAuMTk4LTAuMDUxLDAuMzg4LTAuMSwwLjU3OC0wLjE0Mw0KCWMwLjMwNC0wLjA2NywwLjM2MS0wLjI3OSwwLjM1Ni0wLjQ0N2MtMC4wMDUtMC4xMTQtMC4wMDQtMC4yMjktMC4wMDMtMC4zNDRjMC0wLjEzMywwLjAwMS0wLjI2Ni0wLjAwNS0wLjQwMw0KCWMtMC4wMDktMC4xMjgtMC4wODktMC4zMDEtMC4yMjUtMC4zOGMtMC41MjgtMC4zMTMtMC43Ny0wLjc2NS0wLjczOC0xLjM4MmwwLjAwOS0wLjIyMWMwLjAwOC0wLjI0MSwwLjAxNi0wLjQ2OCwwLjA2OS0wLjY3NA0KCWMwLjE0Ni0wLjU2MiwwLjY1My0wLjkzMywxLjI5My0wLjk0OEwyNC4zMTUsNi4ybDAsMHYwLjI0NUMyNC44MzksNi40NDUsMjUuMzk0LDYuODY0LDI1LjU1Miw3LjM3OHoiLz4NCjwvc3ZnPg0K';
	}
}
