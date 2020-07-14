<?php
/**
 * Plugin Name:       BC Affiliations
 * Plugin URI:        https://github.com/nikhil-twinspark/bc-affiliations
 * Description:       A simple plugin for creating custom post types for displaying affiliations.
 * Version:           1.0.0
 * Author:            Blue Corona
 * Author URI:        #
 * License:           AGPL-3.0
 * License URI:       https://www.gnu.org/licenses/agpl-3.0.html
 * Text Domain:       bc-affiliations
 * Domain Path:       /languages
 */

 if ( ! defined( 'WPINC' ) ) {
     die;
 }

define( 'BC_AFFILIATION_VERSION', '1.0.0' );
define( 'BCAFFILIATIONDOMAIN', 'bc-affiliations' );
define( 'BCAFFILIATIONPATH', plugin_dir_path( __FILE__ ) );

require_once( BCAFFILIATIONPATH . '/post-types/register.php' );
add_action( 'init', 'bc_affiliation_register_affiliation_type' );
function load_wp_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );

require_once( BCAFFILIATIONPATH . '/custom-fields/register.php' );

function bc_affiliation_rewrite_flush() {
    bc_affiliation_register_affiliation_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'bc_affiliation_rewrite_flush' );

// plugin uninstallation
register_uninstall_hook( BCAFFILIATIONPATH, 'bc_affiliation_uninstall' );
function bc_affiliation_uninstall() {
    // Removes the directory not the data
}

// Add Conditionally css & js for specific pages
add_action('admin_enqueue_scripts', 'bc_affiliation_include_css_js');
function bc_affiliation_include_css_js($hook){
    $current_screen = get_current_screen();
    if ( $current_screen->post_type == 'bc_affiliations') {
        // Include CSS Libs
        wp_register_style('bc-affiliation-plugin-css', plugins_url('assests/css/bootstrap.min.css', __FILE__), array(), '1.0.0', 'all');
        wp_enqueue_style('bc-affiliation-plugin-css');

        wp_enqueue_script('bc-affiliation-image-upload-js', plugin_dir_url(__FILE__).'assests/js/bc-image-upload.js', array( 'jquery'));
    } 
}

add_action( 'wp_enqueue_scripts', 'bc_affiliation_include_css_frontend' );
function bc_affiliation_include_css_frontend($hook){
    wp_register_style('bc-affiliation-greyscale', plugins_url('assests/css/bc-affiliation-style.css', __FILE__), array(), '1.0.0', 'all');
    wp_enqueue_style('bc-affiliation-greyscale');
}

add_shortcode( 'bc-affiliation', 'bc_affiliation_shortcode' );
function bc_affiliation_shortcode( $atts , $content = null ) {
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
    ?>
        <script>
        var swiper = new Swiper('#bc_affiliation_swiper_<?php echo $count ?>', {
            slidesPerView: 4,
            spaceBetween: 20,
            slidesPerGroup: 2,
            loop: true,
            loopFillGroupWithBlank: true,
            breakpoints: {
                320: {slidesPerView: 1},
                480: {slidesPerView: 1},
                640: {slidesPerView: 2},
                768: {slidesPerView: 3},
                1000: {slidesPerView: 3}
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: false,
            },
            navigation: {
                nextEl: '.af-swiper-button-next',
                prevEl: '.af-swiper-button-prev',
            },
        });

        </script>
    <?php });?>
    
    <?php 
        $args  = array( 'post_type' => 'bc_affiliations', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
        $colorclass = 'bc_affliations_img';
        if(isset($atts['withoutgrayscale']) && $atts['withoutgrayscale'] == '1' ) {
            $colorclass = 'bc_affliations_img_without_grayscale';
        }

$shortCodeWrapperClasses = "col-md-9";
        if(isset($atts['shortcode_wrapper_classes']) && !in_array($atts['shortcode_wrapper_classes'], [null, '', false])){
            $shortCodeWrapperClasses = $atts['shortcode_wrapper_classes'];
        }

        $containerWrapperClasses = "";
        if(isset($atts['container_wrapper_classes']) && !in_array($atts['container_wrapper_classes'], [null, '', false])){
            $containerWrapperClasses = $atts['container_wrapper_classes'];
        }

        $slideWrapperClasses = "";
        if(isset($atts['slide_wrapper_classes']) && !in_array($atts['slide_wrapper_classes'], [null, '', false])){
            $slideWrapperClasses = $atts['slide_wrapper_classes'];
        }
        ob_start();
    ?>
    <div class="<?php echo $shortCodeWrapperClasses ?>">
        <div class="swiper-container swiper_affiliation px-1 <?php echo $containerWrapperClasses ?>">
            <div class="swiper-wrapper">
                <?php 
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                    while($query->have_posts()) : $query->the_post();
                    $name = get_post_meta( get_the_ID(), 'affiliation_name', true );
                    $link = get_post_meta( get_the_ID(), 'affiliation_link', true );
                    $image = get_post_meta( get_the_ID(), 'affiliation_custom_image', true );
                ?>
                    <div class="swiper-slide <?php echo $slideWrapperClasses ?>">
                        <a href="<?php echo $link;?>" target="_blank">
                            <img class="w-100" src="<?php echo $image;?>">
                        </a>
                    </div>
                <?php
                endwhile; 
                wp_reset_query();
                endif;
                ?>
            </div>
        </div>
    </div> 
<?php 
$output = ob_get_clean();
return $output;
}

// Admin notice for displaying shortcode on index page
add_action('admin_notices', 'bc_affiliation_general_admin_notice');
function bc_affiliation_general_admin_notice(){
    global $pagenow;
    global $post;
    if ($pagenow == 'edit.php' &&  (isset($post->post_type) ? $post->post_type : null) == 'bc_affiliations') { 
     echo '<div class="notice notice-success is-dismissible">
            <p><b>Shortcode Example</b> All : [bc-affiliation] Without Grayscale : [bc-affiliation withoutgrayscale="1"]</p>
        </div>';
    }
}
