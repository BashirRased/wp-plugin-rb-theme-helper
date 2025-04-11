<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Secondary Color Section
new \Kirki\Section(
	'rbth_secondary_color_sec',
	[       
		'priority'    => 160,
		'title'       => __( 'Secondary Color', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_color',
	]
);

// Secondary Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_secondary_color',
		'label'       => __( 'Secondary Color', 'rb-theme-helper' ),
		'section'     => 'rbth_secondary_color_sec',
		'default'     => '#007bff',
	]
);

// Secondary Color - Light
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_secondary_color_light',
		'label'       => __( 'Secondary Color - Light', 'rb-theme-helper' ),
		'section'     => 'rbth_secondary_color_sec',
		'default'     => '#8ed3fe',
	]
);

// Secondary Color - Dark
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_secondary_color_dark',
		'label'       => __( 'Secondary Color - Dark', 'rb-theme-helper' ),
		'section'     => 'rbth_secondary_color_sec',
		'default'     => '#126aec',
	]
);

// Secondary Color Change
if ( !function_exists( 'rbth_secondary_color_change' ) ) {
    function rbth_secondary_color_change() {
        ?>		
		<style>
			:root {
				--secondary-color: <?php echo esc_html ( (get_theme_mod( 'rbth_secondary_color', '#007bff' )) ) ; ?>;
				--secondary-color-light: <?php echo esc_html ( (get_theme_mod( 'rbth_secondary_color_light', '#8ed3fe' ))) ; ?>;
				--secondary-color-dark: <?php echo esc_html ( (get_theme_mod( 'rbth_secondary_color_dark', '#126aec' )) ) ; ?>;
			}
		</style>
		<?php
    }
	add_action( 'wp_head', 'rbth_secondary_color_change');
}