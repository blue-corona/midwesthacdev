<?php
/**
 * Template Name:Gallery Landing Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
   <div class="container-fluid  position-relative p-0" style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/comm_banner_sub.jpg">
    <div class="overlay_gredient "></div>
            <div class="container py-5">
                <div class="row py-5">

                </div>
            </div>
        </div>

        <div class="container-fluid  py-5" style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/comm_sub_content_bg.jpg">
            <div class="container">
                 <h1>Midwest Commercial Projects</h1>
                <div class="row py-5">
                  
                   <div class="col-lg-4">
                        <div class="pdf-thumb-box"> <a href="#">
                        <div class="pdf-thumb-box-overlay"><span class="fa-stack fa-lg">
                        
                        <span class="bc_text_18 bc_line_height_22  bc_text_normal bc_color_tertiary text-uppercase bc_text_alt_1"> <i class="far fa-search pdf-thumb-eye"></i> View Project</span>
                        </span></div>
                          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img1.jpg" >
            </a>
            <br>
        </div>
        <div class="pt-3">
                        <span class="bc_text_30 bc_text_light bc_line_height_34 bc_color_primary bc_font_alt_1 ">Project Title Goes Here</span>
                        <span class="subpage_line d-block  w-100">  </span>
                        <span class="text-uppercase bc_text_alt_1 bc_text_normal bc_text_18 bc_line_height_22 bc_color_secondary">City, State</span>
        </div>
                   </div>
                   <div class="col-lg-4">
                        <div class="pdf-thumb-box"> <a href="#">
                        <div class="pdf-thumb-box-overlay"><span class="fa-stack fa-lg">
                        
                        <span class="bc_text_18 bc_line_height_22  bc_text_normal bc_color_tertiary text-uppercase bc_text_alt_1"> <i class="far fa-search pdf-thumb-eye"></i> View Project</span>
                        </span></div>
                          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img2.jpg" >
            </a>
            <br>
        </div>
        <div class="pt-3">
                        <span class="bc_text_30 bc_text_light bc_line_height_34 bc_color_primary bc_font_alt_1 ">Project Title Goes Here</span>
                        <span class="subpage_line d-block  w-100">  </span>
                        <span class="text-uppercase bc_text_alt_1 bc_text_normal bc_text_18 bc_line_height_22 bc_color_secondary">City, State</span>
        </div>
                   </div>
                   <div class="col-lg-4">
                        <div class="pdf-thumb-box"> <a href="#">
                        <div class="pdf-thumb-box-overlay"><span class="fa-stack fa-lg">
                        
                        <span class="bc_text_18 bc_line_height_22  bc_text_normal bc_color_tertiary text-uppercase bc_text_alt_1"> <i class="far fa-search pdf-thumb-eye"></i> View Project</span>
                        </span></div>
                          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img3.jpg" >
            </a>
            <br>
        </div>
        <div class="pt-3">
                        <span class="bc_text_30 bc_text_light bc_line_height_34 bc_color_primary bc_font_alt_1 ">Project Title Goes Here</span>
                        <span class="subpage_line d-block  w-100">  </span>
                        <span class="text-uppercase bc_text_alt_1 bc_text_normal bc_text_18 bc_line_height_22 bc_color_secondary">City, State</span>
        </div>
                   </div>
                </div>
            </div>
        </div>



         <!----------------------------second section start here----------------------------------------->
  <div class="container-fluid py-4  bc_color_primary_bg d-none d-lg-block ">
   <div class="container">
    <div class="row">
     <div class="col-12">
       <div class="bc_text_30 bc_text_34 bc_color_white text-center">
        Talk to An <span class="bc_text_bold">Expert </span>  Today</div>
        <p class="p-alt text-center py-4">Contact Midwest Heating & Cooling. Proudly serving Milwaukee & the surrounding Wisconsin area!</p>
      </div> 
      <div class="col-12">
        <div class="entry-content bc_hero_form_body">
         <?php echo do_shortcode('[gravityform id=1 ajax=true]')?>
       </div>
     </div>
   </div>
 </div>
</div>
<!-- -------------------------------------------------------------second section end here---------- -->
<div class="container position-relative my-4 py-3 px-4">
 <div class="col-lg-12 col-12">
  <div class=" swiper-container p-4 swiper-container2 "  >
    <div class="swiper-wrapper">
      <div class="swiper-slide text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ii-01.png" class="img-fluid"></div>
      <div class="swiper-slide text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ii-02.png" class="img-fluid"></div>
      <div class="swiper-slide text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ii-03.png" class="img-fluid"></div>
      <div class="swiper-slide text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ii-01.png" class="img-fluid"></div>
      <div class="swiper-slide text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ii-02.png" class="img-fluid"></div>
      <div class="swiper-slide text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ii-03.png" class="img-fluid"></div>
      <div class="swiper-slide text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ii-01.png" class="img-fluid"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination d-lg-none d-xs-block"></div>
    <!-- Add Arrows -->
    </div>
  </div>
   <div class="swiper-button-next  d-none d-lg-block"><i class="fas fa-chevron-right"></i></div>
    <div class="swiper-button-prev d-none d-lg-block"><i class="fas fa-chevron-left"></i></div>
</div>
</main>
<script>
  var Swipes = new Swiper('.swiper-container1', {
    loop: true,
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
  });
</script>



<script>
 var swiper = new Swiper('.swiper-container2', {
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
<?php get_footer();?>