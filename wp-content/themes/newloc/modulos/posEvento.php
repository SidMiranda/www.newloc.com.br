<?php
$bgDesktop = get_field("banner_desk", $post->ID);
$bgMobile = get_field("banner_mobile_pos_evento", $post->ID);
$boxes = get_field("box_de_informacoes", $post->ID);
$logosPatrocinio = get_field("logosPatrocinio", $post->ID);
?>

<section class="pos-evento"> 
    <figure>
        <img src=" <?php echo $bgDesktop ?>" alt="" class=" bg-desk hidden-xs">
        <img src="<?php echo $bgMobile; ?>" alt="" class=" bg-mobile hidden-lg">
    </figure>   
    
    <!-- <?php if($logosPatrocinio) { ?>
        <img src="<?php echo $logosPatrocinio; ?>" class="logos-patrocinio">
    <?php } ?> -->
    <!-- <h1 class="texto-realizado">Evento <br> <span>Realizado</span></h1> -->
    <div class="resultados">
        <?php foreach($boxes as $box){ ?>
            <?php
                $icon = $box["icone"]; 
                $titulo = $box["titulo"]; 
                $subtitulo = $box["subtitulo"];
                $link = $box["link"];
            ?>
            <a href="<?php echo $link; ?>" target="_blank">
                <div class="circulo">
                    <img src="<?php echo get_template_directory_uri().'/img/'.$icon.'.svg'; ?>" alt="Icone">
                </div>
                <p><span><?php echo $titulo; ?></span><br><strong><?php echo $subtitulo; ?></strong></p>
            </a>
        <?php } ?>
    </div>  
</section>