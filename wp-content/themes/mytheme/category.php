<?php get_header() ?>

<div class="En-tête-categorie" style="background-image: url('<?php echo get_template_directory_uri(); ?> /assets/background-category.jpg'); text-align: center">
    <h1><?php single_cat_title(); ?></h1>
    <p><?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?></p>
</div>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while (have_posts()): the_post(); ?>
            <div class="col-sm-4">
                <div class="card">
                    <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text">
                            <?php the_excerpt('En savoir plus'); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>

<style>

.En-tête-categorie {
	background-size: cover;
    width: 100%;
    padding-top: 5em;
    padding-bottom: 5em;
    padding-left: 15rem;
    padding-right: 15rem;
    margin-bottom: 2em;
}

.row {
    margin-left: 2%;
    margin-right: 2%;
}

</style>