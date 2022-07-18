<div class="slider-wrapper">


    <?php
    $args = array(
        'post_type' => 'Slider',
        'orderby' => 'menu_order',
        'posts_per_page' => -1
    );
    $slides = new WP_Query($args);
    ?>

    <?php if ($slides->have_posts()) : ?>

        <div class="slider-container">
            <div id="homeSlider" class="owl-carousel owl-theme">

                <?php while ($slides->have_posts()) : $slides->the_post(); ?>

                    <div class="item slider-img" style="background-image: url( <?php the_post_thumbnail_url(); ?>)">
                        <div class="container">
                            <div class="slider-content">

                                <div class="slider-caption">
                                    <div class="caption-holder">
                                        <h1><?php the_field('caption') ?></h1>

                                        <div class="learn-more-btn">
                                            <a href="<?php the_field('read_more'); ?>">Learn More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="b-member">
                                <div class="chatbot">
                                    <a href=""><i class="icon-chatbot_icon"></i></a>
                                </div>
                                <div class="newsletter">
                                    <h5>Want to be a NANGO member?</h5>
                                    <?php echo do_shortcode('[contact-form-7 id="43" title="Member Sign Up"]'); ?>
                                </div>
                            </div>




                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>


            </div>
        </div>




        <?php
        $args = array(
            'post_type' => 'contact-details',
            'orderby' => 'menu_order',
            'posts_per_page' => 1
        );
        $contactdetails = new WP_Query($args);
        ?>

        <?php if ($contactdetails->have_posts()) : ?>

            <?php while ($contactdetails->have_posts()) : $contactdetails->the_post(); ?>

                <div class="container">
                    <div class="social-media">
                        <a target="_blank" href="<?php the_field('facebook'); ?>"><i class="icon-facebook_icon"></i></a>
                        <a target="_blank" href="<?php the_field('twitter'); ?>"><i class="icon-twitter_icon"></i></a>
                        <a target="_blank" href="<?php the_field('instagram'); ?>"><i class="icon-instagram_icon"></i></a>
                        <a target="_blank" href="<?php the_field('linked_in'); ?>"><i class="icon-linkedin_icon"></i></a>
                        <a target="_blank" href="<?php the_field('youtube'); ?>"><i class="icon-youtube_icon"></i></a>
                    </div>
                </div>


            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>



</div>