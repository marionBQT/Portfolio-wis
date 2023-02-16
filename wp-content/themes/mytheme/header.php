<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="manifest" href="<?php echo get_site_url(); ?>/manifest.json" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/wis/portfolio-wis/">
                    <!--img à mettre ici si on veut-->
                    <?php bloginfo('name'); ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php wp_nav_menu([
                        'theme_location' => 'header',
                        'container' => false,
                        'menu_class' => 'navbar-nav mr-auto'
                    ]) ?>
                </div>
            </div>
        </nav>
    </header>

<style>
.navbar {
    padding-left: 20px;
    padding-top: 25px;
    padding-bottom: 25px;
    margin-bottom: 20px;
}

</style>