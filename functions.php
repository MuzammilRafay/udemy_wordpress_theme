<?php

// Setup


// Includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/setup.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/social.php' );
include( get_template_directory() . '/includes/customizer/misc.php' );
include( get_template_directory() . '/includes/customizer/enqueue.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'ju_enqueue' );
add_action('after_setup_theme','ju_setup_theme');
add_action('widgets_init','ju_widgets');
add_action('customize_register','ju_customize_register');
add_action( 'customize_preview_init', 'ju_customize_preview_init' );
 //when we change transport to postMessage it will required javascript file for seeing the customization changes.
// Shortcodes


// https://davidwalsh.name/remove-wordpress-admin-bar-css remove extra css
add_action('get_header', 'remove_admin_login_header');
function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}