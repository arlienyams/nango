<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" nango-content">
                    <div class="thematic-holder-inside">

                        <div class="port-img-inside">
                            <img src="<?php the_field('thematic_slider_image') ?>" alt="">
                        </div>
                        <span class="the-s-t">
                            <p><?php the_field("text") ?></p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
