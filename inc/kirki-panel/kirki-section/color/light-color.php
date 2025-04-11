<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Color Section
new \Kirki\Section(
	'rbth_light_color_sec',
	[       
		'priority'    => 160,
		'title'       => __( 'Light Color', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_color',
	]
);

// White Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_white_color',
		'label'       => __( 'White Color', 'rb-theme-helper' ),
		'section'     => 'rbth_light_color_sec',
		'default'     => '#ffffff',
	]
);

// Light Text Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_light_text_color',
		'label'       => __( 'Light Text Color', 'rb-theme-helper' ),
		'section'     => 'rbth_light_color_sec',
		'default'     => '#89879f',
	]
);

// Light Text Grey Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_light_grey_text_color',
		'label'       => __( 'Light Text Grey Color', 'rb-theme-helper' ),
		'section'     => 'rbth_light_color_sec',
		'default'     => '#7e7e7e',
	]
);

// Light Border Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_light_border_color',
		'label'       => __( 'Light Border Color', 'rb-theme-helper' ),
		'section'     => 'rbth_light_color_sec',
		'default'     => '#d2d2d2',
	]
);

// Light Background Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_light_bg_color',
		'label'       => __( 'Light Background Color', 'rb-theme-helper' ),
		'section'     => 'rbth_light_color_sec',
		'default'     => '#f4f4f4',
	]
);

// Light Background Secondary Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_light_bg_secondary_color',
		'label'       => __( 'Light Background Secondary Color', 'rb-theme-helper' ),
		'section'     => 'rbth_light_color_sec',
		'default'     => '#e5e5e5',
	]
);

// Theme Color Change
if ( !function_exists( 'rbth_light_color_change' ) ) {
    function rbth_light_color_change() {
        ?>		
		<style>
			:root {
				--white-color: <?php echo esc_html( (get_theme_mod( 'rbth_white_color', '#ffffff' )) ) ; ?>;
				--light-text-color: <?php echo esc_html( (get_theme_mod( 'rbth_light_text_color', '#89879f' )) ) ; ?>;
				--light-grey-text-color: <?php echo esc_html( (get_theme_mod( 'rbth_light_grey_text_color', '#7e7e7e' )) ) ; ?>;
				--light-border-color: <?php echo esc_html( (get_theme_mod( 'rbth_light_border_color', '#d2d2d2' )) ) ; ?>;
				--light-bg-color: <?php echo esc_html( (get_theme_mod( 'rbth_light_bg_color', '#f4f4f4' )) ) ; ?>;
				--light-bg-secondary-color: <?php echo esc_html( (get_theme_mod( 'rbth_light_bg_secondary_color', '#e5e5e5' )) ) ; ?>;
			}
		</style>
		<?php
    }
	add_action( 'wp_head', 'rbth_light_color_change');
}