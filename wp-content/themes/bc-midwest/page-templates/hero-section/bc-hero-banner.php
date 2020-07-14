<div class="container-fluid py-3 bc_hero_container bc_home_section_bg" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);?>')">
    <div class="hero-overlay-gradient">
        <div class="container px-4 py-5">
            <div class="row text-center text-lg-left py-lg-5 text-md-left">
              <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 m-auto py-lg-5 py-4 mt-md-5 mt-5">
                 <div class="row">
                <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_image_overlay_text', ' 
                  
                  <a href="'.get_home_url().'/commercial/" class="col-5 justify-content-end banner d-flex bc_text_bold bc_font_alt_1 bc_color_white bc_text_72  bc_line_height_50 flex-wrap bc_sm_text_24 bc_sm_line_height_17 p-0 bc-text-shadow no_hover_underline bc_color_white_hover hover_text" >Commercial</a>
                <span class="col-2 justify-content-center banner d-flex bc_text_light bc_font_alt_1 bc_color_white bc_text_162  bc_line_height_90 flex-wrap bc_sm_text_55 bc_sm_line_height_30 p-0 bc_sm_text_light mt-2 mt-sm-2 bc-text-shadow">&</span>
               
                <a href="'.get_home_url().'/residential/" class="col-5  banner d-flex bc_text_bold bc_font_alt_1 bc_color_white bc_text_72  bc_line_height_50 flex-wrap bc_sm_text_24 bc_sm_line_height_17 p-0 bc-text-shadow no_hover_underline bc_color_white_hover hover_text ">Residential</a>

                <span class="col-5  bc_font_alt_1 bc_color_white bc_text_72 pb-6 bc_line_height_50 text-right xs-offset-right-1 bc_sm_text_24 bc_sm_line_height_17 p-0 mt-n2 bc-text-shadow bc_text_light">Heating</span>
                <span class="col-5 offset-2 text-left  bc_font_alt_1 bc_color_white bc_text_72 pb-6 bc_line_height_50 bc_sm_text_24 bc_sm_line_height_17 p-0 mt-n2 bc-text-shadow bc_text_light">Cooling</span> <img src="'.get_template_directory_uri().'/img/carrier_logo_banner_thumb.png" class="mt-3 mobile_img_logo d-none d-lg-block mx-auto"> <img src="'.get_template_directory_uri().'/img/m_carrier_logo_banner_thumb.png" class="mx-auto d-lg-none  mobile_img_logo">');?>
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