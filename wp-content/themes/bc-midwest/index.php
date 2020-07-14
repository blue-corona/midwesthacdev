<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
	 <div class="container-fluid  position-relative p-0 banner_mobile" style="background-size: 99% 100%; background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/banner_sub_all.jpg');">
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
				  <h1>Our Blog</h1>
				 	<?php 
				 	if ( have_posts() ) :
				 		while ( have_posts() ) : the_post();
				 			get_template_part( 'loop-templates/content', get_post_format() );
						endwhile; else :
						get_template_part( 'loop-templates/content', 'none' );
					endif;
					?>
				  	<!-- Pagination -->
				  	<?php understrap_pagination(); ?>
				</div>
			    <!-- rIGHT sidebar starts -->
			    <div class="col-lg-4">
			    	<?php get_template_part( 'sidebar-templates/sidebar', 'blogrightside' ); ?>
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

