<?php
    if( function_exists('acf_add_local_field_group') ){

        acf_add_local_field_group(array (
            'key' => 'group_5b7c052360752',
            'title' => 'Evento Clube O2',
            'fields' => array (
                array (
                    'key' => 'field_5b7c0529172fc',
                    'label' => 'Evento Clube O2',
                    'name' => 'evento_clube_o2',
                    'type' => 'true_false',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array (
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 1,
                    'ui' => 1,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
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
            'style' => 'toggle_switch',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));
    }
?>