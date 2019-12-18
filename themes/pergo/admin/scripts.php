<?php
// Register Style
function pergo_admin_styles( ) {
    wp_enqueue_style( 'pergo-admin-style', PERGO_URI . '/admin/assets/css/style.css', false, '1.0.1.7', 'all' );
    wp_enqueue_style( 'flaticon' );
	wp_enqueue_style( 'fontawesome' );
}
// Hook into the 'admin_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'pergo_admin_styles' );
// Register Script
function pergo_admin_scripts( ) {
    wp_enqueue_media();
    wp_enqueue_script( 'v4-shims', PERGO_URI .'/js/v4-shims.js', array( 'jquery' ), '1.0', true );     
    wp_register_script( 'pergo-scripts', PERGO_URI . '/admin/assets/js/scripts.js', array(
         'jquery' 
    ), '1.1.1', false );
    wp_enqueue_script( 'pergo-scripts' );
}
// Hook into the 'admin_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'pergo_admin_scripts' );