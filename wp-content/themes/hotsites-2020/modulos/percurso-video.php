<?php
    $ativarModulo = get_field('ativarPercursoVideo', $post->ID);
    if($ativarModulo){

        $imagemMobileBg = get_field('imgMapaMobBg', $post->ID);

        $tituloModuloPercuso = get_field('tituloModuloPercuso', $post->ID);
        
        $tituloCardPercuso = get_field('tituloCardPercuso', $post->ID);

        $iconeCard = get_field('iconCardMapa', $post->ID);


        $imagemBreve = get_field('emBreve', $post->ID);
        $imagemBreveMobile = get_field('emBreveMobile', $post->ID);

        $linkMapa = get_field('linkMapa', $post->ID);

        // $iconToggleMapa = '<img src="" data-svg="'.get_field('imgToggleMap', $post->ID).'" class="svg" >';
        $iconToggleMapa = get_field('imgToggleMap', $post->ID);
        
        $textoHover = get_field('texto_de_hover_do_iframe', $post->ID);

        $iframes = get_field('iframes', $post->ID);
        $tipoLegenda = get_field('tipoLegenda', $post->ID);

?>
    <section id="percurso" class="percursos padding-section-menor">
        
        <input type="checkbox" id="abreCardPercurso" class="card">
        <label for="abreCardPercurso">
            <span class="card-link mobile-cards" data-card="percurso">
                <div class="figure">
                    <img src="" data-svg="<?php echo $iconeCard; ?>" alt="Percurso/Recorrido" class="svg">
                </div>
                <h2><?php echo $tituloCardPercuso; ?></h2>
            </span>
        </label>
        
        <div class="card-content" data-card="percurso">

            <header class="header-section">
                <div class="titulos">
                    <h1><?php echo $tituloModuloPercuso; ?></h1>
                </div>
            </header>
            
            <div class="navigation">
                <?php foreach($iframes as $i => $iframe){ ?>
                    <a href="<?php echo $iframe["linkBotao"]; ?>" target="_blank" rel="noopener noreferrer"><?php echo $iframe["textoBotao"]; ?></a>
                <?php } ?>
            </div>

            <div class="iframes">

                <input type="checkbox" id="acessaPercurso">

                <div class="percursos">
                    
                    <div class="iframe">
                        <?php if(!$linkMapa){ ?>
                            <div class="imagem-breve"></div>
                        <?php }else{ ?>
                            <div>
                                <input type="checkbox" id="shadow-iframe" checked>
                                <label for="shadow-iframe" class="shadow-iframe">
                                    <span>
                                        <!-- <img src="" data-svg="<?php echo $iconToggleMapa; ?>" alt="Pointer" class="svg"> -->
                                        <span><?php echo $textoHover; ?></span>
                                    </span>
                                </label>
                                <iframe id="percurso-<?php echo $i; ?>" src="<?php echo $linkMapa; ?>"></iframe>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #percurso .card-link{ <?php if($imagemMobileBg){ ?> background-image: url(<?php echo $imagemMobileBg; ?>); <?php } ?> }
            #percurso .card-content .imagem-breve{ <?php if($imagemBreve) { ?> background-image: url(<?php echo $imagemBreve; ?>); <?php } ?> }
        </style>
    </section>
<?php } ?>