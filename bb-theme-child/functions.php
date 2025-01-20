<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

function al_load_folder_files( $folder = "" ): void
{
    $path = FL_CHILD_THEME_DIR . '/' . $folder;
    if( !file_exists( $path ) ) return;
    $files = glob( $path . '/*.php' );
    foreach ( $files as $file ) require_once $file;
}

al_load_folder_files( 'classes' );
al_load_folder_files( 'functions/shortcode' );

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );
add_action( 'init', 'FLChildTheme::post_types', 1000 );
add_action( 'init', 'FLChildTheme::taxonomies', 1000 );
add_action( 'customize_register', 'FLChildTheme::customizer' );

add_filter( 'style_loader_src', 'FLChildTheme::vc_remove_wp_ver_css_js', 15, 1 );
add_filter( 'script_loader_src', 'FLChildTheme::vc_remove_wp_ver_css_js', 15, 1 );

add_action('after_setup_theme','FLChildTheme::setup');