<?php get_header(); ?>

<div class="the-body-content">

    <?php if(have_posts()) :
    
    while(have_posts()) : the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php else: ?>
    <p>Sorry there is no content on this page</p>

    <?php endif; ?>
</div>
<?php get_footer(); ?>
