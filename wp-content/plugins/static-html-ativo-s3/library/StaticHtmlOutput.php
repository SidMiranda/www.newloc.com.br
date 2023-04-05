<?php
/**
 * @package Static HTML Ativo S3
 *
 * Copyright (c) 2011 Leon Stafford
 */

class StaticHtmlOutput {
	const VERSION = '1.9';
	const OPTIONS_KEY = 'wp-static-html-ativo-s3-options';
	const HOOK = 'wp-static-html-ativo-s3';
	
	protected static $_instance = null;
	
	protected $_options = null;
	
	protected $_view = null;
	
	protected $_exportLog = array();
	
	protected function __construct() {}
	
	protected function __clone() {}
	
	public static function getInstance() {
		if (null === self::$_instance) {
			self::$_instance = new self();
			self::$_instance->_options = new StaticHtmlOutput_Options(self::OPTIONS_KEY);
			self::$_instance->_view = new StaticHtmlOutput_View();
		}
		
		return self::$_instance;
	}
	
	public static function init($bootstrapFile) {
		$instance = self::getInstance();
		
		register_activation_hook($bootstrapFile, array($instance, 'activate'));
		
		if (is_admin()) {

			add_action( 'wp_dashboard_setup', array($instance,'dashboard_static_html_s3' ) );
			add_action('admin_menu', array($instance, 'registerOptionsPage'));
			add_action(self::HOOK . '-saveOptions', array($instance, 'saveOptions'));
		}
		
		return $instance;
	}

	public function dashboard_static_html_s3() {

		echo '<style>
		form.options-form-static-html, h2.title_init_static_html { display:none; }
		.box_export_default_static_html { border:0 none !important; }
		.box_export_default_static_html .submit {  margin-top: -43px !important; }
		.box_export_default_static_html .wpsho-export-log { overflow: scroll; height: 200px; }
		</style>';

		$instance = self::getInstance();

		wp_add_dashboard_widget(
                 'dashboard_static_html_s3',         // Widget slug.
                 'Gerar HTML',         // Title.
                 array($instance,'renderOptionsPage') // Display function.
             );	
	}
	
	public function activate() {
		if (null === $this->_options->getOption('version')) {
			$this->_options
			->setOption('version', self::VERSION)
			->setOption('static_export_settings', self::VERSION)
			->save();
		}
	}
	
	public function registerOptionsPage() {
		$page = add_submenu_page('tools.php', __('Static HTML Ativo S3', 'static-html-ativo-s3'), __('Static HTML Ativo S3', 'static-html-ativo-s3'), 'manage_options', self::HOOK . '-options', array($this, 'renderOptionsPage'));
		add_action('admin_print_styles-' . $page, array($this, 'enqueueAdminStyles'));
	}
	
	public function enqueueAdminStyles() {
		$pluginDirUrl = plugin_dir_url(dirname(__FILE__));
		wp_enqueue_style(self::HOOK . '-admin', $pluginDirUrl . '/css/wp-static-html-ativo-s3.css');
	}
	
	public function renderOptionsPage() {
		// Check system requirements
		$directory_path = str_replace('wp-admin','',dirname($_SERVER['SCRIPT_FILENAME']));

		$directory_name = 'static_html';
		$uploadDir = WP_TEMP_DIR.'/'.$directory_name;
		// var_dump($uploadDir);
		$uploadsFolderWritable = $uploadDir && is_writable($uploadDir);
		$permalinksStructureDefined = strlen(get_option('permalink_structure'));

		do_action(self::HOOK . '-saveOptions');
		

		$this->_view
		->setTemplate('options-page')
		->assign('exportLog', $this->_exportLog)
		->assign('staticExportSettings', $this->_options->getOption('static-export-settings'))
		->assign('onceAction', self::HOOK . '-options')
		->render();
	}
	
	public function saveOptions() {
		if (!isset($_POST['action']) || 'generate' != $_POST['action']) {
			return;
		}
		
		if (!check_admin_referer(self::HOOK . '-options') || !current_user_can('manage_options')) {
			error_log('user didnt have permissions to change options');
			exit('You cannot change Static HTML Ativo S3 Plugin options.');
		}

		$this->_options
		->setOption('static-export-settings', filter_input(INPUT_POST, 'staticExportSettings', FILTER_SANITIZE_URL))
		->save();

		$message = 'Options have been updated successfully.';

		$this->_view->setTemplate('message')
		->assign('message', $message)
		->render();
	}

