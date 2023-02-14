<?php get_header() ?>

<main id="<?php the_ID(); ?> main" <?php post_class(); ?>>

    <?php if (have_posts()): ?>

        <?php while (have_posts()): the_post(); ?>

            <?php the_post_thumbnail('large', [
                'class' => 'img-fluid w-100',
                'style' => 'object-fit: cover; object-position: top;'
            ]); ?>

            <?php the_content(); ?>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer() ?>
