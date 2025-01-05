<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

function load_folder_files( $folder = "" ): void
{
    $path = FL_CHILD_THEME_DIR . '/' . $folder;
    $files = glob( $path . '/*.php' );
    foreach ( $files as $file ) require_once $file;
}

load_folder_files( 'classes' );

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );
add_action( 'init', 'FLChildTheme::post_types', 1000 );
add_action( 'init', 'FLChildTheme::taxonomies', 1000 );