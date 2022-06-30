<?php get_header(); ?>

<?php get_template_part('slider'); ?>

<?php if (have_posts()) :

    while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php else : ?>

<?php endif; ?>


<?php get_footer(); ?>