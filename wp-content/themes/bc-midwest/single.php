<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
	<div class="container-fluid  position-relative p-0" style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/comm_banner_sub.jpg');">
	    <div class="overlay_gredient "></div>
	    <div class="container py-5">
	        <div class="row py-5">

	        </div>
	    </div>
	</div>
  	<div class="container-fluid  py-5" style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/comm_sub_content_bg.jpg">
      	<div class="container">
          <div class="row">
              <div class="col-lg-8 subpage">
		     	<?php 
		     	while ( have_posts() ) : the_post();
		     	get_template_part( 'loop-templates/content', 'single' ); 
		     	endwhile; // end of the loop.
		     	?>
		    </div>
		    <!-- rIGHT sidebar starts -->
		    <div class="col-lg-4">
		    	<?php get_template_part( 'sidebar-templates/sidebar', 'singleblogrightside' ); ?>
			</div>
		    <!-- right sidebar ends -->
		  </div>
		</div>
	</div>
	<!-- affiliation starts -->
	<?php get_template_part( 'page-templates/common/affiliations' ); ?>
	<!-- affiliation ends -->
</main>
<?php get_footer()?>
