<?php
/*
Plugin Name: Static HTML Ativo S3
Plugin URI:  https://ativo.com
Description: Transforma o tema em uma pagina html statica e faz upload para o S3
Version:     1.0
Author:      Claudioweb (Claudio Campos)
Author URI:  https://ativo.com
Text Domain: static-html-ativo-s3

Copyright (c) 2017 Claudio Campos
 */

require_once 'library/StaticHtmlOutput/Exception.php';
require_once 'library/StaticHtmlOutput/Options.php';
require_once 'library/StaticHtmlOutput/View.php';
require_once 'library/StaticHtmlOutput/UrlRequest.php';
require_once 'library/StaticHtmlOutput.php';

StaticHtmlOutput::init(__FILE__);

function pluginActionLinks($links) 
{
	$settings_link = '<a href="tools.php?page=wp-static-html-ativo-s3-options">' . __('Confiturações', 'static-html-ativo-s3') . '</a>'; 
	array_unshift( $links, $settings_link ); 
	return $links; 	
}	

function initialise_localisation() {
	load_plugin_textdomain( 'static-html-ativo-s3', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' ); 
}

add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'pluginActionLinks');
add_action('plugins_loaded', 'initialise_localisation');
add_action( 'wp_ajax_generate_archive', 'generate_archive' );

function generate_archive() {
	$plugin = StaticHtmlOutput::getInstance();
	$plugin->genArch();
	wp_die();
}


require_once(__DIR__.'/library/aws/aws-autoloader.php');

$ACL = Aws\S3\Enum\CannedAcl::PRIVATE_ACCESS;


function UploadObject($S3, $Bucket, $Key, $Data, $ACL, $ContentType = "text/plain") {
	$Try   = 1;
	$Sleep = 1;
	do {
		try {
			$Model = $S3->PutObject(array('Bucket'      => $Bucket,
				'Key'         => $Key,
				'Body'        => $Data,
				'ACL'         => $ACL,
				'ContentType' => $ContentType));
			return true;
		}
		catch (Exception $e) {
			error_log($e->getMessage());
			print("Retry, sleep ${Sleep} - " . $e->getMessage() . "\n");
			sleep($Sleep);
			$Sleep *= 2;
		}
	}
	while (++$Try < 2);
	return false;
}

function UploadDirectory($S3, $Bucket, $dir, $siteroot) {
	$files = scandir($dir);
	foreach($files as $item){
		if($item != '.' && $item != '..'){
			$ContentType = GuessType($item);
			if(is_dir($dir.'/'.$item)) {
				UploadDirectory($S3, $Bucket, $dir.'/'.$item, $siteroot);
			} else if(is_file($dir.'/'.$item)) {
				$clean_dir = str_replace($siteroot, '', $dir.'/'.$item);

				$targetPath = $clean_dir;
				$f = file_get_contents($dir.'/'.$item);

				if($targetPath == '/index.html') {
				}

				UploadObject($S3, $Bucket, $targetPath, $f, Aws\S3\Enum\CannedAcl::PUBLIC_READ, $ContentType);
			} 
		}
	}
}


function GuessType($File) {
	$Info = pathinfo($File, PATHINFO_EXTENSION);
	switch (strtolower($Info))
	{
		case "jpg":
		case "jpeg":
		return "image/jpeg";
		case "png":
		return "image/png";
		case "gif":
		return "image/gif";
		case "htm":
		case "html":
		return "text/html";
		case "css":
		return "text/css";
		case "txt":
		return "text/plain";
		case "php":
		return "text/plain";
		case "":
		return "directory";
		default:
		return "text/plain";
	}
}

 //Nome da Action
$action_name = 's3_static_html';
  // Definindo action ajax
add_action('wp_ajax_'.$action_name, 'send_s3_static_html_ativo');
   // Definindo action para acesso público
add_action('wp_ajax_nopriv_'.$action_name, 'send_s3_static_html_ativo');

function send_s3_static_html_ativo(){
    // Definindo o retorno como JSON
	header( "Content-type: application/json");

	require_once(__DIR__.'/library/aws/aws-autoloader.php');

	$ACL = Aws\S3\Enum\CannedAcl::PRIVATE_ACCESS;

	$S3 = Aws\S3\S3Client::factory(array(
		'key'    => $_POST['s3Key'],
		'secret' => $_POST['s3Secret'],
		'region' => $_POST['s3Region']
	));

	$siteroot =  plugin_dir_path( __FILE__ ).'loading_ajax/';
	$Bucket = $_POST['s3Bucket'];

            // Upload the directory to the bucket
	UploadDirectory($S3, $Bucket, $siteroot, $siteroot);


}


