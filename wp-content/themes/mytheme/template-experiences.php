<?php
/**
 * Template Name: Page expériences
 */
?>

<?php get_header() ?>

<div class="container-experiences">
    <?php while (have_posts()) : the_post();?>
        <?php the_content() ?>

    <?php endwhile; ?>
</div>

<?php get_footer() ?>

<style>
.container-experiences {
    margin-left: 5%;
    margin-right: 5%;
}
</style>