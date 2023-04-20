<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'group_5eb450d5f23d36dd',
        'title' => 'Sobre o Evento Esquerda',
        'fields' => array (
            array (
                'key' => 'field_5ca75f0cbdasd4sd130a',
                'label' => 'Ativar módulo',
                'name' => 'ativarSobreEvento',
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
                'key' => 'field_5eb450deb01asdasd58',
                'label' => 'Background Mobile',
                'name' => 'background_mobile_sobre',
                'type' => 'image',
                'value' => NULL,
                'instructions' => 'Formato png.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'key' => 'field_5eb4adas51aeb015c',
                'label' => 'Background Desk',
                'name' => 'background_desk_sobre',
                'type' => 'image',
                'value' => NULL,
                'instructions' => 'Formato png.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'key' => 'field_5eb451aeadasdb01asf5c',
                'label' => 'Background Desk Faixas',
                'name' => 'faixas_desk',
                'type' => 'image',
                'value' => NULL,
                'instructions' => 'Formato png.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'key' => 'field_5eb45d1aeb01adasasfsdv5c',
                'label' => 'Background mobile Faixas',
                'name' => 'faixas_mobile',
                'type' => 'image',
                'value' => NULL,
                'instructions' => 'Formato png.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'key' => 'field_5eb4518db123f015b',
                'label' => 'Card Sobre o Evento',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_5eb4511db02313f159',
                'label' => 'Titulo',
                'name' => 'titulo_sobre',
                'type' => 'text',
                'value' => NULL,
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
            array (
                'key' => 'field_5eb45ds13eb01523131a',
                'label' => 'Texto Sobre o evento',
                'name' => 'texto_sobre_o_evento',
                'type' => 'textarea',
                'value' => NULL,
                'instructions' => 'utilize < strong > para negrito.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array (
                'key' => 'field_5eb4adsasd513ebfsdfa01das3215a',
                'label' => 'Texto Sobre o evento mobile',
                'name' => 'texto_sobre_o_evento_mobile',
                'type' => 'textarea',
                'value' => NULL,
                'instructions' => 'utilize < strong > para negrito.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array (
                'key' => 'field_5eb451d6213213292f5',
                'label' => 'Card Solidariza-se',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array (
                'key' => 'field_5eb451edasdasda9292f6',
                'label' => 'Icone',
                'name' => 'icone',
                'type' => 'image',
                'value' => NULL,
                'instructions' => 'formato da imagem em svg.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'key' => 'field_5eb4522729asdadsa2f7',
                'label' => 'Titulo',
                'name' => 'titulo_solidarize',
                'type' => 'text',
                'value' => NULL,
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
            array (
                'key' => 'field_5eb45252asdasd292f9',
                'label' => 'Texto Solidarize-se',
                'name' => 'texto_solidarize',
                'type' => 'textarea',
                'value' => NULL,
                'instructions' => 'utilize < strong > para negrito.',
                'required' => 0,
                'conditional_logic' => array (
                    array (
                        array (
                            'field' => 'field_5ca75f0cbdasd4sd130a',
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
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
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