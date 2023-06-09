<?php
    if( function_exists('acf_add_local_field_group') ){

        acf_add_local_field_group(array (
            'key' => 'group_5bab95303ab51',
            'title' => 'Cards informações',
            'fields' => array (
                array (
                    'key' => 'field_5bab963e27884',
                    'label' => 'Ativar módulo',
                    'name' => 'ativarCardsInfo',
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
                array (
                    'key' => 'field_5bab965b27885',
                    'label' => 'Titulo menor do módulo',
                    'name' => 'tituloMenorCardsInfo',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5bab963e27884',
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
                    'key' => 'field_5bab96ee27886',
                    'label' => 'Titulo maior do módulo',
                    'name' => 'titulo_maior_do_modulo',
                    'type' => 'text',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5bab963e27884',
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
                    'key' => 'field_5bab974c27887',
                    'label' => 'Cards',
                    'name' => 'cardsInfo',
                    'type' => 'repeater',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array (
                        array (
                            array (
                                'field' => 'field_5bab963e27884',
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
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 3,
                    'layout' => 'row',
                    'button_label' => '',
                    'sub_fields' => array (
                        array (
                            'key' => 'field_5bab996927888',
                            'label' => 'Tipo da informação',
                            'name' => 'tipoInfo',
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
                            'ui_on_text' => 'Padrão',
                            'ui_off_text' => 'Customizada',
                        ),
                        array (
                            'key' => 'field_5bab999f27889',
                            'label' => 'Label do card',
                            'name' => 'label',
                            'type' => 'text',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array (
                                array (
                                    array (
                                        'field' => 'field_5bab996927888',
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
                            'key' => 'field_5bab9cb32788a',
                            'label' => 'Background do card',
                            'name' => 'background',
                            'type' => 'image',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array (
                                array (
                                    array (
                                        'field' => 'field_5bab996927888',
                                        'operator' => '!=',
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
                            'key' => 'field_5bab9cdb2788b',
                            'label' => 'Titulo do card',
                            'name' => 'titulo',
                            'type' => 'text',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array (
                                array (
                                    array (
                                        'field' => 'field_5bab996927888',
                                        'operator' => '!=',
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
                            'key' => 'field_5bab9cf72788c',
                            'label' => 'Icone destaque do card',
                            'name' => 'icone',
                            'type' => 'image',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array (
                                array (
                                    array (
                                        'field' => 'field_5bab996927888',
                                        'operator' => '!=',
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
                            'key' => 'field_5bab9d1a2788d',
                            'label' => 'Texto do card',
                            'name' => 'texto',
                            'type' => 'textarea',
                            'value' => NULL,
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array (
                                array (
                                    array (
                                        'field' => 'field_5bab996927888',
                                        'operator' => '!=',
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
            'menu_order' => 16,
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