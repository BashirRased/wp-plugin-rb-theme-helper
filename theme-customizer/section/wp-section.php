<?php
/**
 * Kirki Section - WordPress Default
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
 * WordPress SECTION
 * ==================================================
 */

// Secondary Logo.
new \Kirki\Field\Image(
	array(
		'settings' => 'rbth_secondary_logo',
		'label'    => esc_html__( 'Secondary Logo', 'rb-theme-helper' ),
		'section'  => 'title_tagline',
		'priority' => 45,
	)
);
