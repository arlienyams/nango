<?php get_header(); ?>

<?php get_template_part('slider'); ?>

<?php if (have_posts()) :

    while (have_posts()) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else : ?>

<?php endif; ?>
<section class="evnts">
    <div class="container">
        <div class="row">
            <div class="the-events-wrapper">
                <h2>Events</h2>


                <div class="the-events-holder">
                    <div class="cnt-dtls">

                        <?php
                    $args = array(
                        'post_type' => 'Events',
                        'orderby' => 'menu_order',
                        'posts_per_page' => 1
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
                                        <a href=""><?php the_title() ?></a>
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

</section>
<div class="container">
    <div class="row">
        <div class="share-links-are">
            <a href="#" class="the-share-tag">
                <div class="the-share">
                    <h5>Share</h5>

                    <p>Spread the word about NANGO.</p>
                </div>

            </a>
            <a href="#" class="the-faqs-tag">
                <div class="the-faqs">
                    <h5>FAQs</h5>
                    <p>We have the answers for you.</p>
                </div>

            </a>

            <a href="#" class="the-whats-app-tag">
                <div class="the-whats-app">
                    <h5>Whats App</h5>
                    <p>Gt in touch on WhatsApp</p>
                </div>
            </a>

        </div>
    </div>
</div>

<?php get_footer(); ?>
