<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
global $post;
?>
<style>
    .swiper-container {
      width: 100%;
      margin-left: auto;
      margin-right: auto;
    }
    .swiper-slide {
      background-size: cover;
      background-position: center;
    }
    .gallery-top {
      height: 80%;
      width: 100%;
    }
    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }
    .gallery-thumbs .swiper-slide {
      height: 100%;
      opacity: 0.4;
    }
    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }
</style>

<main>
	<div class="container-fluid  position-relative p-0" style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/comm_banner_sub.jpg">
	<div class="overlay_gredient "></div>
		<div class="container py-5">
		    <div class="row py-5">

		    </div>
		</div>
	</div>

<div class="container-fluid py-5 position-relative" style="background-size: cover; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/comm_sub_content_bg.jpg">
    <div class="container">
     <h1><?php the_title();?></h1>
    <div class="row py-3">
  	
  	<!-- Swiper -->
    <div class="container-fluid position-relative icon_position">
	  <div class="swiper-container gallery-top" style="height: 100% !important;">
	    <div class="swiper-wrapper">
			<?php
			if( have_rows('main_gallery') ):
			    while ( have_rows('main_gallery') ) : the_row();
			?>
			<div class="swiper-slide mobile_gallery" style="height:500px; background-image:url('<?php the_sub_field('main_gallery_icon');?>')"></div>
			<?php 
			endwhile;
			endif;  
			?>
	    </div>
	    <!-- Add Arrows -->
	  
	  </div>
      <div class="swiper-button-next swiper-button-white"><i class="far fa-chevron-right icon_right"></i></div>
      <div class="swiper-button-prev swiper-button-white"><i class="far fa-chevron-left icon_left"></i></div>
    </div>
    <?php 
    $title_one =  get_field( "title_one", get_the_id() );
    $title_two =  get_field( "title_two", get_the_id() );
    ?>
		<span class="bc_text_30 bc_line_height_34 bc_text_alt_1 bc_text_light bc_color_primary mt-3  position-relative d-lg-block d-none" style="width: 37.5%; padding-left: 15px;"><span class="bc_font_alt_1 after-line"><?php echo ($title_one!='')?$title_one:'';?></span>
		<p></p>
		<span class="bc_font_alt_1 bc_text_18 bc_line_height_22 bc_color_secondary text-uppercase"><?php echo ($title_two!='')?$title_two:'';?> </span>
		<p class=" bc_text_16 bc_line_height_24 mt-2 ">
		<?php 
		if ( have_posts() ) : 
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
		endif;
		?>
		</p>
		</span>

		<div class="swiper-container gallery-thumbs  mobile_thumbs" style="width: 60%;">
			<div class="swiper-wrapper">
			  <?php
				if( have_rows('main_gallery') ):
				    while ( have_rows('main_gallery') ) : the_row();
				?>
			    	<div class="swiper-slide" style="height:105px; background-image:url('<?php the_sub_field('main_gallery_icon');?>')"></div>
			  <?php 
				endwhile;
				endif;
				?>
			</div>
		</div>
		<span class="bc_text_30 bc_line_height_34  bc_text_light bc_color_primary mt-3 after-line position-relative d-lg-none d-block w-100">
		<span class="bc_font_alt_1"><?php echo ($title_one!='')?$title_one:'';?></span>
  		<p class=" bc_text_16 bc_line_height_24 mt-4">
  			<?php 
  			if ( have_posts() ) : 
  				while ( have_posts() ) : the_post();
  					the_content();
  				endwhile;
  			endif;
  			?>
  		</p>
		</span>
        
    </div>
    </div>
</div>

  <!-- gravity form main start-->
  <?php get_template_part( 'page-templates/common/bc-gravityform' ); ?> 
  <!-- gravity form main end-->

  <!-- affiliation starts -->
  <?php get_template_part( 'page-templates/common/affiliations' ); ?>
  <!-- affiliation ends -->

<script>
var galleryThumbs = new Swiper('.gallery-thumbs', {
  spaceBetween: 10,
  slidesPerView: 4,
  loop: true,
  freeMode: true,
  loopedSlides: 5, //looped slides should be the same
  watchSlidesVisibility: true,
  watchSlidesProgress: true,
});
var galleryTop = new Swiper('.gallery-top', {
  spaceBetween: 10,
  loop:true,
  loopedSlides: 5, //looped slides should be the same
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  thumbs: {
    swiper: galleryThumbs,
  },
});
</script>

</main>
<?php get_footer();
