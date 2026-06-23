<?php
/**
 * Funções do tema Paróquia Mãe dos Homens.
 *
 * @package maedoshomens
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Impede acesso direto.
}

/**
 * Configurações básicas do tema.
 */
function mdh_setup() {
	add_theme_support( 'title-tag' );          // WordPress gera a tag <title>.
	add_theme_support( 'post-thumbnails' );    // Imagem destacada.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support(
		'html5',
		array( 'search-form', 'gallery', 'caption', 'style', 'script' )
	);

	// Local de menu (opcional — o menu atual continua fixo no header).
	register_nav_menus(
		array(
			'principal' => __( 'Menu Principal', 'maedoshomens' ),
		)
	);
}
add_action( 'after_setup_theme', 'mdh_setup' );

/**
 * Carrega CSS e JS (fontes, Font Awesome, tema e script principal).
 */
function mdh_assets() {
	$versao = wp_get_theme()->get( 'Version' );

	// Google Fonts.
	wp_enqueue_style(
		'mdh-google-fonts',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400;700;900&display=swap',
		array(),
		null
	);

	// Font Awesome.
	wp_enqueue_style(
		'mdh-fontawesome',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
		array(),
		'6.5.1'
	);

	// Folha de estilo do tema (style.css).
	wp_enqueue_style( 'mdh-style', get_stylesheet_uri(), array(), $versao );

	// Script principal (menu, slider, scroll, fade-in) — carregado no rodapé.
	wp_enqueue_script(
		'mdh-main',
		get_template_directory_uri() . '/js/main.js',
		array(),
		$versao,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'mdh_assets' );
