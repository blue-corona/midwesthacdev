<div class="container-fluid bc_hero_container p-0" style="position:relative;">
    <iframe width="100%" height="100%" class="position-absolute" src="<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_url', false);?>"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="hero-overlay-gradient-video"></div>
    <div class="container px-4 py-5">
        <div class="row text-center text-lg-left py-lg-5 text-md-left">
          <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 m-auto py-lg-5 py-4 mt-md-5 mt-5">
             <div class="row">
              <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_text', false);?>

              <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_image_overlay_text', ' <span class="col-5 justify-content-end banner d-flex bc_text_bold bc_font_alt_1 bc_color_white bc_text_72  bc_line_height_50 flex-wrap bc_sm_text_24 bc_sm_line_height_17 p-0 bc-text-shadow">Commercial</span>
              <span class="col-2 justify-content-center banner d-flex bc_text_light bc_font_alt_1 bc_color_white bc_text_162  bc_line_height_90 flex-wrap bc_sm_text_55 bc_sm_line_height_30 p-0 bc_sm_text_light mt-2 mt-sm-2 bc-text-shadow">&</span>
              <span class="col-5  banner d-flex bc_text_bold bc_font_alt_1 bc_color_white bc_text_72  bc_line_height_50 flex-wrap bc_sm_text_24 bc_sm_line_height_17 p-0 bc-text-shadow ">Residential</span>

              <span class="col-5  bc_font_alt_1 bc_color_white bc_text_72 pb-6 bc_line_height_50 text-right xs-offset-right-1 bc_sm_text_24 bc_sm_line_height_17 p-0 mt-n2 bc-text-shadow">Heating</span>
              <span class="col-5 offset-2 text-left  bc_font_alt_1 bc_color_white bc_text_72 pb-6 bc_line_height_50 bc_sm_text_24 bc_sm_line_height_17 p-0 mt-n2 bc-text-shadow ">Cooling</span>');?>
            </div>
        </div>
      </div>
    </div>
</div>

<style type="text/css">
<?php if(bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_type', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient-video{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_rotation', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_start', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_end',false,false);?>));height: 100%; pointer-events: none; position:absolute; top:0; width: 100%}

<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_type', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient-video{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_color', false ,false);?>);height: 100%; pointer-events: none; position:absolute; top:0; width: 100%}
<?php }?>
.hero-video{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_button_color', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_button_text_color', '#ffffff');?>;}
</style>