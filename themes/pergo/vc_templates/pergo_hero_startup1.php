<?php
$args = pergo_hero_startup1_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$dark_color_class = pergo_default_dark_color_classes();

if( in_array($form_bg, $dark_color_class) ){
	$form_bg .= ' white-color';	
}
?>
<!-- HERO-5
============================================= -->
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-5">
	<div class="row d-flex align-items-center">

		<!-- HERO TEXT -->
		<div class="col-md-7 col-xl-7 white-color">
			<div class="hero-txt">
					
				<!-- Title -->
				<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 300 ); ?><!-- Title -->	
				<?php echo pergo_get_vc_param_html( 'lead_text', $atts, 'fadeInUp', 400 ); ?><!-- Sub Title -->

				<!-- Button -->
				<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="600">
					<?php echo pergo_get_button_groups($paramsArr, 'tra-hover') ?>
				</div>

			</div>	
		</div>	<!-- END HERO TEXT -->


	
		<div id="hero-form" class="col-md-5 col-xl-4 offset-xl-1">
			<div class="hero-form animated" data-animation="fadeInLeft" data-animation-delay="400">
				<div class="row register-form form <?php echo esc_attr($form_bg) ?>">
					<h4 class="h4-md"><?php echo esc_attr($form_title) ?></h4>

					<!-- Text -->	
					<p class="p-sm"><?php echo esc_attr($form_desc) ?></p>
						
					<?php echo do_shortcode('[contact-form-7 id="'.intval($id).'"]'); ?>
																																										
				</div>	

			</div>
		</div>	<!-- END HERO FORM -->


	</div><!-- End row -->	
</div>	<!-- END HERO-5 -->	