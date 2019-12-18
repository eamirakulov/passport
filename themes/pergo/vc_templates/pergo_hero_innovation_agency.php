<?php
extract(shortcode_atts(array(
		'image' => PERGO_URI . '/images/video/video.jpg', 
		'mp4' => 'http://jthemes.org/wp/pergo/files/images/video/video.mp4',
		'webm' => 'http://jthemes.org/wp/pergo/files/images/video/video.webm',
		'ogv' => 'http://jthemes.org/wp/pergo/files/images/video/video.ogv',
), $atts));
?>
<!-- HERO-9
============================================= -->
<div class="hero-class video-play" 
	data-section_id="hero-9" 
	data-class="hero-section bg-video" 
	data-poster="<?php echo esc_url($image) ?>" 
	data-webm="<?php echo esc_url($webm) ?>" 
	data-ogv="<?php echo esc_url($ogv) ?>" 
	data-mp4="<?php echo esc_url($mp4) ?>">
	<div class="row">
		<!-- HERO SLIDER HOLDER -->
		<div class="col-lg-12 hero-txt">
			<div class="hero-slider text-center">											
				<ul class="slides">
					<?php echo wpb_js_remove_wpautop( $content ); ?>										
				</ul>									
			</div>
		</div>	 <!-- END HERO SLIDER HOLDER -->					
		

	</div>	  <!-- End row -->
</div>	<!-- END HERO-2 -->