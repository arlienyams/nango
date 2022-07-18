<?php get_header(); ?>

<div class="the-body-content">

    <div class="fuid-container banner">
        <div class="mk-bgimg"> </div>
        <div class="the-b-img">
            <div class="the-actual-img" style="background-image: url('<?php $thumb_id = get_post_thumbnail_id();
                                                                        $thumb_url = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                                                        echo $thumb_url[0]; ?>')">

            </div>
        </div>
        <div class="container">
            <div class="content">
                <div class="ms-caption">
                    <h2><?php printf(__('Search Results for: %s', 'shape'), '<span class="results-name">' . get_search_query() . '</span>'); ?></h2>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <?php if (have_posts()) :

            while (have_posts()) : the_post(); ?>

                <div class="the-results">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </a>
                </div>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p class="no-search-results"><?php esc_html_e('Sorry, There are no results for your search'); ?></p>

        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>