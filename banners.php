<div class="fuid-container banner">
    <div class="mk-bgimg"> </div>
    <div class="the-b-img">
        <div class="the-actual-img" style="background-image: url('<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>')">

        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="ms-caption">
                <span class="mk-page-title"><?php the_title(); ?><span class="dot"></span></span><br>
                <!--                <span class="breadcrumb"><?php get_breadcrumb(); ?></span>-->
            </div>
        </div>

    </div>
</div>