	public function genArch() {
		$archiveUrl = $this->_generateArchive();
		
		if (is_wp_error($archiveUrl)) {
			$message = 'Error: ' . $archiveUrl->get_error_code;
		} else {
			$message = sprintf('Verifique se o HTML está correto: <a target="_blank" href="'.filter_input(INPUT_POST, 'baseUrl', FILTER_SANITIZE_URL).'">'.filter_input(INPUT_POST, 'baseUrl', FILTER_SANITIZE_URL).'</a>', $archiveUrl);
			if ($this->_options->getOption('retainStaticFiles') == 1)
			{
				$message .= sprintf('<br />Static files retained at: %s/', str_replace(home_url(),'',substr($archiveUrl,0,-4)));
			}
		}
		
		$this->_view->setTemplate('message')
		->assign('message', $message)
		->assign('exportLog', $this->_exportLog)
		->render();
	}
	
	protected function _generateArchive()
	{
		global $blog_id;
		set_time_limit(0);

		$directory_path = str_replace('wp-admin','',dirname($_SERVER['SCRIPT_FILENAME']));
		$directory_name = 'static_html';
		
		$uploadDir = WP_TEMP_DIR.'/'.$directory_name;

		// $user_token = filter_input(INPUT_POST, 'ftpPassword');

		// $user_name = filter_input(INPUT_POST, 'ftpUsername');

		// $user_email = filter_input(INPUT_POST, 'ftpRemotePath');

		$exporter = wp_get_current_user();
		$archiveName = $uploadDir;
		$archiveDir = $archiveName . '/';
		if (!file_exists($archiveDir))
		{
			wp_mkdir_p($archiveDir);
		}else {
			die();
		}

		$baseUrl = untrailingslashit(home_url());
		$baseUrlUploadS301 = untrailingslashit(filter_input(INPUT_POST, 'baseUrlUploadS301', FILTER_SANITIZE_URL));
		$baseUrlUploadS302 = untrailingslashit(filter_input(INPUT_POST, 'baseUrlUploadS302', FILTER_SANITIZE_URL));
		$baseUrlUploadS303 = untrailingslashit(filter_input(INPUT_POST, 'baseUrlUploadS303', FILTER_SANITIZE_URL));
		$newBaseUrl = untrailingslashit(filter_input(INPUT_POST, 'baseUrl', FILTER_SANITIZE_URL));
		$urlsQueue = array_unique(array_merge(
			array(trailingslashit($baseUrl)),
			$this->_getListOfLocalFilesByUrl(array(get_template_directory_uri())),
			explode("\n", filter_input(INPUT_POST, 'additionalUrls'))
		));

		$this->_exportLog = array();

		while (count($urlsQueue))
		{
			$currentUrl = array_shift($urlsQueue);

			$urlResponse = new StaticHtmlOutput_UrlRequest($currentUrl, filter_input(INPUT_POST, 'cleanMeta'));

			if ($urlResponse->checkResponse() == 'FAIL') {
				error_log('Failed to get this file');
				error_log($currentUrl);
			} else {
                // Add current url to the list of processed urls
				$this->_exportLog[$currentUrl] = true;
			}

			$ambiente_repositorio = filter_input(INPUT_POST, 'nomeAmbiente');

            // TODO: shifting this block into above conditional prevents index containing error
            //       but doesn't crawl all folders...
            //       alternatively, index.html contains 'F' from 'FAIL or 'Failed to get...'

            // TODO: this shouldnt be part of urlrequest, just general settings
            // add conditional logic here whether to do cleanup, vs in each request?
			if($ambiente_repositorio == "production"){
				$urlResponse->cleanupProduction();
			}else {
				$urlResponse->cleanup();

			}

            // get all other urls from within this one and add to queue if not there
			foreach ($urlResponse->extractAllUrls($baseUrl) as $newUrl) {
				if (!isset($this->_exportLog[$newUrl]) && $newUrl != $currentUrl && !in_array($newUrl,$urlsQueue)) {
					//echo "Adding ".$newUrl." to the list<br />";
					$urlsQueue[] = $newUrl;
				}
			}

			$urlResponse->replaceBaseUlr($baseUrl, $newBaseUrl);

			if(!empty($baseUrlUploadS301)){
				$urlResponse->replaceBaseUlr($baseUrlUploadS301, $newBaseUrl);
			}

			if(!empty($baseUrlUploadS302)){
				$urlResponse->replaceBaseUlr($baseUrlUploadS302, $newBaseUrl);
			}

			if(!empty($baseUrlUploadS303)){
				$urlResponse->replaceBaseUlr($baseUrlUploadS303, $newBaseUrl);
			}
			
			$this->_saveUrlData($urlResponse, $archiveDir);
		}

		// $tempZip = $archiveName . '.tmp';
		// $zipArchive = new ZipArchive();
		// if ($zipArchive->open($tempZip, ZIPARCHIVE::CREATE) !== true) {
		// 	return new WP_Error('Could not create archive');
		// }

		$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($archiveDir));
		foreach ($iterator as $fileName => $fileObject) {
			$baseName = basename($fileName);
			if($baseName != '.' && $baseName != '..') {
				// if (!$zipArchive->addFile(realpath($fileName), str_replace($archiveDir, '', $fileName))) {
				// 	return new WP_Error('Could not add file: ' . $fileName);
				// }
			}
		}

