const {registerBlockType} = wp.blocks
const {RichText, InspectorControls, MediaUpload} = wp.editor
const {ColorPicker} = wp.components

registerBlockType('mytheme/rose', {
    title: 'Rose',
    category: 'widgets',
    supports: {
        html: false
    },
    edit ({className, attributes, setAttributes}) {
        const style = {
            backgroundImage: `url(${attributes.mediaURL})`,
        }
        return <div className={className} style={style}>
            <div className='container'>
                <h2><RichText
                    tagName="div"
                    placeholder="Votre titre"
                    value={attributes.title}
                    onChange={title => setAttributes({title})}
                /></h2>
            </div>
            <InspectorControls>
            <h2>Image de fond</h2>
            <MediaUpload
            type="image"
            onSelect={image => setAttributes({mediaID: image.id, mediaURL: image.sizes.full.url})}
            render={({open}) => (
                <button onClick={open}>Choisir une image</button>
            )}
            />
            </InspectorControls>
        </div>
    },
    save () {
        return null;
    }
})