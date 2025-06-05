<?php
/*
Plugin Name: Harshone Plugin
Description: Adds Redux Framework metaboxes for Harshone theme (example structure, similar to inventive-plugin)
Version: 1.0
Author: Your Name
*/

// 1. Load Redux Framework from plugin folder if not already loaded
if ( ! class_exists( 'ReduxFramework' ) ) {
    require_once plugin_dir_path( __FILE__ ) . 'redux-framework/redux-core/framework.php';
}

// 2. Register Redux metaboxes (modular loader)
// Load Redux metaboxes from metabox/metaboxes.php (inventive-plugin style)
require_once plugin_dir_path( __FILE__ ) . 'metabox/metaboxes.php';

// 3. Register Redux options panel (global theme options)
require_once plugin_dir_path( __FILE__ ) . 'options.php';

// 4. Helper function to get metabox values (for use in theme/templates)
if ( ! function_exists( 'harshone_get_meta_option' ) ) {
    function harshone_get_meta_option( $post_id, $key, $default = '' ) {
        $meta = get_post_meta( $post_id, 'harshone_page_metabox', true );
        if ( is_array( $meta ) && isset( $meta[ $key ] ) ) {
            return $meta[ $key ];
        }
        return $default;
    }
}
