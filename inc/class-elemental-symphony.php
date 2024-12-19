<?php

class Elemental_Symphony
{

    public function init()
    {
        $this->load_dependencies();
        $this->initialize_shortcodes();
        $this->register_hooks();
    }

    private function load_dependencies()
    {
        new Assets();
        new Helpers();
    }

    private function initialize_shortcodes()
    {
        $shortcodes = new Shortcodes();
        add_shortcode('example_shortcode', array($shortcodes, 'example_shortcode'));
        add_shortcode('another_example', array($shortcodes, 'another_example_shortcode'));
    }

    private function register_hooks()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
    }

    public function enqueue_assets()
    {
        Assets::enqueue_styles();
        Assets::enqueue_scripts();
    }
}
