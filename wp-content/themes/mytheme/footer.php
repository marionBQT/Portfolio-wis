    <footer>
        This  is the footer : 
        <?php bloginfo('name') ?>, tous droits réservés &copy; <?php echo(date('Y')) ?></footer>
    </div>
    <?php wp_footer(); ?>
    <?php wp_nav_menu([
        'theme_location' => 'footer',
        'container' => false,
        'menu-class' => 'navbar-nav'
    ]) ?>
</body>
</html>