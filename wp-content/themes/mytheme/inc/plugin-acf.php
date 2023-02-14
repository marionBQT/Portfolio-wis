<?php
/**
 * Plugin Name: My acf Blocks
 * Description: Add custom Gutenberg blocks using ACF
 */

//function mytheme_register_acf_block_types() {
//    acf_register_block_type( [
//        'name'            => 'Hero',
//        'title'           => __( 'Hero' ),
//        'description'     => __( 'My Hero block.' ),
//        'render_template' => dirname( __file__ ) . '/blocks/blockquote/blockquote.php',
//        'category'        => 'formatting',
//        'icon'            => 'format-quote',
//    ] );
//}
//
//if ( function_exists( 'acf_register_block_type' ) ) {
//    add_action( 'acf/init', 'mytheme_register_acf_block_types' );
//}

function mytheme_register_acf_blocks() {

    register_block_type( get_template_directory() . '/template-parts/blocks/hero' );
}
add_action( 'init', 'mytheme_register_acf_blocks' );