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
  <!-- gravity form main start-->
  <?php get_template_part( 'page-templates/common/bc-gravityform' ); ?> 
  <!-- gravity form main end-->

  <!-- admin content -->
  <?php get_template_part( 'page-templates/common/your-local-hvac-company' ); ?> 
  <!-- admin content -->

  <!-- commerical hvac service start -->
  <?php get_template_part( 'page-templates/common/commercial-hvac' ); ?> 
  <!-- commerical hvac service end-->

  <?php get_template_part( 'page-templates/common/members-enjoy-many-benefits' ); ?>

  <!-- Testimonial start -->
  <?php get_template_part( 'page-templates/common/testimonials' ); ?>
  <!-- Testimonial end -->

  <!-- residentail hvac service start -->
  <?php get_template_part( 'page-templates/common/home-residential-hvac-services' ); ?>
  <!-- residentail hvac service end -->

  <!-- emergency service starts -->
  <?php get_template_part( 'page-templates/common/repair-emergency-service' ); ?>
  <!-- emergency service ends -->

  <!-- affiliation starts -->
  <?php get_template_part( 'page-templates/common/affiliations' ); ?>
  <!-- affiliation ends -->


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
<?php }
add_action( 'wp_footer' , 'serviceAreaJavascript' );?>
<?php get_footer(); ?>