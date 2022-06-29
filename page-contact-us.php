<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part('banners'); ?>
    <!--
    <div class="the-overview">
        <div class="container-fluid overview">
            <div class="container">
                <div class="row">
                    <div class="col over">
                        <img src="http://localhost/bancabc/wp-content/themes/bancabc/img/we-provide.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <div class="container">
        <h2>Keep in Touch With Us</span></h2>
    </div>

    <div class="container">
        <div class="contact-flex">
            <div class="part-one">
                <div class="thec-frm">
                    <?php echo do_shortcode('[contact-form-7 id="46" title="Contact Us"]'); ?>
                </div>
            </div>
            <div class="part-two">
                <div class="cnt-dtls">
                    <h2>Contact Details</h2>

                    <?php
                    $args = array(
                        'post_type' => 'Cotact Details',
                        'orderby' => 'menu_order',
                        'posts_per_page' => -1
                    );
                    $contactdetails = new WP_Query($args);
                    ?>

                    <?php if ($contactdetails->have_posts()) : ?>

                    <div class="c-d">

                        <?php while ($contactdetails->have_posts()) : $contactdetails->the_post(); ?>


                        <div class="c-holder">
                            <div class="slider-caption">
                                <div class="address-contact">
                                    <h5>Address: </h5>
                                    <p><?php the_field('address') ?></p>
                                </div>
                                <div class="email-contact">
                                    <h5>Email:</h5>
                                    <p><?php the_field('email') ?></p>
                                </div>
                                <div class="phone-contact">
                                    <h5>Phone:</h5>
                                    <p><?php the_field('phone_number') ?></p>
                                </div>

                                <div class="whatsapp-contact">
                                    <h5>Whatsapp:</h5>
                                    <p><?php the_field('whatsapp_number') ?></p>
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
