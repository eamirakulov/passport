<?php
extract(shortcode_atts(array(
		'name' => '',		
		'title' => 'We\'re making design better for everyone', 	
		'subtitle' => 'Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, tempor posuere ligula varius augue luctus donec sapien',	
		'align' => 'center',
		'tag' => 'h3:h3-sm',
		'title_text_color' => 'default',
		'name_color' => 'rose',
		'underline' => 'yes',
		'underline_color' => 'underline-yellow',
		'highlight_text_color' => 'rose',
		'subtitle_text_color' => 'grey',
		'subtitle_text_size' => 'p-lg',
		'fullwidth' => '',
		'enable_content' => '',
		'enable_list' => '',
		'content_list' => '',
		'enable_button' => '',
		'params' => '',
), $atts));
$Arr = explode(':', $tag);
$tagname = $Arr[0];
$classname = $Arr[1];
$classname .= ' '.$title_text_color.'-color';
$sectionclass = array('section-title');
$sectionclass[] = 'text-'.esc_attr($align);
if( $fullwidth == '' ){
	$sectionclass[] = ( $align == 'center' )? 'col-lg-10 offset-lg-1': 'col-md-11 col-lg-10';
}


$tagclass = '';
if( $underline == 'yes' ){
	$tagclass = ($underline_color != 'none')? $underline_color : '';
	$tagclass .= ($highlight_text_color != '')? ' '.$highlight_text_color.'-color' : '';
}

$parse_args = array('tagclass' => $tagclass );
?>

<div class="row">	
	<div class="<?php echo implode(' ', $sectionclass) ?>">
		<?php if( $name != '' ): ?>
		<span class="section-id <?php echo esc_attr($name_color) ?>-color"><?php echo esc_attr($name); ?></span>
		<?php endif; ?>
		<?php if( $title != '' ): ?>			
			<<?php echo esc_attr($tagname) ?> class="<?php echo esc_attr($classname) ?>"><?php echo pergo_parse_text($title, $parse_args); ?></<?php echo esc_attr($tagname) ?>>
		<?php endif; ?>
		<p class="<?php echo  esc_attr($subtitle_text_size) ?> <?php echo esc_attr($subtitle_text_color) ?>-color"><?php echo pergo_parse_text($subtitle, $parse_args); ?></p>	

		<?php if( $enable_content == 'yes' ): ?>
			<div class="section-content m-top-20" data-animation="fadeInUp" data-animation-delay="300">
				<?php echo wpautop($content) ?>
			</div>
		<?php endif; ?>

		<?php if( $enable_list == 'yes' ): ?>
			<div class="section-list m-top-20">
			<?php 
			$Arr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($content_list):array();
			pergo_vc_get_content_list_group($Arr, 'fadeInUp', '400'); 
			?>
			</div>
		<?php endif; ?>	

		<?php if( $enable_button == 'yes' ): ?>
			<div class="section-buttons m-top-35" data-animation="fadeInUp" data-animation-delay="1000">
			<?php 
			$paramsArr=(function_exists('vc_param_group_parse_atts'))?vc_param_group_parse_atts($params):array();
			echo pergo_get_button_groups($paramsArr); 
			?>
			</div>
		<?php endif; ?>	
	</div>		
</div> 	 <!-- END SECTION TITLE -->	
