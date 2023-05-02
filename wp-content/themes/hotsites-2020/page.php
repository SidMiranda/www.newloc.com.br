<?php get_header();
error_reporting(0); ?>
<main id="etapa">

    <!-- Definir a ordem dos módulos -->
    <?php
    $eventoRealizado = get_field('evento_realizado');
    if (!$eventoRealizado) {
        include 'modulos/header-block.php';
        include 'modulos/banner.php';
        include 'modulos/banner-logos.php';
        include 'modulos/sobre.php';
        include 'modulos/paralax1.php';
        include 'modulos/sliderInfo.php';
				include 'modulos/paralax2.php';
        include 'modulos/informacoes-2-colunas.php';
        include 'modulos/skate.php';
        include 'modulos/kits-caroussel.php';
        include 'modulos/percurso-video.php';
        include 'modulos/rodape-logos.php';
        include 'modulos/modal-grupos.php';
        include 'modulos/pin-santander.php';
    } else {
        // Pós Evento
        include 'modulos/header-posEvento.php';
        include 'modulos/posEvento.php';
    }
    ?>
    <?php include 'modulos/newsletter.php'; ?>
    <?php include 'modulos/footer-basico.php'; ?>
</main>
<?php get_footer(); ?>