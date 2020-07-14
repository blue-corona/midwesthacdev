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

<div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="close bc_color_secondary_hover_bg close_btn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times fa-2x"></i></span>
                    </button>
                </div>
                <div class="modal-body px-lg-5 pb-5 col-md-10 offset-lg-1">
                      <h1 id="disclaimerLabel" class="">Disclaimer</h1>
                    <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. 
                       <?php if(get_current_blog_id() == 1){?>
                    <a href="<?php echo get_home_url();?>/contact-midwest/" class="bc_color_quaternary bc_text_normal" arget="_blank">
                    Contact us</a> 
                         <?php }else if(get_current_blog_id() == 2){?>
                        <a href="<?php echo get_home_url();?>/contact/" class="bc_color_secondary bc_color_primary_hover bc_text_normal" target="_blank">
                       Contact us</a> 
                     <?php }?> for complete details.

                    </p>
                </div>
            </div>
        </div>
    </div>

<?php get_template_part( 'page-templates/common/bc-copyright' ); ?>
<?php wp_footer(); ?>
</body>
</html>