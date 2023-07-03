<?php
/**
 * @since 0.1.0
 * initialise theme
 */
$version = wp_get_theme()->get('version');

if ( ! function_exists('init')) {
    function init(): void {
        add_theme_support('wp-block-styles');
        add_editor_style('style.css');
    }
}

add_action('after_theme_setup', 'init');

function add_styles($version) {
    wp_enqueue_style(
        'style',
        get_theme_file_uri('style.css'),
        [],
        $version
    );
}


add_action('wp_enqueue_scripts', 'add_styles');
