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

    /**
     * Create new Post Type
     *
     * @return void
     */
    static public function post_types(): void
    {
        new cpt( 'book', 'books', 'dashicons-book' );
    }

    /**
     * Create New Taxonomy
     *
     * @return void
     */
    static public function taxonomies(): void
    {
        new custom_tax( 'classification', 'classifications', 'project' );
        new custom_tax( 'group', 'groups', 'skill' );
    }

    /**
     * Instantiate Customizer
     *
     * @param $customizer
     * @return void
     */
    static public function customizer( $customizer ): void
    {
        $customizer->add_panel( 'al_theme_options_panel', [
            'title' => __( 'Theme Options' ),
            'description' => __( 'Setup your theme options here.' ),
            'priority' => 160,
            'capability' => 'edit_theme_options',
        ] );

        $customizer->add_section( 'al_theme_contact', [
            'title' => __( 'Contacts' ),
            'description' => __( 'Setup your contacts here.' ),
            'panel' => 'al_theme_options_panel', // Not typically needed.
            'priority' => 160,
            'capability' => 'edit_theme_options',
        ] );

        $path = FL_CHILD_THEME_DIR . '/assets/config/customizer/';
        if( !file_exists( $path ) ) return;

        foreach ( glob( $path . '*.json' ) as $config ) {
            $data = json_decode( file_get_contents( $config ) );
            if( property_exists( $data, 'controls' ) ) {
                foreach ( $data->controls as $control ) {
                    $customizer->add_setting( $control->id, [
                        "type" => $control->type ?? "text",
                        "default" => $control->default ?? "",
                        "capability" => $control->capability ?? "edit_theme_options",
                    ]);

                    $customizer->add_control( new WP_Customize_Control( $customizer, $control->id, [
                        "type" => $control->control_type ?? "",
                        "label" => $control->label ?? "",
                        "section" => $control->section ?? "",
                    ] ));
                }
            }
        }
    }
}