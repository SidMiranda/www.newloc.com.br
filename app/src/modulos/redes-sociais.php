<?php
    $ativarModulo = get_field("ativarRedes", $post->ID);
    if($ativarModulo){

        $bgRedesMobile = get_field('bgRedesMobile', $post->ID);
        $bgRedesDesk = get_field('bgRedesDesk', $post->ID);
        $textoModuloRedes = get_field('textoModuloRedes', $post->ID);
        $iconInstagram = get_field('iconInstagram', $post->ID);
        $iconFacebook = get_field('iconFacebook', $post->ID);


?>
    <section id="redes">
        <div class="bg">
            <img src="<?php echo $bgRedesMobile ?>" alt="Background Redes" class="hidden-lg">
            <img src="<?php echo $bgRedesDesk ?>" alt="Background Redes" class="hidden-xs">
        </div>
        <div class="container">
            <div class="content">
                <h2><?php echo $textoModuloRedes; ?></h2>
                <div class="redes">
                    <img src="<?php echo $iconInstagram; ?>" alt="Redes sociais">
                    <img src="<?php echo $iconFacebook; ?>" alt="Redes sociais">
                </div>
            </div>
        </div>
    </section>
<?php } ?>