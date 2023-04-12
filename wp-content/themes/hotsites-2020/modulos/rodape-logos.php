<?php
    $ativarModulo = get_field("ativarRodapeLogos", $post->ID);
    if($ativarModulo){
        $blocoDePatrocinadores = get_field('bloco_de_logos', $post->ID);
?>
    <section id="rodape-logos">
        <div class="container">
            <div class="row">
                <?php 
                    foreach($blocoDePatrocinadores as $bloco){
                        $tipo = $bloco["tipo_de_patrocinio"];
                        if($tipo){
                            if($layout == '2022'){
                                $logosPadrao = get_field("patrocinadores_2022", "option");
                                $label = $bloco["label_dos_patrocinadores"];
                                for($i=0;$i<count($logosPadrao);$i++){
                                    $tituloLabel = $logosPadrao[$i]['label_2022'];
                                    if($tituloLabel == $label){
                                        $atual = "padrao";
                                        $titulo = $logosPadrao[$i]["titulo_2022"];
                                        $tamanho = $logosPadrao[$i]["tamanho_2022"];
                                        $coluna = $logosPadrao[$i]["colunas_do_bloco_2022"];
                                        $posicao = $logosPadrao[$i]["posicao_do_box_2022"];
                                        $logos = $logosPadrao[$i]["logos_2022"];
                                        break;
                                    }
                                }
                            } else {
                                $logosPadrao = get_field("patrocinadores", "option");
                                $label = $bloco["label_dos_patrocinadores"];
                                for($i=0;$i<count($logosPadrao);$i++){
                                    $tituloLabel = $logosPadrao[$i]['label'];
                                    if($tituloLabel == $label){
                                        $atual = "padrao";
                                        $titulo = $logosPadrao[$i]["titulo"];
                                        $tamanho = $logosPadrao[$i]["tamanho"];
                                        $coluna = $logosPadrao[$i]["colunas_do_bloco"];
                                        $posicao = $logosPadrao[$i]["posicao_do_box"];
                                        $logos = $logosPadrao[$i]["logos"];
                                        break;
                                    }
                                }
                            }
                        }else{
                            $atual = "custom";
                            $titulo = $bloco['titulo_do_modulo'];
                            $tamanho = $bloco['tamanho_de_logos'];
                            $coluna = $bloco["colunas_do_bloco"];
                            $posicao = $bloco['posicao_do_box'];
                            $logos = $bloco['logos'];
                        }
                ?>
                        <div class="widget_acf" style="width: <?php echo $coluna; ?>">
                            <div class="logo-container rodape-logos-inner <?php echo $posicao; ?>" <?php echo $atual; ?>>
                                <div class="titulo"><?php echo $titulo; ?></div>
                                <div class="logos <?php echo $tamanho.count($logos); ?>"  >
                                    <?php foreach ($logos as $logo) {
                                        if($tipo == "padrao"){
                                            if($layout == '2022'){
                                                $link = $logo["url_2022"];
                                                $imagemlogo = $logo['foto_2022'];
                                                $titlelogo = $logo["fotoTitle_2022"];
                                            } else {
                                                $link = $logo["url"];
                                                $imagemlogo = $logo['foto'];
                                                $titlelogo = $logo["fotoTitle"];
                                            }
                                        }else{
                                            $link = $logo["link"];
                                            $imagemlogo = $logo['foto'];
                                            $titlelogo = $logo["titulo_da_foto"];
                                            $alternateTittleModule = $logo["titulo_do_modulo_alternativo"];
                                        }
                                        ?>
                                        <a href="<?php echo $link; ?>" class="<?php echo $tamanho; ?>" style="background: <?php echo $bgLogo; ?>" target="_blank">
                                            <?php if($alternateTittleModule) { ?>
                                                <div class="titulo titulo-alternativo"><?php echo $alternateTittleModule; ?></div>
                                            <?php } ?>
                                            <div class="logo">
                                                <img src="<?php echo $imagemlogo; ?>" alt="<?php echo $titlelogo; ?>" title="<?php echo $titlelogo; ?>">
                                            </div>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>  
    </section>
<?php } ?>