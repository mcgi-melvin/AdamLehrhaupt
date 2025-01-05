<?php

/**
 * Helper class for child theme functions.
 *
 * @class FLChildTheme
 */
final class FLChildTheme {
    
    /**
	 * Enqueues scripts and styles.
	 *
     * @return void
     */
    static public function enqueue_scripts(): void
    {
	    wp_enqueue_style( 'fl-child-theme', FL_CHILD_THEME_URL . '/style.css' );
        wp_enqueue_style( 'custom-style', get_theme_file_uri("/assets/css/style.css") );
    }

    static public function post_types(): void
    {
        new cpt( 'book', 'books', 'dashicons-book' );
    }

    static public function taxonomies(): void
    {
        new custom_tax( 'classification', 'classifications', 'project' );
        new custom_tax( 'group', 'groups', 'skill' );
    }
}