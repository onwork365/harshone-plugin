<?php
if ( ! function_exists( 'harshone_add_metaboxes' ) ) {
    function harshone_add_metaboxes( $metaboxes ) {
        $directories_array = array(
            'header.php',
            'banner.php',
            'sidebar.php',
            'footer.php',
            'page.php',
            'post.php',
            // Add more metabox config files as needed
        );
        foreach ( $directories_array as $file ) {
            $metaboxes[] = require_once( plugin_dir_path( __FILE__ ) . $file );
        }
        return $metaboxes;
    }
    add_action( 'redux/metaboxes/harshone_options/boxes', 'harshone_add_metaboxes' );
}
