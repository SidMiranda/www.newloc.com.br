<?php
	/*
	*  Registrando paginas em opções do tema'
	*/

	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
		'page_title'  => 'Opções do Tema',
			'menu_title'	=> 'Opções do Tema',
			'menu_slug' 	=> 'opcoes-do-tema',
			'capability'	=> 'edit_theme_options',
			'position'		=> 2,
		));

		acf_add_options_sub_page(array(
			'page_title' 	=> 'Favicon',
			'menu_title'	=> 'Favicon',
			'parent_slug'	=> 'opcoes-do-tema',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Redes Sociais',
			'menu_title'	=> 'Redes Sociais',
			'parent_slug'	=> 'opcoes-do-tema',
		));
		
	}

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title'  => 'Conteúdo padrão',
			'menu_title'	=> 'Conteúdo padrão',
			'menu_slug' 	=> 'conteudos-do-tema',
			'capability'	=> 'edit_theme_options',
			'position'		=> 3,
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Informações',
			'menu_title'	=> 'Informações',
			'parent_slug'	=> 'conteudos-do-tema',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Pin Santander',
			'menu_title'	=> 'Pin Santander',
			'parent_slug'	=> 'conteudos-do-tema',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Patrocinadores',
			'menu_title'	=> 'Patrocinadores',
			'parent_slug'	=> 'conteudos-do-tema',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Vídeo',
			'menu_title'	=> 'Vídeo',
			'parent_slug'	=> 'conteudos-do-tema',
		));		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Newsletter',
			'menu_title'	=> 'Newsletter',
			'parent_slug'	=> 'conteudos-do-tema',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Percurso Video',
			'menu_title'	=> 'Percurso',
			'parent_slug'	=> 'conteudos-do-tema',
		));
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'conteudos-do-tema',
		));			
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Modal Ficha Técnica',
			'menu_title'	=> 'Modal Ficha Técnica',
			'parent_slug'	=> 'conteudos-do-tema',
		));			
	}
?>