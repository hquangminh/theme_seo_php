<?php 
/**
	Theme Name: phuongtrangwindow.com
	Theme URI: https://VanToanDevSEO.com/#_0378-59-00-99
	Theme contact: https://fb.com/VanToanDevSEO#_0378-59-00-99
	Author: VanToanDevSEO
	Author URI: https://fb.com/VanToanDevSEO#_0378-59-00-99
	Description: https://VanToanDevSEO.com/#_0378-59-00-99
	Template: flatsome
	Version: 84.0378.59.00.99
*/ 

add_action( 'init', 'atesvn_remove_dns_prefetch' );
function atesvn_remove_dns_prefetch() {
	remove_action( 'wp_head', 'wp_resource_hints', 2, 99 );
}

add_filter('use_block_editor_for_post', '__return_false', 10); // ??
add_filter('use_block_editor_for_post_type', '__return_false', 10);

remove_theme_support('widgets-block-editor');
add_filter('use_widgets_block_editor', '__return_false');
add_filter('wp_use_widgets_block_editor', '__return_false');
add_filter('gutenberg_use_widgets_block_editor', '__return_false', 100);

add_action( 'wp_enqueue_scripts', 'atesvn_remove_block_css', PHP_INT_MAX );
function atesvn_remove_block_css() {
wp_dequeue_style( 'wp-block-library' );
wp_dequeue_style( 'wp-block-library-theme' );

wp_deregister_script( 'intersection-observer-polyfill' );
wp_dequeue_script( 'intersection-observer-polyfill' );

}