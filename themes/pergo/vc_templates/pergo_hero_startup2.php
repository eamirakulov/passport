<?php
$args = pergo_hero_startup2_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
?>
<!-- HERO-17
============================================= -->
<div class="hero-class" data-class="hero-section division" data-section_id="hero-17">
	<div class="row d-flex align-items-center">


		<!-- HERO TEXT -->
		<div class="col-md-6">
			<div class="hero-txt p-right-30">
						
				<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 300 ); ?><!-- Title -->	
				<?php echo pergo_get_vc_param_html( 'lead_text', $atts, 'fadeInUp', 400 ); ?><!-- Sub Title -->

				<!-- Buttons -->
				<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="600">
					<?php echo pergo_get_button_groups($paramsArr) ?>
				</div>

			</div>	
		</div>	<!-- END HERO TEXT -->


		<!-- HERO IMAGE -->
		<div class="col-md-6">
			<div class="hero-img p-left-30 animated" data-animation="fadeInLeft" data-animation-delay="400">
				<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">
			</div>
		</div>	


	</div>	   <!-- End row -->	
</div>	<!-- END HERO-17 -->