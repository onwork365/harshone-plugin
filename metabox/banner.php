<?php
return array(
    'id'     => 'harshone_banner_settings',
    'title'  => esc_html__( 'Harshone Banner Settings', 'harshone' ),
    'fields' => array(
        array(
            'id'      => 'banner_source_type',
            'type'    => 'button_set',
            'title'   => esc_html__( 'Banner Source Type', 'harshone' ),
            'options' => array(
                'd' => esc_html__( 'Default', 'harshone' ),
                'e' => esc_html__( 'Elementor', 'harshone' ),
            ),
            'default' => '',
        ),
        array(
            'id'       => 'banner_elementor_template',
            'type'     => 'select',
            'title'    => __( 'Template', 'harshone' ),
            'data'     => 'posts',
            'args'     => [
                'post_type' => [ 'elementor_library' ],
                'posts_per_page'=> -1,
            ],
            'required' => [ 'banner_source_type', '=', 'e' ],
        ),
        array(
            'id'       => 'banner_show',
            'type'     => 'switch',
            'title'    => esc_html__( 'Show Banner', 'harshone' ),
            'default'  => false,
            'required' => [ 'banner_source_type', '=', 'd' ],
        ),
        array(
            'id'       => 'banner_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Banner Section Title', 'harshone' ),
            'desc'     => esc_html__( 'Enter the title to show in banner section', 'harshone' ),
            'required' => array( 'banner_show', '=', true ),
        ),
        array(
            'id'       => 'banner_background',
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Background Image', 'harshone' ),
            'desc'     => esc_html__( 'Insert background image for banner', 'harshone' ),
            'required' => array( 'banner_show', '=', true ),
        ),
    ),
);