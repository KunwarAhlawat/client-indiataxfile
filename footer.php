<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


   <!-- footer start -->
   <section class="container-fluid footer-section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 mt-3">

                    <a href="">
                        <h3>IndiaTaxfile</h3>
                    </a>

                    <p>IndiaTaxFile: Your go-to for effortless tax solutions. Simplifying taxes for businesses and
                        individuals, ensuring a stress-free financial experience.
                    </p>

                </div>
                <div class="col-lg-3 mt-3">
                    <h5>Quick Links</h5>
                    <a href="">GST Registration</a>
                    <a href="">Tademark Registration</a>
                    <a href="">Import and Export</a>
                    <a href="">FSSAI(Food License)</a>
                    <a href="">Company Registration</a>
                </div>
                <div class="col-lg-3 mt-3">
                    <h5>Polices</h5>
                    <a href="">Privacy Policy</a>
                    <a href="">Terms and Conditions</a>
                    <a href="">Disclaimer</a>
                    <a href="">Refund Policy</a>
                    <a href="">Other</a>
                </div>
                <div class="col-lg-3 mt-3">
                    <h5>Resources</h5>
                    <a href="">Case Studies</a>
                    <a href="">Free Guide</a>
                    <a href="">Our Blog</a>
                    <a href="">Latest News</a>
                    <a href="">Our FAQ</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 mt-3">

                    <p><strong>Disclaimer:</strong>

                        Kindly note that this website is privately owned and operated, and the form provided is not an
                        official government registration document.
                        Its sole purpose is to gather pertinent information from our clients to facilitate a
                        comprehensive understanding of their business or needs by our experts. Please be aware that we
                        are a private consultancy managing this website,
                        and the fees collected herein are specifically designated as consultancy fees. By proceeding
                        with this website, you acknowledge and understand these terms.</p>

                    <p class="sub-heading mt-3">Copyright &copy; 2024 Indiataxfile Pvt Ltd. All rights reserved. Powered
                        by
                        <a href="">Creelify.com</a>
                    </p>
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <ul class="social-icons">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


<?php wp_footer(); ?>

</body>

</html>