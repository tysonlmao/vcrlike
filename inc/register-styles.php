<?php
/**
 * @since 0.1.0
 * register block styles
 */

 function vcrlike_register_styles(): void {
    // thanks imagedirect-wordpress-pro <3
    $TextDomain = sanitize_title(wp_get_theme()->get('TextDomain'));

    /**
     * Box shadow
     * @since 0.1.0
     */
    register_block_style(
        'core/group',
        array(
            'default'   => false,
            'name'      => 'vcrlike__box-shadow',
            'label'     => __('Box Shadow', $TextDomain)
        )
    );
 }

 add_action('init', 'vcrlike_register_styles');