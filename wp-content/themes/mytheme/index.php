<?php get_header() ?>
<div class="container-articles">
    <?php if (have_posts()): ?>
    <h1>Articles</h1>
    <div class="btn-group">
        <a href="/wis/portfolio-wis/category/decouverte/" class="btn btn-outline-dark">Categorie 1</a>
        <a href="#" class="btn btn-outline-dark">Categorie 2</a>
        <a href="#" class="btn btn-outline-dark">Categorie 3</a>
    </div>
        <div class="row">
            <?php while (have_posts()): the_post(); ?>
                <div class="col-sm-4">
                    <div class="card">
                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto']); ?>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>" class="card-link">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                            </a>
                            <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6>
                            <p class="card-text">
                                <?php the_excerpt('En savoir plus'); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="card-link">Voir plus</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <h1>Pas d'articles</h1>
    <?php endif; ?>
</div>
<?php get_footer() ?>

<style>

h1 {
    text-align: center;
}

a {
    color: black;
    text-decoration: none;
}

.btn-group {
    margin-bottom: 20px;
}

.container-articles {
    margin-left: 2%;
    margin-right: 2%;
}
</style>