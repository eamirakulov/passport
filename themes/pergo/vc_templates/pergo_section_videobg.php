<?php
extract(shortcode_atts(array(
		'image' => PERGO_URI . '/images/video/video.jpg', 
		'mp4' => 'http://jthemes.org/wp/pergo/files/images/video/video.mp4',
		'webm' => 'http://jthemes.org/wp/pergo/files/images/video/video.webm',
		'ogv' => 'http://jthemes.org/wp/pergo/files/images/video/video.ogv',
), $atts));
?>
<div class="video-play"
	data-class="bg-video" 
	data-poster="<?php echo esc_url($image) ?>" 
	data-webm="<?php echo esc_url($webm) ?>" 
	data-ogv="<?php echo esc_url($ogv) ?>" 
	data-mp4="<?php echo esc_url($mp4) ?>">	
</div>