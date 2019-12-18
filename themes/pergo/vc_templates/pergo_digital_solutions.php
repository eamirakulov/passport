<?php
extract(shortcode_atts(array(
		'position' => '',
		'image' => PERGO_URI . '/images/image-02.png',
		'subtitle' => 'Digital Solutions',
		'title' => 'We use design and innovations', 
		'lead_text' => 'Justo integer odio velna vitae auctor integer congue magna at pretium purus ligula rutrum luctus',
		'display' => 'techs',
		'tech_title' => 'Technologies we use:',
		'style' => 'default',
		'techs_group' => '',
		'counter_group' => '',
		'strategy_list' => '',

		'tag' => 'h3:h3-sm',
		'title_text_color' => 'default',
		'name_color' => 'default',
		'underline' => 'yes',
		'underline_color' => 'underline-yellow',
		'highlight_text_color' => 'rose',
		'subtitle_text_color' => 'grey',
		'subtitle_text_size' => 'p-lg',
), $atts));

if( $display == 'counter' ){
	$params = $counter_group;
}elseif( $display == 'techs' ){
	$params = $techs_group;
}else{
	$params = $strategy_list;
}

$paramsArr = (function_exists('vc_param_group_parse_atts'))? vc_param_group_parse_atts($params) : array();
$content_class = ($position == 'yes')? 'col-md-6 col-lg-6 offset-lg-1 order-md-last order-lg-last' : 'col-md-6 col-lg-6';
$image_class = ($position == 'yes')? 'col-md-6 col-lg-5' : 'col-md-6 col-lg-5 offset-lg-1';

$Arr = explode(':', $tag);
$titletag = $Arr[0];
$title_class = $Arr[1];
$title_class .= ' '.$title_text_color.'-color';

$tagclass = '';
if( $underline == 'yes' ){
	$tagclass = ($underline_color != 'none')? $underline_color : '';
	$tagclass .= ($highlight_text_color != '')? ' '.$highlight_text_color.'-color' : '';
}
$parse_args = array('tagclass' => $tagclass );
?>
<div class="row d-flex align-items-center"> 	
 	<div class="<?php echo esc_attr($content_class) ?>">
 		<div class="content-txt ind-30">
 			<?php if( $subtitle != '' ): ?>
 			<span class="section-id <?php echo esc_attr($name_color) ?>-color animated" data-animation="fadeInUp" data-animation-delay="400">
 			   <?php echo esc_attr($subtitle) ?>
 			</span><!-- Section name -->
 		 	<?php endif; ?>

 			<<?php echo esc_attr($titletag) ?> class="<?php echo esc_attr($title_class) ?> animated" data-animation="fadeInUp" data-animation-delay="400">
			    <?php echo pergo_parse_text($title, $parse_args) ?>
			</<?php echo esc_attr($titletag) ?>><!-- Title -->

			<p class="<?php echo  esc_attr($subtitle_text_size) ?> <?php echo esc_attr($subtitle_text_color) ?>-color animated" data-animation="fadeInUp" data-animation-delay="500">
			   <?php echo pergo_parse_text($lead_text); ?> 
			</p><!-- Text --> 
			
			
			<div class="animated" data-animation="fadeInUp" data-animation-delay="600">
			   <?php echo wpautop($content); ?>
			</div><!-- Text -->

			<?php if( $display == 'list' ): ?>
				<?php if( !empty($paramsArr) ): $delay = 600; ?>
					<!-- List -->
					<ul class="content-list">

						<?php foreach ($paramsArr as $key => $value): ?>					
							<li class="animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($delay) ?>"><?php echo esc_attr($value['title']) ?></li>
							<?php $delay = $delay + 100; ?>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			<?php endif; ?>

			<?php if( $display == 'techs' ): ?>
			<!-- Technologies Icons -->
			<div class="technologies animated" data-animation="fadeInUp" data-animation-delay="800">
				<!-- Text -->	
				<p><?php echo esc_attr($tech_title); ?></p>
				<?php if( !empty($paramsArr) ): ?>
				<!-- Icons -->
					<?php foreach ($paramsArr as $key => $value): ?>
						<?php if( isset($value['icon']) ): ?>							
							<span class="html-ico">
								<?php if( isset($value['image']) && ($value['image'] != '') ): ?>
								<img src="<?php echo esc_url($value['image']) ?>" alt="<?php echo esc_attr($value['title']) ?>">
								<?php else: ?>
								<i class="<?php echo esc_attr($value['icon']) ?>"></i>
								<?php endif; ?>
							</span>
						<?php endif; ?>
					<?php endforeach; ?>				
				
				<?php endif; ?>
				
			</div>
			<?php endif; ?>

			<?php if( $display == 'counter' ): ?>
				<?php if( !empty($paramsArr) ): $animation_duration = 700; ?>
				<!-- SMALL STATISTIC -->
				<div class="small-statistic m-top-40">
					<div class="row">	
						<?php foreach ($paramsArr as $key => $value): ?>
							<!-- STATISTIC BLOCK #1 -->
							<div class="col-sm-4 col-md-6 animated" data-animation="fadeInUp" data-animation-delay="<?php echo intval($animation_duration) ?>">							
								<div class="statistic-block">							
									<div class="statistic-number <?php echo esc_attr($style) ?>-color"><?php echo intval($value['count']) ?></div>
									<h5 class="h5-sm"><?php echo esc_attr($value['title']) ?></h5>							
								</div>								
							</div>
							<?php $animation_duration = $animation_duration + 100; ?>
						<?php endforeach; ?>					
					</div>	
				</div>	<!-- END SMALL STATISTIC -->	
				<?php endif; ?>
			<?php endif; ?>

 		</div>
 	</div>	  <!-- END CONTENT TEXT -->

 	<!-- CONTENT IMAGE -->
	<div class="<?php echo esc_attr($image_class) ?> animated" data-animation="fadeInLeft" data-animation-delay="500">
		<div class="content-img">
			<img class="img-fluid" src="<?php echo esc_url($image) ?>" alt="<?php echo esc_attr($subtitle) ?>" />
 		</div>
	</div>
</div>	   <!-- End row -->		