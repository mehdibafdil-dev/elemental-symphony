<?php

class Shortcodes
{

    public function example_shortcode($atts, $content = null)
    {
        $atts = shortcode_atts(array(
            'color' => 'blue',
        ), $atts);

        ob_start();
        include(locate_template('template-parts/shortcodes/example.php'));
        return ob_get_clean();
    }

    public function another_example_shortcode($atts, $content = null)
    {
        ob_start();
        include(locate_template('template-parts/shortcodes/another-example.php'));
        return ob_get_clean();
    }
}
