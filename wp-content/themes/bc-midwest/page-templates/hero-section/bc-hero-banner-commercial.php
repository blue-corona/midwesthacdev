<div class="container-fluid p-0 bc_hero_container mobile_hero_container bc_home_section_bg position-relative" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);?>')">
  <div class="overlay_gredient "></div>
    <div class="hero-overlay-gradient">
        <div class="container px-4 py-2">
            <div class="row text-center text-lg-left py-lg-5 text-md-left">
                <div class="col-md-8 col-xs-12 col-lg-8 col-sm-12 m-auto pt-lg-5 pt-4 mt-md-5 mt-5">
                  <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_image_overlay_text', '  <div class="row mt-lg-4 pt-lg-4 pt-4 pb-4 m-0">
                  <span class="col-12  banner  bc_text_bold bc_font_alt_1 bc_color_white bc_text_72  bc_line_height_50 flex-wrap bc_sm_text_24 bc_sm_line_height_17 
                  bc-text-shadow p-0 mb-2">Commercial</span>                      
                  <span class="col-12  bc_font_alt_1 bc_color_white bc_text_72 pb-6 bc_line_height_50  xs-offset-right-1 bc_sm_text_24 bc_sm_line_height_17 p-0 mt-lg-3 bc-text-shadow bc_text_light ">Heating &
                  Cooling

                  </span>
                  </div>
                  <img src="'.get_template_directory_uri().'/img/carrier_logo_banner_thumb.png" class="mt-3 mobile_img_logo d-none d-lg-block"> <img src="'.get_template_directory_uri().'/img/m_carrier_logo_banner_thumb.png" class="mx-auto mt-n3 d-lg-none  mobile_img_logo">');?>
                </div>
                <div class="col-md-4 col-xs-12 col-lg-4 col-sm-12  bc_color_14_bg p-0 text-center d-none d-lg-block ">
                  <div class="requested bc_text_29 b34  bc_line_34 bc_color_white  py-3  bc_color_14_bg bc_text_light bc_font_alt_1">Talk to An <span class="bc_text_29 bc_line_height_34 bc_text_bold bc_font_alt_1">Expert</span> Today</div>
                  <div class="entry-content bc_hero_form_body bc_color_14_bg">
                     <?php echo do_shortcode('[gravityform id=3 ajax=true]')?>
                  </div>
                </div>
            </div>
        </div>
    </div><!-- .hero-overlay-gradient-->
</div>

<style type="text/css">
.hero-image{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_color', '#be4122!important');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_text_color', '#ffffff');?>;}

<?php if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_rotation', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_start', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_end',false,false);?>));}
<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_solid_color', false ,false);?>);}
<?php }?>
</style>