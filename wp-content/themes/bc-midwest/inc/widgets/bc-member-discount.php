<?php 
/*Custom widget*/
// BC How we Work Widget
class bc_member_discount extends WP_Widget {
	public function __construct() {

		$id = 'bc_member_discount';
		$title = esc_html__('BC Member discount', 'bc_member_discount-custom-widget');
		$options = array(
			'classname' => 'bc_member_discount-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc_member_discount-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	function addSwiperInitServiceJsToFooter($instance){
	echo "<script>
	var servicesSwiper".$instance." = new Swiper('#".$instance."', {
		pagination: true,
		loop:true,
		navigation: {
			nextEl: '.bc_services_swiper_next',
			prevEl: '.bc_services_swiper_prev',
			},
			});
			</script>";
		}

public function widget( $args, $instance ) {
//Add JS for widget to footer
	$widgetInstance = $this->id;
	add_action('wp_footer', function() use ( $widgetInstance ) { 
		$this->addSwiperInitServiceJsToFooter( $widgetInstance ); });
		?>
	<div class="p-5 d-none d-lg-block mobile_descount">
		<div class="bc_color_primary_bg px-3 text-center pb-5" style=" box-shadow: 0 6px 16px 9px rgba(0,0,0,0.2);">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/medal_ad(2).svg">

		<?php 
		if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
		echo $args['before_title'] . $instance['title'] . $args['after_title']; 
		}else{
		echo '<h5 class="my-3">Member Discount</h5>';
		}
		?>
		<h4><?php echo $instance['text_description'];?></h4>
		<a href="<?php echo get_home_url();?>/<?php echo $instance['button_link'];?>" class="btn btn-primary hvr-sweep-to-right mt-5">Learn More</a>
		</div>
	</div>
	<?php echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}

		if ( isset( $new_instance['text_description'] ) && ! empty( $new_instance['text_description'] ) ) {
			$instance['text_description'] = $new_instance['text_description'];
		}

		if ( isset( $new_instance['button_link'] ) && ! empty( $new_instance['button_link'] ) ) {
			$instance['button_link'] = $new_instance['button_link'];
		}

		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc_member_discount-custom-widget' );
		$title = '<h5 class="my-3">Member Discount</h5>';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>

		<?php 
		$desc_id = $this->get_field_id( 'text_description' );
		$desc_for = $this->get_field_id( 'text_description' );
		$desc_name = $this->get_field_name( 'text_description' );
		$desc_label = __( 'Description', 'bc-text_description-custom-widget' );
		$desc_title = '';
		if ( isset( $instance['text_description'] ) && ! empty( $instance['text_description'] ) ) {
			$desc_title = $instance['text_description'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $desc_for ); ?>"><?php echo esc_html( $desc_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $desc_id ); ?>" name="<?php echo esc_attr( $desc_name ); ?>"><?php echo esc_textarea( $desc_title ); ?></textarea>
		</p>

		<?php 
		$link_id = $this->get_field_id( 'button_link' );
		$link_for = $this->get_field_id( 'button_link' );
		$link_name = $this->get_field_name( 'button_link' );
		$link_label = __( 'Button link', 'bc-button_link-custom-widget' );
		$link_title = '';
		if ( isset( $instance['button_link'] ) && ! empty( $instance['button_link'] ) ) {
			$link_title = $instance['button_link'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $link_for ); ?>"><?php echo esc_html( $link_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $link_id ); ?>" name="<?php echo esc_attr( $link_name ); ?>"><?php echo esc_textarea( $link_title ); ?></textarea>
		</p>

	<?php }
}
// register widget
function bc_member_discount_register_widgets() {
	register_widget( 'bc_member_discount' );
}
add_action( 'widgets_init', 'bc_member_discount_register_widgets' );
