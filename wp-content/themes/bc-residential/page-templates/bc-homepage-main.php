<?php
/**
 * Template Name: HomePage Mainsite Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main role="main">
  <?php 
  if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'background_image') == 'background_image'){
    get_template_part( 'page-templates/hero-section/bc-hero-banner' );
  }else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'image_slider') == 'image_slider'){
    get_template_part( 'page-templates/hero-section/bc-hero-swiper' );
  }
  else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'video') == 'video'){
    get_template_part( 'page-templates/hero-section/bc-hero-video' );
  }
  ?>

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
<!-------------------------------------------------third section start here----------------------  -->

<div class="container d-none d-lg-block ">
  <div class="row  overflow-auto p-0 mx-2 my-5 bc-scroll-height">
    <div class="col-12 text-center d-none d-lg-block ">
     <h1>Your Local HVAC Company in Milwauk </h1> 
     <h2 class=" pb-3">Repair & Emergency Service</h2>
   </div>
   <div class="col-3"></div>
   <div class="col-12 col-lg-6 d-none d-lg-block ">
    <div class="text-center border-bottom border-warning  w-100 mx-auto"></div><br></div>
    <div class="col-3"></div>

    <div class=" col-12 d-none d-lg-block ">
     <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.<br><br>

      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.


    </div>   
  </div>
</div>
<!---------------------------------third section end here-------------------------------------- -->
<!---------------------------------------------mobile section start here-------------------- -->
<div class="container d-xs-block d-lg-none ">
  <div class="row   my-2 ">
    <div class="col-12 text-center">
     <h1>Your Local HVAC Company in Milwauk </h1> 
     <h2 class=" pb-3">Repair & Emergency Service</h2>
   </div>
   <div class="col-3"></div>
   <div class="col-12 col-lg-6">
    <div class="text-center border-bottom border-warning  w-100 mx-auto"></div><br></div>
    <div class="col-3"></div>

    <div class=" col-12 ">
     <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.
     </p>

     <a href="#" class="bc_sm_text_15 bc_sm_line_height_50  bc_color_7">Read More<span><i class="fal fa-plus bc_sm_text_13 bc_sm_line_height_50 ml-2 left-2 "></i></span></a>
   </div>   
 </div>
</div>

<!-- -----------------------------------mobile section end here----------------------------- -->
<!-- ------------------------------------forth  section start here--------------------------- -->
<div class="container-fluid p-0 " style=" background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-04.jpg);">
  <div class="container">
    <div class="row">
     <div class="col-lg-6  col-12  order-lg-1  order-2 ">
       <h3  class=" border-bottom border-warning pt-4 pb-2 ">Commercial HVAC Services</h3>
       <p>We offer the following trusted commercial HVAC services:</p>
       <ul class="bc_text_20 bc_line_height_30 bc_color_secondary costom_padding">
        <li>Commercial air conditioning</li>
        <li>Commercial heating</li>
        <li>Commercial boilers</li>
        <li>Commercial furnaces </li>
      </ul>


      <div class="col-lg-12  col-12 d-none d-lg-block mt-lg-5 ">
        <a href="#" class=" btn  btn-primary hvr-sweep-to-right"> Learn More</a>
      </div>
      <!-- <a href="#" class=" btn hvr-sweep-to-right">Sweep To Right</a> -->
      <div class="col-lg-12 mb-3  col-12 text-center mx-auto d-xs-block d-lg-none ">
        <a href="#" class="btn  btn-primary hvr-sweep-to-right"> Learn More</a>
      </div>

    </div>
    <div class="col-lg-6  col-12 px-lg-2 p-0 order-lg-2  order-1 ">
     <div class="text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/come-hero.jpg" class="img-fluid"></div>
   </div>
 </div>
</div>
</div>
<!-- --------------------------forth  section end here-------------------------------------- -->
<!-- ----------------------------------------fifth section start here------------------------- -->
<div class="conatiner-fluid   bc_color_warning_bg ">
  <div class="container">

   <div class="row">
     <div class="col-lg-3  col-12 text-center pb-3">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ficon-01.png" class="img-fluid h-100 w-50">
     </div>
     <div class="col-lg-6  col-12 text-center py-lg-5 p-0">

       <h5 class="bc_sm_text_normal mx-2">Members Enjoy Many Benefits Including</h5>
       <h4 class="bc_text_bold ">25% off ALL parts</h4>
     </div>
     <div class="col-lg-3 mb-5  col-12  text-center" >
      <i class="fal fa-angle-double-down pb-3"></i>
     <br>
      <a href="#" class="btn btn-info mt-lg-5 mt-4 mb-3 hvr-sweep-to-right"> Get Details</a>
    </div>
  </div>
</div>
</div>
<!--------------------------fifth section start here------------------------------------------  -->
<!-- --------------------------six section start here------------------------------------------ -->
<div class="container">
  <div class="row py-5 position-relative">
    <div class="col-12 col-lg-10 ml-lg-auto mr-lg-auto">

      <div class="swiper-container swiper-container1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
           <div class=" text-center">
            <i class="fas fa-star bc_text_20 bc_line_height_55 bc_sm_text_15  bc_color_2"></i>
            <i class="fas fa-star bc_text_20 bc_line_height_55 bc_sm_text_15  bc_color_2"></i>
            <i class="fas fa-star bc_text_20 bc_line_height_55 bc_sm_text_15  bc_color_2"></i>
            <i class="fas fa-star bc_text_20 bc_line_height_55 bc_sm_text_15 bc_color_2"></i>
            <i class="fas fa-star bc_text_20 bc_line_height_55 bc_sm_text_15 bc_color_2"></i>
          </div>
          <h3 class="text-center pt-lg-4">What Your Neighbors Are Saying</h3>
          <div class="inner-box position-relative w-75 w-sm-100 mw-100 p-4 bc_color_3  my-5 bc_color_3_bg text-center">
           <p class="p-lg-5 ml-lg-5 mr-lg-5">  I contacted Midwest because my furnace wasn’t working. They fixed it the same day, and it didn’t cost me and arm or a leg! Fantastic company, strongly recommend!</p>
           <p class="bc_color_secondary bc_text_16 bc_line_height_41 text-center">Kennedy J.</p>
           <div id="triangle-down"></div>
         </div>
       </div>
       <div class="swiper-slide">
         <div class=" text-center">
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
        </div>
        <h3 class="text-center pt-lg-4">What Your Neighbors Are Saying</h3>
        <div class="inner-box   position-relative w-75 w-sm-100 mw-100 p-4 bc_color_3  my-5 bc_color_3_bg text-center">
         <p class="p-lg-5 ml-lg-5 mr-lg-5">  I contacted Midwest because my furnace wasn’t working. They fixed it the same day, and it didn’t cost me and arm or a leg! Fantastic company, strongly recommend!</p>
         <p class="bc_color_secondary bc_text_16 bc_line_height_41 text-center">Kennedy J.</p>
       </div>
     </div>
     <div class="swiper-slide">
       <div class=" text-center">
        <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
        <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
        <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
        <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
        <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
      </div>
      <h3 class="text-center pt-lg-4">What Your Neighbors Are Saying</h3>
      <div class="inner-box position-relative  mw-100 w-75 w-sm-100 p-4 bc_color_3  my-5 bc_color_3_bg text-center">
       <p class="p-lg-5 ml-lg-5 mr-lg-5">  I contacted Midwest because my furnace wasn’t working. They fixed it the same day, and it didn’t cost me and arm or a leg! Fantastic company, strongly recommend!</p>
       <p class="bc_color_secondary bc_text_16 bc_line_height_41 text-center">Kennedy J.</p>
     </div>
   </div>
   <div class="swiper-slide">
     <div class=" text-center">
      <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
      <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
      <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
      <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
      <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    </div>
    <h3 class="text-center pt-lg-4">What Your Neighbors Are Saying</h3>
    <div class="inner-box position-relative w-75 w-sm-100 mw-100 p-4 bc_color_3  my-5 bc_color_3_bg text-center">
     <p class="p-lg-5 ml-lg-5 mr-lg-5">  I contacted Midwest because my furnace wasn’t working. They fixed it the same day, and it didn’t cost me and arm or a leg! Fantastic company, strongly recommend!</p>
     <p class="bc_color_secondary bc_text_16 bc_line_height_41 text-center">Kennedy J.</p>
   </div>
 </div>
 <div class="swiper-slide">
   <div class=" text-center">
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
    <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
  </div>
  <h3 class="text-center pt-lg-4">What Your Neighbors Are Saying</h3>
  <div class="inner-box position-relative w-75 w-sm-100 mw-100 p-4 bc_color_3  my-5 bc_color_3_bg text-center">
   <p class="p-lg-5 ml-lg-5 mr-lg-5">  I contacted Midwest because my furnace wasn’t working. They fixed it the same day, and it didn’t cost me and arm or a leg! Fantastic company, strongly recommend!</p>
   <p class="bc_color_secondary bc_text_16 bc_line_height_41 text-center">Kennedy J.</p>
 </div>
</div>
</div>
<!-- Add Pagination -->
<div class="swiper-pagination d-lg-none d-xs-block"></div>
<!-- Add Arrows -->

</div>
</div>

<div class="swiper-button-next d-none d-lg-block mr-5"><i class="fas fa-chevron-right"></i></div>
<div class="swiper-button-prev d-lg-block d-none ml-5"><i class="fas fa-chevron-left"></i></div>



</div>
</div>
<!-- -----------------------------------six section end here----------------------------------- -->
<!-- ----------------------------------------------seventh section start here--------------------- -->
<div class="container-fluid p-0 " style=" background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/res-01.jpg);">
  <div class="container">
    <div class="row">

      <div class="col-lg-6  col-12 px-lg-2 p-0 ">
       <div class="text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/resh.jpg" class="img-fluid"></div>
     </div>
     <div class="col-lg-6  col-12 ">
       <h3 class=" pt-4 pb-2 "><span class=" border-bottom border-warning">Residential HVAC Services</span></h3>
       <p>We offer the following trusted residential HVAC services:</p>
       <ul class=" bc_text_20 bc_line_height_30 bc_color_secondary">
        <li>Residential air conditioning</li>
        <li>Residential heating</li>
        <li>AC repair & replacement</li>
        <li>Furnace repair & replacement  </li>
      </ul>

      <div class="col-lg-12  col-12 d-none d-lg-block "><a href="#" class="btn  btn-primary hvr-sweep-to-right"> Learn More</a></div>
      <div class="col-lg-12 mb-3 col-12 text-center mx-auto d-xs-block d-lg-none "><a href="#" class="btn  btn-primary hvr-sweep-to-right"> Learn More</a></div>
    </div>
  </div>
</div>
</div>
<!-------------------------------------------------seventh section end here----------------------- -->
<!---------------------------------------------eight section start here---------------------------- -->
<div class="conatiner-fluid   bc_color_warning_bg ">
  <div class="container">

   <div class="row">
     <div class="col-lg-3  col-12 text-center py-1 ">
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lamp.png" class="img-fluid">
     </div>
     <div class="col-lg-6  col-12 text-center py-lg-5 p-0">

       <h5>Call Us Now!</h5>
       <div class="bc_text_36 bc_line_height_41 bc_text_bold bc_color_white">Repair & Emergency Service</div>
     </div>
     <div class="col-lg-3 mb-5  col-12 left_img text-center" >
      <i class="fal fa-angle-double-down pb-3"></i>
     <br>

      <a href="#" class="btn btn-info mt-lg-5 mb-3 hvr-sweep-to-right"> Contact Us</a>
    </div>
  </div>
</div>
</div>
<!--------------------------------------------eight section end here-----------------------------  -->
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

</main>
<?php function serviceAreaJavascript() {?>
 <script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery(".hide_div").hide();
    jQuery("#minus").toggle();
    jQuery(".abc").click(function(){
      jQuery("#minus").toggle();
      jQuery("#plus").toggle();
      jQuery(".hide_div").toggle(500);
    });
  });
</script>


<script>
  var Swipes = new Swiper('.swiper-container1', {

    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
      slidesOffsetBefore: 40,
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
<?php }
add_action( 'wp_footer' , 'serviceAreaJavascript' );?>
<?php get_footer(); ?>