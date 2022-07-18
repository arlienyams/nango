<?php get_header(); ?>

<div class="the-body-content ">

    <?php get_template_part('banners'); ?>

    <div class="publications white-bg">
        <div class="container">

            <div class="pub-full-text">
                <p><?php the_field('publication_text'); ?></p>
            </div>
            <div class="pub-download">
                <?php
                $file = get_field('upload_file');
                if ($file) : ?>
                    <a href="<?php echo $file['url']; ?>"><img class="pdf-logo" alt="PDF logo" src="<?php echo get_stylesheet_directory_uri(); ?>/css/img/Pdf.png" /><?php echo $file['filename']; ?></a>
                <?php endif; ?>
            </div>


            <div class="page">

            </div>


        </div>
    </div>
</div>
<?php get_footer(); ?>