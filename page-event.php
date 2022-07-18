<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" nango-content">
                    <div class="the-events-holder">
                        <div class="cnt-dtls">

                            <?php
                        $args = array(
                            'post_type' => 'Events',
                            'orderby' => 'menu_order',
                            'posts_per_page' => -1
                        );
                        $events = new WP_Query($args);
                        ?>

                            <?php if ($events->have_posts()) : ?>

                            <div class="ev">

                                <?php while ($events->have_posts()) : $events->the_post(); ?>


                                <div class="e-holder">
                                    <div class="first-event-flex">
                                        <div class="the-time">
                                            <p><?php the_field('start_time') ?></p>
                                            <span>-</span>
                                            <p><?php the_field('end_time') ?></p>
                                        </div>
                                        <div class="the-location">
                                            <p><?php the_field('location') ?></p>
                                        </div>
                                    </div>
                                    <div class="second-events-flex">
                                        <div class="events-t-tle">
                                            <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        </div>
                                        <div class="the-events-date">
                                            <p><?php the_field('event_date') ?></p>
                                        </div>
                                        <div class="the-events-body">
                                            <p><?php the_field('event_description') ?></p>
                                        </div>
                                    </div>


                                </div>

                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                                <?php endif; ?>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
