<?php
/**
 * Plugin Name: Elemental Symphony
 * Description: A child theme for Elementor with advanced OOP shortcodes and dynamic styles.
 * Version: 1.0
 * Author: MEHDI BAFDIL
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include core files
require_once __DIR__ . '/inc/class-elemental-symphony.php';
require_once __DIR__ . '/inc/class-shortcodes.php';
require_once __DIR__ . '/inc/class-assets.php';
require_once __DIR__ . '/inc/class-helpers.php';

// Run the theme
function run_elemental_symphony() {
    $elemental_symphony = new Elemental_Symphony();
    $elemental_symphony->init();
}
add_action( 'after_setup_theme', 'run_elemental_symphony' );