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
		'title'    => esc_html__( 'Blog', 'rb-theme-helper' ),
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

// Default Post Title On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_post_title_blog',
		'label'    => esc_html__( 'Default Post Title On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Default Post Image On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_post_img_blog',
		'label'    => esc_html__( 'Default Post Image On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Separate Category Meta On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_cat_meta_blog',
		'label'    => esc_html__( 'Separate Category Meta On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

// Separate Date Meta On/Off.
new \Kirki\Field\Checkbox_Switch(
	array(
		'settings' => 'rbth_date_meta_blog',
		'label'    => esc_html__( 'Separate Date Meta On/Off', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'off',
		'choices'  => array(
			'on'  => esc_html__( 'Enable', 'rb-theme-helper' ),
			'off' => esc_html__( 'Disable', 'rb-theme-helper' ),
		),
	)
);

/**
 * Post Date Meta Format (Default or Custom)
 */
new \Kirki\Field\Select(
	array(
		'settings' => 'rbth_date_meta_format',
		'label'    => esc_html__( 'Post Date Meta Format', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'default',
		'choices'  => array(
			'default'  => esc_html__( 'Default Date Format', 'rb-theme-helper' ),
			'custom'   => esc_html__( 'Custom Date Format', 'rb-theme-helper' ),
			'relative' => esc_html__( 'Relative Time (e.g., 11 months ago)', 'rb-theme-helper' ),
		),
	)
);

/**
 * Date Sorting (Order)
 */
new \Kirki\Field\Sortable(
	array(
		'settings'        => 'rbth_date_meta_sorting',
		'label'           => esc_html__( 'Date Sorting (Order)', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => array( 'day', 'month', 'year' ),
		'choices'         => array(
			'week_prefix'  => esc_html__( 'Week Prefix', 'rb-theme-helper' ),
			'week'         => esc_html__( 'Week', 'rb-theme-helper' ),

			'day_prefix'   => esc_html__( 'Day Prefix', 'rb-theme-helper' ),
			'day'          => esc_html__( 'Day', 'rb-theme-helper' ),

			'month_prefix' => esc_html__( 'Month Prefix', 'rb-theme-helper' ),
			'month'        => esc_html__( 'Month', 'rb-theme-helper' ),

			'year_prefix'  => esc_html__( 'Year Prefix', 'rb-theme-helper' ),
			'year'         => esc_html__( 'Year', 'rb-theme-helper' ),

			'time_prefix'  => esc_html__( 'Time Prefix', 'rb-theme-helper' ),
			'time'         => esc_html__( 'Time', 'rb-theme-helper' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_format',
				'operator' => '==',
				'value'    => 'custom',
			),
		),
	)
);

/**
 * Prefix List
 *
 * @return array
 */
function get_prefix_option() {
	return array(
		'option-1' => esc_html__( 'comma', 'rb-theme-helper' ),
		'option-2' => esc_html__( 'colon', 'rb-theme-helper' ),
		'option-3' => esc_html__( 'slash', 'rb-theme-helper' ),
		'option-4' => esc_html__( 'space', 'rb-theme-helper' ),
	);
}

/**
 * Prefix List for time
 *
 * @return array
 */
function get_prefix_option_time() {
	return array(
		'option-1' => esc_html__( ', ', 'rb-theme-helper' ),
		'option-2' => esc_html__( 'at', 'rb-theme-helper' ),
		'option-3' => esc_html__( '@', 'rb-theme-helper' ),
	);
}

/**
 * Weekday Prefix
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_week_prefix',
		'label'           => esc_html__( 'Weekday Prefix', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-2',
		'choices'         => get_prefix_option(),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'week_prefix',
			),
		),
	)
);

/**
 * Weekday Format
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_week',
		'label'           => esc_html__( 'Weekday Format', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-1',
		'choices'         => array(
			'option-1' => esc_html__( 'Ex: Sunday – Saturday', 'rb-theme-helper' ),
			'option-2' => esc_html__( 'Ex: Sun – Sat', 'rb-theme-helper' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'week',
			),
		),
	)
);

/**
 * Day Prefix
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_day_prefix',
		'label'           => esc_html__( 'Day Prefix', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-2',
		'choices'         => get_prefix_option(),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'day_prefix',
			),
		),
	)
);

/**
 * Day Format
 */
new \Kirki\Field\Select(
	array(
		'settings' => 'rbth_date_meta_day',
		'label'    => esc_html__( 'Day Format', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 'option-1',
		'choices'  => array(
			'option-1' => esc_html__( 'Ex: 01–31', 'rb-theme-helper' ),
			'option-2' => esc_html__( 'Ex: 1–31', 'rb-theme-helper' ),
			'option-3' => esc_html__( 'Ex: 1st–31st', 'rb-theme-helper' ),
		),
	)
);

/**
 * Month Prefix
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_month_prefix',
		'label'           => esc_html__( 'Month Prefix', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-2',
		'choices'         => get_prefix_option(),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'month_prefix',
			),
		),
	)
);

/**
 * Month Format
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_month',
		'label'           => esc_html__( 'Month Format', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-1',
		'choices'         => array(
			'option-1' => esc_html__( 'Ex: 01–12', 'rb-theme-helper' ),
			'option-2' => esc_html__( 'Ex: 1–12', 'rb-theme-helper' ),
			'option-3' => esc_html__( 'Ex: January – December', 'rb-theme-helper' ),
			'option-4' => esc_html__( 'Ex: Jan – Dec', 'rb-theme-helper' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'month',
			),
		),
	)
);

/**
 * Year Prefix
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_year_prefix',
		'label'           => esc_html__( 'Year Prefix', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-2',
		'choices'         => get_prefix_option(),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'year_prefix',
			),
		),
	)
);

/**
 * Year Format
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_year',
		'label'           => esc_html__( 'Year Format', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-2',
		'choices'         => array(
			'option-1' => esc_html__( 'Ex: 25', 'rb-theme-helper' ),
			'option-2' => esc_html__( 'Ex: 2025', 'rb-theme-helper' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'year',
			),
		),
	)
);

/**
 * Time Prefix
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_time_prefix',
		'label'           => esc_html__( 'Time Prefix', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-2',
		'choices'         => get_prefix_option_time(),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'time_prefix',
			),
		),
	)
);

/**
 * Time Format
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_time',
		'label'           => esc_html__( 'Time Format', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-1',
		'choices'         => array(
			'option-1' => esc_html__( 'Ex: 01:01 am', 'rb-theme-helper' ),
			'option-2' => esc_html__( 'Ex: 1:01 am', 'rb-theme-helper' ),
			'option-3' => esc_html__( 'Ex: 01:01 AM', 'rb-theme-helper' ),
			'option-4' => esc_html__( 'Ex: 1:01 AM', 'rb-theme-helper' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'time',
			),
		),
	)
);

/**
 * Time Format (am/pm)
 */
new \Kirki\Field\Select(
	array(
		'settings'        => 'rbth_date_meta_time_format',
		'label'           => esc_html__( 'Time Format', 'rb-theme-helper' ),
		'section'         => 'rbth_blog',
		'default'         => 'option-1',
		'choices'         => array(
			'option-1' => esc_html__( 'am', 'rb-theme-helper' ),
			'option-2' => esc_html__( 'AM', 'rb-theme-helper' ),
		),
		'active_callback' => array(
			array(
				'setting'  => 'rbth_date_meta_sorting',
				'operator' => 'contains',
				'value'    => 'am_pm',
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

// Per Minute Read Post Words.
new \Kirki\Field\Number(
	array(
		'settings' => 'rbth_read_word',
		'label'    => esc_html__( 'Per Minute Read Post Words', 'rb-theme-helper' ),
		'section'  => 'rbth_blog',
		'default'  => 200,
		'choices'  => array(
			'min'  => 10,
			'max'  => 1000,
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
