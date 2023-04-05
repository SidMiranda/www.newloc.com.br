<?php
    if( function_exists('acf_add_local_field_group') ){
        acf_add_local_field_group(array (
            'key' => 'group_5b84387e00b3d',
            'title' => 'Regulamento',
            'fields' => array (
                array (
                    'key' => 'field_5b843889874d8',
                    'label' => 'regulamento',
                    'name' => 'regulamento',
                    'type' => 'wysiwyg',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 0,
                    'delay' => 0,
                ),
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'default',
                    ),
                ),
            ),
            'menu_order' => 13,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => array (
                0 => 'the_content',
            ),
            'active' => 1,
            'description' => '',
        ));
    }
?>