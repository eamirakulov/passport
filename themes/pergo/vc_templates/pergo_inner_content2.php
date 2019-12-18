<?php
extract(shortcode_atts(array(
		'position' => '',
		'subtitle' => 'Digital Strategy',
		'title' => 'We create successful digital products',
		'image' => PERGO_URI. '/images/content-9-img.jpg',
		'bg' => 'bg-lightgrey'
), $atts));
$order = ( $position == 'yes' )? ' order-md-last order-lg-last' : '';
$extraclass = ( $position == 'yes' )? 'image-left '.$bg : 'image-right '.$bg;
?>
<div class="inner-block <?php echo esc_attr($extraclass) ?>" id="content-9">
	<div class="row d-flex align-items-center">
	 	<!-- CONTENT TEXT -->
	 	<div class="col-md-6 col-lg-6<?php echo esc_attr($order) ?>">
	 		<div class="content-txt">

	 			<!-- Section ID -->	
	 			<span class="section-id animated" data-animation="fadeInUp" data-animation-delay="400">
	 			   <?php echo esc_attr($subtitle) ?>
	 			</span>

	 			<!-- Title -->	
				<h3 class="h3-xs animated" data-animation="fadeInUp" data-animation-delay="400">
				   <?php echo pergo_parse_text($title, array('tagclass' => pergo_default_color().'-color')) ?>
				</h3>

				<?php echo wpb_js_remove_wpautop( $content ) ?>

	 		</div>
	 	</div>	  <!-- END CONTENT TEXT -->

	 	<!-- CONTENT IMAGE -->
		<div class="col-md-6 col-lg-6">
			<div class="content-img">
				<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>" />
	 		</div>
		</div>


	</div>	   <!-- End row -->		
</div>