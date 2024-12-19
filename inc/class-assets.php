<?php

class Assets
{

    public static function enqueue_styles()
    {
        wp_enqueue_style('elemental-symphony-main', get_stylesheet_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('elemental-symphony-shortcodes', get_stylesheet_directory_uri() . '/assets/css/shortcode-styles.css');
    }

    public static function enqueue_scripts()
    {
        wp_enqueue_script('elemental-symphony-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
        wp_enqueue_script('elemental-symphony-shortcodes', get_stylesheet_directory_uri() . '/assets/js/shortcode-scripts.js', array('jquery'), null, true);
    }
}
