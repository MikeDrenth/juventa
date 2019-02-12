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
                    <li><a href="tel:060123456789"><i class="fas fa-mobile-alt"></i> Fabian</a></li>
                    <li><a href="tel:0625277247"><i class="fas fa-mobile-alt"></i> Mike</a></li>
                    <li><a href="mailto:info@juventaonline.nl"><i class="fas fa-at"></i> Stuur een e-mail</a></li>
                <ul>
            </div>
            <div class="col-12 col-md-4">
                <h3>Ga gelijk naar</h3>
                <ul>
                    <li><a href="">Website ontwikkeling</a></li> 
                    <li><a href="">Google Campagnes</a></li>
                    <li><a href="">Support</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <h3>Socials</h3>
                <ul>
                    <li><a href="tel:060123456789"><i class="fab fa-facebook-f"></i> Bekijk ons op Facebook</a></li>
                    <li><a href="tel:060123456789"><i class="fab fa-instagram"></i> Bekijk ons op Instagram</a></li>
                    <li><a href="tel:060123456789"><i class="fab fa-linkedin"></i> Bekijk ons op Linkedin</a></li>
                <ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <ul>
                    <li>
                        <a href="algemene-voorwaarden">Algemene voorwaarden</a>
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

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

</body>

</html>