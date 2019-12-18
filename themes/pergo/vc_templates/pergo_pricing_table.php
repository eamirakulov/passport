<?php
extract(shortcode_atts(array(
	'style' => 'style1',
	'featured' => false,
    'title' => 'Personal Plan',
    'unit' => '$', 
    'price' => '29',
    'validity' => 'monthly',
    'link_title' => 'Get started now',
    'link' => '#',
    'css_animation' => '',
	'animation_delay' => 300,
), $atts));
$btnclass = ($featured)? 'btn-primary' : 'btn-tra-black';
$titleclass = ($featured)? ' '.pergo_default_color().'-color' : '';
$borderclass = ($featured)? ' '.pergo_default_color().'-border' : '';
?>
<div id="<?php echo ($style == 'style2')? 'pricing-3' : '' ?>">
<div class="pricing-table highlight animated"<?php echo pergo_animation_attr($css_animation, $animation_delay); ?>>		
	<?php if($style == 'style1'): ?>	
																
	<!-- Plan Price  -->
	<div class="pricing-plan<?php echo esc_attr($borderclass) ?>">
		<h5 class="h5-lg<?php echo esc_attr($titleclass) ?>"><?php echo esc_attr($title) ?></h5>									
		<sup><?php echo esc_attr($unit) ?></sup>								
		<span class="price"><?php echo esc_attr($price) ?></span>
		<p class="validity"><?php echo esc_attr($validity) ?></p>
	</div>	
																
	<!-- Pricing Plan Features  -->
	<?php echo wpb_js_remove_wpautop($content, true) ?>

	<!-- Pricing Table Button  -->
	<a href="<?php echo esc_url($link); ?>" class="btn btn-arrow <?php echo esc_attr($btnclass) ?>">
		<span><?php echo esc_attr($link_title) ?> <i class="fas fa-angle-double-right"></i></span>
	</a>
	<?php endif; ?>

	
	<?php if($style == 'style2'): ?>							
	<div class="price">
		<h5 class="h5-xl deepblue-color"><?php echo esc_attr($title) ?></h5>
		<sup class="deepblue-color"><?php echo esc_attr($unit) ?></sup>
		<span class="deepblue-color"><?php echo esc_attr($price) ?></span>
		<span class="price-vat"><?php echo esc_attr($validity) ?></span>
	</div>
	
	<!-- Pricing Description  -->
	<div class="pricing-text">							
		<?php echo wpautop($content) ?>								
	</div>

	<!-- Pricing Table Button  -->
	<a href="<?php echo esc_url($link); ?>" class="btn btn-arrow <?php echo esc_attr($btnclass) ?>">
		<span><?php echo esc_attr($link_title) ?> <i class="fas fa-angle-double-right"></i></span>
	</a>
	<?php endif; ?>
	
</div>
</div>