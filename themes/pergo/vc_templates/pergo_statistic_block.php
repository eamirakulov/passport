<?php
extract(shortcode_atts(array(
		'params' => '',
), $atts));
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$animation_delay = 600;
?>
<div class="row">
	<?php foreach ($paramsArr as $key => $value) : extract($value) ?>		
		<!-- STATISTIC BLOCK #1 -->
		<div class="col-sm-4 animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($animation_delay) + 200 ?>">
			<div class="statistic-block">							
				<div class="hero-number"><?php echo esc_attr($title) ?></div>
				<p><?php echo esc_attr($subtitle) ?></p>
			</div>	
		</div>
	<?php endforeach; ?>
</div>