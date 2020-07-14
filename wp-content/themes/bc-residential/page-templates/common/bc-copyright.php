
<?php
/**
 * Copyright
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php echo bc_get_theme_mod('bc_theme_options', 'footer','copyright_text', '<div class="bc_color_primary_bg  mobile_copyright_bar">
	<div class="container bc_color_white bc_text_15 bc_font_default  bc_sm_line_height_19 bc_line_height_28 mobile_text_center">
   © '.date("Y").'  Midwest Heating & Cooling  <span class="d-none d-lg-inline-block">&nbsp;|&nbsp;</span> <span class="d-block d-lg-inline-block">Web Design by
   <a class="bc_text_normal no_hover_underline bc_text_15 bc_color_white bc_color_primary_bg bc_color_secondary_hover" target="_blank" href="https://www.bluecorona.com/"><img src="'.get_template_directory_uri().'/img/bc_logo.png">&nbsp;Blue Corona</a> </span>
  <span class="d-none d-lg-inline-block d-none ">&nbsp; | &nbsp;</span><a class="bc_text_normal no_hover_underline   bc_text_15 bc_color_white bc_font_default bc_color_secondary_hover" href="#" data-toggle="modal" data-target="#disclaimer">Disclaimer</a>
  <span class="d-inline-block">&nbsp; | &nbsp;</span><a href="'.get_home_url().'/privacy-policy" class=" bc_text_15 bc_font_default bc_color_white bc_text_normal no_hover_underline bc_color_secondary_hover">Privacy Policy</a>
</div></div>');?>


<button data-toggle="modal" data-target="#myModal_mobile" class="no_hover_button btn btn-lg w-100 d-block d-lg-none    position-fixed sticky-footer  bc_text_normal bc_color_secondary_bg  py-4 text-uppercase border-0 bc_text_16 bc_color_white" style="bottom: 0; z-index:999; color: #ffffff !important; position: fixed !important; line-height: 24px !important; border-radius: 0px !important; font-size: 16px !important; "><i class="fas fa-user-headset bc_text_24"></i> Talk To an expert today!<span> 
</span></button>


<div class="h-100 modal fade bc_color_warning_bg" id="myModal_mobile" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true" style="        overflow-y: hidden !important;">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-0 bc_color_warning_bg position-relative mt-n5" style="height: 500px; z-index:100001;border:none;">
      <div class="modal-header bc_color_warning_bg" style="z-index: 9; ">
        <button type="button" class="close mt-n4 no_hover_close" data-dismiss="modal" aria-label="Close" style="opacity: 1;">
          <i class="fal fa-times bc_color_white" style="font-size: 30px;"></i>
        </button>
      </div>
      <div class="modal-body p-0 ">
        <div class="">
            <div class=" col-md-12 col-lg-9 col-sm-12 col-xs-12 offset-lg-2 text-center py-4 bc_color_warning_bg">
               <span class="d-block bc_text_25 bc_line_height_30 text-white bc_font_alt_1 text-center  mb-2"> <span class="bc_text_bold">Schedule</span> Your Service Today </span>

                <div class="entry-content bc_hero_form_body">
                   <?php echo do_shortcode('[gravityform id=5 ajax=true]')?>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
