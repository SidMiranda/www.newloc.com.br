<?php
    $ativarModulo = get_field("ativarSobreEvento", $post->ID);
    if($ativarModulo){

        $background_mobile_sobre = get_field('background_mobile_sobre', $post->ID);
        $background_desk_sobre = get_field('background_desk_sobre', $post->ID);
        $faixas_desk = get_field('faixas_desk', $post->ID);
        $faixas_mobile = get_field('faixas_mobile', $post->ID);
        $titulo_sobre = get_field('titulo_sobre', $post->ID);
        $texto_sobre_o_evento = get_field('texto_sobre_o_evento', $post->ID);
        $texto_sobre_o_evento_mobile = get_field('texto_sobre_o_evento_mobile', $post->ID);
        $icone = get_field('icone', $post->ID);
        $titulo_solidarize = get_field('titulo_solidarize', $post->ID);
        $texto_solidarize = get_field('texto_solidarize', $post->ID);
        $iconeTitulo = get_field('iconeTitulo', $post->ID);

?>
    <section id="sobreEvento-esquerda">
        <div class="containerSobre">
            <h1 class="hidden-xs"><?php echo $titulo_sobre ?></h1>
            <div class="container">
                <div class="sobre">
                    <img src="<?php echo $background_mobile_sobre ?>" class="hidden-lg" alt="">
                    <img src="<?php echo $background_desk_sobre ?>" class="hidden-xs" alt="">
                    <div class="boxLaranja hidden-xs"></div>
                    <div class="cardEvento">
                        <h1 class="hidden-lg"><?php echo $titulo_sobre ?></h1>
                        <span class="hidden-xs"><?php echo $texto_sobre_o_evento ?></span>
                        <p class="hidden-lg"><?php echo $texto_sobre_o_evento_mobile ?></p>
                    </div>
                </div>
                <?php if($faixas_mobile) { ?>
                    <img src="<?php echo $faixas_mobile ?>" class="bgMobile hidden-lg" alt="">
                <?php } ?>
                <?php if($faixas_desk) { ?>
                    <img src="<?php echo $faixas_desk ?>" class="bgMaior hidden-xs" alt="">
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>