<?php
/**
 * Template Name: HomePage Commercial Template
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

  <!----------second section start here---------------->
  <?php echo do_shortcode ( '[bc-affiliation]');?>
  <!-- -------------------------------------------------------------second section end here---------- -->

  <!-- Mobile service_section -->
<div class="container-fluid d-lg-none d-block " style="background-color: #EBEBEB;">
    <div class="container py-2 px-0">
        <div class="row no-gutters">
            <div class="col-lg-12 mt-2">
                <?php 
                    echo do_shortcode('[bc_accordion]
                        [bc_card expanded=1 title="Commercial Air Conditioning" link_href="ac-services" font_icon="fa-wind"]Midwest Heating & Cooling offers comprehensive commercial cooling services, so you’re never stuck without the quality solutions you need. [/bc_card]
                        [bc_card  title="Commercial Heating" link_href="heating" font_icon="fa-fire"]We are an experienced comprehensive commercial heating company that specializes in repair, commercial heating installation, and routine maintenance services.[/bc_card]
                        [bc_card title="Commercial Maintenance" link_href="maintenance" font_icon="fa-tools"]With years of experience, an eye for detail, and the drive needed to ensure total 100% satisfaction to our clients, we are the superior commercial HVAC company.[/bc_card]
                        [/bc_accordion]');
                  ?>
              </div>
        </div>
      </div>
    </div>  
  <!-------------------------------------------------third section start here----------------------  -->

   <?php get_template_part( 'page-templates/common/commercial-your-hvac' ); ?> 
  

<!-- --------block slider start------------ -->
<?php get_template_part( 'page-templates/common/commercial-services' ); ?> 

<!------------------block slider end------------------------------- -->

<!------fifth section start here---------- -->
 <?php get_template_part( 'page-templates/common/commercial-member-enjoy-benefits' ); ?> 

  <!------fifth section start here------------------- -->

  <?php get_template_part( 'page-templates/common/commercial-section-fifth' ); ?> 
 
<!------six section start here------------------------------------------ -->
<?php echo do_shortcode('[bc-testimonial]');?>

<!-- -----------------------------------six section end here----------------------------------- -->

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