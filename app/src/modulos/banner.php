<?php
$ativarModulo = get_field("ativarBanner", $post->ID);
if ($ativarModulo) {
    $etapa = get_field("etapa", $post->ID);
    $bgBannerHD = get_field("bgBannerHD", $post->ID);
    $bgMobileBanner = get_field("bgMobileBanner", $post->ID);

    $iconWhatsapp = get_field("iconWhatsapp", $post->ID);

    $imagemTitulo = get_field("logoEventoBanner", $post->ID);
    $primeiraFraseTitulo = get_field("primeiraFraseTitulo", $post->ID);
    $segundaFraseTitulo = get_field("segundaFraseTitulo", $post->ID);
    
    $textoBanner = get_field("textoBanner", $post->ID);
    
    $logoMinisterio = get_field("logosPatrocinio", $post->ID);

    $textoBotao = get_field("textoInscrevasseBanner", $post->ID);
    $linkBotao = get_field("linkInscrevasseBanner", $post->ID);


    
?>

    <section id="banner" class="<?php echo $etapa; ?>">
        <div class="bgWrapper">
            <div class="mobile">
                <?php foreach($bgMobileBanner as $bgMobile){ 
                    $background = $bgMobile["background"];
                ?>
                    <img src="<?php echo $background; ?>" alt="Background">
                <?php } ?>
            </div>
            <div class="hd">
                <?php foreach($bgBannerHD as $bgHD){ 
                    $background = $bgHD["background"];
                ?>
                    <img src="<?php echo $background; ?>" alt="Background">
                <?php } ?>
            </div>
        </div>

        <!-- <img src="<?php echo $seloGratuito; ?>" alt="Evento Gratuíto" class="free-label"> -->

        <div class="container">
            <div class="content-wrapper">
                <div class="title-wrapper">
                    <img src="<?php echo $imagemTitulo; ?>" class="banner-logo" alt="logoEventoBanner">
                    <!-- <h2 class="first-phrase"><?php echo $primeiraFraseTitulo; ?></h2>
                    <h2 class="second-phrase"><?php echo $segundaFraseTitulo; ?></h2> -->
                </div>
                <p class="text"><?php echo $textoBanner; ?></p>
                <a href="<?php echo $linkBotao; ?>" class="subscription-button"><img src="<?php echo $iconWhatsapp; ?>"><?php echo $textoBotao; ?></a>
                <img src="<?php echo $logoMinisterio; ?>" alt="Logos Ministério" class="ministry-logo">
            </div>
        </div>
        
    </section>

<?php } ?>