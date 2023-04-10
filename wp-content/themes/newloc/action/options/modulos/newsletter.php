<?php
    // $site_origem = json_decode(file_get_contents('https://news.ativo.com/api/newsorigem'),true);

    // foreach ($site_origem as $origems){
    //     $origem_id = $origems["id"];
    //     $nome_origem = $origems["name"].' - '.$origems["id"];
    //     $optionOrigem[$origem_id] = $nome_origem;
    // }
    if( function_exists('acf_add_local_field_group') ){

        acf_add_local_field_group(array (
            'key' => 'group_5babd57f204e5',
            'title' => 'Newsletter',
            'fields' => array (
                array (
                    'key' => 'field_5babd627f79f2',
                    'label' => 'Ativar módulo',
                    'name' => 'ativarNewsletter',
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
            ),
            'location' => array (
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'default',
                    ),
                ),
                array (
                    array (
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'page-cidade.php',
                    ),
                ),
            ),
            'menu_order' => 20,
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