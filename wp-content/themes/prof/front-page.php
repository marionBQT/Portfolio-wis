<?php get_header() ?>

<main id="<?php the_ID(); ?> main" <?php post_class(); ?>>

    <?php if (have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>

    <section class="container mt-5 pt-5">
        <div class="row">
            <div class="col-6">
                <h1><?php the_field('hero_title'); ?></h1>
                <p class="text-muted"><?php the_field('hero_description'); ?></p>
                <a href="<?php the_field('hero_button_link'); ?>"  class="btn btn-primary">
                    <?php the_field('hero_button_text'); ?>
                </a>
            </div>
            <div class="col-6">
                <?php if ($img = get_field('hero_image')): ?>
                    <?= wp_get_attachment_image($img['ID'], 'full', false, [
                            'class' => 'img-fluid'
                    ]) ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="container mt-5 pt-5">
        <h2><?php the_field('article_title'); ?></h2>
        <p class="text-muted"><?php the_field('article_description'); ?></p>

        <div class="row">

            <?php if( have_rows('article_articles') ): ?>
                    <?php while( have_rows('article_articles') ): the_row(); ?>

                        <div class="col-lg-4">
                            <?php $article = get_sub_field('article'); ?>
                            <div class="card">
                                <h3><?= $article->post_title ?></h3>
                            </div>
                        </div>

                    <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>







</main>

<?php get_footer() ?>
