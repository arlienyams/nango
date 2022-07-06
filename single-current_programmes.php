<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" nango-content">
                    <p><?php the_field('about_programme'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
