<?php

	add_theme_support( 'post-thumbnails' );

	function registrar_projetos() {
		$descricao = 'Usado para listar os projetos da Empresa';
		$singular = 'Projeto';
		$plural = 'Projetos';
		$labels = array(
			'name' => $plural,
			'singular_name' => $singular,
			'view_item' => 'Ver ' . $singular,
			'edit_item' => 'Editar ' . $singular,
			'new_item' => 'Novo ' . $singular,
			'add_new_item' => 'Adicionar novo ' . $singular
		);
		$supports = array(
			'title',
			'editor',
			'thumbnail'
		);
		$args = array(
			'labels' => $labels,
			'description' => $descricao,
			'public' => true,
			'menu_icon' => 'dashicons-feedback',
			'supports' => $supports
		);
		register_post_type('projeto', $args);	
	}
	add_action('init', 'registrar_projetos');

	function get_titulo() {
		if( is_home() ) {
			bloginfo('name');
		} else {
			if (is_singular('projeto')){
				the_title();
			} else {
				bloginfo('name');
			}
		}
	}

?>