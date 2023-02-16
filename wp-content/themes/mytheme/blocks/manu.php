<?php
/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package mytheme
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function manu_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = get_stylesheet_directory() . '/blocks';

	$index_js = 'manu/index.js';
	wp_register_script(
		'manu-block-editor',
		get_stylesheet_directory_uri() . "/blocks/{$index_js}",
		[
			'wp-blocks',
			'wp-i18n',
			'wp-element',
			'wp-components',
			'wp-editor',
		],
		filemtime( "{$dir}/{$index_js}" )
	);

	$editor_css = 'manu/editor.css';
	wp_register_style(
		'manu-block-editor',
		get_stylesheet_directory_uri() . "/blocks/{$editor_css}",
		[],
		filemtime( "{$dir}/{$editor_css}" )
	);

	$style_css = 'manu/style.css';
	wp_register_style(
		'manu-block',
		get_stylesheet_directory_uri() . "/blocks/{$style_css}",
		[],
		filemtime( "{$dir}/{$style_css}" )
	);

	register_block_type( 'mytheme/manu', [
		'editor_script' => 'manu-block-editor',
		'editor_style'  => 'manu-block-editor',
		'style'         => 'manu-block',
		'attributes'	  => [
			'content'	=> ['type' => 'string'],
			'title'		=> ['type' => 'string'],
			'mediaID' 	=> ['type' => 'string'],
			'mediaURL' 	=> ['type' => 'string'],
			'url'		=> ['type' => 'string'],
		],
		'render_callback' => 'manu_block_render'
	] );
}

function manu_block_render(array $attributes) {
	return <<<HTML
	<div class="wp-block-mytheme-manu">
		<div class="card" style="width: 18rem;">
			<img src="{$attributes['mediaURL']}" class="card-img-top" alt="Image projet">
			<div class="card-body">
				<h5 class="card-title">{$attributes['title']}</h5>
				<p class="card-text">{$attributes['content']}</p>
				<a href="{$attributes['url']}" class="btn btn-light">En savoir plus</a>
			</div>
	</div>
	</div>
HTML;
}

add_action( 'init', 'manu_block_init' );
