<?php
$args = pergo_hero_digital_agency_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
?>
<!-- HERO-14
============================================= -->
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-14">	
	<div class="row d-flex align-items-center">

		<div class="container">	
			<div class="row">

				<!-- HERO TEXT -->
				<div class="col-md-7">
					<div class="hero-txt">

						<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 300 ); ?><!-- Title -->	
						<?php echo pergo_get_vc_param_html( 'lead_text', $atts, 'fadeInUp', 400 ); ?><!-- Sub Title -->

						<!-- Button -->
						<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="600">
							<?php echo pergo_get_button_groups($paramsArr) ?>
						</div>

					</div>
				</div>	<!-- END HERO TEXT -->


			</div>	  <!-- End row -->
		</div>	   <!-- End container --> 


		<!-- HERO-14-IMAGE -->
		<div class="hero-14-img">
			<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($title) ?>">	
		</div>	


	</div>     <!-- End row -->		
</div>	<!-- END HERO-14 -->