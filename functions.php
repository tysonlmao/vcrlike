<?php
/**
 * @since 0.1.0
 * initialise theme
 */
$version = wp_get_theme()->get('version');

if ( ! function_exists('vcrlike_init')) {
    function vcrlike_init(): void {
        add_theme_support('wp-block-styles');
        add_editor_style('style.css');

    }
}

function add_styles($version) {
    /** 
     * @since 0.1.0
     * enqueue main stylesheet
     */
    wp_enqueue_style(
        'style',
        get_theme_file_uri('style.css'),
        [],
        $version
    );
}

if (!function_exists('get_includes')):
function get_includes(): void {
    require_once get_theme_file_path('inc/register-styles.php');
}
endif;

add_action('init', 'vcrlike_init');
add_action('wp_enqueue_scripts', 'add_styles');
add_action('after_setup_theme', 'get_includes');
