<?php
function launching_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css');
	wp_enqueue_style( 'home', get_template_directory_uri() . '/home.css');
    wp_enqueue_script( 'jquery-jb', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.js', array(), '1', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array(), '1', true );
}
add_action( 'wp_enqueue_scripts', 'launching_scripts' );

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function enqueue_style_after_wc(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'enqueue_style_after_wc', 20 );

register_nav_menus(array('primary' => esc_html__('Primary', 'theme-test'),));