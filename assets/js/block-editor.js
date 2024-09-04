add_action('enqueue_block_editor_assets', 'themeslug_block_editor_assets')

function themeslug_block_editor_assets() {
    wp_enqueue_script(
        'themeslug-block-editor',
        get_theme_file_uri('assets/js/block-editor.js'),
        array(
            'wp-blocks',
            'wp-dom-ready',
            'wp-edit-post'
        )
    )
}

wp.blocks.registerBlockStyle('core/image', {
    name: 'hand-drawn',
    label: 'Hand Drawn'
})