<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>

    <section class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="c-wrapper b-right">
                        <h2>Get Help?</h2>
                        <h4>NANGO is here.</h4>
                        <p>Get in touch with us if you need any assistance from us.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="c-wrapper">
                        <h2>General</h2>
                        <h4>Office</h4>
                        <?php
                        $args = array(
                            'post_type' => 'contact-details',
                            'orderby' => 'menu_order',
                            'posts_per_page' => 1
                        );
                        $contactdetails = new WP_Query($args);
                        ?>

                        <?php if ($contactdetails->have_posts()) : ?>

                            <?php while ($contactdetails->have_posts()) : $contactdetails->the_post(); ?>

                                <div class="address">
                                    <p><?php the_field('address'); ?></p>
                                    <p>Phone: <?php the_field('phone_numbers'); ?></p>
                                </div>

                                <div class="c-social-media">
                                    <a target="_blank" href="<?php the_field('facebook'); ?>"><i class="icon-facebook_icon"></i></a>
                                    <a target="_blank" href="<?php the_field('twitter'); ?>"><i class="icon-twitter_icon"></i></a>
                                    <a target="_blank" href="<?php the_field('instagram'); ?>"><i class="icon-instagram_icon"></i></a>
                                    <a target="_blank" href="<?php the_field('linked_in'); ?>"><i class="icon-linkedin_icon"></i></a>
                                    <a target="_blank" href="<?php the_field('youtube'); ?>"><i class="icon-youtube_icon"></i></a>
                                </div>


                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="c-form">
        <div class="container">
            <h2>Get In Touch</h2>
            <?php echo do_shortcode('[contact-form-7 id="114" title="Get In Touch"]'); ?>
        </div>
    </section>


    <?php get_footer(); ?>