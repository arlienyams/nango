<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" nango-content">
                    <div class="the-s-date">
                        <div class="the-time">
                            <p><?php the_field('start_time') ?></p>
                            <span>-</span>
                            <p><?php the_field('end_time') ?></p>
                        </div>
                        <div class="the-s-date">
                            <div class="the-location">
                                <p><?php the_field('location') ?></p>
                            </div>
                        </div>
                        <div class="the-events-date">
                            <div class="the-dte">
                                <span>Date:</span>
                                <p><?php the_field('event_date') ?></p>
                            </div>

                        </div>
                        <div class="the-s-bdy">
                            <p><?php the_field('event_description') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
