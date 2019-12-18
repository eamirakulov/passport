<?php
add_action( 'vc_after_init', 'pergo_vc_tta_tabs_settings' );
function pergo_vc_tta_tabs_settings( ) {
	$value = array(
			'type' => 'dropdown',
			'param_name' => 'style',
			'value' => array(
				'Pergo style1' => 'pergo',
				'Pergo style2' => 'pergo-style2',
				__( 'Classic', 'pergo' ) => 'classic',
				__( 'Modern', 'pergo' ) => 'modern',
				__( 'Flat', 'pergo' ) => 'flat',
				__( 'Outline', 'pergo' ) => 'outline',
			),
			'heading' => __( 'Style', 'pergo' ),
			'description' => __( 'Select tabs display style.', 'pergo' ),
		);
	vc_update_shortcode_param( 'vc_tta_tabs', $value );
}