<?php
    if( function_exists('acf_add_local_field_group') ){

        acf_add_local_field_group(array (
            'key' => 'group_5b7c06a1afd15',
            'title' => 'Link Clube O2',
            'fields' => array (
                array (
                    'key' => 'field_5b7c06ab9ae45',
                    'label' => 'Link do Clube O2',
                    'name' => 'link_do_clube_o2',
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
                    'key' => 'field_5b7c012529172fc',
                    'label' => 'Valor Clube O2',
                    'name' => 'valorClubeO2',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => 'Insira de preferência um ponto ao invés de virgula',
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
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-evento-clube-o2',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));
    }
?>