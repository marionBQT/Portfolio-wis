<?php

function ntm_register_nav() {
    register_nav_menus(
        [
            'header-menu' => __('Header menu')
        ]
    );
}

add_action('init', 'ntm_register_nav');