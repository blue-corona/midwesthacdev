<?php
/**
 * Template Name:Gallery Landing Template
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
              <h1><?php the_title();?></h1>
              <div class="row py-5">
                <?php
                $args  = array( 'post_type' => 'bc_projects', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) : 
                  while( $query->have_posts() ) {
                      $query->the_post();?>
                <div class="col-lg-4">
                  <div class="pdf-thumb-box"> 
                    <a href="<?php the_permalink();?>">
                      <div class="pdf-thumb-box-overlay">
                          <span class="fa-stack fa-lg">
                            <span class="bc_text_18 bc_line_height_22  bc_text_normal bc_color_tertiary text-uppercase bc_font_alt_1"> <i class="far fa-search pdf-thumb-eye bc_text_30"></i> View Project</span>
                          </span>
                      </div>
                    <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> 
                      <img class="img-fluid" src="<?php echo $image[0]; ?> ">
                      <?php }else{?>
                      <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_img1.jpg" >
                    <?php }?>
                    </a>
                    <br>
                  </div>
                  <div class="pt-3">
                  <?php 
                    $project_name = get_field( "project_name", get_the_id() ); 
                    $city =  get_field( "city", get_the_id() );
                    $state =  get_field( "state", get_the_id() );
                  ?>
                    <span class="bc_text_30 bc_text_light bc_line_height_34 bc_color_primary bc_font_alt_1"><?php echo ($project_name!='')?$project_name:'';?></span>
                    <span class="subpage_line d-block  w-100 mt-2">  </span>
                    <span class="text-uppercase bc_text_alt_1 bc_text_normal bc_text_18 bc_line_height_22 bc_color_secondary"><?php echo ($city!='')?$city:'';?>, <?php echo ($state!='')?$state:'';?></span>
                  </div>
                </div>
                <?php 
                }
                endif;
                ?>
              </div>
          </div>
      </div>
      <!-- gravity form main start-->
      <?php get_template_part( 'page-templates/common/bc-gravityform' ); ?> 
      <!-- gravity form main end-->
         
      <!-- affiliation starts -->
      <?php get_template_part( 'page-templates/common/affiliations' ); ?>
      <!-- affiliation ends -->
</main>
<?php get_footer();?>