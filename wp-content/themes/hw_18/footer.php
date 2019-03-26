<?php
/**
 * The template for displaying the footer
 *
 * @package hw_18
 */

?>


	<footer class="site-footer">
		 <div class="contact">
             <div class="wrapper">
                <div class="contact_items">
                    <div class="contact_item1">
                        <h2 class="title">
                            YOU THINK WE'RE COOL ? LET'S WORK TOGETHER
                        </h2>
                        <button class="btn">
                            get in touch
                        </button>
                    </div>
                    <div class="contact_item2">
                        <h3 class="contact_heading">
                            STAY INFORMED WITH OUR NEWSLETTER
                        </h3>
                        <p class="contact-text">
                            Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.
                        </p>
                        <form>

                            <?php echo do_shortcode( '[contact-form-7 id="119" title="Контактная форма 1"]' ); ?>
<!--                            <input id="contact-elem" type="email" name="email" placeholder="your email">-->
<!--                            <input id="send-btn" type="submit" value="send">-->
                        </form>
                    </div>
                </div>
             </div><!-- .wrapper -->
         </div>
		    <div class="footer-box">
                <div class="wrapper">
                    <div class="footer-item">
                        <nav class="footer-navigation">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'menu-2',
                                    'menu_id'        => 'secondary-menu',
                                    'container'      => ''
                                    ) );
                            ?>
                        </nav>
                        <div class="footer-content">
                            <p>
                                Created by akhouad <?php echo date('Y');?>. All Rights Reserved
                            </p>
                        </div>
                    </div>
                    <ul class="social">
                        <li>
                            <a href="https://www.facebook.com/">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/">
                              <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                             <a href="https://www.instagram.com/">
                                <i class="fab fa-instagram"></i>
                             </a>
                        </li>
                    </ul>
                </div>
            </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
