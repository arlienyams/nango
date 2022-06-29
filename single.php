<?php get_header(); ?>

<div class="the-body-content">

  <?php get_template_part('banners'); ?>

  <div class="container">
    <div class="row">
      <div class="col">
        <?php
        if (is_single('258')) {



          get_template_part('products');
        } else { ?>


          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
          <?php endif; ?>

      </div>

    <?php   } ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>