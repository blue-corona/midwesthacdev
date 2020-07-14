<?php
/**
 * Template Name: Promotions Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
  <?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
  <div class="container-fluid  py-5" style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/comm_sub_content_bg.jpg">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 subpage">
                <div class="row text-center">
                <?php
                $args  = array( 'post_type' => 'bc_promotions', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                while($query->have_posts()) : $query->the_post();
                    
                    $promotion_type = get_post_meta(get_the_ID(), 'promotion_type', TRUE);
                    if($promotion_type == 'Builder'){
                    $date = get_post_meta( get_the_ID(), 'promotion_expiry_date1', true );
                    if(strtotime($date) >= strtotime(current_time('m/d/Y'))){
                        $title = get_post_meta( get_the_ID(), 'promotion_title1', true );
                        $color = get_post_meta( get_the_ID(), 'promotion_color', true );
                        $subheading = get_post_meta( get_the_ID(), 'promotion_subheading', true );
                        $footer_heading = get_post_meta( get_the_ID(), 'promotion_footer_heading', true ); ?>
                        <div class="col-md-4 col-lg-4 p-2 text-center">
                            <a class="no_hover_underline" href="<?php the_permalink(get_the_ID()); ?>" target="_blank">
                                <div class="bc_color_secondary bc_color_primary_bg p-3 mb-3" style="background-color: <?php echo $color;?>">
                                    <div class="py-4 px-3 pt-0 border-white bc_coupon_container">
                                        <span class="pb-3  bc_font_alt_1 bc_text_36 d-block"><?php echo $title; ?></span>
                                        <span class="bc_text_30 d-block my-2"><?php echo $subheading;?></span>
                                        <span class="mt-3 bc_text_16">expires <?php echo $date;?></span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php }
                    }else if($promotion_type == 'Image'){
                        $date2 = get_post_meta( get_the_ID(), 'promotion_expiry_date2', true );
                        if(strtotime($date2) >= strtotime(current_time('m/d/Y'))){
                            $title2 = get_post_meta( get_the_ID(), 'promotion_title2', true );
                            $promotion_custom_image = get_post_meta( get_the_ID(), 'promotion_custom_image', true ); ?>
                            <div class="col-md-4 col-lg-4 p-2 text-center">
                                <a href="<?php the_permalink(get_the_ID()); ?>" target="_blank">
                                    <img class="img-fluid" class="img-fluid" src="<?php echo $promotion_custom_image;?>" />
                                </a>
                            </div>
                    <?php }
                    }
                endwhile; 
                wp_reset_query();
                endif;
                ?>
                </div>
            </div>
              <div class="col-lg-4">
                <?php get_template_part( 'sidebar-templates/sidebar-subpagerightsidebar' ); ?>
              </div>
          </div>
      </div>
  </div>
  <!-- affiliation starts -->
  <?php get_template_part( 'page-templates/common/affiliations' ); ?>
  <!-- affiliation ends -->
</main>
<?php get_footer();?>