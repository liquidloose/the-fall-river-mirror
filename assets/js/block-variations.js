
wp.blocks.registerBlockVariation(
    'core/site-tagline',
    {
        name: 'new-site-tagline',
        title: 'New Site Tagline',
        isDefault: false,
        attributes: { className: 'is-style-new-tagline' },
    }
)

wp.blocks.registerBlockStyle('core/navigation', {
    name: 'custom-style',
    label: 'Custom Style'
})
