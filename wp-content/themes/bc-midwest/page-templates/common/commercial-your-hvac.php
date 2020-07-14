
<div class="commercial">
<div class="container-fluid d-none d-lg-block commercial " style=" background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/comm_content_bg.jpg); padding-top: 1rem; padding-bottom: 14rem;">
	<div class="container">
  <div class="row  overflow-auto p-0 mx-2 my-5 bc-scroll-height">
    <div class="col-12 text-center d-none d-lg-block tab_align">
      <h1><?php the_title()?></h1>
   </div>
    <div class="col-3"></div>
   <!-- <div class="col-12 col-lg-6 d-none d-lg-block ">
    <div class="text-center border-bottom border-warning  w-100 mx-auto"></div><br></div>  -->
    <div class="col-3"></div>

    <div class=" col-12 d-none d-lg-block ">
    <?php 
    if ( have_posts() ) :
      while ( have_posts() ) :  the_post();
        the_content();
      endwhile;
    endif;
    ?>
    </div>   
  </div>
</div>
</div>
</div>
<!-- mobile view -->

<div class="container d-xs-block d-lg-none ">
  <div class="row   my-2 ">
    <div class="col-12 text-center tab_align">
      <h1><?php the_title()?></h1>
   </div>
   <div class="col-3"></div>
   <div class="col-12 col-lg-6">
    <br></div>
    <div class="col-3"></div>

    <div class="col-12">
     <?php 
     $home_mobile_content = get_post_meta( $post->ID, 'home_mobile_text_overlay', true );
     echo $home_mobile_content;
     ?>
    <!--  <a href="#" class="bc_sm_text_15 bc_sm_line_height_50  bc_color_7">Read More<span><i class="fal fa-plus bc_sm_text_13 bc_sm_line_height_50 ml-2 left-2 "></i></span></a> -->
   </div>   
 </div>
</div>