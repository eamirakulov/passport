<?php
extract(shortcode_atts(array(
		'title' => '121 King Street, Melbourne, Victoria 3000 Australia',
		'image' => PERGO_URI . '/images/place-marker.png',
		'latitude' => '-37.817214',
		'longitude' => '144.955925',
		'zoom' => '17'
), $atts));
wp_enqueue_script( 'googleapis' );
?>
 <div class="row" id="contacts-map">

	<div class="col-md-12">	
		<div id="gmap" class="gmap" data-latitude="<?php echo esc_attr($latitude) ?>" data-longitude="<?php echo esc_attr($longitude) ?>" data-title="<?php echo esc_attr($title) ?>" data-marker="<?php echo esc_url($image) ?>"  data-zoom="<?php echo intval($zoom) ?>"></div>
	</div>

</div>	<!-- End row -->