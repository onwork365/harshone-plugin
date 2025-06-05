<?php
return array(
    'title'      => 'Harshone Page Options',
    'id'         => 'harshone_page_metabox',
    'icon'       => 'el el-cogs',
    'position'   => 'normal',
    'priority'   => 'high',
    'post_types' => array( 'page', 'post' ),
    'sections'   => array(
        array(
            'id'     => 'harshone_page_section',
            'title'  => 'Page Settings',
            'fields' => array(
                array(
                    'id'      => 'harshone_custom_header_style',
                    'type'    => 'select',
                    'title'   => 'Custom Header Style',
                    'options' => array(
                        ''       => 'Default',
                        'style1' => 'Header Style 1',
                        'style2' => 'Header Style 2',
                        'style3' => 'Header Style 3',
                    ),
                    'default' => '',
                ),
                array(
                    'id'      => 'harshone_page_show_title_section',
                    'type'    => 'switch',
                    'title'   => 'Show Page Title Section',
                    'default' => false,
                ),
                array(
                    'id'       => 'harshone_page_custom_title_text',
                    'type'     => 'text',
                    'title'    => 'Custom Page Title Text',
                    'desc'     => 'Leave empty to use the default post/page title.',
                    'required' => array( 'harshone_page_show_title_section', '=', true ),
                ),
            ),
        ),
    ),
);
