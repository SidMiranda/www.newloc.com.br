<?php
    $ativarModulo = get_field("ativarCompromisso", $post->ID);
    if($ativarModulo){

        $bgCompromissoMobile = get_field('bgCompromissoMobile', $post->ID);
        $bgCompromissoDesk = get_field('bgCompromissoDesk', $post->ID);
        $textoModuloCompromisso = get_field('textoModuloCompromisso', $post->ID);


?>  <section id="paralax" style="background-image: url('<?php echo $bgCompromissoDesk ?>')"></section>
    <section id="compromisso">
        <div class="bg">
            <!-- <img src="<?php //echo $bgCompromissoMobile ?>" alt="Background compromisso" class="hidden-lg">
            <img src="<?php //echo $bgCompromissoDesk ?>" alt="Background compromisso" class="hidden-xs">-->
						<span>COMPROMISSO COM A QUALIDADE</span>
        </div>
        <!-- <div class="container">
            <h2><?php //echo $textoModuloCompromisso; ?></h2>
        </div> -->
    </section>
<?php } ?>