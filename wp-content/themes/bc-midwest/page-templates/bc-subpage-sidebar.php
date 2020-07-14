<?php
/**
 * Template Name: SubPage-Siderbar Template
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
                  <h1><?php the_title()?></h1>
                  <?php 
                  if ( have_posts() ) :
                      while ( have_posts() ) :  the_post();
                        the_content();
                    endwhile;
                  endif;
                  ?>
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