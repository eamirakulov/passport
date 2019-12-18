<?php
$args = pergo_card_box_shortcode_vc(true);
$__content = $content;
$atts = shortcode_atts( $args, $atts);
extract($atts);
?>
<div class="cbox-1 more-item-box animated text-<?php echo esc_attr($align) ?>"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>
	<?php 
	$image_html = '<img class="img-fluid" src="'.esc_url($image).'" alt="'.esc_attr($title).'"><!-- Image -->';
	echo apply_filters('pergo_add_link_filter', $image_html, 'title', $atts); 
	?>
	
	
	<div class="cbox-txt">
		<?php if( $title != '' ): ?>
			<?php echo pergo_get_vc_param_html( 'title', $atts, 'fadeInUp', 300 ); ?><!-- Title -->	
		<?php endif; ?>	
		<?php if( $subtitle != '' ): ?>
			<?php echo pergo_get_vc_param_html( 'subtitle', $atts, 'fadeInUp', 400 ); ?><!-- Sub Title -->
		<?php endif; ?>	
		<?php echo wpautop($__content); ?>
		<?php if( $enable_button == 'yes' ): ?>
			<div class="card-buttons m-top-30">
			<?php 
			$paramsArr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($params):array();
			echo pergo_get_button_groups($paramsArr); 
			?>
			</div>
		<?php endif; ?>	
	</div>	<!-- Text -->
</div>