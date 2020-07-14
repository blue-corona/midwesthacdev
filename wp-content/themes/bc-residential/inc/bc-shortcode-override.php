<?php
/*- overriding plugins shortcode -*/

add_action('wp_head', 'bc_promotion_shortcode_custom');
function bc_promotion_shortcode_custom() {
    remove_shortcode('bc-testimonial');
    add_shortcode('bc-testimonial', 'custom_testimonial_shortcode');

    remove_shortcode('bc-affiliation');
    add_shortcode('bc-affiliation', 'custom_affiliation_shortcode');
}

function custom_affiliation_shortcode( $atts , $content = null ) {
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
    ?>
        <script>
        var affiliationswiper = new Swiper('#affiliation<?php echo $count ?>', {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              loop: true,
              loopFillGroupWithBlank: true,

              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                  return '<span class="' + className + '">' +  '</span>';
                },
              },
              breakpoints: {
                640: {
                  slidesPerView: 1,
                  spaceBetween: 20,
                },
                768: {
                  slidesPerView: 2,
                  spaceBetween: 40,
                },
                1024: {
                  slidesPerView: 3,
                  spaceBetween: 50,
                },
              }

            });

        </script>
    <?php });
$args  = array( 'post_type' => 'bc_affiliations', 'posts_per_page' => -1, 'order'=> 'ASC','post_status'  => 'publish');
ob_start();
    ?>
<div class="container position-relative my-lg-4 py-lg-3 px-4">
 <div class="col-lg-12 col-12">
  <div id="affiliation<?php echo $count;?>" class="swiper-container p-4 mobile_padding"  >
    <div class="swiper-wrapper">
 <?php 
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                while($query->have_posts()) : $query->the_post();
                $name = get_post_meta( get_the_ID(), 'affiliation_name', true );
                $link = get_post_meta( get_the_ID(), 'affiliation_link', true );
                $image = get_post_meta( get_the_ID(), 'affiliation_custom_image', true );
                ?>
      <div class="swiper-slide text-center">
         <a href="<?= $link?>" target="_blank"> <img src="<?= $image;?>" class="img-fluid" alt="<?php echo $name;?>"></a></div>
<?php
                endwhile; 
                wp_reset_query();
                endif;
                ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination d-lg-none d-xs-block"></div>
    <!-- Add Arrows -->
    </div>
  </div>
   <div class="swiper-button-next  d-none d-lg-block"><i class="fas fa-chevron-right"></i></div>
    <div class="swiper-button-prev d-none d-lg-block"><i class="fas fa-chevron-left"></i></div>
</div>

<?php 
$output = ob_get_clean();
return $output;
}
function custom_testimonial_shortcode($atts , $content = null){
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
    ?>
    <script>
    var swiperTestimonials = new Swiper('#bc_testimonials-swiper_<?php echo $count ?>', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      slidesOffsetBefore: 40,
    },
    pagination: {
        el: '.test_swiper2',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' +  '</span>';
      },
    },
  });
    </script>
    <?php });

    $Ids = null;
    $args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
    
    ob_start();
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>

<div class="container-fluid"  style="background-repeat: no-repeat;
    background-size: cover; background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/comm-review.jpg);">
    <div class="container">
  <div class="row py-5 position-relative">
    <div class="col-12 col-lg-10 ml-lg-auto mr-lg-auto">
 <div class=" text-center">
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
  </div>
  <h3 class="text-center pt-lg-4">What Your Neighbors Are Saying</h3>
      <div id="bc_testimonials-swiper_<?php echo $count;?>" class="swiper-container">
        <div class="swiper-wrapper">
     <?php 
                        while( $query->have_posts() ) {
                        $query->the_post();
                        $name = get_post_meta( get_the_id(), 'testimonial_name', true );
                        $title = get_post_meta( get_the_id(), 'testimonial_title', true );
                        $message = get_post_meta( get_the_id(), 'testimonial_message', true );
                        $image = get_post_meta( get_the_id(), 'testimonial_custom_image', true );
                        ?>
 <div class="swiper-slide">
  
  <div class="inner-box position-relative w-75 w-sm-100 mw-100 p-4 bc_color_3  my-5 bc_color_3_bg text-center mobile_bg_remove">
   <p class="p-lg-5 ml-lg-5 mr-lg-5"> <?php echo $message;?></p>
   <p class="bc_color_secondary bc_text_16 bc_line_height_41 text-center"><?php echo $name;?></p>
 </div>
</div>
 <?php }?>
</div> 
<!-- Add Pagination -->
<div class="swiper-pagination d-lg-none d-xs-block test_swiper2"></div>
 <!-- Add Arrows--->

</div>
</div>
<div class="swiper-button-next d-none d-lg-block mr-5"><i class="fas fa-chevron-right"></i></div>
<div class="swiper-button-prev d-lg-block d-none ml-5"><i class="fas fa-chevron-left"></i></div>
</div>
</div>
</div>
<?php 
endif;
$output = ob_get_clean();
return $output;
}
