<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
$understrap_include = array(
    '/widgets/bc-member-discount.php',
    '/widgets.php',
    '/bc-shortcode-override.php',
    '/custom-post-types.php',
     '/bc-locations-slug-rewrite.php',
);
foreach ( $understrap_include as $file ) {
    $filepath = locate_template( 'inc' . $file );
    if ( ! $filepath ) {
        trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
    }
    require_once $filepath;
}
remove_filter( 'the_content', 'wpautop' );

add_shortcode( 'site_info_phone_number', 'bc_site_info_phone_number' );
function bc_site_info_phone_number ( $atts ) {
    $anchor = true;
    if(isset($atts['anchor'])){
        $anchor = $atts['anchor'];
    }
    $tel = bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');
    ob_start();
    if($anchor){
        echo "<a href='tel:$tel' class='font-styling'>$tel</a>";
    }else{
     echo $tel;
    }
    return ob_get_clean();
}

// [custom_button_warning button_text="Send Request" button_link="https://www.google.com/"]
add_shortcode('custom_button_warning', 'custom_button_shortcode');
function custom_button_shortcode($title, $url){
    ob_start();
    echo '<button onclick="window.location.href =\''.$title['button_link'].'\'" class="btn btn-warning hvr-sweep-to-right">'.$title['button_text'].'</button>';
    return ob_get_clean();
}


add_action('wp_footer', 'accordion_method');
function accordion_method(){?>
<script>

</script>
<?php }

add_shortcode( 'bc_accordion', 'accordion_shortcode' );
function accordion_shortcode( $atts, $content = null ) {
    $content = str_replace('<br>', '', $content);
    return '<div id="accordion" class="accordion w-100 border-bottom mt-5">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'bc_card', 'card_shortcode' );
function card_shortcode( $atts, $content = null ) {
    $title='';  
    if(isset($atts['title'])) {
        $title = $atts['title'];
    }
    $link='';  
    if(isset($atts['link_href'])) {
        $link = $atts['link_href'];
    }
    $imgTag = '';
    if(isset($atts['font_icon'])){
        $image = $atts['font_icon'];
// $imgTag = '<img src="'.$image.'"/>';
$imgTag = '<span><i class="fal '.$image.' bc_text_60 bc_line_height_28 bc_color_secondary  mr-4"></i></span>';
    }
    $iconClass = 'fal fa-plus-circle';
    $expanded = '';
    if(isset($atts['expanded'])) {
        $expanded = 'show';
        $iconClass = 'fal fa-minus-circle';
    }
    $id = 'collapse'.rand(0,100000);
        return '<div class="card border-0 b_bottom" style="background-color: #EBEBEB;">
        <div id="headingOne" class="card-header  position-relative border-bottom-0 service_head" style="background-color: #EBEBEB;"><h3 class="bc_text_12 card-title border-service py-2 my-3 d-flex justify-content-lg-center align-items-center">'.$imgTag.$title.'<i class="'.$iconClass.' bc_color_primary position-absolute  toggle_icon mt-2 ml-2" style="right:0; " data-toggle="collapse" data-target="#'.$id.'" arivvvvvvvva-controls="'.$id.'"></i></h3></div><div id="'.$id.'" class="card-body collapse position-relative '.$expanded.'" aria-labelledby="headingOne" data-parent="#accordion"><p class="bc_font_alt_3 bc_text_16 bc_line_height_24 color_4 bc_text_normal">'.do_shortcode($content).'</p><a href="'.get_home_url().'/'.$link.'" class="btn btn-primary hvr-sweep-to-right">Learn More </a></div>
        </div>';
}
