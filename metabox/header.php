<?php
return array(
    'id'     => 'harshone_header_settings',
    'title'  => esc_html__( 'Harshone Header Settings', 'harshone' ),
    'fields' => array(
        array(
            'id'      => 'header_source_type',
            'type'    => 'button_set',
            'title'   => esc_html__( 'Header Source Type', 'harshone' ),
            'options' => array(
                'd' => esc_html__( 'Default', 'harshone' ),
                'e' => esc_html__( 'Elementor', 'harshone' ),
            ),
            'default'=> '',
        ),
        array(
            'id'       => 'header_elementor_template',
            'type'     => 'select',
            'title'    => __( 'Template', 'harshone' ),
            'data'     => 'posts',
            'args'     => [
                'post_type' => [ 'elementor_library' ],
                'posts_per_page' => -1,
                'orderby'  => 'title',
                'order'     => 'DESC'
            ],
            'required' => [ 'header_source_type', '=', 'e' ],
        ),
        array(
            'id'       => 'header_style_settings',
            'type'     => 'image_select',
            'title'    => esc_html__( 'Choose Header Styles', 'harshone' ),
            'options'  => array(
                'header_v1' => array(
                    'alt' => 'Header Style 1',
                    'img' => '', // Add your image path
                ),
                'header_v2' => array(
                    'alt' => 'Header Style 2',
                    'img' => '',
                ),
                'header_v3' => array(
                    'alt' => 'Header Style 3',
                    'img' => '',
                ),
            ),
            'required' => array( array( 'header_source_type', 'equals', 'd' ) ),
            'default' => 'header_v1',
        ),
    ),
);