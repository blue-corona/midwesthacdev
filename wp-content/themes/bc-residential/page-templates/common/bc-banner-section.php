 <div class="container-fluid  position-relative p-0" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style="background-size: cover; background-image: url('<?php echo $image[0]; ?>');" <?php }else{ ?> style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/res_banner_home.jpg');" <?php }?>>

    <div class="overlay_gredient "></div>
    <div class="container py-5">
        <div class="row py-5">

        </div>
    </div>
</div>

