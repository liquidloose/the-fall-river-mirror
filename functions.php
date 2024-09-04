<?php

// Inline block variation styles to the head
add_action('init', 'themeslug_enqueue_block_styles');

function themeslug_enqueue_block_styles() {
    wp_enqueue_block_style('core/navigation', array(
        'handle' => 'core-navigation',
        'src'    => get_theme_file_uri("assets/blocks/core-navigation.css"),
        'path'   => get_theme_file_path("assets/blocks/core-navigation.css")
    ));

    wp_enqueue_block_style('core/image', array(
        'handle' => 'themeslug-block-image',
        'src'    => get_theme_file_uri("assets/blocks/core-image.css"),
        'path'   => get_theme_file_path("assets/blocks/core-image.css")
    ));
}
