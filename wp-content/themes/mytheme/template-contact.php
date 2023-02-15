<?php
/**
 * Template Name: Page contact
 */
?>

<?php get_header() ?>
<div class="contact">
    <?php while (have_posts()) : the_post();?>
        <div class="card">
            <h1><?php the_title();?></h1>
            <div class="card-body">
                <?php the_content() ?>
            </div>
        </div>

    <?php endwhile; ?>
</div>
<?php get_footer() ?>

<style>

body {
    background-image: url('<?php echo get_template_directory_uri(); ?> /assets/background-tropical.jpg');
    background-size: cover;
}

h1 {
    text-align: center;
}

.card {
    margin-left: auto;
    margin-right: auto;
    width: 35em;
    padding-top: 20px;
}

.card-body {
    margin-left: auto;
    margin-right: auto;
    padding-top: 20px;
    width: 25em;
}

</style>