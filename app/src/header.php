<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<meta name="theme-color" content="#000">
	<meta name="author" content="Norte marketing esportivo">

	<title><?php the_title(); ?></title>

	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<script> var exports = {}; </script>
	<!-- FAVICON -->
	<?php 
		$favicon = get_field('faviconTapume', 'option');

		$iconWhatsapp = get_field("iconWhatsapp", $post->ID);
	?>

	<link rel="icon" sizes="192x192" href="<?php echo $favicon; ?>">

	<link id="carregaJquery" rel="preload" href="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js" as="script">
	<script type="text/javascript" src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>

	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MSZJ2K');</script>
	<!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSZJ2K"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<a href="https://api.whatsapp.com/send?phone=5511981349241" style="position:fixed; bottom:55px; right:55px; z-index: 1000;" target="_blank">
		<img src="<?php echo $iconWhatsapp; ?>" style="width:60px; height:60px;"/>
	</a>