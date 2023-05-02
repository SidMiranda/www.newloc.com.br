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

				$background_mobile_sobre2 = get_field('background_mobile_sobre2', $post->ID);
        $background_desk_sobre2 = get_field('background_desk_sobre2', $post->ID);
        $faixas_desk2 = get_field('faixas_desk2', $post->ID);
        $faixas_mobile2 = get_field('faixas_mobile2', $post->ID);
        $titulo_sobre2 = get_field('titulo_sobre2', $post->ID);
        $texto_sobre_o_evento2 = get_field('texto_sobre_o_evento2', $post->ID);
        $texto_sobre_o_evento_mobile2 = get_field('texto_sobre_o_evento_mobile2', $post->ID);


?>
    <section id="sobreEvento">
        <div class="containerSobre">
            <div class="container">
                <h1 class="hidden-xs"><?php echo $titulo_sobre ?></h1>
                <div class="sobre esquerda">
                    <img src="<?php echo $background_mobile_sobre ?>" class="hidden-lg" alt="">
                    <div class="imgs-bg">
                        <img src="<?php echo $background_desk_sobre ?>" class="hidden-xs" alt="">
                        <div class="boxLaranja hidden-xs"></div>
                    </div>
                    <div class="cardEvento">
                        <h1 class="hidden-lg"><?php echo $titulo_sobre ?></h1>
                        <span class="hidden-xs"><?php echo $texto_sobre_o_evento ?></span>
                        <p class="hidden-lg"><?php echo $texto_sobre_o_evento_mobile ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerSobre direita">
            <div class="container">
                <h1 class="hidden-xs"><?php echo $titulo_sobre2 ?></h1>
                <div class="sobre">
                    <img src="<?php echo $background_mobile_sobre2 ?>" class="hidden-lg" alt="">
                    <div class="imgs-bg">
                        <img src="<?php echo $background_desk_sobre2 ?>" class="hidden-xs" alt="">
                        <div class="boxLaranja hidden-xs"></div>
                    </div>
                    <div class="cardEvento">
                        <h1 class="hidden-lg"><?php echo $titulo_sobre2 ?></h1>
                        <span class="hidden-xs"><?php echo $texto_sobre_o_evento2 ?></span>
                        <p class="hidden-lg"><?php echo $texto_sobre_o_evento_mobile2 ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>