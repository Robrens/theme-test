<?php

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function enqueue_style_after_wc(){
        wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'enqueue_style_after_wc', 20 );