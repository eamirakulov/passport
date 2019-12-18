<?php
$args = pergo_hero_slide_shortcode_vc(true);
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
?>
<!-- HERO SLIDE #1 -->
<li class="hero-slide">

	<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 300 ); ?><!-- Title -->	
	<?php echo pergo_get_vc_param_html( 'lead_text', $atts, 'fadeInUp', 500 ); ?><!-- Sub Title -->			
	
																																	
	<!-- Button -->
	<div class="hero-btns animated" data-animation="fadeInUp" data-animation-delay="700">
		<?php echo pergo_get_button_groups($paramsArr, 'tra-hover') ?>
	</div>													
						
</li>	 <!-- END HERO SLIDE #1 -->	