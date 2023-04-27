<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'group_5eb450d5f23dsdadsa36dd',
        'title' => 'Compromisso Paralax',
        'fields' => array (
            array (
                'key' => 'field_5ca75f0cbdasds24sd130a',
                'label' => 'Ativar módulo',
                'name' => 'ativarCompromisso',
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
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array (
                'key' => 'field_5eb450deb0asdasd1asdasd58',
                'label' => 'Background Mobile',
                'name' => 'bgCompromissoMobile',
                'type' => 'image',
                'value' => NULL,
                'instructions' => 'Formato png.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasds24sd130a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_5eb4adas51sadadsaaeb015c',
                'label' => 'Background Desk',
                'name' => 'bgCompromissoDesk',
                'type' => 'image',
                'value' => NULL,
                'instructions' => 'Formato png.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasds24sd130a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array (
                'key' => 'field_5eb4511db02asdas313f159',
                'label' => 'Titulo',
                'name' => 'textoModuloCompromisso',
                'type' => 'text',
                'value' => NULL,
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasds24sd130a',
                            'operator' => '==',
                            'value' => '1',
                        ),
                    ),
                ),
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
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
    ));
    
    endif;
?>