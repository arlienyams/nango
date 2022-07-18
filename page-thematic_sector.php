<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" nango-content">
                    <div class="inside-flx">
                        <?php
                $args = array(
                    'post_type' => 'thematic_sector',
                    'orderby' => 'menu_order',
                    'posts_per_page' => -1
                );
                $thematicslides = new WP_Query($args);
                ?>

                        <?php if ($thematicslides->have_posts()) : ?>

                        <?php while ($thematicslides->have_posts()) : $thematicslides->the_post(); ?>
                        <div class="th-h">
                            <div class="th-holder-inside">
                                <div class="img-inside">
                                    <a href="<?php the_permalink() ?>"><img src="<?php the_field('thematic_slider_image') ?>" alt=""></a>

                                </div>
                                <div class="thematic-title-inside">
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
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
<?php get_footer(); ?>
