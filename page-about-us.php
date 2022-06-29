<?php get_header(); ?>

<div class="the-body-content">

    <?php get_template_part( 'banners' ); ?>



    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php if(have_posts()) :
    
                while(have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                <?php else: ?>
                <p>Sorry there is no content on this page</p>

                <?php endif; ?>
            </div>
            <div class="col-12">
                <div class="our-team-title">
                    <h2>Our Team</h2>
                </div>

                <?php
                //$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => 'our-team',
                    'posts_per_page' => 15,
                    //'paged' => $paged,
                    //'meta_key'			=> 'position_of_team_member',
                    'orderby'			=> 'meta_value_num',
                    'order'				=> 'ASC'
                );
                $query_posts = new WP_Query($args); 
            ?>

                <?php if ( $query_posts->have_posts() ) : ?>

                <div class="col our-team">
                    <?php while ( $query_posts->have_posts() ) : $query_posts->the_post(); ?>
                    <div class="team-holder">
                        <div class="team-outer">
                            <div class="team-image">
                                <!--<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(''); ?> </a> -->
                                <?php the_post_thumbnail(''); ?>
                            </div>
                            <div class="team-description">
                                <h6 class="Member-title">
                                    <!--<a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a> -->
                                    <?php the_title(); ?>
                                </h6>
                                <p class="position"><?php the_field('team_member_position'); ?></p>

                                <!-- <div class="the-description">
                                    <p><?php the_field('team_member_description'); ?></p>
                                </div> -->


                            </div>

                        </div>
                    </div>
                    <?php
                         endwhile;
                 ?>


                </div>

                <?php
            else :
            // fallback no content
        
            endif;
        
            ?>
            </div>
        </div>
    </div>
</div>







<?php get_footer(); ?>
