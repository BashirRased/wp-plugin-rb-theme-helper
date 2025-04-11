<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Page Switch Section
new \Kirki\Section(
	'rbth_page_switch_sec',
	[       
        'priority'    => 160,
		'title'       => __( 'Page Switch', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_switch',
	]
);

// Blog Page - Sidebar Select
new \Kirki\Field\Select(
	[
		'settings'    => 'rbth_sidebar_select_blog_page',
		'label'       => esc_html__( 'Blog Page - Sidebar Select', 'rb-theme-helper' ),
		'section'     => 'rbth_page_switch_sec',
		'default'     => 'left_sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'rb-theme-helper' ),
		'choices'     => [
			'left_sidebar' => esc_html__( 'Left Sidebar', 'rb-theme-helper' ),
			'right_sidebar' => esc_html__( 'Right Sidebar', 'rb-theme-helper' ),
			'no_sidebar' => esc_html__( 'No Sidebar', 'rb-theme-helper' )
		],
	]
);

// Blog Details Page - Sidebar Select
new \Kirki\Field\Select(
	[
		'settings'    => 'rbth_sidebar_select_details_page',
		'label'       => esc_html__( 'Blog Details Page - Sidebar Select', 'rb-theme-helper' ),
		'section'     => 'rbth_page_switch_sec',
		'default'     => 'right_sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'rb-theme-helper' ),
		'choices'     => [
			'left_sidebar' => esc_html__( 'Left Sidebar', 'rb-theme-helper' ),
			'right_sidebar' => esc_html__( 'Right Sidebar', 'rb-theme-helper' ),
			'no_sidebar' => esc_html__( 'No Sidebar', 'rb-theme-helper' )
		],
	]
);

// Post Meta On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_post_meta_switch',
		'label'       => __( 'Post Meta On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_page_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Post Meta List
new \Kirki\Field\Sortable(
	[
		'settings' => 'rbth_post_meta_list',
		'label'    => __( 'Post Meta List', 'rb-theme-helper' ),
		'section'  => 'rbth_page_switch_sec',
		'default'  => [ 'author_meta', 'date_meta', 'cat_meta' ],
		'priority' => 10,
		'choices'  => [
			'author_meta' => __( 'Author Meta', 'rb-theme-helper' ),
			'date_meta' => __( 'Date Meta', 'rb-theme-helper' ),
			'cat_meta' => __( 'Category Meta', 'rb-theme-helper' ),
			'comments_meta' => __( 'Comments Meta', 'rb-theme-helper' ),
			'edit_meta' => __( 'Edit Meta', 'rb-theme-helper' ),
		],
		'active_callback' => [
            [
                'setting'  => 'rbth_post_meta_switch',
                'operator' => '==',
                'value'    => '1',
            ]
        ]
	]
);

// Post Excerpt On/Off
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_excerpt_switch',
		'label'       => __( 'Post Excerpt On/Off', 'rb-theme-helper' ),
		'section'     => 'rbth_page_switch_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Post Excerpt Total Word
new \Kirki\Field\Number(
	[
		'settings' => 'rbth_excerpt_word',
		'label'    => __( 'Post Excerpt Total Word', 'rb-theme-helper' ),
		'section'  => 'rbth_page_switch_sec',
		'default'  => 20,
		'choices'  => [
			'min'  => 20,
			'max'  => 50,
			'step' => 1,
		],
		'active_callback' => [
            [
                'setting'  => 'rbth_excerpt_switch',
                'operator' => '==',
                'value'    => '1',
            ]
        ]
	]
);
