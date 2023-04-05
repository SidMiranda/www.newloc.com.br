<?php
    if( function_exists('acf_add_local_field_group') ){

        acf_add_local_field_group(array (
            'key' => 'group_5bb66e9f69e2c',
            'title' => 'Data do evento',
            'fields' => array (
                array (
                    'key' => 'field_5bb66ebe2c1ed',
                    'label' => 'Dia',
                    'name' => 'diaEvento',
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
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
                ),
                array (
                    'key' => 'field_5bb66ece2c1ee',
                    'label' => 'Ano',
                    'name' => 'anoEvento',
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
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'maxlength' => '',
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