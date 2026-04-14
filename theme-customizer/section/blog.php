<?php
/**
 * Blog page Options
 *
 * @package    RB_Plugins
 * @subpackage RB_Theme_Helper
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * ==================================================
 * BLOG SECTION
 * ==================================================
 */
new \Kirki\Section(
	'rbth_blog',
	array(
		'priority' => 13,
		'title'    => esc_html__( 'Blog Settings', 'rb-theme-helper' ),
		'panel'    => 'rbth_theme_options',
	)
);

// Sidebar Choose.
new \Kirki\Field\Select(
	array(
		'settings' => 'rbth_sidebar_choose',
		'label'    => esc_html__( 'Sidebar Choose', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'default',
		'choices'  => array(
			'default' => esc_html__( 'Default', 'rb-theme-helper' ),
			'custom'  => esc_html__( 'Custom', 'rb-theme-helper' ),
		),
	)
);

// Sidebar Position (only if "Custom" is selected).
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_sidebar_position',
		'label'           => esc_html__( 'Sidebar Position', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'no-sidebar',
		'choices'         => array(
			'no-sidebar'    => esc_html__( 'No Sidebar', 'rb-theme-helper' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'rb-theme-helper' ),
			'right-sidebar' => esc_html__( 'Right Sidebar', 'rb-theme-helper' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_sidebar_choose',
				'operator' => '==',
				'value'    => 'custom',
			),
		),
	)
);

// Post Meta List On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_meta_list_on_off',
		'label'    => esc_html__( 'Post Meta List On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 0, // Use 0/1 instead of 'off/on'.
		'choices'  => array(
			1 => esc_html__( 'Enable', 'rb-theme-helper' ),
			0 => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Post Meta List.
new \Kirki\Field\Sortable(
	array(
		'settings'        => 'rbth_meta_list',
		'label'           => esc_html__( 'Post Meta List', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => array( 'author_meta', 'comment_meta' ),
		'priority'        => 10,
		'choices'         => array(
			'author_meta'   => esc_html__( 'Author Meta', 'rb-theme-helper' ),
			'comment_meta'  => esc_html__( 'Comment Meta', 'rb-theme-helper' ),
			'date_meta'     => esc_html__( 'Date Meta', 'rb-theme-helper' ),
			'category_meta' => esc_html__( 'Category Meta', 'rb-theme-helper' ),
			'tag_meta'      => esc_html__( 'Tag Meta', 'rb-theme-helper' ),
			'edit_meta'     => esc_html__( 'Edit Meta', 'rb-theme-helper' ),
			'view_meta'     => esc_html__( 'View Meta', 'rb-theme-helper' ),
			'read_meta'     => esc_html__( 'Read Meta', 'rb-theme-helper' ),
		),
		'active_callback' => function () {
			$val = get_theme_mod( 'rbth_meta_list_on_off', 0 );
			return 1 === (int) $val;
		},
	)
);

// Post Excerpt More Text Dots On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_excerpt_more_text',
		'label'    => esc_html__( 'Post Excerpt More Text Dots On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Post Excerpt Words.
new \Kirki\Field\Number(
	array(
		'settings' => 'rbth_excerpt_word',
		'label'    => esc_html__( 'Post Excerpt Words', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 30,
		'choices'  => array(
			'min'  => 10,
			'max'  => 50,
			'step' => 1,
		),
	)
);

// Read More Button On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_read_more_btn',
		'label'    => esc_html__( 'Read More Button On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);
