<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// General Section
new \Kirki\Section(
	'rbth_general',
	[       
		'priority'    => 160,
		'title'       => __( 'General', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_option',
	]
);

// Theme Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_theme_color',
		'label'       => __( 'Theme Color', 'rb-theme-helper' ),
		'section'     => 'rbth_general',
		'default'     => '#f93601',
	]
);

// Theme Color Change
if ( !function_exists( 'rbth_theme_color_change' ) ) {
    function rbth_theme_color_change() {
        ?>		
		<style>
			:root {
				--primary-color: <?php echo esc_html(get_theme_mod( 'rbth_theme_color', '#f93601' )); ?>;
			}
		</style>
		<?php
    }
	add_action( 'wp_head', 'rbth_theme_color_change');
}

// Preloader
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_preloader',
		'label'       => __( 'Preloader Active', 'rb-theme-helper' ),
		'section'     => 'rbth_general',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);

// Dark Mode
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_dark_mode',
		'label'       => __( 'Dark Mode Active', 'rb-theme-helper' ),
		'section'     => 'rbth_general',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		],
	]
);