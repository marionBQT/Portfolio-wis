<?php get_header() ?>

<div class="article">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer() ?>

<style>
.article {
    margin-left: 20%;
    margin-right: 20%;
}
</style>