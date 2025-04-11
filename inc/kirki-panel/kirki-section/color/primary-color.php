<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Primary Color Section
new \Kirki\Section(
	'rbth_primary_color_sec',
	[       
		'priority'    => 160,
		'title'       => __( 'Primary Color', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_color',
	]
);

// Primary Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_primary_color',
		'label'       => __( 'Primary Color', 'rb-theme-helper' ),
		'section'     => 'rbth_primary_color_sec',
		'default'     => '#f93601',
	]
);

// Primary Color - Light
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_primary_color_light',
		'label'       => __( 'Primary Color - Light', 'rb-theme-helper' ),
		'section'     => 'rbth_primary_color_sec',
		'default'     => '#fca78e',
	]
);

// Primary Color - Dark
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_primary_color_dark',
		'label'       => __( 'Primary Color - Dark', 'rb-theme-helper' ),
		'section'     => 'rbth_primary_color_sec',
		'default'     => '#d41900',
	]
);

// Primary Color Change
if ( !function_exists( 'rbth_primary_color_change' ) ) {
    function rbth_primary_color_change() {
        ?>		
		<style>
			:root {
				--primary-color: <?php echo esc_html( (get_theme_mod( 'rbth_primary_color', '#f93601' )) ) ; ?>;
				--primary-color-light: <?php echo esc_html( (get_theme_mod( 'rbth_primary_color_light', '#fca78e' )) ) ; ?>;
				--primary-color-dark: <?php echo esc_html( (get_theme_mod( 'rbth_primary_color_dark', '#d41900' )) ) ; ?>;
			}
		</style>
		<?php
    }
	add_action( 'wp_head', 'rbth_primary_color_change');
}