<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Color Section
new \Kirki\Section(
	'rbth_dark_color_sec',
	[       
		'priority'    => 160,
		'title'       => __( 'Dark Color', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_color',
	]
);

// White Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_black_color',
		'label'       => __( 'Black Color', 'rb-theme-helper' ),
		'section'     => 'rbth_dark_color_sec',
		'default'     => '#121212',
	]
);

// Dark Text Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_dark_text_color',
		'label'       => __( 'Dark Text Color', 'rb-theme-helper' ),
		'section'     => 'rbth_dark_color_sec',
		'default'     => '#c1c1c1',
	]
);

// Dark Text Grey Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_dark_grey_text_color',
		'label'       => __( 'Dark Text Grey Color', 'rb-theme-helper' ),
		'section'     => 'rbth_dark_color_sec',
		'default'     => '#7f7f7f',
	]
);

// Dark Border Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_dark_border_color',
		'label'       => __( 'Dark Border Color', 'rb-theme-helper' ),
		'section'     => 'rbth_dark_color_sec',
		'default'     => '#242424',
	]
);

// Dark Background Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_dark_bg_color',
		'label'       => __( 'Dark Background Color', 'rb-theme-helper' ),
		'section'     => 'rbth_dark_color_sec',
		'default'     => '#0f0f0f',
	]
);

// Dark Background Secondary Color
new \Kirki\Field\Color(
	[
		'settings'    => 'rbth_dark_bg_secondary_color',
		'label'       => __( 'Dark Background Secondary Color', 'rb-theme-helper' ),
		'section'     => 'rbth_dark_color_sec',
		'default'     => '#212121',
	]
);

// Theme Color Change
if ( !function_exists( 'rbth_dark_color_change' ) ) {
    function rbth_dark_color_change() {
        ?>		
		<style>
			:root {
				--black-color: <?php echo esc_html( (get_theme_mod( 'rbth_black_color', '#121212' )) ); ?>;
				--dark-text-color: <?php echo esc_html( (get_theme_mod( 'rbth_dark_text_color', '#c1c1c1' )) ) ; ?>;
				--dark-grey-text-color: <?php echo esc_html( (get_theme_mod( 'rbth_dark_grey_text_color', '#7f7f7f' )) ) ; ?>;
				--dark-border-color: <?php echo esc_html( (get_theme_mod( 'rbth_dark_border_color', '#242424' )) ) ; ?>;
				--dark-bg-color: <?php echo esc_html( (get_theme_mod( 'rbth_dark_bg_color', '#0f0f0f' )) ) ; ?>;
				--dark-bg-secondary-color: <?php echo esc_html( (get_theme_mod( 'rbth_dark_bg_secondary_color', '#212121' )) ) ; ?>;
			}
		</style>
		<?php
    }
	add_action( 'wp_head', 'rbth_dark_color_change');
}