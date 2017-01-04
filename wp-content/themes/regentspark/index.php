<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package regentspark
 */

get_header(); ?>

            <!-- main content -->
        <div class="container-fluid main-content">
            <div class="row-flex">
                <div class="main-nav">
                    <ul class="list-unstyled">
                    <?php 
                    $args = array( 'post_type' => 'tab' );
                    $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php 
                    $count = 0;
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $count++; ?>
                    <li <?php if(get_the_title() == 'Videos'){echo 'class="active"';} ?>><a href="#tab<?php echo $count; ?>"><?php the_title(); ?></a></li>
                    <?php endwhile;
                    wp_reset_query(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>

                    </ul>
                </div>
                <div class="content-wrapper">
                    <!-- tab -->
                    <?php 
                    $args = array( 'post_type' => 'tab' );
                    $the_query = new WP_Query( $args ); 
                    ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                    <?php 
                    $count = 0;
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    $count++; ?>

                    <?php if(get_the_title() != 'Videos' ): ?>
                    <div class="tab" id="tab<?php echo $count; ?>">
                        <div class="text-content">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_field('description'); ?></p>
                                </div>
                            </div>
                            <div class="swiper-scrollbar"></div>
                        </div>
                        <div class="text-content-navigation">
                            <ul class="list-instyled list-inline pull-right">
                                <li><a href="#"><span class="glyphicon glyphicon-triangle-top text-content-prev"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-triangle-bottom text-content-next"></span></a></li>
                            </ul>
                        </div>
                        <div class="content">
                        <?php if(get_the_title() == 'Contact Us'): 
                         echo do_shortcode( '[contact-form-7 id="24" title="Contact us"]' ); 
                        else: ?>
                            <div class="content-slider">
                            <?php if( have_rows('gallery') ): ?>
                                <div class="swiper-wrapper">
                                <?php while( have_rows('gallery') ): the_row(); 
                                    $image = get_sub_field('image');
                                ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo $image['url']; ?>" alt="">
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                                <div class="slider-navigation">
                                    <ul class="list-unstyled list-inline">
                                        <li><a href="#"><span class="glyphicon glyphicon-triangle-left slider-prev"></span></a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-triangle-right slider-next"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif ?>
                        </div>
                    </div>
                    <?php else: ?>

                    <div class="tab thumbnails-tab active" id="tab<?php echo $count; ?>">
                        <div class="thumbnails">
                        <?php if( have_rows('videos') ): ?>
                            <div class="swiper-wrapper">
                            <?php $counter = 0; while( have_rows('videos') ): the_row(); 
                                    $thumb = get_sub_field('thumbnail');
                                    $video = get_sub_field('video');
                                    $counter ++;
                                ?>
                                <div class="swiper-slide">
                                    <a href="#video<?php echo $counter; ?>">
                                        <img src="<?php echo $thumb['url']; ?>" alt="">
                                        <span class="glyphicon glyphicon-play"></span>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        </div>
                        <div class="text-content-navigation">
                            <ul class="list-instyled list-inline pull-right">
                                <li><a href="#"><span class="glyphicon glyphicon-triangle-top text-content-prev"></span></a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-triangle-bottom text-content-next"></span></a></li>
                            </ul>
                        </div>
                        <div class="content">
                        <?php if( have_rows('videos') ): ?>
                            <div class="thumbs-tab-content">
                            <?php $counter = 0; while( have_rows('videos') ): the_row(); 
                                    $thumb = get_sub_field('thumbnail');
                                    $video = get_sub_field('video');
                                    $counter ++;
                                ?>
                                <div class="thumb-tab <?php if($counter == 1){ echo 'active';}?>" id="video<?php echo $counter; ?>">
                                    <iframe src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>

                    <?php endif; ?>
                    <?php endwhile;
                    wp_reset_query(); ?>
                    <?php else:  ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                    
                    <!--// tab -->

                </div>
            </div>
        </div>
        <!--// main content -->

<?php
get_footer();
