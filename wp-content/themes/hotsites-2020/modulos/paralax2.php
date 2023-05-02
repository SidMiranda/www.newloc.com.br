<?php
    $ativarModulo = get_field("ativarParalax", $post->ID);
    if($ativarModulo){

        $bgParalax = get_field('bgParalax', $post->ID);
        $textoModuloParalax2 = get_field('textoModuloParalax2', $post->ID);


?>  <section id="paralax" style="background-image: url('<?php echo $bgParalax ?>')"></section>
    <section id="compromisso">
        <div class="bg">
            <!-- <img src="<?php //echo $bgCompromissoMobile ?>" alt="Background compromisso" class="hidden-lg">
            <img src="<?php //echo $bgCompromissoDesk ?>" alt="Background compromisso" class="hidden-xs">-->
						<span><?php echo $textoModuloParalax2 ?></span>
        </div>
        <!-- <div class="container">
            <h2><?php //echo $textoModuloCompromisso; ?></h2>
        </div> -->
    </section>
<?php } ?>