<?php get_header() ?>

<?php while (have_posts()) : the_post();?>
    <div class="bloc">
        <?php the_content() ?>
    </div>
<?php endwhile; ?>

<?php get_footer() ?>

<style>
.bloc {
    margin-left: 10%;
    margin-right: 10%;
}
</style>