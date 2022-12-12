<?php get_header() ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <h1>Page introuvable</h1>
        <p>Désolé mais cette page n'existe pas ou plus</p>
        <a href="#">Revenir à la page d'accueil</a>
<?php endwhile; endif; ?>

<?php get_footer() ?>