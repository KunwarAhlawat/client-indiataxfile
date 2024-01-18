<?php
/**
 * Sidebar setup for footer full
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'footerfull' ) ) {
	return;
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- ******************* The Footer Full-width Widget Area ******************* -->

<div class="wrapper" id="wrapper-footer-full" role="complementary">



		<!-- footer start -->
        <section class="container-fluid footer-section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-3 mt-3">
                    
                    <a href=""><h3>IndiaTaxfile</h3></a>
                    
                    <p>Vivamus tellus mi. Nulla ne cursus elit,vulputate. 
                        Sed ne cursus augue hasellus lacinia sapien vitae. Vivamus tellus mi. Nulla ne cursus elit,vulputate. 
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
                     <a href="">Guide</a>
                     <a href="">Blog</a>
                     <a href="">News</a>
                     <a href="">FAQ</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 mt-3">
                    <p>Copyright &copy; 2024 Indiataxfile Pvt Ltd. All rights reserved.</p>
                     <p><strong>Disclaimer:</strong>

                        Kindly note that this website is privately owned and operated, and the form provided is not an official government registration document. 
                        Its sole purpose is to gather pertinent information from our clients to facilitate a comprehensive understanding of their business or needs by our experts. Please be aware that we are a private consultancy managing this website, 
                        and the fees collected herein are specifically designated as consultancy fees. By proceeding with this website, you acknowledge and understand these terms.</p>
                </div>
                <div class="col-lg-4 col-md-12 mt-3">
                    <ul class="social-icons">
                        <li><a  href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      </ul>
                </div>
            </div>
        </div>
       </section>




</div><!-- #wrapper-footer-full -->