
 

<div class="container">
  <div class="row py-5 position-relative">
    <div class="col-12 col-lg-10 ml-lg-auto mr-lg-auto">
      <div id="<?php echo $this->id ?>" class="swiper-container">
        <div class="swiper-wrapper">

 <?php 
			$testimonial_args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

	        $query = new WP_Query( $testimonial_args );
	        if ( $query->have_posts() ) :
	            while($query->have_posts()) : $query->the_post();
	        $title = get_post_meta( get_the_ID(), 'testimonial_title', true );
	        $message = get_post_meta( get_the_ID(), 'testimonial_message', true );
	        $image = get_post_meta( get_the_ID(), 'testimonial_custom_image', true );
        ?>
       <div class="swiper-slide">
         <div class=" text-center">
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
          <i class="fas fa-star bc_text_20 bc_line_height_55  bc_color_2"></i>
        </div>

       
    <h3 class="text-center pt-lg-4">What Your Neighbors Are Saying</h3>
      
        <div class="inner-box   position-relative w-75 w-sm-100 mw-100 p-4 bc_color_3  my-5 bc_color_3_bg text-center">
         <p class="p-lg-5 ml-lg-5 mr-lg-5">  <p>“<?php echo $message;?>"
       <!--   I contacted Midwest because my furnace wasn’t working. They fixed it the same day, and it didn’t cost me and arm or a leg! Fantastic company, strongly recommend! --></p>
         <p class="bc_color_secondary bc_text_16 bc_line_height_41 text-center">
         <?php the_title();?><!-- Kennedy J. --></p>
       </div>
     </div>

</div>
<!-- Add Pagination -->
<div class="swiper-pagination d-lg-none d-xs-block"></div>
<!-- Add Arrows -->

</div>
</div>

<div class="swiper-button-next d-none d-lg-block mr-5"><i class="fas fa-chevron-right"></i></div>
<div class="swiper-button-prev d-lg-block d-none ml-5"><i class="fas fa-chevron-left"></i></div>



</div>
</div>
