<div class="container-fluid d-none hide-on-touch d-lg-block bc_color_primary_bg">
    <div class="container">
        <div class="row">
            <div class=" col-md-4 col-lg-4 col-sm-4 col-12 mr-0 p-4">
            	<a href="<?php echo get_home_url();?>">
                    <img src="<?php echo bc_get_theme_mod('bc_theme_options', 'bc_logo_upload',false, get_template_directory_uri().'/img/logo.jpg'); ?>" class="bc_branding_logo" alt="logo" style="max-width:<?php echo bc_get_theme_mod('bc_theme_options', 'bc_max_width',false, 250);?>px">
                   
            	</a>

            </div>

            <div class="col-md-5 offset-md-3 offset-lg-2 col-lg-6 col-sm-8  my-auto col-xs-12 text-left">
                <span class="">
                     <a href="tel:555 555 555" class="btn p-1  mr-2 mb-2  bc_color_secondary_bg bc_color_white bc_color_white_hover bc_branding_btn_2 bc_color_secondary_hover_bg bc_text_alt_1">
                        <i aria-hidden="true" class="fa fa-mobile float-left bc_text_28 bc_line_height_34 ml-3" style="margin:14px 12px 0px;"></i><span class="float-right bc_color_primary_bg px-3 py-1 text-left"><span class="d-lg-block bc_text_14 bc_line_height_22 bc_font_default"> Call Us Today</span><strong class="bc_text_17 bc_line_height_21 bc_font_default"><?php echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?></strong>
                        </span>
                        </a>

                    <?php if(get_current_blog_id() == 1){?>
                    <a href="<?php echo get_home_url();?>/contact-midwest/">
                     <button class="btn p-1  mr-2 mb-2  bc_color_quaternary_bg bc_color_white bc_color_white_hover bc_branding_btn_2 bc_color_quaternary_hover_bg border-0" style="padding-left: .5rem !important;">
                        <i aria-hidden="true" class="fal fa-file-invoice-dollar float-left bc_text_28 bc_line_height_34 ml-3" style="margin:14px 15px 0px"></i><span class="float-right bc_color_primary_bg px-4 py-1 text-left"><span class="d-lg-block d-lg-block bc_text_14 bc_line_height_22 bc_font_default"> Get Your Free</span><strong  class="bc_text_17 bc_line_height_21 bc_font_default">Estimate</strong>
                        </span>
                        </button>
                    </a>
                    <?php }else if(get_current_blog_id() == 2){?>
                        <a href="<?php echo get_home_url();?>/contact/">
                             <button class="btn p-1  mr-2 mb-2  bc_color_quaternary_bg bc_color_white bc_color_white_hover bc_branding_btn_2 bc_color_quaternary_hover_bg border-0" style="padding-left: .5rem !important;">
                                <i aria-hidden="true" class="fal fa-file-invoice-dollar float-left bc_text_28 bc_line_height_34 " style="margin:14px 15px 0px"></i><span class="float-right bc_color_primary_bg px-4 py-1 text-left"><span class="d-lg-block d-lg-block bc_text_14 bc_line_height_22 "> Get Your Free</span><strong  class="bc_text_17 bc_line_height_21">
                                            Estimate
                                   </strong>
                            </span>
                            </button>
                        </a>
                    <?php }?>
                </span>
            </div>
        </div>
    </div>
</div>