<?php
    $ativarModulo = get_field("ativarSkate", $post->ID);
    if($ativarModulo){
        
        $iconCardLink = get_field("icon_card_link", $post->ID);
        $titleCardLink = get_field("titulo_card_link_skate", $post->ID);

        $bgDeskHD = get_field("bg_desk_skate_hd", $post->ID);
        $bgCardLink = get_field("bg_card_link", $post->ID);
        $bgMobile = get_field("bg_mobile", $post->ID);
        $bgDeskFullHD = get_field("bg_desk_skate_fullhd", $post->ID);

        $titleSkate = get_field("titulo_skate", $post->ID);
        $descriptionSkate = get_field("descricao_skate", $post->ID);
        $imgCheckMobile = get_field("img_check_mobile", $post->ID);
        $imgSkateDesk = get_field("img_skate_desk", $post->ID);
        
        $textButtonKit = get_field("texto_botao_kit_skate", $post->ID);
        $linkButtonKit = get_field("link_botao_kit_skate", $post->ID);

        $textButtonRecord = get_field("texto_botao_ficha_skate", $post->ID);
        $bgRecord = get_field("bg_ficha_skate", $post->ID);
        $titleRecord = get_field("titulo_ficha_skate", $post->ID);
        $infosRecord = get_field("infos_ficha_skate", $post->ID);

?>
    <section id="skate">
        <div class="bgDesk hidden-xs">
            <img src="<?php echo $bgDeskHD; ?>" alt="Background" class="hd">
            <img src="<?php echo $bgDeskFullHD; ?>" alt="Background" class="fullhd">
        </div>
        <div class="container">
            <input type="checkbox" id="abreCardSkate" class="card">
            <label for="abreCardSkate" class="hidden-lg card-skate">
                <span class="card-link" data-card="skate">
                    <div class="bgCardLink hidden-lg">
                        <img src="<?php echo $bgCardLink; ?>" alt="Background" class="imgCardLink">
                    </div>
                    <div class="icon"><img src="" data-svg="<?php echo $iconCardLink; ?>" alt="Skate" class="svg"></div>
                    <h2><?php echo $titleCardLink; ?></h2>
                </span>
            </label>
            <div class="card-content hidden-lg" data-card="sk8">
                <div class="content-mobile hidden-lg">
                    <div class="bgMobile hidden-lg">
                        <img src="<?php echo $bgMobile; ?>" alt="Background" class="mobile">
                    </div>      
                    <input type="checkbox" id="openSkateRecordMobile" class="input-record">
                    <h2 class="title"><?php echo $titleSkate; ?></h2>
                    <div class="infos-wrapper">
                        <?php foreach($infosRecord as $infoRecord){ 
                            $textInfo = $infoRecord["texto"];
                            $imgCheckMobile = $infoRecord["img_check_mobile"];
                        ?>
                            <div class="info">
                                <img src="" data-svg="<?php echo $imgCheckMobile; ?>" alt="imagem check" class="svg">
                                <p class="text"><?php echo $textInfo; ?></p>  
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="content-desk hidden-xs">
                <input type="checkbox" id="openSkateRecordDesk" class="input-record">
                <div class="content-wrapper">
                    <div class="text-wrapper">
                        <h2 class="title"><?php echo $titleSkate; ?></h2>
                        <div class="infos-wrapper">
                                <?php foreach($infosRecord as $infoRecord){ 
                                    $textInfo = $infoRecord["texto"];
                                    $imgCheckMobile = $infoRecord["img_check_mobile"];
                                ?>
                                    <div class="info">
                                        <img src="" data-svg="<?php echo $imgCheckMobile; ?>" alt="imagem check" class="svg">
                                        <p class="text"><?php echo $textInfo; ?></p>  
                                    </div>
                                <?php } ?>
                        </div>
                </div>
                <!-- <a href="<?php echo $linkButtonKit; ?>" class="button-kit"><?php echo $textButtonKit; ?></a>
                <div class="record-skate-desk">
                    <div class="bg">
                        <img src="<?php echo $bgRecord; ?>" alt="background">
                    </div>
                    <label for="openSkateRecordDesk" class="close-button"></label>
                    <h3 class="title-record"><?php echo $titleRecord; ?></h3>
                </div> -->
            </div>
        </div>
    </section>
<?php } ?>