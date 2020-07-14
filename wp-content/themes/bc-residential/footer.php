<?php
   /**
    * The template for displaying the footer.
    *
    * Contains the closing of the #content div and all content after
    *
    * @package understrap
    */
   
   // Exit if accessed directly.
   defined( 'ABSPATH' ) || exit;
   ?>
<!-- Footer -->
<footer class="page-footer font-small blue">
 <div class="container-fluid bc_color_info_bg">
  <!-- Include servicearea file here --> 
   <?php if ( is_front_page() ) {?>
   <?php// get_template_part( 'page-templates/common/servicearea' ); ?>
   <?php }else{?>
   <!-- <div class="container py-3"></div> -->
   <?php } ?>
     
   </div>  
     <?php dynamic_sidebar( 'footer' ); ?>
     
<!-- Footer Links -->
 

<?php get_template_part( 'page-templates/common/bc-copyright' ); ?>
<?php wp_footer(); ?>
</body>
</html>