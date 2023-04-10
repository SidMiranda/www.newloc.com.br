<?php
    if( function_exists('acf_add_local_field_group') ){
        acf_add_local_field_group(array (
            'key' => 'group_5b8438712123e00b3d',
            'title' => 'Id do evento',
            'fields' => array (
                array (
                    'key' => 'field_5b84388129874d8',
                    'label' => 'idEvento',
                    'name' => 'idEvento',
                    'type' => 'text',
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
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'side',
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