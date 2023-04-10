<?php
$ativarModulo = get_field('ativarInformacoesColunas', $post->ID);
$ativar_promo_inf = get_field('ativar_promo', $post->ID);

if ($ativarModulo) {
    $idEtapa =  $post->ID;
    $etapa = get_field('etapa', $idEtapa);

    $tituloCard = get_field('tituloCardInformacoes', 'option');
    $bgDesk = get_field('background_desk_infos', $post->ID);
    $bgCardMobile = get_field('background_mobile_tapume_cidade', 'option');
    $bgCardLinkMobile = get_field('bg_card_link', 'option');

    $titulo = get_field('tituloInfo2Colunas', $post->ID);
    $subtitulo = get_field('subTituloModulo', $post->ID);
    $infomacoes = get_field('tabs', $post->ID);
    $infomacoespadroes = get_field('informacoespadroes', 'option');

    $iconePlus = get_field("iconePlus", $post->ID);
    $iconeCardInfos = get_field("icone_do_card_informacoes", 'option');

    $regulamento = get_field('regulamento');


?>
    <section id="box-informacoes" class="<?php if ($ativar_promo_inf == false) echo "on-inf"; ?> <?php if ($etapa == "outono_vr" && $cidade == "Curitiba") echo "padding-menor" ?>
">
        <div class="container">
            <?php if($bgDesk){ ?> 
                <div class="bg">
                    <img class="hidden-xs" src="<?php echo $bgDesk; ?>" alt="">
                </div>
            <?php } ?>
            <input type="checkbox" id="abreCardInfos" class="card">
            <label for="abreCardInfos" class="hidden-lg">
                <div class="bgCard">
                    <?php if($bgCardLinkMobile) { ?>
                        <img class="hidden-lg" src="<?php echo $bgCardLinkMobile; ?>" alt="">
                    <?php } ?>
                </div>
                <span class="card-link" data-card="infos">
                    <?php if ($iconeCardInfos) { ?><div class="figure"><img src="" data-svg="<?php echo $iconeCardInfos; ?>" alt="Percurso/Recorrido" class="svg"></div><?php } ?>
                    <h2><?php echo $tituloCard; ?></h2>
                </span>
            </label>
            <h1 class="tituloModulo hidden-xs"><?php echo $titulo; ?></h1>
            <div class="card-content" data-card="informacoes">
                <div class="container">
                    <div class="title-infos">
                        <?php foreach ($infomacoes as $i => $infoTab) { ?>
                            <?php
                            $tipo = $infoTab['tipoInfo'];
                            if ($tipo) {
                                $label = $infoTab['nomeInfo'];
                                for ($j = 0; $j < count($infomacoespadroes); $j++) {
                                    if ($infomacoespadroes[$j]['labelDaTab'] == $label) {
                                        $padrao = true;
                                        $titulo_tab = $infomacoespadroes[$j]['tituloDaTab'];
                                        $titulo_tab_formatado = $infomacoespadroes[$j]['labelDaTab'];
                                        $icon = $infomacoespadroes[$j]['iconeDaTab'];
                                        $infos = $infomacoespadroes[$j]['informacoes'];
                                        break;
                                    }
                                }
                            } else {
                                $padrao = false;
                                $titulo_tab = $infoTab['tituloTab'];
                                $titulo_tab_formatado = str_replace(" ", "_", strtolower($titulo_tab));
                                $icon = $infoTab['iconTab'];
                                $infos = $infoTab['infos'];
                            }
                            ?>
                            <div class="tab">
                                <input type="checkbox" name="" id="<?php echo $titulo_tab_formatado; ?>" <?php if ($i == 0) {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                                <label for="<?php echo $titulo_tab_formatado; ?>">
                                    <span>
                                        <?php if ($icon) { ?>
                                            <figure>
                                                <img src="" data-svg="<?php echo $icon; ?>" class="svg" alt="<?php echo $titulo; ?>">
                                            </figure>
                                        <?php } ?>
                                        <?php echo $titulo_tab; ?>
                                    </span>
                                </label>
                                <div class="content <?php echo $titulo_tab_formatado; ?> hidden-lg">
                                    <dl>
                                        <?php foreach ($infos as $info) { ?>
                                            <?php
                                            if ($padrao) {
                                                $titulo = $info['tituloDaInfo'];
                                                $texto = $info['texto'];
                                                $icone = $info['iconeDaInfo'];
                                            } else {
                                                $titulo = $info['tituloInfo'];
                                                $texto = $info['descricaoInfo'];
                                                $icone = $info['iconInfo'];
                                            }
                                            ?>

                                            <dt <?php if (!$titulo) echo 'class="noTitle"'; ?> <?php if ($icone) echo 'class="icone"'; ?>>
                                                <?php if ($icone) { ?> <img src="" data-svg="<?php echo $icone; ?>" alt="<?php echo $titulo; ?>" class="svg"><?php } ?>
                                                <?php echo $titulo; ?>
                                            </dt>
                                            <dd><?php echo $texto; ?></dd>
                                        <?php } ?>
                                    </dl>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="infos-content hidden-xs">
                        <?php foreach ($infomacoes as $i => $infoTab) { ?>
                            <?php
                            $tipo = $infoTab['tipoInfo'];
                            if ($tipo) {
                                $label = $infoTab['nomeInfo'];
                                for ($j = 0; $j < count($infomacoespadroes); $j++) {
                                    if ($infomacoespadroes[$j]['labelDaTab'] == $label) {
                                        $padrao = true;
                                        $titulo_tab = $infomacoespadroes[$j]['tituloDaTab'];
                                        $titulo_tab_formatado = $infomacoespadroes[$j]['labelDaTab'];
                                        $icon = $infomacoespadroes[$j]['iconeDaTab'];
                                        $infos = $infomacoespadroes[$j]['informacoes'];
                                        break;
                                    }
                                }
                            } else {
                                $padrao = false;
                                $titulo_tab = $infoTab['tituloTab'];
                                $titulo_tab_formatado = str_replace(" ", "_", strtolower($titulo_tab));
                                $icon = $infoTab['iconTab'];
                                $infos = $infoTab['infos'];
                            }
                            ?>
                            <div class="content <?php echo $titulo_tab_formatado; ?>">
                                <h2>
                                    <img src="" data-svg="<?php echo $icon; ?>" class="svg" alt="<?php echo $titulo; ?>">
                                    <span><?php echo $titulo_tab; ?></span>
                                </h2>
                                <dl>
                                    <?php foreach ($infos as $info) { ?>
                                        <?php
                                        if ($padrao) {
                                            $titulo = $info['tituloDaInfo'];
                                            $texto = $info['texto'];
                                            $icone = $info['iconeDaInfo'];
                                        } else {
                                            $titulo = $info['tituloInfo'];
                                            $texto = $info['descricaoInfo'];
                                            $icone = $info['iconInfo'];
                                        }
                                        ?>

                                        <dt <?php if (!$titulo) echo 'class="noTitle"'; ?><?php if ($icone) echo 'class="icone"'; ?>>
                                            <?php if ($icone) { ?> <img src="" data-svg="<?php echo $icone; ?>" alt="<?php echo $titulo; ?>" class="svg"><?php } ?>
                                            <?php echo $titulo; ?>
                                        </dt>
                                        <dd><?php echo $texto; ?></dd>
                                    <?php } ?>
                                </dl>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <style>
                #box-informacoes .card-link {
                    <?php if ($bgCard) { ?>background-image: url(<?php echo $bgCard; ?>);
                        <?php } ?>
                    }
                    </style>
        </div>
        <div class="regulamentoModal">
            <div class="close-regulamento"></div>
            <div class="content">
                <?php echo $regulamento; ?>
            </div>
        </div>
    </section>
<?php } ?>