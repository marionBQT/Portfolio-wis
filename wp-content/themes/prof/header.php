<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="manifest" href="<?php echo get_site_url(); ?>/manifest.json"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header id="header">

    <nav class="navbar navbar-expand-md bg-white fixed-top py-3" role="navigation">
        <div class="container">

            <div id="navbar" class="collapse navbar-collapse">

                <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'flex-grow-1 d-flex',
                        'container_id' => '',
                        'menu_class' => 'nav navbar-nav ms-auto me-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                    ));
                ?>

            </div>
        </div>
    </nav>

</header>
