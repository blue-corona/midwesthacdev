<?php 
/*Custom widget*/
// BC Footer Address Widget
class BC_Footer_Address_Widget extends WP_Widget {
    public function __construct() {

        $id = 'BC_Footer_Address_widget';
        $title = esc_html__('BC Footer Identity', 'bc-footer-address-custom-widget');
        $options = array(
            'classname' => 'bc-footer-address-markup-widget',
            'description' => esc_html__('Add Custom HTML in inputbox', 'bc-footer-address-custom-widget')
        );
        parent::__construct( $id, $title, $options );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>

<div class="container-fluid py-5 bc_color_tertiary_bg border_top">
   <div class="container">
      <div class="row">
         <div class="col-lg-4 text-center d-none d-lg-block pt-4">
            <div class="text-center">
               <h6 class="bc_line_height_10">Call Us Today! </h6>
               <a href="tel:<?php echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?>" class="bc_text_24 bc_color_primary bc_text_bold bc_line_height_30 text-uppercase d-block no_hover_underline">
               <strong ><?php echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?></strong>
               </a>
            </div>
            <span class="footer_line d-block mt-3 mx-auto">
            </span>
            <div class="text-center mt-3">
               <h6 >follow us</h6>
               <?php echo do_shortcode('[social-icons]');?>
            
            </div>
         </div>
         <div class="col-lg-4 text-center">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/img/logo_dark.png"></a>
            <span class="footer_line d-block mt-5 mx-auto">
            </span>
            <div class="text-center mt-1">

               <span class="bc_text_15 bc_color_primary bc_text_normal bc_line_height_30 bc_font_default">
                 <?php echo bc_get_theme_mod('bc_theme_options', 'bc_address',false, '  816 Fox Lane<br>Waterford, WI 53185');?>
               </span>
              
               </span>
               <br>
               <a href="https://www.google.com/maps/place/816+Fox+Ln,+Waterford,+WI+53185,+USA/@42.7668786,-88.1998505,17z/data=!3m1!4b1!4m5!3m4!1s0x88059dd7548bfe6f:0x2ea9154876915ba1!8m2!3d42.7668786!4d-88.1976618" class="bc_text_15 bc_color_primary bc_text_normal bc_line_height_30 bc_font_default">View on map <i class="fal fa-chevron-double-right bc_text_12"></i></a>
            </div>
         </div>
         <span class="footer_line d-block mt-3 mx-auto d-lg-none">
            </span>
         <div class="col-lg-4 text-center d-block d-lg-none py-3">
            <div class="text-center">
               <h6 class="bc_text_16 bc_color_primary bc_text_normal  text-uppercase bc_font_default p-0 m-0" style="line-height: 0px; padding-bottom: 16px !important;">Call Us Today!
               </h6>
               <a href="tel:(555) 555-5555"  class="bc_text_24 bc_color_primary bc_text_bold bc_line_height_30 text-uppercase d-block">
               <strong class="bc_text_24"><?php echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?></strong>
               </a>
            </div>
            <span class="footer_line d-block mt-3 mx-auto">
            </span>
            <div class="text-center mt-3">
               <?php echo do_shortcode('[social-icons]');?>
               <!-- <a href="#"><span class="bc_text_16 bc_line_height_32 ml-1 bc_color_warning bc_text_bold text-uppercase"><i class="fab fa-facebook bc_text_26  bc_color_primary"></i></span></a>
               <a href="#"><span class="bc_text_16 bc_line_height_32 ml-1 bc_color_warning bc_text_bold text-uppercase"><i class="fab fa-twitter bc_text_26  bc_color_primary"></i></span></a>
               <a href="#"><span class="bc_text_16 bc_line_height_32 ml-1 bc_color_warning bc_text_bold text-uppercase"><i class="fab fa-instagram bc_text_26  bc_color_primary"></i></span></a> -->
            </div>
         </div>
         <div class="col-lg-4 text-center d-none d-lg-block pt-4 ">
            <span class="bc_color_2 bc_text_20">
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star"></i>
            <i aria-hidden="true" class="fa fa-star"></i>
            </span>

             <a href="<?php echo get_home_url();?>/reviews/" class="no_hover_underline">
            <span class="bc_color_primary text-uppercase bc_line_height_22 bc_font_default bc_text_20 d-block" >
            Read Our Reviews 
            </span>
          </a>

            
           
            <span class="footer_line d-block mt-4 mx-auto">
            </span>
            <div class="text-center mt-3">
               <a href="https://www.thumbtack.com/wi/waterford/central-air-conditioning-installation/midwest-heating-cooling-llc/service/321761380733665368" ><img class="gray_img" src="<?php echo get_template_directory_uri();?>/img/thumbtack_icon.png"></a>
               <a href="https://www.google.com/maps/place/Midwest+Heating+%26+Cooling/@42.7668786,-88.1998505,17z/data=!3m1!4b1!4m5!3m4!1s0x88059fa1f7fc0001:0x8c45a76eaead0ec6!8m2!3d42.7668786!4d-88.1976618" class="ml-2"><img class="gray_img" src="<?php echo get_template_directory_uri();?>/img/google_icon.png"></a>
            </div>
         </div>
      </div>
   </div>
</div> 

<div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <button type="button" class="close bc_color_secondary_hover_bg" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times fa-2x close_btn"></i></span>
                    </button>
                </div>
                <div class="modal-body px-lg-5 pb-5 col-md-10 offset-1">
                      <h1 id="disclaimerLabel" class="">Disclaimer</h1>
                    <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a class="bc_color_secondary bc_color_primary_hover bc_text_normal" href="<?php echo get_site_url()?>/contact-us" target="_blank">Contact us</a> for complete details.</p>
                </div>
            </div>
        </div>
    </div>

    <?php echo $args['after_widget'];
    }
}
// register widget
function bc_footer_address_register_widgets() {
    register_widget( 'BC_Footer_Address_Widget' );
}
add_action( 'widgets_init', 'bc_footer_address_register_widgets' );
?>
