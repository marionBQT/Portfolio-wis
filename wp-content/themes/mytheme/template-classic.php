<?php
/**
 * Template Name: Page classique
 */
?>

<?php get_header() ?>

<div class="container-classic">
    <?php while (have_posts()) : the_post();?>
        <h1><?php the_title();?></h1>
        <?php the_content() ?>

    <?php endwhile; ?>
</div>

<?php get_footer() ?>

<style>
.container-classic {
    margin-left: 2%;
    margin-right: 2%;
}
</style>