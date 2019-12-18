<?php
extract(shortcode_atts(array(		
		'title' => 'Our Location', 	
		'subtitle' => '121 King Street, Melbourne,
Victoria 3000 Australia',
		'css_animation' => '',
		'animation_delay' => 300,
), $atts));
?>
<div class="contacts-3 m-bottom-40">
	<div class="contact-box animated"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>
		<h5 class="h5-sm"><?php echo esc_attr($title); ?></h5>														
		<div class="grey-color"><?php echo wpautop($subtitle); ?></div>
	</div>
</div>