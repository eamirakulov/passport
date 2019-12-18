<?php
$args = pergo_our_skills_shortcode_vc(true);
$args['content'] = $content;
$atts = shortcode_atts( $args, $atts);
extract($atts);
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
?>
<div class="row d-flex align-items-center">
 	<!-- ABOUT TEXT -->
 	<div class="col-md-6">
 		<div class="about-txt ind-30">
 			<?php echo pergo_get_vc_param_html( 'lead_text', $atts, 'fadeInUp', 400 ); ?><!-- Sub Title -->
 			<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 400 ); ?><!-- Title -->	
			<!-- Text -->
			<div class="animated" data-animation="fadeInUp" data-animation-delay="500">
			   <?php echo wpautop($content); ?>
			</div>			
 		</div>
 	</div>	  <!-- END ABOUT TEXT -->

 	<?php if( !empty($paramsArr) ): $animation_duration = 400; ?>
 	<!-- ABOUT SKILLS -->
	<div class="col-md-6">
		<div class="about-skills ind-30">
			<!-- SKILLS -->	
			<div class="skills rose-progress m-top-30">
				<?php foreach ($paramsArr as $key => $value): ?>
					<div class="barWrapper animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($animation_duration) ?>">	
						<p><?php echo esc_attr($value['title']) ?></p>
						<span class="skill-percent"><?php echo intval($value['count']) ?>%</span> 
						<div class="progress">
								<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo intval($value['count']) ?>" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
					<?php $animation_duration = $animation_duration + 200; ?>
				<?php endforeach; ?>
			</div>	<!-- END SKILLS -->	

 		</div>
	</div>
	<?php endif; ?>	
</div>	   <!-- End row -->	