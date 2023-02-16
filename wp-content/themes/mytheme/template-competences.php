<?php
/**
 * Template Name: Page compétence
 */
?>

<?php get_header() ?>

<div class="container-classic">
    <a href="http://localhost/wis/portfolio-wis/competences/">
        <button type="button" class="btn btn-light">Retour</button>
    </a>
    <?php while (have_posts()) : the_post();?>
        <h1><?php the_title();?></h1>
        <?php the_content() ?>

    <?php endwhile; ?>
</div>

<?php get_footer() ?>

<style>
.container-classic {
    margin-left: 8%;
    margin-right: 8%;
}

</style>