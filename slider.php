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
                        <div class="row">
                            <div class="col">

                                <div class="slider-caption">
                                    <div class="caption-holder">
                                        <h1><?php the_field('title') ?></h1>

                                        <div class="learn-more-btn">
                                            <a href="<?php the_field('read_more'); ?>">Read More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="social-media">
                            <a href=""><i class="icon-facebook-icon"></i></a>
                            <a href=""><i class="icon-twitter-icon"></i></a>
                            <a href=""><i class="icon-instagram-icon"></i></a>
                            <a href=""><i class="icon-youtube-icon"></i></a>
                        </div>

                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>


        </div>