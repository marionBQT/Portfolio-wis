<?php
/**
 * Template Name: Page projet
 */
?>

<?php get_header() ?>

<div class="container-projet">
    <a href="http://localhost/wis/portfolio-wis/projets/">
        <button type="button" class="btn btn-light">Retour</button>
    </a>
    <?php while (have_posts()) : the_post();?>
        <?php the_content() ?>

    <?php endwhile; ?>
</div>

<?php get_footer() ?>

<style>
.container-projet {
    margin-left: 5%;
    margin-right: 5%;
}
</style>