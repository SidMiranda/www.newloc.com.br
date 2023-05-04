<?php 
    $ativarModulo = get_field("ativarSliderInfos", $post->ID);
    if($ativarModulo){
        $tituloSliderInfo = get_field("tituloSliderInfo", $post->ID);
        $imgEventoTods = get_field("imgSetas", $post->ID);
        $infosSlider = get_field("infosSlider", $post->ID);
        $bgDesk = get_field("background_slider_info_desk", $post->ID);
        $bgMobile = get_field("background_slider_info_mobile", $post->ID);
?>
    <section id="slider-infos">
        <div class="bg">
            <?php if($bgDesk){ ?>
                <img src="<?php echo $bgDesk; ?>" alt="Background Slider Infos" class="hidden-xs">
            <?php } ?>
            <?php if($bgMobile){ ?>
                <img src="<?php echo $bgMobile; ?>" alt="Background Slider Infos" class="hidden-lg">
            <?php } ?>
        </div>
        <h1 class="hidden-xs"><?php echo $tituloSliderInfo; ?></h1>
        <div class="container">
                <div class="info-titulo-mobile hidden-lg">
                    <h2><?php echo $tituloSliderInfo; ?></h2>
                    <img src="<?php echo $imgEventoTods; ?>">
                </div>
            <?php foreach($infosSlider as $info){ ?>
                <?php 
                    $background = $info["background"];
                    $tituloIcons = $info["tituloIcons"];    
                    $texto = $info["texto"];    
                ?>
                <div class="info">
                    <img src="<?php echo $background; ?>" alt="Background Info" class="bg">
                    <!-- <h3 class="hidden-xs"><?php echo $tituloIcons; ?></h3> -->
                    <div class="hover">
                        <h3><?php echo $tituloIcons; ?></h3>
                        <?php if ($texto) { ?>
                            <p><?php echo $texto; ?></p>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <a class="hidden-lg" href="#" target="_blank" rel="noopener noreferrer">Veja Mais</a>
        </div>
				<a class="hidden-xs" href="#" target="_blank" rel="noopener noreferrer">Veja Mais</a>

    </section>
<?php } ?>