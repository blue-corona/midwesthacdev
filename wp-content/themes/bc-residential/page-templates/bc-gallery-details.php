<?php
/**
 * Template Name:Gallery Ditails Template
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
                 <h1 class="ml-n3">Project Title Goes Here</h1>
                <div class="row py-3">
                 

  <style>
    
    .swiper-container {
      width: 100%;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
    }
    .gallery-top {
      height: 80%;
      width: 100%;
    }
    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
      height: 100%;
      opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }

  </style>
<body>
  <!-- Swiper -->
  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1.jpg')"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img2.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img2.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img2.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img2.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1.jpg)"></div>
      <div class="swiper-slide mobile_gallery" style="height:500px; background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img2.jpg)"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
 <span class="bc_text_30 bc_line_height_34 bc_text_alt_1 bc_text_light bc_color_primary mt-3  position-relative d-lg-block d-none" style="width: 35%; "><span class="bc_font_alt_1 after-line">Lorem Ipsum Dolor Sit</span>
 <p></p>
 <span class="bc_font_alt_1 bc_text_18 bc_line_height_22 bc_color_secondary text-uppercase">Lorem ipsum dolor sit ametquia </span>

<p class=" bc_text_16 bc_line_height_24 mt-2 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
  
 </span>

  <div class="swiper-container gallery-thumbs mr-0 mobile_thumbs" style="width: 60%;">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1_thumb.jpg')"></div>
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1_thumb.jpg')"></div>
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img3_thumb.jpg')"></div>
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img4_thumb.jpg')"></div>
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1_thumb.jpg')"></div>
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img1_thumb.jpg')"></div>
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img3_thumb.jpg')"></div>
      <div class="swiper-slide" style="height:105px; background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/img/project3_img4_thumb.jpg')"></div>
    </div>
  </div>
<span class="bc_text_30 bc_line_height_34  bc_text_light bc_color_primary mt-3 after-line position-relative d-lg-none d-block w-100"><span class="bc_font_alt_1">Lorem Ipsum Dolor Sit</span>
<p class=" bc_text_16 bc_line_height_24 mt-4 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
  
 </span>

  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop:true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });
  </script>
                  
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
<!----------------------------------nineth section start here--------------------------------------->
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
</main>
<?php get_footer();?>