<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package regentspark
 */

?>

	</div><!-- #content -->

	<!-- footer -->
        <footer class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-unstyled list-inline pull-right copyrights">
                        <li><span>&copy; 2009 Al Dawlia, All Rights Reserved</span></li>
                        <li><img src="<?php bloginfo('template_url'); ?>/img/aldawlia.png" width="60" alt="Al Dawlia"></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--// footer -->

        <!-- bootom footer -->
        <div class="bottom-footer visible-lg"></div>
        <!--// bottom footer -->

        <!-- loading -->
        <div class="loading">
            <div class="loading-screen text-center">
                <img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="200" alt="">
                <div class="loading-text">
                    <span>loading</span>
                    <div id="circleG">
                        <div id="circleG_1" class="circleG"></div>
                        <div id="circleG_2" class="circleG"></div>
                        <div id="circleG_3" class="circleG"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--// loading -->
</div><!-- #page -->

<?php wp_footer(); ?>

 <!-- javascripts -->
        <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/swiper.jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/app.js"></script>

</body>
</html>
