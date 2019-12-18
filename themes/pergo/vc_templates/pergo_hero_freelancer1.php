<?php
$args = pergo_hero_freelancer1_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
?>
<!-- HERO-10
============================================= -->	
<div class="hero-class" data-class="hero-section bg-fixed division" data-section_id="hero-10">
	<div class="row">

		<!-- HERO TEXT -->
		<div class="col-md-12">
			<div class="hero-txt text-center">
				<!-- Title -->
				<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 300 ); ?><!-- Title -->	
				<?php echo pergo_get_vc_param_html( 'lead_text', $atts, 'fadeInUp', 400 ); ?><!-- Sub Title -->
			</div>
		</div>	<!-- END HERO TEXT -->

	</div>	  <!-- End row -->
</div>	<!-- END HERO-10 -->
