<?php
    $ativarModulo = get_field('ativarKitsCaroussel', $post->ID);
    if($ativarModulo){
        
        $valorClubeO2 = get_field("valorClubeO2",'option');
        $titulo = get_field('tituloKitsCaroussel', $post->ID);
        $tituloMobile = get_field('tituloKitsCarousselMobile', $post->ID);
        $subtitulo = get_field('subTituloKitsCaroussel', $post->ID);
        $iconHover = get_field('iconeHover', $post->ID);
        $botaoQuero = get_field('botaoQuero', $post->ID);
        $bgFigure = get_field('bgFigure', $post->ID);
        $bgKit = get_field('bgKit', $post->ID);

        $modalCamisa = get_field('modalCamiseta', $post->ID);
            if($modalCamisa){
                $iconCamisa = get_field('iconCamiseta', $post->ID);
                $textoBotaoCamisa = get_field('textoLabelCamiseta', $post->ID);
                $modalCamisaDesk = get_field('imagemCamiseta', $post->ID);
                $modalCamisaMobi = get_field('imagemCamisetaMobile', $post->ID);
            }
        $modalJaqueta = get_field('modalJaqueta', $post->ID);
            if($modalJaqueta){
                $iconJaqueta = get_field('iconJaqueta', $post->ID);
                $textoBotaoJaqueta = get_field('textoLabelJaqueta', $post->ID);
                $modalJaquetaDesk = get_field('imagemJaqueta', $post->ID);
                $modalJaquetaMobi = get_field('imagemJaquetaMobile', $post->ID);
            }
        $kits = get_field('kitsCaroussel', $post->ID);
        $msgEsgotado = get_field('textoParaEsgotados', $post->ID);
        $msgGratis = get_field('textoParaGratis', $post->ID);

        $idEvento = get_field("idEvento", $post->ID);

        $txtMelhorOpcao = get_field("txtMelhorOpcao", $post->ID);
        $iconeMelhorOpcao = get_field("iconMelhorOpcao", $post->ID);
        ?>
    <section id="kits">
        
        <div class="bg">
            <img src="<?php echo $bgKit; ?>" alt="">
        </div>

        <div class="container">
            <input type="hidden" id="idEvento" value="<?php echo $idEvento; ?>">
            <div class="card-content" data-card="kits">
                <header>
                    <h1 class="hidden-lg"><?php echo $tituloMobile; ?></h1>
                    <h1 class="hidden-xs"><?php echo $titulo; ?></h1>
                    <h2><?php echo $subtitulo; ?></h2>
                </header>
                <div id="prevKit"></div>
                <div id="nextKit"></div>
                <input type="hidden" name="idEvento" class="idEvento" value="<?php echo $idEvento; ?>">
                <input type="hidden" name="valorClubeO2" class="valorClubeO2" value="<?php echo $valorClubeO2; ?>">
                <div class="kits">
                    <?php foreach($kits as $kit){ ?>
                        <?php
                            $tipoKit = $kit['kitPadrao'];
                            if($tipoKit == 'padrao'){
                                $label = $kit['labelKit'];
                                for($i=0;$i<count($kitsPadroes);$i++){
                                    if($label == $kitsPadroes[$i]["label"]){
                                        $tituloKit = $kitsPadroes[$i]['titulo'];
                                        $imagem = $kitsPadroes[$i]['imagem'];
                                        $descricao = $kitsPadroes[$i]['descricao'];
                                        break;
                                    }
                                }
                            }else{
                                $tituloKit = $kit['tituloKit'];
                                $imagem = $kit['imagem_do_kit'];
                                $descricao = $kit['descricaoKit'];
                            }
                            $clubeO2 = $kit['clubeO2']?'clubeO2':'';
                            $gratuito = $kit['gratis']?'gratis':'';
                            $melhorValor = $kit['melhorOpcao']? "melhor":'';
                            $tipoValor = $kit['tipo_de_valor']? "R$" : "$";
                            $idCategoria = $kit['idCategoria'];
                            $valorDe = $kit['valorDe'];
                            $valorPor = $kit['valorPor'];
                            $disponibilidade = $kit["disponibilidadeKit"]?"":"esgotado";
                            $valorPor = preg_split('/,/',$valorPor);
                            $link = $kit['linkKit'];
                        ?>
                        <div class="kit <?php echo $disponibilidade.' '.$clubeO2.' '.$gratuito.' '.$melhorValor; ?>" <?php echo $tipoKit; ?>>
                            <input type="hidden" name="idCategoria" class="idCategoria" value="<?php echo $idCategoria; ?>">
                            <h1><?php echo $tituloKit; ?></h1>
                            <div class="container">
                                <div class="figure">
                                    <div class="thumb">
                                        <img src="<?php echo $imagem; ?>" alt="<?php echo $tituloKit; ?>">
                                    </div>
                                </div>                
                                <div class="hover">
                                    <?php if($iconHover) { ?>
                                        <div class="icone">
                                            <img src="" data-svg="<?php echo $iconHover; ?>" alt="<?php echo $tituloKit; ?>" class="svg">
                                        </div>
                                    <?php } ?>
                                    <a href="<?php echo $link; ?>" target="_blank"><?php echo $botaoQuero; ?></a>
                                </div>
                                <div class="melhorOpcao">
                                    <img src="" data-svg="<?php echo $iconeMelhorOpcao; ?>" alt="<?php echo $txtMelhorOpcao; ?>" class="svg">
                                    <span><?php echo $txtMelhorOpcao; ?></span>
                                </div>
                                <div class="precos">
                                    <a href="<?php echo $link; ?>" target="_blank"><?php echo $botaoQuero; ?></a>
                                    <p class="desc"><?php echo $descricao; ?></p>
                                    <span class="valorDe">
                                        De <?php echo $tipoValor; ?> <span><?php echo $valorDe; ?></span> por
                                        Apenas
                                    </span>
                                    <span class="valorPor">
                                        <?php echo $tipoValor; ?><span class="valor"><strong><?php echo $valorPor[0]; ?></strong>,<span class="centavos"><?php echo $valorPor[1]; ?></span></span>
                                    </span>
                                </div>
                                <div class="msgEsgotado">
                                    <?php echo $msgEsgotado; ?>
                                </div>
                                <div class="msgGratis">
                                    <p class="desc"><?php echo $descricao; ?></p>
                                    <?php echo $msgGratis; ?>
                                </div>
                                <div class="descHover">
                                    <p class="desc"><?php echo $descricao; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="tamanhos">
                    <?php if($modalCamisa == 'sim'){ ?>
                        <label for="tamanho-camiseta">
                            <span>
                                <img src="" data-svg="<?php echo $iconCamisa; ?>" alt="<?php echo $textoBotaoCamisa; ?>" class="svg">
                                <span><?php echo $textoBotaoCamisa; ?></span>
                            </span>
                        </label>
                    <?php } 
                    if($modalJaqueta == 'sim'){ ?>
                        <label for="tamanho-jaqueta">
                            <span>
                                <img src="" data-svg="<?php echo $iconJaqueta; ?>" alt="<?php echo $textoBotaoCamisa; ?>" class="svg">
                                <span><?php echo $textoBotaoJaqueta; ?></span>
                            </span>
                        </label>
                    <?php } ?>
                </div>
            </div>
            <?php if($modalCamisa == 'sim'){ ?>
            <input type="checkbox" class="modal-tamanhos-input" id="tamanho-camiseta">
            <div class="modal-tamanhos modal-camiseta">
                <label for="tamanho-camiseta"></label>
                <img src="<?php echo $modalCamisaDesk; ?>" class="hidden-xs" alt="Tamanhos camiseta">
                <img src="<?php echo $modalCamisaMobi; ?>" class="hidden-lg" alt="Tamanhos camiseta">
            </div>
            <?php } 
            if($modalJaqueta == 'sim'){ ?>
                <input type="checkbox" class="modal-tamanhos-input" id="tamanho-jaqueta">
                <div class="modal-tamanhos modal-jaqueta">
                    <label for="tamanho-jaqueta"></label>
                    <img src="<?php echo $modalJaquetaDesk; ?>" class="hidden-xs" alt="Tamanhos camiseta">
                    <img src="<?php echo $modalJaquetaMobi; ?>" class="hidden-lg" alt="Tamanhos camiseta">
                </div>
            <?php } ?>
        </div>
    </section>

    <?php if($modalCamisa == 'sim'){ ?>
        <input type="checkbox" class="modal-tamanhos-input" id="tamanho-camiseta">
        <div class="modal-tamanhos modal-camiseta">
            <label for="tamanho-camiseta"></label>
            <img src="<?php echo $modalCamisaDesk; ?>" class="hidden-xs" alt="Tamanhos camiseta">
            <img src="<?php echo $modalCamisaMobi; ?>" class="hidden-lg" alt="Tamanhos camiseta">
        </div>
    <?php } 
    if($modalJaqueta == 'sim'){ ?>
        <input type="checkbox" class="modal-tamanhos-input" id="tamanho-jaqueta">
        <div class="modal-tamanhos modal-jaqueta">
            <label for="tamanho-jaqueta"></label>
            <img src="<?php echo $modalJaquetaDesk; ?>" class="hidden-xs" alt="Tamanhos camiseta">
            <img src="<?php echo $modalJaquetaMobi; ?>" class="hidden-lg" alt="Tamanhos camiseta">
        </div>
    <?php } ?>
<?php } ?>