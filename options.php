<?php
// Example Redux options panel config (optional, for global theme options)
if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = 'harshone_options';

Redux::setArgs( $opt_name, array(
    'opt_name' => $opt_name,
    'display_name' => 'Harshone Theme Options',
    'menu_title' => 'Harshone Options',
    'menu_type' => 'menu',
    'allow_sub_menu' => true,
    'menu_icon' => 'dashicons-admin-generic',
    'page_priority' => 2,
    'page_parent' => '',
    'page_permissions' => 'manage_options',
    'save_defaults' => true,
    'show_import_export' => true,
));

Redux::setSection( $opt_name, array(
    'title' => 'General',
    'id' => 'general_section',
    'desc' => 'General theme options.',
    'icon' => 'el el-home',
    'fields' => array(
        array(
            'id' => 'site_layout',
            'type' => 'select',
            'title' => 'Site Layout',
            'options' => array(
                'wide' => 'Wide',
                'boxed' => 'Boxed',
            ),
            'default' => 'wide',
        ),
    ),
));
