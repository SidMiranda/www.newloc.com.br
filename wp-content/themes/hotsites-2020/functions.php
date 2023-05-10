<?php 

include_once("action/options/functions.php");
include_once("action/options/campos.php");
include_once("action/options/regulamento.php");
include_once("action/options/tapume.php");
include_once("action/options/dataEvento.php");
include_once("action/options/posevento.php");
include_once("action/options/duplicate.php");
include_once("action/options/idEvento.php");
$duplicate = new Duplicate;

//Conteúdo padrão dos módulos
include_once("action/options/padroes/patrocinadores.php");
include_once("action/options/padroes/informacoes.php");
include_once("action/options/padroes/pin-santander.php");
include_once("action/options/padroes/kits.php");
include_once("action/options/padroes/footer.php");
// include_once("action/options/padroes/video.php");
include_once("action/options/padroes/newsletter.php");
include_once("action/options/padroes/percurso.php");
include_once("action/options/padroes/modal-ficha-tecnica.php");

//Conteudo personalisado dos módulos
include_once("action/options/modulos/banner.php");
include_once("action/options/modulos/banner-logos.php");
include_once("action/options/modulos/bateria.php");
include_once("action/options/modulos/skate.php");
include_once("action/options/modulos/footer-basico.php");
include_once("action/options/modulos/header-block.php");
include_once("action/options/modulos/informacoes-2-colunas.php");
include_once("action/options/modulos/percurso-video.php");
include_once("action/options/modulos/kits-caroussel.php");
include_once("action/options/modulos/cards-info.php");
include_once("action/options/modulos/newsletter.php");
include_once("action/options/modulos/rodape-logos.php");
// include_once("action/options/modulos/video-banner.php");
include_once("action/options/modulos/sobre.php");
include_once("action/options/modulos/paralax.php");
include_once("action/options/modulos/sliderInfo.php");
// include_once("action/options/modulos/galeria.php");

//Conteudo personalisado dos módulos
include_once("action/options/api/postagens.php");

//removendo admin bar do theme

show_admin_bar(false);

//criando menus do tema

register_nav_menus( array(
	'header-menu' => 'Header Menu',
	'header-sub-menu' => 'Header Sub Menu',
	'footer-menu' => 'Footer Menu',
) );

add_theme_support( 'post-thumbnails' ); 

//adicionando scg no upload de imagens

function cc_mime_types($mimes) {
       $mimes['svg'] = 'image/svg+xml';
       return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param array $plugins 
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

wp_deregister_script('jquery');
