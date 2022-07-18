<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>

    <div class="container">
        <div class=" nango-content">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 8,
                'category_name' => 'news',
                'paged' => $paged
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

            <div class="page">
                <?php if (function_exists("pagination")) {
                    pagination($the_query->max_num_pages);
                } ?>
            </div>

        </div>

    </div>
</div>
<?php get_footer(); ?>