<?php
extract(shortcode_atts(array(
		'title' => 'Stay up to date with our news, ideas and updates',
		'placeholder' => 'Your email address',
		'columns' => '3'
), $atts));

?>
<div class="row d-flex align-items-center" id="newsletter-1">
	<!-- NEWSLETTER TEXT -->
	<div class="col-md-8 col-lg-6 offset-md-2 offset-lg-0">
		<div class="newsletter-txt">
			<h3 class="h3-xs"><?php echo pergo_parse_text($title) ?></h3>
		</div>
	</div>

	<!-- NEWSLETTER FORM -->
	<div class="col-md-8 col-lg-6 offset-md-2 offset-lg-0">
		<div class="p-left-30">						
			<?php				

				if( class_exists('ES_Shortcode') ){

					$atts['es_desc'] = '';
	       			$atts['es_group'] = 'Public';
					$atts['es_desc']  = trim($atts['es_desc']);
			        $atts['es_group'] = trim($atts['es_group']);
			        $atts['es_pre'] = 'shortcode';
					
					$atts['email'] = esc_attr($placeholder);
					$atts['button_style'] = 'btn-rose';
					$atts['enable_name'] = false;
					$atts['name'] = false;
					$atts['el_class'] = false;
					echo PergoNewsletter::es_get_form_simple( $atts );
				}else{
					echo 'Please Install Theme Required & Recommended PLugins.';
				}
				?>		
		</div>
	</div>
</div>
