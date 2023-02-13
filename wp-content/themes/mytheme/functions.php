<?php

class MonTheme {
    public function __construct() {
        require_once 'blocks/hero.php';
    }
}

new MonTheme();

function mytheme_register_nav() {
    register_nav_menus(
        [
            'header' => __('En-tête du menu'),
            'footer' => __('Pied de page')
        ],
    );
}

//function mytheme_supports() {
//    register_nav_menu('header', 'En-tête du menu');
//}

add_action('init', 'mytheme_register_nav');

function mytheme_register_assets() {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', ['popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function mytheme_title_separator () {
    return ' | ';
}

function mytheme_menu_class ($classes) {
    $classes[] = 'nav-item active';
    return $classes;
}

function mytheme_menu_link_class ($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
}

add_action('wp_enqueue_scripts', 'mytheme_register_assets');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
});

add_filter('document_title_separator', 'mytheme_title_separator');
add_filter('nav_menu_css_class', 'mytheme_menu_class');
add_filter('nav_menu_link_attributes', 'mytheme_menu_link_class');

