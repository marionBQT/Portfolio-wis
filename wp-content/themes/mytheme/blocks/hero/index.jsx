const {registerBlockType} = wp.blocks

registerBlockType('mytheme/hero', {
    title: 'Hero',
    category: 'widgets',
    supports: {
        html: false
    },
    edit ({className}) {
        return <div className={className}>Bonjour</div>
    },
    save () {
        return null;
    }
})