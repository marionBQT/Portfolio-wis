const {registerBlockType} = wp.blocks
const {RichText} = wp.editor

registerBlockType('mytheme/mika', {
    title: 'Mika',
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
				<h3><RichText
                    tagName="div"
                    placeholder="Votre header"
                    value={attributes.header}
                    onChange={header => setAttributes({header})}
                /></h3>
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
            </div>
        </div>
    },
    save () {
        return null;
    }
})