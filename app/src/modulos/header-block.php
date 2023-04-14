<?php
    $ativarModulo = get_field('ativarHeader', $post->ID);
    if($ativarModulo){

        $logo = get_field('logoGeral', $post->ID);
        $logoMobile = get_field('logoGeral', $post->ID);
        $logoPatrocinador = get_field('logoPatrocinador', $post->ID);
        $dia = get_field('diaEvento', $post->ID);
        $local = get_field('localText', $post->ID);
        $ano = get_field('anoEvento', $post->ID);

        $percursos = get_field('percursosHeader', $post->ID);
        $links = get_field('linksNav', $post->ID);
        $linksSubmenu = get_field('linksSubMenu', $post->ID);
        $linkInscrevase = get_field('linkInscrevaseHeader', $post->ID);
        $linkDots = get_field('linkDots', $post->ID);
        $btnInscrevase = get_field('inscrevaseHeader', $post->ID);

        $bandeira = get_field('bandeira', $post->ID);
        $linkbandeira = get_field('linkBandeira', $post->ID);

        $navigator = false;
        // $bolinhasParaOutraPag = get_field('tipoSubMenu', $post->ID);
?>

<header id="header" class="header-block">
    <div class="container">
        <input type="checkbox" id="burguer-menu">
        <label for="burguer-menu">
            <span></span>
        </label>
        <?php if($linkbandeira){ ?>
                <a href="<?php echo $linkbandeira; ?>" class="bandeira">
                    <img src="<?php echo $bandeira; ?>" alt="Idioma ">
                </a>
        <?php } ?>
        <div class="logo">
            <a href="<?php echo get_site_url(); ?>">
                <?php if($logoPatrocinador){ ?>
                    <img src="<?php echo $logoPatrocinador; ?>" data-svg="<?php echo $logoPatrocinador; ?>" class="patrocinador">
                <?php } ?>
                <div class="img-logo">
                    <img src="<?php echo $logo; ?>" class="hidden-xs">
                    <img src="<?php echo $logoMobile; ?>" class="hidden-lg">
                </div>
            </a>
            <div class="infos">
                <div class="cidade hidden-xs"><span><?php echo $local; ?></div>
                <div class="cont">
                    <div class="distancias">
                        <?php echo $percursos; ?>
                    </div>
                    <div class="data">
                        <?php echo $dia; ?>
                    </div>
                </div>
            </div>
            
        </div>
        <input type="checkbox" id="close-header">
        <label for="close-header" class="alterar-cidade hidden-lg hidden-xs">
            <img src="" data-svg="<?php echo get_template_directory_uri(); ?>/img/icon_fechar.svg" alt="Fechar Modal" class="svg">
        </label>
        <nav>
            <label for="burguer-menu">
                <span class="bg"></span>
            </label>
            <div class="menu">
                <?php foreach($links as $link){ ?>
                    <?php
                        $texto = $link['textoLink'];
                        $linkAtual = $link['link'];
                        $mobile = $link['mobile'];
                    ?>
                    <a href="<?php echo $linkAtual; ?>" <?php if(!$mobile) echo 'class="hidden-xs"'; ?>>
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
                        <img src="" data-svg="<?php echo get_template_directory_uri(); ?>/img/provas-only.svg" class="svg" alt="Clube O2">
                        <img src="" data-svg="<?php echo get_template_directory_uri(); ?>/img/logo_clubeO2.svg" class="svg" alt="Clube O2">
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
        <a href="<?php echo $linkInscrevase; ?>" class="inscreva-se on hidden-lg" target="_blank">
            <span><?php echo $btnInscrevase; ?></span>
        </a>
    </div>

    
</header>
<!-- <div class="inscreva-se mobile">
    <a href="<?php echo $linkInscrevase; ?>" target="_blank"><?php echo $btnInscrevase; ?></a>
</div> -->
<?php } ?>