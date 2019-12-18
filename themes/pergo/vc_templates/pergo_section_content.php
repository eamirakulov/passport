<?php
extract(shortcode_atts(array(
		'name' => '',		
		'title' => 'We\'re making {better design} for everyone', 	
		'subtitle' => 'Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec sapien',	
		'align' => 'left',
		'tag' => 'h3:h3-sm',
		'title_text_color' => 'default',
		'name_color' => 'rose',
		'underline' => 'yes',
		'underline_color' => 'underline-yellow',
		'highlight_text_color' => 'rose',
		'subtitle_text_color' => 'grey',
		'subtitle_text_size' => 'p-lg',
		'footer_text' => '',
		'fullwidth' => 'yes',
		'enable_content' => '',
		'enable_list' => 'yes',
		'content_list' => '',
		'enable_button' => 'yes',
		'params' => '',
		'mtop' => '',
		'mbottom' => '',
		'mleft' => '',
		'mright' => '',
		'ptop' => '',
		'pbottom' => '',
		'pleft' => '',
		'pright' => '',
), $atts));
$Arr = explode(':', $tag);
$tagname = $Arr[0];
$classname = $Arr[1];
$classname .= ' '.$title_text_color.'-color';
$sectionclass = array($mright, $mleft, $mtop, $mbottom, $pleft, $pbottom, $ptop, $pright);
$sectionclass[] = 'text-'.esc_attr($align);
if( $fullwidth == '' ){
	$sectionclass[] = ( $align == 'center' )? 'col-lg-10 offset-lg-1': 'col-md-11 col-lg-10';
}
if( $fullwidth == 'yes' ){
	$sectionclass[] = 'col-md-12';
}


$tagclass = '';
if( $underline == 'yes' ){
	$tagclass = ($underline_color != 'none')? $underline_color : '';
	$tagclass .= ($highlight_text_color != '')? ' '.$highlight_text_color.'-color' : '';
}

$parse_args = array('tagclass' => $tagclass );
$duration = 300;
?>
<div class="row">	
	<div class="<?php echo implode(' ', $sectionclass) ?>">
		<div class="content-txt">
			<?php if( $name != '' ): ?>
			<span class="section-id <?php echo esc_attr($name_color) ?>-color animated"  data-animation="fadeInUp" data-animation-delay="<?php echo intval($duration) ?>"><?php echo esc_attr($name); ?></span>
			<?php endif; ?>
			<?php if( $title != '' ): $duration = $duration + 100; ?>			
				<<?php echo esc_attr($tagname) ?> class="<?php echo esc_attr($classname) ?>"  data-animation="fadeInUp" data-animation-delay="<?php echo intval($duration) ?>"><?php echo pergo_parse_text($title, $parse_args); ?></<?php echo esc_attr($tagname) ?>>
			<?php endif; ?>
			<?php if( $subtitle != '' ): $duration = $duration + 100; ?>
				<p class="<?php echo  esc_attr($subtitle_text_size) ?> <?php echo esc_attr($subtitle_text_color) ?>-color animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($duration) ?>"><?php echo pergo_parse_text($subtitle, $parse_args); ?></p>	
			<?php endif; ?>

			<?php if( $enable_content == 'yes' ): $duration = $duration + 100; ?>
				<div class="section-content m-top-20 animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($duration) ?>">
					<?php echo wpautop($content) ?>
				</div>
			<?php endif; ?>

			<?php if( $enable_list == 'yes' ):  ?>
				<div class="section-list m-top-20 animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($duration) ?>">
				<?php 
				$Arr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($content_list):array();
				pergo_vc_get_content_list_group($Arr, 'fadeInUp', $duration); 
				?>
				</div>
			<?php endif; ?>	

			<?php if( $enable_button == 'yes' ): $duration = $duration + 100; ?>
				<div class="section-buttons m-top-35 animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($duration) ?>">
				<?php 
				$paramsArr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($params):array();
				echo pergo_get_button_groups($paramsArr); 
				?>
				</div>
			<?php endif; ?>	

			<?php if( $footer_text != '' ): $duration = $duration + 100; ?>
			<span class="m-top-20 os-version grey-color animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($duration) ?>"><?php echo esc_attr($footer_text) ?></span>
			<?php endif; ?>	
		</div>
	</div>		
</div> 	 <!-- END SECTION content -->	
