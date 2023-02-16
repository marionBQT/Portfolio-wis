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
function rose_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = get_stylesheet_directory() . '/blocks';

	$index_js = 'rose/index.js';
	wp_register_script(
		'rose-block-editor',
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

	$editor_css = 'rose/editor.css';
	wp_register_style(
		'rose-block-editor',
		get_stylesheet_directory_uri() . "/blocks/{$editor_css}",
		[],
		filemtime( "{$dir}/{$editor_css}" )
	);

	$style_css = 'rose/style.css';
	wp_register_style(
		'rose-block',
		get_stylesheet_directory_uri() . "/blocks/{$style_css}",
		[],
		filemtime( "{$dir}/{$style_css}" )
	);

	register_block_type( 'mytheme/rose', [
		'editor_script'   => 'rose-block-editor',
		'editor_style'    => 'rose-block-editor',
		'style'           => 'rose-block',
		'attributes'	  => [
			'title'		=> ['type' => 'string'],
			'mediaID' 	=> ['type' => 'string'],
			'mediaURL' 	=> ['type' => 'string'],
		],
		'render_callback' => 'rose_block_render'
	] );
}

function rose_block_render(array $attributes) {
	return <<<HTML
	<div class="wp-block-mytheme-rose">
		<div class="card text-bg-dark">
			<img src="{$attributes['mediaURL']}" class="card-img" alt="...">
			<div class="card-img-overlay">
				<h2 class="card-title">{$attributes['title']}</h2>
			</div>
		</div>
	</div>
HTML;
}

add_action( 'init', 'rose_block_init' );
