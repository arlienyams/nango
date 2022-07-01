<?php get_header(); ?>

<?php get_template_part('slider'); ?>

<div class="latest-news">
    <div class="container">
        <h2>Latest News</h2>

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'category_name' => 'news',
        );
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <div class="row">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-md-3">
                        <div class="news-holder" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="0">
                            <div class="news-image">
                                <a href=" <?php the_permalink() ?>" class="pg-image"> <?php the_post_thumbnail(); ?></a>
                            </div>
                            <div class="news-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="news-button">
                                <a href="<?php the_permalink(); ?>"><i class="icon-next_icon"></i></a>
                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
        <?php endif; ?>

        <div class="latest-btn">
            <div class="btn">
                <a href="news">All News</a>
            </div>
        </div>


    </div>
</div>

<section class="we-do">
    <div class="container">
        <h2>What We Do</h2>
        <div class="row">

            <?php
            $args = array(
                'post_type' => 'we_do',
                'posts_per_page' => 6,
            );
            $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <div class="row">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="we-wrapper">
                                <a href="<?php the_field('page_link') ?>">

                                    <h5><?php the_field('title'); ?></h5>
                                </a>
                                <div class="news-button">
                                    <a href="<?php the_permalink(); ?>"><i class="icon-next_icon"></i></a>
                                </div>
                            </div>
                        </div>


                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<div class="latest-news">
    <div class="container">
        <h2>Current Programmes</h2>

        <?php
        $args = array(
            'post_type' => 'current_programmes',
            'posts_per_page' => 4,
        );
        $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>
            <div class="row">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-md-3">
                        <div class="news-holder" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="0">
                            <div class="news-image">
                                <a href=" <?php the_permalink() ?>" class="pg-image"> <?php the_post_thumbnail(); ?></a>
                            </div>
                            <div class="news-cat">
                                <a href="<?php the_permalink(); ?>"><?php the_field('category'); ?></a>
                            </div>
                            <div class="news-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="news-button">
                                <a href="<?php the_permalink(); ?>"><i class="icon-next_icon"></i></a>
                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
        <?php endif; ?>

        <div class="latest-btn">
            <div class="btn">
                <a href="news">All Programmes</a>
            </div>
        </div>


    </div>
</div>

<?php if (have_posts()) :

    while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php else : ?>

<?php endif; ?>

<section class="thematics">
    <div class="container">
        <div class="row">
            <h2>Thematic Sector</h2>
            <div class="thematic-sector">
                <p>NANGO carries under its wings an amalgam of various issues constituencies and representative groups all with the singular focus of meeting the development needs of men, women and children in Zimbabwe. Its membership is segmented into 10 different thematic sectors:</p>
            </div>
            <div class="">
                <?php
                $args = array(
                    'post_type' => 'thematic_sector',
                    'orderby' => 'menu_order',
                    'posts_per_page' => -1
                );
                $thematicslides = new WP_Query($args);
                ?>

                <?php if ($thematicslides->have_posts()) : ?>

                    <div class="thematicslider-container">
                        <div id="thematicSectorSlider" class="owl-carousel owl-theme">
                            <?php while ($thematicslides->have_posts()) : $thematicslides->the_post(); ?>

                                <div class="item">

                                    <div class="put-index">
                                        <div class="thematic-holder">
                                            <div class="thematic-title">
                                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                            </div>
                                            <div class="port-img">
                                                <img src="<?php the_field('thematic_slider_image') ?>" alt="">
                                            </div>
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

</section>

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