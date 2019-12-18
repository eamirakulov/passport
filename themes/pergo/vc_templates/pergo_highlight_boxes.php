<?php
extract(shortcode_atts(array(
	'column' => 'col-md-4',
	'params' => '',
), $atts));
$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$animation_delay = 300;
?>

<div class="row">
	<?php foreach ($paramsArr as $key => $value) : extract($value) ?>		
		
		<div class="<?php echo esc_attr($column) ?> animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($animation_delay) + 100 ?>">
			<div class="hbox-1">							
				<h5 class="h5-md deepblue-color"><?php echo esc_attr($title) ?></h5>
				<?php echo wpautop($subtitle) ?>
			</div>	
		</div><!-- STATISTIC BLOCK -->
	<?php endforeach; ?>
</div>
