<?php
return array(
    'id'     => 'harshone_footer_settings',
    'title'  => esc_html__( 'Harshone Footer Settings', 'harshone' ),
    'fields' => array(
        array(
            'id'      => 'footer_source_type',
            'type'    => 'button_set',
            'title'   => esc_html__( 'Footer Source Type', 'harshone' ),
            'options' => array(
                'd' => esc_html__( 'Default', 'harshone' ),
                'e' => esc_html__( 'Elementor', 'harshone' ),
            ),
            'default'=> '',
        ),
        array(
            'id'       => 'footer_elementor_template',
            'type'     => 'select',
            'title'    => __( 'Template', 'harshone' ),
            'data'     => 'posts',
            'args'     => [
                'post_type' => [ 'elementor_library' ],
                'posts_per_page' => -1,
                'orderby'  => 'title',
                'order'     => 'DESC'
            ],
            'required' => [ 'footer_source_type', '=', 'e' ],
        ),
        array(
            'id'      => 'footer_show',
            'type'    => 'switch',
            'title'   => esc_html__( 'Show Footer', 'harshone' ),
            'default' => true,
            'required' => [ 'footer_source_type', '=', 'd' ],
        ),
    ),
);