<?php
return array(
    'title'      => 'Harshone Post Options',
    'id'         => 'harshone_post_metabox',
    'icon'       => 'el el-cog',
    'position'   => 'normal',
    'priority'   => 'high',
    'post_types' => array( 'post' ),
    'sections'   => array(
        array(
            'id'     => 'harshone_post_section',
            'title'  => 'Post Settings',
            'fields' => array(
                array(
                    'id'      => 'harshone_post_featured_layout',
                    'type'    => 'select',
                    'title'   => 'Featured Layout',
                    'options' => array(
                        ''        => 'Default',
                        'layout1' => 'Layout 1',
                        'layout2' => 'Layout 2',
                    ),
                    'default' => '',
                ),
                array(
                    'id'      => 'harshone_post_show_author',
                    'type'    => 'switch',
                    'title'   => 'Show Author Box',
                    'default' => true,
                ),
            ),
        ),
    ),
);