		// $zipArchive->close();
		// rename($tempZip, $archiveName . '.zip'); 

		// rmdir($archiveDir.'.git');

		// die($archiveDir.'.git');

		$commit_repositorio = filter_input(INPUT_POST, 'ftpServer');


		$content = 'HTML - '.$commit_repositorio;
		$fp = fopen($archiveDir . "commit.txt","wb");
		fwrite($fp,$content);
		fclose($fp);

		$content = $ambiente_repositorio;
		$fp = fopen($archiveDir . "ambiente.txt","wb");
		fwrite($fp,$content);
		fclose($fp);

	}

	protected function _getListOfLocalFilesByUrl(array $urls)
	{
		$files = array();

		foreach ($urls as $url) {

			$directory = str_replace(home_url('/'), ABSPATH, $url);

            // checking if url contains the WP site url at first position and is a directory
			if (stripos($url, home_url('/')) === 0 && is_dir($directory)) {
				$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
				foreach ($iterator as $fileName => $fileObject) {

					if (is_file($fileName)) {
						$pathinfo = pathinfo($fileName);
						if (isset($pathinfo['extension']) && !in_array($pathinfo['extension'], array('php', 'phtml', 'tpl'))) {
							array_push($files, home_url(str_replace(ABSPATH, '', $fileName)));
						}
					}
				}
			} else {
                // if is not empty, add full path to $files list
				if ($url != '') {
					array_push($files, $url);
				}
			}
		}

		return $files;
	}

	protected function _saveUrlData(StaticHtmlOutput_UrlRequest $url, $archiveDir) {
		$urlInfo = parse_url($url->getUrl());
		$pathInfo = pathinfo(isset($urlInfo['path']) && $urlInfo['path'] != '/' ? $urlInfo['path'] : 'index.html');

		// Prepare file directory and create it if it doesn't exist
		$fileDir = $archiveDir . (isset($pathInfo['dirname']) ? $pathInfo['dirname'] : '');

		if (empty($pathInfo['extension']) && $pathInfo['basename'] == $pathInfo['filename']) {
			$fileDir .= '/' . $pathInfo['basename'];
			$pathInfo['filename'] = 'index';
		}

		if (!file_exists($fileDir)) {
			wp_mkdir_p($fileDir);
		}

		$fileExtension = ($url->isHtml() || !isset($pathInfo['extension']) ? 'html' : $pathInfo['extension']);
		$fileName = $fileDir . '/' . $pathInfo['filename'] . '.' . $fileExtension;
		$fileContents = $url->getResponseBody();
        // TODO: fix for unclear issue on PHP5.3
		if ($fileContents != '' && $fileContents != 'F') {
			file_put_contents($fileName, $fileContents);
		} else {
			error_log($pathInfo['filename']);
			error_log('response body was empty');
		}
	}
}