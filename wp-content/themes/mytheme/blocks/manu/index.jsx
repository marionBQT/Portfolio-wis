const {registerBlockType} = wp.blocks
const {RichText, InspectorControls, MediaUpload} = wp.editor

registerBlockType('mytheme/manu', {
    title: 'Manu',
    category: 'widgets',
    supports: {
        html: false
    },
    edit ({className, attributes, setAttributes}) {
        const style = {
            color: attributes.color,
            image: `url(${attributes.mediaURL})`,
        }
        return <div className={className} style={style}>
            <div className='container'>
                <h2><RichText
                    tagName="div"
                    placeholder="Votre titre"
                    value={attributes.title}
                    onChange={title => setAttributes({title})}
                /></h2>
                <RichText
                    tagName="div"
                    placeholder="Votre contenu"
                    value={attributes.content}
                    onChange={content => setAttributes({content})}
                />
				<RichText
                    tagName="div"
                    placeholder="Votre contenu"
                    value={attributes.content}
                    onChange={content => setAttributes({content})}
                />
            </div>
            <InspectorControls>
            <h2>Choisissez l'image du bloc</h2>
            <MediaUpload
            type="image"
            onSelect={image => setAttributes({mediaID: image.id, mediaURL: image.sizes.full.url})}
            render={({open}) => (
                <button onClick={open}>Choisir une image</button>
            )}
            />
			<h2>URL du bloc</h2>
			<RichText
				tagName="div"
				placeholder="Votre url"
				value={attributes.url}
				onChange={url => setAttributes({url})}
			/>
            </InspectorControls>
        </div>
    },
    save () {
        return null;
    }
})