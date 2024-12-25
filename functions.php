<?php


// Enqueue the theme's stylesheet
wp_enqueue_style(
    'theme-style', // Handle for the stylesheet
    get_template_directory_uri() . '/style.css', // Path to the stylesheet
    array(), // Dependencies (none in this case)
    wp_get_theme()->get('Version') // Version number (theme version)
);


// Function to register custom button block styles
function register_button_block_styles_1() {
    $sizes = ["small", "regular", "big", "extra-big"]; // Array of size variations

    foreach ($sizes as $value) {
        $first_letter_uppercase = ucfirst($value); // Capitalize the first letter of the size

        // Register a custom block style for each size variation
        register_block_style(
            'core/button', // Name of the block
            array(
                'name'  => 'tfg-button-' . $value, // Class name for the custom style
                'label' => __($first_letter_uppercase, $value), // Label for the custom style
            )
        );
    }
}
add_action('init', 'register_button_block_styles_1'); // Hook the function to the 'init' action

// Enqueue block styles
function themeslug_enqueue_block_styles() {
    wp_enqueue_block_style('core/button', array(
        'handle' => 'themeslug-block-buttons', // Handle for the block style
        'src'    => get_theme_file_uri("assets/blocks/core-button.css"), // Path to the CSS file
        'path'   => get_theme_file_path("assets/blocks/core-button.css") // File path to the CSS file
    ));
}
add_action('init', 'themeslug_enqueue_block_styles');
?>
