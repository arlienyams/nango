<?php get_header(); ?>

<div class="the-body-content ">

    <?php get_template_part('banners'); ?>

    <div class="publications white-bg">
        <div class="container">

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'publications',
                'orderby' => 'menu_order',
                'posts_per_page' => 4,
                'paged' => $paged
            );
            $events = new WP_Query($args);
            ?>

            <?php if ($events->have_posts()) : ?>


                <div class="row">
                    <?php while ($events->have_posts()) : $events->the_post(); ?>
                        <div class="col-md-6">


                            <div class="publications-wrapper">
                                <div class="pub-image">
                                    <a href="<?php the_permalink() ?>" class="pg-image"> <?php the_post_thumbnail(); ?></a>
                                </div>
                                <div class="pub-title">
                                    <a href="<?php the_permalink() ?>">
                                        <h5><?php the_title(); ?></h5>
                                    </a>
                                </div>
                                <div class="pub-text">
                                    <a href="<?php the_permalink() ?>"><?php the_field('publication_text'); ?></a>
                                </div>
                                <div class="pub-download">
                                    <?php
                                    $file = get_field('upload_file');
                                    if ($file) : ?>
                                        <a href="<?php echo $file['url']; ?>"><img class="pdf-logo" alt="PDF logo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/Pdf.png" /><?php echo $file['filename']; ?></a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>

                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>

                <div class="page">
                    <?php if (function_exists("pagination")) {
                        pagination($events->max_num_pages);
                    } ?>

                </div>
            <?php endif; ?>


        </div>
    </div>
</div>
<?php get_footer(); ?>