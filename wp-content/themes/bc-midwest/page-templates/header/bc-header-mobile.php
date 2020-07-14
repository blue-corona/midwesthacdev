
<?php 
    echo do_shortcode('[bc-ui-kit 
        type="mobile-header" 
        name="header_A" 
        logo_url="'.bc_get_theme_mod('bc_theme_options', 'bc_logo_upload',false, get_template_directory_uri().'/img/logo.jpg').'" 
        logo_class="p-3"
        phone="'.bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555').'"
        class="bc_color_primary_bg--imp"
        icon_class="text-white"
        icon_background="#BF4122"

    ]');


?>