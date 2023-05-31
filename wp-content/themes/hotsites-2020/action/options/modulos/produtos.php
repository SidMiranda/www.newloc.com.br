<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'group_5eb89850d59aa6dd',
        'title' => 'Produtos',
        'fields' => array (
            array (
                'key' => 'field_5ca9990cbdasd1sd430a',
                'label' => 'Ativar módulo',
                'name' => 'ativarProdutosRep',
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
							'key' => 'field_5babc9aa2dsf55fdc',
							'label' => 'Dupla Faixa Produtos',
							'name' => 'dupla_faixa_produtos',
							'type' => 'repeater',
							'value' => NULL,
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => array (
									array (
											array (
													'field' => 'field_5ca9990cbdasd1sd430a',
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
							'max' => 0,
							'layout' => 'table',
							'button_label' => '',
							'sub_fields' => array (
								array (
									'key' => 'field_5ccb221aeb015c',
									'label' => 'Foto Produto',
									'name' => 'foto_produto',
									'type' => 'image',
									'value' => NULL,
									'required' => 0,
									'conditional_logic' => array (
											array (
													array (
															'field' => 'field_5ca9990cbdasd1sd430a',
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
										'key' => 'field_5eb4557db0159',
										'label' => 'Titulo',
										'name' => 'titulo_produto',
										'type' => 'text',
										'value' => NULL,
										'instructions' => '',
										'required' => 0,
										'conditional_logic' => array (
												array (
														array (
																'field' => 'field_5ca9990cbdasd1sd430a',
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
										'key' => 'field_5eb45587b015a',
										'label' => 'Texto produto',
										'name' => 'texto_produto',
										'type' => 'textarea',
										'value' => NULL,
										'required' => 0,
										'conditional_logic' => array (
												array (
														array (
																'field' => 'field_5ca9990cbdasd1sd430a',
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
									'key' => 'field_5eb222aeb015c',
									'label' => 'Foto Produto2',
									'name' => 'foto_produto2',
									'type' => 'image',
									'value' => NULL,
									'required' => 0,
									'conditional_logic' => array (
											array (
													array (
															'field' => 'field_5ca9990cbdasd1sd430a',
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
									'key' => 'field_5eb4565d88159',
									'label' => 'Titulo Produto 2',
									'name' => 'titulo_produto2',
									'type' => 'text',
									'value' => NULL,
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => array (
											array (
													array (
															'field' => 'field_5ca9990cbdasd1sd430a',
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
									'key' => 'field_5eb4555eb015a',
									'label' => 'Texto Sobre o produto2',
									'name' => 'texto_produto2',
									'type' => 'textarea',
									'value' => NULL,
									'required' => 0,
									'conditional_logic' => array (
											array (
													array (
															'field' => 'field_5ca9990cbdasd1sd430a',
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