        <footer class="footer">
            <?php wp_footer(); ?>

            <div class="footer-container">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-4">
                            <h3><i class="fa fa-road"></i> <?php bloginfo('name') ?></h3>
                            <p>Anaëlle Ravon & Marion Bouquet</p>
                        </div>
                        <div class="col-6 col-sm-4">
                            <?php wp_nav_menu([
                                'theme_location' => 'footer',
                                'container' => false,
                                'menu_class' => 'navbar-nav mr-auto'
                            ]) ?>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    Tous droits réservés &copy; <?php echo(date('Y')) ?>
                </div>
            </div>
        </footer>
    </body>
</html>

<style>

/* Sticky footer position and size
-------------------------------------------------- */
html {
    position: relative;
    min-height: 100%;
}
body {
    /* Margin bottom by footer height */
    margin-bottom: 10em;
}
.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    margin-top: 2em;
    /* Set the fixed height of the footer here */
    height: 100px;
}



/* Sticky footer style and color
-------------------------------------------------- */
.footer-container {
    padding-top: 30px;
    background-color: #292c2f;
    color: #bbb;
}

footer a {
    color: #999;
    text-decoration:none;
}

footer a:hover, footer a:focus {
    color: #aaa;
    text-decoration: underline;
}

.footer-bottom {
    text-align: right;
    margin-top: 6em;
    padding-top: 6px;
    padding-right: 20px;;
    padding-bottom: 6px;
    background-color: #1F2123;
}
</style>