<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */


?>
<footer class="section">
    <div id="contact" class="footer-wrapper d-flex flex-column justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <?php echo do_shortcode('[wp_mapbox_gl_js map_id="146"]'); ?>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-12">
                            <?php dynamic_sidebar( 'footer-bottom-links' ); ?>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12">
                            <?php dynamic_sidebar( 'footer-bottom-center' ); ?>
                        </div>
                        <div class="col-12 col-md-4 col-lg-12">
                            <?php dynamic_sidebar( 'footer-bottom-right' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <ul>
                        <li>
                            <a href="/algemene-voorwaarden">Algemene voorwaarden</a>
                        </li>
                        <li>
                            Copyright &copy; Juventa Online <?php echo date("Y"); ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>