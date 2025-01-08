<?php
add_shortcode('books', '_get_books');
function _get_books( $atts ): false|string
{
    ob_start();
    require_once get_theme_file_path('/components/shortcodes/book-list.php');
    return ob_get_clean();
}