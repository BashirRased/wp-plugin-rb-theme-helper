<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Social Links Section
new \Kirki\Section(
	'rbth_social_link_sec',
	[       
        'priority'    => 160,
		'title'       => __( 'Social Links', 'rb-theme-helper' ),
		'panel'       => 'rbth_theme_option',
	]
);

// Social Link
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'rbth_social_link',
		'label'       => __( 'Social Link Active', 'rb-theme-helper' ),
		'section'     => 'rbth_social_link_sec',
		'default'     => 'off',
		'choices'     => [
			'on'  => __( 'Enable', 'rb-theme-helper' ),
			'off' => __( 'Disable', 'rb-theme-helper' ),
		]
	]
);

// Facebook Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_facebook_link',
		'label'    => __( 'Facebook Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Twitter Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_twitter_link',
		'label'    => __( 'Twitter Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Instagram Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_instagram_link',
		'label'    => __( 'Instagram Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Linkedin Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_linkedin_link',
		'label'    => __( 'Linkedin Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Pinterest Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_pinterest_link',
		'label'    => __( 'Pinterest Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// YouTube Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_youtube_link',
		'label'    => __( 'YouTube Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Behance Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_behance_link',
		'label'    => __( 'Behance Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Dribbble Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_dribbble_link',
		'label'    => __( 'Dribbble Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Github Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_github_link',
		'label'    => __( 'Github Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Codepen Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_codepen_link',
		'label'    => __( 'Codepen Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Tiktok Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_tiktok_link',
		'label'    => __( 'Tiktok Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// WordPress Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_wordpress_link',
		'label'    => __( 'WordPress Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Slack Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_slack_link',
		'label'    => __( 'Slack Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Figma Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_figma_link',
		'label'    => __( 'Figma Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Stack Overflow Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_stack_overflow_link',
		'label'    => __( 'Stack Overflow Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Dropbox Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_dropbox_link',
		'label'    => __( 'Dropbox Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Shopify Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_shopify_link',
		'label'    => __( 'Shopify Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Vimeo Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_vimeo_link',
		'label'    => __( 'Vimeo Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Sound Cloud Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_sound_cloud_link',
		'label'    => __( 'Sound Cloud Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Flickr Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_flickr_link',
		'label'    => __( 'Flickr Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Blogger Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_blogger_link',
		'label'    => __( 'Blogger Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Amazon Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_amazon_link',
		'label'    => __( 'Amazon Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

// Reddit Link
new \Kirki\Field\URL(
	[
		'settings' => 'rbth_reddit_link',
		'label'    => __( 'Reddit Link', 'rb-theme-helper' ),
		'section'  => 'rbth_social_link_sec',       
        'active_callback' => [
            [
                'setting'  => 'rbth_social_link',
                'operator' => '==',
                'value'    => true,
            ]
        ]
	]
);

if ( !function_exists( 'rbth_social_links_custom' ) ) {
	function rbth_social_links_custom() {
        // Social Link List
        $facebook_link = "";
        $facebook_link = get_theme_mod ( 'rbth_facebook_link' );

        $twitter_link = "";
        $twitter_link = get_theme_mod ( 'rbth_twitter_link' );

        $instagram_link = "";
        $instagram_link = get_theme_mod ( 'rbth_instagram_link' );

        $linkedin_link = "";
        $linkedin_link = get_theme_mod ( 'rbth_linkedin_link' );

        $pinterest_link = "";
        $pinterest_link = get_theme_mod ( 'rbth_pinterest_link' );

        $youtube_link = "";
        $youtube_link = get_theme_mod ( 'rbth_youtube_link' );

        $behance_link = "";
        $behance_link = get_theme_mod ( 'rbth_behance_link' );

        $dribbble_link = "";
        $dribbble_link = get_theme_mod ( 'rbth_dribbble_link' );

        $github_link = "";
        $github_link = get_theme_mod ( 'rbth_github_link' );

        $codepen_link = "";
        $codepen_link = get_theme_mod ( 'rbth_codepen_link' );

        $tiktok_link = "";
        $tiktok_link = get_theme_mod ( 'rbth_tiktok_link' );

        $wordpress_link = "";
        $wordpress_link = get_theme_mod ( 'rbth_wordpress_link' );

        $slack_link = "";
        $slack_link = get_theme_mod ( 'rbth_slack_link' );

        $figma_link = "";
        $figma_link = get_theme_mod ( 'rbth_figma_link' );

        $stack_overflow_link = "";
        $stack_overflow_link = get_theme_mod ( 'rbth_stack_overflow_link' );

        $dropbox_link = "";
        $dropbox_link = get_theme_mod ( 'rbth_dropbox_link' );

        $shopify_link = "";
        $shopify_link = get_theme_mod ( 'rbth_shopify_link' );

        $vimeo_link = "";
        $vimeo_link = get_theme_mod ( 'rbth_vimeo_link' );

        $sound_cloud_link = "";
        $sound_cloud_link = get_theme_mod ( 'rbth_sound_cloud_link' );

        $flickr_link = "";
        $flickr_link = get_theme_mod ( 'rbth_flickr_link' );

        $blogger_link = "";
        $blogger_link = get_theme_mod ( 'rbth_blogger_link' );

        $amazon_link = "";
        $amazon_link = get_theme_mod ( 'rbth_amazon_link' );

        $reddit_link = "";
        $reddit_link = get_theme_mod ( 'rbth_reddit_link' );

		if ( true == get_theme_mod ( 'rbth_social_link' ) ) { ?>

            <?php if ( !empty( $facebook_link ) ) : ?>
            <!-- Facebook Link -->
            <li>
                <a href="<?php echo esc_url( $facebook_link ); ?>" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>                
            </li>
            <?php endif; ?>

            <?php if ( !empty( $twitter_link ) ) : ?>
            <!-- Twitter Link -->
            <li>
                <a href="<?php echo esc_url( $twitter_link ); ?>" aria-label="Twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $instagram_link ) ) : ?>
            <!-- Instagram Link -->
            <li>
                <a href="<?php echo esc_url( $instagram_link ); ?>" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $linkedin_link ) ) : ?>
            <!-- LinkedIn Link -->
            <li>
                <a href="<?php echo esc_url( $linkedin_link ); ?>" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $pinterest_link ) ) : ?>
            <!-- Pinterest Link -->
            <li>
                <a href="<?php echo esc_url( $pinterest_link ); ?>" aria-label="Pinterest">
                    <i class="fa-brands fa-pinterest-p"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $youtube_link ) ) : ?>
            <!-- YouTube Link -->
            <li>
                <a href="<?php echo esc_url( $youtube_link ); ?>" aria-label="YouTube">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $behance_link ) ) : ?>
            <!-- Behance Link -->
            <li>
                <a href="<?php echo esc_url( $behance_link ); ?>" aria-label="Behance">
                    <i class="fa-brands fa-behance"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $dribbble_link ) ) : ?>
            <!-- Dribbble Link -->
            <li>
                <a href="<?php echo esc_url( $dribbble_link ); ?>" aria-label="Dribbble">
                    <i class="fa-brands fa-dribbble"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $github_link ) ) : ?>
            <!-- Github Link -->
            <li>
                <a href="<?php echo esc_url( $github_link ); ?>" aria-label="Github">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $codepen_link ) ) : ?>
            <!-- Code Pen Link -->
            <li>
                <a href="<?php echo esc_url( $codepen_link ); ?>" aria-label="Code Pen">
                    <i class="fa-brands fa-codepen"></i>
                </a>
            </li>
            <?php endif; ?>

			<?php if ( !empty( $tiktok_link ) ) : ?>
            <!-- Tiktok Link -->
            <li>
                <a href="<?php echo esc_url( $tiktok_link ); ?>" aria-label="Tiktok">
					<i class="fa-brands fa-tiktok"></i>
                </a>
            </li>
            <?php endif; ?>

			<?php if ( !empty( $wordpress_link ) ) : ?>
            <!-- WordPress Link -->
            <li>
                <a href="<?php echo esc_url( $wordpress_link ); ?>" aria-label="WordPress">
					<i class="fa-brands fa-wordpress"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $slack_link ) ) : ?>
            <!-- Slack Link -->
            <li>
                <a href="<?php echo esc_url( $slack_link ); ?>" aria-label="Slack">
					<i class="fa-brands fa-slack"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $figma_link ) ) : ?>
            <!-- Figma Link -->
            <li>
                <a href="<?php echo esc_url( $figma_link ); ?>" aria-label="Figma">
                    <i class="fa-brands fa-figma"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $stack_overflow_link ) ) : ?>
            <!-- Stack Overflow Link -->
            <li>
                <a href="<?php echo esc_url( $stack_overflow_link ); ?>" aria-label="Stack Overflow">
                    <i class="fa-brands fa-stack-overflow"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $dropbox_link ) ) : ?>
            <!-- Dropbox Link -->
            <li>
                <a href="<?php echo esc_url( $dropbox_link ); ?>" aria-label="Dropbox">
                    <i class="fa-brands fa-dropbox"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $shopify_link ) ) : ?>
            <!-- Shopify Link -->
            <li>
                <a href="<?php echo esc_url( $shopify_link ); ?>" aria-label="Shopify">
                    <i class="fa-brands fa-shopify"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $vimeo_link ) ) : ?>
            <!-- Vimeo Link -->
            <li>
                <a href="<?php echo esc_url( $vimeo_link ); ?>" aria-label="Vimeo">
                    <i class="fa-brands fa-vimeo"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $sound_cloud_link ) ) : ?>
            <!-- Sound Cloud Link -->
            <li>
                <a href="<?php echo esc_url( $sound_cloud_link ); ?>" aria-label="Sound Cloud">
                    <i class="fa-brands fa-soundcloud"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $flickr_link ) ) : ?>
            <!-- Flickr Link -->
            <li>
                <a href="<?php echo esc_url( $flickr_link ); ?>" aria-label="Flickr">
                    <i class="fa-brands fa-flickr"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $blogger_link ) ) : ?>
            <!-- Blogger Link -->
            <li>
                <a href="<?php echo esc_url( $blogger_link ); ?>" aria-label="Blogger">
                    <i class="fa-brands fa-blogger-b"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $amazon_link ) ) : ?>
            <!-- Amazon Link -->
            <li>
                <a href="<?php echo esc_url( $amazon_link ); ?>" aria-label="Amazon">
                    <i class="fa-brands fa-amazon"></i>
                </a>
            </li>
            <?php endif; ?>

            <?php if ( !empty( $reddit_link ) ) : ?>
            <!-- Reddit Link -->
            <li>
                <a href="<?php echo esc_url( $reddit_link ); ?>" aria-label="Reddit">
                <i class="fa-brands fa-reddit-alien"></i>
                </a>
            </li>
            <?php endif; ?>
        <?php
        }		
	}
	add_action( 'rbth_social_links', 'rbth_social_links_custom' );
}
                        
                        
                        