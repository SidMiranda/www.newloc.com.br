<?php
    $ativarModulo = get_field('ativarHeader', $post->ID);
    if($ativarModulo){

        // $logo = get_field('logoHeader', $post->ID);
        $logo = get_field('logoGeral', $post->ID);
        $imgEtapaHeader = get_field('imgEtapaHeader', $post->ID);
        $dia = get_field('diaEvento', $post->ID);
        $ano = get_field('anoEvento', $post->ID);

        $percursos = get_field('percursosHeader', $post->ID);
        $links = get_field('menu_pos_evento', $post->ID);
        $linksSubmenu = get_field('linksSubMenu', $post->ID);
        $linkDots = get_field('linkDots', $post->ID);
        $btnInscrevase = get_field('texto_proxima_etapa', $post->ID);
        $linkInscrevase = get_field('link_proxima_etapa', $post->ID);

        $bandeira = get_field('bandeira', $post->ID);
        $linkbandeira = get_field('linkBandeira', $post->ID);

        $navigator = true;
        $bolinhasParaOutraPag = get_field('tipoSubMenu', $post->ID);
?>

<header id="header" class="header-block header-posevento">
    <input type="checkbox" id="burguer-menu">
    <label for="burguer-menu" class="burguer-pos-evento">
        <span></span>
    </label>
    <div class="logo">
        <a href="<?php echo get_site_url(); ?>">
            <div class="img-logo">
                <img src="<?php echo $logo; ?>" class="teste">
            </div>
        </a>
        <?php if($imgEtapaHeader) { ?>
            <div class="etapa hidden-xs">
                <img src="<?php echo $imgEtapaHeader; ?>" alt="Etapa <?php the_title(); ?>">
            </div>
        <?php } ?>
        <!-- <div class="infos">
            <div class="data">
                <?php echo $dia; ?><br />
                <em>Realizado!</em>
            </div>
            <div class="distancias">
                <?php echo $percursos; ?>
            </div>
        </div> -->
    </div>
    <nav>
        <label for="burguer-menu">
            <span class="bg"></span>
        </label>
        <div class="menu">
            <?php foreach($links as $link){ ?>
                <?php
                    $texto = $link['titulo'];
                    $linkAtual = $link['link'];  
                ?>
                <a href="<?php echo $linkAtual; ?>" target="_blank">
                    <?php echo $texto; ?>
                </a>
            <?php } ?>
            <?php
                $eventoClubeO2 = get_field("evento_clube_o2");
                $eventoClubeO2Link = get_field("link_do_clube_o2", "option");
                if($eventoClubeO2){
                    $eventoClubeO2Link = get_field("link_do_clube_o2", "option");
            ?>
                <a href="<?php echo $eventoClubeO2Link; ?>" target="_blank" class="clubeO2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/provas-only.svg" class="svg" alt="Clube O2">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_clubeO2.svg" class="svg" alt="Clube O2">
                </a>
            <?php } ?>
            <?php if($linkbandeira){ ?>
                <a href="<?php echo $linkbandeira; ?>" class="bandeira">
                    <img src="<?php echo $bandeira; ?>" alt="Idioma ">
                </a>
            <?php } ?>
            <hr class="hidden-xs">
        </div>
    </nav>

    <?php if($linkbandeira){ ?>
        <a href="<?php echo $linkbandeira; ?>" class="bandeira">
            <img src="<?php echo $bandeira; ?>" alt="Idioma ">
        </a>
    <?php } ?>
    
    <input type="checkbox" id="close-header" >
    <?php if($bolinhasParaOutraPag){ ?>
        <label for="close-header" class="dots">
            <a href="<?php echo $linkDots; ?>" class="dots">
                <span></span>
            </a>
        </label>
    <?php }else{ ?>
        <label for="close-header" class="dots">
            <span></span>
        </label>
        <div class="submenu">
            <label for="close-header">
                <span class="bg"></span>
            </label>
            <div class="links">
                <?php foreach($linksSubmenu as $linkDot){ ?>
                    <?php
                        $texto = $linkDot['textoLink'];
                        $linkAtual = $linkDot['link'];    
                    ?>
                    <a href="<?php echo $linkAtual; ?>">
                        <?php echo $texto; ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <a href="<?php echo $linkInscrevase; ?>" class="inscreva-se on" target="_blank">
        <span><?php echo $btnInscrevase; ?></span>
    </a>
</header>
<div class="inscreva-se mobile">
    <a href="<?php echo $linkInscrevase; ?>" target="_blank"><?php echo $btnInscrevase; ?></a>
</div>

<?php } ?>