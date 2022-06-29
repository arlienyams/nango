<?php
$args = array(
    'post_type' => 'slider',
    'orderby' => 'menu_order',
    'posts_per_page' => -1
);
$slides = new WP_Query($args);
?>

<?php if ($slides->have_posts()) : ?>

    <div class="slider-container">
        <div id="homeSlider" class="owl-carousel owl-theme">

            <?php while ($slides->have_posts()) : $slides->the_post(); ?>

                <div class="item">
                    <?php the_post_thumbnail('slider_image'); ?>
                    <div class="container put-index">
                        <div class="row">
                            <div class="fix-the-caption">
                                <div class="slider-caption">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_field('small_caption') ?></p>
                                </div>
                            </div>

                            <div class="the-sign-up">
                                <h5>For latest news and offers</h5>
                                <?php echo do_shortcode('[mc4wp_form id="240"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div>
    </div>