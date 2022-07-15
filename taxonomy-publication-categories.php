<?php get_header(); ?>

<div class="the-body-content ">

    <div class="fuid-container banner">
        <div class="mk-bgimg" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <!-- <div class="container">
            <h2 class="content"><?php the_title(); ?></h2>
        </div> -->

        </div>

        <div class="container">
            <div class="content">
                <div class="ms-caption">
                    <h1 class="mk-page-title"><?php single_cat_title(); ?></h1>
                    <span class="breadcrumb"><?php get_breadcrumb(); ?></span>
                </div>
            </div>

        </div>
    </div>

    <div class="publications white-bg">
        <div class="container">

            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
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

                    <div class="page">
                        <?php if (function_exists("pagination")) {
                            pagination($events->max_num_pages);
                        } ?>

                    </div>

                <?php else : ?>
                <?php endif; ?>




            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>