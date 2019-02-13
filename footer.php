<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */


?>
<div id="contact" class="footer-wrapper d-flex flex-column justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <h3>Contact</h3>
                <ul>
                    <li><a href="tel:0621835709"><i class="fas fa-mobile-alt"></i> Fabian: 06 218 357 09</a></li>
                    <li><a href="tel:0625277248"><i class="fas fa-mobile-alt"></i> Mike: 06 252 772 48</a></li>
                    <li><a href="mailto:info@juventaonline.nl"><i class="fas fa-at"></i> info@juventaonline.nl</a></li>
                <ul>
            </div>
            <div class="col-12 col-md-4">
                <h3>Ga gelijk naar</h3>
                <ul>
                    <li><a href="">Websites</a></li> 
                    <li><a href="">Campagnes</a></li>
                    <li><a href="">Beheer</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <h3>Socials</h3>
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/juventaonline"><i class="fab fa-facebook-f"></i> Bekijk ons op Facebook</a></li>
                    <li><a target="_blank" href="https://instagram.com/juventaonline"><i class="fab fa-instagram"></i> Bekijk ons op Instagram</a></li>
                    <li><a target="_blank" href="http://eepurl.com/ghceIn"><i class="far fa-envelope-open"></i> Inschijven voor nieuwsbrief</a></li>
                <ul>
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

<?php wp_footer(); ?>

<script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="//threejs.org/examples/js/libs/stats.min.js"></script>

</body>
</html>