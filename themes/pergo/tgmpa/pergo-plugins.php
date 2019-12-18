<?php
require_once get_template_directory() . '/tgmpa/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'pergo_register_required_plugins' );

if( !function_exists('pergo_register_required_plugins') ):
function pergo_register_required_plugins( ) {
    $plugins = array(
        // This is an example of how to include a plugin bundled with a theme.
         array(
             'name' => __( 'Visual Composer', 'pergo' ), // The plugin name.
            'slug' => 'js_composer', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/js_composer-6.0.5.zip', // The plugin source.
            'required' => true,
            'version' => '6.0.5',
            'force_activation' => false, 
            'force_deactivation' => false, 
            'external_url' => '', 
            'is_callable' => '' 
        ),
        array(
             'name' => __( 'Pergo extends', 'pergo' ), // The plugin name.
            'slug' => 'perch_modules', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/perch_modules.zip', // The plugin source.
            'required' => true,
            'version' => '1.0.2',
            'force_activation' => false, 
            'force_deactivation' => false, 
            'external_url' => '', 
            'is_callable' => '' 
        ),  
        array(
             'name' => __( 'Convert Plus', 'pergo' ), // The plugin name.
            'slug' => 'convertplug', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/convertplug-3.5.1.zip', // The plugin source.
            'required' => 0,
            'version' => '3.5.1',
            'force_activation' => 0, 
            'force_deactivation' => 0, 
            'external_url' => '', 
            'is_callable' => '' 
        ),       
        array(
             'name' => __( 'Pergo post types & shortcodes', 'pergo' ), // The plugin name.
            'slug' => 'zpergo_modules', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/zpergo_modules.zip', // The plugin source.
            'required' => true,
            'version' => '1.4',
            'force_activation' => false,
            'force_deactivation' => false 
        ), 
        array(
             'name' => __( 'Envato market', 'pergo' ), // The plugin name.
            'slug' => 'envato-market', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/envato-market.zip', // The plugin source.
            'required' => false,
            'version' => '2.0.1',
            'force_activation' => false,
            'force_deactivation' => false 
        ),
        array(
             'name' => __( 'Domain checker', 'pergo' ), // The plugin name.
            'slug' => 'wp-domain-checker', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/wp-domain-checker-4.3.6.zip', // The plugin source.
            'required' => false,
            'version' => '4.3.6',
            'force_activation' => false,
            'force_deactivation' => false 
        ),
        array(
             'name' => __( 'Slider revoulation', 'pergo' ), // The plugin name.
            'slug' => 'revslider', // The plugin slug (typically the folder name).
            'source' => get_template_directory() . '/tgmpa/plugins/revslider-6.1.4.zip', // The plugin source.
            'required' => false,
            'version' => '6.1.4',
            'force_activation' => false,
            'force_deactivation' => false 
        ), 
        array(
             'name' => __( 'Pergo Megamenu', 'pergo' ),
            'slug' => 'cool-responsive-mega-menu',
            'required' => true 
        ),
        array(
             'name' => __( 'Contact Form 7', 'pergo' ),
            'slug' => 'contact-form-7',
            'required' => true 
        ),
        array(
             'name' => __( 'Breadcrumb NavXT', 'pergo' ),
            'slug' => 'breadcrumb-navxt',
            'required' => true 
        ),
        array(
             'name' => __( 'Email Subscription', 'pergo' ),
            'slug' => 'email-subscribers',
            'required' => true 
        ),        
        array(
             'name' => __( 'Woocommerce', 'pergo' ),
            'slug' => 'woocommerce',
            'required' => false 
        ),
        array(
             'name' => __( 'Variation Swatches for WooCommerce', 'pergo' ),
            'slug' => 'variation-swatches-for-woocommerce',
            'required' => false 
        ),
        array(
             'name' => __( 'Woocommerce quick view', 'pergo' ),
            'slug' => 'yith-woocommerce-quick-view',
            'required' => false 
        ),
        array(
             'name' => __( 'Woocommerce wishlist', 'pergo' ),
            'slug' => 'yith-woocommerce-wishlist',
            'required' => true 
        ),
        array(
             'name' => __( 'WP User Avatar', 'pergo' ),
            'slug' => 'wp-user-avatar',
            'required' => false 
        ),
        array(
             'name' => __( 'WP Retina 2x', 'pergo' ),
            'slug' => 'wp-retina-2x',
            'required' => false 
        ),
        array(
             'name' => __( 'Regenerate Thumbnails', 'pergo' ),
            'slug' => 'regenerate-thumbnails',
            'required' => false 
        ),
        array(
             'name' => __( 'One Click Demo Import', 'pergo' ),
            'slug' => 'one-click-demo-import',
            'required' => false 
        ) 
    );
    $config  = array(
         'id' => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu' => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug' => 'themes.php', // Parent menu slug.
        'capability' => 'edit_theme_options', 
        'has_notices' => true, // Show admin notices or not.
        'dismissable' => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message' => '' // Message to output right before the plugins table.
    );
    tgmpa( $plugins, $config );
}
endif;