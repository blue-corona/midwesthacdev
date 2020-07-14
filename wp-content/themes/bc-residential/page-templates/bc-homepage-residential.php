<?php
/**
 * Template Name: HomePage Residential Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>
<main role="main">
  <?php 
  if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'background_image') == 'background_image'){
    get_template_part( 'page-templates/hero-section/bc-hero-banner-commercial' );
  }else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'image_slider') == 'image_slider'){
    get_template_part( 'page-templates/hero-section/bc-hero-swiper' );
  }
  else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'video') == 'video'){
    get_template_part( 'page-templates/hero-section/bc-hero-video' );
  }
  ?>

  <!-------second section start here---------------------------------->
  <?php echo do_shortcode ( '[bc-affiliation]');?>
 
  <!------------second section end here---------- -->

<div class="container-fluid d-lg-none d-block " style="background-color: #EBEBEB;">
    <div class="container py-2 px-0">
        <div class="row no-gutters">
            <div class="col-lg-12 mt-2">
                <?php 
                    echo do_shortcode('[bc_accordion]
                        [bc_card expanded=1 title="Residential Air Conditioning" link_href="ac-services" font_icon="fa-wind"]Whether looking for air conditioning maintenance, repairs, or a full replacement, Midwest Heating & Cooling can offer a certified solution. [/bc_card]
                        [bc_card  title="Residential Heating" link_href="heating" font_icon="fa-fire"]Trusted technicians at Midwest Heating & Cooling specialize in the maintenance, repair, and installation of boilers and furnaces.[/bc_card]
                        [bc_card title="Residential Maintenance" link_href="maintenance" font_icon="fa-tools"]Heating and Air Conditioning can be complicated. Its best to leave that work to the certified professionals at Midwest Heating & Cooling. [/bc_card]
                        [/bc_accordion]');
                  ?>
              </div>
        </div>
      </div>
    </div>
</div>



  
  <!---------third section start here----------------------  -->
  <div class="Residential_HVAC">
  <div class="container-fluid d-none d-lg-block " style=" background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/comm_content_bg.jpg); padding-bottom: 14rem; padding-top: 1.5rem;">
    <div class="container">
  <div class="row  overflow-auto p-0 mx-2 my-5 bc-scroll-height">
    <div class="col-12 text-center d-none d-lg-block ">
    <h1><?php the_title();?></h1>
   </div>
   <div class="col-3"></div>
   <!-- <div class="col-12 col-lg-6 d-none d-lg-block ">
    <div class="text-center border-bottom border-warning  w-100 mx-auto"></div><br></div> -->
    <div class="col-3"></div>

    <div class=" col-12 d-none d-lg-block ">
    <?php 
    if ( have_posts() ) :
      while ( have_posts() ) :  the_post();
        the_content();
      endwhile;
    endif;
    ?>
    </div>   
  </div>
</div>
</div>
</div>
<div class="container d-xs-block d-lg-none ">
  <div class="row   my-2 ">
    <div class="col-12 text-center">
    <h1><?php the_title();?></h1>
   </div>
   <div class="col-3"></div>
   <div class="col-12 col-lg-6">
   </div>
    <div class="col-3"></div>

    <div class="col-12">
     <?php 
     $home_mobile_content = get_post_meta( get_the_id(), 'home_mobile_text_overlay', true );
     echo $home_mobile_content;
     ?>
     <!-- <a href="#" class="bc_sm_text_15 bc_sm_line_height_50  bc_color_7">Read More<span><i class="fal fa-plus bc_sm_text_13 bc_sm_line_height_50 ml-2 left-2 "></i></span></a> -->
   </div>   
 </div>
</div>
  
<!------third section end here--------------------------------- -->

<!-------------mobile sections start here----------------------------- -->

<!-- --mobile section end here---------------------------------- -->

<!-------------block sectio start here--residentail services-destop/mobile-------- -->

<?php get_template_part( 'page-templates/common/residential-services' ); ?> 
<!-----------block slider end------------------------------- -->

<!-- -----------fifth section start here----Members enjoy---------------->
<?php get_template_part( 'page-templates/common/residential-member-enjoy' ); ?> 

  <!------fifth section start here------residentail-section-fifth-------------->

  <?php get_template_part( 'page-templates/common/residential-section-fifth' ); ?> 

<!-- ----------six section start here-----testimonial-------------------------- -->
<?php echo do_shortcode('[bc-testimonial]');?>

<!-- ------six section end here----------------------------------- -->

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