<?php
$args = pergo_hero_marketing_agency_shortcode_vc(true);
$__content = $content;
$atts = shortcode_atts( $args, $atts);
extract($atts);
$style = ($bg != '')?' style="background-image: url('.esc_url($bg).')"' : '';
?>
<!-- HERO-11
============================================= -->	
<div class="hero-class white-color" data-class="hero-section division" data-section_id="hero-11">

	<!-- HERO-11 TEXT -->
	<div id="hero-11-txt" class="bg-scroll division"<?php echo $style ?>>
		<div class="container">	
			<div class="row ">


				<!-- HERO TEXT -->
				<div class="col-md-10 offset-md-1">
					<div class="hero-txt text-center">

						<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 300 ); ?><!-- Title -->	
						<?php echo pergo_get_vc_param_html( 'lead_text', $atts, 'fadeInUp', 400 ); ?><!-- Sub Title -->

					</div>
				</div>	<!-- END HERO TEXT -->


			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 	
	</div>	 <!-- END HERO-11 TEXT -->


	<!-- HERO-11 INNER CONTENT -->	
	<div class="container">	
		<div class="animated" data-animation="fadeInUp" data-animation-delay="600">		
			<?php echo wpb_js_remove_wpautop( $__content ); ?> 
	 	</div>
	</div> 	<!-- END HERO-11 INNER CONTENT -->


</div>	<!-- END HERO-11 -->
