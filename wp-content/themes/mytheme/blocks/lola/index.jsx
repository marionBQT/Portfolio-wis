const {registerBlockType} = wp.blocks
const {RichText, InspectorControls} = wp.editor
const {ColorPicker} = wp.components

registerBlockType('mytheme/lola', {
    title: 'Lola',
    category: 'widgets',
    supports: {
        html: false
    },
    edit ({className, attributes, setAttributes}) {
        const style = {
			color: attributes.color,
            backgroundColor: attributes.backgroundColor,
        }
        return <div className={className} style={style}>
            <div className='container-lola'>
                <h2><RichText
                    tagName="div"
                    placeholder="Votre titre"
                    value={attributes.title}
                    onChange={title => setAttributes({title})}
                /></h2>
            </div>
            <InspectorControls>
            <h2>Choisissez la couleur du texte</h2>
            <ColorPicker
                color={attributes.color}
                onChangeComplete={color => setAttributes({color: color.hex})}
                disableAlpha
            />
			<h2>Choisissez la couleur du background</h2>
            <ColorPicker
                backgroundColor={attributes.backgroundColor}
                onChangeComplete={backgroundColor => setAttributes({backgroundColor: backgroundColor.hex})}
                disableAlpha
            />
            </InspectorControls>
        </div>
    },
    save () {
        return null;
    }
})