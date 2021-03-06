<?php
/**
 * Plugin Name: uWebDesign Color Scheme
 * Plugin URI: https://github.com/websanya/uwebdesign-color-scheme
 * Description: Микроплагин с цветовой схемой (WordPress админка) для комьюнити сайта uWebDesign.
 * Version: 3.0.1
 * Author: Alexander Goncharov
 * Author URI: https://websanya.ru
 * GitHub Plugin URI: https://github.com/websanya/uwebdesign-color-scheme
 * GitHub Branch: master
 */

//* Define PATH constant
define( 'PATH', plugins_url( '', __FILE__ ) );

//* Adding color scheme to WordPress admin
function add_custom_admin_themes() {
	wp_admin_css_color(
		'uwd-scheme',
		__( 'uWebDesign' ),
		PATH . "/css/uwd-scheme.css",
		array( '#103154', '#ffffff', '#be8643', '#f1dd7d' )
	);
}

add_action( 'admin_init', 'add_custom_admin_themes' );