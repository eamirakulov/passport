<?php
extract(shortcode_atts(array(
		'count_prefix' => '',
		'count_postfix' => '',
		'count' => '1154',
		'title' => 'Happy Clients', 
		'subtitle' => 'Viverra sem magna egestas',
		'css_animation' => '',
		'animation_delay' => 300,
		'align'	=> 'center',
		'prefix_color' => 'default',
		'counter_color' => 'default',
		'postfix_color' => 'default',
		'title_color' => 'default',
		'subtitle_color' => 'lightgrey',
), $atts));
?>
<div class="animated"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>
	<div class="statistic-block text-<?php echo esc_attr($align) ?>">							
		<div>
			<span class="counter-prefix <?php echo esc_attr($prefix_color) ?>-color"><?php echo esc_attr($count_prefix) ?></span>
			<span class="statistic-number <?php echo esc_attr($counter_color) ?>-color"><?php echo intval($count) ?></span>
			<span class="counter-postfix <?php echo esc_attr($postfix_color) ?>-color"><?php echo esc_attr($count_postfix) ?></span>
		</div>
		<h5 class="h5-sm <?php echo esc_attr($title_color) ?>-color"><?php echo esc_attr($title); ?></h5>							
		<p class="p-sm <?php echo esc_attr($subtitle_color) ?>-color"><?php echo esc_attr($subtitle); ?></p>
	</div>	
</div>	