<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Post Section
new \Kirki\Section(
	'rbth_post_sec',
	[       
        'priority'    => 160,
		'title'       => esc_html__( 'Post Section', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_option',
	]
);

// Post Meta Active for Blog Top
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_post_meta_blog_top',
		'label'       => __( 'Post Meta Active for Blog Top', 'rb-theme-helper' ),
		'section'     => 'rbth_post_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Post Meta Active for Blog
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_post_meta_blog',
		'label'       => __( 'Post Meta Active for Blog', 'rb-theme-helper' ),
		'section'     => 'rbth_post_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Post Meta List for Blog
new \Kirki\Field\Sortable(
	[
		'settings' => 'rbth_post_meta_list_blog',
		'label'    => __( 'Post Meta List for Blog', 'rb-theme-helper' ),
		'section'  => 'rbth_post_sec',
		'default'  => [ 'author-meta', 'date-meta', 'cat-meta' ],
		'priority' => 10,
		'choices'  => [
			'author-meta' => __( 'Author Meta', 'rb-theme-helper' ),
			'date-meta' => __( 'Date Meta', 'rb-theme-helper' ),
			'cat-meta' => __( 'Category Meta', 'rb-theme-helper' ),
			'comments-meta' => __( 'Comments Meta', 'rb-theme-helper' ),
			'edit-meta' => __( 'Edit Meta', 'rb-theme-helper' ),
		],
		'active_callback' => [
            [
                'setting'  => 'rbth_post_meta_blog',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Post Meta Active for Single Post
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_post_meta_single',
		'label'       => __( 'Post Meta Active for Single Post', 'rb-theme-helper' ),
		'section'     => 'rbth_post_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Post Meta List for Single Post
new \Kirki\Field\Sortable(
	[
		'settings' => 'rbth_post_meta_list_single_post',
		'label'    => __( 'Post Meta List for Single Post', 'rb-theme-helper' ),
		'section'  => 'rbth_post_sec',
		'default'  => [ 'author-meta', 'date-meta', 'cat-meta' ],
		'priority' => 10,
		'choices'  => [
			'author-meta' => __( 'Author Meta', 'rb-theme-helper' ),
			'date-meta' => __( 'Date Meta', 'rb-theme-helper' ),
			'cat-meta' => __( 'Category Meta', 'rb-theme-helper' ),
			'comments-meta' => __( 'Comments Meta', 'rb-theme-helper' ),
			'edit-meta' => __( 'Edit Meta', 'rb-theme-helper' ),
		],
		'active_callback' => [
            [
                'setting'  => 'rbth_post_meta_single',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Post Excerpt Active
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_excerpt',
		'label'       => esc_html__( 'Post Excerpt Active', 'rb-theme-helper' ),
		'section'     => 'rbth_post_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Post Excerpt Total Word
new \Kirki\Field\Number(
	[
		'settings' => 'rbth_excerpt_word',
		'label'    => esc_html__( 'Post Excerpt Total Word', 'rb-theme-helper' ),
		'section'  => 'rbth_post_sec',
		'default'  => 10,
		'choices'  => [
			'min'  => 10,
			'max'  => 50,
			'step' => 1,
		],
		'active_callback' => [
            [
                'setting'  => 'rbth_excerpt',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);