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
function lola_block_init() {
	// Skip block registration if Gutenberg is not enabled/merged.
	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}
	$dir = get_stylesheet_directory() . '/blocks';

	$index_js = 'lola/index.js';
	wp_register_script(
		'lola-block-editor',
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

	$editor_css = 'lola/editor.css';
	wp_register_style(
		'lola-block-editor',
		get_stylesheet_directory_uri() . "/blocks/{$editor_css}",
		[],
		filemtime( "{$dir}/{$editor_css}" )
	);

	$style_css = 'lola/style.css';
	wp_register_style(
		'lola-block',
		get_stylesheet_directory_uri() . "/blocks/{$style_css}",
		[],
		filemtime( "{$dir}/{$style_css}" )
	);

	register_block_type( 'mytheme/lola', [
		'editor_script' => 'lola-block-editor',
		'editor_style'  => 'lola-block-editor',
		'style'         => 'lola-block',
		'attributes'	=> [
			'title'	=> ['type' => 'string'],
			'color'	=> ['type' => 'string', 'default' => '#000'],
			'backgroundColor'	=> ['type' => 'string', 'default' => '#000'],
		],
		'render_callback' => 'lola_block_render'
	] );
}

function lola_block_render(array $attributes) {
	return <<<HTML
	<div class="wp-block-mytheme-lola" style="color:{$attributes['color']}; background-color:{$attributes['backgroundColor']}">
		<h1>{$attributes['title']}</h1>
	</div>
HTML;
}

add_action( 'init', 'lola_block_init' );
